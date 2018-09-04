@extends('layouts.app')

@section('title', '| All Tags')

@section('content')
@include('inc._messages')
<div class="container-fluid col-md-offset-1">

    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard | Category</div>
                <div class="panel-body">
                    <div class="row">
                      <div class="col-md-8 col-md-offset-2">
                        <h2>All Tags</h2>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Name</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($tags as $tag)
                                <tr>
                                  <td>{{ $tag->id }}</td>
                                  <td>{{ $tag->name }}</td>
                                </tr>
                              @endforeach
                            </tbody>
                          </table>
                      </div>
                    </div>
                    <br>
                    <br>
                    <br>
                </div>
                <br>

                <!-- <a href="{{ route('dashboard') }}"  class="btn btn-secondary btn-lg btn-block">Back to Home</a> -->
            </div>
        </div>
        <div class="col-md-3">
          <div class="well">
            {!! Form::open(array('route' => 'tag.store')) !!}
              <h2>New Tag</h2>
              {{ Form::label('name', 'Name:') }}
              {{ Form::text('name', null, array('class' => 'form-control')) }}
              <br>
              {{ Form::submit('Create New Tag', ['class' => 'btn btn-primary btn-block']) }}
              {{ Form::close() }}
          </div>
        </div>
    </div>
</div>

@endsection
