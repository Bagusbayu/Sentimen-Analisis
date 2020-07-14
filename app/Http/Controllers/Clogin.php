<?php

namespace App\Http\Controllers;
use App\Mlogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class Clogin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mlogin::all();
        return view ('admin',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('inputadmin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Mlogin();
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect()->route('admin.index')->with('alert-success','Data berhasil ditambah!');
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
    public function login(){
        return view('login');
    }
    public function loginPost(Request $request){
        $email = $request->email;
        $password = $request->password;
        $data = Mlogin::where('email',$email)->first();
        if($data){
        if(Hash::check($password, $data->password)){
                Session::put('email',$data->email);
                Session::put('login',TRUE);
                return redirect('admin');
            }
            else{
                return redirect('login')->with('alert','Password atau Email, Salah !' );
            }
    }else{
        return redirect('loginadmindpm')->with('alert','Password atau Email, Salah!');
    }
}
        public function logout(){
                Session::flush();
                return redirect('login')->with('alert','Kamu sudah logout');
        }
}
