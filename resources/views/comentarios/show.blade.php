@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Comentarios
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('comentarios.show_fields')
                    <a href="{!! route('comentarios.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
