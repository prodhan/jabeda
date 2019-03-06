@extends('layouts.master')

@section('title', '| Create New Post')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <h1>Create New Post</h1>
            <hr>

            {{-- Using the Laravel HTML Form Collective to create our form --}}
            {{ Form::open(array('route' => 'products.store')) }}

            <div class="form-group">
                {{ Form::label('title', 'Title') }}
                {{ Form::text('name', null, array('class' => 'form-control')) }}
                <br>

                {{ Form::label('body', 'Post Body') }}
                {{ Form::textarea('details', null, array('class' => 'form-control')) }}
                <br>

                {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block')) }}
                {{ Form::close() }}
            </div>
        </div>
    </div>

@endsection