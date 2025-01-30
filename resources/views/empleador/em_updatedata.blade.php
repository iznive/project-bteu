@extends('layouts.master')
@section('title')
@lang('translation.dashboards')
@endsection
@section('css')
<link href="{{ asset('libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')


<div class="row">
    <div class="col">
        <div class="h-100">
            <div class="row">
                <div class="col-xl-4">
                    <div class="row">

                            <!-- card -->
                            <h5>empleador</h5>
                            <!-- endcard -->

                    </div> <!-- end row-->
                </div>
            </div>

        </div> <!-- end .h-100-->

    </div> <!-- end col -->
</div>

@endsection

@section('script')
<script src="{{ asset('libs/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('libs/dropzone/dropzone-min.js') }}"></script>
<script src="{{ asset('js/pages/form-file-upload.init.js') }}"></script>

<!-- dashboard init -->
<script src="{{ asset('libs/list.js/list.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>

@endsection
