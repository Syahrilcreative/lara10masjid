@extends('layouts.app')
@section('section')
    <!-- Abvout Start -->
    <div class="container-fluid about py-5">
        <div class="container py-5">
            <div class="text-center">
                <h4 class="text-primary">Detail Artikel</h4>
            </div>
            <div class="row g-5 ">
                <!-- Wrapper Gambar -->
                <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="bg-primary rounded position-relative overflow-hidden"
                        style="max-height: 400px; position: sticky; top: 0;">
                        <img src="{{ asset('storage/acara/' . $data->image) }}" class="img-fluid rounded w-100"
                            alt="" style="object-fit: cover; max-height: 100%;">
                    </div>
                </div>
                <!-- Konten -->
                <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                    <div>
                        <h1 class="display-5 mb-4">{{ $data->title }}</h1>
                        <p class="mb-4">{!! $data->body !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection
