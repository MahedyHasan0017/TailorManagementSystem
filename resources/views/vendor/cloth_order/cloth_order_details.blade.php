@extends('.vendor.main')

@php
    $len = count($order_detail->panjabi_measurement->pocket);
    $pockets = $order_detail->panjabi_measurement->pocket;

    $colars = $order_detail->panjabi_measurement->colar;

    $golas = $order_detail->panjabi_measurement->gola;
    $pypins = $order_detail->panjabi_measurement->pypin;
    $plates = $order_detail->panjabi_measurement->plate;
    $kaffs = $order_detail->panjabi_measurement->kaff;

    $pastings = $order_detail->panjabi_measurement->pasting;

    $leises = $order_detail->panjabi_measurement->leise;

    $tiras = $order_detail->panjabi_measurement->tira;

    $fulls = $order_detail->panjabi_measurement->full;

    $botams_for_panjabi = $order_detail->panjabi_measurement->botam_for_panjabi;

    $pant_pocket_len = count($order_detail->pant_measurement->pant_pocket);
    $pant_pockets = $order_detail->pant_measurement->pant_pocket;

    // dd($pant_pocket_len) ;

    // dd($order_detail->pant_measurement->pant_pocket) ;

@endphp


@section('content')
    <div class="page-wrapper" id="print_this">

        {{-- <div class="page-breadcrumb">
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
        </div> --}}


        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <div class="page_titlee">

                        {{-- <div class="col-12 shop__name">
                            <h4>{{ $order_detail->shop_name }}</h4>
                            <div class="vendor__infoo">
                                <h4 class="key_value">
                                    <span class="valuee">{{ $order_detail->vendor_name }}
                                    </span>
                                </h4>
                                <h4 class="key_value">
                                    <span class="valuee">{{ $order_detail->vendor_number }}
                                    </span>
                                </h4>
                                <h4 class="key_value">
                                    <span class="valuee">{{ $order_detail->order_id }}
                                    </span>
                                </h4>
                            </div>
                        </div> --}}

                    </div>
                    {{-- <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Library</li>
                            </ol>
                        </nav>
                    </div> --}}
                </div>
            </div>
        </div>



        <div class="container-fluid" id="print_this">

            <div class="row shop__and__vendor__container">

                <div class="col-4 shop__name">
                    <h4>{{ $order_detail->shop_name }}</h4>
                    <div class="vendor__infoo">
                        <h4 class="key_value">
                            <span class="valuee">{{ $order_detail->vendor_name }}
                            </span>
                        </h4>
                        <h4 class="key_value">
                            <span class="valuee">{{ $order_detail->vendor_number }}
                            </span>
                        </h4>
                        <h4 class="key_value">
                            <span class="valuee">{{ $order_detail->order_id }}
                            </span>
                        </h4>
                    </div>
                </div>

                <div class="col-4">
                    <div class="customer__infoo">
                        <h4>Customer Info</h4>
                        <div>
                            <h4 class="key_value">
                                <span class="key">
                                    <div>
                                        Customer Name
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span><span class="value">{{ $order_detail->customer_name }}
                                </span>
                            </h4>
                            <h4 class="key_value">
                                <span class="key">
                                    <div>
                                        Customer Mobile
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span><span class="value">{{ $order_detail->customer_mobile }}
                                </span>
                            </h4>
                            <h4 class="key_value">
                                <span class="key">
                                    <div>
                                        Customer Email
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span><span class="value">{{ $order_detail->customer_email }}
                                </span>
                            </h4>
                            <h4 class="key_value">
                                <span class="key">
                                    <div>
                                        Customer Address
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span><span class="value">{{ $order_detail->customer_address }}
                                </span>
                            </h4>
                        </div>
                    </div>
                </div>


                <div class="col-4">
                    <div class="customer__info">
                        <h4>Delivary Info</h4>
                        <div>

                            <h4 class="key_value">
                                <span class="key">
                                    <div>
                                        Customer mobile
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span><span class="value">{{ $order_detail->customer_mobile }}
                                </span>
                            </h4>


                            <h4 class="key_value">
                                <span class="key">
                                    <div>
                                        Customer Address
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span><span class="value">{{ $order_detail->customer_address }}
                                </span>
                            </h4>

                            <h4 class="key_value">
                                <span class="key">
                                    <div>
                                        Order Date
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span><span class="value">{{ $order_detail->cloth_order_delivary->orderer_tarikh }}
                                </span>
                            </h4>
                            <h4 class="key_value">
                                <span class="key">
                                    <div>
                                        Delivary Date
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span><span class="value">{{ $order_detail->cloth_order_delivary->delivery_tarikh }}
                                </span>
                            </h4>

                        </div>

                        <button class="btn btn-primary" onclick="printThis()" id='print_button'>Print This</button>

                    </div>
                </div>

            </div>


            <div class="row">
                <div class="col-6 mt-3">
                    <h4 class="key_value">
                        <span class="key">
                            <div>
                                পাঞ্জাবী / শার্ট
                            </div>
                            <div>
                                :
                            </div>
                        </span><span class="value">{{ $order_detail->cloth_name->cloth_name }}
                        </span>
                    </h4>
                    <h4 class="key_value">
                        <span class="key">

                            <div>
                                সংখ্যা
                            </div>
                            <div>
                                :
                            </div>
                        </span><span class="value">{{ $order_detail->cloth_name->number_of_cloth }}
                        </span>
                    </h4>
                </div>
            </div>

            <div class="row panjabi_measurement_parent">

                @if ($order_detail->panjabi_measurement->panjabi_lomba != null)
                    <div class="col-md-3 col-lg-2 col-3 mt-2">
                        <div class="panjabi_measurement_unit bg_transparent_panjabi_measurement_unit">
                            <h6 class="key_value">
                                <span class="key__for__measurements">
                                    <div>
                                        লম্বা
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span>
                                <span
                                    class="value__for__measurements">{{ $order_detail->panjabi_measurement->panjabi_lomba }}
                                </span>
                            </h6>
                        </div>
                    </div>
                @endif


                @if ($order_detail->panjabi_measurement->panjabi_body != null)
                    <div class="col-md-3 col-lg-2 col-3  mt-2">
                        <div class="panjabi_measurement_unit even_class_style">
                            <h6 class="key_value">
                                <span class="key__for__measurements">
                                    <div>
                                        বডি
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span><span
                                    class="value__for__measurements">{{ $order_detail->panjabi_measurement->panjabi_body }}
                                </span>
                            </h6>
                        </div>
                    </div>
                @endif

                @if ($order_detail->panjabi_measurement->panjabi_body_luz != null)
                    <div class="col-md-3 col-lg-2 col-3 mt-2">
                        <div class="panjabi_measurement_unit bg_transparent_panjabi_measurement_unit">
                            <h6 class="key_value">
                                <span class="key__for__measurements">
                                    <div>
                                        বডি লুজ
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span><span
                                    class="value__for__measurements">{{ $order_detail->panjabi_measurement->panjabi_body_luz }}
                                </span>
                            </h6>
                        </div>
                    </div>
                @endif



                @if ($order_detail->panjabi_measurement->panjabi_pet != null)
                    <div class="col-md-3 col-lg-2 col-3  mt-2">
                        <div class="panjabi_measurement_unit even_class_style">
                            <h6 class="key_value">
                                <span class="key__for__measurements">
                                    <div>
                                        পেট
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span><span
                                    class="value__for__measurements">{{ $order_detail->panjabi_measurement->panjabi_pet }}
                                </span>
                            </h6>
                        </div>
                    </div>
                @endif




                @if ($order_detail->panjabi_measurement->panjabi_put != null)
                    <div class="col-md-3 col-lg-2 col-3  mt-2">
                        <div class="panjabi_measurement_unit bg_transparent_panjabi_measurement_unit">
                            <h6 class="key_value">
                                <span class="key__for__measurements">
                                    <div>
                                        পুট
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span><span
                                    class="value__for__measurements">{{ $order_detail->panjabi_measurement->panjabi_put }}
                                </span>
                            </h6>
                        </div>
                    </div>
                @endif



                @if ($order_detail->panjabi_measurement->panjabi_hater_lomba != null)
                    <div class="col-md-3 col-lg-2 col-3 mt-2">
                        <div class="panjabi_measurement_unit even_class_style">
                            <h6 class="key_value">
                                <span class="key__for__measurements">
                                    <div>
                                        হাতার লম্বা
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span><span
                                    class="value__for__measurements">{{ $order_detail->panjabi_measurement->panjabi_hater_lomba }}
                                </span>
                            </h6>
                        </div>
                    </div>
                @endif




                @if ($order_detail->panjabi_measurement->panjabi_hatar_mukh != null)
                    <div class="col-md-3 col-lg-2 col-3 mt-2">
                        <div class="panjabi_measurement_unit bg_transparent_panjabi_measurement_unit">
                            <h6 class="key_value">
                                <span class="key__for__measurements bg_transparent_panjabi_measurement_unit">
                                    <div>
                                        হাতার মুখ
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span><span
                                    class="value__for__measurements">{{ $order_detail->panjabi_measurement->panjabi_hatar_mukh }}
                                </span>
                            </h6>
                        </div>
                    </div>
                @endif



                @if ($order_detail->panjabi_measurement->panjabi_kaff != null)
                    <div class="col-md-3 col-lg-2 col-3 mt-2">
                        <div class="panjabi_measurement_unit even_class_style">
                            <h6 class="key_value">
                                <span class="key__for__measurements">
                                    <div>
                                        কাফ
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span><span
                                    class="value__for__measurements">{{ $order_detail->panjabi_measurement->panjabi_kaff }}
                                </span>
                            </h6>
                        </div>
                    </div>
                @endif




                @if ($order_detail->panjabi_measurement->panjabi_gola != null)
                    <div class="col-md-3 col-lg-2 col-3 mt-2">
                        <div class="panjabi_measurement_unit bg_transparent_panjabi_measurement_unit">
                            <h6 class="key_value">
                                <span class="key__for__measurements">
                                    <div>
                                        গলা
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span><span
                                    class="value__for__measurements">{{ $order_detail->panjabi_measurement->panjabi_gola }}
                                </span>
                            </h6>
                        </div>
                    </div>
                @endif




                @if ($order_detail->panjabi_measurement->panjabi_plate_fara != null)
                    <div class="col-md-3 col-lg-2 col-3 mt-2">
                        <div class="panjabi_measurement_unit even_class_style">
                            <h6 class="key_value">
                                <span class="key__for__measurements">
                                    <div>
                                        প্লেট ফাড়া
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span><span
                                    class="value__for__measurements">{{ $order_detail->panjabi_measurement->panjabi_plate_fara }}
                                </span>
                            </h6>
                        </div>
                    </div>
                @endif



                @if ($order_detail->panjabi_measurement->panjabi_colar_choura != null)
                    <div class="col-md-3 col-lg-2 col-3 mt-2">
                        <div class="panjabi_measurement_unit bg_transparent_panjabi_measurement_unit">
                            <h6 class="key_value">
                                <span class="key__for__measurements">
                                    <div>
                                        কলার চউরা
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span><span
                                    class="value__for__measurements">{{ $order_detail->panjabi_measurement->panjabi_colar_choura }}
                                </span>
                            </h6>
                        </div>
                    </div>
                @endif




                @if ($order_detail->panjabi_measurement->panjabi_plate_choura != null)
                    <div class="col-md-3 col-lg-2 col-3 mt-2">
                        <div class="panjabi_measurement_unit even_class_style">
                            <h6 class="key_value">
                                <span class="key__for__measurements">
                                    <div>
                                        প্লেট চউরা
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span><span
                                    class="value__for__measurements">{{ $order_detail->panjabi_measurement->panjabi_plate_choura }}
                                </span>
                            </h6>
                        </div>
                    </div>
                @endif




                @if ($order_detail->panjabi_measurement->panjabi_gher != null)
                    <div class="col-md-3 col-lg-2 col-3 mt-2">
                        <div class="panjabi_measurement_unit bg_transparent_panjabi_measurement_unit">
                            <h6 class="key_value">
                                <span class="key__for__measurements">
                                    <div>
                                        ঘের
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span><span
                                    class="value__for__measurements">{{ $order_detail->panjabi_measurement->panjabi_gher }}
                                </span>
                            </h6>
                        </div>
                    </div>
                @endif

                @if ($order_detail->panjabi_measurement->panjabi_hiff != null)
                    <div class="col-md-3 col-lg-2 col-3 mt-2">
                        <div class="panjabi_measurement_unit even_class_style">
                            <h6 class="key_value">
                                <span class="key__for__measurements">
                                    <div>
                                        হিফ
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span><span
                                    class="value__for__measurements">{{ $order_detail->panjabi_measurement->panjabi_hiff }}
                                </span>
                            </h6>
                        </div>
                    </div>
                @endif




                @if ($order_detail->panjabi_measurement->panjabi_nich_hata != null)
                    <div class="col-md-3 col-lg-2 col-3 mt-2">
                        <div class="panjabi_measurement_unit bg_transparent_panjabi_measurement_unit">
                            <h6 class="key_value">
                                <span class="key__for__measurements">
                                    <div>
                                        নিচ হাতা
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span><span
                                    class="value__for__measurements">{{ $order_detail->panjabi_measurement->panjabi_nich_hata }}
                                </span>
                            </h6>
                        </div>
                    </div>
                @endif



                @if ($order_detail->panjabi_measurement->panjabi_madani_fara != null)
                    <div class="col-md-3 col-lg-2 col-3 mt-2">
                        <div class="panjabi_measurement_unit even_class_style">
                            <h6 class="key_value">
                                <span class="key__for__measurements">
                                    <div>
                                        মাদানি ফাড়া
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span><span
                                    class="value__for__measurements">{{ $order_detail->panjabi_measurement->panjabi_madani_fara }}
                                </span>
                            </h6>
                        </div>
                    </div>
                @endif



                @if ($order_detail->panjabi_measurement->panjabi_mot_mora != null)
                    <div class="col-md-3 col-lg-2 col-3 mt-2">
                        <div class="panjabi_measurement_unit bg_transparent_panjabi_measurement_unit">
                            <h6 class="key_value">
                                <span class="key__for__measurements">
                                    <div>
                                        মোট মোড়া
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span><span
                                    class="value__for__measurements">{{ $order_detail->panjabi_measurement->panjabi_mot_mora }}
                                </span>
                            </h6>
                        </div>
                    </div>
                @endif



                @if ($order_detail->panjabi_measurement->panjabi_hatte_pasting != null)
                    <div class="col-md-3 col-lg-2 col-3 mt-2">
                        <div class="panjabi_measurement_unit even_class_style">
                            <h6 class="key_value">
                                <span class="key__for__measurements">
                                    <div>
                                        হাতে পেস্টিং
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span><span
                                    class="value__for__measurements">{{ $order_detail->panjabi_measurement->panjabi_hatte_pasting }}
                                </span>
                            </h6>
                        </div>
                    </div>
                @endif


            </div>


            <div class="row asset_info_heading">

                @if (count($pockets) != 0)
                    <div class="col-md-6 col-lg-4 col-4 mt-2 asset_info">
                        <div class="panjabi_measurement_unit bg_transparent_panjabi_measurement_unit">
                            <h6 class="key_value">
                                <span class="key__for__measurements__with__loop">
                                    <div>
                                        পকেট
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span><span class="value__for__measurements__with__loop">
                                    @foreach ($pockets as $pocket)
                                        <div>
                                            {{ $pocket->pocket_name }}
                                        </div>
                                    @endforeach
                                </span>
                            </h6>
                        </div>
                    </div>
                @endif


                @if (count($colars) != 0)
                    <div class="col-md-6 col-lg-4 col-4 mt-2 asset_info">
                        <div class="panjabi_measurement_unit even_class_style">
                            <h6 class="key_value">
                                <span class="key__for__measurements__with__loop">
                                    <div>
                                        কলার
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span><span class="value__for__measurements__with__loop">
                                    @foreach ($colars as $colar)
                                        <div>
                                            {{ $colar->colar_name }}
                                        </div>
                                    @endforeach
                                </span>
                            </h6>
                        </div>
                    </div>
                @endif

                @if (count($golas) != 0 )
                    <div class="col-md-6 col-lg-4 col-4 mt-2 asset_info">
                        <div class="panjabi_measurement_unit bg_transparent_panjabi_measurement_unit">
                            <h6 class="key_value">
                                <span class="key__for__measurements__with__loop">
                                    <div>
                                        গলা
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span><span class="value__for__measurements__with__loop">
                                    @foreach ($golas as $gola)
                                        <div>
                                            {{ $gola->gola_name }}
                                        </div>
                                    @endforeach
                                </span>
                            </h6>
                        </div>
                    </div>
                @endif

                @if (count($pypins))
                    <div class="col-md-6 col-lg-4 col-4 mt-2 asset_info">
                        <div class="panjabi_measurement_unit bg_transparent_panjabi_measurement_unit">
                            <h6 class="key_value">
                                <span class="key__for__measurements__with__loop">
                                    <div>
                                        পাইপিন
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span><span class="value__for__measurements__with__loop">
                                    @foreach ($pypins as $pypin)
                                        <div>
                                            {{ $pypin->pypin_name }}
                                        </div>
                                    @endforeach
                                </span>
                            </h6>
                        </div>
                    </div>
                @endif

                @if (count($plates))
                    <div class="col-md-6 col-lg-4 col-4 mt-2 asset_info">
                        <div class="panjabi_measurement_unit even_class_style">
                            <h6 class="key_value">
                                <span class="key__for__measurements__with__loop">
                                    <div>
                                        প্লেট
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span><span class="value__for__measurements__with__loop">
                                    @foreach ($plates as $plate)
                                        <div>
                                            {{ $plate->plate_name }}
                                        </div>
                                    @endforeach
                                </span>
                            </h6>
                        </div>
                    </div>
                @endif



                @if (count($kaffs) != 0)
                    <div class="col-md-6 col-lg-4 col-4 mt-2 asset_info">
                        <div class="panjabi_measurement_unit bg_transparent_panjabi_measurement_unit">
                            <h6 class="key_value">
                                <span class="key__for__measurements__with__loop">
                                    <div>
                                        কাফ
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span><span class="value__for__measurements__with__loop">
                                    @foreach ($kaffs as $kaff)
                                        <div>
                                            {{ $kaff->kaff_name }}
                                        </div>
                                    @endforeach
                                </span>
                            </h6>
                        </div>
                    </div>
                @endif


                @if (count($pastings))
                    <div class="col-md-6 col-lg-4 col-4 mt-2 asset_info ">
                        <div class="panjabi_measurement_unit bg_transparent_panjabi_measurement_unit">
                            <h6 class="key_value">
                                <span class="key__for__measurements__with__loop">
                                    <div>
                                        পেস্টিং
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span><span class="value__for__measurements__with__loop">
                                    @foreach ($pastings as $pasting)
                                        <div>
                                            {{ $pasting->pasting_name }}
                                        </div>
                                    @endforeach
                                </span>
                            </h6>
                        </div>
                    </div>
                @endif



                @if (count($leises) != 0)
                    <div class="col-md-6 col-lg-4 col-4 mt-2 asset_info">
                        <div class="panjabi_measurement_unit even_class_style">
                            <h6 class="key_value">
                                <span class="key__for__measurements__with__loop">
                                    <div>
                                        লেইস
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span><span class="value__for__measurements__with__loop">
                                    @foreach ($leises as $leise)
                                        <div>
                                            {{ $leise->leise_name }}
                                        </div>
                                    @endforeach
                                </span>
                            </h6>
                        </div>
                    </div>
                @endif


                @if (count($tiras))
                    <div class="col-md-6 col-lg-4 col-4 mt-2 asset_info">
                        <div class="panjabi_measurement_unit bg_transparent_panjabi_measurement_unit">
                            <h6 class="key_value">
                                <span class="key__for__measurements__with__loop">
                                    <div>
                                        তিরা
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span><span class="value__for__measurements__with__loop">
                                    @foreach ($tiras as $tira)
                                        <div>
                                            {{ $tira->tira_name }}
                                        </div>
                                    @endforeach
                                </span>
                            </h6>
                        </div>
                    </div>
                @endif


                @if (count($fulls))
                    <div class="col-md-6 col-lg-4 col-4 mt-2 asset_info">
                        <div class="panjabi_measurement_unit bg_transparent_panjabi_measurement_unit">
                            <h6 class="key_value">
                                <span class="key__for__measurements__with__loop">
                                    <div>
                                        ফুল
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span><span class="value__for__measurements__with__loop">
                                    @foreach ($fulls as $full)
                                        <div>
                                            {{ $full->full_name }}
                                        </div>
                                    @endforeach
                                </span>
                            </h6>
                        </div>
                    </div>
                @endif



                @if (count($botams_for_panjabi) != 0)
                    <div class="col-md-6 col-lg-4 col-4 mt-2 asset_info">
                        <div class="panjabi_measurement_unit even_class_style">
                            <h6 class="key_value">
                                <span class="key__for__measurements__with__loop">
                                    <div>
                                        বোতাম
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span><span class="value__for__measurements__with__loop">
                                    @foreach ($botams_for_panjabi as $botam_for_panjabi)
                                        <div>
                                            {{ $botam_for_panjabi->botam_name }}
                                        </div>
                                    @endforeach
                                </span>
                            </h6>
                        </div>
                    </div>
                @endif


            </div>



            @if ($order_detail->pant_measurement->pant_lomba != null)
                <div class="row">
                    <div class="col-6 mt-3">
                        <h4 class="key_value">
                            <span class="key">
                                <div>
                                    পাজামা / প্যান্ট
                                </div>
                                <div>
                                    :
                                </div>
                            </span><span class="value">{{ $order_detail->cloth_name->cloth_name }}
                            </span>
                        </h4>
                        <h4 class="key_value">
                            <span class="key">
                                <div>
                                    সংখ্যা
                                </div>
                                <div>
                                    :
                                </div>
                            </span><span class="value">{{ $order_detail->cloth_name->number_of_cloth }}
                            </span>
                        </h4>
                    </div>

                    <div class="col-md-6 mt-3">

                    </div>
                </div>
            @endif




            <div class="row">

                @if ($order_detail->pant_measurement->pant_lomba != null)
                    <div class="col-md-3 col-lg-2 col-3 mt-2">
                        <div class="panjabi_measurement_unit bg_transparent_panjabi_measurement_unit">
                            <h6 class="key_value">
                                <span class="key__for__measurements">
                                    <div>
                                        লম্বা
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span><span
                                    class="value__for__measurements">{{ $order_detail->pant_measurement->pant_lomba }}
                                </span>
                            </h6>
                        </div>
                    </div>
                @endif


                @if ($order_detail->pant_measurement->pant_payer_mukh != null)
                    <div class="col-md-3 col-lg-2 col-3 mt-2">
                        <div class="panjabi_measurement_unit even_class_style">
                            <h6 class="key_value">
                                <span class="key__for__measurements">
                                    <div>
                                        পায়ের মুখ
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span><span
                                    class="value__for__measurements">{{ $order_detail->pant_measurement->pant_payer_mukh }}
                                </span>
                            </h6>
                        </div>
                    </div>
                @endif

                @if ($order_detail->pant_measurement->pant_body_high != null)
                    <div class="col-md-3 col-lg-2 col-3 mt-2">
                        <div class="panjabi_measurement_unit bg_transparent_panjabi_measurement_unit">
                            <h6 class="key_value">
                                <span class="key__for__measurements">
                                    <div>
                                        বডি হাই
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span><span
                                    class="value__for__measurements">{{ $order_detail->pant_measurement->pant_body_high }}
                                </span>
                            </h6>
                        </div>
                    </div>
                @endif


                @if ($order_detail->pant_measurement->pant_thai_luz != null)
                    <div class="col-md-3 col-lg-2 col-3 mt-2">
                        <div class="panjabi_measurement_unit even_class_style">
                            <h6 class="key_value">
                                <span class="key__for__measurements">
                                    <div>
                                        ঘের/থাই লুজ
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span><span
                                    class="value__for__measurements">{{ $order_detail->pant_measurement->pant_thai_luz }}
                                </span>
                            </h6>
                        </div>
                    </div>
                @endif

                @if ($order_detail->pant_measurement->pant_komor != null)
                    <div class="col-md-3 col-lg-2 col-3 mt-2">
                        <div class="panjabi_measurement_unit bg_transparent_panjabi_measurement_unit">
                            <h6 class="key_value">
                                <span class="key__for__measurements">
                                    <div>
                                        কোমর
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span><span
                                    class="value__for__measurements">{{ $order_detail->pant_measurement->pant_komor }}
                                </span>
                            </h6>
                        </div>
                    </div>
                @endif

                @if ($order_detail->pant_measurement->pant_belt_type != null)
                    <div class="col-md-3 col-lg-2 col-3 mt-2">
                        <div class="panjabi_measurement_unit even_class_style">
                            <h6 class="key_value">
                                <span class="key__for__measurements">
                                    <div>
                                        বেল্ট টাইপ
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span><span
                                    class="value__for__measurements">{{ $order_detail->pant_measurement->pant_belt_type }}
                                </span>
                            </h6>
                        </div>
                    </div>
                @endif


                @if ($order_detail->pant_measurement->pant_hiff != null)
                    <div class="col-md-3 col-lg-2 col-3 mt-2">
                        <div class="panjabi_measurement_unit bg_transparent_panjabi_measurement_unit">
                            <h6 class="key_value">
                                <span class="key__for__measurements">
                                    <div>
                                        হিফ
                                    </div>
                                    <div>
                                        :
                                    </div>
                                </span><span
                                    class="value__for__measurements">{{ $order_detail->pant_measurement->pant_hiff }}
                                </span>
                            </h6>
                        </div>
                    </div>
                @endif

            </div>


            @if (count($pant_pockets) != 0)
            <div class="row asset_info_heading">
                <div class="col-md-6 col-lg-4 col-6 mt-2 asset_info">
                    <div class="panjabi_measurement_unit bg_transparent_panjabi_measurement_unit">
                        <h6 class="key_value">
                            <span class="key__for__measurements__with__loop">
                                <div>
                                    পকেট
                                </div>
                                <div>
                                    :
                                </div>
                            </span><span class="value__for__measurements__with__loop">
                                @foreach ($pant_pockets as $pant_pocket)
                                    <div>
                                        {{ $pant_pocket->pant_pocket_name }}
                                    </div>
                                @endforeach
                            </span>
                        </h6>
                    </div>
                </div>
            </div>
            @endif

            <div class="row our_text">
                <div class="col-12 text-end">
                    <h6>Design And Developed By Zeropoint Computing</h6>
                </div>
            </div>

        </div>
    </div>
@endsection




@push('scripts')
    <script>
        function printThis() {
            var printContents = document.getElementById("print_this").innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>
@endpush
