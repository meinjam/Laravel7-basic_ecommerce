@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Products</div>

                <div class="card-body">
                    @if (count($products) > 0)
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="table-secondary">
                                <th>#</th>
                                <th>Product Name</th>
                                <th>Product Image</th>
                                <th>Product Price</th>
                                <th>Editing</th>
                                <th>Deleting</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $product->name }}</td>
                                <td><img src="{{ asset($product->image) }}" height="60" alt="{{ $product->name }}"></td>
                                <td>{{ $product->price }}</td>
                                <td>
                                    <a href="{{ route('edit.product', $product->id) }}" class="btn btn-info">Edit</a>
                                </td>
                                <td>
                                    <a href="{{ route('delete.product', $product->id) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                        <h1>No Products found.</h1>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection