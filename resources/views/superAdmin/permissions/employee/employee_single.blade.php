@extends('.superAdmin.main')

@section('content')
<div class="page-wrapper">

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">employee single</h4>
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
                <div class="col-12">
                    <h2>here is all permissions for employees</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-3">

                    <form method="post" action="{{ route('employee.submit.permissions') }}" enctype="multipart/form-data">
                        @csrf

                        <input type="text" hidden value={{$id}} name="employee_id" id="employee_id">

                        <div class="form-group">
                            <label><strong>Permission Name :</strong></label>

                            <div>

                                <label><input type="checkbox" name="permission_name[]" value="পোষাক অর্ডার"> পোষাক অর্ডার</label>
                            </div>
                            <div>

                                <label><input type="checkbox" name="permission_name[]" value="কর্মচারী পরিচালনা"> কর্মচারী পরিচালনা</label>
                            </div>
                            <div>

                                <label><input type="checkbox" name="permission_name[]" value="মেসেজ প্রদান"> মেসেজ প্রদান</label>
                            </div>
                            <div>

                                <label><input type="checkbox" name="permission_name[]" value="আয় ব্যয় হিসাব"> আয় ব্যয় হিসাব</label>
                            </div>
                            <div>

                                <label><input type="checkbox" name="permission_name[]" value="রিপোর্ট "> রিপোর্ট </label>
                            </div>
                            <div>

                                <label><input type="checkbox" name="permission_name[]" value="সেটিংস "> সেটিংস </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-sm w-full" style="width: 100%;">Save</button>
                        </div>
                    </form>




                </div>


            </div>
        </div>

    </div>
    @endsection