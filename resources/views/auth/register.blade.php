@extends('layouts.master-without-nav')
@section('title')
    @lang('translation.signup')
@endsection
@section('content')
    <section
        class="auth-page-wrapper py-5 position-relative d-flex align-items-center justify-content-center min-vh-100 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row g-0">
                                <div class="col-lg-5">
                                    <div class="auth-card card bg-primary h-100 border-0 shadow-none p-sm-3 overflow-hidden">
                                        <div class="card-body p-4 d-flex justify-content-between flex-column">
                                            <div class="auth-image">
                                                <!-- <img src="{{ asset('images/logo-light-full.png') }}" alt="" height="26" />
                                                <img src="{{ asset('images/effect-pattern/auth-effect-2.png') }}" alt="" -->
                                                    <!-- class="auth-effect-2" /> -->
                                                <img src="{{ asset('images/effect-pattern/auth-effect.png') }}" alt=""
                                                    class="auth-effect" />
                                                <img src="{{ asset('images/effect-pattern/auth-effect.png') }}" alt=""
                                                    class="auth-effect-3" />
                                            </div>

                                            <div>
                                                <h3 class="text-white">Comienza tu viaje con nosotros.</h3>
                                                <p class="text-white-75 fs-15">Empleador : Busca y selecciona talentos universitarios.</p>
                                                <p class="text-white-75 fs-15">Egresado: Prepara tu carrera profesional.</p>
                                            </div>
                                            <div class="text-center text-white-75">
                                                <p class="mb-0">&copy;
                                                    <script>
                                                        document.write(new Date().getFullYear())
                                                    </script> BTEU. Creado por <i
                                                        class="mdi mdi-heart text-danger"></i> by DevSoft
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-7">
                                    <div class="card mb-0 border-0 py-3 shadow-none">
                                        <div class="card-body px-0 p-sm-5 m-lg-4">
                                            <div class="text-center mt-2">
                                                <h5 class="text-primary fs-20">Crear nueva cuenta </h5>
                                                <p class="text-muted">Obtenga su cuenta BTEU ahora</p>
                                            </div>
                                            <div class="p-2 mt-5">
                                                <form class="needs-validation" novalidate method="POST"
                                                    action="{{ route('register') }}" enctype="multipart/form-data">
                                                    @csrf

                                                    <!-- Base Radios -->
                                                    <div class="mb-4">
                                                        <label for="FK_Perfil" class="form-label">¿Que soy? <span
                                                        class="text-danger">*</span></label>
                                                        <select class="form-select mb-3" id="FK_Perfil"  name="FK_Perfil" aria-label="Default select example" required>
                                                             <option value=""  selected ></option>
                                                            <!-- <option value="1">Administrador</option> -->
                                                            <option value="1">Administrador</option>
                                                            <option value="2">Egresado</option>
                                                            <option value="3">Empleador</option>
                                                        </select>
                                                        @error('FK_Perfil')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        <div class="invalid-feedback">
                                                        Por favor ingrese quien eres
                                                        </div>
                                                    </div>


                                                    <div class="mb-3">
                                                        <label for="useremail" class="form-label">Correo <span
                                                                class="text-danger">*</span></label>
                                                        <input type="email"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            name="email" value="{{ old('email') }}" id="useremail"
                                                            placeholder="Introduzca la dirección de correo electrónico" required>
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        <div class="invalid-feedback">
                                                        Por favor ingrese el correo electrónico
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="username" class="form-label">Nombre de usuario
                                                        <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text"
                                                            class="form-control @error('name') is-invalid @enderror"
                                                            name="name" value="{{ old('name') }}" id="username"
                                                            placeholder="Ingrese el nombre de usuario" required>
                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        <div class="invalid-feedback">
                                                        Por favor ingrese el nombre de usuario
                                                        </div>
                                                    </div>
                                                    <div class="mb-2">
                                                        <label for="password-input" class="form-label">Contraseña <span
                                                                class="text-danger">*</span></label>
                                                        <div class="position-relative auth-pass-inputgroup">
                                                            <input type="password"
                                                                class="form-control pe-5 password-input @error('password') is-invalid @enderror"
                                                                name="password" onpaste="return false"
                                                                placeholder="Introduce la contraseña" id="password-input"
                                                                placeholder="Introduce la contraseña" required>
                                                            <button
                                                                class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                                type="button" id="password-addon"><i
                                                                    class="ri-eye-fill align-middle"></i></button>
                                                            @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="mb-2">
                                                        <label for="password-confirm" class="form-label">Confirmar contraseña <span
                                                                class="text-danger">*</span></label>
                                                        <div class="position-relative auth-pass-inputgroup">
                                                            <input type="password"
                                                                class="form-control pe-5 password-input @error('Confirm Password') is-invalid @enderror"
                                                                name="password_confirmation" required autocomplete="new-password"
                                                                placeholder="Introduce la contraseña" id="password-confirm">
                                                            <button
                                                                class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                                type="button" id="password-addon"><i
                                                                    class="ri-eye-fill align-middle"></i></button>
                                                        </div>
                                                        </div>
                                                    </div>





                                                    <div class="mb-4">
                                                        <p class="mb-0 fs-12 text-muted fst-italic">Al registrarte estás de acuerdo con BTEU <a href="#"
                                                                class="text-primary text-decoration-underline fst-normal fw-medium">Términos de uso.</a></p>
                                                    </div>

                                                    <div id="password-contain" class="p-3 bg-light mb-2 rounded">
                                                        <h5 class="fs-13">La contraseña debe contener:</h5>
                                                        <p id="pass-length" class="invalid fs-12 mb-2">Minimo <b>8
                                                                Caracteres</b></p>
                                                        <p id="pass-lower" class="invalid fs-12 mb-2">En <b>minúscula</b>
                                                            entre (a-z)</p>
                                                        <p id="pass-upper" class="invalid fs-12 mb-2">Al menos una
                                                            <b>mayúscula</b> entre (A-Z)
                                                        </p>
                                                        <p id="pass-number" class="invalid fs-12 mb-0">Al menos <b>un numero entre</b>
                                                            (0-9)</p>
                                                    </div>

                                                    <div class="mt-4">
                                                        <button class="btn btn-primary w-100" type="submit">Registrarse</button>
                                                    </div>

                                                    <!-- <div class="mt-4 text-center">
                                                        <div class="signin-other-title">
                                                            <h5 class="fs-13 mb-4 title text-muted">Create account with
                                                            </h5>
                                                        </div>

                                                        <div>
                                                            <button type="button"
                                                                class="btn btn-soft-primary btn-icon "><i
                                                                    class="ri-facebook-fill fs-16"></i></button>
                                                            <button type="button"
                                                                class="btn btn-soft-danger btn-icon "><i
                                                                    class="ri-google-fill fs-16"></i></button>
                                                            <button type="button" class="btn btn-soft-dark btn-icon "><i
                                                                    class="ri-github-fill fs-16"></i></button>
                                                            <button type="button" class="btn btn-soft-info btn-icon "><i
                                                                    class="ri-twitter-fill fs-16"></i></button>
                                                        </div>
                                                    </div> -->
                                                </form>
                                            </div>
                                            <div class="mt-4 text-center">
                                                <p class="mb-0">¿Ya tienes una cuenta?  <a href="login"
                                                        class="fw-semibold text-primary text-decoration-underline"> Iniciar sesión
                                                    </a> </p>
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
    <script src="{{ asset('js/pages/form-validation.init.js') }}"></script>
    <script src="{{ asset('js/pages/passowrd-create.init.js') }}"></script>
@endsection
