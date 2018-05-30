@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Fotos
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('fotos.show_fields')
                    <a href="{!! route('fotos.index') !!}" class="btn btn-default">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection
