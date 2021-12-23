@extends('Layout.admin')

@section('main_content')

<div class="container-fluid">
    <div class="content-wrapper">
        <h2 style="text-align: center; background-color: #ffffff">Details for {{$manager['id']}}, {{ $manager['name'] }} :</h2><br>
        <p style="padding-left:1050px"><a class="btn btn-primary" href="/Manager/All">Back to list</a></p>
        <center>
            <table class="table table-striped table-bordered">
                <tr>
                    <div>
                        <td style="width:300px; height:300px; text-align:center; vertical-align:middle">
                            <img src="{{asset('/uploads/manager_image')}}/{{ $manager['image'] }}" style="border-radius:50%; width:100%; height:100%">
                        </td>
                        <td>
                            <p style="color: black; font-size:50px">{{ $manager['name'] }}</p>
                        </td>
                    </div>
                </tr>
            </table>
            <table class="table table-striped table-bordered">
                <tr>
                    <td>Fullt name :</td>
                    <td>{{ $manager['name'] }}</td>
                </tr>
                <tr>
                    <td>Status :</td>
                    <td>{{ $manager['status'] }}</td>
                </tr>
                <tr>
                    <td>E-mail :</td>
                    <td>{{ $manager['email'] }}</td>
                </tr>
                <tr>
                    <td>Home Address :</td>
                    <td>{{ $manager['address']}}</td>
                </tr>
                <tr>
                    <td>Date of birth :</td>
                    <td>{{ $manager['birth'] }}</td>
                </tr>
                <tr>
                    <td>Inserted at :</td>
                    <td>{{ $manager['created_at'] }}</td>
                </tr>
                <tr>
                    <td>Last Updated :</td>
                    <td>{{ $manager['updated_at'] }}</td>
                </tr>
                <tr>
                    <td>Joining date :</td>
                    <td>{{ $manager['joining'] }}</td>
                </tr>
                <tr>
                    <td>Contact no. :</td>
                    <td>{{ $manager['phone']}}</td>
                </tr>
                <tr>
                    <td>Gender :</td>
                    <td>{{ $manager['gender']}}</td>
                </tr>
                <tr>
                    <td>Salary :</td>
                    <td>{{ $manager['salary']}}</td>
                </tr>
            </table>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="order-listing" class="table">
                                    <thead>
                                        <tr>
                                            <th>#ID</th>
                                            <th>Apartment Name</th>
                                            <th>Seller Name</th>
                                            <th>Price</th>
                                            <th>Sell/Rent</th>
                                            <th>City</th>
                                            <th>Status</th>
                                            <th>Status Change</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($apartment as $item)
                                        <tr data-id="{{$item->id}}">

                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->apartment_name }}</td>
                                            <td>{{ $item->seller->name }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td class="text-capitalize">
                                                <span class="badge badge-info">{{ $item->rent_sell == '0' ? 'Rent' : '' }}</span>
                                                <span class="badge badge-primary">{{ $item->rent_sell == '1' ? 'Sell' : '' }}</span>
                                            </td>
                                            <td>{{ $item->city }}</td>

                                            <td class="text-capitalize">
                                                <span class="badge badge-danger">{{ $item->status == '0' ? 'deactive' : '' }}</span>
                                                <span class="badge badge-success">{{ $item->status == '1' ? 'active' : '' }}</span>
                                            </td>
                                            <td class="text-capitalize">
                                                <select class="form-control form-control-sm bg-info text-white" data-id="{{$item->id}}" id="selectStatus">
                                                    <option class="text-white" value="0" {{$item->status == 0 ? 'selected' : ''}}>Deactive</option>
                                                    <option value="1" {{$item->status == 1 ? 'selected' : ''}}>Active</option>

                                                </select>
                                            </td>




                                            <td>
                                                <a href="{{ route('Apartment.Details',$item->id) }}">
                                                    <button class="btn btn-outline-primary">View</button></a>


                                                {{-- <a href="{{ route('Apartment.Block',$item->id) }}">
                                                <button class="btn btn-outline-primary">Block</button></a> --}}

                                            </td>
                                            @empty
                                            <td colspan="5" class="text-center">No data Available</td>
                                        </tr>
                                        @endforelse

                                    </tbody>
                                </table>
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
                                            <th>#ID</th>
                                            <th>Seller Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>City</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Status Change</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($seller as $item)
                                        <tr data-id="{{$item->id}}">
                                            <td>{{ $item->id }}</td>

                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->phone }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->address }}</td>
                                            <td>{{ $item->city }}</td>
                                            <td><img class="rounded-circle mr-1" height="50px" width="60px" src="{{ URL::to('/uploads/seller_image/' . $item->image) }}">


                                            <td class="text-capitalize">
                                                <span class="badge badge-danger">{{ $item->status == '0' ? 'deactive' : '' }}</span>
                                                <span class="badge badge-success">{{ $item->status == '1' ? 'active' : '' }}</span>
                                            </td>
                                            <td class="text-capitalize">
                                                <select class="form-control form-control-sm bg-info text-white" data-id="{{$item->id}}" id="selectStatus">
                                                    <option class="text-white" value="0" {{$item->status == 0 ? 'selected' : ''}}>Deactive</option>
                                                    <option value="1" {{$item->status == 1 ? 'selected' : ''}}>Active</option>

                                                </select>
                                            </td>


                                            @empty
                                            <td colspan="5" class="text-center">No data Available</td>
                                        </tr>
                                        @endforelse

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </center>
    </div>
</div>
<script>
    $(document).ready(function() {
        $(document).on('change', '#selectStatus', function() {
            let status = $(this).val();
            let id = $(this).attr('data-id');
            let selectUpdate = $(this).parent().prev();

            $.ajax({
                type: 'GET',
                url: `/manager/sellerstatus/${id}`,
                data: {
                    status: status
                },
                success: (data) => {
                    toastr.options = {
                        "timeOut": "2000",
                        "closeButton": true,
                    };
                    toastr['info']('Status Successfully Updated!!!');

                    if (status == '0') {
                        $(selectUpdate).html(`
                                      <span class="badge bg-danger text-white">Deactive</span>
                                  `)
                    } else if (status == '1') {
                        $(selectUpdate).html(`
                                      <span class="badge bg-success text-white">Active</span>
                                  `)
                    }
                },
                error: (error) => {
                    console.log(error);
                }
            })
        });
    });
</script>

@endsection