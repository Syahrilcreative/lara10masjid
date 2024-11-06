@extends('layouts.app')
@section('section')
    <div class="container-fluid service pb-5  mt-4">
        <div class="container pb-5" id="jadwalShalat">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Jadwal Shalat</h4>
            </div>
            <div class="row g-5 d-flex justify-content-center" id="prayer-schedule">
            </div>
        </div>
    </div>
    {{-- Visi Misi --}}
    <div class="container-fluid blog pb-5" id="visimisi">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Visi Misi Masjid</h4>
                <p class="mb-0">“Visi misi kami yakni tebar ilmu, tebar
                    manfaat dan eratkan ukhuwah karena Allah. Dimana kami melaksanakan kajian-kajian, karena ilmu
                    jika tidak diamalkan nilainya akan berbeda. Dan kami juga melaksanakan bakti sosial agar dapat
                    bermanfaat untuk masyarakat,”
                </p>
            </div>
        </div>
    </div>
    {{-- End Visi Misi --}}
    <!-- Blog Start -->
    <div class="container-fluid blog pb-5" id="artikel">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Articles</h4>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                    cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint
                    dolorem autem obcaecati, ipsam mollitia hic.
                </p>
            </div>
            <div class="row g-5 justify-content-center">
                @foreach ($acaras as $acara)
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{ asset('storage/acara/' . $acara->image) }}" class="img-fluid rounded-top w-100"
                                    alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="{{ route('viewdetail', $acara->id) }}"
                                    class="h4 d-inline-block mb-4">{{ $acara->title }}</a>
                                <p class="mb-4">
                                    Penulis : {{ $acara->user_name }} <br> {{ $acara->created_at->format('d F Y') }}
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4"
                                    href="{{ route('viewdetail', $acara->id) }}">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection
@push('script')
    <script>
        // Inisialisasi WOW.js (Jika digunakan)
        new WOW().init();
        // Fungsi untuk mendapatkan jadwal salat
        async function getPrayerTimes() {
            try {
                const response = await fetch(
                    'https://api.aladhan.com/v1/timingsByCity?city=Jakarta&country=Indonesia&method=2');
                const data = await response.json();

                const timings = data.data.timings;
                const date = data.data.date.gregorian.date;
                const container = document.getElementById('prayer-schedule');

                const prayers = [{
                        name: 'Subuh',
                        time: timings.Fajr
                    },
                    {
                        name: 'Dzuhur',
                        time: timings.Dhuhr
                    },
                    {
                        name: 'Ashar',
                        time: timings.Asr
                    },
                    {
                        name: 'Maghrib',
                        time: timings.Maghrib
                    },
                    {
                        name: 'Isya',
                        time: timings.Isha
                    },
                ];
                // Membersihkan kontainer sebelum menambahkan data
                container.innerHTML = '';
                // Loop untuk menambahkan jadwal ke dalam struktur HTML yang Anda inginkan
                prayers.forEach(prayer => {
                    container.innerHTML += `

            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-item text-center">
                                            <div class="service-img">
                            <img src="{{ asset('assets/fe/img/wa1.jpeg') }}" class="img-fluid rounded-top w-100"
                                alt="Image">
                        </div>
                    <div class="rounded-bottom p-4">
                    <a href="#" class="h4 d-inline-block mb-4">${prayer.name}</a>
                    <p class="mb-4">Tanggal: ${date}</p>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Jam: ${prayer.time}</a>
                    </div>
                </div>
                </div>
            `;
                });
            } catch (error) {
                console.error('Error fetching prayer times:', error);
                document.getElementById('prayer-schedule').innerHTML = '<p>Gagal memuat jadwal shalat</p>';
            }
        }
        getPrayerTimes();
    </script>
@endpush
