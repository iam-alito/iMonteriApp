@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Conceptos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($datos['conceptos'], ['route' => ['conceptos.update', $datos['conceptos']->id], 'method' => 'patch']) !!}

                        @include('conceptos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection