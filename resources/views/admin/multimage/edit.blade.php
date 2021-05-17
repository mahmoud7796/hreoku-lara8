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

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Edit Category
                    </div>
                    <div class="card-body">
                        <form action="{{route('multi.update',$images ->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input name="id" value="{{$images ->images}}" type="hidden">
                            <div class="form-group">
                                <div class="text-center">
                                    <img
                                        src="{{$images-> images}}"
                                        class="rounded-circle  w-25 p-3" alt="portfolio photo ">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">the Image</label>
                                <input type="file" name="images" class="form-control" >
                                @error('images')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">update image</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @stop

