@extends('layouts.app')

@section('title')
    PeduliGizi | {{$item->judul}}
@endsection

@section('content')
  <div class="container">
    <div class="navigation-pane mt-5">
      <a href="{{route('article')}}" class="link link-dark">Artikel</a>/{{$item->judul}}
    </div>
  </div>
  <!-- article header -->
  <section class="article-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col text-center">
                <img src="{{Storage::url($item->gambar)}}" style="height: 300px; width: 300px;" class="border border-dark">
            </div>
        </div>
    </div>
  </section>
  <!-- end article header -->
  <!-- article list -->
  <section class="article-list">
    <div class="container">
      <div class="row text-center"> 
        <h2>{{$item->judul}}</h2>
        <h4>{{\Carbon\Carbon::create($item->tanggal)->format('F n, Y')}}</h4>
      </div>
      <div class="row mt-5">
        <div class="col">
            {!!$item->konten!!}
        </div>
      </div>
    </div>
  </section>
  <!-- end article list -->
@endsection