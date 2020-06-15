@extends('layout.master')

@section('css-part')
    <link rel="stylesheet" href="{{asset('css/page/homepage.css')}}">
@endsection

@section('title')
    <h1 class="title-font">Welcome to U memo</h1>
@endsection

@section('btn-group')
    <a href="#" class="pr-2 reg-btn">Register</a>
    <a href="#" class="login-btn shadow ">Login</a>
@endsection

@section('content')
    <div class="row mt-4 py-2">
        <div class="col-4">
            <img src="{{asset('img/rock.png')}}" alt="火箭" class="rock-rotate p-2">
        </div>
        <div class="col-8 text-right text-dark">
            <h3>Time files.</h3>
            <h3>Time tries truth.</h3>
            <h3>Take time by the forelock.</h3>
            <h3>Time cannot be won again.</h3>
            <h3>Time is,time was,and time is past.</h3>
            <h3>Time spent in vice or folly is doubly lost.</h3>
            <h3>Time is a file that wears and makes no noise.</h3>
        </div>
    </div>
@endsection