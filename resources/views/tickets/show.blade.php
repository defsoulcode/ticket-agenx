@extends('layouts.main')
@section('container')
    @if (session()->has('success'))
        <script>
            alert('Your ticket was successfully ordered!')
        </script>
    @endif
    <div class="col-lg-6 shadow mx-auto my-5 py-4 ps-4 pe-3 border-rounded">
        <div class="row text-center">
            <h4>Your Order Ticket</h4>
        </div>
        <table class="mt-3 ms-4">
            <tr>
                <td><strong>No Ticket</strong></td>
                <td><strong>:</strong> {{ $ticket->number }}</td>
            </tr>
            <tr>
                <td><strong>Order Date</strong></td>
                <td><strong>:</strong> {{ $ticket->created_at }}</td>
            </tr>
            <tr>
                <td><strong>Customer Name</strong></td>
                <td><strong>:</strong> {{ $ticket->nama }}</td>
            </tr>
            <tr>
                <td><strong>ID</strong></td>
                <td><strong>:</strong> {{ $ticket->ktp }}</td>
            </tr>
            <tr>
                <td><strong>Email</strong></td>
                <td><strong>:</strong> {{ $ticket->email }}</td>
            </tr>
            <tr>
                <td><strong>Status</strong></td>
                <td><strong>:</strong> {{ $ticket->checked === 'yes' ? 'Not Available' : 'Available' }}</td>
            </tr>
        </table>
        <div class="d-flex justify-content-end me-4">
            <a class="btn-sm btn-info btn me-3" href="/tickets/downloadPDF/{{ $ticket->id }}">Download</a>
            <a class="btn-sm btn-primary btn" href="/tickets/create">Order Again</a>
        </div>
    </div>
@endsection
