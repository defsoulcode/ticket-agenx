@extends('admin.layouts.main')
@section('container')
    @if (session()->has('deleted'))
        <script>
            alert("Successfully delete orders.");
        </script>
    @endif
    @if (session()->has('edited'))
        <script>
            alert("Successfully updated the order.");
        </script>
    @endif
    <div class="container">
        <div class="row my-3">
            <h3 class="my-2 mb-4">List Orders</h3>
            <table class="table table-striped">
                <tr>
                    <th class="text-center">#</th>
                    <th>No Ticket</th>
                    <th>Customer Name</th>
                    <th>ID</th>
                    <th>Email</th>
                    <th class="text-center">Check In</th>
                    <th class="text-center">Action</th>
                </tr>
                @foreach ($tickets as $ticket)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $ticket->number }}</td>
                        <td>{{ $ticket->nama }}</td>
                        <td>{{ $ticket->ktp }}</td>
                        <td>{{ $ticket->email }}</td>
                        <td class="text-center"><span
                                data-feather="{{ $ticket->checked === 'yes' ? 'check-square' : 'square' }}"> </span></td>
                        <td class="text-center">
                            <form action="{{ route('tickets.destroy', $ticket->id) }}" method="post">
                                <a href="admin/{{ $ticket->id }}/edit"><span data-feather="edit"></span></a>
                                @csrf
                                @method('DELETE')
                                <button class="badge bg-danger " type="submit"><span data-feather="delete"></span></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        {{ $tickets->links() }}
    </div>
@endsection
