@extends('layout.main')
@section('content')
    <h1>Edit Product</h1>
    <hr>
    <div class="row">
        <div class="col-lg-6">
        <form action="{{ route('product.update',['id' => $product->id]) }}" method="post">                @method('PUT')
                @csrf
                <div class="form-group mb-2">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="name" value="{{ $product->name }}">
                    @error('name')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="stock">Stock</label>
                    <input type="number" name="stock" class="form-control" placeholder="stock" value="{{ $product->stock }}">
                    @error('stock')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                   <textarea name="description" class="form-control" placeholder="description">{{ $product->description }}</textarea>
                    @error('description')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <button type="submit" class="btn btn-info btn-lg mt-5">Submit</button>
            </form>
        </div>
    </div>
@endsection