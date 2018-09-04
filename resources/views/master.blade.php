<!DOCTYPE html>
<html lang="en">
<head>
@include('inc._head')
</head>
<body>

    @include('inc._headerHome')

    @yield('page')

    @include('inc._footerHome')
    
    <script src="/js/jquery-3.3.1.min.js"></script>
</body>
</html>
