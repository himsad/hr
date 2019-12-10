@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Organisation
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($organisation, ['route' => ['organisations.update', $organisation->id], 'method' => 'patch']) !!}

                        @include('organisations.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection