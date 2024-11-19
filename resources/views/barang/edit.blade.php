@extends('layout.app')

@section('content')
<main class="flex-shrink-10">
   <div class="container">
      <div class="card" style="margin-top: 100px;">
        <div class="card-header">
            <h5>Edit Data Barang</h5>
        </div>
        
        <div class="card-body">
            @if ($errors->all())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('barang.update', $barang->id_barang)}}" method="POST">
                @csrf
            @method('PUT')
            <div class="row mb-3">
                <label for="nama_barang" class="col-sm-2 col-form-lable">Nama Barang</label>
                <div class="col-sm-10">
                    <input type="text" name="nama_barang" value="{{old ('nama_barang', $barang->nama_barang)}}" class="form-control" id="nama_barang">
                </div>
             </div>

             <div class="row mb-3">
                <label for="harga_barang" class="col-sm-2 col-form-lable">Harga</label>
                <div class="col-sm-10">
                    <input type="number" name="harga_barang" value="{{old ('harga_barang', $barang->harga_barang)}}" class="form-control" id="harga_barang">
                </div>
             </div>

             <div class="row mb-3">
                <label for="jumlah_barang" class="col-sm-2 col-form-lable">Stok</label>
                <div class="col-sm-10">
                    <input type="number" name="jumlah_barang" value="{{old ('jumlah_barang', $barang->jumlah_barang)}}" class="form-control" id="jumlah_barang">
                </div>
             </div>

             <div class="card-footer">
             <button type="submit" class="btn btn-primary">Simpan</button>
             </form>
               <a href="{{ route ('barang.index')}}" class="btn btn-warning">Kembali</a>
               </div>
        </div>
      </div>
   </div>
</main>
@endsection