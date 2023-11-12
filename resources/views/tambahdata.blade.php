@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="/insertdata" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-1">
                        <label for="exampleInputEmail1" class="form-label">Title</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="title">
                    </div>
                    <div class="mb-1">
                        <label for="exampleInputPassword1" class="form-label">Description</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="description">
                    </div>
                    <div class="mb-1">
                        <label for="exampleInputPassword1" class="form-label">Price</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" name="price">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload Image</label>
                        <input class="form-control" type="file" id="formFile" name="uploadImage">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>

    </div>
@endsection
