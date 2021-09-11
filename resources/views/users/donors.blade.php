@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="card mt-3">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                        List Of Donors
                    </div>
                    <!-- Button trigger modal -->
                    <div class="col-md-2">
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                            Register Donor
                        </button>
                    </div>
                </div>

            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">email</th>
                        <th scope="col">Blood type</th>
                        <th scope="col">weight</th>
                        <th scope="col">Chronic Condition</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($donors as $donor)
                        <tr>
                            <th scope="row">{{++$add}}</th>
                            <td>{{$donor->name}}</td>
                            <td>{{$donor->email}}</td>
                            <td>{{$donor->blood_type}}</td>
                            <td>{{$donor->weight}}</td>
                            <td>{{$donor->chronic_condition}}</td>
                            <td>
                                <a href="{{route('donor.show', $donor->id)}}" class="btn btn-primary btn-sm">View</a>
                                <a href="{{route('donor.edit', $donor->id)}}" class="btn btn-outline-success btn-sm">ADD</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
                <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Register Donor</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form role="form" action="{{route('donor.store')}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <label>Blood Type</label>
                                    <input type="text" name="blood_type" class="form-control" placeholder="A+">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label>Weight</label>
                                    <input type="text" name="weight" class="form-control" placeholder="Enter Weight">
                                </div>
                                <div class="form-group">
                                    <label>Chronic Condition</label>
                                    <input type="text" name="chronic_condition" class="form-control" placeholder="Any Chronic Condition">
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
