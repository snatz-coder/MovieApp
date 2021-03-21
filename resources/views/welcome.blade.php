@extends('layouts.app')
@section('content')
    <div class="w-100 h-100 d-flex justify-content-center align-items-center">
        <div class="text-center" style="width:24%">
        <h1 class="display-4">Add Action in Life!</h1>
        <h2 class="pt-2"></h2>
        <div class="w-100">
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
            @foreach ($movies as $movies)
            <div class="w-100 d-flex align-items-right justify-content-between">
                <form action="{{route('favourites.store', $movies->id)}}" method="POST">
                 @csrf
                 <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{-- src="{{ asset('js/app.js') }}" --}}
                        <img class="p-1" src="{{URL::asset('/image/722791735_640.jpg')}}" alt="movies" height="110" width="150">
                        {{$movies->title}} |
                        {{$movies->year}} |
                        {{$movies->category}}
                      <span class="badge-pill"><button class="btn btn-success" title="Add to Favourites" type="submit"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                      </svg></button></span>
                     
                  </ul>
                <div class="p-3">
                    <div class="input-group ">
                        <input type="hidden" name="title" id="title" value="{{$movies->title}}" class="form-control">
                        <input type="hidden" name="year" id="year" value="{{$movies->year}}" class="form-control">
                        <input type="hidden" name="category" id="category" value="{{$movies->category}}" class="form-control">
                    </div>
                </div>
                        
             </form>
            </div>

        @endforeach

        </div>
        </div>
    </div>
@endsection
