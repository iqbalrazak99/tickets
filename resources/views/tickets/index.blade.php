@extends('layouts.main')

@section('content')



  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Maklumat Tiket</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
          <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
          <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
          <span data-feather="calendar"></span>
          This week
        </button>
      </div>
    </div>



    <div class="table-responsive">

        <a class="btn btn-primary" href="{{ route('tickets.create') }}" role="button">Tiket Baru</a>

      <table class="table table-striped table-sm">

        <thead>

          <tr>
            <th scope="col">Bil</th>
            <th scope="col">Summary</th>
            <th scope="col">Description</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($tickets as $ticket )
          <tr>
            <td>{{ $ticket->id }}</td>
            <td>{{ $ticket->summary }}</td>
            <td>{{ $ticket->description }}</td>
            <td>{{ $ticket->status }}</td>
            <td>
                <a href='tickets/{{$ticket->id}}' class="btn btn-primary">Update</a>

                <a href='tickets/delete/{{$ticket->id}}' class="btn btn-danger">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </main>
@endsection
