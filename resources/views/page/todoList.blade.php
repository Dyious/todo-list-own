@extends('layout.master')

@section('css-part')
    <link rel="stylesheet" href="{{asset('css/page/list.css')}}">
@endsection

@section('title')
    <h1 class="title-font">Todo List</h1>
@endsection

@section('btn-group')
    <a href="#" class="link-login-btn shadow ">Logout</a>
@endsection

@section('content')
    <div class="row mt-4 py-2">
        <div class="col mx-5 row">
            <input type="text" class="col-7 form-list-part form-list-part-left"
                   placeholder="insert your todo's content."/>
            <input type="text" class="col-2 form-list-part" placeholder="start time"/>
            <input type="text" class="col-2 form-list-part" placeholder="end time"/>
            <svg class="bi bi-arrow-down-short form-list-part form-list-part-right col-1" width="1em" height="1em"
                 viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                      d="M4.646 7.646a.5.5 0 0 1 .708 0L8 10.293l2.646-2.647a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 0-.708z"/>
                <path fill-rule="evenodd" d="M8 4.5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5z"/>
            </svg>
        </div>
        <div class="w-100 mx-5 mt-3 pl-3">
            <a href="">Todo</a>
            <a href="">Finish</a>
        </div>
        <input name="_method" type="hidden" value="PATCH">
        <ul class="col mx-5 my-2 row text-center d-flex align-center justify-content-center">
            @foreach(range(1,10) as $item)
                <li class="item-opm w-100 mb-3 row ">
                    <span class="col-10">List{{$item}}</span>
                    <div class="col-2 float-right">
                        <svg class="bi bi-pencil-square" width="1em" height="1em" viewBox="0 0 16 16"
                             fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd"
                                  d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg>
                        <svg class="bi bi-trash" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd"
                                  d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection