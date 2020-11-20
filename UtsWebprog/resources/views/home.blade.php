@extends('layout/main')
@section('title', 'Beeflix')
@section('genre1')
@endsection
@section('isi')
<div class="container">
<div class="column">
@foreach($genre as $genre)
<h1>{{$genre->name}}</h1>
<div class="row" style="display: flex">
@foreach($movies as $genre->movies)    
<div class="card"style="width: 18rem;">
  <img class="card-img-top" src="{{asset('stok/' . $genre->movies->photo)}}"  alt="{{$genre->movies->title}}">
  <div class="card-body">
  <div class="text-center">
    <h5 class="card-title">{{$genre->movies->title}}</h5>
    <a href="#" class="btn btn-dark">LIHAT FILM</a>
  </div>
  </div>
</div>
@endforeach
</div>
@endforeach
</div>
</div>
@endsection