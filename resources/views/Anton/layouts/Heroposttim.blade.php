@extends('Anton.layouts.MainHomepage')
@section('Hero-tim')


<div class="wrapper">
    <div class="container">
        <div class="content">
            <div id="featured_slide">

                <div>

                    <div class='fl_right col-sm-4 ' align="center">
                        <img border=2 src='/admin/admin/profil/foto/{{ $data->fupload}}' border=0 width=80%
                            height=500px>
                        <br><strong><a href='#'>{{ $data->judul_profil }}</a></strong>
                        {{-- <p> <strong>{{ $data->tanggal_agenda }}</strong></p> --}}
                        <p> {{ $data->isi_profil }}</p>
                    </div>
                    @endsection
                </div>

            </div>

        </div>

    </div>

</div>