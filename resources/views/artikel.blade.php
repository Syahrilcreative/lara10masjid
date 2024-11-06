@extends('layouts.app')
@section('section')
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Articele</h4>
            </div>
            <div class="row g-4 d-flex justify-content-center">
                @foreach ($artikels as $artikel)
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{ asset('storage/acara/' . $artikel->image) }}"
                                    class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="{{ route('viewdetail', $artikel->id) }}"
                                    class="h4 d-inline-block mb-4">{{ $artikel->title }}</a>
                                <p class="mb-4">
                                    Penulis : {{ $artikel->user_name }} <br> {{ $artikel->created_at->format('d F Y') }}
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4"
                                    href="{{ route('viewdetail', $artikel->id) }}">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
