<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Auth;
use Carbon;

class editProf extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // validate incoming request
        
        $today = Carbon::now()->toDateTimeString();
        $validator = Validator::make($request->all(), [
             'username' => ['required', 'string', 'max:60','unique:tbl_users'],
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'contactNo' => ['required', 'string'],
            'dateOfBirth' => ['required','date_format:Y-m-d','before:'.$today],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:tbl_users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
       ]);
        
       if ($validator->fails()) {
            Session::flash('error', $validator->messages()->first());
            return redirect()->back()->withInput();
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
        $usr=User::find($id);
        $usr->firstName=$request->firstName;
        $usr->lastName=$request->lastName;
        $usr->address=$request->address;
        $usr->Gender=$request->sex;
        $usr->contactNo=$request->contactNo;
        $usr->dateOfBirth=$request->dateOfBirth;
        $usr->email=$request->email;
        $usr->username=$request->username;

        $usr->save();
        return redirect()->to('editProfile')->with('success','Profile updated successfully');
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
