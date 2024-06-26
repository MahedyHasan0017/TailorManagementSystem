@extends('.vendor.main')

@section('content')
    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Cotton List</h4>
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
                                    <th>কাপরের নাম</th>
                                    <th>কাপরের ধরন</th>
                                    <th class="text-center">কাপরের সাইজ</th>
                                    <th class="text-center">কাপরের মূল্য</th>
                                    <th class="text-center">কাপরের পরিমান</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cotton_list as $cotton)
                                    <tr>
                                        <td>{{ $cotton->cotton_name }}</td>
                                        <td>{{ $cotton->cotton_type }}</td>
                                        <td class="text-center"> {{ $cotton->cotton_size }}</td>
                                        <td class="text-center">{{ $cotton->cotton_price }}</td>
                                        <td>
                                            <div class="cotton_unit_list">
                                                <div class="cotton_unit_list_unit">{{ $cotton->cotton_yards }} গজ </div>
                                                <div class="cotton_unit_list_unit">{{ $cotton->cotton_joint }} গিরা</div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <a href="{{ route('inventory.cotton.update.single.vendor', ['vendor_id' => Auth::guard('vendor')->user()->vendor_id, 'cotton_id' => $cotton->id]) }}"
                                                class="btn btn-primary btn-sm">Add Cotton</a>
                                            <a href="{{ route('inventory.cotton.details.vendor', ['vendor_id' => Auth::guard('vendor')->user()->vendor_id, 'cotton_id' => $cotton->id]) }}"
                                                class="btn btn-sm btn-info">
                                                View
                                            </a>
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
