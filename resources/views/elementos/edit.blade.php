@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Elementos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($elementos, ['route' => ['elementos.update', $elementos->id], 'method' => 'patch']) !!}

                        @include('elementos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection