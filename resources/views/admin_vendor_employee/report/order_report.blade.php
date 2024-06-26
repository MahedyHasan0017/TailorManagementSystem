@extends('.superAdmin.main')

@section('content')
    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">ওয়ার্ডার রিপোর্ট</h4>
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

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card p-2">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed accordion__heading" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        <span class=""><i class=" fas fa-search mr-2"></i></span>
                                        <span class="ml-2">ওয়ার্ডার সার্চ</span>

                                    </button>
                                </h2>

                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body accordion__body ">
                                        <div class="row">
                                            <div class="col-md-6">


                                                <div class="form_input_group">
                                                    <label for="order_number"
                                                        class="form-label form_input_group_label_important">যোগদানের
                                                        তারিখ : <span style="color:red">*</span></label>

                                                    <input id="datepicker1" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">


                                                <div class="form_input_group">
                                                    <label for="order_number"
                                                        class="form-label form_input_group_label_important">শেষের
                                                        তারিখ : <span style="color:red">*</span></label>

                                                    <input id="datepicker2" class="form-control" />
                                                </div>
                                            </div>



                                            <div class="row mt-3">
                                                <div class="d-flex justify-content-end">

                                                    <button class="btn btn-info btn-rounded"
                                                        style="margin-left: 5px ;"><span style="padding-right: 10px ;"> <i
                                                                class="fas fa-cancle pr-5"></i> Cancle</span> </button>

                                                    <button class="btn btn-primary btn-rounded"
                                                        style="margin-left: 5px ;"><span
                                                            style="padding-right: 10px ;">Submit</span> <i
                                                            class="fas fa-arrow-right pr-5"></i></button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6" style="height: 100%;">
                            <div class="card p-2">
                                <div class="">
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

                                    <div class="alert alert-primary d-flex align-items-center" role="alert"
                                        style="padding: 5px ;">
                                        <svg class="bi flex-shrink-0 me-2" width="14" height="14" role="img"
                                            aria-label="Info:">
                                            <use xlink:href="#info-fill" />
                                        </svg>
                                        <div>
                                            অর্ডার সার্চ প্যানেল ব্যাবহার করে আপনার প্রয়োজন অনুসারে রিপোর্ট তৈরি
                                            করুন
                                        </div>
                                    </div>

                                    <div>
                                        শুরুর তারিখ ও শেষ তারিখ সিলেক্ট করে সার্চ বাটন ক্লিক করুন ।
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
