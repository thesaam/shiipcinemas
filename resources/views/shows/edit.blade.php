@extends('layouts.app')

@section('content')

  <div class="m-auto py-3">
    <div class="text-center"> 
      <h1 class="logo">
        Update Movie
      </h1>
    </div>
  </div>

  <div class="d-flex justify-content-center px-5 text-wrap text-center">
    <form action="/shows/{{ $show->id }}" method="POST">
      @csrf
      @method('PUT')

      <div class="block my-2">
        <input type="text" class=" px-4 form-control" placeholder="Movie Title" name="name" value="{{ $show->name }}">
      </div>
      <div class="block my-2">
        <textarea type="text" class="block px-4 form-control" rows="3" placeholder="Description" name="description" value="{{ $show->description }}"></textarea>
      </div>
      <button class="btn form-control" type="submit">
        Submit
      </button>
    </form>
  </div>

@endsection

    
