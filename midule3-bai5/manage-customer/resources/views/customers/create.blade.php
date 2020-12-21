@extends('home')
@section('title', 'them khach hang')

@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>them khach hang moi</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('customers.store') }}">
                    @<!-- @csrf -->
                    <div class="form-group">
                        <label>name</label>
                        <input type="text" class="form-control" name="name" placeholder="enter name" required>
                    </div>
                    <div class="from-group">
                        <label>dob</label>
                        <input type="email" name="email" class="from-control" placeholder="enter email" required>
                    </div>
                    <div class="form-group">
                        <label>dob</label>
                        <input type="date" name="dob" class="form-control" placeholder="dob" required>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
