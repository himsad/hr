<!-- Connection Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('connection', 'Connection:') !!}
    {!! Form::textarea('connection', null, ['class' => 'form-control']) !!}
</div>

<!-- Queue Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('queue', 'Queue:') !!}
    {!! Form::textarea('queue', null, ['class' => 'form-control']) !!}
</div>

<!-- Payload Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('payload', 'Payload:') !!}
    {!! Form::textarea('payload', null, ['class' => 'form-control']) !!}
</div>

<!-- Exception Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('exception', 'Exception:') !!}
    {!! Form::textarea('exception', null, ['class' => 'form-control']) !!}
</div>

<!-- Failed At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('failed_at', 'Failed At:') !!}
    {!! Form::date('failed_at', null, ['class' => 'form-control','id'=>'failed_at']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#failed_at').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('failedJobs.index') !!}" class="btn btn-default">Cancel</a>
</div>
