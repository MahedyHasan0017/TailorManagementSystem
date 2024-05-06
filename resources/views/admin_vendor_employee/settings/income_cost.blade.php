@extends('.superAdmin.main')

@section('content')
    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">আয় ব্যয়ের খাত </h4>
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
                            <span class=""><i class=" fas fa-edit mr-2"></i></span>
                            <span class="ml-2">
                                প্রধান খাত তৈরি করুন
                            </span>

                        </button>
                    </h2>

                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body accordion__body">
                            <div class="container card p-3">
                                <div class="row">



                                    <div class="col-md-6">
                                        <div class="form_input_group">
                                            <label for="order_number"
                                                class="form-label form_input_group_label_important">প্রধান খাত :
                                                <span style="color:red">*</span></label>
                                            <input type="text" class="form-control" id="order_number"
                                                name="order_number">
                                        </div>
                                    </div>




                                    <div class="col-md-2 d-flex align-items-end">
                                        <button class="btn btn-primary btn-rounded" style="margin-left: 5px ;"><span
                                                style="padding-right: 10px ;">Submit</span>
                                            <i class="fas fa-arrow-right pr-5"></i>
                                        </button>
                                    </div>

                                </div>


                                <div class="row mt-3">
                                    <table id="example_1" class="display" style="width:100%">
                                        <thead class="accordion__heading">
                                            <tr>
                                                <th>#</th>
                                                <th>প্রধান খাত</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>Edinburgh</td>
                                                <td>

                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" style="border-radius: 30px;"
                                                            type="checkbox" id="flexSwitchCheckChecked" checked>
                                                    </div>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>Edinburgh</td>
                                                <td>

                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" style="border-radius: 30px;"
                                                            type="checkbox" id="flexSwitchCheckChecked" checked>
                                                    </div>

                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
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
                            <span class=""><i class=" fas fa-search mr-2"></i></span>
                            <span class="ml-2">উপ-খাত তৈরি করুন</span>

                        </button>
                    </h2>

                    <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body accordion__body">
                            <div class="container card p-3">
                                <div class="row">



                                    <div class="col-md-6">
                                        <div class="form_input_group">
                                            <label for="order_number"
                                                class="form-label form_input_group_label_important">প্রধান খাত :
                                                <span style="color:red">*</span></label>
                                            <input type="text" class="form-control" id="order_number"
                                                name="order_number">
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form_input_group">
                                            <label for="order_number" class="form-label form_input_group_label_important">উপ
                                                খাত :
                                                <span style="color:red">*</span></label>
                                            <input type="text" class="form-control" id="order_number"
                                                name="order_number">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-12 d-flex justify-content-end">
                                        <button class="btn btn-primary btn-rounded" style="margin-left: 5px ;"><span
                                                style="padding-right: 10px ;">Submit</span>
                                            <i class="fas fa-arrow-right pr-5"></i>
                                        </button>
                                    </div>
                                </div>


                                <div class="row mt-3">
                                    <table id="example_2" class="display" style="width:100%">
                                        <thead class="accordion__heading">
                                            <tr>
                                                <th>#</th>
                                                <th>প্রধান খাত</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>Edinburgh</td>
                                                <td>

                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" style="border-radius: 30px;"
                                                            type="checkbox" id="flexSwitchCheckChecked" checked>
                                                    </div>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>Edinburgh</td>
                                                <td>

                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" style="border-radius: 30px;"
                                                            type="checkbox" id="flexSwitchCheckChecked" checked>
                                                    </div>

                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <footer class="footer text-center">
                    All Rights Reserved by Matrix-admin. Designed and Developed by <a
                        href="https://www.wrappixel.com">WrapPixel</a>.
                </footer>

            </div>




        </div>
    @endsection
