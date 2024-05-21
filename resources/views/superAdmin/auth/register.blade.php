@extends('.superAdmin.main')

@section('content')
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark height__full_screen">
        <div class="auth-box bg-dark border-top border-secondary">
            <div>
                <div class="text-center pt-3 pb-3">
                    <span class="db"><img src="{{ asset('tailerStaticTemplate/assets/images/logo-text.jpg') }}"
                            alt="logo" /></span>
                </div>
                <!-- Form -->
                <form class="form-horizontal mt-3" action="{{ route('auth.admin.register.store') }}" method="POST">
                    @csrf
                    <div class="row pb-4">

                        <div class="col-12">

                            <div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white h-100" id="basic-addon1"><i
                                                class="fas fa-address-book"></i></span>
                                    </div>
                                    <div>
                                        <input type="text" class="form-control form-control-lg" placeholder="Full Name"
                                            name="full_name" id="full_name" aria-label="Full_name"
                                            aria-describedby="basic-addon1" required>
                                    </div>

                                </div>
                                <div style="display: block ; margin-bottom:15px">
                                    @error('full_name')
                                        <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i
                                                class="ti-user"></i></span>
                                    </div>
                                    <div>
                                        <input type="text" class="form-control form-control-lg" placeholder="Username"
                                            name="name" id="name" aria-label="Username"
                                            aria-describedby="basic-addon1" required>
                                    </div>

                                </div>
                                <div style="display: block ; margin-bottom:15px">
                                    @error('name')
                                        <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- email -->
                            <div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-danger text-white h-100" id="basic-addon1"><i
                                                class="ti-email"></i></span>
                                    </div>
                                    <input type="email" class="form-control form-control-lg" placeholder="Email Address"
                                        name="email" id="email" aria-label="Username" aria-describedby="basic-addon1"
                                        required>
                                </div>

                                <div style="display: block ; margin-bottom:15px">
                                    @error('email')
                                        <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>

                            <div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-warning text-white h-100" id="basic-addon2"><i
                                                class="ti-pencil"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" placeholder="Password"
                                        name="password" id="password" aria-label="Password" aria-describedby="basic-addon1"
                                        required>
                                </div>

                                <div style="display: block ; margin-bottom:15px">
                                    @error('password')
                                        <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>


                            <div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-info text-white h-100" id="basic-addon2"><i
                                                class="ti-pencil"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg"
                                        placeholder=" Confirm Password" name="c_password" id="c_password"
                                        aria-label="Password" aria-describedby="basic-addon1" required>
                                </div>



                                <div style="display: block ; margin-bottom:15px">
                                    @error('c_password')
                                        <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>




                        </div>
                    </div>
                    <div class="row border-top border-secondary">
                        <div class="col-12">
                            <div class="form-group">
                                <div class="pt-3 d-grid">
                                    <button class="btn btn-block btn-lg btn-info" type="submit">Admin Sign Up</button>
                                </div>
                            </div>
                            <div class="mt-5">
                                <a href="{{ route('auth.admin.login.view') }}" class="btn btn-info">Already Have A Account ?
                                    Login Here</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
