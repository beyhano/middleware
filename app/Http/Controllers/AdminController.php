<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
   public function __construct()
   {
       $this->middleware('auth:yonetici');
   }

    public function index()
    {
        $adminler = Admin::all();
        return view('admin.register',compact('adminler'));
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

    public function admincikis()
    {
         Auth::guard('yonetici')->logout();
         return view('home');
    }
    public function store(Request $request)
    {
        $kural = [
            'name'                  => 'required|unique:admin',
            'email'                 => 'required|email|unique:admin',
            'password'              => 'required',
            'password_confirmation' => 'required',
        ];

        $this->validate($request,$kural);

        $kullanici = new  Admin();
        $kullanici->name = request('name');
        $kullanici->email = request('email');
        $kullanici->admin = 1;

        if(request('password') != request('password_confirmation'))
        {
            alert()
                ->error('Başarısız','Şifreler Uyuşmuyor')
                ->autoClose(4000);
            return back();
        }
        else
        {
            $kullanici->password = Hash::make(request('password'));
        }
        $kullanici->save();
        if($kullanici)
        {
            alert()
                ->success('Başarı','Admin Kullnıcı Oluşturuldu')
                ->autoClose(2000);
            return back();
        }
        else
        {
            alert()
                ->error('Başarısız','Admin Kullnıcı Oluşturulamadı')
                ->autoClose(4000);
            return back();
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
