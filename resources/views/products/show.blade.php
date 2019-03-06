@extends('layouts.master')

@section('title', '| View Post')

@section('content')

    <div class="container">

        <h1>{{ $post->name }}</h1>
        <hr>
        <p class="lead">{{ $post->details }} </p>
        <hr>
        {!! Form::open(['method' => 'DELETE', 'route' => ['products.destroy', $post->id] ]) !!}
        <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
        @can('Edit Post')
            <a href="{{ route('products.edit', $post->id) }}" class="btn btn-info" role="button">Edit</a>
        @endcan
        @can('Delete Post')
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        @endcan
        {!! Form::close() !!}

    </div>

@endsection