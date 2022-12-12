@extends('layouts.app')

@section('template_title')
    {{ $animador->name ?? 'Mostrar Animador' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Animador</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('animadors.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $animador->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $animador->email }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $animador->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Disfraz:</strong>
                            {{ $animador->disfraz }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $animador->address }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
