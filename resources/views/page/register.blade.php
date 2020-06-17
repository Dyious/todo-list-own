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
    <div class="row mt-4 py-2 m-5">
        <div class="form-group col-6">
            <label for="first-Name">First Name</label>
            <input type="text" id="first-Name" class="form-radius"/>
        </div>
        <div class="form-group col-6">
            <label for="last-Name">Last Name</label>
            <input type="text" id="last-Name" class="form-radius"/>
        </div>
        <div class="form-group col-6">
            <label for="username">Username</label>
            <input type="text" id="username" class="form-radius"/>
        </div>
        <div class="form-group col-6">
            <label for="email">Email</label>
            <input type="text" id="email" class="form-radius"/>
        </div>
        <div class="form-group col-6">
            <label for="password">Password</label>
            <input type="text" id="password" class="form-radius"/>
        </div>
        <div class="form-group col-6">
            <label for="confirm-password">Confirm Password</label>
            <input type="text" id="confirm-password" class="form-radius"/>
        </div>
        <div class="form-group col-6">
            <label for="gender">Gender</label>
            <input type="text" id="gender" class="form-radius"/>
        </div>
        <div class="col-12">&nbsp;</div>
        <div class="col-12 text-right">
            <button class="btn btn-sm bg-green-light text-white w-25 height-1">Back</button>
            <button class="btn btn-sm bg-blue-deep text-white w-25 height-1">Submit</button>
        </div>
    </div>
@endsection