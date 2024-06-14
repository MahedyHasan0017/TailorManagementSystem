@extends('.superAdmin.main')

@section('content')
    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Pending Payment List</h4>
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

                    <div class="mt-3">

                        <table id="example" class="display" style="width:100%">
                            <thead class="accordion__heading">
                                <tr>
                                    <th>Vendor Name</th>
                                    <th>Mobile Number</th>
                                    <th>Transection Id</th>
                                    <th>Amount</th>
                                    <th>Num of Tailor</th>
                                    <th>Time Span</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($payments as $payment)
                                    <tr>
                                        <td>{{ $payment->vendor_identity }}</td>
                                        <td>{{ $payment->mobile_number }}</td>
                                        <td>{{ $payment->transection_id }}</td>
                                        <td>{{ $payment->total_amount }}</td>
                                        <td>{{ $payment->number_of_tailor }}</td>
                                        <td>{{ $payment->time_span }}</td>
                                        <td>
                                            <a href="{{ route('admin.payments.approved.details.view', ['transection_id' => $payment->transection_id]) }}"
                                                class="btn btn-primary">View</a>

                                            @if (Auth::guard('admin')->user()->status == 5)
                                                {{-- <a href="{{ route('auth.delete.superadmin.from.admin', ['id' => $manager->id]) }}"
                                                    class="btn btn-primary">Delete</a> --}}
                                            @endif

                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>

                        </table>


                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
