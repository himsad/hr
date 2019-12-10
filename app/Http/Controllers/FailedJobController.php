<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFailedJobRequest;
use App\Http\Requests\UpdateFailedJobRequest;
use App\Repositories\FailedJobRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class FailedJobController extends AppBaseController
{
    /** @var  FailedJobRepository */
    private $failedJobRepository;

    public function __construct(FailedJobRepository $failedJobRepo)
    {
        $this->failedJobRepository = $failedJobRepo;
    }

    /**
     * Display a listing of the FailedJob.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $failedJobs = $this->failedJobRepository->all();

        return view('failed_jobs.index')
            ->with('failedJobs', $failedJobs);
    }

    /**
     * Show the form for creating a new FailedJob.
     *
     * @return Response
     */
    public function create()
    {
        return view('failed_jobs.create');
    }

    /**
     * Store a newly created FailedJob in storage.
     *
     * @param CreateFailedJobRequest $request
     *
     * @return Response
     */
    public function store(CreateFailedJobRequest $request)
    {
        $input = $request->all();

        $failedJob = $this->failedJobRepository->create($input);

        Flash::success('Failed Job saved successfully.');

        return redirect(route('failedJobs.index'));
    }

    /**
     * Display the specified FailedJob.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $failedJob = $this->failedJobRepository->find($id);

        if (empty($failedJob)) {
            Flash::error('Failed Job not found');

            return redirect(route('failedJobs.index'));
        }

        return view('failed_jobs.show')->with('failedJob', $failedJob);
    }

    /**
     * Show the form for editing the specified FailedJob.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $failedJob = $this->failedJobRepository->find($id);

        if (empty($failedJob)) {
            Flash::error('Failed Job not found');

            return redirect(route('failedJobs.index'));
        }

        return view('failed_jobs.edit')->with('failedJob', $failedJob);
    }

    /**
     * Update the specified FailedJob in storage.
     *
     * @param int $id
     * @param UpdateFailedJobRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFailedJobRequest $request)
    {
        $failedJob = $this->failedJobRepository->find($id);

        if (empty($failedJob)) {
            Flash::error('Failed Job not found');

            return redirect(route('failedJobs.index'));
        }

        $failedJob = $this->failedJobRepository->update($request->all(), $id);

        Flash::success('Failed Job updated successfully.');

        return redirect(route('failedJobs.index'));
    }

    /**
     * Remove the specified FailedJob from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $failedJob = $this->failedJobRepository->find($id);

        if (empty($failedJob)) {
            Flash::error('Failed Job not found');

            return redirect(route('failedJobs.index'));
        }

        $this->failedJobRepository->delete($id);

        Flash::success('Failed Job deleted successfully.');

        return redirect(route('failedJobs.index'));
    }
}
