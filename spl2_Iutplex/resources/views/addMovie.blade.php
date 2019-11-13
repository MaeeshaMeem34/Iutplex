@extends('layouts.app')

@section('title')
   movie info
@endsection

@section('content')
   <div class="container">
      <h1>add movie</h1>
   </div>



   <form method="post"  action="{{ route('movie-info-submit')}}">
       @csrf


       <div class="form-group">

           <label for="name">Movie Name</label>
           <input type="text" class="form-control" name="name" id="name" >

       </div>

       <div class="form-group">

           <label for="Directorname">Director name</label>
           <input type="text" class="form-control" name="Directorname" id="Directorname" >

       </div>

       <div class="form-group">

           <label for="Duration">Duration</label>
           <input type="text" class="form-control" name="Duration" id="Duration" >

       </div>

       <div class="form-group">

           <label for="Description">Description</label>
           <input type="text" class="form-control" name="Description" id="Description" >

       </div>












  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection
