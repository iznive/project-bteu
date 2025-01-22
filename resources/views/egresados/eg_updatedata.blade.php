@extends('layouts.master')
@section('title')
    @lang('translation.dashboards')
@endsection
@section('css')
    <link href="{{ asset('libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                {{--  <div class="card-header">
                    <button type="button" class="btn-close float-end fs-11" aria-label="Close"></button>
                    <h6 class="card-title mb-0">Informacion general</h6>
                </div> --}}
                <div class="card-body p-4 text-center">
                    <div class="mx-auto avatar-md mb-3">
                        <img src="@if (Auth::user()->avatar) {{ asset('storage/images/users/' . Auth::user()->avatar) }} @else {{ asset('build/images/users/avatar-1.jpg') }} @endif"
                            alt="" class="img-fluid rounded-circle">
                    </div>
                    <h5 class="card-title mb-1">Nombre Completo</h5>
                    <p class="text-muted mb-0">Carrera</p>

                    <table class="table" style="text-align: left;">
                        <tr>
                            <th colspan="2">
                                <hr />
                                Información general
                            </th>
                        </tr>
                        <tr>
                            <td>Nombre Completo</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Edad</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Domicilio</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Teléfono</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Correo electrónico</td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>Facebook</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Sede de estudio</td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>Carrera</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Año de egreso</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Modalidad de Titulación</td>
                            <td></td>
                        </tr>

                    </table>
                </div>
                <div class="card-footer text-center">
                    <button class="btn btn-primary btn-md">Actualizar</button>
                </div>
            </div>
        </div><!-- end col -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn-close float-end fs-11" aria-label="Close"></button>
                    <h6 class="card-title mb-0">Informacion general</h6>
                </div>
                <div class="card-body p-4 text-center">
                    <table class="table">
                        <tr>
                            <td>Correo Electrónico <span class="symbol required"></span></td>
                            <td>
                                <input required id="TeAlu_Correo" name="TeAlu_Correo" value="" type="email"
                                    placeholder="frank.alvarez@gmail.com" class="form-control" />
                            </td>
                        </tr>
                        <tr>
                            <td>Correo Electrónico <span class="symbol required"></span></td>
                            <td>
                                <input required id="TeAlu_Correo" name="TeAlu_Correo" value="" type="email"
                                    placeholder="frank.alvarez@gmail.com" class="form-control" />
                            </td>
                        </tr>
                        <tr>
                            <td>Correo Electrónico <span class="symbol required"></span></td>
                            <td>
                                <input required id="TeAlu_Correo" name="TeAlu_Correo" value="" type="email"
                                    placeholder="frank.alvarez@gmail.com" class="form-control" />
                            </td>
                        </tr>
                        
                        
                    </table>
                </div>
            </div>
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
