@extends('layouts.master')
@section('title')
@lang('translation.dashboards')
@endsection
@section('css')
<link href="{{ asset('libs/jsvectormap/jsvectormap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('libs/swiper/swiper-bundle.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')


@endsection

@section('script')
<!-- apexcharts -->
<script src="{{ asset('libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('libs/jsvectormap/jsvectormap.min.js') }}"></script>
<script src="{{ asset('libs/jsvectormap/maps/world-merc.js') }}"></script>
<script src="{{ asset('libs/swiper/swiper-bundle.min.js')}}"></script>

<!-- dashboard init -->
<script src="{{ asset('libs/list.js/list.min.js') }}"></script>
<script src="{{ asset('js/pages/dashboard-ecommerce.init.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
@endsection
