@extends('layouts.app')

@section('template_title')
    Aprendice
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Aprendice') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('aprendices.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Identificacion</th>
										<th>Nombres</th>
										<th>Apellidos</th>
										<th>Email</th>
										<th>Telefono</th>
										<th>F Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($aprendices as $aprendice)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $aprendice->identificacion }}</td>
											<td>{{ $aprendice->nombres }}</td>
											<td>{{ $aprendice->apellidos }}</td>
											<td>{{ $aprendice->email }}</td>
											<td>{{ $aprendice->telefono }}</td>
											<td>{{ $aprendice->f_id }}</td>

                                            <td>
                                                <form action="{{ route('aprendices.destroy',$aprendice->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('aprendices.show',$aprendice->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('aprendices.edit',$aprendice->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $aprendices->links() !!}
            </div>
        </div>
    </div>
@endsection
