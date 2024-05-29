@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('reservasi') }}
                    </div>
                    <div class="float-end">
                        <a href="{{ route('reservasi.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <img src="{{ asset('storage/reservasis/' . $reservasi->image) }}" class="w-100 rounded">
                    <hr>
                    <p class="tmt-3">
                        {!! $reservasi->reservasi !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
