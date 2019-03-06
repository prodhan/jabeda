{{-- \resources\views\errors\401.blade.php --}}
@extends('layouts.auth')

@section('content')

    <div class="error-page" id="wrapper">
        <div class="error-box">
            <div class="error-body text-center">
                <h1>401</h1>
                <h3 class="text-uppercase">ACCESS DENIED </h3>
                <p class="text-muted m-t-30 m-b-30">You have no permission to access this page </p>
                <a class="btn btn-info btn-rounded waves-effect waves-light m-b-40" href="{{url('/')}}">Back to home</a> </div>

        </div>


@endsection