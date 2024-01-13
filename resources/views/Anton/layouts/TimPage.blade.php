@extends('Anton.layouts.MainHomepage')
@section('Content2')
</div>

</div>

<section class="section-divider textdivider divider2">
    <div class="container">
        <br />
        <br />
        <br />
        <br />
        <p><b>
                <h2 style="color:blue;">
                    <marquee>TIM E-SPORT MOBILE LEGEND INDO</marquee>
                </h2>
            </b></p>
    </div><!-- container -->
</section><!-- section -->
<br>
<div class="container" id="about" name="about">
    @foreach ($Data as $data)

    <div class='fl_right col-sm-4'>
        <img border=2 src='/admin/admin/profil/foto/{{ $data->fupload}}' border=0 width=300 height=200>
        <br><strong><a href='/tim/{{ $data->id }}'>{{ $data->judul_profil }}</a></strong>

    </div>
    @endforeach

</div><!-- row -->
</div><!-- container -->

<!-- ==== SECTION DIVIDER1 -->

<div class="container">

</div><!-- container -->
</section><!-- section -->
@endsection