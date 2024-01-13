@extends('Anton.layouts.MainHomepage')
@section('Hero-berita')


<div class="wrapper">
    <div class="container">
        <div class="content">
            <div id="featured_slide">

                <div>

                    <div class='fl_right col-sm-4 ' align="center">
                        <img border=2 src='/admin/admin/berita/foto/{{ $data->fupload}}' border=0 width=80%
                            height=500px>
                        <br><strong><a href='?module=readmore&id=$r[id_berita]'>{{ $data->judul }}</a></strong>
                        <p><strong>{{ $data->tanggal }}</strong> | <strong>{{ $data->jam }}</strong></p>
                        <p> {{ $data->isi }}</p>
                    </div>
                    @endsection
                </div>

            </div>

        </div>

    </div>

</div>