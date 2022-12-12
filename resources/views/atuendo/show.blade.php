@extends('layouts.app')

@section('template_title')
    {{ $atuendo->name ?? 'Show Atuendo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Atuendo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('atuendos.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $atuendo->modelo }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $atuendo->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Talla:</strong>
                            {{ $atuendo->talla }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $atuendo->precio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
