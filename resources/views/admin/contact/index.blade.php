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
            <div class="col-md-12">
                <a href="{{route('contact.create')}}">
                    <button class="btn btn-alert btn-primary">Create new contact</button>
                </a>
                <div class="card">
                    <div class="card-header">
                       About
                    </div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col" style="width:10%">id</th>
                            <th scope="col" style="width:10%">address</th>
                            <th scope="col" style="width:25%">email</th>
                            <th scope="col" style="width:25%">phone</th>
                            <th scope="col" style="width:15%">created_at</th>
                            <th scope="col" style="width:15%">Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($contact as $_contact)
                            <tr>
                                <th scope="row">{{$_contact -> id}}</th>
                                <td>{{$_contact -> address}}</td>
                                <td> {{$_contact -> email}}</td>
                                <td> {{$_contact -> phone}}</td>
                                <td>{{Carbon\Carbon::parse($_contact -> created_at)-> diffForHumans()}}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{route('contact.edit',$_contact ->id)}}">Edit</a>
                                    <a class="btn btn-danger" href="{{route('contact.delete',$_contact ->id)}}">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{--        {!! $brands -> links() !!}--}}
                </div>
            </div>
        </div>
    </div>
    @stop

