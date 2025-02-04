@extends('layouts.app')

@section('template_title')
    Proyecto
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-10">
                <div class="card" id="boxtable">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Trabajos de grado') }}
                            </span>
                            
                             <div class="float-right">
                                <a href="{{ route('proyectos.create') }}" id="btncrear" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <!--<th>No</th>-->
                                        
										<th>Título</th>
										<th>Tipo</th>
										<th>Estudiante</th>
										<th>Director</th>
										<th>Evaluador 1</th>
										<th>Evaluador 2</th>
										<th>Fecha de inicio</th>
										<th>Fecha fin</th>
										<th>Estado</th>
                                        <!--<th>Prioridad</th>-->
                                        <th>Prioridad prueba</th>
                                        <th>conteo</th>
										<th>Observaciones</th>

                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($proyectos as $proyecto)
                                        <tr>
                                            <!--<td>{{ ++$i }}</td>-->

											<td>{{ $proyecto->titulo }}</td>
											<td>{{ $proyecto->tipo }}</td>
											<td>{{ $proyecto->estudiante }}</td>
											<td>{{ $proyecto->director }}</td>
											<td>{{ $proyecto->evaluador1 }}</td>
											<td>{{ $proyecto->evaluador2 }}</td>
											<td>{{ $proyecto->fechainicio }}</td>
											<td>{{ $proyecto->fechafin }}</td>
                                            <td>{{ $proyecto->estado}}</td>
                                            <!--Condicional para los estados-->
                                            <!--@if ( $proyecto->estado=='con tiempo')
                                            <td style="background-color: rgb(15, 157, 88); color: white;">{{ $proyecto->estado }}</td>
                                            @elseif ($proyecto->estado=='vencidos')
                                            <td style="background-color: rgb(233, 89, 89); color: white;">{{ $proyecto->estado }}</td>
											@elseif ($proyecto->estado=='por vencer')
                                            <td style="background-color: rgb(244, 180, 0); color: white;">{{ $proyecto->estado }}</td>
                                            @else
                                            <td>{{ $proyecto->estado }}</td>
                                            @endif-->
                                            <!--Condicional para los estados-->
<!--Prueba COndicional con fechas-->										
 @php
    $fechaActual = \Carbon\Carbon::now();
    $fechaVencimiento = \Carbon\Carbon::createFromFormat('d/m/Y', $proyecto->fechafin);
    if (!$fechaVencimiento) {
        $diferenciaDias = null;
    } else {
        $diferenciaDias = $fechaActual->diffInDays($fechaVencimiento);
    }
@endphp                                           
@if ( $diferenciaDias >= 30)
<td style="background-color: rgb(15, 157, 88); color: white;">Con tiempo</td>
@elseif ($diferenciaDias == 0)
<td style="background-color: rgb(233, 89, 89); color: white;">Vencido</td>
@elseif ($diferenciaDias <= 30)
<td style="background-color: rgb(244, 180, 0); color: white;">Por vencer</td>
@else
<td>{{ $proyecto->estado }}</td>
@endif
<!--Prueba COndicional con fechas-->
                                           <td>{{ $diferenciaDias }}</td>
                                           <td>{{ $proyecto->observaciones }}</td>
                                            <td>
                                                <form action="{{ route('proyectos.destroy',$proyecto->id) }}" method="POST">
                                                    <a class="btn btn-sm text-primary " href="{{ route('proyectos.show',$proyecto->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm text-success" href="{{ route('proyectos.edit',$proyecto->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <a type="submit" class="btn text-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $proyectos->links() !!}
            </div>
        </div>
    </div>

@endsection
