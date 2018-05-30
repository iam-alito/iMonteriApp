@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Favoritos Elementos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($favoritosElementos, ['route' => ['favoritosElementos.update', $favoritosElementos->id], 'method' => 'patch']) !!}

                        @include('favoritos_elementos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection