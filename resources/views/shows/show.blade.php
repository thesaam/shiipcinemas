@extends('layouts.app')

@section('content')
  <div class="m-auto py-3">

    <div class="text-center py-2">
      <img src="{{ asset('images/' . $show->image_path) }}" alt="image" class="rounded">
    </div>

    <div class="text-center mt-2">
      <h1 class="logo">
        {{ $show->name }}
      </h1>
    </div>

    <div class="container text-wrap">
      <div class="px-5 py-3">
        <p>{{ $show->description }}</p>
        <h6>{{ $show->showtime}}</h6>
      </div>
    <ul>
      <p class="logo px-3">
          VIEWING TIMES:
        </p>
        @forelse ($show->showVenues as $venue)
        <table class="table">
          <tbody>
            <tr>
              <td>
                {{ $venue->show_venues }}
              </td>
              <td>
                @foreach ($show->show_times as $show_time)    
                    @if($venue->id == $show_time->show_venues_id)
                        {{ $show_time->time}}
                    @endif
                @endforeach
              </td>
            </tr>
          </tbody>
        </table>
          @empty
          <p>
            <a href=""> Add Show times </a>
          </p>
        @endforelse
      </div> 
    </ul>
@endsection