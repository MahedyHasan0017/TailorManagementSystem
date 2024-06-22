@extends('.vendor.main')

@section('content')
    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Cotton Details</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Library</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <div class="row">
                <div class="col-md-6">
                    <div class="cotton_detail_unit">
                        <h5>Cotton Name : </h5>
                        <h5>{{ $cotton->cotton_name }}</h5>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="cotton_detail_unit">
                        <h5>Cotton Type : </h5>
                        <h5>{{ $cotton->cotton_type }}</h5>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="cotton_detail_unit">
                        <h5>Cotton Price : </h5>
                        <h5>{{ $cotton->cotton_price }}</h5>
                    </div>
                </div>

                @if ($cotton->cotton_description != null)
                    <div class="col-md-6">
                        <div class="cotton_detail_unit">
                            <h5>Cotton Description : </h5>
                            <h5>{{ $cotton->cotton_description }}</h5>
                        </div>
                    </div>
                @endif

                <div class="col-md-6">
                    <div class="cotton_detail_unit">
                        <h5>Cotton Measurement Unit : </h5>
                        <h5>{{ $cotton->cotton_stock_management_unit }}</h5>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="cotton_detail_unit">
                        <h5>Stock Cotton Amount : </h5>
                        <h5>{{ $cotton->cotton_amount }}</h5>
                    </div>
                </div>

                <div class="mt-2">


                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Cotton Amount
                    </button>

                </div>

            </div>

            <div class="row mt-4 mb-2">
                <h4>Supplier Details</h4>
            </div>
            <div class="row">
                @if ($cotton->supplier->supplier_company_name != null)
                    <div class="col-md-6">
                        <div class="cotton_detail_unit">
                            <h5>Supplier Company Name : </h5>
                            <h5>{{ $cotton->supplier->supplier_company_name }}</h5>
                        </div>
                    </div>
                @endif
                <div class="col-md-6">
                    <div class="cotton_detail_unit">
                        <h5>Supplier Name : </h5>
                        <h5>{{ $cotton->supplier->supplier_name }}</h5>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="cotton_detail_unit">
                        <h5>Supplier Mobile Number : </h5>
                        <h5>{{ $cotton->supplier->supplier_mobile_number }}</h5>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="cotton_detail_unit">
                        <h5>Supplier Address : </h5>
                        <h5>{{ $cotton->supplier->supplier_address }}</h5>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Please Select Amount Of Cotton Going For Production
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form
                    action="{{ route('inventory.cotton.production.calculation.store', ['vendor_id' => Auth::guard('vendor')->user()->vendor_id, 'cotton_id' => $cotton->id]) }}"
                    method="post">
                    @csrf
                    <div class="modal-body">
                        <div>
                            <div>
                                <h5>Cotton Name : {{ $cotton->cotton_name }}</h5>
                            </div>
                            <div>
                                <h5>Cotton Type : {{ $cotton->cotton_type }} </h5>
                            </div>
                            <div>
                                <h5>Cotton In Stock : {{ $cotton->cotton_amount }} </h5>
                            </div>
                            <div>
                                <h5>Cotton Amount Going For Production : </h5>
                                <div class="my-3">
                                    <input type="text" name='production_amount_cotton_id'
                                        id='production_amount_cotton_id' value="{{ $cotton->id }}" hidden />
                                </div>
                                <div class="my-3">
                                    <input type="number" min=0 placeholder="Enter Amount" name='production_amount'
                                        id='production_amount' class="form-control" required />
                                </div>
                                <div style="display: flex ; align-items : center ; gap : 20px ; ">
                                    <span>
                                        <input type="radio" value="meter" name="production_amount_unit"
                                            id="production_amount_unit" required>
                                        <label for="production_amount_unit">Meter</label>
                                    </span>
                                    <span style="">
                                        <input type="radio" value="yards" name="production_amount_unit"
                                            id="production_amount_unit" required>
                                        <label for="production_amount_unit">গজ</label>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info">Go To Production</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
<script></script>
