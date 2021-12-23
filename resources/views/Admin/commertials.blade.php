@extends('Layout.admin')

@section('main_content')

<div class="container-fluid">
    <div class="content-wrapper">
        <h1 style="padding:10px; background-color:#ffffff">All Admin List</h1>
        <div class="row grid-margin">
            <div class="col-12">
                <div class="card card-statistics">
                    <div class="card-body">
                        <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
                            <div class="statistics-item">
                                <p>
                                    <i class="icon-sm fa fa-user mr-2"></i>
                                    New query requests
                                </p>
                                <h2> {{ DB::table('comertialss')->where('created_at', date('Y-m-d'))->count() }}</h2>
                                <label class="badge badge-outline-success badge-pill"></label>
                            </div>
                            <div class="statistics-item">
                                <p>
                                    <i class="icon-sm fas fa-hourglass-half mr-2"></i>
                                    Last week
                                </p>
                                <h2> {{ DB::table('comertialss')->whereBetween('created_at', [date('Y-m-d', strtotime('-7 days')), date('Y-m-d')])->count() }}
                                </h2>
                                <label class="badge badge-outline-danger badge-pill"></label>
                            </div>
                            <div class="statistics-item">
                                <p>
                                    <i class="icon-sm fas fa-cloud-download-alt mr-2"></i>
                                    Last month
                                </p>
                                <h2> {{ DB::table('comertialss')->whereBetween('created_at', [date('Y-m-d', strtotime(date('Y-m-d') . ' - 30 days')), date('Y-m-d')])->count() }}
                                </h2>
                                <label class="badge badge-outline-success badge-pill"></label>
                            </div>
                            <div class="statistics-item">
                                <p>
                                    <i class="icon-sm fas fa-check-circle mr-2"></i>
                                    Left replies
                                </p>
                                <h2> {{ DB::table('comertialss')->where('reply', '0')->count() }} </h2>
                                <label class="badge badge-outline-success badge-pill"></label>
                            </div>
                            <div class="statistics-item">
                                <p>
                                    <i class="icon-sm fas fa-check-circle mr-2"></i>
                                    Given replies
                                </p>
                                <h2> {{ DB::table('comertialss')->where('reply', '1')->count() }} </h2>
                                <label class="badge badge-outline-success badge-pill"></label>
                            </div>
                            <div class="statistics-item">
                                <p>
                                    <i class="icon-sm fas fa-chart-line mr-2"></i>
                                    Total number of queries
                                </p>
                                <h2> {{ DB::table('comertialss')->count() }} </h2>
                                <label class="badge badge-outline-success badge-pill"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table id="order-listing" class="table">
                                <thead>
                                    <tr>
                                        <th>User ID</th>
                                        <th>User Name</th>
                                        <th>E-mail</th>
                                        <th>Service Type</th>
                                        <th>Contact no.</th>
                                        <th>Message</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($list as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->service }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->message }}</td>
                                        <td class="text-capitalize">
                                            <span class="badge badge-danger">{{ $item->reply == '0' ? 'Not yet' : '' }}</span>
                                            <span class="badge badge-success">{{ $item->reply == '1' ? 'Replied' : '' }}</span>
                                        </td>
                                        <td>
                                            <a class="btn btn-inverse-success" href="mailto:{{ $item['email'] }}">
                                                @if($item->reply == '1') Reply again
                                                @else Reply
                                                @endif
                                            </a>
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