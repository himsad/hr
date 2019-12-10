<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $failedJob->id !!}</p>
</div>

<!-- Connection Field -->
<div class="form-group">
    {!! Form::label('connection', 'Connection:') !!}
    <p>{!! $failedJob->connection !!}</p>
</div>

<!-- Queue Field -->
<div class="form-group">
    {!! Form::label('queue', 'Queue:') !!}
    <p>{!! $failedJob->queue !!}</p>
</div>

<!-- Payload Field -->
<div class="form-group">
    {!! Form::label('payload', 'Payload:') !!}
    <p>{!! $failedJob->payload !!}</p>
</div>

<!-- Exception Field -->
<div class="form-group">
    {!! Form::label('exception', 'Exception:') !!}
    <p>{!! $failedJob->exception !!}</p>
</div>

<!-- Failed At Field -->
<div class="form-group">
    {!! Form::label('failed_at', 'Failed At:') !!}
    <p>{!! $failedJob->failed_at !!}</p>
</div>

