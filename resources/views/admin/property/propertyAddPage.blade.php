@extends('admin.adminPage.admin_master')

@section('content')

<div class="container p-3">
    <div class="row">
        <div class="col-xl-12">
            <h6 class="mb-0 text-uppercase">Property Add</h6>
            <hr />
            <div class="card border-top border-0 border-4 border-primary">
                <div class="card-body">
                    <form class="row g-3">
                    <div class="col-md-6">
                            <label for="inputFirstName" class="form-label">
                                <h5 class="mb-0 text-primary">Owner Name</h5>
                            </label>
                            <input type="text" class="form-control" placeholder="Owner Name">
                        </div>
                        <div class="col-md-6">
                            <label for="inputFirstName" class="form-label">
                                <h5 class="mb-0 text-primary">Property Name</h5>
                            </label>
                            <input type="text" class="form-control" placeholder="Property Name">
                        </div>
                        <!-- <div class="col-md-6">
                            <label for="inputFirstName" class="form-label">
                                <h5 class="mb-0 text-primary">Building Name</h5>
                            </label>
                            <div class="mb-3 select2-sm ">
                                <select class="single-select form-control form-control-sm">
                                    <option value="United States">ABCD Building</option>
                                    <option value="United States">XYZ Building</option>
                                    <option value="United States">AK Tower Building</option>
                                    <option value="United States">KB Building</option>
                                </select>
                            </div>
                        </div> -->
                        <div class="col-md-6">
                            <label for="inputFirstName" class="form-label">
                                <h5 class="mb-0 text-primary">Property Category</h5>
                            </label>
                            <div class="mb-3 select2-sm ">
                                <select class="single-select form-control form-control-sm">
                                    <option value="United States">FLATS</option>
                                    <option value="United States">OFFICES</option>
                                    <option value="United States">SHOPS</option>
                                    <option value="United States">WAREHOUSES</option>
                                    <option value="United States">SHOW ROOM</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="inputFirstName" class="form-label">
                                <h5 class="mb-0 text-primary">Area sqft</h5>
                            </label>
                            <input type="text" class="form-control" placeholder="Area sqft">
                        </div>
                        <div class="col-md-12">
                            <label for="inputFirstName" class="form-label">
                                <h6 class="mb-0 mt-2 text-primary">Building Pic</h6>
                            </label>
                            <input type="file" class="form-control" id="inputGroupFile02">
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-sm btn-primary px-5">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!--end row-->
@endsection

@section('script')
<script>
    $('.single-select').select2({
        theme: 'bootstrap4',
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
        placeholder: $(this).data('placeholder'),
        allowClear: Boolean($(this).data('allow-clear')),
    });
    $('.multiple-select').select2({
        theme: 'bootstrap4',
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
        placeholder: $(this).data('placeholder'),
        allowClear: Boolean($(this).data('allow-clear')),
    });
</script>
@endsection