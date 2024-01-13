<?php

namespace App\Http\Controllers;

use DateTime;
use Carbon\Carbon;
use App\Models\Berita;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BeritaadminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Berita=Berita::all();
        return view('Anton.Admin.section.Beritapage',[
         'data'=>$Berita,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('Anton.Admin.section.Inputberita');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation=$request->validate([
            'username'=>'required',
            'kategori'=>'required',
            'judul'=>'required',
            'isi'=>'required',
            'tanggal'=>'required',
            'jam'=>'required',
            'fupload'=>'required',
        ]);
        if($request->file('fupload'))
        {

            $postimage=$request->file('fupload');
            $extension=$postimage->extension();

            $final =Carbon::now()->format('y-m-d-h-s') . '.' . $extension;
            $postimage->move(public_path('admin/admin/berita/foto/'),$final);
            $validation['fupload']=$final;
            Berita::create($validation);

            return redirect()->back();
            // dd("sad");
       }

    //    dd("masuk");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // dd($id);
        // dd(Berita::find($id));
        return view('Anton.Admin.section.Editberitapage',[
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
            'kategori'=>'required',
            'judul'=>'required',
            'isi'=>'required',
            'tanggal'=>'required',
            'jam'=>'required',
            'fupload'=>'required',
        ]);
        if($request->file('fupload'))
        {

            $postimage=$request->file('fupload');
            $extension=$postimage->extension();

            $final =Carbon::now()->format('y-m-d-h-s') . '.' . $extension;
            $postimage->move(public_path('admin/admin/berita/foto/'),$final);
            $validation['fupload']=$final;
            Berita::where('id', $id)->update($validation);
            return redirect('/dashboard/berita');
            // dd("sad");
       }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        Berita::destroy($id);
        return redirect('/dashboard/berita');
    }
}