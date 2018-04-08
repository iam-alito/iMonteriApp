@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipo Conceptos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoConceptos, ['route' => ['tipoConceptos.update', $tipoConceptos->id], 'method' => 'patch']) !!}

                        @include('tipo_conceptos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection