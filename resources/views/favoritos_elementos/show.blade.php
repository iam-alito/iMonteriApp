@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Favoritos Elementos
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('favoritos_elementos.show_fields')
                    <a href="{!! route('favoritosElementos.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
