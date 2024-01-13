<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use App\Models\Tim;

class TimadminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Tim=Tim::all();
       return view('Anton.Admin.section.Timpage',[
        'data'=>$Tim,
       ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Anton.Admin.section.Inputtim');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation=$request->validate([

            'judul_profil'=>'required',
            'isi_profil'=>'required',
            'fupload'=>'required',
        ]);
        if($request->file('fupload'))
        {

            $postimage=$request->file('fupload');
            $extension=$postimage->extension();

            $final =Carbon::now()->format('y-m-d-h-s') . '.' . $extension;
            $postimage->move(public_path('admin/admin/profil/foto/'),$final);
            $validation['fupload']=$final;
            Tim::create($validation);


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

        return view('Anton.Admin.section.EditTimpage',[
            'Data'=>Tim::find($id),
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validation=$request->validate([

            'judul_profil'=>'required',
            'isi_profil'=>'required',
            'fupload'=>'required',
        ]);
        if($request->file('fupload'))
        {

            $postimage=$request->file('fupload');
            $extension=$postimage->extension();

            $final =Carbon::now()->format('y-m-d-h-s') . '.' . $extension;
            $postimage->move(public_path('admin/admin/profil/foto/'),$final);
            $validation['fupload']=$final;
            Tim::where('id',$id)->update($validation);


           return redirect('/dashboard/tim');
           }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Tim::destroy($id);
        return redirect('/dashboard/tim');
    }
}