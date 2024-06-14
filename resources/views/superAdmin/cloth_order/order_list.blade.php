@extends('.superAdmin.main')

@section('content')
    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">ওয়ার্ডার লিস্ট</h4>
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
                                    <th>ভেন্ডরের নাম</th>
                                    <th>গ্রাহকের তথ্য</th>
                                    <th>পোশাকের নাম</th>
                                    <th>অর্ডারের তারিখ</th>
                                    <th>ডেলিভারির তারিখ </th>
                                    <th>মোট বিল</th>
                                    <th>জমার পরিমান</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($cloth_orders as $cloth_order)
                                    <tr>
                                        {{-- <td>{{ $loop->iteration }}</td> --}}
                                        <td><a
                                                href="{{ route('admin.vendor.profile.view', ['mobile_number' => $cloth_order->vendor_number]) }}">{{ $cloth_order->vendor_name }}</a>
                                        </td>
                                        <td>{{ $cloth_order->customer_name }}</td>
                                        <td>{{ $cloth_order->cloth_name->cloth_name }}</td>
                                        <td>{{ $cloth_order->cloth_order_delivary->orderer_tarikh }}</td>
                                        <td>{{ $cloth_order->cloth_order_delivary->delivery_tarikh }}</td>

                                        <td>{{ $cloth_order->cloth_order_delivary->majurir_poriman + $cloth_order->cloth_name->total_of_cloth }}
                                        </td>
                                        <td>{{ $cloth_order->cloth_order_delivary->nogod_prodan }}</td>
                                        <td class="action_buttons_in_tablee">
                                            <span><a href="{{ route('admin.order.details.view', ['id' => $cloth_order->id]) }}"
                                                    class="btn btn-primary mb-2 w-100">view</a></span>
                                            <span>

                                                <form
                                                    action="{{ route('admin.order.details.delete', ['id' => $cloth_order->id]) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger w-100">
                                                        delete
                                                    </button>
                                                </form>
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <!-- <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                                <td>$313,500</td>
                                            </tr>
                                        </tfoot> -->
                        </table>


                    </div>
                </div>
            </div>

        </div>
    @endsection
