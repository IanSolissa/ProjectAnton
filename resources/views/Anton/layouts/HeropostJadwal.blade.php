@extends('Anton.layouts.MainHomepage')
@section('Hero-jadwal')


<div class="wrapper">
    <div class="container">
        <div class="content">
            <div id="featured_slide">

                <div>

                    <div class='fl_right col-sm-4 ' align="center">
                        <img border=2 src='/admin/admin/agenda/foto/{{ $data->fupload}}' border=0 width=80%
                            height=500px>
                        <br><strong><a href='#'>{{ $data->judul_agenda }}</a></strong>
                        <p> <strong>{{ $data->tanggal_agenda }}</strong></p>
                        <p> {{ $data->isi_agenda }}</p>
                    </div>
                    @endsection
                </div>

            </div>

        </div>

    </div>

</div>