<?php

namespace App\Http\Controllers;

use App\TodoList;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListController extends Controller
{
    protected $todoList;

    public function __construct()
    {
        $this->todoList = new TodoList();
    }

    //show list
    public function show()
    {
        $data = $this->todoList->where(['who_create' => Auth::user()['id']])->get();
        $frontData = [
            'todo' => collect([]),
            'finish' => collect([]),
        ];
        foreach ($data as $item) {
            if ($item->finish)
                $frontData['finish']->push($item);
            else
                $frontData['todo']->push($item);
        }

        return view('page.todoList', ['list' => $frontData]);
    }

    public function store(Request $req)
    {
        $data = [
            'item' => $req->input('item_body'),
            'start_date' => $req->input('start_time'),
            'end_date' => $req->input('end_time'),
            'who_create' => Auth::user()['id'],
            'finish' => false,
        ];

        $this->todoList->create($data);

        return redirect()->to(route('todoList.show'));
    }

    public function update(Request $req)
    {
        $this->todoList->where(['id' => $req->input('id')])->update(['item' => $req->input('item')]);
        return response()->json(['status'=>'success'],200);
    }

    public function destroy(Request $req)
    {
        $this->todoList->find($req->input('id'))->delete();
        return response()->json(['status'=>'success'],200);
    }
}
