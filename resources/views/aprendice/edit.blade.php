@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Aprendice
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Aprendice</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('aprendices.update', $aprendice->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('aprendice.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
