@extends('.vendor.main')

@section('content')
    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Order Delivered Page</h4>
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
                                    <th>পোশাকের নাম</th>
                                    <th>পোশাকের মূল্য</th>
                                    <th>মজুরি</th>
                                    <th>মোট বিল</th>
                                    <th>জমার পরিমান</th>
                                    <th>টেইলরের নাম</th>
                                    <th>অর্ডারের তারিখ</th>
                                    <th>ডেলিভারির তারিখ </th>
                                    <th>Status</th>
                                    {{-- <th>Action</th> --}}
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($cloth_orders as $cloth_order)
                                    <tr>

                                        <td>

                                            @if ($cloth_order->cloth_upper_name != null)
                                                <p>
                                                    <span
                                                        id='upper_part_dress_name{{ $loop->index }}'>{{ $cloth_order->cloth_upper_name }}</span>

                                                </p>
                                            @endif

                                            @if ($cloth_order->cloth_lower_name != null)
                                                <p>
                                                    <span
                                                        id='lower_part_dress_name{{ $loop->index }}'>{{ $cloth_order->cloth_lower_name }}</span>


                                                </p>
                                            @endif

                                        </td>

                                        <td>
                                            {{ $cloth_order->total_cloth_price }}
                                        </td>

                                        <td>
                                            {{ $cloth_order->tailor_wage }}
                                        </td>

                                        <td>
                                            {{ $cloth_order->total_bill }}
                                        </td>
                                        <td>
                                            {{ $cloth_order->deposite_amount }}
                                        </td>

                                        <td id=''>
                                            {{ $cloth_order->tailor_name }}
                                        </td>

                                        <td>
                                            {{ $cloth_order->orderer_tarikh }}
                                        </td>
                                        <td>
                                            {{ $cloth_order->delivery_tarikh }}
                                        </td>
                                        <td>
                                            <span class="badge bg-success">Paid</span>
                                        </td>
                                        {{-- <td class="action_buttons_in_tablee">

                                            <div class="mb-2">
                                                <span>
                                                    <a href="" class="btn btn-sm btn-primary w-100">
                                                        view
                                                    </a>
                                                </span>
                                            </div>
                                        </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    @endsection


    @push('scripts')
    @endpush
