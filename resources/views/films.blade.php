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
          @forelse ( $films as $film )

          <tr>
            <th scope="row">{{ $film -> id }}</th>
            <td>{{ $film -> title }}</td>
            <td>{{ $film -> original_title }}</td>
            <td>{{ $film -> date }}</td>
            <td>{{ $film -> vote }}</td>
          </tr>

          @empty
              
          @endforelse
          
          
        </tbody>
      </table>
    
@endsection