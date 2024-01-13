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

                    <div class='fl_right col-sm-4'>
                        <img border=2 src='/admin/admin/berita/foto/btr.jpeg' border=0 width=300 height=200>
                        <br><strong><a href='?module=readmore&id=$r[id_berita]'>$r[judul].</a></strong>
                        <p><strong>$r[tanggal]</strong> | <strong>$r[jam]</strong></p>
                        <p> " . substr($r['isi'], 0, 100) . " .....<a href='?module=readmore&id=$r[id_berita]'>Read
                                More</a> </p>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>

@endsection