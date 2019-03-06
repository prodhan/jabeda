@extends('layouts.master')

@section('title', $data->name.'\'s ID Card')

@section('custom-css')
    <style>
        #idcard{

            width: 645px;
            height: 1020px;
            border: 1px solid #000;
            background-image: url({{asset($settings['id_bg'])}});
            background-size: cover;

        }
        .photo{

            margin-top: 270px;
            margin-left: 220px;
            width: 220px;
            height: 250px;
            border-radius: 10px;
            border: 3px solid #E22128;
        }
        .info{

            text-align: left;
            margin-left: 10px;
            margin-right: 10px;
            font-size: 26px;
        }
        .data{
            color: red;
        }
        .barcode{

            margin-top: 135px;
            width: 440px;
            padding: 10px;
            background-color: white;
            border-radius: 5px;
            margin-left: 100px;

        }

        .oinfo{
            text-align: left;
            margin-left: 170px;
            font-size: 20px;
        }


    </style>
@endsection

@section('content')
    @php
        if($data->photo!=null)
            $photo='uploads/'.$data->photo;
        else
            $photo=asset('files/user.png');
    @endphp


    <div class='col-lg-8'>



        <div id="idcard">
            <img class="photo" src="{{$photo}}" alt="">
            <br>
            <h2 align="center">{{strtoupper($data->name)}}</h2>
            {{--            <h3 align="center">({{strtoupper($data->designation)}}</h3>--}}

            <div class="row info">
                <div class="col-sm-4">
                    <b>Designation</b>
                </div>
                <div class="col-sm-8">
                    <b class="data">{{$data->designation}}</b>
                </div>

            </div>
            <div class="row info">
                <div class="col-sm-4">
                    <b>Blood Group</b>
                </div>
                <div class="col-sm-8">
                    <b class="data">{{$data->blood_group}}</b>
                </div>
            </div>
            {{--  <div class="row info">
                  <div class="col-sm-4">
                      <b>Date of Birth</b>
                  </div>
                  <div class="col-sm-8">
                      <b class="data">{{$data->birthday}}</b>
                  </div>
              </div>--}}

            <div class="row info">
                <div class="col-sm-4">
                    <b>Mobile</b>
                </div>
                <div class="col-sm-8">
                    <b class="data">{{$data->phone}}</b>
                </div>
            </div>

            <div class="row info">
                <div class="col-sm-4">
                    <b>ID No</b>
                </div>
                <div class="col-sm-8">
                    <b class="data">{{$data->id}}</b>
                </div>

            </div>

            <div class="row info">
                <div class="col-sm-4">
                    <b>Address</b>
                </div>
                <div class="col-sm-8">
                    <b class="data">{{$data->address}}</b>
                </div>

            </div>

            <br>

            <div class="row oinfo">
                <div class="col-md-6"></div>
                <div class="col-md-6"></div>
            </div>

            <section class="barcode">
                <center>
                    {!! DNS1D::getBarcodeHTML($data->phone, "C128", 4, 36) !!}
                </center>

            </section>


            <p align="center" style="color:#FFF">Powered By Pigeon Soft</p>
        </div>
        <hr>

        <div id="link"></div>


    </div>

@endsection

@section('custom-js')
    <script src="{{asset('admin/js/html2canvas.js')}}"></script>

    <script type="text/javascript">

        html2canvas(document.getElementById('idcard')).then(function(canvas) {
            document.getElementById('link').appendChild(canvas);
        });
    </script>


@endsection
