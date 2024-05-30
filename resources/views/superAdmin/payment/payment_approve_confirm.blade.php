@extends('.superAdmin.main')

@section('content')
    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Payment Request Details</h4>
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

            <div class="accordion" id="accordionExample">
                <div class="row">
                    <div class="col-12">
                        <div>
                            <h3>
                                Vendor Name : {{ $transection_info->vendor_identity }}
                            </h3>
                            <div>
                                Vendor Mobile : {{ $transection_info->vendor_mobile_number }}
                            </div>
                            <div>
                                Payment Number : {{ $transection_info->mobile_number }}
                            </div>
                            <div>
                                Transection Id : {{ $transection_info->transection_id }}
                            </div>
                            <div>
                                Total Amount : {{ $transection_info->total_amount }}
                            </div>
                            <div>
                                Number Of Tailor Vendor Wants To Be Added : {{ $transection_info->number_of_tailor }}
                            </div>
                            <div>
                                Active Time Span For each employee {{ $transection_info->time_span[0] }} @if ($transection_info->time_span[0] > 1)
                                    months
                                @else
                                    month
                                @endif
                            </div>
                            <div> 	
                                
                                <form action="{{ route('admin.payments.request.submit.store') }}" method="post">
                                    @csrf
                                    <div>
                                        <input type="text" hidden name="payment_id" value="{{ $transection_info->payment_request_id }}" readonly>
                                    </div> 
                                    <div>
                                        <input type="text" hidden name="vendor_id" value="{{ $transection_info->vendor_mobile_number }}" readonly>
                                    </div>
                                    <div>
                                        <input type="text" hidden name='number_of_tailor' value="{{ $transection_info->number_of_tailor }}" readonly>
                                    </div>
                                    <div>
                                        <input type="text" hidden name="time_span" value="{{ $transection_info->time_span }}" readonly>
                                    </div>

                                    <button class="btn btn-success">
                                        Activate
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
