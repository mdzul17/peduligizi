@extends('layouts.app')

@section('title')
    PeduliGizi | {{$item->nm_makanan}}
@endsection

@section('content')
  <div class="container">
    <div class="navigation-pane mt-5">
      <a href="{{route('rekomendasi')}}" class="link-dark text-decoration-none">Menu</a>/{{$item->nm_makanan}}
    </div>
  </div>
  <!-- header menu -->
  <section id="header-menu">
      <div class="container">
          <div class="row row-cols-1 row-cols-md-2 justify-content-evenly align-items-center">
              <div class="col col-md-6">
                <div class="image-header">
                  <img src="{{Storage::url($item->gambar)}}" alt="abc" srcset="">
                </div>
              </div>
              <div class="col col-md-4">
                <ul style="list-style-type: none;">
                  <li><b>Nama Resep:</b> {{$item->nm_makanan}}</li>
                  <li><b>Jumlah Kalori:</b> {{$item->kalori}}</li>
                  <li><b>Bahan:</b></li>
                  <li>{!!$item->bahan!!}</li>
                </ul>
              </div>
          </div>
      </div>
  </section>
  <!-- end header -->

  <!-- list menu -->
  <section id="food-content">
      <div class="container">
        <div class="row">
          <div class="col">
            {!!$item->konten!!}
          </div>
        </div>
      </div>
  </section>
  <!-- end list menu -->
@endsection