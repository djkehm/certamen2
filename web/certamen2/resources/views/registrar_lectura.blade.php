@extends('layouts.master')

@section('contenido')
    <div class="row mt-5">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
            <div class="card">
                <div class="card-header bg-danger text-white">
                    <span>Registrar Lectura</span>
                </div>
                <div class="card-body bg-secondary">
                    <div class="mb-3">
                        <label for="fecha-txt" class="form-label text-white">Fecha</label>
                        <input type="date" id="fecha-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="hora-txt" class="form-label text-white">Hora</label>
                        <input type="text" id="hora-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="medidor-select" class="form-label text-white">Medidor</label>
                        <select class="form-select" id="medidor-select"></select>
                    </div>
                    <div class="mb-3">
                        <label for="direccion-txt" class="form-label text-white">Direccion</label>
                        <input type="text" id="direccion-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="valor-txt" class="form-label text-white">Valor</label>
                        <input type="number" id="valor-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="tipo-select" class="form-label text-white">Tipo de medicion</label>
                        <input type="select" id="tipo-select" class="form-select">
                    </div>
                    <div class="card-footer d-grid gap-1 bg-light">
                        <button type="button" id="registrar-btn" class="btn btn-outline-success">Registrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    <script src="{{asset('js/service/lecturasService.js')}}"></script>
    <script src="{{asset('js/registrar_lectura.js')}}"></script>
@endsection