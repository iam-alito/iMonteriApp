@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Categorías y sus Elementos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($datos['categoriasElementos'], ['route' => ['categoriasElementos.update', $datos['categoriasElementos']->id], 'method' => 'patch']) !!}

                        @include('categorias_elementos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection