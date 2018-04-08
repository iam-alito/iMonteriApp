@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Estados
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($estados, ['route' => ['estados.update', $estados->id], 'method' => 'patch']) !!}

                        @include('estados.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection