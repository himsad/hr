<div class="table-responsive">
    <table class="table" id="organisationusers-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Organisation Id</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Role</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($organisationusers as $organisationuser)
            <tr>
                <td>{!! $organisationuser->user_id !!}</td>
            <td>{!! $organisationuser->organisation_id !!}</td>
            <td>{!! $organisationuser->start_date !!}</td>
            <td>{!! $organisationuser->end_date !!}</td>
            <td>{!! $organisationuser->role !!}</td>
                <td>
                    {!! Form::open(['route' => ['organisationusers.destroy', $organisationuser->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('organisationusers.show', [$organisationuser->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('organisationusers.edit', [$organisationuser->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
