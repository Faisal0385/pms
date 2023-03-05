@extends('admin.master_admin')

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
                            <input type="text" class="form-control form-control-sm" placeholder="Owner Name">
                        </div>
                        <div class="col-md-6">
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
                        </div>

                        <div class="col-md-6">
                            <label for="inputFirstName" class="form-label">
                                <h5 class="mb-0 text-primary">Unit Name</h5>
                            </label>
                            <input type="text" class="form-control form-control-sm" placeholder="Unit Name">
                        </div>

                        <div class="col-md-6">
                            <label for="inputFirstName" class="form-label">
                                <h5 class="mb-0 text-primary">Unit Type</h5>
                            </label>
                            <div class="mb-3 select2-sm ">
                                <select class="single-select form-control form-control-sm">
                                    <option value="United States">Sheds</option>
                                    <option value="United States">Shops</option>
                                    <option value="United States">OFFICE</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="inputFirstName" class="form-label">
                                <h5 class="mb-0 text-primary">Property Type</h5>
                            </label>
                            <div class="mb-3 select2-sm ">
                                <select class="single-select form-control form-control-sm">
                                    <option value="United States">G+1</option>
                                    <option value="United States">G+5</option>
                                    <option value="United States">G+4</option>
                                    <option value="United States">G+6</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="inputFirstName" class="form-label">
                                <h5 class="mb-0 text-primary">Plot</h5>
                            </label>
                            <input type="text" class="form-control form-control-sm" placeholder="Plot">
                        </div>
                        <div class="col-md-6">
                            <label for="inputFirstName" class="form-label">
                                <h5 class="mb-0 text-primary">Makani</h5>
                            </label>
                            <input type="text" class="form-control form-control-sm" placeholder="Makani">
                        </div>
                        <div class="col-md-6">
                            <label for="inputFirstName" class="form-label">
                                <h5 class="mb-0 text-primary">Sector</h5>
                            </label>
                            <input type="text" class="form-control form-control-sm" placeholder="Sector">
                        </div>
                        <div class="col-md-6">
                            <label for="inputFirstName" class="form-label">
                                <h5 class="mb-0 text-primary">Street</h5>
                            </label>
                            <input type="text" class="form-control form-control-sm" placeholder="Street">
                        </div>
                        <div class="col-md-6">
                            <label for="inputFirstName" class="form-label">
                                <h5 class="mb-0 text-primary">District</h5>
                            </label>
                            <input type="text" class="form-control form-control-sm" placeholder="District">
                        </div>

                        <div class="col-md-6">
                            <label for="inputFirstName" class="form-label">
                                <h5 class="mb-0 text-primary">Purpose</h5>
                            </label>
                            <div class="mb-3 select2-sm ">
                                <select class="single-select form-control form-control-sm">
                                    <option value="United States">Rental</option>
                                    <option value="United States">Commercial</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="inputFirstName" class="form-label">
                                <h5 class="mb-0 text-primary">Rental Amount</h5>
                            </label>
                            <input type="text" class="form-control form-control-sm" placeholder="Rental Amount">
                        </div>







                        <!-- <div class="col-md-12">
                            <label for="inputFirstName" class="form-label">
                                <h6 class="mb-0 mt-2 text-primary">Property Pic 1</h6>
                            </label>
                            <input type="file" class="form-control" id="inputGroupFile02">
                        </div>
                        <div class="col-md-12">
                            <label for="inputFirstName" class="form-label">
                                <h6 class="mb-0 mt-2 text-primary">Property Pic 2</h6>
                            </label>
                            <input type="file" class="form-control" id="inputGroupFile02">
                        </div>
                        <div class="col-md-12">
                            <label for="inputFirstName" class="form-label">
                                <h6 class="mb-0 mt-2 text-primary">Property Pic 2</h6>
                            </label>
                            <input type="file" class="form-control" id="inputGroupFile02">
                        </div> -->
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