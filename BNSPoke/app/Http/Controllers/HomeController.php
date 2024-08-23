<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    //
    public function Home()
    {
        if (Auth::check()) {
            return redirect('/admin');
        }

        $event = DB::table('event')->get();

        return view('home', compact('event'));
    }
    public function login()
    {
        return view('home2');
    }

    public function loginaksi(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) 
        {
            return redirect('/admin');
        }
        else
        {
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/');
        }
    }

    public function logoutaksi()
    {
        Auth::logout();
        return redirect('/');
    }

    public function admin()
    {
        if (Auth::check()) 
        {
            // mengambil data dari table pegawai
    	$event = DB::table('event')->get();
        $pendaftar = DB::table('pendaftaran')->get();
 
    	// mengirim data pegawai ke view index
        return view('admin',['event' => $event, 'pendaftar'=> $pendaftar]);
        }
        else
        {
            return redirect('/');
        }
    	
    }

}
