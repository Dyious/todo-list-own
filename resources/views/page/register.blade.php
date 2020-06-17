@extends('layout.master')

@section('css-part')
    <link rel="stylesheet" href="{{asset('css/page/register.css')}}">
@endsection

@section('title')
    <h1 class="title-font">Register</h1>
@endsection

@section('btn-group')
@endsection

@section('content')
    <form action="{{route('register.create')}}" method="POST" >
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <div class="row mt-4 py-2 m-5">
            <div class="form-group col-6">
                <label for="first-Name">First Name</label>
                <input type="text" id="first-Name" name="firstName" class="form-radius"/>
            </div>
            <div class="form-group col-6">
                <label for="last-Name">Last Name</label>
                <input type="text" id="last-Name" name="lastName" class="form-radius"/>
            </div>
            <div class="form-group col-6">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" class="form-radius"/>
            </div>
            <div class="form-group col-6">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" class="form-radius"/>
            </div>
            <div class="form-group col-6">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-radius"/>
            </div>
            <div class="form-group col-6">
                <label for="confirm-password">Confirm Password</label>
                <input type="text" id="confirm-password" name="confirmPassword" class="form-radius"/>
            </div>
            <div class="form-group col-6">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="form-radius">
                    <option value="man">男</option>
                    <option value="woman">女</option>
                </select>
            </div>
            <div class="col-12">&nbsp;</div>
            <div class="col-12 text-right">
                <a href="{{route('homepage')}}" class="btn btn-sm bg-green-light text-white w-25 height-1">Back</a>
                <button type="submit" class="btn btn-sm bg-blue-deep text-white w-25 height-1">Submit</button>
            </div>
        </div>
    </form>
@endsection