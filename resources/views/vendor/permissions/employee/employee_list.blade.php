@extends('.vendor.main')

@section('content')
    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">employee লিস্ট</h4>
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
                                    <th>employee id</th>
                                    <th>employee name</th>
                                    <th>employee mobile number/email</th>
                                    <th>view details</th>
                                    <!-- <th>অর্ডারের তারিখ</th>
                                    <th>ডেলিভারির তারিখ </th>
                                    <th>মোট বিল</th>
                                    <th>জমার পরিমান</th> -->
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($employees as  $employee)
                                <tr>
                                    <td>{{$employee->id}}</td>
                                    <td>{{$employee->name}}</td>
                                    <th>{{$employee->email}}</th>
                                   
                                    <td><a href="{{route('vendor.permission.employee.single',['id' => $employee->id])}}" class="btn btn-primary">view details</a></td>
                                </tr>
                                @endforeach

                            </tbody>
                           
                        </table>


                    </div>
                </div>
            </div>

        </div>
    @endsection
