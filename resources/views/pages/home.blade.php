@extends('layouts.app')

@section('title')
    PeduliGizi | Beranda
@endsection

@section('content')

  <!-- jumbotron -->
  <section id="home">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col">
          <h1>PeduliGizi</h1>
          <p>Karena sehat adalah hak tubuh kita semua.</p>
          <div class="btn-more">
            <a href="#about" class="btn btn-primary">Pelajari lebih lanjut</a>
          </div>
        </div>
        <div class="col">
          <img src="{{ url('frontend/images/5912.jpg')}}" alt="" style="width: 100%; background-color: black;">
        </div>
      </div>
    </div>
  </section>
  <!-- end jumbotron -->
  
  <!-- about -->
  <section id="about">
    <div class="container-fluid mt-5">
      <div class="row about-header text-center">
        <h1>
          Tentang Kami
        </h1>
        <hr>
      </div>
      <div class="row justify-content-evenly">
        <div class="col align-self-center text-center">
          <img src="{{ url('frontend/images/sdg.png')}}" alt="">
        </div>
        <div class="col">
          <div class="row content-list">
            <h2>
              Memperbaiki gizi dan meningkatkan kesehatan seluruh penduduk
            </h2>
            <p class="mt-4">
              Berlatar dari SDGs Indonesia 2030, kami ikut berkontribusi dalam hal-hal berikut:
            </p>
          </div>
          <div class="row justify-content-evenly mt-2">
            <div class="col-4 p-3 border border-3 border-dark">
              <div class="content-info text-center" style="width: 100%; height: 150px;">
                <p>
                  Memperbaiki gizi melalui pola makan dan menu yang baik
                </p>
              </div>
            </div>
            <div  class="col-4 p-3 border border-3 border-dark">
              <div class="content-info text-center " style="width: 100%; height: 100%;">
                <p>
                  Mengurangi penyakit yang mungkin terjadi dengan menjaga pola hidup sehat
                </p>
              </div>
            </div>
          </div>
          <div class="row mt-3 justify-content-evenly">
            <div class="col-4 p-3 border border-3 border-dark">
              <div class="content-info text-center" style="width: 100%; height: 150px">
                <p>
                  Membantu menghitung kebutuhan gizi melalui kalkulator gizi
                </p>
              </div>
            </div>
            <div  class="col-4 p-3 border border-3 border-dark">
              <div class="content-info text-center " style="width: 100%; height: 150px;">
                <p>
                  Menyajikan menu olahraga dan makanan yang baik bagi tubuh
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end about -->
  
  <!-- feature -->
  <section id="features">
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col feature-header text-center">
          <h2>Fitur</h2>
          <hr>
        </div>
      </div>
      <div class="row justify-content-center mt-5">
        <div class="col-4 text-center">
          <div class="feature-img">
            <img src="" alt="">
          </div>
          <h3>Kalkulator Gizi</h3>
        </div>
        <div class="col-4 text-center">
          <div class="feature-img">
            <img src="" alt="">
          </div>
          <h3>Artikel Kesehatan</h3>
        </div>
        <div class="col-4 text-center">
          <div class="feature-img">
            <img src="" alt="">
          </div>
          <h3>Rekomendasi Menu Makanan</h3>
        </div>
      </div>
    </div>
  </section>
  <!-- end features -->

  <!-- Recommendation -->

  <!-- end recommendation -->
  
  <!-- Calc -->
  <section id="calculator">
    <div class="container mt-5">
      <div class="row justify-content-center ">
        <div class="col-6 align-self-center calculator-header">
          <h2>Kalkulator Gizi</h2>
          <p>Coba hitung ketentuan berikut untuk mendapatkan rekomendasi untukmu</p>
        </div>
        <div class="col-6">
          <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Lorem, ipsum dolor.</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Lorem, ipsum.</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Lorem, ipsum.</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Lorem, ipsum dolor.</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- end calc -->

  <!-- feedback -->
  <section id="feedback">
    <div class="container">
      <div class="row text-center">
        <h2>Beri Kami Masukan!</h2>
        <p>
          Pernah menggunakan fitur kami? Tolong beri kami kesan dan masukan untuk perbaikan ke depannya!
        </p>
      </div>
      <form class="row g-3 justify-content-center mt-3 mb-3">
        <div class="col-8">
          <label class="visually-hidden" for="inlineFormInputGroupUsername">Masukan</label>
          <div class="input-group">
            <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Masukan">
          </div>
        </div>
        <div class="col-auto">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </section>
  
  <!-- end feedback -->
@endsection