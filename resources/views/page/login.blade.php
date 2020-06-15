@extends('layout.master')

@section('css-part')
    <link rel="stylesheet" href="{{asset('css/page/login.css')}}">
@endsection

@section('title')
    <h1 class="title-font">Login</h1>
@endsection

@section('btn-group')
    <a href="" class="text-white ">Don't have an account</a>
@endsection

@section('content')
    <div class="row m-5 justify-content-center align-items-center">
        <div class="img-circle bg-warning mb-3">
            <img src="{{asset('img/rock.png')}}" alt="火箭" width="300" height="300" class="p-3">
        </div>
        <div class="col-12 d-flex justify-content-center">
            <input type="text" class="form-control w-75 mb-3 text-center" placeholder="username"/>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <input type="password" class="form-control w-75 mb-3 text-center " placeholder="password"/>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <button class="btn btn-sm login-btn bg-green-light w-50 mb-3 text-center">submit</button>
        </div>
        <div class="col-12 d-flex justify-content-center align-center mb-3">
            <div class="line-or">&nbsp;</div>
            <div class="line-circle">&nbsp;</div>
            <div class="line-or-text text-center">OR</div>
        </div>
        <div class="col-12 d-flex justify-content-center align-center">
            <a href="">forget U account password.</a>
        </div>
    </div>
@endsection