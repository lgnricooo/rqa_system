<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class SecretaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('secretary.index');
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

    public function perform()
    {
        Session::flush();
        
        Auth::logout();

        return redirect('applogin');
    }

    public function tncs()
    {
        $user = User::where('school', 'Tuguegarao North Central School')->where('role', 3)->get();
        return view('secretary.tncs', compact('user'));
    }

    public function pallua()
    {
        $user = User::where('school', 'Pallua Elementary School')->where('role', 3)->get();
        return view('secretary.pallua', compact('user'));
    }

    public function caritan()
    {
        $user = User::where('school', 'Caritan Norte Elementary School')->where('role', 3)->get();
        return view('secretary.caritan', compact('user'));
    }

    public function atulayan()
    {
        $user = User::where('school', 'Atulayan Elementary School')->where('role', 3)->get();
        return view('secretary.atulayan', compact('user'));
    }

    public function annafunan()
    {
        $user = User::where('school', 'Annafunan Integrated School (Elem)')->where('role', 3)->get();
        return view('secretary.annafunan', compact('user'));
    }

    public function bagay()
    {
        $user = User::where('school', 'Bagay Elementary School')->where('role', 3)->get();
        return view('secretary.bagay', compact('user'));
    }

    public function tecs()
    {
        $user = User::where('school', 'Tuguegarao East Central School')->where('role', 3)->get();
        return view('secretary.tecs', compact('user'));
    }

    public function taggad()
    {
        $user = User::where('school', 'Tagga-Dadda Elementary School')->where('role', 3)->get();
        return view('secretary.taggad', compact('user'));
    }

    public function dadda()
    {
        $user = User::where('school', 'Dadda Elementary School')->where('role', 3)->get();
        return view('secretary.dadda', compact('user'));
    }

    public function capatan()
    {
        $user = User::where('school', 'Capatan Integrated School (Elem)')->where('role', 3)->get();
        return view('secretary.capatan', compact('user'));
    }

    public function namabbalan()
    {
        $user = User::where('school', 'Namabbalan Integrated School (Elem)')->where('role', 3)->get();
        return view('secretary.namabbalan', compact('user'));
    }

    public function libag()
    {
        $user = User::where('school', 'Libag Integrated School (Elem)')->where('role', 3)->get();
        return view('secretary.libag', compact('user'));
    }

    public function gosi()
    {
        $user = User::where('school', 'Gosi Elementary School')->where('role', 3)->get();
        return view('secretary.gosi', compact('user'));
    }

    public function twcs()
    {
        $user = User::where('school', 'Tuguegarao West Central School')->where('role', 3)->get();
        return view('secretary.twcs', compact('user'));
    }

    public function buntun()
    {
        $user = User::where('school', 'Buntun Elementary School')->where('role', 3)->get();
        return view('secretary.buntun', compact('user'));
    }

    public function ugac()
    {
        $user = User::where('school', 'Ugac Elementary School')->where('role', 3)->get();
        return view('secretary.ugac', compact('user'));
    }

    public function sangab()
    {
        $user = User::where('school', 'San Gabriel Elementary School')->where('role', 3)->get();
        return view('secretary.sangab', compact('user'));
    }

    public function catnuevo()
    {
        $user = User::where('school', 'Cataggaman Nuevo Elementary School')->where('role', 3)->get();
        return view('secretary.catnuevo', compact('user'));
    }

    public function catpardo()
    {
        $user = User::where('school', 'Cataggaman Pardo Elementary School')->where('role', 3)->get();
        return view('secretary.catpardo', compact('user'));
    }

    public function cates()
    {
        $user = User::where('school', 'Cataggaman Elementary School')->where('role', 3)->get();
        return view('secretary.cates', compact('user'));
    }

    public function tnecs()
    {
        $user = User::where('school', 'Tuguegarao NorthEast Central School')->where('role', 3)->get();
        return view('secretary.tnecs', compact('user'));
    }

    public function carig()
    {
        $user = User::where('school', 'Carig Integrated School (Elem)')->where('role', 3)->get();
        return view('secretary.carig', compact('user'));
    }

    public function carigno()
    {
        $user = User::where('school', 'Carig Norte Elementary School')->where('role', 3)->get();
        return view('secretary.carigno', compact('user'));
    }

    public function linao()
    {
        $user = User::where('school', 'Linao Elementary School')->where('role', 3)->get();
        return view('secretary.linao', compact('user'));
    }

    public function larional()
    {
        $user = User::where('school', 'Larion Alto Elementary School')->where('role', 3)->get();
        return view('secretary.larional', compact('user'));
    }

    public function larionba()
    {
        $user = User::where('school', 'Larion Bajo Elementary School')->where('role', 3)->get();
        return view('secretary.larionba', compact('user'));
    }

    public function balzain()
    {
        $user = User::where('school', 'Balzain East Elementary School')->where('role', 3)->get();
        return view('secretary.balzain', compact('user'));
    }

    public function pengue()
    {
        $user = User::where('school', 'Pengue-Ruyu Elementary School')->where('role', 3)->get();
        return view('secretary.pengue', compact('user'));
    }

    public function cnhs()
    {
        $user = User::where('school', 'Cagayan National High School (JHS)')->where('role', 3)->get();
        return view('secretary.cnhs', compact('user'));
    }

    public function catnhs()
    {
        $user = User::where('school', 'Cataggaman National High School (JHS)')->where('role', 3)->get();
        return view('secretary.catnhs', compact('user'));
    }

    public function lnhs()
    {
        $user = User::where('school', 'Linao National High School (JHS)')->where('role', 3)->get();
        return view('secretary.lnhs', compact('user'));
    }

    public function gnhs()
    {
        $user = User::where('school', 'Gosi National High School (JHS)')->where('role', 3)->get();
        return view('secretary.gnhs', compact('user'));
    }

    public function tugwest()
    {
        $user = User::where('school', 'Tuguegarao City West High School (JHS)')->where('role', 3)->get();
        return view('secretary.tugwest', compact('user'));
    }

    public function tugscie()
    {
        $user = User::where('school', 'Tuguegarao City Science High School (JHS)')->where('role', 3)->get();
        return view('secretary.tugscie', compact('user'));
    }

    public function annafunanis()
    {
        $user = User::where('school', 'Annafunan Integrated School (JHS)')->where('role', 3)->get();
        return view('secretary.annafunanis', compact('user'));
    }

    public function carigis()
    {
        $user = User::where('school', 'Carig Integrated School (JHS)')->where('role', 3)->get();
        return view('secretary.carigis', compact('user'));
    }

    public function libagis()
    {
        $user = User::where('school', 'Libag Integrated School (JHS)')->where('role', 3)->get();
        return view('secretary.libagis', compact('user'));
    }

    public function namabbalanis()
    {
        $user = User::where('school', 'Namabbalan Integrated School (JHS)')->where('role', 3)->get();
        return view('secretary.namabbalanis', compact('user'));
    }

    public function capatanis()
    {
        $user = User::where('school', 'Capatan Integrated School (JHS)')->where('role', 3)->get();
        return view('secretary.capatanis', compact('user'));
    }

    public function cnhsshs()
    {
        $user = User::where('school', 'Cagayan National High School (SHS)')->where('role', 3)->get();
        return view('secretary.cnhsshs', compact('user'));
    }

    public function catnhsshs()
    {
        $user = User::where('school', 'Cataggaman National High School (SHS)')->where('role', 3)->get();
        return view('secretary.catnhsshs', compact('user'));
    }

    public function lnhsshs()
    {
        $user = User::where('school', 'Linao National High School (SHS)')->where('role', 3)->get();
        return view('secretary.lnhsshs', compact('user'));
    }

    public function gnhsshs()
    {
        $user = User::where('school', 'Gosi National High School (SHS)')->where('role', 3)->get();
        return view('secretary.gnhsshs', compact('user'));
    }

    public function tugwestshs()
    {
        $user = User::where('school', 'Tuguegarao City West High School (SHS)')->where('role', 3)->get();
        return view('secretary.tugwestshs', compact('user'));
    }

    public function tugscieshs()
    {
        $user = User::where('school', 'Tuguegarao City Science High School (SHS)')->where('role', 3)->get();
        return view('secretary.tugscieshs', compact('user'));
    }

    public function carigishs()
    {
        $user = User::where('school', 'Carig Integrated School (SHS)')->where('role', 3)->get();
        return view('secretary.carigishs', compact('user'));
    }
}
