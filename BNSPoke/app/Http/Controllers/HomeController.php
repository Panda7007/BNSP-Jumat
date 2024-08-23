<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function Home(){
        return view("home");
    }

    public function admin()
    {
    	// mengambil data dari table pegawai
    	$event = DB::table('event')->get();
        $pendaftar = DB::table('pendaftaran')->get();
 
    	// mengirim data pegawai ke view index
        return view('admin',['event' => $event, 'pendaftar'=> $pendaftar]);
    }

}
