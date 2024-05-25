@extends('.superAdmin.main')


@php
    // dd($data) ; 
@endphp

@section('content')

<div class="page-wrapper">

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">ড্রেসের বিবরণ ,সেইভ করতে নিচে কনফার্ম বাটন প্রেস করুন</h4>
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
        <form action="" method="post">
            <div>
                <label for="" style="font-size : 18px ">order number : </label>
                <input type="text" value="{{ $data['order_number'] }}" id="order_number" name="order_number" style="background:  transparent ; border : none" readonly>
            </div>

            <div>
                <label for="" style="font-size : 18px ">customer name : </label>
                <input type="text" value="{{ $data['customer_name'] }}" id="customer_name" name="customer_name" style="background:  transparent ; border : none" readonly>
            </div>

            <div>
                <label for="" style="font-size : 18px ">customer email : </label>
                <input type="text" value="{{ $data['customer_email'] }}" id="customer_email" name="customer_email" style="background:  transparent ; border : none" readonly>
            </div>

            <div>
                <label for="" style="font-size : 18px ">customer mobile number : </label>
                <input type="text" value="{{ $data['customer_mobile_number'] }}" id="customer_mobile_number" name="customer_mobile_number" style="background:  transparent ; border : none" readonly>
            </div>


        </form>
    </div>


</div>

@endsection
