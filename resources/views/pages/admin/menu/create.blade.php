@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Menu</h1>
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
            <form action="{{route('menu.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <input type="text" class="form-control" name="kategori" placeholder="kategori" value="{{ old('kategori')}}">
                </div>
                <div class="form-group">
                    <label for="nm_makanan">Nama Menu</label>
                    <input type="text" name="nm_makanan" id="nm_makanan" rows="10" class="d-block w-100 form-control">{{old('nm_makanan')}}</input>
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar/Thumbnail</label>
                    <input type="file" class="form-control" name="gambar" placeholder="Gambar">
                </div>
                <div class="form-group">
                    <label for="konten">Konten</label>
                    <textarea name="konten" id="konten" rows="10" class="d-block w-100 form-control" value="{{ old('konten')}}"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection

