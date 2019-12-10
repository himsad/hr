<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateorganisationuserRequest;
use App\Http\Requests\UpdateorganisationuserRequest;
use App\Repositories\organisationuserRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class organisationuserController extends AppBaseController
{
    /** @var  organisationuserRepository */
    private $organisationuserRepository;

    public function __construct(organisationuserRepository $organisationuserRepo)
    {
        $this->organisationuserRepository = $organisationuserRepo;
    }

    /**
     * Display a listing of the organisationuser.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $organisationusers = $this->organisationuserRepository->all();

        return view('organisationusers.index')
            ->with('organisationusers', $organisationusers);
    }

    /**
     * Show the form for creating a new organisationuser.
     *
     * @return Response
     */
    public function create()
    {
        return view('organisationusers.create');
    }

    /**
     * Store a newly created organisationuser in storage.
     *
     * @param CreateorganisationuserRequest $request
     *
     * @return Response
     */
    public function store(CreateorganisationuserRequest $request)
    {
        $input = $request->all();

        $organisationuser = $this->organisationuserRepository->create($input);

        Flash::success('Organisationuser saved successfully.');

        return redirect(route('organisationusers.index'));
    }

    /**
     * Display the specified organisationuser.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $organisationuser = $this->organisationuserRepository->find($id);

        if (empty($organisationuser)) {
            Flash::error('Organisationuser not found');

            return redirect(route('organisationusers.index'));
        }

        return view('organisationusers.show')->with('organisationuser', $organisationuser);
    }

    /**
     * Show the form for editing the specified organisationuser.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $organisationuser = $this->organisationuserRepository->find($id);

        if (empty($organisationuser)) {
            Flash::error('Organisationuser not found');

            return redirect(route('organisationusers.index'));
        }

        return view('organisationusers.edit')->with('organisationuser', $organisationuser);
    }

    /**
     * Update the specified organisationuser in storage.
     *
     * @param int $id
     * @param UpdateorganisationuserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateorganisationuserRequest $request)
    {
        $organisationuser = $this->organisationuserRepository->find($id);

        if (empty($organisationuser)) {
            Flash::error('Organisationuser not found');

            return redirect(route('organisationusers.index'));
        }

        $organisationuser = $this->organisationuserRepository->update($request->all(), $id);

        Flash::success('Organisationuser updated successfully.');

        return redirect(route('organisationusers.index'));
    }

    /**
     * Remove the specified organisationuser from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $organisationuser = $this->organisationuserRepository->find($id);

        if (empty($organisationuser)) {
            Flash::error('Organisationuser not found');

            return redirect(route('organisationusers.index'));
        }

        $this->organisationuserRepository->delete($id);

        Flash::success('Organisationuser deleted successfully.');

        return redirect(route('organisationusers.index'));
    }
}
