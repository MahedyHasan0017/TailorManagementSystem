


@include('.vendor/common_components/header')

@include('.vendor/common_components/sidebar')

@yield('content')  


@include('./vendor.common_components.footer')

@stack('scripts')

