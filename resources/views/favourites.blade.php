@extends('layouts.app')
@section('content')
<div class="w-100 h-100 d-flex justify-content-center align-items-center">
    <div class="text-center" style="width:100%">
        <h2 class="pt-2">Favourites List</h2>
        <div class=" w-80">
        <table class="table">
            <tr class="p-4">
                {{-- <td >Id</td> --}}
                <td >Title</td>
                <td >Year</td>
                <td >Category</td>
                <td ></td>
            </tr>
            @foreach ($favourites as $favourites)
            <tr class="p-4">
                {{-- <td >{{$favourites->id}}</td> --}}
                <td >{{$favourites->title}}</td>
                <td >{{$favourites->year}}</td>
                <td >{{$favourites->category}}</td>
                <td ><button class="btn btn-danger"><a style="text-decoration:none; color:white;" href={{"delete/".$favourites['id']}}><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <line x1="4" y1="7" x2="20" y2="7" />
                    <line x1="10" y1="11" x2="10" y2="17" />
                    <line x1="14" y1="11" x2="14" y2="17" />
                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                  </svg></a></button></td>
            </tr>
            @endforeach
        </table>
        </div>
        </div>
    </div>
@endsection
