@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Jobs Listings</h1>
        <h1 class="pull-right">

            <!-- Nut addnew -->
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('jobs.create') !!}">Add New</a>
        </h1>
    </section>

    
        <!-- refresh noi dung -->
        <div class="clearfix"></div>
        <!-- Hien thong bao  -->
        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            
        <!-- Bang table -->
            <div class="box-body">
                    <!-- Doan thanh o tren -->
                    <div class="content">
                        <div class="well">
                           <a href="/jobs/all_jobs">All open jobs </a> 
                           @if(Auth::check())
                            | 
                            <a href="/jobs/jobs_i_created">Jobs I created </a>
                            | 
                            <a href="/jobs/jobs_i_applied_for">Jobs I applied for </a>
                            | 
                            <a href="/jobs/admin_jobs">Admin Jobs</a>
                            @endif
                        </div>

                        {!! Form::model($job, ['route' => ['jobs.update', $job->id], 'method' => 'patch']) !!}

                        <div class="col-lg-6">
                                <div class="input-group">
                                  <input type="text" class="form-control" placeholder="Search for...">
                                  <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">Go!</button>
                                  </span>
                                </div><!-- /input-group -->
                              </div><!-- /.col-lg-6 -->
                        

                        {!! Form::close() !!}



                        <div class="row">
                                {!! Form::open(['route' => 'jobs.store']) !!}
                                <div class="col-lg-6 col-md-6">
                                  <div class="input-group">
                                    <span class="input-group-btn">
                                      <button class="btn btn-default" type="button">Go!</button>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Search for...">
                                  </div><!-- /input-group -->
                                </div><!-- /.col-lg-6 -->
                                
                              </div><!-- /.row -->


                    @include('jobs.table'

                  
            </div>
        </div>
            <div class="text-center">
                
            </div>
    </div>
@endsection

