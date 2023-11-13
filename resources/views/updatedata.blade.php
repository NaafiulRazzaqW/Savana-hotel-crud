@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Tampil Data</h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="/updatedata/{{$data->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-1">
                        <label for="exampleInputEmail1" class="form-label">Title</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="title" value="{{$data->title}}">
                    </div>
                    <div class="mb-1">
                        <label for="exampleInputPassword1" class="form-label">Description</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="description"
                        value="{{$data->description}}">
                    </div>
                    <div class="mb-1">
                        <label for="exampleInputPassword1" class="form-label">Price</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" name="price"
                        value="{{$data->price}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Ubah Data</button>
                </form>
            </div>
        </div>

    </div>
@endsection
