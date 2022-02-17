@extends('layouts.app')

@section('title')
    PeduliGizi | Artikel
@endsection

@section('content')
    <!-- article header -->
    <section class="article-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-8 align-self-center head-left">
                    <h1>Tambah wawasanmu tentang tubuh dan makanan dari kumpulan artikel menarik!</h1>
                </div>
                <div class="col-3 ms-auto">
                    <div class="newest-header">
                        <h2>Artikel Terbaru</h2>
                    </div>
                    <div class="newest-content">
                        @foreach ($items as $item)
                            <div class="newest-card">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <img src="{{Storage::url($item->gambar)}}" alt="" style="height: 50px; width: 50px; background-color: grey; border-radius: 50%;">
                                    </div>
                                    <div class="col">
                                        <div class="newest-article-header">
                                            <a href="{{route('detail_article', $item->id)}}" class="link-dark text-decoration-none"><h3>{{$item->judul}}</h3></a>
                                        </div>
                                        <div class="newest-article-date">
                                            <p>{{$item->tanggal}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if($loop->count < 3)
                                @break
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
      <!-- end article header -->
      <hr>
      <!-- article list -->
    <section class="article-list">
        <div class="container-fluid">
            <div class="row row-cols-4 justify-content-center">
                @foreach ($items as $item)
                <div class="col">
                    <div class="card article-card h-100" style="width: 18rem;">
                        <img src="{{Storage::url($item->gambar)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$item->judul}}</h5>
                            <p class="card-text">{{$item->tanggal}}</p>
                            <a href="{{route('detail_article', $item->id)}}" class="btn btn-primary">Baca selengkapnya</a>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </section>
      <!-- end article list -->
@endsection