<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    //
      // method untuk hapus data pegawai
      public function hapus($id)
      {
          // menghapus data pegawai berdasarkan id yang dipilih
          DB::table('pendaftaran')->where('idpendaftar',$id)->delete();
              
          // alihkan halaman ke halaman pegawai
          return redirect('/admin');
      }
  
      public function tambahpendaftar(){
          return view("event.tambah");
      }
  
      // method untuk insert data ke table pegawai
      public function store(Request $request)
      {
          DB::table('pendaftaran')->insert([
              'nama' => $request->nama,
              'email' => $request->email,
              'ttl' => $request->tanggal,
              'alamat' => $request->alamat,
              'eventapa' => $request->event
          ]);
          return redirect('/');
      }
  
      public function edit($id)
      {
          // mengambil data pegawai berdasarkan id yang dipilih
          $pendaftar = DB::table('pendaftaran')->where('idpendaftar',$id)->get();
          // passing data pegawai yang didapat ke view edit.blade.php
          return view('pendaftar.edit',['pendaftar' => $pendaftar]);
      }
      // update data pegawai
      public function pendaftarupdate(Request $request)
      {
          // update data pegawai
          DB::table('pendaftaran')->where('idpendaftar',$request->id)->update([
              'nama' => $request->nama,
              'email' => $request->email,
              'ttl' => $request->tanggal,
              'alamat' => $request->alamat,
              'eventapa' => $request->event
          ]);
          // alihkan halaman ke halaman pegawai
          return redirect('/');
      }
}
