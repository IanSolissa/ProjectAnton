<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class BeritapageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tanggal= Carbon::now();
        // ->format('d-m-Y');

    $tanggal2=new \DateTime('now');

    $tanggal=\Carbon\Carbon::parse($tanggal)    ;
    $Berita=Berita::all();
        // $tanggal=$tanggal->toDateTimeString();
        return view('Anton.layouts.Beritapage',[
            'tanggal'=>$tanggal,
            'Data'=>$Berita
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tanggal= Carbon::now();
        // ->format('d-m-Y');
    $tanggal=\Carbon\Carbon::parse($tanggal)    ;

        return view('Anton.layouts.Heropost',[
            'data'=>Berita::find($id),
            'tanggal'=>$tanggal
                    ]);


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}