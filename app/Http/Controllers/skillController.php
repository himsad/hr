<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateskillRequest;
use App\Http\Requests\UpdateskillRequest;
use App\Repositories\skillRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class skillController extends AppBaseController
{
    /** @var  skillRepository */
    private $skillRepository;

    public function __construct(skillRepository $skillRepo)
    {
        $this->skillRepository = $skillRepo;
    }

    /**
     * Display a listing of the skill.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $skills = $this->skillRepository->all();

        return view('skills.index')
            ->with('skills', $skills);
    }

    /**
     * Show the form for creating a new skill.
     *
     * @return Response
     */
    public function create()
    {
        return view('skills.create');
    }

    /**
     * Store a newly created skill in storage.
     *
     * @param CreateskillRequest $request
     *
     * @return Response
     */
    public function store(CreateskillRequest $request)
    {
        $input = $request->all();

        $skill = $this->skillRepository->create($input);

        Flash::success('Skill saved successfully.');

        return redirect(route('skills.index'));
    }

    /**
     * Display the specified skill.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $skill = $this->skillRepository->find($id);

        if (empty($skill)) {
            Flash::error('Skill not found');

            return redirect(route('skills.index'));
        }

        return view('skills.show')->with('skill', $skill);
    }

    /**
     * Show the form for editing the specified skill.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $skill = $this->skillRepository->find($id);

        if (empty($skill)) {
            Flash::error('Skill not found');

            return redirect(route('skills.index'));
        }

        return view('skills.edit')->with('skill', $skill);
    }

    /**
     * Update the specified skill in storage.
     *
     * @param int $id
     * @param UpdateskillRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateskillRequest $request)
    {
        $skill = $this->skillRepository->find($id);

        if (empty($skill)) {
            Flash::error('Skill not found');

            return redirect(route('skills.index'));
        }

        $skill = $this->skillRepository->update($request->all(), $id);

        Flash::success('Skill updated successfully.');

        return redirect(route('skills.index'));
    }

    /**
     * Remove the specified skill from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $skill = $this->skillRepository->find($id);

        if (empty($skill)) {
            Flash::error('Skill not found');

            return redirect(route('skills.index'));
        }

        $this->skillRepository->delete($id);

        Flash::success('Skill deleted successfully.');

        return redirect(route('skills.index'));
    }
}
