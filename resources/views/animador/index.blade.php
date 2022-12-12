@extends('layouts.app')

@section('template_title')
    Animador
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Animador') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('animadors.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Email</th>
										<th>Telefono</th>
										<th>Disfraz</th>
										<th>Direccion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($animadors as $animador)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $animador->nombre }}</td>
											<td>{{ $animador->email }}</td>
											<td>{{ $animador->telefono }}</td>
											<td>{{ $animador->disfraz }}</td>
											<td>{{ $animador->address }}</td>

                                            <td>
                                                <form action="{{ route('animadors.destroy',$animador->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('animadors.show',$animador->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('animadors.edit',$animador->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $animadors->links() !!}
            </div>
        </div>
    </div>
@endsection
