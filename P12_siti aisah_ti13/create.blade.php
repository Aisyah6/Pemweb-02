@extends('template/admin')

@section('content')
<h1>Add Product</h1>
<form action=" {{ route('produk.store') }} " method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="price">Price:</label>
        <input type="text" name="price" id="price" class="form-control">
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <input type="text" name="description" id="description" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
</form>
@endsection