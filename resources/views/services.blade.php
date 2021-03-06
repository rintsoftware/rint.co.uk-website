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
            width: 30%;
        }

        .servicesContainer p {
            color: white;
            font-size: 0.25em;
        }

        @media screen and (min-width:600px) {
            .servicesContainer {
                flex-wrap:nowrap;
            }
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
                        <h2>Outsourcing</h2>
                        <p>Project proving too large for the current team?<br><strong>Rint</strong> offers project based and/or fixed term outsourcing services with senior developers who are always up to date with their field of expertise.</p>
                    </div>
                    <div>
                        <h2>Software Development</h2>
                        <p>Providing enterprise grade software development services ranging from backoffice applications, service integration, frontend and backend development to data processing.</p>
                    </div>
                    <div>
                        <h2>Consultancy</h2>
                        <p>Offering consultancy on software architecture, project planning, SRS development and general IT matters.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
