@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Elementos y sus Servicios
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('servicios_elementos.show_fields')
                    <a href="{!! route('serviciosElementos.index') !!}" class="btn btn-default">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection
