@extends('layouts.app')

@section('template_title')
    Ficha
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ficha') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('fichas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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

										<th>Ficha Numero</th>
										<th>Duracion</th>
										<th>Modalidad</th>
										<th>Fecha Inicio</th>
										<th>Fecha Fin</th>
										<th>Programa</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fichas as $ficha)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $ficha->ficha_numero }}</td>
											<td>{{ $ficha->duracion }}</td>
											<td>{{ $ficha->modalidad }}</td>
											<td>{{ $ficha->fecha_inicio }}</td>
											<td>{{ $ficha->fecha_fin }}</td>
											<td>{{ $ficha->programa_id }}</td>

                                            <td>
                                                <form action="{{ route('fichas.destroy',$ficha->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('fichas.show',$ficha->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('fichas.edit',$ficha->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $fichas->links() !!}
            </div>
        </div>
    </div>
@endsection
