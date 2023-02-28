@extends('layouts.main')

@section('container')
    @if (session()->has('success'))
        <script>
            alert("Tiket berhasil dipesan.");
        </script>
    @endif
    <div class="col-lg-10 shadow mx-auto my-5 p-3 border-rounded">
    <div style="height: 80px"></div>
        <div class="text-center">
            <h2>Welcome to Agent X</h2>
                <br>
            <p>Agent X is a concert organizer that requires an application to provide online concert ticket booking services to the public, as well as facilitate the process of checking at the concert entrance gate.</p>
            <h5>Buy a concert ticket now by pressing the button below</h5>
            
            <a class="btn btn-primary" href="{{ route('tickets.create') }}" class="decoration-non">Buy Now</a>
        </div>
        <div style="height: 80px"></div>
    </div>
@endsection
