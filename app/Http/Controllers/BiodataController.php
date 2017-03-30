<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Biodata;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $biodatas = Biodata::all();
        return view('biodata.index',['biodatas' => $biodatas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('biodata.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation
        $this->validate($request,[
                'nis'=> 'required',
                'nama'=> 'required',
                'tempat_lahir'=> 'required',
                'tanggal_lahir'=> 'required',
                'jenis_kelamin'=> 'required',
                'alamat'=> 'required',
                'jurusan'=> 'required',
                'nama_sekolah'=> 'required',
            ]);
        // Create new Data
        $biodata = new biodata;
        $biodata->nis = $request->nis;
        $biodata->nama = $request->nama;
        $biodata->tempat_lahir = $request->tempat_lahir;
        $biodata->tanggal_lahir = $request->tanggal_lahir;
        $biodata->jenis_kelamin = $request->jenis_kelamin;
        $biodata->alamat = $request->alamat;
        $biodata->jurusan = $request->jurusan;
        $biodata->nama_sekolah= $request->nama_sekolah;
        $biodata->save(); 
        return redirect()->route('biodata.index')->with('alert-success', 'Data Hasbeen Saved!');
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
        $biodata = Biodata::find($id);
        return view('biodata.show', compact('biodata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $biodata = Biodata::findOrFail($id);
        // Return to the edit views
        return view('biodata.edit',compact('biodata'));
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
        // Validation
        $this->validate($request,[
                'nis'=> 'required',
                'nama'=> 'required',
                'tempat_lahir'=> 'required',
                'tanggal_lahir'=> 'required',
                'jenis_kelamin'=> 'required',
                'alamat'=> 'required',
                'jurusan'=> 'required',
                'nama_sekolah'=> 'required',
            ]);
        // Create new Data
        $biodata = Biodata::findOrFail($id);
        $biodata->nis = $request->nis;
        $biodata->nama = $request->nama;
        $biodata->tempat_lahir = $request->tempat_lahir;
        $biodata->tanggal_lahir = $request->tanggal_lahir;
        $biodata->jenis_kelamin = $request->jenis_kelamin;
        $biodata->alamat = $request->alamat;
        $biodata->jurusan = $request->jurusan;
        $biodata->nama_sekolah= $request->nama_sekolah;
        $biodata->save(); 
        return redirect()->route('biodata.index')->with('alert-success', 'Data Hasbeen Saved!');
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
        $biodata = Biodata::findOrFail($id);
        $biodata->delete();
        return redirect()->route('biodata.index')->with('alert-success','Data Hasbeen Saved!');
    }
}
