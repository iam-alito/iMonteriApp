@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Permisos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($permisos, ['route' => ['permisos.update', $permisos->id], 'method' => 'patch']) !!}

                        @include('permisos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection