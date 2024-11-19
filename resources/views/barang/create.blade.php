@extends('layout.app')

@section('content')
    <main class="flex-shrink-0">
        <div class="container">
            <div class="card mt-5">
                <div class="card-header">
                    <h5>Tambah Data Barang</h5>
                </div>
                
                <div class="card-body">
                    @if ($errors->all())
                 <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                 </div>                        
                    @endif

                <div class="card-body">
                    <form action="{{ route('barang.store')}}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="nama_barang" class="form-label"><b>Nama Barang</b></label>
                            <input type="text" name="nama_barang" class="form-control" id="nama_barang" value="{{old('nama_barang')}}">
                        </div>

                        <div class="mb-4">
                            <label for="harga_barang" class="form-label"><b>Harga Satuan</b></label>
                            <input type="number" name="harga_barang" class="form-control" id="harga_barang" value="{{old('harga_barang')}}">
                        </div>

                        <div class="mb-4">
                            <label for="jumlah_barang" class="form-label"><b>Jumlah Barang</b></label>
                            <input type="number" name="jumlah_barang" class="form-control" id="jumlah_barang" value="{{old('jumlah_barang')}}">
                        </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                    <a href="{{ route('barang.index')}}" class="btn btn-dark">Kembali</a>
                </div>
            </div>
        </div>
    </main>
@endsection