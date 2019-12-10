<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateinvitationRequest;
use App\Http\Requests\UpdateinvitationRequest;
use App\Repositories\invitationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class invitationController extends AppBaseController
{
    /** @var  invitationRepository */
    private $invitationRepository;

    public function __construct(invitationRepository $invitationRepo)
    {
        $this->invitationRepository = $invitationRepo;
    }

    /**
     * Display a listing of the invitation.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $invitations = $this->invitationRepository->all();

        return view('invitations.index')
            ->with('invitations', $invitations);
    }

    /**
     * Show the form for creating a new invitation.
     *
     * @return Response
     */
    public function create()
    {
        return view('invitations.create');
    }

    /**
     * Store a newly created invitation in storage.
     *
     * @param CreateinvitationRequest $request
     *
     * @return Response
     */
    public function store(CreateinvitationRequest $request)
    {
        $input = $request->all();


        // kiem tra id user 
        $input['user_id'] = Auth::user()->id;

        $invitation = $this->invitationRepository->create($input);

        Flash::success('Invitation saved successfully.');

        return redirect(route('invitations.index'));
    }

    /**
     * Display the specified invitation.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $invitation = $this->invitationRepository->find($id);

        if (empty($invitation)) {
            Flash::error('Invitation not found');

            return redirect(route('invitations.index'));
        }

        return view('invitations.show')->with('invitation', $invitation);
    }

    /**
     * Show the form for editing the specified invitation.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $invitation = $this->invitationRepository->find($id);

        if (empty($invitation)) {
            Flash::error('Invitation not found');

            return redirect(route('invitations.index'));
        }

        return view('invitations.edit')->with('invitation', $invitation);
    }

    /**
     * Update the specified invitation in storage.
     *
     * @param int $id
     * @param UpdateinvitationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateinvitationRequest $request)
    {
        $invitation = $this->invitationRepository->find($id);

        if (empty($invitation)) {
            Flash::error('Invitation not found');

            return redirect(route('invitations.index'));
        }

        $invitation = $this->invitationRepository->update($request->all(), $id);

        Flash::success('Invitation updated successfully.');

        return redirect(route('invitations.index'));
    }

    /**
     * Remove the specified invitation from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $invitation = $this->invitationRepository->find($id);

        if (empty($invitation)) {
            Flash::error('Invitation not found');

            return redirect(route('invitations.index'));
        }

        $this->invitationRepository->delete($id);

        Flash::success('Invitation deleted successfully.');

        return redirect(route('invitations.index'));
    }
}
