@php
    $vendor = Auth::guard('vendor')->user();

@endphp



<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar overflow__y__auto">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
                @if ($vendor == null)
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="order.html"
                            aria-expanded="false"><i class="fas fa-file"></i><span class="hide-menu">লগইন/রেজিস্টার
                            </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="{{ route('auth.vendor.login.view') }}"
                                    class="sidebar-link"><i class="fas fa-angle-right"></i><span class="hide-menu">লগইন
                                    </span></a></li>
                            <li class="sidebar-item"><a href="{{ route('auth.vendor.register.view') }}"
                                    class="sidebar-link"><i class="fas fa-angle-right"></i><span
                                        class="hide-menu">রেজিস্টার
                                    </span></a></li>
                        </ul>
                    </li>
                @else
                    {{-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="index.html" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                class="hide-menu">ড্যাশবোর্ড</span></a></li> --}}

                    @if ($vendor->status == 1)
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="order.html" aria-expanded="false"><i class="mdi mdi-calendar-plus"></i><span
                                    class="hide-menu">পোষাক অর্ডার
                                </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{ route('vendor.order.accepting.view',['id' => $vendor->mobile_number]) }}"
                                        class="sidebar-link"><i class="fas fa-angle-right"></i><span
                                            class="hide-menu">অর্ডার গ্রহন
                                        </span></a>
                                </li>

                                <li class="sidebar-item"><a
                                        href="{{ route('vendor.order.accepting.list', ['mobile_number' => $vendor->mobile_number]) }}"
                                        class="sidebar-link"><i class="fas fa-angle-right"></i><span
                                            class="hide-menu">অর্ডার লিস্ট
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="{{ route('admin.add.employee.view') }}" aria-expanded="false"><i
                                    class="fas fa-users"></i><span class="hide-menu">কর্মচারী পরিচালনা
                                </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{ route('admin.add.employee.view') }}"
                                        class="sidebar-link"><i class="fas fa-angle-right"></i><span class="hide-menu">
                                            নতুন
                                            কর্মচারী যোগ
                                        </span></a></li>

                                <li class="sidebar-item"><a href="{{ route('admin.list.employee.view') }}"
                                        class="sidebar-link"><i class="fas fa-angle-right"></i><span class="hide-menu">
                                            কর্মচারী লিস্ট
                                        </span></a></li>

                                <li class="sidebar-item"><a href="{{ route('admin.salary.employee.view') }}"
                                        class="sidebar-link"><i class="fas fa-angle-right"></i><span class="hide-menu">
                                            বেতন
                                            ব্যবস্থাপনা
                                        </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="order.html" aria-expanded="false"><i class="fas fa-envelope"></i><span
                                    class="hide-menu">মেসেজ প্রদান
                                </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{ route('admin.sending.message.user.view') }}"
                                        class="sidebar-link"><i class="fas fa-angle-right"></i><span class="hide-menu">
                                            মেসেজ
                                            প্রদান
                                        </span></a></li>
                                <li class="sidebar-item"><a href="{{ route('admin.sending.message.list.view') }}"
                                        class="sidebar-link"><i class="fas fa-angle-right"></i><span class="hide-menu">
                                            মেসেজ
                                            প্রদান
                                            লিস্ট
                                        </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="order.html" aria-expanded="false"><i class=" fas fa-calculator"></i><span
                                    class="hide-menu">আয় ব্যয় হিসাব
                                </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a
                                        href="{{ route('admin.income.cost.account.management.view') }}"
                                        class="sidebar-link"><i class="fas fa-angle-right"></i><span
                                            class="hide-menu">হিসাব
                                            পরিচালনা
                                        </span></a></li>

                                <li class="sidebar-item"><a href="{{ route('admin.duration.summary.view') }}"
                                        class="sidebar-link"><i class="fas fa-angle-right"></i><span
                                            class="hide-menu">মেয়াদ অনুযায়ী
                                            সার সংক্ষেপ
                                        </span></a></li>
                                <li class="sidebar-item"><a href="{{ route('admin.q_duration.summary.view') }}"
                                        class="sidebar-link"><i class="fas fa-angle-right"></i><span
                                            class="hide-menu">
                                            প্র. খাত
                                            অনুযায়ী
                                            সার সংক্ষেপ
                                        </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="order.html" aria-expanded="false"><i class="fas fa-file"></i><span
                                    class="hide-menu">রিপোর্ট </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{ route('admin.order.report.view') }}"
                                        class="sidebar-link"><i class="fas fa-angle-right"></i><span
                                            class="hide-menu">অর্ডার রিপোর্ট
                                        </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="order.html" aria-expanded="false"><i class="fas fa-cog"></i><span
                                    class="hide-menu">সেটিংস </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{ route('vendor.settings.dress.info',['id' => Auth::guard('vendor')->user()->mobile_number]) }}"
                                        class="sidebar-link"><i class="fas fa-angle-right"></i><span
                                            class="hide-menu">
                                            পোশাকের নাম ও
                                            মুজুরি
                                        </span></a></li>
                                <li class="sidebar-item"><a href="{{ route('admin.dress.part.view') }}"
                                        class="sidebar-link"><i class="fas fa-angle-right"></i><span
                                            class="hide-menu">
                                            পোশাকের বিভিন্ন অংশ
                                        </span></a></li>

                                <li class="sidebar-item"><a href="{{ route('admin.income.cost.view') }}"
                                        class="sidebar-link"><i class="fas fa-angle-right"></i><span
                                            class="hide-menu">
                                            আয় ব্যয় এর খাত
                                        </span></a></li>

                                <li class="sidebar-item"><a href="{{ route('admin.employee.designation.view') }}"
                                        class="sidebar-link"><i class="fas fa-angle-right"></i><span
                                            class="hide-menu">
                                            কর্মচারীর পদ/পদবী
                                        </span></a></li>

                                <li class="sidebar-item"><a href="{{ route('admin.sms.template.view') }}"
                                        class="sidebar-link"><i class="fas fa-angle-right"></i><span
                                            class="hide-menu">SMS টেমপ্লেট
                                        </span></a></li>
                                <li class="sidebar-item"><a href="{{ route('admin.language.setting.view') }}"
                                        class="sidebar-link"><i class="fas fa-angle-right"></i><span
                                            class="hide-menu">
                                            ভাষা সেটিংস
                                        </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="order.html" aria-expanded="false"><i class="fas fa-envelope"></i><span
                                    class="hide-menu">Employee
                                </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">

                                <li class="sidebar-item"><a
                                        href="{{ route('vendor.employee.register.view', ['mobile' => Auth::guard('vendor')->user()->mobile_number]) }}"
                                        class="sidebar-link"><i class="fas fa-angle-right"></i><span
                                            class="hide-menu">
                                            register a employee
                                        </span></a></li>

                                <li class="sidebar-item"><a
                                        href="{{ route('vendor.permission.employee.list.view', ['mobile' => Auth::guard('vendor')->user()->mobile_number]) }}"
                                        class="sidebar-link"><i class="fas fa-angle-right"></i><span
                                            class="hide-menu">
                                            employee list
                                        </span></a></li>
                            </ul>
                        </li>
                    @endif
                @endif

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
