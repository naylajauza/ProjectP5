@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('Dashboard') }}
                    </div>
                    <div class="float-end">
                        <a href="{{ route('transaksi.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('transaksi.update', $transaksi->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Metode Pembayaran</label>
                            <input type="text" class="form-control @error('metode_pembayaran') is-invalid @enderror" name="metode_pembayaran"
                                value="{{ $transaksi->metode_pembayaran }}" placeholder="metode pembayaran" required>
                            @error('metode_pembayaran')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jumlah Pembayaran</label>
                            <input type="number" class="form-control @error('jumlah_pembayaran') is-invalid @enderror" name="jumlah_pembayaran"
                                value="{{ $transaksi->jumlah_pembayaran }}" placeholder="jumlah pembayaran" required>
                            @error('jumlah_pembayaran')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Pembayaran</label>
                        <input type="text" class="form-control @error('tanggal_transaksi') is-invalid @enderror" name="tanggal_transaksi"
                            value="{{ $transaksi->tanggal_transaksi }}" placeholder="Tanggal transaksi" required>
                        @error('tanggal_transaksi')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                        <div class="mb-3">
                            <label for="">Id Reservasi</label>
                            <select name="id_reservasi" id="" class="form-control">
                                @foreach ($reservasi as $item)
                                    <option value="{{$item->id}}" {{$item->id == $transaksi->id_reservasi ? 'selected': ''}}>{{ $item->id }}</option>
                                @endforeach
                            </select>
                        </div>


                        <button type="submit" class="btn btn-sm btn-primary">SIMPAN</button>
                        <button type="reset" class="btn btn-sm btn-warning">RESET</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
