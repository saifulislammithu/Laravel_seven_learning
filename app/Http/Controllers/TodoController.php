<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoCreateRequest;
use App\Todo;
use Faker\Provider\Lorem;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    public function index()
    {
        $todos=Todo::all();
        return view('todos.index',compact('todos'));
    }
    public function create()
    {
        return view('todos.create');
    }
    public function edit(Todo $todo)
    {
        dd($todo->title);
        return view('todos.edit',compact('todo'));
    }
    public function store(TodoCreateRequest $request)
    {
        Todo::create($request->all());
        return redirect()->back()->with('message','Todo created successfully');
    }
}


