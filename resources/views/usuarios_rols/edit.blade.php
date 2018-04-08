@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Usuarios Rol
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($datos['usuariosRol'], ['route' => ['usuariosRols.update', $datos['usuariosRol']->id], 'method' => 'patch']) !!}

                        @include('usuarios_rols.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection