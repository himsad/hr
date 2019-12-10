<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Start Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('start_date', 'Start Date:') !!}
    {!! Form::date('start_date', null, ['class' => 'form-control','id'=>'start_date']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#start_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Skill Level Field -->
<div class="form-group col-sm-6">
    {!! Form::label('skill_level', 'Skill Level:') !!}
    {!! Form::text('skill_level', null, ['class' => 'form-control']) !!}
</div>

<!-- Past Work History Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('past_work_history', 'Past Work History:') !!}
    {!! Form::textarea('past_work_history', null, ['class' => 'form-control']) !!}
</div>

<!-- Any Other Information Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('any_other_information', 'Any Other Information:') !!}
    {!! Form::textarea('any_other_information', null, ['class' => 'form-control']) !!}
</div>

<!-- Admin Interview Field -->
<div class="form-group col-sm-6">
    {!! Form::label('admin_interview', 'Admin Interview:') !!}
    {!! Form::date('admin_interview', null, ['class' => 'form-control','id'=>'admin_interview']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#admin_interview').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Admin User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('admin_user_id', 'Admin User Id:') !!}
    {!! Form::number('admin_user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Score Field -->
<div class="form-group col-sm-6">
    {!! Form::label('score', 'Score:') !!}
    {!! Form::text('score', null, ['class' => 'form-control']) !!}
</div>

<!-- Interview Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('interview_status', 'Interview Status:') !!}
    {!! Form::text('interview_status', null, ['class' => 'form-control']) !!}
</div>

<!-- Interview Amount Paid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('interview_amount_paid', 'Interview Amount Paid:') !!}
    {!! Form::number('interview_amount_paid', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('skills.index') !!}" class="btn btn-default">Cancel</a>
</div>
