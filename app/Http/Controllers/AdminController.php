<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Grades;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count = DB::table('users')->where('role', 3)->count();
        $new = DB::table('users')->where('newold', 'New Applicant')->where('role',3)->count();
        $old = DB::table('users')->where('newold', 'Old Applicant')->where('role',3)->count();
        return view('admin.index', compact('count', 'new', 'old'));
    }

    public function perform()
    {
        Session::flush();
        
        Auth::logout();

        return redirect('applogin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function tncs()
    {
        $user = User::where('school', 'Tuguegarao North Central School')->where('role', 3)->get();
        return view('admin.tncs', compact('user'));
    }

    public function pallua()
    {
        $user = User::where('school', 'Pallua Elementary School')->where('role', 3)->get();
        return view('admin.pallua', compact('user'));
    }

    public function caritan()
    {
        $user = User::where('school', 'Caritan Norte Elementary School')->where('role', 3)->get();
        return view('admin.caritan', compact('user'));
    }

    public function atulayan()
    {
        $user = User::where('school', 'Atulayan Elementary School')->where('role', 3)->get();
        return view('admin.atulayan', compact('user'));
    }

    public function annafunan()
    {
        $user = User::where('school', 'Annafunan Integrated School (Elem)')->where('role', 3)->get();
        return view('admin.annafunan', compact('user'));
    }

    public function bagay()
    {
        $user = User::where('school', 'Bagay Elementary School')->where('role', 3)->get();
        return view('admin.bagay', compact('user'));
    }

    public function tecs()
    {
        $user = User::where('school', 'Tuguegarao East Central School')->where('role', 3)
                            ->join('user_grades', 'user_grades.user_id', '=', 'users.id')
                            ->get(['users.name', 'users.address', 'users.email', 'users.con_number', 'users.degree', 'users.newold', 'users.major', 'users.unique_code', 'user_grades.education', 'user_grades.teaching_exp', 'user_grades.st_skills', 'user_grades.interview', 'user_grades.demo_teach', 'user_grades.out_achiev', 'user_grades.comm_skills', 'user_grades.total']);
        return view('admin.tecs', compact('user'));
    }

    public function taggad()
    {
        $user = User::where('school', 'Tagga-Dadda Elementary School')->where('role', 3)->get();
        return view('admin.taggad', compact('user'));
    }

    public function dadda()
    {
        $user = User::where('school', 'Dadda Elementary School')->where('role', 3)->get();
        return view('admin.dadda', compact('user'));
    }

    public function capatan()
    {
        $user = User::where('school', 'Capatan Integrated School (Elem)')->where('role', 3)->get();
        return view('admin.capatan', compact('user'));
    }

    public function namabbalan()
    {
        $user = User::where('school', 'Namabbalan Integrated School (Elem)')->where('role', 3)->get();
        return view('admin.namabbalan', compact('user'));
    }

    public function libag()
    {
        $user = User::where('school', 'Libag Integrated School (Elem)')->where('role', 3)->get();
        return view('admin.libag', compact('user'));
    }

    public function gosi()
    {
        $user = User::where('school', 'Gosi Elementary School')->where('role', 3)->get();
        return view('admin.gosi', compact('user'));
    }

    public function twcs()
    {
        $user = User::where('school', 'Tuguegarao West Central School')->where('role', 3)->get();
        return view('admin.twcs', compact('user'));
    }

    public function buntun()
    {
        $user = User::where('school', 'Buntun Elementary School')->where('role', 3)->get();
        return view('admin.buntun', compact('user'));
    }

    public function ugac()
    {
        $user = User::where('school', 'Ugac Elementary School')->where('role', 3)->get();
        return view('admin.ugac', compact('user'));
    }

    public function sangab()
    {
        $user = User::where('school', 'San Gabriel Elementary School')->where('role', 3)->get();
        return view('admin.sangab', compact('user'));
    }

    public function catnuevo()
    {
        $user = User::where('school', 'Cataggaman Nuevo Elementary School')->where('role', 3)->get();
        return view('admin.catnuevo', compact('user'));
    }

    public function catpardo()
    {
        $user = User::where('school', 'Cataggaman Pardo Elementary School')->where('role', 3)->get();
        return view('admin.catpardo', compact('user'));
    }

    public function cates()
    {
        $user = User::where('school', 'Cataggaman Elementary School')->where('role', 3)->get();
        return view('admin.cates', compact('user'));
    }

    public function tnecs()
    {
        $user = User::where('school', 'Tuguegarao NorthEast Central School')->where('role', 3)->get();
        return view('admin.tnecs', compact('user'));
    }

    public function carig()
    {
        $user = User::where('school', 'Carig Integrated School (Elem)')->where('role', 3)->get();
        return view('admin.carig', compact('user'));
    }

    public function carigno()
    {
        $user = User::where('school', 'Carig Norte Elementary School')->where('role', 3)->get();
        return view('admin.carigno', compact('user'));
    }

    public function linao()
    {
        $user = User::where('school', 'Linao Elementary School')->where('role', 3)->get();
        return view('admin.linao', compact('user'));
    }

    public function larional()
    {
        $user = User::where('school', 'Larion Alto Elementary School')->where('role', 3)->get();
        return view('admin.larional', compact('user'));
    }

    public function larionba()
    {
        $user = User::where('school', 'Larion Bajo Elementary School')->where('role', 3)->get();
        return view('admin.larionba', compact('user'));
    }

    public function balzain()
    {
        $user = User::where('school', 'Balzain East Elementary School')->where('role', 3)->get();
        return view('admin.balzain', compact('user'));
    }

    public function pengue()
    {
        $user = User::where('school', 'Pengue-Ruyu Elementary School')->where('role', 3)->get();
        return view('admin.pengue', compact('user'));
    }

    public function cnhs()
    {
        $user = User::where('school', 'Cagayan National High School (JHS)')->where('role', 3)->get();
        return view('admin.cnhs', compact('user'));
    }

    public function catnhs()
    {
        $user = User::where('school', 'Cataggaman National High School (JHS)')->where('role', 3)->get();
        return view('admin.catnhs', compact('user'));
    }

    public function lnhs()
    {
        $user = User::where('school', 'Linao National High School (JHS)')->where('role', 3)->get();
        return view('admin.lnhs', compact('user'));
    }

    public function gnhs()
    {
        $user = User::where('school', 'Gosi National High School (JHS)')->where('role', 3)->get();
        return view('admin.gnhs', compact('user'));
    }

    public function tugwest()
    {
        $user = User::where('school', 'Tuguegarao City West High School (JHS)')->where('role', 3)->get();
        return view('admin.tugwest', compact('user'));
    }

    public function tugscie()
    {
        $user = User::where('school', 'Tuguegarao City Science High School (JHS)')->where('role', 3)->get();
        return view('admin.tugscie', compact('user'));
    }

    public function annafunanis()
    {
        $user = User::where('school', 'Annafunan Integrated School (JHS)')->where('role', 3)->get();
        return view('admin.annafunanis', compact('user'));
    }

    public function carigis()
    {
        $user = User::where('school', 'Carig Integrated School (JHS)')->where('role', 3)->get();
        return view('admin.carigis', compact('user'));
    }

    public function libagis()
    {
        $user = User::where('school', 'Libag Integrated School (JHS)')->where('role', 3)->get();
        return view('admin.libagis', compact('user'));
    }

    public function namabbalanis()
    {
        $user = User::where('school', 'Namabbalan Integrated School (JHS)')->where('role', 3)->get();
        return view('admin.namabbalanis', compact('user'));
    }

    public function capatanis()
    {
        $user = User::where('school', 'Capatan Integrated School (JHS)')->where('role', 3)->get();
        return view('admin.capatanis', compact('user'));
    }

    public function cnhsshs()
    {
        $user = User::where('school', 'Cagayan National High School (SHS)')->where('role', 3)
                            ->join('user_grades', 'user_grades.user_id', '=', 'users.id')
                            ->get(['users.name', 'users.address', 'users.email', 'users.con_number', 'users.degree', 'users.newold', 'users.major', 'users.unique_code', 'user_grades.education', 'user_grades.teaching_exp', 'user_grades.st_skills', 'user_grades.interview', 'user_grades.demo_teach', 'user_grades.out_achiev', 'user_grades.comm_skills', 'user_grades.total']);
        return view('admin.cnhsshs', compact('user'));
    }

    public function catnhsshs()
    {
        $user = User::where('school', 'Cataggaman National High School (SHS)')->where('role', 3)->get();
        return view('admin.catnhsshs', compact('user'));
    }

    public function lnhsshs()
    {
        $user = User::where('school', 'Linao National High School (SHS)')->where('role', 3)->get();
        return view('admin.lnhsshs', compact('user'));
    }

    public function gnhsshs()
    {
        $user = User::where('school', 'Gosi National High School (SHS)')->where('role', 3)->get();
        return view('admin.gnhsshs', compact('user'));
    }

    public function tugwestshs()
    {
        $user = User::where('school', 'Tuguegarao City West High School (SHS)')->where('role', 3)->get();
        return view('admin.tugwestshs', compact('user'));
    }

    public function tugscieshs()
    {
        $user = User::where('school', 'Tuguegarao City Science High School (SHS)')->where('role', 3)->get();
        return view('admin.tugscieshs', compact('user'));
    }

    public function carigishs()
    {
        $user = User::where('school', 'Carig Integrated School (SHS)')->where('role', 3)->get();
        return view('admin.carigishs', compact('user'));
    }
}
