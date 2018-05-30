@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Elementos y sus Servicios
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'serviciosElementos.store']) !!}

                        @include('servicios_elementos.fieldsadd')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
