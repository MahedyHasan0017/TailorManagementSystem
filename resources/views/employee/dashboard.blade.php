@extends('employee.main')

@section('content')
    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">ড্যাশবোর্ড</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">হোম</a></li>
                                <li class="breadcrumb-item active" aria-current="page">লাইব্রেরী</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid ">

            <div class="row">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header " id="headingOne">
                            <button class="accordion-button accordion__heading" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                পোশাকের ওয়ার্ডার সংক্রান্ত
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body accordion__body">
                                <div class="row">
                                    <div class="col-md-6 col-lg-3">
                                        <div class="card card-hover padding_bottom_zero">
                                            <div class="box bg-cyan text-center">
                                                <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i>
                                                </h1>
                                                <h6 class="text-white">আজ মোট অর্ডার</h6>
                                                <h6 class="text-white">১০</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-3">
                                        <div class="card card-hover padding_bottom_zero">
                                            <div class="box bg-success text-center">
                                                <h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i>
                                                </h1>
                                                <h6 class="text-white">এ মাসে মোট অর্ডার</h6>
                                                <h6 class="text-white">১০০</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-3">
                                        <div class="card card-hover padding_bottom_zero">
                                            <div class="box bg-warning text-center">
                                                <h1 class="font-light text-white"><i class="mdi mdi-collage"></i>
                                                </h1>
                                                <h6 class="text-white">আজ মোট ডেলিভারি</h6>
                                                <h6 class="text-white">২০</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-3">
                                        <div class="card card-hover padding_bottom_zero">
                                            <div class="box bg-danger text-center">
                                                <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i>
                                                </h1>
                                                <h6 class="text-white">এ মাসে মোট ডেলিভারি</h6>
                                                <h6 class="text-white">১১০</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-3">
                                        <div class="card card-hover">
                                            <div class="box bg-info text-center">
                                                <h1 class="font-light text-white"><i class="mdi mdi-arrow-all"></i>
                                                </h1>
                                                <h6 class="text-white">আজ পর্যন্ত মোট অর্ডার</h6>
                                                <h6 class="text-white">৫০০০</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-3">
                                        <div class="card card-hover">
                                            <div class="box bg-danger text-center">
                                                <h1 class="font-light text-white"><i class="mdi mdi-receipt"></i>
                                                </h1>
                                                <h6 class="text-white">আজ পর্যন্ত মোট ডেলিভারী</h6>
                                                <h6 class="text-white">৪৮৫০</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-3">
                                        <div class="card card-hover">
                                            <div class="box bg-info text-center">
                                                <h1 class="font-light text-white"><i class="mdi mdi-relative-scale"></i>
                                                </h1>
                                                <h6 class="text-white">আজ মোট আয়</h6>
                                                <h6 class="text-white">২০০০</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-3">
                                        <div class="card card-hover">
                                            <div class="box bg-cyan text-center">
                                                <h1 class="font-light text-white"><i class="mdi mdi-pencil"></i>
                                                </h1>
                                                <h6 class="text-white">আজ মোট ব্যয়</h6>
                                                <h6 class="text-white">১০০০</h6>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mt-3">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed accordion__heading" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                aria-controls="collapseTwo">
                                Account Info
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body accordion__body">
                                <div class="row pt-4">
                                    <div class="col-md-6 col-lg-4 text-center">
                                        <div class="calculation_box_heading">
                                            আজকের হিসাব
                                        </div>
                                        <div class="calculation_box">
                                            <div class="calculation_box_left">
                                                income
                                            </div>
                                            <div class="calculation_box_right">
                                                1000000
                                            </div>
                                        </div>
                                        <div class="calculation_box">
                                            <div class="calculation_box_left">
                                                cost
                                            </div>
                                            <div class="calculation_box_right">
                                                1000000
                                            </div>
                                        </div>
                                        <div class="calculation_box">
                                            <div class="calculation_box_left">
                                                income
                                            </div>
                                            <div class="calculation_box_right">
                                                1000000
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-md-6 col-lg-4 text-center">
                                        <div class="calculation_box_heading">
                                            চলতি মাসের হিসাব
                                        </div>
                                        <div class="calculation_box calculation_box_color_2">
                                            <div class="calculation_box_left">
                                                income
                                            </div>
                                            <div class="calculation_box_right">
                                                1000000
                                            </div>
                                        </div>
                                        <div class="calculation_box calculation_box_color_2">
                                            <div class="calculation_box_left">
                                                cost
                                            </div>
                                            <div class="calculation_box_right">
                                                1000000
                                            </div>
                                        </div>
                                        <div class="calculation_box calculation_box_color_2">
                                            <div class="calculation_box_left">
                                                income
                                            </div>
                                            <div class="calculation_box_right">
                                                1000000
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 text-center">
                                        <div class="calculation_box_heading">
                                            গত মাসের হিসাব
                                        </div>
                                        <div class="calculation_box">
                                            <div class="calculation_box_left">
                                                income
                                            </div>
                                            <div class="calculation_box_right">
                                                1000000
                                            </div>
                                        </div>
                                        <div class="calculation_box">
                                            <div class="calculation_box_left">
                                                cost
                                            </div>
                                            <div class="calculation_box_right">
                                                1000000
                                            </div>
                                        </div>
                                        <div class="calculation_box">
                                            <div class="calculation_box_left">
                                                income
                                            </div>
                                            <div class="calculation_box_right">
                                                1000000
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="accordion-item mt-3">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed accordion__heading" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                aria-controls="collapseThree">
                                Site Analysis
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body accordion__body">
                                <div class="row pt-4">
                                    <div class="row">


                                        <div class="col-md-3">
                                            <div class="bg-dark p-10 text-white text-center">
                                                <i class="fa fa-user mb-1 font-16"></i>
                                                <h5 class="mb-0 mt-1">2540</h5>
                                                <small class="font-light">Total Users</small>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="bg-dark p-10 text-white text-center">
                                                <i class="fa fa-plus mb-1 font-16"></i>
                                                <h5 class="mb-0 mt-1">120</h5>
                                                <small class="font-light">New Users</small>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="bg-dark p-10 text-white text-center">
                                                <i class="fa fa-cart-plus mb-1 font-16"></i>
                                                <h5 class="mb-0 mt-1">656</h5>
                                                <small class="font-light">Total Shop</small>
                                            </div>
                                        </div>


                                        <div class="col-md-3">
                                            <div class="bg-dark p-10 text-white text-center">
                                                <i class="fa fa-tag mb-1 font-16"></i>
                                                <h5 class="mb-0 mt-1">9540</h5>
                                                <small class="font-light">Total Orders</small>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">বিল পেমেন্ট এর সতর্কতা</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div>
                                        প্রিয় MN tailers
                                    </div>
                                    <div>
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo, recusandae.
                                    </div>
                                    <div>
                                        <div>Lorem ipsum dolor sit amet.</div>

                                    </div>
                                    <div>
                                        <div>thank you</div>
                                        <div>
                                            Lorem ipsum dolor sit amet.
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <!-- <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button> -->
                                    <button type="button" data-bs-dismiss="modal" class="btn btn-danger">OK</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card chat__box" id="chat__box">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title mb-0">Chat Option</h4>
                        <div onclick="hideChatBox()"
                            style="font-size: 15px; cursor: pointer; background-color: #da542e ; color: #fff;height: 20px; width:20px ; display: flex; justify-content: center; align-items: center; border-radius: 5px ;">
                            x
                        </div>
                    </div>
                    <div class="chat-box scrollable" style="height:255px;">
                        <!--chat Row -->
                        <ul class="chat-list">
                            <!--chat Row -->
                            <li class="chat-item">
                                <div class="chat-img"><img
                                        src="{{ asset('tailerStaticTemplate/assets/images/users/1.jpg') }}"
                                        alt="user">
                                </div>
                                <div class="chat-content">
                                    <h6 class="font-medium">James Anderson</h6>
                                    <div class="box bg-light-info">Lorem Ipsum is simply dummy text of the
                                        printing &amp; type setting industry.</div>
                                </div>
                                <div class="chat-time">10:56 am</div>
                            </li>
                            <!--chat Row -->
                            <li class="chat-item">
                                <div class="chat-img"><img
                                        src="{{ asset('tailerStaticTemplate/assets/images/users/2.jpg') }}"
                                        alt="user">
                                </div>
                                <div class="chat-content">
                                    <h6 class="font-medium">Bianca Doe</h6>
                                    <div class="box bg-light-info">It’s Great opportunity to work.</div>
                                </div>
                                <div class="chat-time">10:57 am</div>
                            </li>
                            <!--chat Row -->
                            <li class="odd chat-item">
                                <div class="chat-content">
                                    <div class="box bg-light-inverse">I would love to join the team.</div>
                                    <br>
                                </div>
                            </li>
                            <!--chat Row -->
                            <li class="odd chat-item">
                                <div class="chat-content">
                                    <div class="box bg-light-inverse">Whats budget of the new project.</div>
                                    <br>
                                </div>
                                <div class="chat-time">10:59 am</div>
                            </li>
                            <!--chat Row -->
                            <li class="chat-item">
                                <div class="chat-img"><img
                                        src="{{ asset('tailerStaticTemplate/assets/images/users/3.jpg') }}"
                                        alt="user">
                                </div>
                                <div class="chat-content">
                                    <h6 class="font-medium">Angelina Rhodes</h6>
                                    <div class="box bg-light-info">Well we have good budget for the project
                                    </div>
                                </div>
                                <div class="chat-time">11:00 am</div>
                            </li>
                            <!--chat Row -->
                        </ul>
                    </div>
                </div>
                <div class="card-body border-top">
                    <div class="row">
                        <div class="col-9">
                            <div class="input-field mt-0 mb-0">
                                <textarea id="textarea1" placeholder="Type and enter" class="form-control border-1"></textarea>
                            </div>
                        </div>
                        <div class="col-3">
                            <a class="btn-circle btn-lg btn-cyan float-end text-white" href="javascript:void(0)"><i
                                    class="fas fa-paper-plane"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div onclick="showChatBox()" class="chat__icon" id="chat__icn">
                <i class="fab fa-facebook-messenger"></i>
            </div>

        </div>
    @endsection
