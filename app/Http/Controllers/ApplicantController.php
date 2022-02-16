<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class ApplicantController extends Controller
{
    
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('appregister');
    }

    public function applogin()
    {
        return view('applogin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'newold' => ['required'],
            'retain' => ['nullable'],
            'ept' => ['nullable'],
            'ept_date' => ['nullable'],
            'unique_code' => ['required'],
            'name' => ['required'],
            'email' => ['required'],
            'alt_email' => ['required'],
            'con_number' => ['required'],
            'address' => ['required'],
            'degree' => ['required'],
            'major' => ['required'],
            'minor' => ['nullable'],
            'level' => ['required'],
            'district' => ['nullable'],
            'school' => ['required'],
            'password' => ['required'],
        ]);
        
        $userapplicant = new User();
        $userapplicant->newold = $request->newold;
        $userapplicant->retain = $request->retain;
        $userapplicant->ept = $request->ept;
        $userapplicant->ept_date = $request->ept_date;
        $userapplicant->unique_code = $request->unique_code;
        $userapplicant->name = $request->name;
        $userapplicant->email = $request->email;
        $userapplicant->alt_email = $request->alt_email;
        $userapplicant->con_number = $request->con_number;
        $userapplicant->address = $request->address;
        $userapplicant->degree = $request->degree;
        $userapplicant->major = $request->major;
        $userapplicant->minor = $request->minor;
        $userapplicant->level = $request->level;
        $userapplicant->district = $request->district;
        $userapplicant->school = $request->school;
        $userapplicant->school = '3';
        $userapplicant->password = Hash::make($request->password);

        $count = DB::table('users')->where('level', '=', $userapplicant->level)
                                   ->where('name', 'LIKE', '%'.$userapplicant->name.'%')->count();

        if ($userapplicant->level == 'Secondary - JHS' && $count <= '2')
        {
            $userapplicant->save();
            Alert::success('Success', 'Registered Succesfully');
            return redirect()->back();
        }
        elseif ($userapplicant->level == 'Secondary - SHS' && $count <= '2')
        {
            $userapplicant->save();
            Alert::success('Success', 'Registered Succesfully');
            return redirect()->back();
        }
        elseif ($userapplicant->level == 'Elementary' && $count <= '1')
        {
            $userapplicant->save();
            Alert::success('Success', 'Registered Succesfully');
            return redirect()->back();
        }
        else
        {
            return redirect()->back()->with('error', 'Failed to Register');
        }

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
}
