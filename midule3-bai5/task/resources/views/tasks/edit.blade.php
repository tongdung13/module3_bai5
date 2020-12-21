@extends('home')

@section('title', 'cap nhap cong viec')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1>cap nhap cong viec</h1>
        </div>
        <div class="col-md-12">
            <form method="post" action="{{ route('tasks.edit, $tasks->id') }}" enctype="multipart/form-data">
                @<!-- @csrf -->
                <div class="form-group">
                    <label>ten cong viec</label>
                    <input type="text" name="title" value="{{ $tasks->title }}" class="form-control">
                </div>
                <div class="form-group">
                    <label>noi dung</label>
                    <textarea class="form-control" rows="3" name="content" required>{{ $tasks->content }}</textarea>
                </div>
                <div class="form-group">
                    <label>image</label>
                    <input type="file" name="image" class="form-control-file">
                </div>
                <div class="form-group">
                    <label>ngay het han</label>
                    <input type="date" name="due_date" value="{{ $tasks->due_date }}">

                </div>
                <button type="submit" class="btn btn-primary">chinh sua</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">cane</button>
            </form>
        </div>
    </div>
@endsection
