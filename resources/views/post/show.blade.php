@extends('blog')
@section('title')
{{ $post->title }}
@endsection

@section('page')
<div class="content-single">
  <div class="btn-icon">
    <div><a href="{{route('blog.index')}}" class="btn-share"><i class="fas fa-arrow-alt-circle-left"></i></a></div>
  </div>
  <div class="container-single">
    <div class="img-content">
      <img src="/img/blog-picture-transiago.png" alt="">
    </div>
    <div class="body-content">
      <div class="body-title">
        <div><strong>{{ $post->title }}</strong></div>
      </div>
      <div class="line"></div>
      <p>{{ $post->body }}</p>
      <br>
      <hr>
      <br>
      <i>{{ url($post->slug) }}</i>
      <div class="emoticon">
        <span>1902K</span>
        <a href="#" class="fas fa-heart"></a>
      </div>
    </div>
  </div>
</div>
@endsection
