@extends('layouts.app')

@section('content')

<div class="jumboteon jumbotron-fluid">
        <div class="conteiner">
            <h1 class="display-4">Home Page</h1>
            <p class="lead">This is the Home Page</p>
        </div>
        <p>Nama : {{$nama}}</p>
        <p>Mata pelajaran</p>
        <ul>
            @foreach($pelajaran as $p)
            <li>{{$p}}</li>
            @endforeach
        </ul>
    </div>
@endsection