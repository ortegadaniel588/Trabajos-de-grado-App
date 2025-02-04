@extends('layouts.app')

@section('template_title')
    Sustentacion
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-10">
                <div class="card" id="boxtable">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Sustentacion') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('sustentacions.create') }}" id="btncrear" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                <i class="fas fa-plus"></i>{{ __(' Crear nuevo') }}
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
                            <table class="table table-striped table-hover table-bordered">
                                <thead class="thead">
                                    <tr id="encabesadotabla">
                                        <th>No</th>
                                        
										<th>Trabajo de grado</th>
										<th>Fecha</th>
										<th>Hora</th>
										<th>Lugar</th>
										<th>Estado</th>

                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sustentacions as $sustentacion)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $sustentacion->proyecto->titulo }}</td>
											<td>{{ $sustentacion->fecha }}</td>
											<td>{{ $sustentacion->hora }}</td>
											<td>{{ $sustentacion->lugar }}</td>
											<!--<td>{{ $sustentacion->estado }}</td>-->
                                        <!--Condicional para los estados-->
                                            @if ( $sustentacion->estado=='Aprobado')
                                            <td style="background-color: rgb(15, 157, 88); color: white;">{{ $sustentacion->estado }}</td>
                                            @elseif ($sustentacion->estado=='No aprobado')
                                            <td style="background-color: rgb(233, 89, 89); color: white;">{{ $sustentacion->estado }}</td>
                                            @else
                                            <td>{{ $sustentacion->estado }}</td>
                                            @endif

                                            <td>
                                                <form action="{{ route('sustentacions.destroy',$sustentacion->id) }}" method="POST">
                                                    <a class="btn btn-sm text-primary " href="{{ route('sustentacions.show',$sustentacion->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm text-success" href="{{ route('sustentacions.edit',$sustentacion->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <a type="submit" class="btn btn-sm text-danger "><i class="fa fa-fw fa-trash"></i> Eliminar</a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $sustentacions->links() !!}
            </div>
        </div>
    </div>
@endsection
