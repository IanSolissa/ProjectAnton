@extends('Anton.layouts.MainHomepage')
@section('Content1')


<div id="headerwrap" id="home" name="home">

    <header style="position: relative; top: 370px; left:100pk;">
        <p style="color:yellow">
            <marquee>INFO SEPUTAR MOBILE LEGENDS </marquee>
        </p>

    </header>
</div>
<!-- /headerwrap -->
<div id="greywrap">
    <p>BERITA UTAMA</p>


    {{-- card --}}
    <div class='fl_right col-sm-4'>
        <img border=2 src='/admin/admin/berita/foto/donkey.jpeg' border=0 width=300 height=200>
        <br><strong><a href='?module=readmore&id=$r[id_berita]'>Judul</a></strong>
        <p><strong>Tanggal</strong> | <strong>JAM</strong></p>
        ".excerpts." .....<a href='?module=readmore&id=$r[id_berita]'>Read More</a> </p>
    </div>
    <div class='fl_right col-sm-4'>
        <img border=2 src='/admin/admin/berita/foto/donkey.jpeg' border=0 width=300 height=200>
        <br><strong><a href='?module=readmore&id=$r[id_berita]'>Judul</a></strong>
        <p><strong>Tanggal</strong> | <strong>JAM</strong></p>
        ".excerpts." .....<a href='?module=readmore&id=$r[id_berita]'>Read More</a> </p>
    </div>
    <div class='fl_right col-sm-4'>
        <img border=2 src='/admin/admin/berita/foto/donkey.jpeg' border=0 width=300 height=200>
        <br><strong><a href='?module=readmore&id=$r[id_berita]'>Judul</a></strong>
        <p><strong>Tanggal</strong> | <strong>JAM</strong></p>
        ".excerpts." .....<a href='?module=readmore&id=$r[id_berita]'>Read More</a> </p>
    </div>


    <div class="row" class='fl_right col-sm-4'>

    </div><!-- row -->
</div><!-- greywrap -->

@endsection