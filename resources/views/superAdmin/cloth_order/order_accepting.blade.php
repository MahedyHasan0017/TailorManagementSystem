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


            <form action="{{ route('order.accepting.store') }}" method="post">
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
                                        {{-- <div class="form_input_group">
                                            <label for="order_number"
                                                class="form-label form_input_group_label_important">অর্ডার
                                                নং : <span style="color:red">*</span></label>
                                            <input type="text" class="form-control" id="order_number"
                                                name="order_number">
                                        </div> --}}

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
                                                                        value="{{ $cloth->cloth_name }}" name="cloth_full_name" id="cloth_name[]">
                                                                    <label class="form-check-label" for="name[]">
                                                                        {{ $cloth->cloth_name }}
                                                                    </label>
                                                                </div>
                                                            </td>
    
                                                            <td>
                                                                <div class="">
                                                                    <input type="text" class="form-control"
                                                                        name="number_of_cloth[]" id="number_of_cloth">
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

                                                        <div class="card p-2 mb-0 ">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            value="panjabi_buke_pocket_1_ti" name="pocket[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            বুকে ১টি পকেট
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            value="panjabi_buke_pocket_2_ti" name="pocket[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            বুকে ২টি পকেট
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            value="1_pocket_chain" name='pocket[]'>
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            ১ পকেটে চেইন
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            value="2_pocket_chain"  name='pocket[]'>
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            ২ পকেটে চেইন
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            value="pocket_dhaka" name="pocket[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            পকেট ঢাকা
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            value="pocket_dhkna" id="" name="pocket[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            পকেট ঢাকনা
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            value="kadhe_soldger" id="" name="pocket[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            কাধে সোলডার
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            value="hatte_fita" id="" name="pocket[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            হাতে ফিতা
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            value="bon_pocket" id="" name="pocket[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            বন পকেট
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            value="rannar" id="" name="pocket[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            রানার
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            value="bogol_pocket" id="" name="pocket[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            বগল পকেট
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            value="pocket-1" id="" name="pocket[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/1.jpg') }}"
                                                                                style="height: 50px ; width:55px;"
                                                                                alt="images">
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            value="pocket-2" id="" name="pocket[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/2.jpg') }}"
                                                                                style="height: 50px ; width:55px;"
                                                                                alt="images">
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                        value="pocket-3" id="" name="pocket[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/3.jpg') }}"
                                                                                style="height: 50px ; width:55px;"
                                                                                alt="images">
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                             value="pocket-4" id="" name="pocket[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/4.jpg') }}"
                                                                                style="height: 50px ; width:55px;"
                                                                                alt="images">
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                        value="pocket-5" id="" name="pocket[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/5.jpg') }}"
                                                                                style="height: 50px ; width:55px;"
                                                                                alt="images">
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                        value="pocket-6" id="" name="pocket[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/6.jpg') }}"
                                                                                style="height: 50px ; width:55px;"
                                                                                alt="images">
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                        value="pocket-7" id="" name="pocket[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/7.jpg') }}"
                                                                                style="height: 50px ; width:55px;"
                                                                                alt="images">
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                        value="pocket-8" id="" name="pocket[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/8.jpg') }}"
                                                                                style="height: 50px ; width:55px;"
                                                                                alt="images">
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                        value="pocket-9" id="" name="pocket[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/9.jpg') }}"
                                                                                style="height: 50px ; width:55px;"
                                                                                alt="images">
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                        value="pocket-10" id="" name="pocket[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/10.jpg') }}"
                                                                                style="height: 50px ; width:55px;"
                                                                                alt="images">
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                        value="pocket-11" id="" name="pocket[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/11.jpg') }}"
                                                                                style="height: 50px ; width:55px;"
                                                                                alt="images">
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                        value="pocket-12" id="" name="pocket[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/12.jpg') }}"
                                                                                style="height: 50px ; width:55px;"
                                                                                alt="images">
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                        value="pocket-13" id="" name="pocket[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/13.jpg') }}"
                                                                                style="height: 50px ; width:55px;"
                                                                                alt="images">
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                        value="pocket-14" id="" name="pocket[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/14.jpg') }}"
                                                                                style="height: 50px ; width:50px; margin-left:3px ; "
                                                                                alt="images">
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                        value="pocket-15" id="" name="pocket[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/15.jpg') }}"
                                                                                style="height: 50px ; width:50px; margin-left:3px ; "
                                                                                alt="images">
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                        value="pocket-16" id="" name="pocket[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/16.jpg') }}"
                                                                                style="height: 50px ; width:50px; margin-left:4px ; "
                                                                                alt="images">
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                        value="pocket-17" id="" name="pocket[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/17.jpg') }}"
                                                                                style="height: 50px ; width:50px; margin-left:3px ; "
                                                                                alt="images">
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                        value="pocket-18" id="" name="pocket[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/18.jpg') }}"
                                                                                style="height: 50px ; width:50px; margin-left:3px ; "
                                                                                alt="images">
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                        value="pocket-19" id="" name="pocket[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/19.jpg') }}"
                                                                                style="height: 50px ; width:50px; margin-left:3px ; "
                                                                                alt="images">
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                        value="pocket-20" id="" name="pocket[]">
                                                                        <label class="form-check-label"
                                                                            for="">
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
                                                                            value="round" id="" name="colar[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            রাউন্ড
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                        value="sherwani" id="" name="colar[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            শেরওয়ানি
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                        value="single" id="" name="colar[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            সিঙ্গেল
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                        value="double" id="" name="colar[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            ডাবল
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                        value="band" id="" name="colar[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            ব্যান্ড
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                        value="square" id="" name="colar[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            স্কয়ার
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                        value="site_hem" id="" name="colar[]">
                                                                        <label class="form-check-label"
                                                                            for="">
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
                                                                                    type="checkbox" 
                                                                                    value="shirt_colar" id="" name="gola[]">
                                                                                <label class="form-check-label"
                                                                                    for="">
                                                                                    শার্ট কলার
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value="kof" id="" name="gola[]">
                                                                                <label class="form-check-label"
                                                                                    for="">
                                                                                    কফ
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value="single" id="" name="gola[]">
                                                                                <label class="form-check-label"
                                                                                    for="">
                                                                                    সিঙ্গেল
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value="bogol" id="" name="gola[]">
                                                                                <label class="form-check-label"
                                                                                    for="">
                                                                                    বোগল
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value="gol-gola" id="" name="gola[]">
                                                                                <label class="form-check-label"
                                                                                    for="">
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
                                                                                    type="checkbox" value="colar" id="" name="pypin[]">
                                                                                <label class="form-check-label"
                                                                                    for="">
                                                                                    কলার
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value="plate" id="" name="pypin[]">
                                                                                <label class="form-check-label"
                                                                                    for="">
                                                                                    প্লেট
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value="hata" id="" name="pypin[]">
                                                                                <label class="form-check-label"
                                                                                    for="">
                                                                                    হাতা
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value="plate_er_ek_side" id="" name="pypin[]">
                                                                                <label class="form-check-label"
                                                                                    for="">
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
                                                                                    type="checkbox" value="plate-1" id="" name="plate[]">
                                                                                <label class="form-check-label"
                                                                                    for="">

                                                                                    <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/plate_img/1.png') }}"
                                                                                        style="height: 28px ; width:43px;"
                                                                                        alt="images">
                                                                                </label>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value="plate-2" id="" name="plate[]">
                                                                                <label class="form-check-label"
                                                                                    for="">
                                                                                    <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/plate_img/2.png') }}"
                                                                                        style="height: 28px ; width:43px;"
                                                                                        alt="images">
                                                                                </label>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value="plate-3" id="" name="plate[]">
                                                                                <label class="form-check-label"
                                                                                    for="">
                                                                                    <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/plate_img/3.png') }}"
                                                                                        style="height: 28px ; width:43px;"
                                                                                        alt="images">
                                                                                </label>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value="plate-4" id="" name="plate[]">
                                                                                <label class="form-check-label"
                                                                                    for="">
                                                                                    <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/plate_img/4.png') }}"
                                                                                        style="height: 28px ; width:43px;"
                                                                                        alt="images">
                                                                                </label>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value="plate_double" id="" name="plate[]">
                                                                                <label class="form-check-label"
                                                                                    for="">
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
                                                                                    type="checkbox" value="kaff-1" id="" name="kaff[]">
                                                                                <label class="form-check-label"
                                                                                    for="">
                                                                                    <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/kaf_img/1.png') }}"
                                                                                        style="height: 28px ; width:43px;"
                                                                                        alt="images">
                                                                                </label>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value="kaff-2" id="" name="kaff[]">
                                                                                <label class="form-check-label"
                                                                                    for="">
                                                                                    <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/kaf_img/2.png') }}"
                                                                                        style="height: 28px ; width:43px;"
                                                                                        alt="images">
                                                                                </label>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value="kaff-3" id="" name="kaff[]">
                                                                                <label class="form-check-label"
                                                                                    for="">
                                                                                    <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/kaf_img/3.png') }}"
                                                                                        style="height: 28px ; width:43px;"
                                                                                        alt="images">
                                                                                </label>
                                                                            </div>
                                                                        </div>


                                                                        <div class="col-md-4">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value="single_kaff" id="" name="kaff[]">
                                                                                <label class="form-check-label"
                                                                                    for="">
                                                                                    সিঙ্গেল কাফ
                                                                                </label>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox"value="double_kaff_ling" id="" name="kaff[]">
                                                                                <label class="form-check-label"
                                                                                    for="">
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
                                                                        value="single" id="" name="pasting[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            সিঙ্গেল
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                        value="double" id="" name="pasting[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            ডাবল
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                        value="haate_pasting" id="" name="pasting[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            হাতে পেস্টিং
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                        value="botam_plate" id="" name="pasting[]">
                                                                        <label class="form-check-label"
                                                                            for="">
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
                                                                                    type="checkbox" value="colar" id="" name="laise[]">
                                                                                <label class="form-check-label"
                                                                                    for="">
                                                                                    কলার
                                                                                </label>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value="plate" id="" name="laise[]">
                                                                                <label class="form-check-label"
                                                                                    for="">
                                                                                    প্লেট
                                                                                </label>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox"value="hata" id="" name="laise[]">
                                                                                <label class="form-check-label"
                                                                                    for="">
                                                                                    হাতা
                                                                                </label>
                                                                            </div>
                                                                        </div>


                                                                        <div class="col-md-4">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value="buk" id="" name="laise[]">
                                                                                <label class="form-check-label"
                                                                                    for="">
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
                                                                                    type="checkbox" value="tira" id="" name="tira[]">
                                                                                <label class="form-check-label"
                                                                                    for="">
                                                                                    তিরা
                                                                                </label>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value="mora_double_chap_shelay" id="" name="tira[]">
                                                                                <label class="form-check-label"
                                                                                    for="">
                                                                                    মোড়া ডাবল চাপ সেলাই
                                                                                </label>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value="niche_round" id="" name="tira[]">
                                                                                <label class="form-check-label"
                                                                                    for="">
                                                                                    নিচে রাউন্ড
                                                                                </label>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value="v_tira" id="" name="tira[]">
                                                                                <label class="form-check-label"
                                                                                    for="">
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
                                                                        value="shamna" id="" name="full[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            সামনা
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                        value="kalar" id="" name="full[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            কালার
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                        value="plate" id="" name="full[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            প্লেট
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                        value="kop" id="" name="full[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            কপ
                                                                        </label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                        value="gola" id="" name="full[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            গলা
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                        value="mora" id="" name="full[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            মোড়া
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                        value="kandi" id="" name="full[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            কান্দি
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                        value="dui_pocket" id="" name="full[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            দুই পকেট
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                        value="buk_pocket" id="" name="full[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            বুক পকেট
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                        value="haater_muhuri" id="" name="full[]">
                                                                        <label class="form-check-label"
                                                                            for="">
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
                                                                        value="chain_botam" id="" name="botam[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            চেইন বোতাম
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                        value="customar_er_deya_botam" id="" name="botam[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            কাস্টমারের দেয়া বোতাম
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                        value="kath_botam" id="" name="botam[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            কাঠ বোতাম
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                        value="metal_botam_boro" id="" name="botam[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            মেটাল বোতাম(বড়)
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                        value="normal_botam" id="" name="botam[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            নরমাল বোতাম
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                        value="design_botam" id="" name="botam[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            ডিজাইন বোতাম
                                                                        </label>
                                                                    </div>
                                                                </div>


                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                        value="metal_botam_choto" id="" name="botam[]">
                                                                        <label class="form-check-label"
                                                                            for="">
                                                                            মেটাল বোতাম(ছোট)
                                                                        </label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                        value="snap_botam" id="" name="botam[]">
                                                                        <label class="form-check-label"
                                                                            for="">
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
                                                                    value="1_pocket_chain" id="" name="pant_pocket[]">
                                                                    <label class="form-check-label"
                                                                        for="">
                                                                        ১ পকেটে চেইন
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                    value="2_pocket_chain" id="" name="pant_pocket[]">
                                                                    <label class="form-check-label"
                                                                        for="">
                                                                        ২ পকেট চেইন
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                    value="mobile_pocket_1_ti" id="" name="pant_pocket[]">
                                                                    <label class="form-check-label"
                                                                        for="">
                                                                        মোবাইল পকেট ১টি
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                    value="pechone_pocket_1_ti" id="" name="pant_pocket[]">
                                                                    <label class="form-check-label"
                                                                        for="">
                                                                        পেছনে ১টি পকেট
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                    value="pechone_pocket_2_ti" id="" name="pant_pocket[]">
                                                                    <label class="form-check-label"
                                                                        for="">
                                                                        পেছনে ২টি পকেট
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                    value="1_tiken" id="" name="pant_pocket[]">
                                                                    <label class="form-check-label"
                                                                        for="">
                                                                        ১ টিকেন
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                    value="2_tiken" id="" name="pant_pocket[]">
                                                                    <label class="form-check-label"
                                                                        for="">
                                                                        ২ টিকেন
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                    value="tiken_chara" id="" name="pant_pocket[]">
                                                                    <label class="form-check-label"
                                                                        for="">
                                                                        টিকেন ছাড়া
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                    value="Geans_pant_golder_shuta" id="" name="pant_pocket[]">
                                                                    <label class="form-check-label"
                                                                        for="">
                                                                        জিন্স প্যান্ট : গোল্ডেন সূতা
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                    value="Geans_pant_same_shuta" id="" name="pant_pocket[]">
                                                                    <label class="form-check-label"
                                                                        for="">
                                                                        জিন্স প্যান্ট : সেইম সূতা
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                    value="shamne_chain" id="" name="pant_pocket[]">
                                                                    <label class="form-check-label"
                                                                        for="">
                                                                        সামনে চেইন
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                    value="mobile_pocket_2_ti" id="" name="pant_pocket[]">
                                                                    <label class="form-check-label"
                                                                        for="">
                                                                        মোবাইল পকেট ২টি
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                    value="pant_pocket_1" id="" name="pant_pocket[]">
                                                                    <label class="form-check-label"
                                                                        for="">
                                                                        <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/19.jpg') }}"
                                                                            style="height: 50px ; width:55px;"
                                                                            alt="images">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                    value="pant_pocket_2" id="" name="pant_pocket[]">
                                                                    <label class="form-check-label"
                                                                        for="">
                                                                        <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/20.jpg') }}"
                                                                            style="height: 50px ; width:55px;"
                                                                            alt="images">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                    value="pant_pocket_3" id="" name="pant_pocket[]">
                                                                    <label class="form-check-label"
                                                                        for="">
                                                                        <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/21.jpg') }}"
                                                                            style="height: 50px ; width:55px;"
                                                                            alt="images">
                                                                    </label>
                                                                </div>
                                                            </div>



                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                    value="pant_pocket_4" id="" name="pant_pocket[]">
                                                                    <label class="form-check-label"
                                                                        for="">
                                                                        <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/22.jpg') }}"
                                                                            style="height: 50px ; width:55px;"
                                                                            alt="images">
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                    value="pant_pocket_5" id="" name="pant_pocket[]">
                                                                    <label class="form-check-label"
                                                                        for="">
                                                                        <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/23.jpg') }}"
                                                                            style="height: 50px ; width:55px;"
                                                                            alt="images">
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                    value="pant_pocket_6" id="" name="pant_pocket[]">
                                                                    <label class="form-check-label"
                                                                        for="">
                                                                        <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/24.jpg') }}"
                                                                            style="height: 50px ; width:55px;"
                                                                            alt="images">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                    value="pant_pocket_7" id="" name="pant_pocket[]">
                                                                    <label class="form-check-label"
                                                                        for="">
                                                                        <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/25.jpg') }}"
                                                                            style="height: 50px ; width:42px; margin-left:7px"
                                                                            alt="images">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                    value="pant_pocket_8" id="" name="pant_pocket[]">
                                                                    <label class="form-check-label"
                                                                        for="">
                                                                        <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/26.jpg') }}"
                                                                            style="height: 50px ; width:55px;"
                                                                            alt="images">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                    value="pant_pocket_9" id="" name="pant_pocket[]">
                                                                    <label class="form-check-label"
                                                                        for="">
                                                                        <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/27.jpg') }}"
                                                                            style="height: 50px ; width:46px; margin-left : 4px"
                                                                            alt="images">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                    value="pant_pocket_10" id="" name="pant_pocket[]">
                                                                    <label class="form-check-label"
                                                                        for="">
                                                                        <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/28.jpg') }}"
                                                                            style="height: 50px ; width:55px;"
                                                                            alt="images">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                    value="pant_pocket_11" id="" name="pant_pocket[]">
                                                                    <label class="form-check-label"
                                                                        for="">
                                                                        <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/30.jpg') }}"
                                                                            style="height: 50px ; width:50px; margin-left : 3px "
                                                                            alt="images">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                    value="pant_pocket_12" id="" name="pant_pocket[]">
                                                                    <label class="form-check-label"
                                                                        for="">
                                                                        <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/31.jpg') }}"
                                                                            style="height: 50px ; width:52px; margin-left : 2px;"
                                                                            alt="images">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                    value="pant_pocket_13" id="" name="pant_pocket[]">
                                                                    <label class="form-check-label"
                                                                        for="">
                                                                        <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/32.jpg') }}"
                                                                            style="height: 50px ; width:50px; margin-left : 3px "
                                                                            alt="images">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                    value="pant_pocket_14" id="" name="pant_pocket[]">
                                                                    <label class="form-check-label"
                                                                        for="">
                                                                        <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/33.jpg') }}"
                                                                            style="height: 50px ; width:50px; margin-left : 3px"
                                                                            alt="images">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                    value="pant_pocket_15" id="" name="pant_pocket[]">
                                                                    <label class="form-check-label"
                                                                        for="">
                                                                        <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/34.jpg') }}"
                                                                            style="height: 50px ; width:55px;"
                                                                            alt="images">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                    value="pant_pocket_16" id="" name="pant_pocket[]">
                                                                    <label class="form-check-label"
                                                                        for="">
                                                                        <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/35.jpg') }}"
                                                                            style="height: 50px ; width:50px; margin-left : 3px; "
                                                                            alt="images">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                    value="pant_pocket_17" id="" name="pant_pocket[]">
                                                                    <label class="form-check-label"
                                                                        for="">
                                                                        <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/36.jpg') }}"
                                                                            style="height: 50px ; width:55px;"
                                                                            alt="images">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                    value="pant_pocket_18" id="" name="pant_pocket[]">
                                                                    <label class="form-check-label"
                                                                        for="">
                                                                        <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/37.jpg') }}"
                                                                            style="height: 50px ; width:55px;"
                                                                            alt="images">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                    value="pant_pocket_19" id="" name="pant_pocket[]">
                                                                    <label class="form-check-label"
                                                                        for="">
                                                                        <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/38.jpg') }}"
                                                                            style="height: 50px ; width:55px;"
                                                                            alt="images">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                    value="pant_pocket_20" id="" name="pant_pocket[]">
                                                                    <label class="form-check-label"
                                                                        for="">
                                                                        <img src="{{ asset('tailerStaticTemplate/assets/essential_Images/pocket-update/39.jpg') }}"
                                                                            style="height: 50px ; width:55px;"
                                                                            alt="images">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                    value="pant_pocket_21" id="" name="pant_pocket[]">
                                                                    <label class="form-check-label"
                                                                        for="">
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
                                                       
                                                        <input id="datepicker1" class="form-control"  name="orderer_tarikh"/>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form_input_group">
                                                        <label for="delivery_tarikh"
                                                            class="form-label form_input_group_label_important">ডেলিভারির
                                                            তারিখ : <span style="color:red">*</span></label>
                            
                                                            <input id="datepicker2" class="form-control"  name="delivery_tarikh"/>
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
