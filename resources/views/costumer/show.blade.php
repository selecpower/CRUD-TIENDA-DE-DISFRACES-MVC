@extends('layouts.app')

@section('template_title')
    {{ $costumer->name ?? 'Show Costumer' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('costumers.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $costumer->name }}
                        </div>
                        <div class="form-group">
                            <strong>E-mail:</strong>
                            {{ $costumer->email }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $costumer->phone }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $costumer->address }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
