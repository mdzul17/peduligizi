@extends('layouts.app')

@section('title')
    PeduliGizi | Rekomendasi Menu
@endsection

@section('content')
        <!-- header menu -->
        <section id="header-menu">
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-md-2 justify-content-evenly align-items-center">
                    <div class="col col-md-6">
                        <div class="head-header">
                            <h1>Lorem, ipsum dolor.</h1>
                        </div>
                        <div class="content-header">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem pariatur necessitatibus unde tempore ad maiores quibusdam sequi, harum excepturi soluta.</p>
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="image-header">
                            <img src="" alt="abc" srcset="">
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
                <div class="row row-cols-4 justify-content-between">
                    <div class="col card-item">
                        <div class="card" style="width: 18rem;">
                            <div class="card-category">
                              <p>Daging</p>
                            </div>
                            <img src="{{url('frontend/images/5912.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
                    </div>
                    <div class="col card-item">
                        <div class="card" style="width: 18rem;">
                            <div class="card-category">
                              <p>Daging</p>
                            </div>
                            <img src="{{url('frontend/images/5912.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
                    </div>
                    <div class="col card-item">
                        <div class="card" style="width: 18rem;">
                            <div class="card-category">
                              <p>Daging</p>
                            </div>
                            <img src="{{url('frontend/images/5912.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
                    </div>
                    <div class="col card-item">
                        <div class="card" style="width: 18rem;">
                            <div class="card-category">
                              <p>Daging</p>
                            </div>
                            <img src="{{url('frontend/images/5912.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
                    </div>
                    <div class="col card-item">
                        <div class="card" style="width: 18rem;">
                            <div class="card-category">
                              <p>Daging</p>
                            </div>
                            <img src="{{url('frontend/images/5912.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
                    </div>
                    <div class="col card-item">
                        <div class="card" style="width: 18rem;">
                            <div class="card-category">
                              <p>Daging</p>
                            </div>
                            <img src="{{url('frontend/images/5912.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
                    </div>
                    <div class="col card-item">
                        <div class="card" style="width: 18rem;">
                            <div class="card-category">
                              <p>Daging</p>
                            </div>
                            <img src="{{url('frontend/images/5912.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
                    </div>
                    <div class="col card-item">
                        <div class="card" style="width: 18rem;">
                            <div class="card-category">
                              <p>Daging</p>
                            </div>
                            <img src="{{url('frontend/images/5912.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- end list menu -->
@endsection