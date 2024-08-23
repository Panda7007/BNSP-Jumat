<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EventController extends Controller
{
     // method untuk hapus data pegawai
     public function hapus($id)
     {
         // menghapus data pegawai berdasarkan id yang dipilih
         DB::table('event')->where('idevent',$id)->delete();
             
         // alihkan halaman ke halaman pegawai
         return redirect('/admin');
     }
 
     public function tambahevent(){
         return view("event.tambah");
     }
 
     // method untuk insert data ke table pegawai
     public function store(Request $request)
     {
         DB::table('event')->insert([
             'nama' => $request->nama,
             'tanggal' => $request->tanggal,
             'informasi' => $request->informasi
         ]);
         return redirect('/admin');
     }
 
     public function edit($id)
     {
         // mengambil data pegawai berdasarkan id yang dipilih
         $event = DB::table('event')->where('idevent',$id)->get();
         // passing data pegawai yang didapat ke view edit.blade.php
         return view('event.edit',['event' => $event]);
     
     }
     // update data pegawai
     public function eventupdate(Request $request)
     {
         // update data pegawai
         DB::table('event')->where('idevent',$request->id)->update([
             'nama' => $request->nama,
             'tanggal' => $request->tanggal,
             'informasi' => $request->informasi,
         ]);
         // alihkan halaman ke halaman pegawai
         return redirect('/admin');
     }
}
