@extends('.superAdmin.main')

@section('content')
    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">হিসাব পরিচালনা</h4>
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
                            <span class="ml-2">আয় ব্যয়ের ডাটা সংরক্ষণ </span>

                        </button>
                    </h2>

                    <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body accordion__body">
                            <div class="row">


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
                                        <label for="order_number" class="form-label form_input_group_label_important">প্রধান
                                            খাত :
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

                                <div class="col-md-2">
                                    <div class="form_input_group">
                                        <label for="order_number" class="form-label form_input_group_label_important">উপ-খাত
                                            :
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

                                <div class="col-md-2">
                                    <div class="form_input_group">
                                        <label for="order_number" class="form-label form_input_group_label_important">টাইপ :
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




                                <div class="col-md-2">
                                    <div class="form_input_group">
                                        <label for="order_number" class="form-label form_input_group_label_important"> টাকার
                                            পরিমান :
                                            <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" id="order_number" name="order_number">
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form_input_group">
                                        <label for="order_number" class="form-label form_input_group_label_important">
                                            সংক্ষিপ্ত বিবরণ :
                                            <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" id="order_number"
                                            name="order_number">
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


                <div class="accordion-item my-3">

                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed accordion__heading" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                            aria-controls="collapseTwo">
                            <span class=""><i class=" fas fa-search mr-2"></i></span>
                            <span class="ml-2">আয় ব্যয়ের ডাটা সার্চ</span>

                        </button>
                    </h2>

                    <div id="collapseTwo" class="accordion-collapse collapse " aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body accordion__body">
                            <div class="row">


                                <div class="col-md-2">
                                    <div class="form_input_group">
                                        <label for="order_number"
                                            class="form-label form_input_group_label_important">শুরুর তারিখ : <span
                                                style="color:red">*</span></label>
                                        <!-- <input type="text" class="form-control" id="order_number"
                                            name="order_number"> -->
                                        <input id="datepicker1" class="form-control" />
                                    </div>
                                </div>


                                <div class="col-md-2">
                                    <div class="form_input_group">
                                        <label for="order_number"
                                            class="form-label form_input_group_label_important">শেষের তারিখ : <span
                                                style="color:red">*</span></label>
                                        <!-- <input type="text" class="form-control" id="order_number"
                                            name="order_number"> -->
                                        <input id="datepicker1" class="form-control" />
                                    </div>
                                </div>


                                <div class="col-md-2">
                                    <div class="form_input_group">
                                        <label for="order_number"
                                            class="form-label form_input_group_label_important">প্রধান খাত :
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

                                <div class="col-md-2">
                                    <div class="form_input_group">
                                        <label for="order_number"
                                            class="form-label form_input_group_label_important">উপ-খাত :
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

                                <div class="col-md-2">
                                    <div class="form_input_group">
                                        <label for="order_number" class="form-label form_input_group_label_important">টাইপ
                                            :
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
                                <div class="col-md-2 d-flex justify-content-start align-items-end">
                                    <div class="">

                                        <button class="btn btn-primary btn-rounded" style="margin-left: 5px ;"><i
                                                class="fas fa-search pr-5"></i><span
                                                style="padding-left: 10px ;">Search</span></button>
                                    </div>
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
                                    <th>তারিখ</th>
                                    <th>প্রধান খাত</th>
                                    <th>উপ-খাত</th>
                                    <th>টাইপ</th>
                                    <th>সংক্ষিপ্ত বিবরণ</th>
                                    <th>টাকার পরিমান</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011-04-25</td>
                                    <td>$320,800</td>
                                    <td>$313,500</td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>2011-07-25</td>
                                    <td>$170,750</td>
                                    <td>$313,500</td>
                                </tr>
                                <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td>2009-01-12</td>
                                    <td>$86,000</td>
                                    <td>$313,500</td>
                                </tr>
                                <tr>
                                    <td>Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2012-03-29</td>
                                    <td>$433,060</td>
                                    <td>$313,500</td>
                                </tr>
                                <tr>
                                    <td>Airi Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    <td>2008-11-28</td>
                                    <td>$162,700</td>
                                    <td>$313,500</td>
                                </tr>
                                <tr>
                                    <td>Brielle Williamson</td>
                                    <td>Integration Specialist</td>
                                    <td>New York</td>
                                    <td>61</td>
                                    <td>2012-12-02</td>
                                    <td>$372,000</td>
                                    <td>$313,500</td>
                                </tr>
                                <tr>
                                    <td>Herrod Chandler</td>
                                    <td>Sales Assistant</td>
                                    <td>San Francisco</td>
                                    <td>59</td>
                                    <td>2012-08-06</td>
                                    <td>$137,500</td>
                                    <td>$313,500</td>
                                </tr>
                                <tr>
                                    <td>Rhona Davidson</td>
                                    <td>Integration Specialist</td>
                                    <td>Tokyo</td>
                                    <td>55</td>
                                    <td>2010-10-14</td>
                                    <td>$327,900</td>
                                    <td>$313,500</td>
                                </tr>
                                <tr>
                                    <td>Colleen Hurst</td>
                                    <td>Javascript Developer</td>
                                    <td>San Francisco</td>
                                    <td>39</td>
                                    <td>2009-09-15</td>
                                    <td>$205,500</td>
                                    <td>$313,500</td>
                                </tr>
                                <tr>
                                    <td>Sonya Frost</td>
                                    <td>Software Engineer</td>
                                    <td>Edinburgh</td>
                                    <td>23</td>
                                    <td>2008-12-13</td>
                                    <td>$103,600</td>
                                    <td>$313,500</td>
                                </tr>
                                <tr>
                                    <td>Jena Gaines</td>
                                    <td>Office Manager</td>
                                    <td>London</td>
                                    <td>30</td>
                                    <td>2008-12-19</td>
                                    <td>$90,560</td>
                                    <td>$313,500</td>
                                </tr>
                                <tr>
                                    <td>Quinn Flynn</td>
                                    <td>Support Lead</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2013-03-03</td>
                                    <td>$342,000</td>
                                    <td>$313,500</td>
                                </tr>
                                <tr>
                                    <td>Charde Marshall</td>
                                    <td>Regional Director</td>
                                    <td>San Francisco</td>
                                    <td>36</td>
                                    <td>2008-10-16</td>
                                    <td>$470,600</td>
                                    <td>$313,500</td>
                                </tr>
                                <tr>
                                    <td>Haley Kennedy</td>
                                    <td>Senior Marketing Designer</td>
                                    <td>London</td>
                                    <td>43</td>
                                    <td>2012-12-18</td>
                                    <td>$313,500</td>
                                    <td>$313,500</td>
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

                <div class="row">
                    <div class="col-md-4 ms-auto mt-3 ">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="accordion__heading">
                                    <tr>
                                        <th scope="col">Summary</th>
                                        <th scope="col">Total Cr</th>
                                        <th scope="col">Total Dr</th>
                                        <th scope="col">Balance</th>
                                    </tr>
                                </thead>
                                <tbody class="table_body">
                                    <tr>
                                        <td>This Page</td>
                                        <td>101010</td>
                                        <td>101010</td>
                                        <td>@101010</td>
                                    </tr>
                                    <tr>
                                        <td>Search Data</td>
                                        <td>101010</td>
                                        <td>101010</td>
                                        <td>@101010</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    @endsection
