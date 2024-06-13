@extends('.employee.main')

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
                                    <th>গ্রাহকের তথ্য</th>
                                    <th>পোশাকের নাম</th>
                                    <th>পোশাকের মূল্য</th>
                                    <th>মজুরি</th>
                                    <th>মোট বিল</th>
                                    <th>জমার পরিমান</th>
                                    <th>অর্ডারের তারিখ</th>
                                    <th>ডেলিভারির তারিখ </th>
                                    <th>Status</th>
                                    {{-- <th>Action</th> --}}
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($cloth_orders as $cloth_order)
                                    <tr>



                                        {{-- <td>{{ $cloth_order->id }}</td> --}}
                                        <td id='customer_name'>
                                            {{ $cloth_order->customer_name }}

                                            <span class="d-none" id='order_id{{ $loop->index }}'>
                                                {{ $cloth_order->id }}
                                            </span>

                                            <span id='vendor_name{{ $loop->index }}' class="d-none">
                                                {{ $cloth_order->vendor_name }}
                                            </span>

                                        </td>
                                        <td>

                                            @if ($cloth_order->cloth_name->upper_part_dress_name != null)
                                                <p>
                                                    <span
                                                        id='upper_part_dress_name{{ $loop->index }}'>{{ $cloth_order->cloth_name->upper_part_dress_name }}</span>
                                                    x
                                                    <span
                                                        id='upper_part_dress_quantity{{ $loop->index }}'>{{ en2bn((int) $cloth_order->cloth_name->quantity_of_upper_part_dress) }}
                                                    </span>
                                                </p>
                                            @endif

                                            @if ($cloth_order->cloth_name->lower_part_dress_name != null)
                                                <p>
                                                    <span
                                                        id='lower_part_dress_name{{ $loop->index }}'>{{ $cloth_order->cloth_name->lower_part_dress_name }}</span>
                                                    x
                                                    <span
                                                        id='lower_part_dress_quantity{{ $loop->index }}'>{{ en2bn((int) $cloth_order->cloth_name->quantity_of_lower_part_dress) }}</span>
                                                </p>
                                            @endif

                                        </td>

                                        <td>
                                            <p>
                                                @if ($cloth_order->cloth_name->total_upper_part_dress != 0)
                                                    {{ en2bn((int) $cloth_order->cloth_name->total_upper_part_dress) }}
                                                @endif
                                            </p>
                                            <p>
                                                @if ($cloth_order->cloth_name->total_lower_part_dress != 0)
                                                    {{ en2bn((int) $cloth_order->cloth_name->total_lower_part_dress) }}
                                                @endif
                                            </p>
                                        </td>

                                        <td>
                                            {{ en2bn((int) $cloth_order->cloth_order_delivary->majurir_poriman) }}
                                            <span class="display__none"
                                                id='wages_value_order{{ $loop->index }}'>{{ $cloth_order->cloth_order_delivary->majurir_poriman }}</span>
                                        </td>

                                        <td>
                                            {{ en2bn((int) ($cloth_order->cloth_order_delivary->majurir_poriman + $cloth_order->cloth_name->total_of_upper_and_lower_part_dress)) }}
                                            <span class="display__none" id='total_value_order{{ $loop->index }}'>
                                                {{ $cloth_order->cloth_order_delivary->majurir_poriman + $cloth_order->cloth_name->total_of_upper_and_lower_part_dress }}
                                            </span>
                                        </td>
                                        <td>{{ en2bn((int) $cloth_order->cloth_order_delivary->nogod_prodan) }}</td>

                                        <td>{{ $cloth_order->cloth_order_delivary->orderer_tarikh }}</td>
                                        <td>{{ $cloth_order->cloth_order_delivary->delivery_tarikh }}</td>
                                        <td>
                                            @if ($cloth_order->status != null)
                                                <span class="badge bg-success">
                                                    Delivered
                                                </span>
                                            @endif
                                        </td>
                                        {{-- <td class="action_buttons_in_tablee">

                                            <div>
                                                <span>
                                                    <a href="{{ route('vendor.order.details.view', ['id' => $cloth_order->id]) }}"
                                                        class="btn btn-sm btn-primary w-100">
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
        {{-- <script type="text/javascript">
            const assign_button_span = document.getElementById('assign_button_span');
            const assign_active_span = document.getElementById('assign_active_span');

            function assign_button() {
                assign_button_span.classList.add('display__none')
                assign_active_span.classList.remove('display__none')
                assign_active_span.classList.add('display__block')
            }

            function assign_active() {
                assign_active_span.classList.remove('display__block')
                assign_active_span.classList.add('display__none')
                assign_button_span.classList.remove('display__none')
                assign_button_span.classList.add('display__block')
            }
        </script> --}}
    @endpush
