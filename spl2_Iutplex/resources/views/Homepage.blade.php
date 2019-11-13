@extends('layouts.app')

@section('content')
   <div class="jumbotron text-center">
      <h1>Welcome to IUTplex</h1><br>
      <p>IUTplex is a movie ticket management system where you can book your tickets online.</p>
      <p>New to here just register, its free.</p>
   </div>

   <hr>

   <ul>
      @foreach ($slots as $task)
         <li class="list-group-items">{{ $task }}</li>
      @endforeach
   </ul>

@endsection
