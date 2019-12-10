@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Invitation
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($invitation, ['route' => ['invitations.update', $invitation->id], 'method' => 'patch']) !!}

                        @include('invitations.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection