@extends('.superAdmin.main')

@section('content')
    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">System Admin</h4>
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
                                    <th>admin id</th>
                                    <th>admin name</th>
                                    <th>admin mobile number/email</th>
                                    <th>view details</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($admins as $admin)
                                    <tr>
                                        <td>{{ $admin->id }}</td>
                                        <td>{{ $admin->name }}</td>
                                        <th>{{ $admin->email }}</th>

                                        <td class="text-end">

                                            <a href="{{ route('auth.update.manager.from.admin', ['id' => $admin->id]) }}"
                                                class="btn btn-primary mb-2">update to manager</a>

                                            @if (Auth::guard('admin')->user()->status == 5)
                                                <form
                                                    action="{{ route('auth.delete.superadmin.from.admin', ['id' => $admin->id]) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-primary" type="submit">Delete</button>
                                                </form>
                                            @endif


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
