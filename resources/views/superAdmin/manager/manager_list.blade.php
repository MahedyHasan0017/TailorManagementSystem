@extends('.superAdmin.main')

@section('content')
    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Managers লিস্ট</h4>
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
                                    <th>Manager id</th>
                                    <th>Manager name</th>
                                    <th>Manager mobile number/email</th>
                                    <th>Action</th>
                                    <!-- <th>অর্ডারের তারিখ</th>
                                                <th>ডেলিভারির তারিখ </th>
                                                <th>মোট বিল</th>
                                                <th>জমার পরিমান</th> -->
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($managers as $manager)
                                    <tr>
                                        <td>{{ $manager->id }}</td>
                                        <td>{{ $manager->name }}</td>
                                        <th>{{ $manager->email }}</th>

                                        <td>


                                            @if (Auth::guard('admin')->user()->status != 0)
                                                <a href="{{ route('auth.update.superadmin.from.admin', ['id' => $manager->id]) }}"
                                                    class="btn btn-primary">update to system admin</a>
                                                @if (Auth::guard('admin')->user()->status == 5)
                                                    <a href="{{ route('auth.delete.superadmin.from.admin', ['id' => $manager->id]) }}"
                                                        class="btn btn-primary">Delete</a>
                                                @endif
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
