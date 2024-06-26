@extends('.superAdmin.main')

@section('content')
    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">পোশাকের নাম ও মজুরি</h4>
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
                                পোশাকের নাম ও মজুরি যথাযথ ভাবে চেক করে সেইভ করুন । এই ডাটা ই সকল হিসাবে ব্যাবহার হবে
                                , ধন্যবাদ ।
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">

                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed accordion__heading" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                            aria-controls="collapseOne">
                            <span class=""><i class=" fas fa-search mr-2"></i></span>
                            <span class="ml-2">পোশাকের নাম ও মজুরি যুক্ত করুন</span>

                        </button>
                    </h2>

                    <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body accordion__body">
                            <div class="row">

                                <div class="col-md-3">
                                    <div class="form_input_group">
                                        <label for="order_number"
                                            class="form-label form_input_group_label_important">পোশাকের নাম
                                            (ইংরেজিতে) : <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" id="order_number" name="order_number">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form_input_group">
                                        <label for="order_number" class="form-label form_input_group_label_important">
                                            পোশাকের নাম
                                            (বাংলায়) :
                                            <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" id="order_number" name="order_number">
                                    </div>
                                </div>


                                <div class="col-md-2">
                                    <div class="form_input_group">
                                        <label for="order_number"
                                            class="form-label form_input_group_label_important">পোশাকের ধরন :
                                            <span style="color:red">*</span></label>

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
                                        <label for="order_number" class="form-label form_input_group_label_important">মজুরির
                                            পরিমান :
                                            <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" id="order_number" name="order_number">
                                    </div>
                                </div>



                                <div class="col-md-2 d-flex align-items-end">
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
                                    <th>পোশাকের নাম (ইংরেজিতে)</th>
                                    <th>পোশাকের নাম (বাংলায়) </th>
                                    <th>পোশাকের ধরন</th>
                                    <th>মজুরির পরিমান</th>
                                    <th>Display Serial</th>
                                    <th>Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td><select name="" id="" class="form-control">
                                            <option value="">All</option>
                                            <option value="">রানিং</option>
                                            <option value="">রেডি</option>
                                            <option value="">খালাস</option>
                                        </select></td>
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
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td><select name="" id="" class="form-control">
                                            <option value="">All</option>
                                            <option value="">রানিং</option>
                                            <option value="">রেডি</option>
                                            <option value="">খালাস</option>
                                        </select></td>
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
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td><select name="" id="" class="form-control">
                                            <option value="">All</option>
                                            <option value="">রানিং</option>
                                            <option value="">রেডি</option>
                                            <option value="">খালাস</option>
                                        </select></td>
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
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td><select name="" id="" class="form-control">
                                            <option value="">All</option>
                                            <option value="">রানিং</option>
                                            <option value="">রেডি</option>
                                            <option value="">খালাস</option>
                                        </select></td>
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
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    <td><select name="" id="" class="form-control">
                                            <option value="">All</option>
                                            <option value="">রানিং</option>
                                            <option value="">রেডি</option>
                                            <option value="">খালাস</option>
                                        </select></td>
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
                                    <td>New York</td>
                                    <td>61</td>
                                    <td>2012-12-02</td>
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
                                    <td>San Francisco</td>
                                    <td>59</td>
                                    <td>2012-08-06</td>
                                    <td>

                                        <div class="form-check form-switch">
                                            <input class="form-check-input" style="border-radius: 30px;" type="checkbox"
                                                id="flexSwitchCheckChecked" checked>
                                        </div>

                                    </td>

                                </tr>
                                <tr>
                                    <td>Rhona Davidson</td>
                                    <td>Integration Specialist</td>
                                    <td>Tokyo</td>
                                    <td>55</td>
                                    <td>2010-10-14</td>
                                    <td>

                                        <div class="form-check form-switch">
                                            <input class="form-check-input" style="border-radius: 30px;" type="checkbox"
                                                id="flexSwitchCheckChecked" checked>
                                        </div>

                                    </td>

                                </tr>
                                <tr>
                                    <td>Colleen Hurst</td>
                                    <td>Javascript Developer</td>
                                    <td>San Francisco</td>
                                    <td>39</td>
                                    <td>2009-09-15</td>
                                    <td>

                                        <div class="form-check form-switch">
                                            <input class="form-check-input" style="border-radius: 30px;" type="checkbox"
                                                id="flexSwitchCheckChecked" checked>
                                        </div>

                                    </td>

                                </tr>
                                <tr>
                                    <td>Sonya Frost</td>
                                    <td>Software Engineer</td>
                                    <td>Edinburgh</td>
                                    <td>23</td>
                                    <td>2008-12-13</td>
                                    <td>

                                        <div class="form-check form-switch">
                                            <input class="form-check-input" style="border-radius: 30px;" type="checkbox"
                                                id="flexSwitchCheckChecked" checked>
                                        </div>

                                    </td>

                                </tr>
                                <tr>
                                    <td>Jena Gaines</td>
                                    <td>Office Manager</td>
                                    <td>London</td>
                                    <td>30</td>
                                    <td>2008-12-19</td>
                                    <td>

                                        <div class="form-check form-switch">
                                            <input class="form-check-input" style="border-radius: 30px;" type="checkbox"
                                                id="flexSwitchCheckChecked" checked>
                                        </div>

                                    </td>

                                </tr>
                                <tr>
                                    <td>Quinn Flynn</td>
                                    <td>Support Lead</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2013-03-03</td>
                                    <td>$342,000</td>

                                </tr>
                                <tr>
                                    <td>Charde Marshall</td>
                                    <td>Regional Director</td>
                                    <td>San Francisco</td>
                                    <td>36</td>
                                    <td>2008-10-16</td>
                                    <td>$470,600</td>

                                </tr>
                                <tr>
                                    <td>Haley Kennedy</td>
                                    <td>Senior Marketing Designer</td>
                                    <td>London</td>
                                    <td>43</td>
                                    <td>2012-12-18</td>
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

            </div>




        </div>
    @endsection
