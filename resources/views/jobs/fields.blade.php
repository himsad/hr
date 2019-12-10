
<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Skills Required Field -->
<div class="form-group col-sm-6">
    {!! Form::label('skills_required', 'Skills Required:') !!}
    {!! Form::text('skills_required', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
        <label for="organisation">My Organisation:</label>
        <select class="form-control" id="organisation" name="organisation_id">
          @if(isset($job))
          <option value="{{ $job->organisation['id']}}">{{ $job->organisation['name'] }}</option>
          @endif
          @foreach($organisations as $organisation)
          <option value="{{ $organisation->id }}">{{ $organisation->name }}</option>
          @endforeach
        </select>
 </div>


<div class="form-group col-sm-6">
        <label for="country">Countries:</label>
        <select class="form-control" id="country" name="country_id">
          @if(isset($job))
          <option value="{{ $job->country['id']}}">{{ $job->country['name'] }}</option>
          @endif
          @foreach($countries as $country)
          <option value="{{ $country->id }}">{{ $country->name }}</option>
          @endforeach
        </select>
 </div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>



<div class="form-group col-sm-6">
        <label for="work_type">Work type:</label>
        <select class="form-control" id="work_type" name="work_type">
            @if(isset($job))
          <option value="{{ $job->work_type}}"> {{ $job->work_type}}</option>
          @endif
          <option value="remote">remtoe</option>

          <option value="onsite">onsite</option>
        
        </select>
 </div>


<div class="form-group col-sm-6">
        <label for="country">Job type:</label>
        <select class="form-control" id="job_type" name="job_type">
            @if(isset($job))
          <option value="{{ $job->job_type}}"> {{ $job->job_type}}</option>
          @endif
          <option value="full time">full time</option>

          <option value="part time">part time</option>
      
        </select>
 </div>



<div class="form-group col-sm-6">
        <label for="status">Work type:</label>
        <select class="form-control" id="status" name="status">
            @if(isset($job))
          <option value="{{ $job->status}}"> {{ $job->status}}</option>
          @endif
          <option value="on">on</option>

          <option value="off">off</option>
      
        </select>
 </div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('jobs.index') !!}" class="btn btn-default">Cancel</a>
</div>
