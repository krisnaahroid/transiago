@extends('layouts.app')

@section('title', '| Create')

@section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('css/select2.min.css') !!}
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>

    <script>
        tinymce.init({
          selector:'textarea',
          plugins: "textcolor colorpicker image lists table link",
          toolbar: "forecolor backcolor image numlist bullist table link",
          image_caption: true
        });
    </script>
@endsection

@section('content')
<div class="container-fluid">
  @include('inc._messages')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <div class="row">
                      <div class="col-md-10 col-md-offset-1">
                        <h2>Create new Service</h2>
                        <hr>
                        {!! Form::open(array('route' => 'post.service.post', 'data-parsley-validate' => '', 'files' => true)) !!}
                          {{ Form::label('title', 'Title') }}
                          {{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '225')) }}
                            <br>
                          {{ Form::label('slug', 'Slug' )}}
                          {{ Form::text('slug', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255')) }}

                            <br>

                            {{ Form::label('upload_img', 'Upload Image') }}
                            {{ Form::file('upload_img') }}
                            <br>

                          {{ Form::label('body', "Post Body:") }}
                          {{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) }}
                            <br>
                          {{ Form::submit('Create Post', array('class' => 'btn btn-secondary btn-lg btn-block'))}}
                        {!! Form::close() !!}
                      </div>
                    </div>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    {!! Html::script('js/parsley.min.js') !!}
    {!! Html::script('js/select2.min.js') !!}


    <script type="text/javascript">
      $('.select2-multi').select2();
    </script>
@endsection
