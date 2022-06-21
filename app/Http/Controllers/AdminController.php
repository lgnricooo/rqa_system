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
        $grades = DB::table('user_grades')->count();
        return view('admin.index', compact('count', 'new', 'old', 'grades'));
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

    public function listapplicants()
    {
        $user = DB::table('users')->where('role', 3)->get();
        return view('admin.list', compact('user'));
    }

    public function tncs()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Tuguegarao North Central School')
        ->where('users.role', 3)->get();
        return view('admin.tncs', compact('user'));
    }

    public function pallua()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Pallua Elementary School')
        ->where('users.role', 3)->get();
        return view('admin.pallua', compact('user'));
    }

    public function caritan()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Caritan Norte Elementary School')
        ->where('users.role', 3)->get();
        return view('admin.caritan', compact('user'));
    }

    public function atulayan()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Atulayan Elementary School')
        ->where('users.role', 3)->get();
        return view('admin.atulayan', compact('user'));
    }

    public function annafunan()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Annafunan Integrated School (Elem)')
        ->where('users.role', 3)->get();
        return view('admin.annafunan', compact('user'));
    }

    public function bagay()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Bagay Elementary School')
        ->where('users.role', 3)->get();
        return view('admin.bagay', compact('user'));
    }

    public function tecs()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Tuguegarao East Central School')
        ->where('users.role', 3)->get();
        return view('admin.tecs', compact('user'));
    }

    public function taggad()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Tagga-Dadda Elementary School')
        ->where('users.role', 3)->get();
        return view('admin.taggad', compact('user'));
    }

    public function dadda()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Dadda Elementary School')
        ->where('users.role', 3)->get();
        return view('admin.dadda', compact('user'));
    }

    public function capatan()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Capatan Integrated School (Elem)')
        ->where('users.role', 3)->get();;
        return view('admin.capatan', compact('user'));
    }

    public function namabbalan()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Namabbalan Integrated School (Elem)')
        ->where('users.role', 3)->get();;
        return view('admin.namabbalan', compact('user'));
    }

    public function libag()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Libag Integrated School (Elem)')
        ->where('users.role', 3)->get();;
        return view('admin.libag', compact('user'));
    }

    public function gosi()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Gosi Elementary School')
        ->where('users.role', 3)->get();;
        return view('admin.gosi', compact('user'));
    }

    public function twcs()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Tuguegarao West Central School')
        ->where('users.role', 3)->get();
        return view('admin.twcs', compact('user'));
    }

    public function buntun()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Buntun Elementary School')
        ->where('users.role', 3)->get();
        return view('admin.buntun', compact('user'));
    }

    public function ugac()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Ugac Elementary School')
        ->where('users.role', 3)->get();
        return view('admin.ugac', compact('user'));
    }

    public function sangab()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'San Gabriel Elementary School')
        ->where('users.role', 3)->get();
        return view('admin.sangab', compact('user'));
    }

    public function catnuevo()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Cataggaman Nuevo Elementary School')
        ->where('users.role', 3)->get();;
        return view('admin.catnuevo', compact('user'));
    }

    public function catpardo()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Cataggaman Pardo Elementary School')
        ->where('users.role', 3)->get();;
        return view('admin.catpardo', compact('user'));
    }

    public function cates()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Cataggaman Elementary School')
        ->where('users.role', 3)->get();;
        return view('admin.cates', compact('user'));
    }

    public function tnecs()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Tuguegarao NorthEast Central School')
        ->where('users.role', 3)->get();;
        return view('admin.tnecs', compact('user'));
    }

    public function carig()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Carig Integrated School (Elem)')
        ->where('users.role', 3)->get();;
        return view('admin.carig', compact('user'));
    }

    public function carigno()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Carig Norte Elementary School')
        ->where('users.role', 3)->get();
        return view('admin.carigno', compact('user'));
    }

    public function linao()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Linao Elementary School')
        ->where('users.role', 3)->get();
        return view('admin.linao', compact('user'));
    }

    public function larional()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Larion Alto Elementary School')
        ->where('users.role', 3)->get();
        return view('admin.larional', compact('user'));
    }

    public function larionba()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Larion Bajo Elementary School')
        ->where('users.role', 3)->get();
        return view('admin.larionba', compact('user'));
    }

    public function balzain()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Balzain East Elementary School')
        ->where('users.role', 3)->get();
        return view('admin.balzain', compact('user'));
    }

    public function pengue()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Pengue-Ruyu Elementary School')
        ->where('users.role', 3)->get();
        return view('admin.pengue', compact('user'));
    }

    public function cnhs()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Cagayan National High School (JHS)')
        ->where('users.role', 3)->get();
        return view('admin.cnhs', compact('user'));
    }

    public function catnhs()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Cataggaman National High School (JHS)')
        ->where('users.role', 3)->get();
        return view('admin.catnhs', compact('user'));
    }

    public function lnhs()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Linao National High School (JHS)')
        ->where('users.role', 3)->get();
        return view('admin.lnhs', compact('user'));
    }

    public function gnhs()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Gosi National High School (JHS)')
        ->where('users.role', 3)->get();
        return view('admin.gnhs', compact('user'));
    }

    public function tugwest()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Tuguegarao City West High School (JHS)')
        ->where('users.role', 3)->get();
        return view('admin.tugwest', compact('user'));
    }

    public function tugscie()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Tuguegarao City Science High School (JHS)')
        ->where('users.role', 3)->get();
        return view('admin.tugscie', compact('user'));
    }

    public function annafunanis()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Annafunan Integrated School (JHS)')
        ->where('users.role', 3)->get();
        return view('admin.annafunanis', compact('user'));
    }

    public function carigis()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Carig Integrated School (JHS)')
        ->where('users.role', 3)->get();
        return view('admin.carigis', compact('user'));
    }

    public function libagis()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Libag Integrated School (JHS)')
        ->where('users.role', 3)->get();;
        return view('admin.libagis', compact('user'));
    }

    public function namabbalanis()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Namabbalan Integrated School (JHS)')
        ->where('users.role', 3)->get();
        return view('admin.namabbalanis', compact('user'));
    }

    public function capatanis()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Capatan Integrated School (JHS)')
        ->where('users.role', 3)->get();
        return view('admin.capatanis', compact('user'));
    }

    public function cnhsshs()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Cagayan National High School (SHS)')
        ->where('users.role', 3)->get();       
        return view('admin.cnhsshs', compact('user'));
    }

    public function catnhsshs()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Cataggaman National High School (SHS)')
        ->where('users.role', 3)->get();
        return view('admin.catnhsshs', compact('user'));
    }

    public function lnhsshs()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Linao National High School (SHS)')
        ->where('users.role', 3)->get();
        return view('admin.lnhsshs', compact('user'));
    }

    public function gnhsshs()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Gosi National High School (SHS)')
        ->where('users.role', 3)->get();
        return view('admin.gnhsshs', compact('user'));
    }

    public function tugwestshs()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Tuguegarao City West High School (SHS)')
        ->where('users.role', 3)->get();
        return view('admin.tugwestshs', compact('user'));
    }

    public function tugscieshs()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Tuguegarao City Science High School (SHS)')
        ->where('users.role', 3)->get();
        return view('admin.tugscieshs', compact('user'));
    }

    public function carigishs()
    {
        $user = DB::table('users')
        ->join('user_grades', 'users.id', '=', 'user_grades.user_id')
        ->where('users.school', 'Carig Integrated School (SHS)')
        ->where('users.role', 3)->get();
        return view('admin.carigishs', compact('user'));
    }
}
