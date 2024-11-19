@extends('layout.app')

@section('content')
    
<main class="flex-srink-0">
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h5>Detail Barang</h5>
            </div>

            <div class="card-body">
              <div class="row">
                    <label class="col-sm-2 col-form-label">Nama Barang</label>
                <div class="col-sm-10">
                  <b> {{ $barang->nama_barang }} </b>
                </div>
              </div>
            </div>

            <div class="card-body">
                <div class="row">
                      <label class="col-sm-2 col-form-label">Harga</label>
                  <div class="col-sm-10">
                    <b> {{ $barang->harga_barang }} </b>
                  </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                      <label class="col-sm-2 col-form-label">Jumlah Barang</label>
                  <div class="col-sm-10">
                    <b> {{ $barang->jumlah_barang }} </b>
                  </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{route ('barang.index')}}" class="btn btn-warning">Kembali</a>
            </div>
        </div>
    </div>
</main>
@endsection