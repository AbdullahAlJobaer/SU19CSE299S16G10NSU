@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10.5">
            <div class="card">
                <div class="card-header">{{$user->email}}</div>

                <div class="card-body">

                
                <style>
            html, body {
                background-color: #ebc36a ;
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
                    <div class="links">
                    <a href="https://bit.ly/2HhDTBF">Hotels</a>
                    <a href="https://www.sheba.xyz/car-rental">Rent a Car</a>
                    <a href="https://bit.ly/2Hhfpbw">Near By Restaurents</a>
                    <a href="https://nijhoom.com/">Guides</a>
                    <a href="http://localhost/payment">Payments</a>

                </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
