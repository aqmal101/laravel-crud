@extends('layout.main')
@section('content')
    <h1>Tambah Product</h1>
    <hr>
    <div class="row">
        <div class="col-lg-6">
            <form action="{{ route('product.store') }}" method="post">
                @csrf
                <div class="form-group mb-2">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                    @error('name')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="stock">Stock</label>
                    <input type="number" name="stock" class="form-control" placeholder="Stock">
                    @error('stock')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                   <textarea name="description" class="form-control" placeholder="Description"></textarea>
                    @error('description')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <button type="submit" class="btn btn-primary btn-lg mt-5">Submit</button>
            </form>
        </div>
    </div>
@endsection