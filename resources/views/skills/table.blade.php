<div class="table-responsive">
    <table class="table" id="skills-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>User Id</th>
        <th>Start Date</th>
        <th>Skill Level</th>
        <th>Past Work History</th>
        <th>Any Other Information</th>
        <th>Admin Interview</th>
        <th>Admin User Id</th>
        <th>Score</th>
        <th>Interview Status</th>
        <th>Interview Amount Paid</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($skills as $skill)
            <tr>
                <td>{!! $skill->name !!}</td>
            <td>{!! $skill->user_id !!}</td>
            <td>{!! $skill->start_date !!}</td>
            <td>{!! $skill->skill_level !!}</td>
            <td>{!! $skill->past_work_history !!}</td>
            <td>{!! $skill->any_other_information !!}</td>
            <td>{!! $skill->admin_interview !!}</td>
            <td>{!! $skill->admin_user_id !!}</td>
            <td>{!! $skill->score !!}</td>
            <td>{!! $skill->interview_status !!}</td>
            <td>{!! $skill->interview_amount_paid !!}</td>
                <td>
                    {!! Form::open(['route' => ['skills.destroy', $skill->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('skills.show', [$skill->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('skills.edit', [$skill->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
