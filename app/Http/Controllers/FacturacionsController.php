<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFacturacionsRequest;
use App\Http\Requests\UpdateFacturacionsRequest;
use App\Repositories\FacturacionsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class FacturacionsController extends AppBaseController
{
    /** @var  FacturacionsRepository */
    private $facturacionsRepository;

    public function __construct(FacturacionsRepository $facturacionsRepo)
    {
        $this->facturacionsRepository = $facturacionsRepo;
    }

    /**
     * Display a listing of the Facturacions.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->facturacionsRepository->pushCriteria(new RequestCriteria($request));
        $facturacions = $this->facturacionsRepository->all();

        return view('facturacions.index')
            ->with('facturacions', $facturacions);
    }

    /**
     * Show the form for creating a new Facturacions.
     *
     * @return Response
     */
    public function create()
    {
        return view('facturacions.create');
    }

    /**
     * Store a newly created Facturacions in storage.
     *
     * @param CreateFacturacionsRequest $request
     *
     * @return Response
     */
    public function store(CreateFacturacionsRequest $request)
    {
        $input = $request->all();

        $facturacions = $this->facturacionsRepository->create($input);

        Flash::success('Facturacions saved successfully.');

        return redirect(route('facturacions.index'));
    }

    /**
     * Display the specified Facturacions.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $facturacions = $this->facturacionsRepository->findWithoutFail($id);

        if (empty($facturacions)) {
            Flash::error('Facturacions not found');

            return redirect(route('facturacions.index'));
        }

        return view('facturacions.show')->with('facturacions', $facturacions);
    }

    /**
     * Show the form for editing the specified Facturacions.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $facturacions = $this->facturacionsRepository->findWithoutFail($id);

        if (empty($facturacions)) {
            Flash::error('Facturacions not found');

            return redirect(route('facturacions.index'));
        }

        return view('facturacions.edit')->with('facturacions', $facturacions);
    }

    /**
     * Update the specified Facturacions in storage.
     *
     * @param  int              $id
     * @param UpdateFacturacionsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFacturacionsRequest $request)
    {
        $facturacions = $this->facturacionsRepository->findWithoutFail($id);

        if (empty($facturacions)) {
            Flash::error('Facturacions not found');

            return redirect(route('facturacions.index'));
        }

        $facturacions = $this->facturacionsRepository->update($request->all(), $id);

        Flash::success('Facturacions updated successfully.');

        return redirect(route('facturacions.index'));
    }

    /**
     * Remove the specified Facturacions from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $facturacions = $this->facturacionsRepository->findWithoutFail($id);

        if (empty($facturacions)) {
            Flash::error('Facturacions not found');

            return redirect(route('facturacions.index'));
        }

        $this->facturacionsRepository->delete($id);

        Flash::success('Facturacions deleted successfully.');

        return redirect(route('facturacions.index'));
    }
}
