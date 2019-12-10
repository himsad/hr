@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Skill
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($skill, ['route' => ['skills.update', $skill->id], 'method' => 'patch']) !!}

                        @include('skills.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection