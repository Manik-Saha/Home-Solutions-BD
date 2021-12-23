@extends('Layout.admin')

@section('main_content')
<div>
    <div class="container-fluid">
        <div class="content-wrapper">
            <h1 style="padding:10px; background-color:#ffffff">All Manager List</h1>
            <div class="row grid-margin">
                <div class="col-12">
                    <div class="card card-statistics">
                        <div class="card-body">
                            <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fa fa-user mr-2"></i>
                                        New registered managers
                                    </p>
                                    <h2> {{ DB::table('managers')->where('created_at', date("Y-m-d"))->count() }}</h2>
                                    <label class="badge badge-outline-success badge-pill"></label>
                                </div>
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fas fa-hourglass-half mr-2"></i>
                                        Last week
                                    </p>
                                    <h2> {{ DB::table('managers')->whereBetween('created_at', [date('Y-m-d', strtotime('-7 days')), date("Y-m-d")])->count() }} </h2>
                                    <label class="badge badge-outline-danger badge-pill"></label>
                                </div>
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fas fa-cloud-download-alt mr-2"></i>
                                        Last month
                                    </p>
                                    <h2> {{ DB::table('managers')->whereBetween('created_at', [date('Y-m-d', strtotime(date("Y-m-d") . ' - 30 days')), date("Y-m-d")])->count() }} </h2>
                                    <label class="badge badge-outline-success badge-pill"></label>
                                </div>
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fas fa-check-circle mr-2"></i>
                                        Blocked managers
                                    </p>
                                    <h2> {{ DB::table('managers')->where('status', '0')->count() }} </h2>
                                    <label class="badge badge-outline-success badge-pill"></label>
                                </div>
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fas fa-chart-line mr-2"></i>
                                        Total number of managers
                                    </p>
                                    <h2> {{ DB::table('managers')->count() }} </h2>
                                    <label class="badge badge-outline-success badge-pill"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p style="color: red; font-size: 15px;">{{ session('msg') }}</p>
            <p>
                <a class="btn btn-outline-info" href="/Manager/All">All</a>
                <a class="btn btn-outline-info" href="/Manager/recent">Recent</a>
                <a class="btn btn-outline-info" href="/Manager/last_week">Last Week</a>
                <a class="btn btn-outline-info" href="/Manager/last_month">Last Month</a>
                <a class="btn btn-primary" href="/Manager/BlockedUser">All Blocked Manager</a>
            </p>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="order-listing" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>User ID</th>
                                            <th>Profile picture</th>
                                            <th>Full name</th>
                                            <th>Status</th>
                                            <th>Salary</th>
                                            <th>City name</th>
                                            <th>E-mail</th>
                                            <th>Contact no.</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($list as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td><img class="img-rounded-circle" src="{{ asset('/uploads/manager_image/' . $item->image) }}" width="100px" height="100px"></td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->status }}</td>
                                            <td class="text-capitalize">
                                                <span class="badge badge-danger">{{ $item->status == '0' ? 'Blocked' : '' }}</span>
                                                <span class="badge badge-success">{{ $item->status == '1' ? 'Open' : '' }}</span>
                                            </td>
                                            <td>{{ $item->city }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->phone }}</td>
                                            <td>
                                                <a class="btn btn-inverse-success" href="{{ route('Managers.Edit', $item->id) }}">Edit</a>
                                                <a class="btn btn-inverse-warning" href="{{ route('Managers.Delete', $item->id) }}">Delete</a>

                                                <a class="btn btn-inverse-primary" href="{{ route('Managers.Details', $item->id) }}">Details</a>

                                                <a class="btn btn-inverse-danger" href="{{ route('Managers.Block', $item->id) }}">
                                                    @if ($item->status == '1') Block @else Unblock @endif</a>
                                            </td>

                                        </tr>
                                        @empty
                                        <p>Not found</p>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection