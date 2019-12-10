@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Organisationuser
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($organisationuser, ['route' => ['organisationusers.update', $organisationuser->id], 'method' => 'patch']) !!}

                        @include('organisationusers.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection