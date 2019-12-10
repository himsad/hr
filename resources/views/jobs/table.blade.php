<div class="table-condensed ">
    <table class="table table-hover" id="jobs-table">
        <thead>
            <tr>
       
          
                @if(Auth::check())
                <th colspan="3">Action</th>
                @endif
                
            </tr>
        </thead>
        <tbody> 
        @foreach($jobs as $job)
            <tr>
                <!-- Title vs work type, job type -->
            <td>
                    <a href="{!! route('jobs.show', [$job->id]) !!}" class="text-bold lead">
                         {!! $job->title !!}
                    </a>
                    <br/>
                    <span>
                        <i class="glyphicon glyphicon-map-marker"></i>
                        {!! $job->work_type !!} | {!! $job->job_type !!}
                    </span>
            <br/>

            <!--quan ly xuat hien Ten user -->
                        <i class="fa-user-plus"></i>
            @if(Auth::check() && (Auth::user()->id == $job->user_id || Auth::user()->id == Auth::user()->role_id <3 ))
                <a href="/users/{!! $job->user['id']  !!}" class="text-muted text:hover">{!! $job->user['name'] !!}</a>
            @endif

            <!-- Ten organisation va country -->

             | <a href="/organisations/{!! $job->organisation['id'] !!}" class="text-muted text:hover">{!! $job->organisation['name'] !!}</a>
               | <a href="/countries/{!! $job->country_id !!}" class="text-muted text:hover" >{!! $job->country['name'] !!}</a>
            </td>


            @if(Auth::check() && (Auth::user()->id == $job->user_id || Auth::user()->id == Auth::user()->role_id <3 ))

        
                <td>
                        <!-- Tinh trang status -->
                    <span>{!! $job->status !!}</span>


                    <!--kiem tra ai duoc quyen xoa, edit -->   
                    {!! Form::open(['route' => ['jobs.destroy', $job->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>  
                        <a href="{!! route('jobs.edit', [$job->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>',
                         ['type' => 'submit', 'class' => 'btn btn-danger btn-xs',
                          'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}               
                </td>
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $jobs->links() }}
</div>
