@extends('layouts.app')
@section('content')
    <div class="w-100 h-100 d-flex justify-content-center align-items-center">
        <div class="text-center" style="width:40%">
        <h1 class="display-2">Movies App</h1>
        <h2 class="pt-2">Movies List</h2>
        <div class="w-100">
            @foreach ($movies as $movies)
            <div class="w-100 d-flex align-items-center justify-content-between">
                <form action="{{route('favourites.store', $movies->id)}}" method="POST">
                 @csrf
                 <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{$movies->title}}
                        {{$movies->year}}
                        {{$movies->category}}
                      <span class="badge-pill"><button class="btn btn-success" type="submit"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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