

@php
    
dd('this is from vendor main') ; 
@endphp


@include('.vendor/common_components/header')

@include('.vendor/common_components/sidebar')

@yield('content')  


@include('./vendor.common_components.footer')



