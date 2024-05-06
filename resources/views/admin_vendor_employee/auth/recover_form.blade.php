@include('superAdmin.common_components.header')

<div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark height__full_screen">
    <div class="auth-box bg-dark border-top border-secondary">
        <div id="recoverform">
            <div class="text-center">
                <span class="text-white">Enter your e-mail address below and we will send you instructions how
                    to recover a password.</span>
            </div>
            <div class="row mt-3">
                <!-- Form -->
                <form class="col-12" action="index.html">
                    <!-- email -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-danger text-white h-100" id="basic-addon1"><i
                                    class="ti-email"></i></span>
                        </div>
                        <input type="text" class="form-control form-control-lg" placeholder="Email Address"
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <!-- pwd -->
                    <div class="row mt-3 pt-3 border-top border-secondary">
                        <div class="col-12">
                            <a class="btn btn-success text-white" href="#" id="to-login" name="action">Back
                                To
                                Login</a>
                            <button class="btn btn-info float-end" type="button" name="action">Recover</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('superAdmin.common_components.footer')
