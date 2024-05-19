@extends('.superAdmin.main')

@section('content')
    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">অর্ডার গ্রহন</h4>
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
                @php
                    $len = count($order_detail->panjabi_measurement->pocket) ; 
                    $pockets = $order_detail->panjabi_measurement->pocket;
                @endphp

                @foreach ($pockets as $pocket )
                    <div>
                        {{ $pocket->pocket_name }}
                    </div>
                @endforeach

            </div>

        </div>
    </div>
@endsection