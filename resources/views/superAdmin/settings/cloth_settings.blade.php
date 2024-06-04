@extends('.superAdmin.main')

@section('content')
    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Add Dress Information</h4>
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
            <div class="row">
                <div class="col-md-6">
                    <form
                        action="{{ route('admin.settings.dress.info.submit', ['id' => Auth::guard('admin')->user()->mobile_number]) }}"
                        method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name='dress_name' id='dress_name'
                                placeholder="Enter Dress Name" />
                            <div>
                                @error('dress_name')
                                    <div style="color: red ; font-weight : bold">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="dress_price" id='dress_price'
                                placeholder="Enter Dress Price" />
                            <div>
                                @error('dress_price')
                                    <div style="color: red ; font-weight : bold">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="dress_wages" id='dress_wages'
                                placeholder="Enter Dress Wages" />
                            <div>
                                @error('dress_wages') 
                                    <div style="color: red ; font-weight : bold">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="dress_type" id='dress_type'
                                placeholder="Enter Dress Type" />
                            <div>
                                @error('dress_type')
                                    <div style="color: red ; font-weight : bold">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div>
                            @if (Auth::guard('admin')->user() != null)
                                <input type="text" name="admin_id" id="admin_id"
                                    value="{{ Auth::guard('admin')->user()->mobile_number }}" hidden>
                            @endif
                        </div>
                        <div>
                            @if (Auth::guard('vendor')->user() != null)
                                <input type="text" name="vendor_id" id="vendor_id"
                                    value="{{ Auth::guard('vendor')->user()->mobile_number }}" hidden>
                            @endif
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success">
                                Submit
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
