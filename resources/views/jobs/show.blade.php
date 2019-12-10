@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Job Listing
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('jobs.show_fields')
                    
                    
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#apply">
                        <i class="glyphicon glyphicon-hand-up"></i> Apply for this job
                    </button>


                    
                    <p>
                            <!-- Go to www.addthis.com/dashboard to customize your tools -->
                            <div class="addthis_inline_share_toolbox"></div>
                        
                      </p>
                </div>
            </div>
        </div>
    </div>

                    
                    <!-- Modal -->
                    <div class="modal fade" id="apply" tabindex="-1" role="dialog" aria-labelledby="#apply">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="applyLabel">Are you sure?</h4>
                        </div>
                       
                        <div class="modal-footer">
                        
                        @if(!Auth::check())
                        <a href="/login" class="btn btn-danger btn-lg">Login to apply</a>
                        @else
                             {!! Form::open(['route' => ['invitations.store']]) !!}

                                <input type="hidden" value="{!! $job->id !!}" name="job_id" />
                                <input type="hidden" value="{!! $job->receiver_user_id !!}" name="receiver_user_id" />
                                <input type="hidden" value="{!! $job->organisation_id !!}" name="organisation_id" />
                                {!! Form::button('<i class="glyphicon glyphicon-hand-up"></i> Ok ', 
                                ['type' => 'submit', 'class' => 'btn btn-danger btn-lg'])!!}
                                <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">Do not apply</button>
                          
                            {!! Form::close() !!}
                        @endif       
                           
                        </div>
                        </div>
                    </div>
                    </div>  
                    
                    
@endsection
