@extends('layouts.master-without-nav')
@section('title')
@lang('translation.signin')
@endsection
@section('content')

<section class="auth-page-wrapper py-5 position-relative d-flex align-items-center justify-content-center min-vh-100 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row g-0">
                            <div class="col-lg-5">
                                <div class="card auth-card bg-primary h-100 border-0 shadow-none p-sm-3 overflow-hidden mb-0">
                                    <div class="card-body p-4 d-flex justify-content-between flex-column">
                                        <div class="auth-image mb-3">
                                            <!-- <img src="{{ asset('build/images/logo-light-full.png') }}" alt="" height="26" />
                                            <img src="{{ asset('build/images/effect-pattern/auth-effect-2.png') }}" alt="" class="auth-effect-2" /> -->
                                            <img src="{{ asset('build/images/effect-pattern/auth-effect.png') }}" alt="" class="auth-effect" />
                                            <img src="{{ asset('build/images/effect-pattern/auth-effect.png') }}" alt="" class="auth-effect-3" />
                                        </div>

                                        <div>
                                            <h3 class="text-white">Comienza tu viaje con nosotros.</h3>
                                            <p class="text-white-75 fs-15">Empleador: Busca y selecciona talentos universitarios.</p>
                                            <p class="text-white-75 fs-15">Egresado: Prepara tu carrera profesional.</p>
                                        </div>
                                        <div class="text-center text-white-75">
                                            <p class="mb-0">&copy;
                                                <script>
                                                    document.write(new Date().getFullYear())

                                                </script> BTEU. Elaborado con <i class="mdi mdi-heart text-danger"></i> by DevSoft
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-7">
                                <div class="card mb-0 border-0 shadow-none">
                                    <div class="card-body px-0 p-sm-5 m-lg-4">
                                        <div class="text-center mt-2">
                                            <h5 class="text-primary fs-20">Bienvenido!</h5>
                                            <p class="text-muted">Inicia sesión para continuar en BTEU.</p>
                                        </div>
                                        <div class="p-2 mt-5">
                                            <form action="{{ route('login')}}" method="post">
                                                @csrf

                                                <div class="mb-3">
                                                    <label for="username" class="form-label">Usuario</label>
                                                    <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', '') }}" id="username" name="email" placeholder="Ingrese el nombre de usuario">
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <div class="float-end">
                                                        <a href="auth-pass-reset" class="text-muted">
                                                        Has olvidado tu contraseña?</a>
                                                    </div>
                                                    <label class="form-label" for="password-input">Contraseña <span class="text-danger">*</span></label>
                                                    <div class="position-relative auth-pass-inputgroup mb-3">
                                                        <input type="password" class="form-control password-input pe-5 @error('password') is-invalid @enderror" name="password" placeholder="Introduce la contraseña" id="password-input" value="">
                                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                                    <label class="form-check-label" for="auth-remember-check">Recuerdame</label>
                                                </div>

                                                <div class="mt-4">
                                                    <button class="btn btn-primary w-100" type="submit">Iniciar sesión</button>
                                                </div>

                                                <!-- <div class="mt-4 pt-2 text-center">
                                                    <div class="signin-other-title">
                                                        <h5 class="fs-13 mb-4 title">Sign In with</h5>
                                                    </div>
                                                    <div class="pt-2 hstack gap-2 justify-content-center">
                                                        <button type="button" class="btn btn-soft-primary btn-icon"><i class="ri-facebook-fill fs-16"></i></button>
                                                        <button type="button" class="btn btn-soft-danger btn-icon"><i class="ri-google-fill fs-16"></i></button>
                                                        <button type="button" class="btn btn-soft-dark btn-icon"><i class="ri-github-fill fs-16"></i></button>
                                                        <button type="button" class="btn btn-soft-info btn-icon"><i class="ri-twitter-fill fs-16"></i></button>
                                                    </div>
                                                </div> -->
                                            </form>

                                            <div class="text-center mt-5">
                                                <p class="mb-0">No tienes cuenta? <a href="register" class="fw-semibold text-secondary text-decoration-underline">
                                                    Registrarse     </a> </p>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
@endsection
@section('script')
<script src="{{ asset('js/pages/password-addon.init.js') }}"></script>

@endsection
