@extends('blog')
@section('title')
Blog
@endsection
@section('page')


<!-- ============ Main Content ============== -->

    @foreach ($posts as $post)
    <div class="content">
      <div class="img-content">
        <img src="{{ asset('/images/'. $post->image )}}" alt="{{ $post->image }}">
      </div>
      <div class="body-content">
        <div class="body-title">
          <div><strong>{{ $post->title }}</strong></div>
        </div>
        <div class="line"></div>
        <p>{!! substr($post->body, 0,400) !!}{!! strlen($post->body) > 100 ? " ...":""!!}</p>
        <a href="{{ route('blog.single', $post->slug) }}" class="btn-primary btn-blog">Read More</a>
      </div>
      <a href="#" class="btn-share"><i class="fas fa-share"></i></a>
    </div>
    @endforeach
  <br>
  <br>
    <div class="center">
      {!! $posts->links() !!}
    </div>



@endsection
