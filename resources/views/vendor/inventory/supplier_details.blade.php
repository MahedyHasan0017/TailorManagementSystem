@extends('.vendor.main')

@section('content')
    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Supplier Cotton Supply Details</h4>
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
                    <h5>
                        Cotton Name : {{ $supplier->inventory->cotton_name }}
                    </h5>
                </div>
                <div class="col-md-6">
                    <h5>
                        Cotton Type : {{ $supplier->inventory->cotton_type }}
                    </h5>
                </div>
                <div class="col-md-6">
                    <h5>
                        Cotton Price : {{ $supplier->inventory->cotton_price }}
                    </h5>
                </div>
                <div class="col-md-6">
                    <h5>
                        Cotton Size : {{ $supplier->inventory->cotton_size }}
                    </h5>
                </div>
                <div class="col-12 mt-4 mb-2">
                    <h4>Supplier Info</h4>
                </div>
                <div class="col-md-6">
                    <h5>
                        Supplier Name : {{ $supplier->supplier_name }}
                    </h5>
                </div>
                <div class="col-md-6">
                    <h5>
                        Supplier Mobile : {{ $supplier->supplier_name }}
                    </h5>
                </div>
                <div class="col-md-6">
                    <h5>
                        Supplier Address : {{ $supplier->supplier_name }}
                    </h5>
                </div>
                <div class="col-md-6">
                    <h5>
                        Cotton Yards From This Supplier : {{ $supplier->cotton_yards_from_supplier }}
                    </h5>
                </div>
                <div class="col-md-6">
                    <h5>
                        Cotton Joint From This Supplier : {{ $supplier->cotton_joint_from_supplier }}
                    </h5>
                </div>
            </div>
        </div>
    </div>
@endsection
<script></script>
