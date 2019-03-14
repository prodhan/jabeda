@extends('layouts.master')

@section('title', 'Dashboard')

@section('custom-css')
@endsection

@section('bar')
    <h3 class="text-primary">Dashboard</h3>
@endsection

@section('content')
    {{--first row--}}

    <div class="row">
        <div class="col-md-3">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-hand-holding-usd f-s-40 color-primary"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <h2>৳ {{$wcredit}}</h2>
                        <p class="m-b-0">Credit 7 days</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-file-invoice-dollar f-s-40 color-success"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <h2>৳ {{$wdebit}}</h2>
                        <p class="m-b-0">Debit in 7 days</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-calculator f-s-40 color-primary"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <h2>৳ {{$wcredit-$wdebit}}</h2>
                        <p class="m-b-0">Balance (7 days)</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-user-tie f-s-40 color-info"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <h2>{{$users}}</h2>
                        <p class="m-b-0">Admin</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--second row--}}

    <div class="row">
        <div class="col-md-3">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-hand-holding-usd f-s-40 color-primary"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <h2>৳ {{$mcredit}}</h2>
                        <p class="m-b-0">Credit 30 days</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-file-invoice-dollar f-s-40 color-success"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <h2>৳ {{$mdebit}}</h2>
                        <p class="m-b-0">Debit in 30 days</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-calculator f-s-40 color-primary"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <h2>৳ {{$mcredit-$mdebit}}</h2>
                        <p class="m-b-0">Balance (30 days)</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-users f-s-40 color-info"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <h2>{{$staff}}</h2>
                        <p class="m-b-0">Staff</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{--third row--}}

    <div class="row">
        <div class="col-md-3">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-hand-holding-usd f-s-40 color-primary"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <h2>৳ {{$credit}}</h2>
                        <p class="m-b-0">Total Credit</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-file-invoice-dollar f-s-40 color-success"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <h2>৳ {{$debit}}</h2>
                        <p class="m-b-0">Total Debit</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-calculator f-s-40 color-primary"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <h2>৳ {{$credit-$debit}}</h2>
                        <p class="m-b-0">Main Balance</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fab fa-github f-s-40 color-dark"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <h2><a href="https://github.com/prodhan/jabeda">Update</a></h2>
                        <p class="m-b-0">Check for updates</p>
                    </div>
                </div>
            </div>
        </div>
    </div>







@endsection
