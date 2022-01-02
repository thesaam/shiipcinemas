@extends('layouts.app')

@section('content')

@if (Auth::user())
    <div class="container m-4">
        <a href="shows/create" class="btn">
            Add a new movie &rarr;
        </a>
    </div>
    @else
        <p class="logo italic px-5">
            Please Log in the add a new movie
        </p>
@endif

<div class="container-fluid mt-5">
    <div class=" py-2">
        @foreach ($shows as $show)
            <div class="mx-auto">
                @if (Auth::user())
                
                    <div class="float-end px-3 pt-2">
                        
                        <a href="shows/{{ $show->id }}/edit" class="text-success">
                            Edit &rarr;
                        </a>
                        
                        <form action="/shows/{{ $show->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="delete text-danger">
                                Delete &rarr;
                            </button>
                        
                        </form>
                        
                    </div>
                @endif
            </div>
            
            <div class="px-5 py-3 d-flex">
                <div class="text-center float-left">
                    <img src="{{ asset('images/' . $show->image_path) }}" alt="image" class="rounded">
                </div>
                <div class="d-flex flex-column px-3 text-wrap justify-content-center">
                    <h4>
                        <a href="/shows/{{ $show->id }}">
                            {{ $show->name }}
                        </a>
                    </h4>
                    <p>{{ $show->description }}</p>
                </div>
            </div>
            <ul>
                <p class="logo px-3">VIEWING TIMES:</p>
                  @forelse ($show->showVenues as $venue)
                    <div class="d-flex">
                        <div class="d-flex flex-column px-3">
                            <div class="px-2">
                                {{ $venue->show_venues }}
                            </div>
                        </div>
                        <div class="d-flex flex-column mx-3">
                            <div class="px-2">
                                @foreach ($show->show_times as $show_time)    
                                    @if($venue->id == $show_time->show_venues_id)
                                        {{ $show_time->time}}
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @empty
                    <p>
                      <a href="/venues/{{ $show->id }}"> Add Show times </a>
                    </p>
                  @endforelse
                </div> 
              </ul>
        @endforeach
    </div>
</div>

@endsection

    
