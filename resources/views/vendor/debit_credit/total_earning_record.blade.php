@extends('.vendor.main')

@section('content')
    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Total Earning Record Page</h4>
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
                                    <th>মোট বিল ও মজুরি</th>
                                    <th>মোট ড্রেস বিল</th>
                                    <th>মোট মজুরি</th>
                                    <th>মোট জমার পরিমান</th>
                                    <th>মোট বাকির পরিমান</th>
                                    <th>মোট আয়</th>
                                    <th>মোট ব্যয়</th>
                                    <th>রেভিনিউ</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($earning_records as $record)
                                    <tr>

                                        <td>
                                            {{ $record->total_balance }}
                                        </td>

                                        <td>
                                            {{ $record->total_balance }}
                                        </td>

                                        <td>
                                            {{ $record->total_wages_balance }}
                                        </td>

                                        <td>
                                            {{ $record->total_deposite_balance }}
                                        </td>
                                        <td>
                                            {{ $record->total_rest_balance }}
                                        </td>

                                        <td>
                                            {{ $record->total_income }}
                                        </td>
                                        <td>
                                            {{ $record->total_cost }}
                                        </td>
                                        <td>
                                            {{ $record->total_revenue }}
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    @endsection
