@extends('layouts.app')

@section('template_title')
    {{ $aprendice->name ?? "{{ __('Show') Aprendice" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Aprendice</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('aprendices.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Identificacion:</strong>
                            {{ $aprendice->identificacion }}
                        </div>
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $aprendice->nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $aprendice->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $aprendice->email }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $aprendice->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>F Id:</strong>
                            {{ $aprendice->f_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
