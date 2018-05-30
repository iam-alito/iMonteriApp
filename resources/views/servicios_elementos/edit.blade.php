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
                   {!! Form::model($datos, ['route' => ['serviciosElementos.update', $datos['serviciosElementos']->id], 'method' => 'patch']) !!}

                        @include('servicios_elementos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection