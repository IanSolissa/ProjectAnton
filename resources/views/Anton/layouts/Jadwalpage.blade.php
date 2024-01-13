@extends('Anton.layouts.MainHomepage')
@section('Content4')
</div>

</div>

</div>

</div>

</div>

<section class="section-divider textdivider divider7">
    <div class="container">
        <br />
        <br />
        <br />
        <br>
        <p><b>
                <h2 style="color:#fff000;">
                    <marquee>JADWAL PERTANDINGAN MPL</marquee>
                </h2>
            </b></p>

    </div><!-- container -->
</section>
<!--

  <!-- /row -->
<br>
<br>
<!-- /row -->
<!-- /container -->



<div class="wrapper ">
    <div class="container">
        <div class="content">
            <div id="featured_slide ">


                <div>

                    @foreach ($Data as $data )

                    <div class='fl_right col-sm-4'>
                        <img border=2 src='/admin/admin/agenda/foto/{{ $data->fupload}}' border=0 width=300 height=200>
                        <br><strong><a href='/jadwal/{{ $data->id }}'>{{ $data->judul_agenda }}</a></strong>
                        <p><strong>{{ $data->tanggal_agenda }}</strong>
                    </div>
                    @endforeach

                </div>

            </div>

        </div>

    </div>

</div>
@endsection