<div class="table-responsive">
    <table class="table" id="organisations-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Name</th>
        <th>Description</th>
        <th>City</th>
        <th>State</th>
        <th>Country Id</th>
        <th>Contact Details</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($organisations as $organisation)
            <tr>
                <td>{!! $organisation->user_id !!}</td>
            <td>{!! $organisation->name !!}</td>
            <td>{!! $organisation->description !!}</td>
            <td>{!! $organisation->city !!}</td>
            <td>{!! $organisation->state !!}</td>
            <td>{!! $organisation->country_id !!}</td>
            <td>{!! $organisation->contact_details !!}</td>
                <td>
                    {!! Form::open(['route' => ['organisations.destroy', $organisation->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('organisations.show', [$organisation->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('organisations.edit', [$organisation->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
