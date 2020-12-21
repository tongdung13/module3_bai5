@extends('home')

@section('title', 'danh sach cong viec')

@section('content')
    <div class="card-header">
        <a href="{{ route('tasks.create') }}" class="btn btn-success">Add</a>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h1>danh sach cong viec</h1>
        </div>
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>title</th>
                    <th>content</th>
                    <th>image</th>
                    <th>due date</th>
                    <th></th>
                </tr>
                </thead>
               <tbody>
               @foreach($tasks as $key => $task)
                   <tr>
                       <td>{{ ++$key }}</td>
                       <td>{{ $task->title }}</td>
                       <td>{{ $task->content }}</td>
                       <td>
                           <img src="{{ asset('storage/images/'. $task->image) }}" style="width: 100px">
                       </td>
                       <td>{{ $task->due_date }}</td>
                       <td>
                           <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">update</a>
                           <a href="{{ route('tasks.destroy', $task->id) }}" class="btn btn-danger">Delete</a>
                       </td>
                   </tr>

               @endforeach
               </tbody>
            </table>
        </div>
    </div>
