<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TailorShop</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: "Poppins", sans-serif;
        }

        ul {
            background: lightblue;
            margin-bottom: 15px;
        }

        li {
            background: #eee;
            margin-bottom: 5px;
            padding: 3px 5px;
            border-radius: 5px;
        }
    </style>
</head>

<body>


    <div class="routes__list">
        <div>
            <h2>Route Lists</h2>
        </div>
        <div>
            <div class="mb-5">
                <h4>
                    Route-1
                </h4>
                <ul>
                    <li>group route with prefix : no-prefix</li>
                    <ul>
                        <li>
                            <span>route-url : </span> Route::get('/')
                        </li>
                        <li>
                            <span>route-name : </span> 'dashboard'
                        </li>
                        <li><span>controllerName : </span> N/A</li>
                        <li><span>methodName : </span> callBackFunction in "/" request</li>
                    </ul>
                </ul>
            </div>
            <div>
                <h4>
                    Route-2
                </h4>
                <ul>
                    <li>group route with prefix : ['prefix' => 'cloth'] </li>
                    <ul>
                        <li>
                            <span>route-url : </span> Route::get('/cloth/order/accepting')
                        </li>
                        <li>
                            <span>route-name : </span> 'order.accepting.view'
                        </li>
                        <li><span>controllerName : </span> OrderAccepting</li>
                        <li><span>methodName : </span> order_accepting</li>
                    </ul>
                </ul>
            </div>
            <div>
                <h4>
                    Route-3
                </h4>
                <ul>
                    <li>group route with prefix : ['prefix' => 'cloth'] </li>
                    <ul>
                        <li>
                            <span>route-url : </span> Route::get('/cloth/order/accepted/list')
                        </li>
                        <li>
                            <span>route-name : </span> 'order.accepting.list'
                        </li>
                        <li><span>controllerName : </span> OrderAccepting</li>
                        <li><span>methodName : </span> order_accepted_list</li>
                    </ul>
                </ul>
            </div>

            <div>
                <h4>
                    Route-4
                </h4>
                <ul>
                    <ul>
                        <h5>
                            Route-4.1
                        </h5>
                        <li class="">
                            group route with prefix : ['prefix' => 'auth']
                            <ul>
                                <li> group route with prefix : ['prefix' => 'admin'] </li>
                                <li>
                                    <span>route-url : </span> Route::get('/auth/admin/login')
                                </li>
                                <li>
                                    <span>route-name : </span> 'auth.admin.login.view'
                                </li>
                                <li><span>controllerName : </span> AdminController</li>
                                <li><span>methodName : </span> login</li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <h5>
                            Route-4.2
                        </h5>
                        <li class="">
                            group route with prefix : ['prefix' => 'auth']
                            <ul>
                                <li> group route with prefix : ['prefix' => 'admin'] </li>
                                <li>
                                    <span>route-url : </span> Route::post('/auth/admin/login/store')
                                </li>
                                <li>
                                    <span>route-name : </span> 'auth.admin.login.store'
                                </li>
                                <li><span>controllerName : </span> AdminController</li>
                                <li><span>methodName : </span> login_store</li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <h5>
                            Route-4.3
                        </h5>
                        <li class="">
                            group route with prefix : ['prefix' => 'auth']
                            <ul>
                                <li> group route with prefix : ['prefix' => 'admin'] </li>
                                <li>
                                    <span>route-url : </span> Route::get('/auth/admin/register')
                                </li>
                                <li>
                                    <span>route-name : </span> 'auth.admin.register.view'
                                </li>
                                <li><span>controllerName : </span> AdminController</li>
                                <li><span>methodName : </span> register</li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <h5>
                            Route-4.4
                        </h5>
                        <li class="">
                            group route with prefix : ['prefix' => 'auth']
                            <ul>
                                <li> group route with prefix : ['prefix' => 'admin'] </li>
                                <li>
                                    <span>route-url : </span> Route::post('/auth/admin/register/store')
                                </li>
                                <li>
                                    <span>route-name : </span> 'auth.admin.register.store'
                                </li>
                                <li><span>controllerName : </span> AdminController</li>
                                <li><span>methodName : </span> register_store</li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <h5>
                            Route-4.5
                        </h5>
                        <li class="">
                            group route with prefix : ['prefix' => 'auth']
                            <ul>
                                <li> group route with prefix : ['prefix' => 'admin'] </li>
                                <li>
                                    <span>route-url : </span> Route::get('/auth/admin/recovery/password')
                                </li>
                                <li>
                                    <span>route-name : </span> 'auth.admin.recovery.password'
                                </li>
                                <li><span>controllerName : </span> AdminController</li>
                                <li><span>methodName : </span> recovery_password</li>
                            </ul>
                        </li>
                    </ul>

                    <ul>
                        <h5>
                            Route-4.6
                        </h5>
                        <li class="">
                            group route with prefix : ['prefix' => 'auth']
                            <ul>
                                <li> group route with prefix : ['prefix' => 'admin'] </li>
                                <li>
                                    <span>route-url : </span> Route::post('/auth/admin/recovery/password/store')
                                </li>
                                <li>
                                    <span>route-name : </span> 'auth.admin.recovery.password.store'
                                </li>
                                <li><span>controllerName : </span> AdminController</li>
                                <li><span>methodName : </span> recovery_password_store</li>
                            </ul>
                        </li>
                    </ul>

                    <ul>
                        <h5>
                            Route-4.7
                        </h5>
                        <li class="">
                            group route with prefix : ['prefix' => 'auth']
                            <ul>
                                <li> group route with prefix : ['prefix' => 'admin'] </li>
                                <li>
                                    <span>route-url : </span> Route::post('/auth/admin/logout')
                                </li>
                                <li>
                                    <span>route-name : </span> 'auth.admin.logout'
                                </li>
                                <li><span>controllerName : </span> AdminController</li>
                                <li><span>methodName : </span> admin_logout</li>
                            </ul>
                        </li>
                    </ul>

                    {{-- <ul>
                        <li>
                            <span>route-url : </span> Route::get('/cloth/order/accepted/list')
                        </li>
                        <li>
                            <span>route-name : </span> 'order.accepting.list'
                        </li>
                        <li><span>controllerName : </span> OrderAccepting</li>
                        <li><span>methodName : </span> order_accepted_list</li>
                    </ul> --}}
                </ul>
            </div>

            <div>
                <h4>
                    Route-5
                </h4>
                <ul>
                    <ul>
                        <h5>
                            Route-5.1
                        </h5>
                        <li class="">
                            group route with prefix : ['prefix' => 'auth']
                            <ul>
                                <li> group route with prefix : ['prefix' => 'vendor'] </li>
                                <li>
                                    <span>route-url : </span> Route::get('/auth/vendor/login')
                                </li>
                                <li>
                                    <span>route-name : </span> 'auth.vendor.login.view'
                                </li>
                                <li><span>controllerName : </span> VendorController</li>
                                <li><span>methodName : </span> login</li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <h5>
                            Route-5.2
                        </h5>
                        <li class="">
                            group route with prefix : ['prefix' => 'auth']
                            <ul>
                                <li> group route with prefix : ['prefix' => 'vendor'] </li>
                                <li>
                                    <span>route-url : </span> Route::post('/auth/vendor/login/store')
                                </li>
                                <li>
                                    <span>route-name : </span> 'auth.vendor.login.store'
                                </li>
                                <li><span>controllerName : </span> VendorController</li>
                                <li><span>methodName : </span> login_store</li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <h5>
                            Route-5.3
                        </h5>
                        <li class="">
                            group route with prefix : ['prefix' => 'auth']
                            <ul>
                                <li> group route with prefix : ['prefix' => 'vendor'] </li>
                                <li>
                                    <span>route-url : </span> Route::get('/auth/vendor/register')
                                </li>
                                <li>
                                    <span>route-name : </span> 'auth.vendor.register.view'
                                </li>
                                <li><span>controllerName : </span> VendorController</li>
                                <li><span>methodName : </span> register</li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <h5>
                            Route-5.4
                        </h5>
                        <li class="">
                            group route with prefix : ['prefix' => 'auth']
                            <ul>
                                <li> group route with prefix : ['prefix' => 'vendor'] </li>
                                <li>
                                    <span>route-url : </span> Route::post('/auth/vendor/register/store')
                                </li>
                                <li>
                                    <span>route-name : </span> 'auth.vendor.register.store'
                                </li>
                                <li><span>controllerName : </span> VendorController</li>
                                <li><span>methodName : </span> register_store</li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <h5>
                            Route-5.5
                        </h5>
                        <li class="">
                            group route with prefix : ['prefix' => 'auth']
                            <ul>
                                <li> group route with prefix : ['prefix' => 'vendor'] </li>
                                <li>
                                    <span>route-url : </span> Route::get('/auth/vendor/recovery/password')
                                </li>
                                <li>
                                    <span>route-name : </span> 'auth.vendor.recovery.password'
                                </li>
                                <li><span>controllerName : </span> VendorController</li>
                                <li><span>methodName : </span> recovery_password</li>
                            </ul>
                        </li>
                    </ul>

                    <ul>
                        <h5>
                            Route-5.6
                        </h5>
                        <li class="">
                            group route with prefix : ['prefix' => 'auth']
                            <ul>
                                <li> group route with prefix : ['prefix' => 'vendor'] </li>
                                <li>
                                    <span>route-url : </span> Route::post('/auth/vendor/recovery/password/store')
                                </li>
                                <li>
                                    <span>route-name : </span> 'auth.vendor.recovery.password.store'
                                </li>
                                <li><span>controllerName : </span> VendorController</li>
                                <li><span>methodName : </span> recovery_password_store</li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <h5>
                            Route-5.7
                        </h5>
                        <li class="">
                            group route with prefix : ['prefix' => 'auth']
                            <ul>
                                <li> group route with prefix : ['prefix' => 'vendor'] </li>
                                <li>
                                    <span>route-url : </span> Route::post('/auth/vendor/logout')
                                </li>
                                <li>
                                    <span>route-name : </span> 'auth.vendor.logout'
                                </li>
                                <li><span>controllerName : </span> VendorController</li>
                                <li><span>methodName : </span> vendor_logout</li>
                            </ul>
                        </li>
                    </ul>
                </ul>
            </div>



            <div>
                <h4>
                    Route-6
                </h4>
                <ul>
                    <ul>
                        <h5>
                            Route-6.1
                        </h5>
                        <li class="">
                            group route with prefix : ['prefix' => 'auth']
                            <ul>
                                <li> group route with prefix : ['prefix' => 'employee'] </li>
                                <li>
                                    <span>route-url : </span> Route::get('/auth/employee/login')
                                </li>
                                <li>
                                    <span>route-name : </span> 'auth.employee.login.view'
                                </li>
                                <li><span>controllerName : </span> EmployeeController</li>
                                <li><span>methodName : </span> login</li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <h5>
                            Route-6.2
                        </h5>
                        <li class="">
                            group route with prefix : ['prefix' => 'auth']
                            <ul>
                                <li> group route with prefix : ['prefix' => 'employee'] </li>
                                <li>
                                    <span>route-url : </span> Route::post('/auth/employee/login/store')
                                </li>
                                <li>
                                    <span>route-name : </span> 'auth.employee.login.store'
                                </li>
                                <li><span>controllerName : </span> EmployeeController</li>
                                <li><span>methodName : </span> login_store</li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <h5>
                            Route-6.3
                        </h5>
                        <li class="">
                            group route with prefix : ['prefix' => 'auth']
                            <ul>
                                <li> group route with prefix : ['prefix' => 'employee'] </li>
                                <li>
                                    <span>route-url : </span> Route::get('/auth/employee/register')
                                </li>
                                <li>
                                    <span>route-name : </span> 'auth.employee.register.view'
                                </li>
                                <li><span>controllerName : </span> EmployeeController</li>
                                <li><span>methodName : </span> register</li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <h5>
                            Route-6.4
                        </h5>
                        <li class="">
                            group route with prefix : ['prefix' => 'auth']
                            <ul>
                                <li> group route with prefix : ['prefix' => 'employee'] </li>
                                <li>
                                    <span>route-url : </span> Route::post('/auth/employee/register/store')
                                </li>
                                <li>
                                    <span>route-name : </span> 'auth.employee.register.store'
                                </li>
                                <li><span>controllerName : </span> EmployeeController</li>
                                <li><span>methodName : </span> register_store</li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <h5>
                            Route-6.5
                        </h5>
                        <li class="">
                            group route with prefix : ['prefix' => 'auth']
                            <ul>
                                <li> group route with prefix : ['prefix' => 'employee'] </li>
                                <li>
                                    <span>route-url : </span> Route::get('/auth/employee/recovery/password')
                                </li>
                                <li>
                                    <span>route-name : </span> 'auth.employee.recovery.password'
                                </li>
                                <li><span>controllerName : </span> EmployeeController</li>
                                <li><span>methodName : </span> recovery_password</li>
                            </ul>
                        </li>
                    </ul>

                    <ul>
                        <h5>
                            Route-6.6
                        </h5>
                        <li class="">
                            group route with prefix : ['prefix' => 'auth']
                            <ul>
                                <li> group route with prefix : ['prefix' => 'employee'] </li>
                                <li>
                                    <span>route-url : </span> Route::post('/auth/employee/recovery/password/store')
                                </li>
                                <li>
                                    <span>route-name : </span> 'auth.employee.recovery.password.store'
                                </li>
                                <li><span>controllerName : </span> EmployeeController</li>
                                <li><span>methodName : </span> recovery_password_store</li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <h5>
                            Route-6.7
                        </h5>
                        <li class="">
                            group route with prefix : ['prefix' => 'auth']
                            <ul>
                                <li> group route with prefix : ['prefix' => 'employee'] </li>
                                <li>
                                    <span>route-url : </span> Route::post('/auth/employee/logout')
                                </li>
                                <li>
                                    <span>route-name : </span> 'auth.employee.logout'
                                </li>
                                <li><span>controllerName : </span> EmployeeController</li>
                                <li><span>methodName : </span> employee_logout</li>
                            </ul>
                        </li>
                    </ul>
                </ul>
            </div>



            <div>
                <h4>
                    Route-7
                </h4>
                <ul>
                    <li>group route with prefix : ['prefix' => 'employee_management'] </li>
                    <ul>
                        <li>
                            <span>route-url : </span> Route::get('/employee_management/add/employee')
                        </li>
                        <li>
                            <span>route-name : </span> 'add.employee.view'
                        </li>
                        <li><span>controllerName : </span> AddEmployeeController</li>
                        <li><span>methodName : </span> add_employee</li>
                    </ul>
                </ul>
            </div>


            <div>
                <h4>
                    Route-8
                </h4>
                <ul>
                    <li>group route with prefix : ['prefix' => 'employee_management'] </li>
                    <ul>
                        <li>
                            <span>route-url : </span> Route::get('/employee_management/list/employee')
                        </li>
                        <li>
                            <span>route-name : </span> 'list.employee.view'
                        </li>
                        <li><span>controllerName : </span> ListEmployeeController</li>
                        <li><span>methodName : </span> list_employee</li>
                    </ul>
                </ul>
            </div>


            <div>
                <h4>
                    Route-9
                </h4>
                <ul>
                    <li>group route with prefix : ['prefix' => 'employee_management'] </li>
                    <ul>
                        <li>
                            <span>route-url : </span> Route::get('/employee_management/salary/employee')
                        </li>
                        <li>
                            <span>route-name : </span> 'salary.employee.view'
                        </li>
                        <li><span>controllerName : </span> SalaryEmployeeController</li>
                        <li><span>methodName : </span> salary_management_employee</li>
                    </ul>
                </ul>
            </div>


            <div>
                <h4>
                    Route-10
                </h4>
                <ul>
                    <li>group route with prefix : ['prefix' => 'sending_message'] </li>
                    <ul>
                        <li>
                            <span>route-url : </span> Route::get('/sending_message/user')
                        </li>
                        <li>
                            <span>route-name : </span> 'sending.message.user.view'
                        </li>
                        <li><span>controllerName : </span> SendingMessageController</li>
                        <li><span>methodName : </span> sending_message_user</li>
                    </ul>
                </ul>
            </div>

            <div>
                <h4>
                    Route-11
                </h4>
                <ul>
                    <li>group route with prefix : ['prefix' => 'sending_message'] </li>
                    <ul>
                        <li>
                            <span>route-url : </span> Route::get('/sending_message/user/list')
                        </li>
                        <li>
                            <span>route-name : </span> 'sending.message.list.view'
                        </li>
                        <li><span>controllerName : </span> SendingMessageListController</li>
                        <li><span>methodName : </span> sending_message_list</li>
                    </ul>
                </ul>
            </div>


            <div>
                <h4>
                    Route-12
                </h4>
                <ul>
                    <li>group route with prefix : ['prefix' => 'income_cost'] </li>
                    <ul>
                        <li>
                            <span>route-url : </span> Route::get('/income_cost/account/management')
                        </li>
                        <li>
                            <span>route-name : </span> 'income.cost.account.management.view'
                        </li>
                        <li><span>controllerName : </span> AccountManagementController</li>
                        <li><span>methodName : </span> account_management</li>
                    </ul>
                </ul>
            </div>


            <div>
                <h4>
                    Route-13
                </h4>
                <ul>
                    <li>group route with prefix : ['prefix' => 'income_cost'] </li>
                    <ul>
                        <li>
                            <span>route-url : </span> Route::get('/income_cost/duration/summary')
                        </li>
                        <li>
                            <span>route-name : </span> 'duration.summary.view'
                        </li>
                        <li><span>controllerName : </span> DurationSummaryController</li>
                        <li><span>methodName : </span> duration_summary</li>
                    </ul>
                </ul>
            </div>


            <div>
                <h4>
                    Route-14
                </h4>
                <ul>
                    <li>group route with prefix : ['prefix' => 'income_cost'] </li>
                    <ul>
                        <li>
                            <span>route-url : </span> Route::get('/income_cost/q/duration/summary')
                        </li>
                        <li>
                            <span>route-name : </span> 'q_duration.summary.view'
                        </li>
                        <li><span>controllerName : </span> QSectorController</li>
                        <li><span>methodName : </span> q_duration_summary</li>
                    </ul>
                </ul>
            </div>



            <div>
                <h4>
                    Route-15
                </h4>
                <ul>
                    <li>group route with prefix : ['prefix' => 'report'] </li>
                    <ul>
                        <li>
                            <span>route-url : </span> Route::get('/report/order')
                        </li>
                        <li>
                            <span>route-name : </span> 'order.report.view'
                        </li>
                        <li><span>controllerName : </span> OrderReportController</li>
                        <li><span>methodName : </span> order_report</li>
                    </ul>
                </ul>
            </div>



            <div>
                <h4>
                    Route-16
                </h4>
                <ul>
                    <li>group route with prefix : ['prefix' => 'settings'] </li>
                    <ul>
                        <li>
                            <span>route-url : </span> Route::get('/settings/dress/wages')
                        </li>
                        <li>
                            <span>route-name : </span> 'dress.wages.view'
                        </li>
                        <li><span>controllerName : </span> DressWagesController</li>
                        <li><span>methodName : </span> dress_wages</li>
                    </ul>
                </ul>
            </div>

            <div>
                <h4>
                    Route-17
                </h4>
                <ul>
                    <li>group route with prefix : ['prefix' => 'settings'] </li>
                    <ul>
                        <li>
                            <span>route-url : </span> Route::get('/settings/dress/part')
                        </li>
                        <li>
                            <span>route-name : </span> 'dress.part.view'
                        </li>
                        <li><span>controllerName : </span> DressPartController</li>
                        <li><span>methodName : </span> dress_part</li>
                    </ul>
                </ul>
            </div>

            <div>
                <h4>
                    Route-18
                </h4>
                <ul>
                    <li>group route with prefix : ['prefix' => 'settings'] </li>
                    <ul>
                        <li>
                            <span>route-url : </span> Route::get('/settings/income/cost')
                        </li>
                        <li>
                            <span>route-name : </span> 'income.cost.view'
                        </li>
                        <li><span>controllerName : </span> IncomeCostSectorController</li>
                        <li><span>methodName : </span> income_cost</li>
                    </ul>
                </ul>
            </div>

            <div>
                <h4>
                    Route-19
                </h4>
                <ul>
                    <li>group route with prefix : ['prefix' => 'settings'] </li>
                    <ul>
                        <li>
                            <span>route-url : </span> Route::get('/settings/employee/designation')
                        </li>
                        <li>
                            <span>route-name : </span> 'employee.designation.view'
                        </li>
                        <li><span>controllerName : </span> EmployeeDesignationController</li>
                        <li><span>methodName : </span> employee_designation</li>
                    </ul>
                </ul>
            </div>

            <div>
                <h4>
                    Route-20
                </h4>
                <ul>
                    <li>group route with prefix : ['prefix' => 'settings'] </li>
                    <ul>
                        <li>
                            <span>route-url : </span> Route::get('/settings/sms/template')
                        </li>
                        <li>
                            <span>route-name : </span> 'sms.template.view'
                        </li>
                        <li><span>controllerName : </span> SmsTemplateController</li>
                        <li><span>methodName : </span> sms_template</li>
                    </ul>
                </ul>
            </div>


            <div>
                <h4>
                    Route-21
                </h4>
                <ul>
                    <li>group route with prefix : ['prefix' => 'settings'] </li>
                    <ul>
                        <li>
                            <span>route-url : </span> Route::get('/settings/language')
                        </li>
                        <li>
                            <span>route-name : </span> 'language.setting.view'
                        </li>
                        <li><span>controllerName : </span> LanguageSettingsController</li>
                        <li><span>methodName : </span> language_setting</li>
                    </ul>
                </ul>
            </div>

        </div>
    </div>

    <div class="middleware__list">
        <div>
            <h2>Middleware Lists</h2>
        </div>
        <div>
            <div class="mb-5">
                <h4>
                    Middleware-1
                </h4>
                <ul>
                    <li>Middleware Name : Admin</li>
                    <ul>
                        <li>
                            <span>kernel : </span> 'admin' => \App\Http\Middleware\Admin::class,
                        </li>

                    </ul>
                </ul>
            </div>
            <div>
                <h4>
                    Middleware-2
                </h4>
                <ul>
                    <li>Middleware Name : Vendor</li>
                    <ul>
                        <li>
                            <span>kernel : </span> 'vendor' => \App\Http\Middleware\Vendor::class,
                        </li>

                    </ul>
                </ul>
            </div>
            <div>
                <h4>
                    Middleware-3
                </h4>
                <ul>
                    <li>Middleware Name : Employee</li>
                    <ul>
                        <li>
                            <span>kernel : </span> 'employee' => \App\Http\Middleware\Employee::class,
                        </li>

                    </ul>
                </ul>
            </div>
        </div>
    </div>

    <div class="guard__list">

    </div>


</body>

</html>
