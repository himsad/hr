<div class="table-responsive">
    <table class="table" id="failedJobs-table">
        <thead>
            <tr>
                <th>Connection</th>
        <th>Queue</th>
        <th>Payload</th>
        <th>Exception</th>
        <th>Failed At</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($failedJobs as $failedJob)
            <tr>
                <td>{!! $failedJob->connection !!}</td>
            <td>{!! $failedJob->queue !!}</td>
            <td>{!! $failedJob->payload !!}</td>
            <td>{!! $failedJob->exception !!}</td>
            <td>{!! $failedJob->failed_at !!}</td>
                <td>
                    {!! Form::open(['route' => ['failedJobs.destroy', $failedJob->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('failedJobs.show', [$failedJob->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('failedJobs.edit', [$failedJob->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
