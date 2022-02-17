@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Menu {{$item->judul}}</h1>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow">
        <div class="card-body">
            <form action="{{route('menu.update', $item->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select name="kategori" id="kategori" required class="form-control">
                        <option value="{{$item->kategori}}">{{$item->kategori}}</option>
                        <option value="DAGING">Daging</option>
                        <option value="SAYUR">Sayur</option>
                        <option value="CAMPURAN">Campuran</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nm_makanan">Nama Makanan</label>
                    <input type="text" class="form-control" name="nm_makanan" placeholder="Nama Menu" value="{{ $item->nm_makanan}}">
                </div>
                <div class="form-group">
                    <label for="nm_makanan">Jumlah Kalori</label>
                    <input type="text" class="form-control" name="kalori" placeholder="Jumlah Kalori" value="{{ $item->kalori}}">
                </div>
                <div class="form-group">
                    <label for="bahan">Bahan Makanan</label>
                    <textarea name="bahan" id="bahan" class="form-control">{{$item->bahan}}</textarea>
                </div>
                <div class="form-group">
                    <label for="konten">Konten</label>
                    <textarea name="konten" id="konten" class="form-control">{{$item->konten}}</textarea>
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar/Thumbnail</label>
                    <input type="file" class="form-control" name="gambar" placeholder="Gambar">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Ubah</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection

