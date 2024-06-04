@extends('.vendor.main')

@section('content')
    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">vendor settings</h4>
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
                        action="{{ route('vendor.settings.dress.info.submit', ['id' => Auth::guard('vendor')->user()->mobile_number]) }}"
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
                        <div>
                            @if (Auth::guard('admin')->user() != null)
                                <input type="text" name="admin_id" id="admin_id"
                                    value="{{ Auth::guard('admin')->user()->admin_id }}">
                            @endif
                        </div>
                        <div>
                            @if (Auth::guard('vendor')->user() != null)
                                <input type="text" name="vendor_id" id="vendor_id"
                                    value="{{ Auth::guard('vendor')->user()->vendor_id }}" hidden>
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
