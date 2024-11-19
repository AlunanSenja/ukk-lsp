@extends('layout.app')

@section('content')
    
<main class="flex-shrink-0">
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h5>Data Barang</h5>
            </div>
            <div class="card-body">
                @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
                @enderror
                @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @enderror
                <table class="table table-bordered">
                    <thead>
                        <th>No</th>
                        <th>ID</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th class="text-center">Opsi</th>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @forelse ( $barang as $dt )
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $dt->id_barang }}</td>
                                <td>{{ $dt->nama_barang }}</td>
                                <td>{{ $dt->harga_barang }}</td>
                                <td>{{ $dt->jumlah_barang }}</td>
                                <td class="text-center text-nowarp">
                                    <form onsubmit="return confirm('hapus data barang?')" action="{{ route('barang.destroy', $dt->id_barang) }}" method="post">
                                        <a href="{{ route('transaksi.beli', $dt->id_barang) }}" class="btn btn-success btn-sm">Beli</a>
                                        <a href="{{ route('barang.show', $dt->id_barang) }}" class="btn btn-primary btn-sm">Detail</a>
                                        <a href="{{ route('barang.edit', $dt->id_barang) }}" class="btn btn-warning btn-sm">Edit</a>
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <td colspan="8">there is no data yet</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <a href="{{ route('barang.create') }}" class="btn btn-warning">Tambah Data</a>
                <a href="{{ route('transaksi.index') }}" class="btn btn-dark">Riwayat Transaksi</a>
            </div>
        </div>
    </div>
</main>


@endsection