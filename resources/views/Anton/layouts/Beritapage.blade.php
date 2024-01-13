@extends('Anton.layouts.MainHomepage')
@section('Content3')
</div>

</div>

</div>

<section class="section-divider textdivider divider6">
    <div class="container">
        <br />
        <br />
        <br>
        <br>
        <p><b>
                <h2 style="color:#fff000;">
                    <marquee>Berita Seputar Dunia Mobile Legend</marquee><b>
                </h2>
        </p>
    </div><!-- container -->
</section><!-- section -->
</br>

<!-- /row -->
<br>
<br>
<!-- /row -->
<!-- /container -->

<div class="wrapper">
    <div class="container">
        <div class="content">
            <div id="featured_slide">

                <div>
                    @foreach ($Data as $data)

                    <div class='fl_right col-sm-4'>
                        <img border=2 src='/admin/admin/berita/foto/{{ $data->fupload}}' border=0 width=300 height=200>
                        <br><strong><a href='?module=readmore&id=$r[id_berita]'>{{ $data->judul }}</a></strong>
                        <p><strong>{{ $data->tanggal }}</strong> | <strong>{{ $data->jam }}</strong></p>
                        <p> {!! Str::limit($data->isi,25) !!} <a href='/berita/{{ $data->id }}'>Read
                                More</a> </p>
                    </div>

                    @endforeach
                </div>

            </div>

        </div>

    </div>

</div>

@endsection