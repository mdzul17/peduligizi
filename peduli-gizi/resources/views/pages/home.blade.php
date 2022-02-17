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
            <a href="#about" class="btn">Pelajari lebih lanjut</a>
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
            <p class="mt-4" style="color:black">
              Berlatar dari SDGs Indonesia 2030, kami ikut berkontribusi dalam hal-hal berikut:
            </p>
          </div>
          <div class="row justify-content-evenly mt-2 mb-3">
            <div class="col-4 p-3 card-about">
              <div class="content-info text-center" style="width: 100%; height: 150px;">
                <img src="{{url('frontend/images/one.png')}}" alt="" style="width: 50px; height: 50px">
                <br><br>
                <h4>
                  Memperbaiki gizi melalui pola makan dan menu yang baik
                </h4>
              </div>
            </div>
            <div class="col-4 p-3 card-about">
              <div class="content-info text-center " style="width: 100%; height: 100%;">
                <img src="{{url('frontend/images/2.png')}}" alt="" style="width: 50px; height: 50px">
                <br><br>
                <h4>
                  Mengurangi penyakit yang mungkin terjadi dengan menjaga pola hidup sehat
                </h4>
              </div>
            </div>
            <div class="w-100"></div>
            <div class="w-100"></div>
            <div class="col-4 p-3 card-about" style="height: 250px;">
              <div class="content-info text-center" style="width: 100%; height: 150px">
                <img src="{{url('frontend/images/3.png')}}" alt="" style="width: 50px; height: 50px">
                <br><br>
                <h4>
                  Membantu menghitung kebutuhan gizi melalui kalkulator gizi
                </h4>
              </div>
            </div>
            <div class="col-4 p-3 card-about" style="height: 250px;">
              <div class="content-info text-center " style="width: 100%; height: 150px;">
                <img src="{{url('frontend/images/four.png')}}" alt="" style="width: 50px; height: 50px">
                <br><br>
                <h4>
                  Menyajikan menu olahraga dan makanan yang baik bagi tubuh
                </h4>
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
            <img src="{{ url('frontend/images/calc.jpg')}}" alt="">
          </div>
          <a href="#" class="nav-link link-dark">
            <h3>Kalkulator Gizi</h3>
          </a>
        </div>
        <div class="col-4 text-center">
          <div class="feature-img">
            <img src="{{ url('frontend/images/news paper.png')}}" alt="">
          </div>
          <a href="{{route('article')}}" class="nav-link link-dark">
            <h3>Artikel Kesehatan</h3>
          </a>
        </div>
        <div class="col-4 text-center">
          <div class="feature-img">
            <img src="{{ url('frontend/images/food.png')}}" alt="">
          </div>
          <a href="{{route('rekomendasi')}}" class="nav-link link-dark">
            <h3>Rekomendasi Menu Makanan</h3>
          </a>
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
        <div class="col-8 align-self-center calculator-header">
          <div class="img-background" style="z-index:-1; position: absolute; margin-top: -150px; margin-left: -275px">
            <img src="{{url('frontend/images/calculator.png')}}" alt="" style="width: 600px">
          </div>
          <div class="calc-content" style="z-index: 1; margin-left: 275px">
            <h2>Kalkulator Gizi</h2>
            <p class="text-dark">Coba hitung ketentuan berikut untuk mendapatkan rekomendasi untukmu</p>
          </div>
        </div>
        <div class="col-4">
          <form action="hitung" method="POST">
            @csrf
            <div class="mb-3">
              <label for="usia" class="form-label">Masukkan usiamu</label>
              <input type="number" class="form-control" id="usia" name="usia">
            </div>
            <div class="mb-3">
              <label for="tbadan" class="form-label">Masukkan tinggi badanmu</label>
              <input type="number" class="form-control" id="tbadan" name="tbadan">
            </div>
            <div class="mb-3">
              <label for="bbadan" class="form-label">Masukkan berat badanmu</label>
              <input type="number" class="form-control" id="bbadan" name="bbadan">
            </div>
            <div class="mb-3">
              <p>Masukkan jenis kelamin</p>
              <input type="radio" class="form-check-input" id="laki2" name="jkelamin" value="laki-laki">
              <label for="laki2" class="form-label">Laki-laki</label>
              <input type="radio" class="form-check-input" id="perempuan" name="jkelamin" value="perempuan">
              <label for="perempuan" class="form-label">Perempuan</label>
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
        <p class="text-dark">
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