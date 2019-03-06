{{-- \resources\views\users\create.blade.php --}}
@extends('layouts.master')

@section('title', 'Edit Item')

@section('content')

    <div class='col-lg-8 col-lg-offset-4'>

        <h2><i class='fa fa-book'></i> Edit Item
            <a href="{{ url()->previous() }}" class="btn btn-light pull-right">Back</a></h2>
        <hr>

        {!! Form::open(array('route'=> ['debits.update', $data->id],'method'=>'PUT', 'class'=>'form-horizontal')) !!}

        <div class="row form-group">
            <div class="col-md-4">{{ Form::label('name', 'Item Name') }}</div>
            <div class="col-md-8"> {{ Form::text('name', $data->name, array('class' => 'form-control', 'required')) }}</div>
        </div>



        <div class="row form-group">
            <div class="col-md-4"></div>
            <div class="col-md-8">
                {{ Form::reset('Clear', array('class'=> 'btn btn-warning')) }}
                {{ Form::submit('Update', array('class' => 'btn btn-primary')) }}</div>
        </div>

        {!! Form::close() !!}

    </div>

@endsection