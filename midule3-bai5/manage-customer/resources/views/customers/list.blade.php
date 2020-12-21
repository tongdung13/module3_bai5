@extends('home')
@section('title', 'danh sach khach hang')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h1>danh sach khach hang</h1>
            </div>
            <div class="col-12">
                @if(Session::has('success'))
                    <p class="text-success">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        {{ Session::get('success') }}
                    </p>
                @endif
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">date</th>
                    <th scope="col">email</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($customers) == 0)
                    <tr>
                        <td colspan="4">khong co du lieu</td>
                    </tr>
                @else
                            @foreach($customers as $key => $customer)
                            <tr>
                                <th scope="col">{{ ++$key }}</th>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->dob }}</td>
                                <td>{{ $customer->email }}</td>
                                <td>
                                    <a href="{{ route('customers.edit', $customer->id) }}">Update</a>
                                </td>
                                <td>
                                    <a href="{{ route('customers.destroy', $customer->id) }}">Delete</a>
                                </td>
                            </tr>

                            @endforeach
                @endif

                </tbody>
            </table>
            <a class="btn btn-primary" href="{{ route('customers.create') }}">Add</a>
        </div>
    </div>
@endsection

