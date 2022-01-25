@extends('layout.main')

@section('content')

    <h1>Film</h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Original title</th>
            <th scope="col">Date</th>
            <th scope="col">Vote</th>
          </tr>
        </thead>
        <tbody>
          @forelse ( $movies as $movie )

          <tr>
            <th scope="row">{{ $movie -> id }}</th>
            <td>{{ $movie -> title }}</td>
            <td>{{ $movie -> original_title }}</td>
            <td>{{ $movie -> date }}</td>
            <td>{{ $movie -> vote }}</td>
          </tr>

          @empty
              
          @endforelse
          
          
        </tbody>
      </table>
    
@endsection