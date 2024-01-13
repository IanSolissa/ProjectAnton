<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use App\Models\Jadwal;

class JadwaladminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Jadwal=Jadwal::all();
        return view('Anton.Admin.section.Jadwalpage',[
         'data'=>$Jadwal,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Anton.Admin.section.Inputjadwal');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation=$request->validate([
            'username'=>'required',
            'judul_agenda'=>'required',
            'isi_agenda'=>'required',
            'tanggal_agenda'=>'required',
            'fupload'=>'required',
        ]);
        if($request->file('fupload'))
        {

            $postimage=$request->file('fupload');
            $extension=$postimage->extension();

            $final =Carbon::now()->format('y-m-d-h-s') . '.' . $extension;
            $postimage->move(public_path('admin/admin/agenda/foto/'),$final);
            $validation['fupload']=$final;
            Jadwal::create($validation);
            // dd("asd");

           return redirect()->back();
           }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {


        return view('Anton.Admin.section.Editjadwalpage',[
            'Data'=>Berita::find($id),
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validation=$request->validate([
            'username'=>'required',
            'judul_agenda'=>'required',
            'isi_agenda'=>'required',
            'tanggal_agenda'=>'required',
            'fupload'=>'required',
        ]);
        if($request->file('fupload'))
        {

            $postimage=$request->file('fupload');
            $extension=$postimage->extension();

            $final =Carbon::now()->format('y-m-d-h-s') . '.' . $extension;
            $postimage->move(public_path('admin/admin/agenda/foto/'),$final);
            $validation['fupload']=$final;
            Jadwal::where('id',$id)->update($validation);
            // dd("asd");

           return redirect()->back();
           }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {


        Jadwal::destroy($id);
        return redirect('/dashboard/jadwal');
    }
}