@extends('.superAdmin.main')

@section('content')
    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">vendor single</h4>
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

                      <h2>here is all permissions for vendors</h2>


                      <form method="post" action="{{ route('vendor.submit.permissions') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label><strong>Name :</strong></label>
                                <input type="text" name="name" class="form-control"/>
                            </div>  
                            <div class="form-group">
                                <label><strong>Permission Name :</strong></label><br>
                                <label><input type="checkbox" name="permission_name[]" value="Red"> Red</label>
                                <label><input type="checkbox" name="permission_name[]" value="Blue"> Blue</label>
                                <label><input type="checkbox" name="permission_name[]" value="Green"> Green</label>
                                <label><input type="checkbox" name="permission_name[]" value="Yellow"> Yellow</label>
                            </div>  

                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success btn-sm">Save</button>
                            </div>
                        </form>



                    </div>
                </div>
            </div>

        </div>
    @endsection
