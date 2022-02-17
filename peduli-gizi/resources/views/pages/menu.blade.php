@extends('layouts.app')

@section('title')
    PeduliGizi | Rekomendasi Menu
@endsection

@section('content')
        <!-- header menu -->
        <section id="header-menu">
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-md-2 justify-content-evenly align-items-center">
                    <div class="col col-md-5">
                        <div class="head-header">
                            <h1 style="font-weight: 700;">Ayo Makan Sehat!</h1>
                        </div>
                        <div class="content-header">
                            <p class="text-dark" style="font-size: 24px">Cek kumpulan resep makanan sehat di sini dan sesuaikan dengan kalori yang kamu butuhkan!</p>
                        </div>
                    </div>
                    <div class="col col-md-5">
                        <div class="image-header">
                            <img src="{{url('frontend/images/cooking.jpg')}}" alt="abc" srcset="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end header -->
    
        <!-- list menu -->
        <section id="food-list">
            <div class="container">
                <div class="row">
                    <div class="list-filter">
                        <nav class="nav nav-pills nav-justified">
                            <a class="nav-link active" aria-current="page" href="#">Semua</a>
                            <a class="nav-link" href="#">Daging</a>
                            <a class="nav-link" href="#">Sayur</a>
                            <a class="nav-link" href="">Campuran</a>
                        </nav>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-4 justify-content-center">
                    @foreach ($items as $item)
                      <div class="col card-item">
                        <div class="card h-100" style="width: 18rem;">
                            <div class="card-category">
                              <p class="text-white">{{$item->kategori}}</p>
                            </div>
                            <img src="{{Storage::url($item->gambar)}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">{{$item->nm_makanan}}</h5>
                              <p class="card-text text-dark">{{$item->kalori}} Kalori</p>
                              <a href="{{route('detail_rekomendasi', $item->id)}}" class="btn border">Cek resepnya</a>
                            </div>
                          </div>
                      </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- end list menu -->
@endsection