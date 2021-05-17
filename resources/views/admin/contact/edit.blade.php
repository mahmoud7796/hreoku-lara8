@extends('admin.dashboard')

@section('content')
    <div class="container mt-5">
        <div class="row d-flex">
            <div class="col-md-8">
                <form action="{{route('contact.update', $contact -> id)}}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="address">Address</label>
                            <input name="address" type="text" value="{{$contact -> address}}" class="form-control" id="validationServer01" placeholder="Your Address">
                            @error('address')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="email">E-mail</label>
                            <input name="email" value="{{$contact -> email}}" type="email" class="form-control" id="validationServer02" placeholder="Your E-mail">
                            @error('email')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="phone">E-mail</label>
                            <input name="phone" value="{{$contact -> phone}}" type="phone" class="form-control" id="validationServer02" placeholder="Your Phone">
                            @error('phone')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                    </div>
                    <button class="btn btn-primary" type="submit">Edit contact</button>
                </form>
            </div>
        </div>
    </div>

@stop

