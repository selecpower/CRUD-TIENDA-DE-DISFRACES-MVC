@extends('layouts.app')

@section('template_title')
    {{ $evento->name ?? 'Show Evento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Evento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('eventos.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Ciudad:</strong>
                            {{ $evento->ciudad }}
                        </div>
                        <div class="form-group">
                            <strong>Animador:</strong>
                            {{ $evento->animador }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $evento->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $evento->direccion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
