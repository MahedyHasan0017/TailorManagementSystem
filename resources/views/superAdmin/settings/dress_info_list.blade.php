@extends('.superAdmin.main')

@section('content')
    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Dress Information List</h4>
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
                                    <th>পোশাকের নাম </th>
                                    <th>পোশাকের ধরন</th>
                                    <th>পোশাকের মূল্য </th>
                                    <th>মজুরির পরিমান</th>
                                    <th>Action </th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($cloths as $cloth)
                                    <tr>
                                        <td>{{ $cloth->cloth_name }}</td>
                                        <td>{{ $cloth->dress_type }} </td>
                                        <td> {{ $cloth->cloth_price }}</td>
                                        <td>{{ $cloth->dress_wages }}</td>

                                        <td>

                                            <div>
                                                <button class="btn btn-primary">details</button>
                                                <button class="btn btn-danger">delete</button>
                                            </div>

                                        </td>
                                    </tr>
                                @endforeach




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
