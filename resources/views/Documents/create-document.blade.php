@extends('layouts.app')

@section('page-title', 'Iso One - Documentos')

<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico')}}" />

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

<!-- Icons -->
<link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css')}}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome.css')}}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/fonts/flag-icons.css')}}" />

<!-- Core CSS -->
<link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/core.css')}}" class="template-customizer-core-css" />
<link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/theme-default.css')}}" class="template-customizer-theme-css" />
<link rel="stylesheet" href="{{ asset('assets/css/demo.css')}}" />

<!-- Vendors CSS -->
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css')}}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/tagify/tagify.css')}}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css')}}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css')}}" />

<!-- Page CSS -->

<!-- Helpers -->
<script src="{{ asset('assets/vendor/js/helpers.js')}}"></script>

<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
<!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
<script src="{{ asset('assets/vendor/js/template-customizer.js')}}"></script>
<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
<script src="{{ asset('assets/js/config.js')}}"></script>
@section('page-content')

<!-- Bootstrap Select -->
<div class="col-12">
    <div class="card">
        <h5 class="card-header">Bootstrap Select</h5>
        <div class="card-body">
            <div class="row">

                <form action="{{ route('agregarDocumento') }}" method="POST" class="form-horizontal" role="form" id="bootstrap">
                    <label for="selectpickerBasic" class="form-label">Sistema de Gestion</label>
                    <select name="sistemaGestion" id="sistemaGestion" class="selectpicker w-100" data-style="btn-default">
                        <option value="1">NTC 9001:2015</option>
                        <option value="2">NTC 14001:2015</option>
                        <option value="3">SG-SST</option>
                        <option value="4">NTC ISO/IEC 17020:2012</option>
                        <option value="5">SISTEMA DE GESTION SEGURIDAD INFORMATICA</option>
                        <option value="6">PROPIEDAD HORIZONTAL</option>
                        <option value="7">ISO 39001</option>
                        <option value="8">OEA</option>
                        <option value="9">BASC</option>
                    </select>
                    <label for="selectpickerBasic" class="form-label">Proceso</label>
                    <select name="proceso" id="selectpickerBasic" class="selectpicker w-100" data-style="btn-default">
                        <option value="1">Asociacion de Empresas Seguras</option>
                        <option value="1">Consultoria</option>
                        <option value="1">Diseño De Servicios</option>
                        <option value="1">Diseño De Sofware</option>
                        <option>Formacion</option>
                        <option>Gestion Comercial</option>
                        <option>Gestion De La Mejora</option>
                        <option>Gestion de Proyectos</option>
                        <option>Gestion Del Conocimiento</option>
                        <option>Gestion Financiera</option>
                        <option>Outsourcing</option>
                        <option>Planeacion Estrategica</option>
                        <option>Procesos De Prueba</option>
                        <option>Seguridad Privada</option>
                        <option>Servicio De Software Iso</option>

                    </select>
                    <label for="selectpickerBasic" class="form-label">Tipo de Documento</label>
                    <select name="tipoDocumento" id="selectpickerBasic" class="selectpicker w-100" data-style="btn-default">
                        <option value="1">Acta</option>
                        <option>Consignas</option>
                        <option>Decreto</option>
                        <option>Evaluacion</option>
                        <option>Ficha Tecnica</option>
                        <option>Formato</option>
                        <option>Guia</option>
                        <option>Informe</option>
                        <option>Instructivo</option>
                        <option>Legal</option>
                        <option>Leyes De La Nacion</option>
                        <option>Manual</option>
                        <option>Matriz</option>
                        <option>Obsoletos</option>
                        <option>Perfil De Cargos</option>
                        <option>Plan</option>
                        <option>Politica</option>
                        <option>Procedimiento</option>
                        <option>Programa</option>
                        <option>Reglamento</option>
                        <option>Resolucion</option>
                    </select>
                    <label for="selectpickerBasic" class="form-label">localizacion</label>
                    <select name="localizacion" id="selectpickerBasic" class="selectpicker w-100" data-style="btn-default">
                        <option value="1">Rocky</option>
                        <option>Pulp Fiction</option>
                        <option>The Godfather</option>
                    </select>
                    <div class="row gy-3 mt-3">
                    <div class="col-sm-6">
                    <label for="defaultFormControlInput" class="form-label">Codigo</label>
                    <input name="codigo" type="text" class="form-control" id="defaultFormControlInput" placeholder="John Doe" aria-describedby="defaultFormControlHelp" />
                    </div>
                    <div class="col-sm-6">
                    <div class="text-light small fw-semibold mb-3">Activar</div>
                          <label class="switch switch-lg">
                            <input type="checkbox" class="switch-input" />
                            <span class="switch-toggle-slider">
                              <span class="switch-on"><i class="bx bx-check"></i></span>
                              <span class="switch-off"><i class="bx bx-x"></i></span>
                            </span>
                            <span class="switch-label"></span>
                          </label>
                    </div>
                    </div>
                    <label for="defaultFormControlInput" class="form-label">Nombre</label>
                    <input name="nombre" type="text" class="form-control" id="defaultFormControlInput" placeholder="John Doe" aria-describedby="defaultFormControlHelp" />
                    <label for="defaultFormControlInput" class="form-label">Version</label>
                    <input name="version" type="text" class="form-control" id="defaultFormControlInput" placeholder="John Doe" aria-describedby="defaultFormControlHelp" />
                    <label for="selectpickerBasic" class="form-label">Responsable Editar</label>
                    <select name="responsableEditor" id="selectpickerMultiple" class="selectpicker w-100" data-style="btn-default" multiple data-icon-base="bx" data-tick-icon="bx-check text-primary">
                        <option>Rocky</option>
                        <option>Pulp Fiction</option>
                        <option>The Godfather</option>
                    </select>
                    <label for="selectpickerBasic" class="form-label">Responsable Revisar</label>
                    <select name="responsableRevisar" id="selectpickerMultiple" class="selectpicker w-100" data-style="btn-default" multiple data-icon-base="bx" data-tick-icon="bx-check text-primary">
                        <option>Rocky</option>
                        <option>Pulp Fiction</option>
                        <option>The Godfather</option>
                    </select>
                    <label for="selectpickerBasic" class="form-label">Responsable Aprobar</label>
                    <select name="responsableAprobar" id="selectpickerMultiple" class="selectpicker w-100" data-style="btn-default" multiple data-icon-base="bx" data-tick-icon="bx-check text-primary">
                        <option>Rocky</option>
                        <option>Pulp Fiction</option>
                        <option>The Godfather</option>
                    </select>

                    <button class="btn btn-success">Guardar</button>
                    <button class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- /Bootstrap Select -->

@endsection
<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{ asset('assets/vendor/libs/jquery/jquery.js')}}"></script>
<script src="{{ asset('assets/vendor/libs/popper/popper.js')}}"></script>
<script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>

<script src="{{ asset('assets/vendor/libs/hammer/hammer.js')}}"></script>

<script src="{{ asset('assets/vendor/libs/i18n/i18n.js')}}"></script>
<script src="{{ asset('assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>

<script src="{{ asset('assets/vendor/js/menu.js')}}"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{ asset('assets/vendor/libs/tagify/tagify.js')}}"></script>
<script src="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js')}}"></script>
<script src="{{ asset('assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>
<script src="{{ asset('assets/vendor/libs/bloodhound/bloodhound.js')}}"></script>

<!-- Main JS -->
<script src="{{ asset('assets/js/main.js')}}"></script>

<!-- Page JS -->
<script src="{{ asset('assets/js/forms-selects.js')}}"></script>
<script src="{{ asset('assets/js/forms-tagify.js')}}"></script>
<script src="{{ asset('assets/js/forms-typeahead.js')}}"></script>


<!-- build:js assets/vendor/js/core.js -->