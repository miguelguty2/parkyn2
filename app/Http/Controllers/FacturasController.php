<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFacturasRequest;
use App\Http\Requests\UpdateFacturasRequest;
use App\Repositories\FacturasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\vehiculos;
use Flash;
use App\User;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class FacturasController extends AppBaseController
{
    /** @var  FacturasRepository */
    private $facturasRepository;

    public function __construct(FacturasRepository $facturasRepo)
    {
        $this->facturasRepository = $facturasRepo;
    }

    /**
     * Display a listing of the Facturas.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $vehiculos=\DB::select('select facturas.tiempo,vehiculos.hora_ini,facturas.hora_final,facturas.total_pagar,vehiculos.placa,users.name,puestos.numero from facturas,vehiculos,users,puestos
             WHERE vehiculos.id = facturas.vehiculos_id and users.id=facturas.users_id and puestos.id = vehiculos.puestos_id;');

        $this->facturasRepository->pushCriteria(new RequestCriteria($request));
        $facturas = $this->facturasRepository->all();

        return view('facturas.index',compact('vehiculos'))
            ->with('facturas', $facturas);
    }

    /**
     * Show the form for creating a new Facturas.
     *
     * @return Response
     */
    public function create()
    {
         
         $vehiculos = vehiculos::pluck('placa','id');
         $users= User::pluck('name','id');
                
        $datos = ['vehiculos' => $vehiculos, 'users' => $users];
        return view('vehiculos.create')->with('datos', $datos);


      /**
        return view('facturas.create');
    **/
    }

    /**
     * Store a newly created Facturas in storage.
     *
     * @param CreateFacturasRequest $request
     *
     * @return Response
     */
    public function store(CreateFacturasRequest $request)
    {
        $input = $request->all();

        $facturas = $this->facturasRepository->create($input);

        Flash::success('Facturas saved successfully.');

        return redirect(route('facturas.index'));
    }

    /**
     * Display the specified Facturas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $facturas = $this->facturasRepository->findWithoutFail($id);

        if (empty($facturas)) {
            Flash::error('Facturas not found');

            return redirect(route('facturas.index'));
        }

        return view('facturas.show')->with('facturas', $facturas);
    }

    /**
     * Show the form for editing the specified Facturas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $facturas = $this->facturasRepository->findWithoutFail($id);

        if (empty($facturas)) {
            Flash::error('Facturas not found');

            return redirect(route('facturas.index'));
        }
        
        return view('facturas.edit')->with('facturas', $facturas);
    }

    /**
     * Update the specified Facturas in storage.
     *
     * @param  int              $id
     * @param UpdateFacturasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFacturasRequest $request)
    {
        $facturas = $this->facturasRepository->findWithoutFail($id);

        if (empty($facturas)) {
            Flash::error('Facturas not found');

            return redirect(route('facturas.index'));
        }

        $facturas = $this->facturasRepository->update($request->all(), $id);

        Flash::success('Facturas updated successfully.');

        return redirect(route('facturas.index'));
    }

    /**
     * Remove the specified Facturas from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $facturas = $this->facturasRepository->findWithoutFail($id);

        if (empty($facturas)) {
            Flash::error('Facturas not found');

            return redirect(route('facturas.index'));
        }

        $this->facturasRepository->delete($id);

        Flash::success('Facturas deleted successfully.');

        return redirect(route('facturas.index'));
    }
}
