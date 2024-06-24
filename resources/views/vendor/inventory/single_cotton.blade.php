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
                        <h5>কাপড়ের নাম : </h5>
                        <h5>{{ $cotton->cotton_name }}</h5>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="cotton_detail_unit">
                        <h5>কাপড়ের ধরণ : </h5>
                        <h5>{{ $cotton->cotton_type }}</h5>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="cotton_detail_unit">
                        <h5>কাপড়ের মূল্য : </h5>
                        <h5>{{ $cotton->cotton_price }}</h5>
                    </div>
                </div>

                @if ($cotton->cotton_description != null)
                    <div class="col-md-6">
                        <div class="cotton_detail_unit">
                            <h5>কাপড়ের বর্ণনা : </h5>
                            <h5>{{ $cotton->cotton_description }}</h5>
                        </div>
                    </div>
                @endif

                <div class="col-md-6">
                    <div class="cotton_detail_unit">
                        <h5>স্টকের জমা থাকা কাপড় : </h5>
                        <div>
                            <h5>{{ $cotton->cotton_yards }} গজ</h5>
                            <h5>{{ $cotton->cotton_joint }} গিরা </h5>
                        </div>
                    </div>
                </div>


                <div class="mt-2">
                    <div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">
                            Cotton Amount Going For Production
                        </button>
                    </div>
                    <div class="mt-3">
                        <a href="{{ route('inventory.cotton.update.single.vendor', ['vendor_id' => Auth::guard('vendor')->user()->vendor_id, 'cotton_id' => $cotton->id]) }}"
                            class="btn btn-info btn-sm">Add More Cotton To Stock</a>
                    </div>
                </div>

            </div>

            <div class="row mt-4 mb-2">
                <h4>সাপ্লায়ারের লিস্ট</h4>
            </div>

            <div>
                @foreach ($suppliers as $supplier)
                    <div class="row mb-3">
                        @if ($supplier->supplier_company_name != null)
                            <div class="col-md-6">
                                <div class="cotton_detail_unit">
                                    <h5>সাপ্লায়ারের কোম্পানির নাম : </h5>
                                    <h5>{{ $supplier->supplier_company_name }}</h5>
                                </div>
                            </div>
                        @endif
                        <div class="col-md-6">
                            <div class="cotton_detail_unit">
                                <h5>সাপ্লায়ারের নাম : </h5>
                                <h5>
                                    {{ $supplier->supplier_name }}
                                </h5>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cotton_detail_unit">
                                <h5>সাপ্লায়ারের মোবাইল নাম্বার : </h5>
                                <h5>
                                    {{ $supplier->supplier_mobile_number }}
                                </h5>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cotton_detail_unit">
                                <h5>সাপ্লায়ারের ঠিকানা : </h5>
                                <h5>{{ $supplier->supplier_address }}</h5>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <a href="{{ route('inventory.cotton.supplier.single.info.view', ['vendor_id' => Auth::guard('vendor')->user()->vendor_id, 'cotton_id' => $cotton->id, 'supplier_id' => $supplier->id]) }}"
                                class="btn btn-info">
                                View Supplier Details
                            </a>
                        </div>
                    </div>
                @endforeach
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
                            <div style="display: flex; gap : 10px;">
                                <h5>Cotton In Stock :
                                </h5>
                                <div style="display: flex ; gap : 10px">
                                    <h5>{{ $cotton->cotton_yards }} গজ</h5>
                                    <h5>{{ $cotton->cotton_joint }} গিরা </h5>
                                </div>
                            </div>
                            <div>
                                <h5>Cotton Amount Going For Production : </h5>
                                <div class="my-3">
                                    <input type="text" name='production_amount_cotton_id'
                                        id='production_amount_cotton_id' value="{{ $cotton->id }}" hidden />
                                </div>
                                <div class="my-3 row">
                                    <div class="col-6">
                                        <input type="number" min=0 placeholder="yards amount"
                                            name='cotton_yards_for_production' id='cotton_yards_for_production'
                                            class="form-control" />
                                    </div>
                                    <div class="col-6">
                                        <input type="number" min=0 max="16" placeholder="joint amount"
                                            name='cotton_joint_for_production' id='cotton_joint_for_production'
                                            class="form-control" />
                                    </div>
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
