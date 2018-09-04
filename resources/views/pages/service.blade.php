@extends('master')

@section('title', "$posts->title")
@section('page')
<div class="content-single container-service">
  <div class="btn-icon">
    <div><a href="{{route('home')}}" class="btn-share"><i class="fas fa-arrow-alt-circle-left"></i></a></div>
  </div>
  <div class="container-single">
    <div class="img-content-single">
      <img src="{{ asset('imgs/'. $posts->image) }}" alt="">
    </div>
    <div class="body-content">
      <div class="body-title">
        <div><strong>{{ $posts->title }}</strong></div>
      </div>
      <div class="line"></div>
      <p>{{ $posts->body }}</p>
      <br>
      <hr>
      <br>
      Posted by : <em>Transiago | Translation</em>
      <div class="emoticon">
        <span>1902K</span>
        <a href="#" class="fas fa-heart"></a>
      </div>
    </div>
  </div>
</div>
@endsection
