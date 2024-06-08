@extends('.employee.main')

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
                <div class="accordion-item">

                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed accordion__heading" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                            aria-controls="collapseOne">
                            <span class=""><i class=" fas fa-search mr-2"></i></span>
                            <span class="ml-2">অর্ডার সার্চ</span>

                        </button>
                    </h2>

                    <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body accordion__body">
                            <div class="row">

                                <div class="col-md-2">
                                    <div class="form_input_group">
                                        <label for="order_number" class="form-label form_input_group_label_important">অর্ডার
                                            নং : <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" id="order_number" name="order_number">
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form_input_group">
                                        <label for="order_number" class="form-label form_input_group_label_important">
                                            গ্রাহকের নাম :
                                            <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" id="order_number" name="order_number">
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form_input_group">
                                        <label for="order_number"
                                            class="form-label form_input_group_label_important">গ্রাহকের মোবাইল নং :
                                            <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" id="order_number" name="order_number">
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form_input_group">
                                        <label for="order_number" class="form-label form_input_group_label_important">শুরুর
                                            তারিখ : <span style="color:red">*</span></label>
                                        <!-- <input type="text" class="form-control" id="order_number"
                                                            name="order_number"> -->
                                        <input id="datepicker1" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form_input_group">
                                        <label for="order_number" class="form-label form_input_group_label_important"> শেষের
                                            তারিখ : <span style="color:red">*</span></label>
                                        <!-- <input type="text" class="form-control" id="order_number"
                                                            name="order_number"> -->

                                        <input id="datepicker2" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form_input_group">
                                        <label for="order_number" class="form-label form_input_group_label_important">অর্ডার
                                            স্ট্যাটাস :
                                            <span style="color:red">*</span></label>
                                        <!-- <input type="text" class="form-control" id="order_number"
                                                            name="order_number"> -->
                                        <select name="" id="" class="form-control">
                                            <option value="">All</option>
                                            <option value="">রানিং</option>
                                            <option value="">রেডি</option>
                                            <option value="">খালাস</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-info btn-rounded">Cancle</button>
                                    <button class="btn btn-primary btn-rounded" style="margin-left: 5px ;"><i
                                            class="fas fa-search pr-5"></i><span
                                            style="padding-left: 10px ;">Search</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="mt-3">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                </symbol>
                                <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                                </symbol>
                                <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </symbol>
                            </svg>
                        </div>

                        <div class="alert alert-primary d-flex align-items-center" role="alert" style="padding: 5px ;">
                            <svg class="bi flex-shrink-0 me-2" width="14" height="14" role="img"
                                aria-label="Info:">
                                <use xlink:href="#info-fill" />
                            </svg>
                            <div>
                                অর্ডার স্ট্যাটাস পরিবর্তন করতে চাইলে , নিচের বক্স থেকে সিলেক্ট করুন । মনে রাখবেন <i
                                    style="font-weight: bold; margin-right: 10px;">রেডি </i> সিলেক্ট করলে গ্রাহকের
                                কাছে একটি SMS চলে যাবে
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">

                        <table id="example" class="display" style="width:100%">
                            <thead class="accordion__heading">
                                <tr>
                                    <th>অর্ডার নং:</th>
                                    <th>গ্রাহকের তথ্য</th>
                                    <th>পোশাকের নাম</th>
                                    <th>পোশাকের মূল্য</th>
                                    <th>মজুরি</th>
                                    <th>মোট বিল</th>
                                    <th>জমার পরিমান</th>
                                    <th>অর্ডারের তারিখ</th>
                                    <th>ডেলিভারির তারিখ </th>
                                    <th>Action</th>
                                </tr>


                            </thead>
                            <tbody>
                                @foreach ($cloth_orders as $cloth_order)
                                    <tr>
                                        <td>{{ $loop->iteration + 1 }}</td>
                                        <td>{{ $cloth_order->customer_name }}</td>
                                        <td>

                                            @if ($cloth_order->cloth_name->upper_part_dress_name != null)
                                                <p>
                                                    <span>{{ $cloth_order->cloth_name->upper_part_dress_name }}</span> x
                                                    <span>{{ en2bn((int) $cloth_order->cloth_name->quantity_of_upper_part_dress) }}
                                                    </span>
                                                </p>
                                            @endif

                                            @if ($cloth_order->cloth_name->lower_part_dress_name != null)
                                                <p>
                                                    <span>{{ $cloth_order->cloth_name->lower_part_dress_name }}</span> x
                                                    <span>{{ en2bn((int) $cloth_order->cloth_name->quantity_of_lower_part_dress) }}</span>
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

                                        <td>{{ en2bn((int) $cloth_order->cloth_order_delivary->majurir_poriman) }}</td>

                                        <td>{{ en2bn((int) ($cloth_order->cloth_order_delivary->majurir_poriman + $cloth_order->cloth_name->total_of_upper_and_lower_part_dress)) }}
                                        </td>
                                        <td>{{ en2bn((int) $cloth_order->cloth_order_delivary->nogod_prodan) }}</td>

                                        <td>{{ $cloth_order->cloth_order_delivary->orderer_tarikh }}</td>
                                        <td>{{ $cloth_order->cloth_order_delivary->delivery_tarikh }}</td>

                                        <td class="action_buttons_in_tablee">
                                            <span>
                                                <a style="margin: 2px;"
                                                    href="{{ route('employee.order.details.view', ['id' => $cloth_order->id]) }}"
                                                    class="btn btn-sm btn-primary w-100">view</a>
                                            </span>
                                            <span>
                                                <a style="margin: 2px;"
                                                    href="{{ route('employee.order.details.delete', ['id' => $cloth_order->id]) }}"
                                                    class="btn btn-sm btn-danger w-100">delete</a>
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    @endsection
