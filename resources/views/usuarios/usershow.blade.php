@extends('layouts.master')
@section('title')
    @lang('translation.dashboards')
@endsection
@section('css')
    <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <link href="{{ asset('libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Sweet Alert css-->
    <link href="{{ asset('libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="row">
        <div class="col">
            <div class="h-100">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0"> <span class="bi bi-people"> Lista de usuarios</span></h5>
                            </div>
                            <div class="card-body">

                                {{-- <div class="row g-4 mb-3">
                                        <div class="col-sm-auto">
                                            <div>
                                                <button type="button" class="btn btn-success btn-sm add-btn"
                                                    data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal">
                                                    <i class="ri-add-line align-bottom me-1"></i> Nuevo usuario</button>
                                            </div>
                                        </div>
                                    </div> --}}
                                <div class="table-responsive">
                                    <table id="example"
                                        class="table table-bordered dt-responsive nowrap table-striped align-middle table-hover"
                                        style="width:100%">
                                        <thead>
                                            <tr>
                                                <th data-ordering="false">#</th>
                                                <th>Nombre de usuario</th>
                                                <th>Correo</th>
                                                <th>Perfil</th>
                                                <th>Creado el</th>
                                                <th>Actualizado en</th>
                                                <th>Status</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $x = 1;
                                            ?>
                                            @foreach ($User as $vT)
                                                <tr id="tr_{{ $vT->id }}">
                                                    <td class="text-bold">
                                                        {{ $x++ }}
                                                    </td>
                                                    <td>{{ $vT->name }}</td>
                                                    <td>{{ $vT->email }}</td>
                                                    @if ($vT->FK_Perfil == 1)
                                                        <td><span
                                                                class="badge text-info bg-info-subtle">Administrador</span>
                                                        </td>
                                                    @elseif ($vT->FK_Perfil == 2)
                                                        <td><span
                                                                class="badge text-secondary bg-secondary-subtle">Egresado</span>
                                                        </td>
                                                    @elseif ($vT->FK_Perfil == 3)
                                                        <td><span
                                                                class="badge text-danger  bg-danger-subtle">Empleador</span>
                                                        </td>
                                                    @endif
                                                    <td>{{ $vT->created_at }}</td>
                                                    <td>{{ $vT->updated_at }}</td>
                                                    @if ($vT->estatus == 1)
                                                        <td><span class="badge bg-success">Activo</span></td>
                                                    @else
                                                        <td><span class="badge bg-danger">Inactivo</span></td>
                                                    @endif
                                                    <td>
                                                        <div class="dropdown d-inline-block">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a href="#!" class="dropdown-item"><i
                                                                            class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                        Ver</a></li>
                                                                <li><a class="dropdown-item edit-item-btn"><i
                                                                            class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                        Editar</a></li>
                                                                <li>
                                                                    <a class="dropdown-item remove-item-btn">
                                                                        <i
                                                                            class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                        Eliminar
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- -->
                        <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-light p-3">
                                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                            id="close-modal"></button>
                                    </div>
                                    <form class="tablelist-form">
                                        <div class="modal-body">

                                            <div class="mb-3" id="modal-id" style="display: none;">
                                                <label for="id-field" class="form-label">ID</label>
                                                <input type="text" id="id-field" class="form-control" placeholder="ID"
                                                    readonly />
                                            </div>

                                            <div class="mb-3">
                                                <label for="customername-field" class="form-label">Customer Name</label>
                                                <input type="text" id="customername-field" class="form-control"
                                                    placeholder="Enter Name" required />
                                            </div>

                                            <div class="mb-3">
                                                <label for="email-field" class="form-label">Email</label>
                                                <input type="email" id="email-field" class="form-control"
                                                    placeholder="Enter Email" required />
                                            </div>

                                            <div class="mb-3">
                                                <label for="phone-field" class="form-label">Phone</label>
                                                <input type="text" id="phone-field" class="form-control"
                                                    placeholder="Enter Phone no." required />
                                            </div>

                                            <div class="mb-3">
                                                <label for="date-field" class="form-label">Joining Date</label>
                                                <input type="text" id="date-field" class="form-control"
                                                    placeholder="Select Date" required />
                                            </div>

                                            <div>
                                                <label for="status-field" class="form-label">Estatus</label>
                                                <select class="form-control" data-trigger name="status-field"
                                                    id="status-field">
                                                    <option value="">Estatus</option>
                                                    <option value="Active">Activo</option>
                                                    <option value="Block">Bloqueado</option>
                                                    <option value="Block">Inactivo</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="hstack gap-2 justify-content-end">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Cerrar</button>
                                                <button type="submit" class="btn btn-success"
                                                    id="add-btn">Guardar</button>
                                                <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- -->
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!--datatable js-->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <script src="{{ asset('libs/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/pages/datatables.init.js') }}"></script>

    <!-- prismjs plugin -->
    <script src="{{ asset('libs/prismjs/prism.js') }}"></script>
    <script src="{{ asset('libs/list.pagination.js/list.pagination.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('js/app.js') }}"></script>
@endsection
