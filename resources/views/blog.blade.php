<!DOCTYPE html>
<html lang="en">
<head>
@include('inc._head')
<!-- <link rel="stylesheet" href="/css/app.css"> -->
</head>
<body>
    @include('inc._headerBlog')
    <!-- @include('inc._messages') -->

    <div id="main-blog">
    <div class="container-blog-content">
      <div class="content-main">
          @yield('page')
      </div>

      @include('inc._category')
    </div>


    </div>

    @include('inc._footer')
    <script src="/js/jquery-3.3.1.min.js"></script>
</body>
</html>
