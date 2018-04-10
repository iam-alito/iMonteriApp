@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Combos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($datos['combos'], ['route' => ['combos.update', $datos['combos']->id], 'method' => 'patch']) !!}

                        @include('combos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection