@extends('.superAdmin.main')

@section('content')
    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">vendor লিস্ট</h4>
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

                        <table id="example" class="display" style="width:100%">
                            <thead class="accordion__heading">
                                <tr>
                                    <th>vendor id</th>
                                    <th>vendor name</th>
                                    <th>vendor mobile number/email</th>
                                    <th>view details</th>
                                    <!-- <th>অর্ডারের তারিখ</th>
                                    <th>ডেলিভারির তারিখ </th>
                                    <th>মোট বিল</th>
                                    <th>জমার পরিমান</th> -->
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($vendors as  $vendor)
                                <tr>
                                    <td>{{$vendor->id}}</td>
                                    <td>{{$vendor->name}}</td>
                                    <th>{{$vendor->email}}</th>
                                    <td><a href="{{route('admin.vendor.profile.view',['mobile_number' => $vendor->mobile_number])}}" class="btn btn-primary">view details</a></td>
                                </tr>
                                @endforeach

                            </tbody>
                           
                        </table>


                    </div>
                </div>
            </div>

        </div>
    @endsection
