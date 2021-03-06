@extends('layouts.master')
@section('styles')
    <!-- Styles -->
    <style>
        html, body {
            background-color: #25313D;
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
            color: #ebc445;
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

        img.logo {
            margin: auto;
            width: 250px;
            height: 250px;
        }

        h2 {
            color: #ebc445;
            font-size: 0.3em;
        }

        .servicesContainer {
            display: flex;
            width: 90vw;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .servicesContainer > div {
            width: 100%;
        }

        .servicesContainer p {
            color: white;
            font-size: 0.25em;
        }
    </style>
@endsection
@section('content')
    <div class="flex-center position-ref full-height">
        <div class="top-right links">
            <a href="{{ route('home') }}">Homepage</a>
            <a href="{{ route('services') }}">Services</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('contact') }}">Contact</a>
        </div>

        <div class="content">
            <div class="title m-b-md">
                <img class="logo" src="images/logo.png" alt="Rint Software Limited">
                <div class="servicesContainer">
                    <div>
                        <h2>Contact</h2>
                        <p>
                            Interested in our services?
                        </p>
                        <p>
                            Drop us an email at <strong>ilker[at]rint.co.uk</strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
