<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Sender Contact Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sender_contact', 'Sender Contact:') !!}
    {!! Form::text('sender_contact', null, ['class' => 'form-control']) !!}
</div>

<!-- Receiver User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('receiver_user_id', 'Receiver User Id:') !!}
    {!! Form::number('receiver_user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Organisation Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('organisation_id', 'Organisation Id:') !!}
    {!! Form::number('organisation_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Job Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('job_id', 'Job Id:') !!}
    {!! Form::number('job_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Interview Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('interview_status', 'Interview Status:') !!}
    {!! Form::text('interview_status', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Of Interview Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_of_interview', 'Date Of Interview:') !!}
    {!! Form::date('date_of_interview', null, ['class' => 'form-control','id'=>'date_of_interview']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#date_of_interview').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Invitation Note Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('invitation_note', 'Invitation Note:') !!}
    {!! Form::textarea('invitation_note', null, ['class' => 'form-control']) !!}
</div>

<!-- Employer Interview Note Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('employer_interview_note', 'Employer Interview Note:') !!}
    {!! Form::textarea('employer_interview_note', null, ['class' => 'form-control']) !!}
</div>

<!-- Jobseeker Post Interview Review Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('jobseeker_post_interview_review', 'Jobseeker Post Interview Review:') !!}
    {!! Form::textarea('jobseeker_post_interview_review', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('invitations.index') !!}" class="btn btn-default">Cancel</a>
</div>
