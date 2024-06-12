@extends('.vendor.main')

@section('content')
    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">salary management for employee list</h4>
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
                                    {{-- <th>employee id</th> --}}
                                    <th>employee name</th>
                                    <th>employee mobile number/email</th>
                                    <th>employee designation</th>
                                    <th>employee main balance</th>
                                    {{-- <th>employee paid balance</th>
                                    <th>employee rest balance</th> --}}
                                    <th>employee status</th>
                                    <th>view details</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $employee)
                                    <tr>
                                        <td>{{ $employee->name }}</td>
                                        <td>{{ $employee->email }}</td>
                                        <td>{{ $employee->designation }}</td>
                                        <td>{{ $employee->employee_main_balance }}</td>
                                        {{-- <td>{{ $employee->employee_paid_balance }}</td> --}}
                                        {{-- <td>{{ $employee->employee_rest_balance }}</td> --}}
                                        <td>
                                            @if ($employee->status == 1)
                                                <span class="badge bg-primary">Active</span>
                                            @else
                                                <span class="badge bg-danger">In active</span>
                                            @endif
                                        </td>
                                        <td><a href="{{ route('vendor.permission.employee.single', ['id' => $employee->id]) }}"
                                                class="btn btn-primary">details</a></td>
                                    </tr>
                                @endforeach

                            </tbody>

                        </table>


                    </div>
                </div>
            </div>

        </div>
    @endsection
