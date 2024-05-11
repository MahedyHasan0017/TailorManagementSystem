<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.html"
                        aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                            class="hide-menu">ড্যাশবোর্ড</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="order.html"
                        aria-expanded="false"><i class="mdi mdi-calendar-plus"></i><span class="hide-menu">পোষাক অর্ডার
                        </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{ route('order.accepting.view') }}" class="sidebar-link"><i
                                    class="fas fa-angle-right"></i><span class="hide-menu">অর্ডার গ্রহন
                                </span></a></li>
                        <li class="sidebar-item"><a href="{{ route('order.accepting.list') }}" class="sidebar-link"><i
                                    class="fas fa-angle-right"></i><span class="hide-menu">অর্ডার লিস্ট
                                </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="{{ route('add.employee.view') }}" aria-expanded="false"><i class="fas fa-users"></i><span
                            class="hide-menu">কর্মচারী পরিচালনা
                        </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{ route('add.employee.view') }}" class="sidebar-link"><i
                                    class="fas fa-angle-right"></i><span class="hide-menu"> নতুন কর্মচারী যোগ
                                </span></a></li>

                        <li class="sidebar-item"><a href="{{ route('list.employee.view') }}" class="sidebar-link"><i
                                    class="fas fa-angle-right"></i><span class="hide-menu"> কর্মচারী লিস্ট
                                </span></a></li>

                        <li class="sidebar-item"><a href="{{ route('salary.employee.view') }}" class="sidebar-link"><i
                                    class="fas fa-angle-right"></i><span class="hide-menu"> বেতন ব্যবস্থাপনা
                                </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="order.html"
                        aria-expanded="false"><i class="fas fa-envelope"></i><span class="hide-menu">মেসেজ প্রদান
                        </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{ route('sending.message.user.view') }}"
                                class="sidebar-link"><i class="fas fa-angle-right"></i><span class="hide-menu"> মেসেজ
                                    প্রদান
                                </span></a></li>
                        <li class="sidebar-item"><a href="{{ route('sending.message.list.view') }}"
                                class="sidebar-link"><i class="fas fa-angle-right"></i><span class="hide-menu"> মেসেজ
                                    প্রদান
                                    লিস্ট
                                </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="order.html"
                        aria-expanded="false"><i class=" fas fa-calculator"></i><span class="hide-menu">আয় ব্যয় হিসাব
                        </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{ route('income.cost.account.management.view') }}"
                                class="sidebar-link"><i class="fas fa-angle-right"></i><span class="hide-menu">হিসাব
                                    পরিচালনা
                                </span></a></li>

                        <li class="sidebar-item"><a href="{{ route('duration.summary.view') }}" class="sidebar-link"><i
                                    class="fas fa-angle-right"></i><span class="hide-menu">মেয়াদ অনুযায়ী
                                    সার সংক্ষেপ
                                </span></a></li>
                        <li class="sidebar-item"><a href="{{ route('q_duration.summary.view') }}"
                                class="sidebar-link"><i class="fas fa-angle-right"></i><span class="hide-menu"> প্র. খাত
                                    অনুযায়ী
                                    সার সংক্ষেপ
                                </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="order.html"
                        aria-expanded="false"><i class="fas fa-file"></i><span class="hide-menu">রিপোর্ট </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{ route('order.report.view') }}" class="sidebar-link"><i
                                    class="fas fa-angle-right"></i><span class="hide-menu">অর্ডার রিপোর্ট
                                </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="order.html"
                        aria-expanded="false"><i class="fas fa-cog"></i><span class="hide-menu">সেটিংস </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{ route('dress.wages.view') }}" class="sidebar-link"><i
                                    class="fas fa-angle-right"></i><span class="hide-menu"> পোশাকের নাম ও
                                    মুজুরি
                                </span></a></li>
                        <li class="sidebar-item"><a href="{{ route('dress.part.view') }}" class="sidebar-link"><i
                                    class="fas fa-angle-right"></i><span class="hide-menu">
                                    পোশাকের বিভিন্ন অংশ
                                </span></a></li>

                        <li class="sidebar-item"><a href="{{ route('income.cost.view') }}" class="sidebar-link"><i
                                    class="fas fa-angle-right"></i><span class="hide-menu">
                                    আয় ব্যয় এর খাত
                                </span></a></li>

                        <li class="sidebar-item"><a href="{{ route('employee.designation.view') }}"
                                class="sidebar-link"><i class="fas fa-angle-right"></i><span class="hide-menu">
                                    কর্মচারীর পদ/পদবী
                                </span></a></li>

                        <li class="sidebar-item"><a href="{{ route('sms.template.view') }}" class="sidebar-link"><i
                                    class="fas fa-angle-right"></i><span class="hide-menu">SMS টেমপ্লেট
                                </span></a></li>
                        <li class="sidebar-item"><a href="{{route('language.setting.view')}}" class="sidebar-link"><i
                                    class="fas fa-angle-right"></i><span class="hide-menu"> ভাষা সেটিংস
                                </span></a></li>
                    </ul>
                </li>

                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="order.html"
                        aria-expanded="false"><i class="fas fa-file"></i><span class="hide-menu">লগইন/রেজিস্টার
                        </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{ route('auth.admin.login.view') }}"
                                class="sidebar-link"><i class="fas fa-angle-right"></i><span class="hide-menu">লগইন
                                </span></a></li>
                        <li class="sidebar-item"><a href="{{ route('auth.admin.register.view') }}"
                                class="sidebar-link"><i class="fas fa-angle-right"></i><span
                                    class="hide-menu">রেজিস্টার
                                </span></a></li>
                    </ul>
                </li>


                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="order.html"
                        aria-expanded="false"><i class="fas fa-envelope"></i><span class="hide-menu">Permissions
                        </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{ route('permission.vendor.list.view') }}"
                                class="sidebar-link"><i class="fas fa-angle-right"></i><span class="hide-menu"> vendor list
                                </span></a></li>
                        <li class="sidebar-item"><a href="{{ route('permission.employee.list.view') }}"
                                class="sidebar-link"><i class="fas fa-angle-right"></i><span class="hide-menu"> employee list
                                </span></a></li>
                    </ul>
                </li>


                <!-- <li class="sidebar-item"><a href="pages-invoice.html" class="sidebar-link"><i
                            class="mdi mdi-bulletin-board"></i><span class="hide-menu"> ইনভয়েস
                        </span></a></li>
                <li class="sidebar-item"><a href="pages-calendar.html" class="sidebar-link"><i
                            class="mdi mdi-calendar-check"></i><span class="hide-menu"> ক্যালেন্ডার
                        </span></a></li>

                <li class="sidebar-item"><a href="pages-gallery.html" class="sidebar-link"><i
                            class="mdi mdi-multiplication-box"></i><span class="hide-menu"> গ্যালারী
                        </span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-key"></i><span
                            class="hide-menu">লগইন/রেজিস্টার </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="authentication-login.html" class="sidebar-link"><i
                                    class="mdi mdi-all-inclusive"></i><span class="hide-menu"> লগইন </span></a>
                        </li>
                        <li class="sidebar-item"><a href="authentication-register.html" class="sidebar-link"><i
                                    class="mdi mdi-all-inclusive"></i><span class="hide-menu"> রেজিস্টার
                                </span></a></li>
                    </ul>
                </li> -->

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
