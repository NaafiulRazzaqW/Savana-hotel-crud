@extends('layouts.app')

@section('content')
<div class="container">
    <a href="/tambahdata" class='btn btn-success mb-1'>Tambah Data</a>
    <div class="row">
        @if ($message = Session::get('success'))
        <div class="alert alert-success" id="success-msg" role="alert">
            {{$message}}
        </div>
        @endif
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Handle</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                        <tr>
                            <th scope="row">{{ $row->id}}</th>
                            <td><img src="{{ asset('image/'.$row->image) }}" alt="Image"
                                class="mb-6 hover:opacity-75 transition ease-in-out duration-500" width="200px"></td>
                            <td>{{$row->title}}</td>
                            <td>{{$row->description}}</td>
                            <td>${{$row->price}}</td>
                            <td>
                                <button type='button' class="btn btn-danger">Delete</button>
                                <a href='/tampildata/{{$row->id}}' class="btn btn-info">Edit</a>
                            </td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection
