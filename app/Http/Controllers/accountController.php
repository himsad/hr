<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateaccountRequest;
use App\Http\Requests\UpdateaccountRequest;
use App\Repositories\accountRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class accountController extends AppBaseController
{
    /** @var  accountRepository */
    private $accountRepository;

    public function __construct(accountRepository $accountRepo)
    {
        $this->accountRepository = $accountRepo;
    }

    /**
     * Display a listing of the account.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $accounts = $this->accountRepository->all();

        return view('accounts.index')
            ->with('accounts', $accounts);
    }

    /**
     * Show the form for creating a new account.
     *
     * @return Response
     */
    public function create()
    {
        return view('accounts.create');
    }

    /**
     * Store a newly created account in storage.
     *
     * @param CreateaccountRequest $request
     *
     * @return Response
     */
    public function store(CreateaccountRequest $request)
    {
        $input = $request->all();

        $account = $this->accountRepository->create($input);

        Flash::success('Account saved successfully.');

        return redirect(route('accounts.index'));
    }

    /**
     * Display the specified account.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $account = $this->accountRepository->find($id);

        if (empty($account)) {
            Flash::error('Account not found');

            return redirect(route('accounts.index'));
        }

        return view('accounts.show')->with('account', $account);
    }

    /**
     * Show the form for editing the specified account.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $account = $this->accountRepository->find($id);

        if (empty($account)) {
            Flash::error('Account not found');

            return redirect(route('accounts.index'));
        }

        return view('accounts.edit')->with('account', $account);
    }

    /**
     * Update the specified account in storage.
     *
     * @param int $id
     * @param UpdateaccountRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateaccountRequest $request)
    {
        $account = $this->accountRepository->find($id);

        if (empty($account)) {
            Flash::error('Account not found');

            return redirect(route('accounts.index'));
        }

        $account = $this->accountRepository->update($request->all(), $id);

        Flash::success('Account updated successfully.');

        return redirect(route('accounts.index'));
    }

    /**
     * Remove the specified account from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $account = $this->accountRepository->find($id);

        if (empty($account)) {
            Flash::error('Account not found');

            return redirect(route('accounts.index'));
        }

        $this->accountRepository->delete($id);

        Flash::success('Account deleted successfully.');

        return redirect(route('accounts.index'));
    }
}
