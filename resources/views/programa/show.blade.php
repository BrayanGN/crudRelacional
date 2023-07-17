@extends('layouts.app')

@section('template_title')
    {{ $programa->name ?? "{{ __('Show') Programa" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Programa</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('programas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Area:</strong>
                            {{ $programa->area }}
                        </div>
                        <div class="form-group">
                            <strong>Modalidad:</strong>
                            {{ $programa->modalidad }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Programa:</strong>
                            {{ $programa->tipo_programa }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
