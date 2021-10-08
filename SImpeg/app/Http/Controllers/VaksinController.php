<?php

namespace App\Http\Controllers;

use App\Pegawai;
use App\Darah;
use App\Vaksin;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;


class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // dd('masuk');
        $pegawai=Vaksin::all();
        return view('vaksin.tampil', compact('vaksin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $darah =Darah::all();
        return view('vaksin.tambah' , compact('darah'));
        
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
        // dd('msk');
        $pegawai = new Vaksin();
        $pegawai->nama = $request ->nama;
        $pegawai->tmpt_lahir = $request ->tmpt_lahir;
        $pegawai->tgl_lahir = $request ->tgl_lahir;
        $pegawai->jenis_kelamin = $request ->jenis_kelamin;
        $pegawai->gol_darah_id = $request ->gol_darah_id;
        $pegawai->alamat = $request ->alamat;        
        $pegawai->nohp = $request ->nohp;        
        
        $pegawai->save();
        return redirect ('pegawai');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $pegawai = Vaksin::find($id);
        return view ('vaksin.show', compact('vaksin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
        $vaksin = Vaksin::find($id);
        $darah =Darah::all();
        return view ('vaksin.edit', compact('vaksin', 'darah', ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vaksin  $vaksin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $pegawai = \App\Vaksin::find($id);
        $pegawai->nama = $request ->nama;
        $pegawai->tmpt_lahir = $request ->tmpt_lahir;
        $pegawai->tgl_lahir = $request ->tgl_lahir;
        $pegawai->jenis_kelamin = $request ->jenis_kelamin;
        $pegawai->gol_darah_id = $request ->gol_darah_id;
        $pegawai->alamat = $request ->alamat;        
        $pegawai->nohp = $request ->nohp;   
        $pegawai->save();  


        return redirect('vaksin');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $pegawai = Vaksin::find($id);
        $pegawai->delete();

        return redirect('vaksin');
    }
}
