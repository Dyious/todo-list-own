<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    //homepage
    public function index()
    {

    }
    //show list
    public function show()
    {
        return view('page.todoList');
    }

    public function store()
    {
        
    }
    public function update($id)
    {

    }

    public function destroy($id)
    {
        
    }
}
