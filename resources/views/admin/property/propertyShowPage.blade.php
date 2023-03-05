@extends('admin.adminPage.admin_master')

@section('content')

<div class="container p-3">
    <div class="row">
        <div class="col-lg-12">
            <h6 class="mb-0 text-uppercase">Property Table</h6>
            <hr />
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Image</th>
                                    <th>Owner Name</th>
                                    <th>Property Name</th>
                                    <th>Unit</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><img src="{{ asset('admin/assets/images/amenities/balcony-40x40.png') }}" alt=""></td>
                                    <td>Reza</td>                                    
                                    <td>Highway Fighters</td>
                                    <td>Unit - 606</td>                              
                                    <td>Rent</td>                              
                                    <td>1000 USD</td>
                                    <td>Vacant</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-success">Edit</a>
                                        <a href="#" class="btn btn-sm btn-info">Active</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><img src="{{ asset('admin/assets/images/amenities/gym-40x40.png') }}" alt=""></td>
                                    <td>Reza</td>                                    
                                    <td>Highway Fighters</td>
                                    <td>Unit - 607</td>
                                    <td>Sale</td>
                                    <td>1000 USD</td>
                                    <td>Vacant</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-success">Edit</a>
                                        <a href="#" class="btn btn-sm btn-info">Active</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><img src="{{ asset('admin/assets/images/amenities/washer and clearner-40x40.png') }}" alt=""></td>
                                    <td>Reza</td>
                                    <td>Highway Fighters</td>
                                    <td>Unit - 402</td>
                                    <td>Rent</td>
                                    <td>1000 USD</td>
                                    <td>Occupied</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-success">Edit</a>
                                        <a href="#" class="btn btn-sm btn-info">Active</a>
                                    </td>
                                </tr>                              
                                
                            </tbody>
                            <tfoot>
                                <tr>
                                <th>SL</th>
                                    <th>Image</th>
                                    <th>Owner Name</th>
                                    <th>Property Name</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--end row-->
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
@endsection