@extends('.superAdmin.main')

@section('content')
    <div class="page-wrapper">

        <div class="page-breadcrumb">
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
        </div>

        <div class="container-fluid">


            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header " id="headingOne">
                        <button class="accordion-button accordion__heading" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            গ্রাহকের তথ্য
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body accordion__body">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form_input_group">
                                        <label for="order_number" class="form-label form_input_group_label_important">অর্ডার
                                            নং : <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" id="order_number" name="order_number">
                                    </div>

                                    <div class="form_input_group">
                                        <label for="name" class="form-label form_input_group_label_important"> নাম :
                                            <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>

                                    <div class="form_input_group">
                                        <label for="mobile_number" class="form-label form_input_group_label_important">
                                            মোবাইল নং : <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" id="mobile_number" name="mobile_number">
                                    </div>

                                    <div class="form_input_group">
                                        <label for="email" class="form-label form_input_group_label_important">
                                            ইমেইল:
                                            <input type="email" class="form-control" id="order_number"
                                                name="order_number">
                                    </div>

                                    <div class="form_input_group">
                                        <label for="contact_address" class="form-label form_input_group_label_important">
                                            যোগাযোগ এর ঠিকানা :
                                            <textarea class="form-control" name="" id="" cols="30" rows="5" id="contact_address"></textarea>
                                    </div>

                                </div>


                                <div class="col-md-6">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="custom_table_heading">
                                                <tr>
                                                    <th scope="col">পোশাকের নাম</th>
                                                    <th scope="col">সংখ্যা </th>
                                                    <th scope="col">মূল্য</th>
                                                    <th scope="col">মোট মূল্য</th>
                                                </tr>
                                            </thead>
                                            <tbody class="custom_table_body ">
                                                <tr>
                                                    <td scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                ফতুয়া
                                                            </label>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="">
                                                            <input type="number" class="form-control"
                                                                id="exampleInputPassword1">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="">
                                                            <input type="text" class="form-control"
                                                                id="exampleInputPassword1">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="">
                                                            <input type="text" class="form-control"
                                                                id="exampleInputPassword1">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                এরাবিয়ান
                                                            </label>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="">
                                                            <input type="number" class="form-control"
                                                                id="exampleInputPassword1">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="">
                                                            <input type="text" class="form-control"
                                                                id="exampleInputPassword1">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="">
                                                            <input type="text" class="form-control"
                                                                id="exampleInputPassword1">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                প্রিস কোর্ট

                                                            </label>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="">
                                                            <input type="number" class="form-control"
                                                                id="exampleInputPassword1">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="">
                                                            <input type="text" class="form-control"
                                                                id="exampleInputPassword1">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="">
                                                            <input type="text" class="form-control"
                                                                id="exampleInputPassword1">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                কলিদার পাঞ্জাবী
                                                            </label>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="">
                                                            <input type="number" class="form-control"
                                                                id="exampleInputPassword1">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="">
                                                            <input type="text" class="form-control"
                                                                id="exampleInputPassword1">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="">
                                                            <input type="text" class="form-control"
                                                                id="exampleInputPassword1">
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                একছাটা জুব্বা
                                                            </label>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="">
                                                            <input type="number" class="form-control"
                                                                id="exampleInputPassword1">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="">
                                                            <input type="text" class="form-control"
                                                                id="exampleInputPassword1">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="">
                                                            <input type="text" class="form-control"
                                                                id="exampleInputPassword1">
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                একছাটা পাঞ্জাবী
                                                            </label>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="">
                                                            <input type="number" class="form-control"
                                                                id="exampleInputPassword1">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="">
                                                            <input type="text" class="form-control"
                                                                id="exampleInputPassword1">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="">
                                                            <input type="text" class="form-control"
                                                                id="exampleInputPassword1">
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                শার্ট
                                                            </label>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="">
                                                            <input type="number" class="form-control"
                                                                id="exampleInputPassword1">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="">
                                                            <input type="text" class="form-control"
                                                                id="exampleInputPassword1">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="">
                                                            <input type="text" class="form-control"
                                                                id="exampleInputPassword1">
                                                        </div>
                                                    </td>
                                                </tr>

                                            </tbody>
                                            <tfoot class="custom_table_footer">

                                                <th scope="row">@twitter</th>
                                                <td></td>
                                                <td>cell-3</td>
                                                <td scope="col">cell 2</td>
                                            </tfoot>
                                        </table>
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
                            পোশাকের যাবতীয় তথ্য
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body accordion__body">
                            <div class="row">
                                <div class="accordion" id="sub-accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="sub-headingOne">
                                            <button class="accordion-button accordion__heading" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#sub-collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                                পাঞ্জাবী / শার্ট প্রভৃতির মাপ
                                            </button>
                                        </h2>
                                        <div id="sub-collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="sub-headingOne" data-bs-parent="#sub-accordionExample">
                                            <div class="accordion-body accordion__body">
                                                <div class="card p-2 mb-0">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="form_input_group">
                                                                <label for="order_number"
                                                                    class="form-label form_input_group_label_important">
                                                                    লম্বা : <span style="color:red">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    id="order_number" name="order_number">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form_input_group">
                                                                <label for="order_number"
                                                                    class="form-label form_input_group_label_important">
                                                                    বডি : <span style="color:red">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    id="order_number" name="order_number">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form_input_group">
                                                                <label for="order_number"
                                                                    class="form-label form_input_group_label_important">বডি
                                                                    লুজ : <span style="color:red">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    id="order_number" name="order_number">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form_input_group">
                                                                <label for="order_number"
                                                                    class="form-label form_input_group_label_important">
                                                                    পেট : <span style="color:red">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    id="order_number" name="order_number">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form_input_group">
                                                                <label for="order_number"
                                                                    class="form-label form_input_group_label_important">
                                                                    পুট : <span style="color:red">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    id="order_number" name="order_number">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form_input_group">
                                                                <label for="order_number"
                                                                    class="form-label form_input_group_label_important">
                                                                    হাতার লম্বা : <span style="color:red">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    id="order_number" name="order_number">
                                                            </div>
                                                        </div>


                                                        <div class="col-md-2">
                                                            <div class="form_input_group">
                                                                <label for="order_number"
                                                                    class="form-label form_input_group_label_important">
                                                                    হাতার মুখ : <span style="color:red">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    id="order_number" name="order_number">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form_input_group">
                                                                <label for="order_number"
                                                                    class="form-label form_input_group_label_important">
                                                                    কাফ : <span style="color:red">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    id="order_number" name="order_number">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form_input_group">
                                                                <label for="order_number"
                                                                    class="form-label form_input_group_label_important">
                                                                    গলা : <span style="color:red">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    id="order_number" name="order_number">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form_input_group">
                                                                <label for="order_number"
                                                                    class="form-label form_input_group_label_important">
                                                                    প্লেট ফাড়া : <span style="color:red">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    id="order_number" name="order_number">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form_input_group">
                                                                <label for="order_number"
                                                                    class="form-label form_input_group_label_important">
                                                                    কলার চউরা : <span style="color:red">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    id="order_number" name="order_number">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form_input_group">
                                                                <label for="order_number"
                                                                    class="form-label form_input_group_label_important">
                                                                    প্লেট চউরা : <span style="color:red">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    id="order_number" name="order_number">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form_input_group">
                                                                <label for="order_number"
                                                                    class="form-label form_input_group_label_important">
                                                                    ঘের : <span style="color:red">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    id="order_number" name="order_number">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form_input_group">
                                                                <label for="order_number"
                                                                    class="form-label form_input_group_label_important">
                                                                    হিফ : <span style="color:red">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    id="order_number" name="order_number">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form_input_group">
                                                                <label for="order_number"
                                                                    class="form-label form_input_group_label_important">
                                                                    নিচ হাতা : <span style="color:red">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    id="order_number" name="order_number">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form_input_group">
                                                                <label for="order_number"
                                                                    class="form-label form_input_group_label_important">
                                                                    মাদানি ফাড়া :
                                                                    <span style="color:red">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    id="order_number" name="order_number">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form_input_group">
                                                                <label for="order_number"
                                                                    class="form-label form_input_group_label_important">
                                                                    মোট মোড়া :
                                                                    <span style="color:red">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    id="order_number" name="order_number">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form_input_group">
                                                                <label for="order_number"
                                                                    class="form-label form_input_group_label_important">
                                                                    হাতে পেস্টিং :
                                                                    <span style="color:red">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    id="order_number" name="order_number">
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>


                                                <div>
                                                    <div class="accordion__heading mt-5">
                                                        পকেট
                                                    </div>
                                                    <div class="card p-2 mb-0 ">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        বুকে ১টি পকেট
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        বুকে ২টি পকেট
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        ১ পকেটে চেইন
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        ২ পকেটে চেইন
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        পকেট ঢাকা
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        পকেট ঢাকনা
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        কাধে সোলডার
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        হাতে ফিতা
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        বন পকেট
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        রানার
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        বগল পকেট
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/1.jpg') }}"
                                                                            style="height: 50px ; width:55px;"
                                                                            alt="images">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/2.jpg') }}"
                                                                        style="height: 50px ; width:55px;"
                                                                            alt="images">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/3.jpg') }}"
                                                                            style="height: 50px ; width:55px;"
                                                                            alt="images">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/4.jpg') }}"
                                                                        style="height: 50px ; width:55px;"
                                                                            alt="images">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/5.jpg') }}"
                                                                        style="height: 50px ; width:55px;"
                                                                            alt="images">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/6.jpg') }}"
                                                                            style="height: 50px ; width:55px;"
                                                                            alt="images">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/7.jpg') }}"
                                                                            style="height: 50px ; width:55px;"
                                                                            alt="images">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/8.jpg') }}"
                                                                            style="height: 50px ; width:55px;"
                                                                            alt="images">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/9.jpg') }}"
                                                                            style="height: 50px ; width:55px;"
                                                                            alt="images">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/10.jpg') }}"
                                                                            style="height: 50px ; width:55px;"
                                                                            alt="images">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/11.jpg') }}"
                                                                            style="height: 50px ; width:55px;"
                                                                            alt="images">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/12.jpg') }}"
                                                                            style="height: 50px ; width:55px;"
                                                                            alt="images">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/13.jpg') }}"
                                                                            style="height: 50px ; width:55px;"
                                                                            alt="images">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/14.jpg') }}"
                                                                            style="height: 50px ; width:50px; margin-left:3px ; "
                                                                            alt="images">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/15.jpg') }}"
                                                                            style="height: 50px ; width:50px; margin-left:3px ; "
                                                                            alt="images">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/16.jpg') }}"
                                                                            style="height: 50px ; width:50px; margin-left:4px ; "
                                                                            alt="images">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/17.jpg') }}"
                                                                            style="height: 50px ; width:50px; margin-left:3px ; "
                                                                            alt="images">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/18.jpg') }}"
                                                                            style="height: 50px ; width:50px; margin-left:3px ; "
                                                                            alt="images">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/19.jpg') }}"
                                                                            style="height: 50px ; width:50px; margin-left:3px ; "
                                                                            alt="images">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/20.jpg') }}"
                                                                            style="height: 50px ; width:50px; margin-left:3px ; "
                                                                            alt="images">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                                </div>



                                                <div>
                                                    <div class="accordion__heading mt-5">
                                                        কলার
                                                    </div>
                                                    <div class="card p-2 mb-0 ">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        রাউন্ড
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        শেরওয়ানি
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        সিঙ্গেল
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        ডাবল
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        ব্যান্ড
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        স্কয়ার
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        সাইট হেম
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div>
                                                            <div class="accordion__heading mt-5">
                                                                গলা
                                                            </div>
                                                            <div class="card p-2 mb-0 ">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckDefault">
                                                                            <label class="form-check-label"
                                                                                for="flexCheckDefault">
                                                                                শার্ট কলার
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckDefault">
                                                                            <label class="form-check-label"
                                                                                for="flexCheckDefault">
                                                                                কফ
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckDefault">
                                                                            <label class="form-check-label"
                                                                                for="flexCheckDefault">
                                                                                সিঙ্গেল
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckDefault">
                                                                            <label class="form-check-label"
                                                                                for="flexCheckDefault">
                                                                                বোগল
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckDefault">
                                                                            <label class="form-check-label"
                                                                                for="flexCheckDefault">
                                                                                গোল গলা
                                                                            </label>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div>
                                                            <div class="accordion__heading mt-5">
                                                                পাইপিন
                                                            </div>
                                                            <div class="card p-2 mb-0 ">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckDefault">
                                                                            <label class="form-check-label"
                                                                                for="flexCheckDefault">
                                                                                কলার
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckDefault">
                                                                            <label class="form-check-label"
                                                                                for="flexCheckDefault">
                                                                                প্লেট
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckDefault">
                                                                            <label class="form-check-label"
                                                                                for="flexCheckDefault">
                                                                                হাতা
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckDefault">
                                                                            <label class="form-check-label"
                                                                                for="flexCheckDefault">
                                                                                প্লেটের এক সাইড
                                                                            </label>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div>
                                                            <div class="accordion__heading mt-5">
                                                                প্লেট
                                                            </div>
                                                            <div class="card p-2 mb-0 ">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckDefault">
                                                                            <label class="form-check-label"
                                                                                for="flexCheckDefault">

                                                                                <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/plate_img/1.png') }}"
                                                                                    style="height: 28px ; width:43px;"
                                                                                    alt="images">
                                                                            </label>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckDefault">
                                                                            <label class="form-check-label"
                                                                                for="flexCheckDefault">
                                                                                <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/plate_img/2.png') }}"
                                                                                    style="height: 28px ; width:43px;"
                                                                                    alt="images">
                                                                            </label>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckDefault">
                                                                            <label class="form-check-label"
                                                                                for="flexCheckDefault">
                                                                                <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/plate_img/3.png') }}"
                                                                                    style="height: 28px ; width:43px;"
                                                                                    alt="images">
                                                                            </label>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckDefault">
                                                                            <label class="form-check-label"
                                                                                for="flexCheckDefault">
                                                                                <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/plate_img/4.png') }}"
                                                                                    style="height: 28px ; width:43px;"
                                                                                    alt="images">
                                                                            </label>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckDefault">
                                                                            <label class="form-check-label"
                                                                                for="flexCheckDefault">
                                                                                ডাবল
                                                                            </label>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div>
                                                            <div class="accordion__heading mt-5">
                                                                কাফ
                                                            </div>
                                                            <div class="card p-2 mb-0 ">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckDefault">
                                                                            <label class="form-check-label"
                                                                                for="flexCheckDefault">
                                                                                <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/kaf_img/1.png') }}"
                                                                                    style="height: 28px ; width:43px;"
                                                                                    alt="images">
                                                                            </label>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckDefault">
                                                                            <label class="form-check-label"
                                                                                for="flexCheckDefault">
                                                                                <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/kaf_img/2.png') }}"
                                                                                    style="height: 28px ; width:43px;"
                                                                                    alt="images">
                                                                            </label>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckDefault">
                                                                            <label class="form-check-label"
                                                                                for="flexCheckDefault">
                                                                                <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/kaf_img/3.png') }}"
                                                                                    style="height: 28px ; width:43px;"
                                                                                    alt="images">
                                                                            </label>
                                                                        </div>
                                                                    </div>


                                                                    <div class="col-md-4">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckDefault">
                                                                            <label class="form-check-label"
                                                                                for="flexCheckDefault">
                                                                                সিঙ্গেল কাফ
                                                                            </label>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckDefault">
                                                                            <label class="form-check-label"
                                                                                for="flexCheckDefault">
                                                                                ডাবল কাফ লিং
                                                                            </label>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div>
                                                    <div class="accordion__heading mt-5">
                                                        পেস্টিং
                                                    </div>
                                                    <div class="card p-2 mb-0 ">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        সিঙ্গেল
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        ডাবল
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        হাতে পেস্টিং
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        বোতাম প্লেটে
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div>
                                                            <div class="accordion__heading mt-5">
                                                                লেইস
                                                            </div>
                                                            <div class="card p-2 mb-0 ">
                                                                <div class="row">

                                                                    <div class="col-md-4">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckDefault">
                                                                            <label class="form-check-label"
                                                                                for="flexCheckDefault">
                                                                                কলার
                                                                            </label>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckDefault">
                                                                            <label class="form-check-label"
                                                                                for="flexCheckDefault">
                                                                                প্লেট
                                                                            </label>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckDefault">
                                                                            <label class="form-check-label"
                                                                                for="flexCheckDefault">
                                                                                হাতা
                                                                            </label>
                                                                        </div>
                                                                    </div>


                                                                    <div class="col-md-4">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckDefault">
                                                                            <label class="form-check-label"
                                                                                for="flexCheckDefault">
                                                                                বুক
                                                                            </label>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div>
                                                            <div class="accordion__heading mt-5">
                                                                তিরা
                                                            </div>
                                                            <div class="card p-2 mb-0 ">
                                                                <div class="row">


                                                                    <div class="col-md-4">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckDefault">
                                                                            <label class="form-check-label"
                                                                                for="flexCheckDefault">
                                                                                তিরা
                                                                            </label>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckDefault">
                                                                            <label class="form-check-label"
                                                                                for="flexCheckDefault">
                                                                                মোড়া ডাবল চাপ সেলাই
                                                                            </label>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckDefault">
                                                                            <label class="form-check-label"
                                                                                for="flexCheckDefault">
                                                                                নিচে রাউন্ড
                                                                            </label>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckDefault">
                                                                            <label class="form-check-label"
                                                                                for="flexCheckDefault">
                                                                                ভি-তিরা
                                                                            </label>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div>
                                                    <div class="accordion__heading mt-5">
                                                        ফুল
                                                    </div>
                                                    <div class="card p-2 mb-0 ">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        সামনা
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        কালার
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        প্লেট
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        কপ
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        গলা
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        মোড়া
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        কান্দি
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        দুই পকেট
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        বুক পকেট
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        হাতের মুহুরি
                                                                    </label>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="accordion__heading mt-5">
                                                        বোতাম
                                                    </div>
                                                    <div class="card p-2 mb-0 ">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        চেইন বোতাম
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        কাস্টমারের দেয়া বোতাম
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        কাঠ বোতাম
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        মেটাল বোতাম(বড়)
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        নরমাল বোতাম
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        ডিজাইন বোতাম
                                                                    </label>
                                                                </div>
                                                            </div>


                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        মেটাল বোতাম(ছোট)
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        স্নাপ বোতাম
                                                                    </label>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mt-2">
                                        <h2 class="accordion-header" id="sub-headingTwo">
                                            <button class="accordion-button accordion__heading" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#sub-collapseTwo"
                                                aria-expanded="true" aria-controls="collapseTwo">
                                                পাজামা / প্যান্ট প্রভৃতির মাপ
                                            </button>
                                        </h2>
                                        <div id="sub-collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="sub-collapseTwo" data-bs-parent="#sub-accordionExample">

                                            <div class="accordion-body accordion__body">
                                                <div class="card p-2 mb-0">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="form_input_group">
                                                                <label for="order_number"
                                                                    class="form-label form_input_group_label_important">
                                                                    লম্বা : <span style="color:red">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    id="order_number" name="order_number">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form_input_group">
                                                                <label for="order_number"
                                                                    class="form-label form_input_group_label_important">
                                                                    পায়ের মুখ : <span style="color:red">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    id="order_number" name="order_number">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form_input_group">
                                                                <label for="order_number"
                                                                    class="form-label form_input_group_label_important">বডি
                                                                    হাই : <span style="color:red">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    id="order_number" name="order_number">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form_input_group">
                                                                <label for="order_number"
                                                                    class="form-label form_input_group_label_important">
                                                                    ঘের/থাই লুজ : <span style="color:red">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    id="order_number" name="order_number">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form_input_group">
                                                                <label for="order_number"
                                                                    class="form-label form_input_group_label_important">
                                                                    কোমর : <span style="color:red">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    id="order_number" name="order_number">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form_input_group">
                                                                <label for="order_number"
                                                                    class="form-label form_input_group_label_important">
                                                                    বেল্ট টাইপ : <span style="color:red">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    id="order_number" name="order_number">
                                                            </div>
                                                        </div>


                                                        <div class="col-md-2">
                                                            <div class="form_input_group">
                                                                <label for="order_number"
                                                                    class="form-label form_input_group_label_important">
                                                                    হিফ : <span style="color:red">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    id="order_number" name="order_number">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="card p-2 mb-0 mt-2">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    ১ পকেটে চেইন
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    ২ পকেট চেইন
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    মোবাইল পকেট ১টি
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    পেছনে ১টি পকেট
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    পেছনে ২টি পকেট
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    ১ টিকেন
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    ২ টিকেন
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    টিকেন ছাড়া
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    জিন্স প্যান্ট : গোল্ডেন সূতা
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    জিন্স প্যান্ট : সেইম সূতা
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    সামনে চেইন
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    মোবাইল পকেট ২টি
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/19.jpg') }}"
                                                                        style="height: 50px ; width:55px;"
                                                                        alt="images">
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/20.jpg') }}"
                                                                        style="height: 50px ; width:55px;"
                                                                        alt="images">
                                                             </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/21.jpg') }}"
                                                                        style="height: 50px ; width:55px;"
                                                                        alt="images">
                                                                </label>
                                                            </div>
                                                        </div>

                                                        

                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/22.jpg') }}"
                                                                        style="height: 50px ; width:55px;"
                                                                        alt="images">
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/23.jpg') }}"
                                                                        style="height: 50px ; width:55px;"
                                                                        alt="images">
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/24.jpg') }}"
                                                                        style="height: 50px ; width:55px;"
                                                                        alt="images">
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/25.jpg') }}"
                                                                        style="height: 50px ; width:42px; margin-left:7px"
                                                                        alt="images">
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/26.jpg') }}"
                                                                        style="height: 50px ; width:55px;"
                                                                        alt="images">
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/27.jpg') }}"
                                                                        style="height: 50px ; width:46px; margin-left : 4px"
                                                                        alt="images">
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/28.jpg') }}"
                                                                        style="height: 50px ; width:55px;"
                                                                        alt="images">
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/30.jpg') }}"
                                                                        style="height: 50px ; width:50px; margin-left : 3px "
                                                                        alt="images">
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/31.jpg') }}"
                                                                        style="height: 50px ; width:52px; margin-left : 2px;"
                                                                        alt="images">
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/32.jpg') }}"
                                                                        style="height: 50px ; width:50px; margin-left : 3px "
                                                                        alt="images">
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/33.jpg') }}"
                                                                        style="height: 50px ; width:50px; margin-left : 3px"
                                                                        alt="images">
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/34.jpg') }}"
                                                                        style="height: 50px ; width:55px;"
                                                                        alt="images">
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/35.jpg') }}"
                                                                        style="height: 50px ; width:50px; margin-left : 3px; "
                                                                        alt="images">
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/36.jpg') }}"
                                                                        style="height: 50px ; width:55px;"
                                                                        alt="images">
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/37.jpg') }}"
                                                                        style="height: 50px ; width:55px;"
                                                                        alt="images">
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/38.jpg') }}"
                                                                        style="height: 50px ; width:55px;"
                                                                        alt="images">
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/39.jpg') }}"
                                                                        style="height: 50px ; width:55px;"
                                                                        alt="images">
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/40.jpg') }}"
                                                                        style="height: 50px ; width:55px;"
                                                                        alt="images">
                                                                </label>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="accordion-item mt-3">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed accordion__heading" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                                aria-controls="collapseFive">
                                ডেলিভারি তথ্য
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body accordion__body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form_input_group">
                                                    <label for="order_number"
                                                        class="form-label form_input_group_label_important">মজুরির
                                                        পরিমান : <span style="color:red">*</span></label>
                                                    <input type="text" class="form-control" id="order_number"
                                                        name="order_number">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form_input_group">
                                                    <label for="order_number"
                                                        class="form-label form_input_group_label_important">নগদ
                                                        প্রদান : <span style="color:red">*</span></label>
                                                    <input type="text" class="form-control" id="order_number"
                                                        name="order_number">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form_input_group">
                                                    <label for="order_number"
                                                        class="form-label form_input_group_label_important">অর্ডারের
                                                        তারিখ
                                                        : <span style="color:red">*</span></label>
                                                    <input type="text" class="form-control" id="order_number"
                                                        name="order_number">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form_input_group">
                                                    <label for="order_number"
                                                        class="form-label form_input_group_label_important">ডেলিভারির
                                                        তারিখ : <span style="color:red">*</span></label>
                                                    <input type="text" class="form-control" id="order_number"
                                                        name="order_number">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-12">
                                            <div class="form_input_group">
                                                <label for="order_number"
                                                    class="form-label form_input_group_label_important">
                                                    মন্তব্য(পাঞ্জাবী / শার্ট প্রভৃতির) :
                                                </label>

                                                <textarea class="form-control" name="" id="" rows="1"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form_input_group">
                                                <label for="order_number"
                                                    class="form-label form_input_group_label_important">
                                                    মন্তব্য(পাজামা / প্যান্ট প্রভৃতির) :
                                                </label>
                                                <textarea class="form-control" name="" id="" rows="1"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="my-2">
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-success btn-rounded"> সংরক্ষণ করুন</button>

                        </div>
                    </div>

                </div>
            </div>



        </div>
   
   
        @endsection
 