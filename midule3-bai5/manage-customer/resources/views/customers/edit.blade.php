@extends('home')
@section('title', 'chinh sua khach hang')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12"><h1>chinh sua hinh anh</h1></div>
            <div class="col-12">
                <form method="post" action="{{ route('customers.update', $customers->id) }}">
                    @<!-- @csrf -->
                    <div class="form-group">
                        <label>name</label>
                        <input type="text" class="form-control" name="name" value="{{ $customers->name }}">
                    </div>
                    <div class="form-group">
                        <label>email</label>
                        <input type="text" class="form-control" name="email" value="{{ $customers->email }}">
                    </div>
                    <div class="form-group">
                        <label>dob</label>
                        <input type="date" class="form-control" name="dob" value="{{ $customers->dob }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">cane</button>
                </form>
            </div>
        </div>
    </div>
@endsection
