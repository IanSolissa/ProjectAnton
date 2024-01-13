<div id="navbar-main">
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-shield" style="font-size:30px; color:#3498db;"></span>
                </button>
                <a class="navbar-brand hidden-xs hidden-sm" href="#home"><span class="icon icon-shield"
                        style="font-size:18px; color:#3498db;"></span></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/" class="smoothScroll">Home</a></li>
                    <li> <a href="/tim" class="smoothScroll">Tim</a></li>
                    <li> <a href="/berita" class="smoothScroll"> Berita</a></li>
                    <li> <a href="/jadwal" class="smoothScroll"> Jadwal</a></li>
                    <li> <a href="/saran" class="smoothScroll"> Saran</a></li>
                    <li> <a href="/dashboard/login" class="smoothScroll"> Dashboard</a></li>
                    @auth

                    <li> <a href="#" class="smoothScroll">Hello, {{ auth()->user()->email }}</a></li>
                    @endauth
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>