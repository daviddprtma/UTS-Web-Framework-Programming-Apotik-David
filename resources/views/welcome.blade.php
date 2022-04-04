@extends('layouts.admin')
@section('content')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <h3 class="page-title">
                Welcome
                </h3>
                <div class="page-bar">
                <ul class="page-breadcrumb">
                <li>
                <i class="fa fa-home"></i>
                <a href="index.html">Home</a>
                <i class="fa fa-angle-right"></i>
                </li>
                <li>
                <a href="#">Welcome</a>
                </li>
                </ul>
                </div>
                <div class="content">
                <div class="title m-b-md" id="judul">
                Apotik David
                </div>
                </div>
                
        </div>
@endsection