@extends('home')

@section('title', 'them cong viec')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>them cong viec moi</h1>
        </div>
        <div class="col-md-12">
            <form method="post" action="{{ route('tasks.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label> ten cong viec</label>
                    <input type="text" class="form-control" name="title" required>
                </div>
                <div class="form-group">
                    <label>noi dung</label>
                    <textarea class="form-control" rows="3" name="content" required></textarea>
                </div>
                <div class="form-group">
                    <label>image</label>
                    <input type="file" name="image" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>ngay het han</label>
                    <input type="date" name="due_date" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">cane</button>
            </form>
        </div>
    </div>

@endsection
