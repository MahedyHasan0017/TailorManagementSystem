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


            <form action="{{ route('admin.order.accepting.store') }}" method="post">
                @csrf

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
                                            <label for="order_number"
                                                class="form-label form_input_group_label_important">অর্ডার
                                                নং : <span style="color:red">*</span></label>
                                            <input type="text" class="form-control" id="order_number"
                                                name="order_number">
                                        </div>

                                        <div class="form_input_group">
                                            <label for="name" class="form-label form_input_group_label_important"> নাম :
                                                <span style="color:red">*</span></label>
                                            <input type="text" class="form-control" id="customer_name" name="customer_name">
                                        </div>

                                        <div class="form_input_group">
                                            <label for="mobile_number" class="form-label form_input_group_label_important">
                                                মোবাইল নং : <span style="color:red">*</span></label>
                                            <input type="text" class="form-control" id="customer_mobile_number"
                                                name="customer_mobile_number">
                                        </div>

                                        <div class="form_input_group">
                                            <label for="email" class="form-label form_input_group_label_important">
                                                ইমেইল:
                                                <input type="email" class="form-control" id="customer_email" name="customer_email">
                                        </div>

                                        <div class="form_input_group">
                                            <label for="contact_address"
                                                class="form-label form_input_group_label_important">
                                                যোগাযোগ এর ঠিকানা :
                                                <textarea class="form-control" name="customer_contact_address" cols="30" rows="5" id="customer_contact_address"></textarea>
                                        </div>

                                    </div>


                                    <div class="col-md-6">
                                        <div class="table-responsive table__container">
                                            <table class="table">
                                                <thead class="custom_table_heading">
                                                    <tr>
                                                        <th scope="col">পোশাকের নাম</th>
                                                        <th scope="col">সংখ্যা </th>
                                                        <th scope="col">মূল্য</th>
                                                        <th scope="col">মোট মূল্য</th>
                                                    </tr>
                                                </thead>
                                                    <tbody class="custom_table_body custom_table_height">
                                                        @foreach ($cloth_list as $cloth )
                                                        <tr>
                                                            <td scope="row">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="{{ $cloth->cloth_name }}" name="cloth_full_name" id="flexCheckDefault">
                                                                    <label class="form-check-label" for="flexCheckDefault">
                                                                        {{ $cloth->cloth_name }}
                                                                    </label>
                                                                </div>
                                                            </td>
    
                                                            <td>
                                                                <div class="">
                                                                    <input type="number" class="form-control"
                                                                        name="number_of_cloth" id="number_of_cloth">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="">
                                                                    <input type="text" class="form-control"
                                                                        name="price_of_cloth" id="price_of_cloth">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="">
                                                                    <input type="text" class="form-control"
                                                                        name="total_price_of_cloth" id="total_price_of_cloth">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @endforeach

                                                    </tbody>
                                                    <tfoot class="custom_table_footer">
    
                                                        <th scope="row">@twitter</th>
                                                        <td></td>
                                                        <td>cell-3</td>
                                                        <td scope="col">cell 2</td>
                                                    </tfoot>
                                               
                                                
                                            </table>

                                            

                                        </div>
                                        <div>
                                            <div class="accordion-item mt-3">
                                                <h2 class="accordion-header" id="headingSeven">
                                                    <button class="accordion-button collapsed accordion__heading"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseSeven" aria-expanded="true"
                                                        aria-controls="collapseSeven">
                                                        নতুন পোশাক যোগ করুন
                                                    </button>
                                                </h2>
                                                <div id="" class="" aria-labelledby="headingSeven"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body accordion__body">
                                                        <div class="row">
                                                            {{-- <form id="add-new-cloth" action="{{ route('admin.add.cloth.store') }}"
                                                                method="post"> --}}
                                                            <div class="col-12">
                                                                <input type="text" name='cloth_name'
                                                                    id="cloth_name" placeholder="পোশাকের নাম"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="col-12" style="text-align: right">
                                                                <button id="add_cloth_name" type="button"
                                                                    class="btn btn-success mt-2">যোগ করুন</button>
                                                            </div>

                                                            {{-- </form> --}}
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
                                                                    <label for="lomba"
                                                                        class="form-label form_input_group_label_important">
                                                                        লম্বা : <span style="color:red">*</span></label>
                                                                    <input type="text" class="form-control"
                                                                        id="panjabi_lomba" name="panjabi_lomba">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form_input_group">
                                                                    <label for="body"
                                                                        class="form-label form_input_group_label_important">
                                                                        বডি : <span style="color:red">*</span></label>
                                                                    <input type="text" class="form-control"
                                                                        id="panjabi_body" name="panjabi_body">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form_input_group">
                                                                    <label for="body_luzz"
                                                                        class="form-label form_input_group_label_important">বডি
                                                                        লুজ : <span style="color:red">*</span></label>
                                                                    <input type="text" class="form-control"
                                                                        id="panjabi_body_luzz" name="panjabi_body_luzz">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form_input_group">
                                                                    <label for="pet"
                                                                        class="form-label form_input_group_label_important">
                                                                        পেট : <span style="color:red">*</span></label>
                                                                    <input type="text" class="form-control"
                                                                        id="panjabi_pet" name="panjabi_pet">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form_input_group">
                                                                    <label for="put"
                                                                        class="form-label form_input_group_label_important">
                                                                        পুট : <span style="color:red">*</span></label>
                                                                    <input type="text" class="form-control"
                                                                        id="panjabi_put" name="panjabi_put">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form_input_group">
                                                                    <label for="hatar_lomba"
                                                                        class="form-label form_input_group_label_important">
                                                                        হাতার লম্বা : <span
                                                                            style="color:red">*</span></label>
                                                                    <input type="text" class="form-control"
                                                                        id="panjabi_hatar_lomba" name="panjabi_hatar_lomba">
                                                                </div>
                                                            </div>


                                                            <div class="col-md-2">
                                                                <div class="form_input_group">
                                                                    <label for="hatar_mukh"
                                                                        class="form-label form_input_group_label_important">
                                                                        হাতার মুখ : <span
                                                                            style="color:red">*</span></label>
                                                                    <input type="text" class="form-control"
                                                                        id="panjabi_hatar_mukh" name="panjabi_hatar_mukh">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form_input_group">
                                                                    <label for="kaf"
                                                                        class="form-label form_input_group_label_important">
                                                                        কাফ : <span style="color:red">*</span></label>
                                                                    <input type="text" class="form-control"
                                                                        id="panjabi_kaf" name="panjabi_kaf">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form_input_group">
                                                                    <label for="gola"
                                                                        class="form-label form_input_group_label_important">
                                                                        গলা : <span style="color:red">*</span></label>
                                                                    <input type="text" class="form-control"
                                                                        id="panjabi_gola" name="panjabi_gola">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form_input_group">
                                                                    <label for="plate_fara"
                                                                        class="form-label form_input_group_label_important">
                                                                        প্লেট ফাড়া : <span
                                                                            style="color:red">*</span></label>
                                                                    <input type="text" class="form-control"
                                                                        id="panjabi_plate_fara" name="panjabi_plate_fara">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form_input_group">
                                                                    <label for="kolar_choura"
                                                                        class="form-label form_input_group_label_important">
                                                                        কলার চউরা : <span
                                                                            style="color:red">*</span></label>
                                                                    <input type="text" class="form-control"
                                                                        id="panjabi_kolar_choura" name="panjabi_kolar_choura">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form_input_group">
                                                                    <label for="plate_choura"
                                                                        class="form-label form_input_group_label_important">
                                                                        প্লেট চউরা : <span
                                                                            style="color:red">*</span></label>
                                                                    <input type="text" class="form-control"
                                                                        id="panjabi_plate_choura" name="panjabi_plate_choura">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form_input_group">
                                                                    <label for="gher"
                                                                        class="form-label form_input_group_label_important">
                                                                        ঘের : <span style="color:red">*</span></label>
                                                                    <input type="text" class="form-control"
                                                                        id="panjabi_gher" name="panjabi_gher">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form_input_group">
                                                                    <label for="hiff"
                                                                        class="form-label form_input_group_label_important">
                                                                        হিফ : <span style="color:red">*</span></label>
                                                                    <input type="text" class="form-control"
                                                                        id="panjabi_hiff" name="panjabi_hiff">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form_input_group">
                                                                    <label for="nich_hata"
                                                                        class="form-label form_input_group_label_important">
                                                                        নিচ হাতা : <span style="color:red">*</span></label>
                                                                    <input type="text" class="form-control"
                                                                        id="panjabi_nich_hata" name="panjabi_nich_hata">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form_input_group">
                                                                    <label for="madani_fara"
                                                                        class="form-label form_input_group_label_important">
                                                                        মাদানি ফাড়া :
                                                                        <span style="color:red">*</span></label>
                                                                    <input type="text" class="form-control"
                                                                        id="panjabi_madani_fara" name="panjabi_madani_fara">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form_input_group">
                                                                    <label for="mot_mora"
                                                                        class="form-label form_input_group_label_important">
                                                                        মোট মোড়া :
                                                                        <span style="color:red">*</span></label>
                                                                    <input type="text" class="form-control"
                                                                        id="panjabi_mot_mora" name="panjabi_mot_mora">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form_input_group">
                                                                    <label for="haate_pesting"
                                                                        class="form-label form_input_group_label_important">
                                                                        হাতে পেস্টিং :
                                                                        <span style="color:red">*</span></label>
                                                                    <input type="text" class="form-control"
                                                                        id="panjabi_haate_pesting" name="panjabi_haate_pesting">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>


                                                    <div>
                                                        <div class="accordion__heading mt-5">
                                                            পকেট
                                                        </div>

                                                        {{-- <div class="card">
                                                            <div id="checkboxes">
                                                                <input type="checkbox" name="options[]" value="option1"> Option 1
                                                                <input type="checkbox" name="options[]" value="option2"> Option 2
                                                                <input type="checkbox" name="options[]" value="option3"> Option 3
                                                                <input type="checkbox" name="options[]" value="option4"> Option 4
                                                                <input type="checkbox" name="options[]" value="option5"> Option 5
                                                              </div>
                                                        </div> --}}

                                                        <div class="card p-2 mb-0 ">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            value="panjabi_buke_pocket_1_ti" name="pocket[]">
                                                                        <label class="form-check-label"
                                                                            for="flexCheckDefault">
                                                                            বুকে ১টি পকেট
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            value="panjabi_buke_pocket_2_ti" name="pocket[]">
                                                                        <label class="form-check-label"
                                                                            for="flexCheckDefault">
                                                                            বুকে ২টি পকেট
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            value="1_pocket_chain" name='pocket[]'>
                                                                        <label class="form-check-label"
                                                                            for="flexCheckDefault">
                                                                            ১ পকেটে চেইন
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            value="2_pocket_chain"  name='pocket[]'>
                                                                        <label class="form-check-label"
                                                                            for="flexCheckDefault">
                                                                            ২ পকেটে চেইন
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            value="pocket_dhaka" name="pocket[]">
                                                                        <label class="form-check-label"
                                                                            for="flexCheckDefault">
                                                                            পকেট ঢাকা
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            value="" id="flexCheckDefault" name="pocket[]">
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
                                                aria-labelledby="sub-collapseTwo"
                                                data-bs-parent="#sub-accordionExample">

                                                <div class="accordion-body accordion__body">
                                                    <div class="card p-2 mb-0">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <div class="form_input_group">
                                                                    <label for="pant_lomba"
                                                                        class="form-label form_input_group_label_important">
                                                                        লম্বা : <span style="color:red">*</span></label>
                                                                    <input type="text" class="form-control"
                                                                        id="pant_lomba" name="pant_lomba">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form_input_group">
                                                                    <label for="pant_payer_mukh"
                                                                        class="form-label form_input_group_label_important">
                                                                        পায়ের মুখ : <span
                                                                            style="color:red">*</span></label>
                                                                    <input type="text" class="form-control"
                                                                        id="pant_payer_mukh" name="pant_payer_mukh">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form_input_group">
                                                                    <label for="pant_high"
                                                                        class="form-label form_input_group_label_important">বডি
                                                                        হাই : <span style="color:red">*</span></label>
                                                                    <input type="text" class="form-control"
                                                                        id="pant_high" name="pant_high">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form_input_group">
                                                                    <label for="pant_thai_luz"
                                                                        class="form-label form_input_group_label_important">
                                                                        ঘের/থাই লুজ : <span
                                                                            style="color:red">*</span></label>
                                                                    <input type="text" class="form-control"
                                                                        id="pant_thai_luz" name="pant_thai_luz">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form_input_group">
                                                                    <label for="pant_komor"
                                                                        class="form-label form_input_group_label_important">
                                                                        কোমর : <span style="color:red">*</span></label>
                                                                    <input type="text" class="form-control"
                                                                        id="pant_komor" name="pant_komor">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form_input_group">
                                                                    <label for="pant_belt_type"
                                                                        class="form-label form_input_group_label_important">
                                                                        বেল্ট টাইপ : <span
                                                                            style="color:red">*</span></label>
                                                                    <input type="text" class="form-control"
                                                                        id="pant_belt_type" name="pant_belt_type">
                                                                </div>
                                                            </div>


                                                            <div class="col-md-2">
                                                                <div class="form_input_group">
                                                                    <label for="pant_hiff"
                                                                        class="form-label form_input_group_label_important">
                                                                        হিফ : <span style="color:red">*</span></label>
                                                                    <input type="text" class="form-control"
                                                                        id="pant_hiff" name="pant_hiff">
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
                                                                        ২ পকেট চেইন
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        মোবাইল পকেট ১টি
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        পেছনে ১টি পকেট
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        পেছনে ২টি পকেট
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        ১ টিকেন
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        ২ টিকেন
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        টিকেন ছাড়া
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        জিন্স প্যান্ট : গোল্ডেন সূতা
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        জিন্স প্যান্ট : সেইম সূতা
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        সামনে চেইন
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="flexCheckDefault">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
                                                                        মোবাইল পকেট ২টি
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
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
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
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
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
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
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
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
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
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
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
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
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
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
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
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
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
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
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
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
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
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
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
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
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
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
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
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
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
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
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
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
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
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
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
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
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
                                                                    <label class="form-check-label"
                                                                        for="flexCheckDefault">
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
                                                        <label for="majurir_poriman"
                                                            class="form-label form_input_group_label_important">মজুরির
                                                            পরিমান : <span style="color:red">*</span></label>
                                                        <input type="text" class="form-control" id="majurir_poriman"
                                                            name="majurir_poriman">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form_input_group">
                                                        <label for="nogod_prodan"
                                                            class="form-label form_input_group_label_important">নগদ
                                                            প্রদান : <span style="color:red">*</span></label>
                                                        <input type="text" class="form-control" id="nogod_prodan"
                                                            name="nogod_prodan">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form_input_group">
                                                        <label for="orderer_tarikh"
                                                            class="form-label form_input_group_label_important">অর্ডারের
                                                            তারিখ
                                                            : <span style="color:red">*</span></label>
                                                        <input type="text" class="form-control" id="orderer_tarikh"
                                                            name="orderer_tarikh">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form_input_group">
                                                        <label for="delivery_tarikh"
                                                            class="form-label form_input_group_label_important">ডেলিভারির
                                                            তারিখ : <span style="color:red">*</span></label>
                                                        <input type="text" class="form-control" id="delivery_tarikh"
                                                            name="delivery_tarikh">
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

                                                    <textarea class="form-control" name="montobbo_shirt_panjabi" id="montobbo_shirt_panjabi" rows="1"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form_input_group">
                                                    <label for="montobbo_pant_pajama"
                                                        class="form-label form_input_group_label_important">
                                                        মন্তব্য(পাজামা / প্যান্ট প্রভৃতির) :
                                                    </label>
                                                    <textarea class="form-control" name="montobbo_pant_pajama" id="montobbo_pant_pajama" rows="1"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="my-2">
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-success btn-rounded" type="submit"> সংরক্ষণ করুন</button>
                    </div>
                </div>

            </form>

        </div>
    @endsection


    @push('scripts')
        <script>
            $(document).ready(function() {
                $(document).on('click', '#add_cloth_name', function(event) {
                    event.preventDefault();
                    const cloth_name = $('#cloth_name').val();
                    const data = {
                        cloth_name: cloth_name 
                    }
                   
                    $.ajax({
                        // url: {{ route('admin.add.cloth.store') }}, 
                        url : '/api/add/cloth-type/store',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            cloth_name: cloth_name
                        },
                        success: function(response) {
                            $('.table').load(location.href+' .table');
                            $('#cloth_name').val("");
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            alert('please enter a cloth name') ; 
                        }
                    });
                })
            });


            // $("#add_cloth_name").click(function() {
            //         alert("The paragraph was clicked.");
            //     });

            // $('#add-new-cloth').submit(function(e) {
            //     e.preventDefault();

            //     $.ajax({
            //         url: "{{ route('admin.add.cloth.store') }}",
            //         method: 'POST',
            //         data: $(this).serialize(),
            //         dataType: 'json',
            //         success: function(response) {
            //             console.log(response.message);
            //         },
            //         error: function(error) {
            //             console.error(error);
            //         }
            //     });
            // });
        </script>
    @endpush
