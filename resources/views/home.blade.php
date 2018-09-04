@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    <ul>
                      <li><a href="{{ route('post.create') }}">Posting</a></li>
                      <li><a href="{{ route('category.index') }}">Category</a></li>
                      <li><a href="{{ route('tag.index') }}">Tag</a></li>
                      <li><a href="{{ route('post.index') }}">Service</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
