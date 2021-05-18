<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        if(Auth::attempt($request->only('email','password')))
        {
            $request->session()->put('nama',auth()->user()->name);
           
            return redirect('/home');
        }
        return redirect('/page-login');
    }
    public function logout()
    {

        Auth::logout();
        session()->pull('nama','undefined');
        return redirect('/home');
    }
    public function register()
    {
        return view('auth.registrasi');
    }
    public function create(Request $request)
    {
        DB::table('users')->insert([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'level' => 'user', 
            'remember_token' => Str::random(60)
        ]);
        return redirect('/home');
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
        $user = User::where('level',$id)->get();

        return redirect('/produk');
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
