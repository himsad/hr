<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecountryRequest;
use App\Http\Requests\UpdatecountryRequest;
use App\Repositories\countryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class countryController extends AppBaseController
{
    /** @var  countryRepository */
    private $countryRepository;

    public function __construct(countryRepository $countryRepo)
    {
        $this->countryRepository = $countryRepo;
    }

    /**
     * Display a listing of the country.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $countries = $this->countryRepository->all();

        return view('countries.index')
            ->with('countries', $countries);
    }

    /**
     * Show the form for creating a new country.
     *
     * @return Response
     */
    public function create()
    {
        return view('countries.create');
    }

    /**
     * Store a newly created country in storage.
     *
     * @param CreatecountryRequest $request
     *
     * @return Response
     */
    public function store(CreatecountryRequest $request)
    {
        $input = $request->all();

        $country = $this->countryRepository->create($input);

        Flash::success('Country saved successfully.');

        return redirect(route('countries.index'));
    }

    /**
     * Display the specified country.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $country = $this->countryRepository->find($id);

        if (empty($country)) {
            Flash::error('Country not found');

            return redirect(route('countries.index'));
        }

        return view('countries.show')->with('country', $country);
    }

    /**
     * Show the form for editing the specified country.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $country = $this->countryRepository->find($id);

        if (empty($country)) {
            Flash::error('Country not found');

            return redirect(route('countries.index'));
        }

        return view('countries.edit')->with('country', $country);
    }

    /**
     * Update the specified country in storage.
     *
     * @param int $id
     * @param UpdatecountryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecountryRequest $request)
    {
        $country = $this->countryRepository->find($id);

        if (empty($country)) {
            Flash::error('Country not found');

            return redirect(route('countries.index'));
        }

        $country = $this->countryRepository->update($request->all(), $id);

        Flash::success('Country updated successfully.');

        return redirect(route('countries.index'));
    }

    /**
     * Remove the specified country from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $country = $this->countryRepository->find($id);

        if (empty($country)) {
            Flash::error('Country not found');

            return redirect(route('countries.index'));
        }

        $this->countryRepository->delete($id);

        Flash::success('Country deleted successfully.');

        return redirect(route('countries.index'));
    }
}
