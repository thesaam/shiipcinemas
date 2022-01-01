@extends('layouts.app')

@section('content')

  <div class="m-auto py-3">
    <div class="text-center">
      <h1 class="logo">
        Add New Movie
      </h1>
    </div>
  </div>

  <div class="d-flex justify-content-center px-5 text-wrap text-center">
    <form action="/shows" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="block my-2">
        <input type="file" class=" px-4 form-control" name="image">
      </div>

      <div class="block my-2">
        <input type="text" class=" px-4 form-control" placeholder="Movie Title" name="name">
      </div>

      <div class="block my-2">
        <textarea type="text" class="block px-4 form-control" rows="3" placeholder="Description" name="description"></textarea>
      </div>

      <button class="btn form-control" type="submit">
        Submit
      </button>
    </form>
  </div>

  @if ($errors->any())
      <div class="text-center">
        @foreach ($errors->all() as $error)
          <li class="text-danger list-none">
              {{ $error }}
          </li>
        @endforeach
      </div>
    @endif
@endsection

    
