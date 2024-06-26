@extends('.vendor.main')

@section('content')
    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Add More Cotton</h4>
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
                <h5>Supplier Information</h5>
            </div>

            <form
                action="{{ route('inventory.cotton.update.single.vendor.store', ['vendor_id' => Auth::guard('vendor')->user()->vendor_id, 'cotton_id' => $cotton->id]) }}"
                method="post">

                @csrf

                <input type="text" name='cotton_id' id='cotton_id' value="{{ $cotton->id }}" hidden>

                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <input type="text" class="form-control"
                                value="{{ $cotton->supplier[$n - 1]->supplier_company_name }}" name="supplier_company_name"
                                id="supplier_company_name" placeholder="Company Name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <input type="text" class="form-control" value="{{ $cotton->supplier[$n - 1]->supplier_name }}"
                                name="supplier_name" id="supplier_name" placeholder="Supplier Name">
                        </div>
                    </div>
                    <div class="col-md-6 mt-2">
                        <div>
                            <input type="text" class="form-control"
                                value="{{ $cotton->supplier[$n - 1]->supplier_mobile_number }}" name="supplier_mobile_number"
                                id="supplier_mobile_number" placeholder="Supplier Mobile Number">
                        </div>
                    </div>
                    <div class="col-md-6 mt-2">
                        <div>
                            <input type="text" class="form-control"
                                value="{{ $cotton->supplier[$n - 1]->supplier_address }}" name="supplier_address"
                                id="supplier_address" placeholder="Supplier Address">
                        </div>
                    </div>
                </div>


                <div class="row mt-4">
                    <h5>Inventory Information</h5>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <input type="text" class="form-control" name="cotton_name" id="cotton_name"
                                placeholder="Cotton Name" value="{{ $cotton->cotton_name }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <input type="text" class="form-control" name="cotton_type" id="cotton_type"
                                placeholder="Cotton Type" value="{{ $cotton->cotton_type }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-6 mt-2">
                        <div>
                            <input type="number" min=0 class="form-control" name="cotton_price" id="cotton_price"
                                placeholder="Cotton Price" value="{{ $cotton->cotton_price }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-6 mt-2">
                        <div>
                            {{-- <input type="number" min=0 class="form-control" name="cotton_price" id="cotton_price"
                                placeholder="Cotton Price"> --}}
                        </div>
                    </div>
                    <div class="col-md-6 mt-2">
                        <div>
                            <textarea name="cotton_description" class="form-control" id="cotton_description" cols="30" rows="4"
                                placeholder='Cotton Description'>
                                {{ $cotton->cotton_description }}
                            </textarea>
                        </div>
                    </div>
                    <div class="col-md-6 mt-2 cotton_price_unit">

                        <div class="row w-100">
                            <h5 style="display: flex ; gap : 10px ">
                                <div>
                                    Cotton In Stock :
                                </div>
                                <div>
                                    <div style="display: flex ; gap : 20px; ">
                                        <div>
                                            Yards-{{ $cotton->cotton_yards }}
                                        </div>
                                        <div>
                                            Joints-{{ $cotton->cotton_joint }}
                                        </div>
                                    </div>
                                </div>
                            </h5>
                        </div>

                        <div class="row w-100">
                            <div class="col-6">
                                <div>
                                    <div>
                                        Yards
                                    </div>
                                    <div>
                                        <input type="text" name="cotton_yards" id='cotton_yards' placeholder="Yards"
                                            class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div>
                                    <div>
                                        Joint
                                    </div>
                                    <div>
                                        <input type="text" name="cotton_joint" id='cotton_joint' placeholder="joint"
                                            class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="mt-2">
                            <span>
                                <input type="radio" name="cotton_stock_management_unit" value="meter" id="cotton_price">
                                <label for="cotton_stock_management_unit" required>Meter</label>
                            </span>
                            <span style="margin-left : 25px">
                                <input type="radio" name="cotton_stock_management_unit" value="yards" id="cotton_price"
                                    required>
                                <label for="cotton_stock_management_unit">গজ</label>
                            </span>
                        </div>
                        <div class="w-100">
                            <input type="number" min=0 class="form-control" name="cotton_amount" id="cotton_amount"
                                placeholder="Cotton Amount">
                        </div> --}}
                    </div>
                    <div class="col-md-6 mt-2">
                        <button type="submit" class="btn btn-success">
                            Import
                        </button>
                    </div>
                </div>
            </form>


        </div>
    </div>
@endsection
<script></script>
