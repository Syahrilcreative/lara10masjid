<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="text-primary">Masjid An Nabawi</h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="/" class="nav-item nav-link active">Home</a>
                <a href="#jadwalShalat" class="nav-item nav-link">Jadwal Shalat</a>
                <a href="#visimisi" class="nav-item nav-link">Vis Misi</a>
                <a href="{{ route('artikel') }}" class="nav-item nav-link">Artikel</a>
            </div>
        </div>
    </nav>
    <!-- Carousel Start -->
    <div class="header-carousel owl-carousel">
        <div class="header-carousel-item">
            <img src="{{ asset('assets/fe/img/1.jpeg') }}" class="img-fluid w-100" alt="Image">
            <div class="carousel-caption">
            </div>
        </div>
    </div>
    <!-- Carousel End -->
</div>
