@extends('.superAdmin.main')

@section('content')
    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">মেয়াদ অনুযায়ী সারসংক্ষেপ</h4>
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

                    <div class="table-responsive">
                        <table class="table table-bordered border-primary table-striped">
                            <thead>
                                <tr>
                                    <th scope="col" colspan="2" rowspan="2">প্রধান খাত</th>
                                    <th scope="col" colspan="2">আজ</th>
                                    <th scope="col" colspan="2">গত ৭ দিন</th>
                                    <th scope="col" colspan="2">গত ১৫ দিন</th>
                                    <th scope="col" colspan="2">গত ৩০ দিন</th>
                                    <th scope="col" colspan="2">গত ৩ মাস</th>
                                    <th scope="col" colspan="2">গত ৬ মাস</th>
                                    <th scope="col" colspan="2">গত ১ বছর</th>
                                </tr>
                                <tr>

                                    <th scope="col">আয়</th>
                                    <th scope="col">ব্যয় </th>
                                    <th scope="col">আয়</th>
                                    <th scope="col">ব্যয় </th>
                                    <th scope="col">আয়</th>
                                    <th scope="col">ব্যয় </th>
                                    <th scope="col">আয়</th>
                                    <th scope="col">ব্যয় </th>
                                    <th scope="col">আয়</th>
                                    <th scope="col">ব্যয় </th>
                                    <th scope="col">আয়</th>
                                    <th scope="col">ব্যয় </th>
                                    <th scope="col">আয়</th>
                                    <th scope="col">ব্যয় </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" colspan="2">Monthly Bill</th>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2"><b>Total</b></th>
                                    <td><b>0.00</b></td>
                                    <td><b>0.00</b></td>
                                    <td><b>0.00</b></td>
                                    <td><b>0.00</b></td>
                                    <td><b>0.00</b></td>
                                    <td><b>0.00</b></td>
                                    <td><b>0.00</b></td>
                                    <td><b>0.00</b></td>
                                    <td><b>0.00</b></td>
                                    <td><b>0.00</b></td>
                                    <td><b>0.00</b></td>
                                    <td><b>0.00</b></td>
                                    <td><b>0.00</b></td>
                                    <td><b>0.00</b></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    </table>
                </div>
            </div>


        </div>
    @endsection
