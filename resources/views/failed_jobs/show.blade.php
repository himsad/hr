@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Failed Job
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('failed_jobs.show_fields')
                    <a href="{!! route('failedJobs.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
