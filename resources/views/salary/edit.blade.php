{{-- \resources\views\users\create.blade.php --}}
@extends('layouts.master')

@section('title', 'Edit Expense')

@section('content')

    <div class='col-lg-8 col-lg-offset-4'>

        <h2><i class='fa fa-book'></i> Edit Expenses
            <a href="{{ url()->previous() }}" class="btn btn-light pull-right">Back</a></h2>
        <hr>

        {!! Form::open(array('route'=> ['expenses.update', $data->id],'method'=>'PUT', 'class'=>'form-horizontal')) !!}

        <div class="row form-group">
            <div class="col-md-4">{{ Form::label('date', 'Date') }}</div>
            <div class="col-md-8"> {{ Form::date('date', $data->date, array('class' => 'form-control', 'required')) }}</div>
        </div>
        <div class="row form-group">
            <div class="col-md-4">{{ Form::label('category', 'Category') }}</div>
            <div class="col-md-8"> {{ Form::select('debit_id', $debits, $data->debit_id,  array('class' => 'form-control', 'required')) }}</div>
        </div>

        <div class="row form-group">
            <div class="col-md-4">{{ Form::label('description', 'Description') }}</div>
            <div class="col-md-8"> {{ Form::text('description', $data->description, array('class' => 'form-control')) }}</div>
        </div>


        <div class="row form-group">
            <div class="col-md-4">{{ Form::label('amount', 'Amount') }}</div>
            <div class="col-md-8"> {{ Form::number('amount', $data->amount, array('class' => 'form-control', 'required')) }}</div>
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