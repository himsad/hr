<li class="{{ Request::is('accounts*') ? 'active' : '' }}">
    <a href="{!! route('accounts.index') !!}"><i class="fa fa-edit"></i><span>My Accounts</span></a>
</li>
<li class="{{ Request::is('jobs*') ? 'active' : '' }}">
    <a href="{!! route('jobs.index') !!}"><i class="fa fa-edit"></i><span>My Jobs</span></a>
</li>

<li class="{{ Request::is('jobs*') ? 'active' : '' }}">
    <a href="{!! route('jobs.index') !!}"><i class="fa fa-edit"></i><span>Open Jobs</span></a>
</li>


<li class="{{ Request::is('skills*') ? 'active' : '' }}">
    <a href="{!! route('skills.index') !!}"><i class="fa fa-edit"></i><span>My Skills</span></a>
</li>




<li class="{{ Request::is('invitations*') ? 'active' : '' }}">
    <a href="{!! route('invitations.index') !!}"><i class="fa fa-edit"></i><span>My Invitations</span></a>
</li>



<li class="{{ Request::is('organisations*') ? 'active' : '' }}">
    <a href="{!! route('organisations.index') !!}"><i class="fa fa-edit"></i><span>My Organisations</span></a>
</li>

<li class="{{ Request::is('organisationusers*') ? 'active' : '' }}">
    <a href="{!! route('organisationusers.index') !!}"><i class="fa fa-edit"></i><span>Organisationusers</span></a>
</li>




<!-- Admin -->

    @if(Auth::user()->role_id <3)
    <li class="header"> Admin </li>

<li class="{{ Request::is('accounts*') ? 'active' : '' }}">
    <a href="{!! route('accounts.index') !!}"><i class="fa fa-edit"></i><span>Accounts</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('skills*') ? 'active' : '' }}">
    <a href="{!! route('skills.index') !!}"><i class="fa fa-edit"></i><span>Skills</span></a>
</li>

<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{!! route('roles.index') !!}"><i class="fa fa-edit"></i><span>Roles</span></a>
</li>

<li class="{{ Request::is('organisations*') ? 'active' : '' }}">
    <a href="{!! route('organisations.index') !!}"><i class="fa fa-edit"></i><span>Organisations</span></a>
</li>

<li class="{{ Request::is('jobs*') ? 'active' : '' }}">
    <a href="{!! route('jobs.index') !!}"><i class="fa fa-edit"></i><span>Jobs</span></a>
</li>


<li class="{{ Request::is('invitations*') ? 'active' : '' }}">
    <a href="{!! route('invitations.index') !!}"><i class="fa fa-edit"></i><span>Invitations</span></a>
</li>

<li class="{{ Request::is('failedJobs*') ? 'active' : '' }}">
    <a href="{!! route('failedJobs.index') !!}"><i class="fa fa-edit"></i><span>Failed Jobs</span></a>
</li>

<li class="{{ Request::is('countries*') ? 'active' : '' }}">
    <a href="{!! route('countries.index') !!}"><i class="fa fa-edit"></i><span>Countries</span></a>
</li>


@endif