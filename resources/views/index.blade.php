@extends('layouts.app')

@section('title','Hello,here are your Tasks')

@section('content')
    <div>
        <h2>Tasks:</h2>
        @forelse($tasks as $task)
            <div><a href="{{route('tasks.show',['id'=>$task->id])}}">{{$task->title}}</a></div>
        @empty
            <div>There are no tasks</div>
        @endforelse
    </div>
@endsection
