<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatejobRequest;
use App\Http\Requests\UpdatejobRequest;
use App\Repositories\jobRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Auth;
use Flash;
use Response;
use App\Models\Country;
use App\Models\Organisation;    
use App\Models\Jobs;

use App\Models\Invitation;
class jobController extends AppBaseController
{
    /** @var  jobRepository */
    private $jobRepository;

    public function __construct(jobRepository $jobRepo)
    {
        $this->jobRepository = $jobRepo;
    }

    /**
     * Display a listing of the job.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request, $job_type = null)
    
    {
        
        
        if($job_type == null){
           return redirect(route('jobs.all_jobs', 'all_jobs'));

        }else if($job_type == 'all_jobs'){
            Flash::info('All open job');
            $jobs = job::where('status', 'on')->paginate(20);

        }else if($job_type == 'job_i_created'){

            Flash::info('Job created successfully');
            $jobs = job::where('user_id', Auth::user()->id)->paginate(20);

        }else if($job_type == 'jobs_i_applied_for') {
            Flash::info('Job created successfully');
            $invitation = Invitation::where('user_id', Auth::user()->id)->get();
      

        }else if($job_type == 'admin_jobs' && Auth::check() && Auth::user()->role_id<3){
            Flash::info('Admin job');
            $jobs =job::paginate(20);
        }

       
  
        // cho nay la sao ta
        return view('jobs.index')
            ->with('jobs', $jobs);
    }





    /**
     * Show the form for creating a new job.
     *
     * @return Response
     */
    public function create()

    {
        $countries = Country::all();
        $organisations = Organisation::where('user_id', Auth::user()->id)->get();

        return view('jobs.create')
        ->with('job', $job)
        ->with('organisations', $organisations)
        ->with('countries', $countries);

      
    }

    /**
     * Store a newly created job in storage.
     *
     * @param CreatejobRequest $request
     *
     * @return Response
     */
    public function store(CreatejobRequest $request)
    {
        $input = $request->all();
        $input['user_id'] = Auth::user()->id;


        $job = $this->jobRepository->create($input);

        Flash::success('Job saved successfully.');

        return redirect(route('jobs.show', [$job->id]));
    }

    /**
     * Display the specified job.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $job = $this->jobRepository->find($id);

        if (empty($job)) {
            Flash::error('Job not found');

            return redirect(route('jobs.index'));
        }

        return view('jobs.show')->with('job', $job);
    }

    /**
     * Show the form for editing the specified job.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $job = $this->jobRepository->find($id);

        if (empty($job)) {
            Flash::error('Job not found');

            return redirect(route('jobs.index'));
        }

        $countries = Country::all();
        $organisations = Organisation::where('user_id', Auth::user()->id)->get();
        return view('jobs.edit')
        ->with('job', $job)
        ->with('organisations', $organisations)
        ->with('countries', $countries);
    }

    /**
     * Update the specified job in storage.
     *
     * @param int $id
     * @param UpdatejobRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatejobRequest $request)
    {
        $job = $this->jobRepository->find($id);

        if (empty($job)) {
            Flash::error('Job not found');

            return redirect(route('jobs.index'));
        }

        $job = $this->jobRepository->update($request->all(), $id);

        Flash::success('Job updated successfully.');

        return redirect(route('jobs.index'));
    }

    /**
     * Remove the specified job from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $job = $this->jobRepository->find($id);

        if (empty($job)) {
            Flash::error('Job not found');

            return redirect(route('jobs.index'));
        }

        $this->jobRepository->delete($id);

        Flash::success('Job deleted successfully.');

        return redirect(route('jobs.index'));
    }


}
