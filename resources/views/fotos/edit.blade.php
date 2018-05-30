@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Fotos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($datos['fotos'], ['route' => ['fotos.update', $datos['fotos']->id], 'method' => 'patch']) !!}

                        @include('fotos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection