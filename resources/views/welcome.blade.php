@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="text-center" style="width:100%">
            <h1 class="display-4">Add Action in Life!</h1>
            <div class="row">
                <div class="col-md">
                    <h2 class="display-6">Add Movie</h2>
                    <form method="POST" action="movie" class="mb-3">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" id="title" placeholder="Enter Movie">
                        </div>
                        <div class="form-inline">
                            <div class="form-group mb-1 ">
                                <input type="text" class="form-control" name="year" id="year" placeholder="Enter Year">
                            </div>
                            <div class="form-group mx-sm-3 mb-1">
                                <input type="text" class="form-control" name="category" id="category"
                                    placeholder="Enter Category">
                            </div>
                            <button type="submit" class="btn btn-primary align-items-left">Add</button>
                        </div>
                    </form>
                    @if (session()->has('alert'))
                    <div class="alert alert-success">
                        {{ session()->get('alert') }}
                    </div>
                @endif
                </div>
                <div class="col-md">
                    <h2 class="display-6">Movie List</h2>
                    <div class="mh-75 overflow-auto" style="height: 35em; overflow:auto">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        @foreach ($movies as $movies)
                        <div class="overflow-auto">
                            <div class=" align-items-right justify-content-between ">
                                <form action="{{ route('favourites.store', $movies->id) }}" method="POST">
                                    @csrf
                                    <ul class="list-group">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            {{-- src="{{ asset('js/app.js') }}" --}}
                                            <img class="p-1" src="{{ URL::asset('/image/722791735_640.jpg') }}"
                                                alt="movies" height="110" width="150">
                                            {{ $movies->title }} |
                                            {{ $movies->year }} |
                                            {{ $movies->category }}
                                            <span class="badge-pill"><button class="btn btn-success"
                                                    title="Add to Favourites" type="submit"><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-heart" width="20" height="20"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path
                                                            d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                    </svg></button></span>

                                    </ul>
                                    <div class="p-3">
                                        <div class="input-group ">
                                            <input type="hidden" name="title" id="title" value="{{ $movies->title }}"
                                                class="form-control">
                                            <input type="hidden" name="year" id="year" value="{{ $movies->year }}"
                                                class="form-control">
                                            <input type="hidden" name="category" id="category"
                                                value="{{ $movies->category }}" class="form-control">
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>


                        @endforeach

                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
