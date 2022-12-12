@extends('layouts.app')

@section('template_title')
    Atuendo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Atuendo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('atuendos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Modelo</th>
										<th>Nombre</th>
										<th>Talla</th>
										<th>Precio</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($atuendos as $atuendo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $atuendo->modelo }}</td>
											<td>{{ $atuendo->nombre }}</td>
											<td>{{ $atuendo->talla }}</td>
											<td>{{ $atuendo->precio }}</td>

                                            <td>
                                                <form action="{{ route('atuendos.destroy',$atuendo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('atuendos.show',$atuendo->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('atuendos.edit',$atuendo->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $atuendos->links() !!}
            </div>
        </div>
    </div>
@endsection
