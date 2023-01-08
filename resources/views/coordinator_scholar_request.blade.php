@extends('layouts.coordinator')

@section('main-content')
    <!-- Page Heading -->

    @if (session('success'))
        <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger border-left-danger" role="alert">
            <ul class="pl-4 my-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Scholar Request</div>
                <div class="card-body">
                    <div class="table table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Full Name</th>
                                    <th>Request Name</th>
                                    <th>Request Details</th>
                                    <th>Request Type</th>
                                    <th>Request Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($scholar_request as $data)
                                    <tr>
                                        <td>{{ $data->scholar->first_name }} {{ $data->scholar->last_name }}</td>
                                        <td>{{ $data->request_name }}</td>
                                        <td>{{ $data->request_details }}</td>
                                        <td>{{ $data->request_type }}</td>
                                        <td>{{ $data->request_date }}</td>
                                        <td>{{ $data->status }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
