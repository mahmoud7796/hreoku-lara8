@extends('admin.dashboard')
@section('content')
    <div class="py-12 container">
        @if(Session('success'))
            <div class="row mr-2 ml-2 py-2">
                <button type="text" class="btn btn-lg btn-block btn-outline-success mb-2"
                        id="type-error">{{Session('success')}}
                </button>
            </div>
        @endif
            @if(Session('error'))
                <div class="row mr-2 ml-2 py-2">
                    <button type="text" class="btn btn-lg btn-block btn-outline-danger mb-2"
                            id="type-error">{{Session('error')}}
                    </button>
                </div>
            @endif
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        All images
                    </div>
                    <div class="card-group">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col" style="width:10%">id</th>
                                    <th scope="col" style="width:10%">Photos</th>
                                    <th scope="col" style="width:15%">Actions</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($images as $image)
                                    <tr>
                                        <th scope="row">{{$image->id}}</th>
                                        <td><img style="width: 200px; height: 200px;" src="{{$image -> images}}" alt="album"></td>
                                        <td>{{Carbon\Carbon::parse($image -> created_at)-> diffForHumans()}}</td>
                                        <td>
                                            <a class="btn btn-primary" href="{{route('multi.edit',$image ->id)}}">Edit</a>
                                            <a class="btn btn-danger" href="{{route('multi.delete',$image ->id)}}">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                    </div>


                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Add images
                    </div>
                    <div class="card-body">
                        <form action="{{route('multi.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Add Images</label>
                                <input type="file" name="images" class="form-control">
                                @error('images')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Add image</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@stop
