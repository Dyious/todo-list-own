@extends('layout.master')

@section('css-part')
    <link rel="stylesheet" href="{{asset('css/page/list.css')}}">
@endsection

@section('title')
    <h1 class="title-font">Todo List</h1>
@endsection

@section('btn-group')
    <a href="{{route('logout')}}" class="link-login-btn shadow ">Logout</a>
@endsection

@section('content')
    <div class="row mt-4 py-2">
        <form action="{{route('list.create')}}" method="POST" class="col mx-5 row">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <input type="text" class="col-6 form-list-part form-list-part-left"
                   placeholder="insert your todo's content." name="item_body"/>
            <input id="start_date" type="text" class="col-2 form-list-part" placeholder="start time" name="start_time"
                   autocomplete="off"/>
            <input id="end_date" type="text" class="col-2 form-list-part" placeholder="end time" name="end_time"
                   autocomplete="off"/>
            <button class="col form-list-part form-list-part-right bg-white-light ">
                <i class="fa fa-arrow-down" aria-hidden="true"></i>
            </button>
        </form>

        <div class="w-100 mx-5 mt-3 pl-3">
            <button class="btn" onclick="checkPart('todo_part')">Todo</button>
            <button class="btn" onclick="checkPart('finish_part')">Finish</button>
        </div>
        <input name="_method" type="hidden" value="PATCH">
        <ul id="todo_part" class="col mx-5 my-2 row text-center d-flex align-center justify-content-center">
            @if(!$list['todo']->isEmpty())
                @foreach($list['todo'] as $item)
                    <li class="item-opm w-100 mb-3 row px-2" id="show-item-{{$item->id}}">
                        <input type="text" class="col-10 form-list-part text-bg-lightyellow"
                               id="item_body_{{$item->id}}" value="{{$item->item}}" disabled/>
                        <div class="col-2 float-right">
                            <i id='pen-{{$item->id}}' class="fa fa-pencil-square" aria-hidden="true"
                               onclick="changePart({{$item->id}})"></i>
                            <i id='save-{{$item->id}}' class="fa fa-floppy-o  update-btn hidden" aria-hidden="true"
                               data-id="{{$item->id}}"></i>
                            <i class="fa fa-trash delete-btn" aria-hidden="true" data-id="{{$item->id}}"></i>
                        </div>
                    </li>
                @endforeach
            @else
                <span class="item-opm w-100 mb-3">請新增相關資料</span>
            @endif
        </ul>

        <ul id="finish_part" class="col mx-5 my-2 row text-center d-flex align-center justify-content-center hidden">
            @if(!$list['finish']->isEmpty())
                @foreach($list['finish'] as $item)
                    <li class="item-opm w-100 mb-3 row px-2" id="show-item-{{$item->id}}">
                        <input type="text" class="col-10 form-list-part text-bg-lightyellow"
                               id="item_body_{{$item->id}}" value="{{$item->item}}" disabled/>
                        <div class="col-2 float-right">
                            <i id='pen-{{$item->id}}' class="fa fa-pencil-square" aria-hidden="true"
                               onclick="changePart({{$item->id}})"></i>
                            <i id='save-{{$item->id}}' class="fa fa-floppy-o  update-btn hidden" aria-hidden="true"
                               data-id="{{$item->id}}"></i>
                            <i class="fa fa-trash delete-btn" aria-hidden="true" data-id="{{$item->id}}"></i>
                        </div>
                    </li>
                @endforeach
            @else
                <span class="item-opm w-100 mb-3">請新增相關資料</span>
            @endif
        </ul>
    </div>
@endsection

@section('jsInclude')
    <script>
        {{--    查看part--}}
        $(document).ready(function () {
            $('#start_date').datepicker({
                format: 'yyyy-mm-dd',
                startDate: new Date(),
            });
            $('#end_date').datepicker({
                format: 'yyyy-mm-dd',
                startDate: new Date(),
            });

            $('.update-btn').on('click', function () {
                update($(this).data('id'));
            });
            $('.delete-btn').on('click', function () {
                destroy($(this).data('id'));
            });
        });

        function checkPart(id) {
            let partId = ['finish_part', 'todo_part'];

            document.getElementById(id).classList.remove('hidden');
            document.getElementById(partId.filter(item => item !== id)[0]).classList.add('hidden');
        }

        function changePart(id) {
            let pen = document.getElementById('pen-' + id);
            let save = document.getElementById('save-' + id);
            let itemBody = document.getElementById('item_body_' + id);

            itemBody.disabled = false;

            pen.classList.add('hidden');
            save.classList.remove('hidden');
        }

        function update(id) {
            let pen = document.getElementById('pen-' + id);
            let save = document.getElementById('save-' + id);
            let itemBody = document.getElementById('item_body_' + id);
            $.ajax({
                type: "PATCH",
                url: '{{route('list.update')}}',
                data: {
                    "_token": "{{ csrf_token() }}",
                    'item': itemBody.value,
                    'id': id,
                },
                success: function (data) {
                    console.log(data);
                    save.classList.add('hidden');
                    pen.classList.remove('hidden');
                    itemBody.disabled = true;
                },
            });
        }

        function destroy(id) {
            let body = document.getElementById('show-item-'+id);

            $.ajax({
                type: "DELETE",
                url: '{{route('list.delete')}}',
                data: {
                    "_token": "{{ csrf_token() }}",
                    'id': id,
                },
                success: function (data) {
                    body.remove();
                    console.log(data);
                },
            });
        }
    </script>
@endsection