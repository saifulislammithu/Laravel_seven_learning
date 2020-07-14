@extends('todos.layouts')

@section('content')
<h1 class="text-2xl pt-10">Update this todo</h1>
    <x-alert/>
   <form action="{{route('todo.update',$todo->id)}}"method="post"class="py-5">
    @csrf
    @method('patch')
   <input type="text" name="title" value="{{$todo->title}}" class="py-2 px-2 border rounded"/>
   <input type="submit" value="Update" class="p-2 border rounded">
</form> 
<a class="m-5 py-1 px-1 bg-white-400 border cursor-pointer rounded " href="/todos">Back</a>
@endsection
