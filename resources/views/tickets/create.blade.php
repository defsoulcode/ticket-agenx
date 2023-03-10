@extends('layouts.main')

@section('container')
    <div class="col-lg-6 shadow mx-auto my-5 p-3 border-rounded">
        <div class="row text-center">
            <h4>Form Buy Ticket</h4>
        </div>
        <div class="row mt-3">
            <form class="px-4" action="{{ route('tickets.store') }}" method="POST">
                @csrf
                <div class="form-floating mb-2">
                    <input required type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                        name="nama" placeholder="nama" value="{{ old('nama') }}">
                    <label for="nama">Name</label>
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating mb-2">
                    <input required type="text" class="form-control @error('ktp') is-invalid @enderror" id="ktp"
                        name="ktp" placeholder="KTP" value="{{ old('ktp') }}">
                    <label for="ktp">ID</label>
                    @error('ktp')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating mb-2">
                    <input required type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                        name="email" placeholder="name@example.com" value="{{ old('email') }}">
                    <label for="floatingInput">Email</label>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary px-4 py-2 mt-2" type="submit">Order</button>
                </div>
            </form>
        </div>
    </div>
@endsection
