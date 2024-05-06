@extends('.superAdmin.main')

@section('content')
    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">কর্মচারীদের পদ ও পদবী</h4>
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

                <div class="accordion-item mt-3">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed accordion__heading" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                            aria-controls="collapseTwo">
                            <span class=""><i class=" fas fa-edit mr-2"></i></span>
                            <span class="ml-2">নতুন পদ ও পদবী তৈরি </span>

                        </button>
                    </h2>

                    <div id="collapseTwo" class="accordion-collapse collapse " aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body accordion__body">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form_input_group">
                                        <label for="order_number" class="form-label form_input_group_label_important">পদ ও
                                            পদবীর নাম (ইংরেজিতে) : <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" id="order_number" name="order_number">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form_input_group">
                                        <label for="order_number" class="form-label form_input_group_label_important">পদ ও
                                            পদবীর নাম (বাংলায়) : <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" id="order_number" name="order_number">
                                    </div>
                                </div>


                                <div class="col-12 d-flex justify-content-end mt-2">


                                    <button class="btn btn-primary btn-rounded" style="margin-left: 5px ;"><i
                                            class="fas fa-search pr-5"></i><span
                                            style="padding-left: 10px ;">Submit</span></button>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="mt-3">

                        <table id="example" class="display" style="width:100%">
                            <thead class="accordion__heading">
                                <tr>
                                    <th>পদ ও পদবীর নাম (ইংরেজিতে) :</th>
                                    <th>পদ ও পদবীর নাম (বাংলায়) :</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>


                                    <td>

                                        <div class="form-check form-switch">
                                            <input class="form-check-input" style="border-radius: 30px;" type="checkbox"
                                                id="flexSwitchCheckChecked" checked>
                                        </div>

                                    </td>

                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>



                                    <td>

                                        <div class="form-check form-switch">
                                            <input class="form-check-input" style="border-radius: 30px;" type="checkbox"
                                                id="flexSwitchCheckChecked" checked>
                                        </div>

                                    </td>

                                </tr>
                                <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>



                                    <td>

                                        <div class="form-check form-switch">
                                            <input class="form-check-input" style="border-radius: 30px;" type="checkbox"
                                                id="flexSwitchCheckChecked" checked>
                                        </div>

                                    </td>

                                </tr>
                                <tr>
                                    <td>Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>



                                    <td>

                                        <div class="form-check form-switch">
                                            <input class="form-check-input" style="border-radius: 30px;" type="checkbox"
                                                id="flexSwitchCheckChecked" checked>
                                        </div>

                                    </td>

                                </tr>
                                <tr>
                                    <td>Airi Satou</td>
                                    <td>Accountant</td>



                                    <td>

                                        <div class="form-check form-switch">
                                            <input class="form-check-input" style="border-radius: 30px;" type="checkbox"
                                                id="flexSwitchCheckChecked" checked>
                                        </div>

                                    </td>

                                </tr>
                                <tr>
                                    <td>Brielle Williamson</td>
                                    <td>Integration Specialist</td>


                                    <td>

                                        <div class="form-check form-switch">
                                            <input class="form-check-input" style="border-radius: 30px;" type="checkbox"
                                                id="flexSwitchCheckChecked" checked>
                                        </div>

                                    </td>

                                </tr>
                                <tr>
                                    <td>Herrod Chandler</td>
                                    <td>Sales Assistant</td>


                                    <td>

                                        <div class="form-check form-switch">
                                            <input class="form-check-input" style="border-radius: 30px;" type="checkbox"
                                                id="flexSwitchCheckChecked" checked>
                                        </div>

                                    </td>

                                </tr>

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
