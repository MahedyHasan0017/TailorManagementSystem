@extends('.superAdmin.main')

@section('content')
    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">ম্যানুয়ালি SMS প্রেরন</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <div>
                                    <button class="btn btn-primary btn-rounded">পাঠানো SMS লিস্ট</button>
                                </div>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card p-3">
                        <div class="form_input_group">
                            <label for="email" class="form-label form_input_group_label_important">
                                মোবাইল : <span style="color: red;">*</span>
                                <input type="email" class="form-control" id="order_number" name="order_number">
                        </div>
                        <div class="form_input_group">
                            <label for="email" class="form-label form_input_group_label_important">
                                মেসেজ লিখুন : <span style="color: red;">*</span>
                                <!-- <input type="email" class="form-control" id="order_number"
                                    name="order_number"> -->

                                <select class="form-control">
                                    <option value="">option-1</option>
                                    <option value="">option-2</option>
                                    <option value="">option-3</option>
                                    <option value="">option-4</option>
                                </select>

                        </div>
                        <div class="form_input_group">
                            <label for="contact_address" class="form-label form_input_group_label_important">

                                <textarea class="form-control" name="" id="" cols="30" rows="5" id="contact_address">
                               
                            </textarea>
                        </div>
                        <div class="form_input_group">
                            <button class="btn btn-primary btn-rounded">
                                send message
                            </button>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    @endsection
