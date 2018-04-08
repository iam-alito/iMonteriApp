@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipo Identificacion
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoIdentificacion, ['route' => ['tipoIdentificacions.update', $tipoIdentificacion->id], 'method' => 'patch']) !!}

                        @include('tipo_identificacions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection