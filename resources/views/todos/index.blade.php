
@extends('todos.layouts')

@section('content')
<div class="flex justify-center">
    <h1 class="text-2xl">All Your Todos</h1>
    <a class="mx-5 py-1 px-1 bg-blue-400 cursor-pointer rounded text-white" href="/todos/create">Create New</a>
</div>
    <ul class="my-5">
    @foreach($todos as $todo)
    <li class="flex justify-center py-2">
        <p>
        {{$todo->title}}
        <a class='mx-5 py-1 px-1 bg-orange-400 cursor-pointer rounded text-white' href="/todos/{{$todo->id}}/edit">Edit</a>
        </p>
    </li>   
    @endforeach
    </ul>
    @endsection
    
    
  
    
