@extends('layouts.app')

@section('template_title')
    {{ $ficha->name ?? "{{ __('Show') Ficha" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Ficha</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('fichas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Ficha Numero:</strong>
                            {{ $ficha->ficha_numero }}
                        </div>
                        <div class="form-group">
                            <strong>Duracion:</strong>
                            {{ $ficha->duracion }}
                        </div>
                        <div class="form-group">
                            <strong>Modalidad:</strong>
                            {{ $ficha->modalidad }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Inicio:</strong>
                            {{ $ficha->fecha_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Fin:</strong>
                            {{ $ficha->fecha_fin }}
                        </div>
                        <div class="form-group">
                            <strong>Programa Id:</strong>
                            {{ $ficha->programa_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
