@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10.5">
            <div class="card">
                <div class="card-header"> Search your desired places</div>

                <div class="card-body">

                <style>
            html, body {
                background-color: lightblue ;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: black;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="links">
                    <a href="https://bit.ly/2Y6g1qk">Dhaka</a>
                    <a href="https://bit.ly/2y5etlD">Chittagong</a>
                    <a href="https://bit.ly/2y5eE0h">Sylhet</a>
                    <a href="https://bit.ly/2XX9Qd1">Rajshahi</a>
                    <a href="https://bit.ly/2JUIryp">Barisal</a>
                    <a href="https://bit.ly/32JAPY9">Khulna</a>
                    <a href="https://bit.ly/2Yn9FXD">Mymensingh</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
