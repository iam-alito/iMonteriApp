<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTipoServiciosRequest;
use App\Http\Requests\UpdateTipoServiciosRequest;
use App\Repositories\TipoServiciosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TipoServiciosController extends AppBaseController
{
    /** @var  TipoServiciosRepository */
    private $tipoServiciosRepository;

    public function __construct(TipoServiciosRepository $tipoServiciosRepo)
    {
        $this->tipoServiciosRepository = $tipoServiciosRepo;
    }

    /**
     * Display a listing of the TipoServicios.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoServiciosRepository->pushCriteria(new RequestCriteria($request));
        $tipoServicios = $this->tipoServiciosRepository->all();

        return view('tipo_servicios.index')
            ->with('tipoServicios', $tipoServicios);
    }

    /**
     * Show the form for creating a new TipoServicios.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_servicios.create');
    }

    /**
     * Store a newly created TipoServicios in storage.
     *
     * @param CreateTipoServiciosRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoServiciosRequest $request)
    {
        $input = $request->all();

        $tipoServicios = $this->tipoServiciosRepository->create($input);

        Flash::success('Tipo de Servicio agregado exitosamente.');

        return redirect(route('tipoServicios.index'));
    }

    /**
     * Display the specified TipoServicios.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoServicios = $this->tipoServiciosRepository->findWithoutFail($id);

        if (empty($tipoServicios)) {
            Flash::error('Tipo Servicios not found');

            return redirect(route('tipoServicios.index'));
        }

        return view('tipo_servicios.show')->with('tipoServicios', $tipoServicios);
    }

    /**
     * Show the form for editing the specified TipoServicios.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoServicios = $this->tipoServiciosRepository->findWithoutFail($id);

        if (empty($tipoServicios)) {
            Flash::error('Tipo Servicios not found');

            return redirect(route('tipoServicios.index'));
        }

        return view('tipo_servicios.edit')->with('tipoServicios', $tipoServicios);
    }

    /**
     * Update the specified TipoServicios in storage.
     *
     * @param  int              $id
     * @param UpdateTipoServiciosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoServiciosRequest $request)
    {
        $tipoServicios = $this->tipoServiciosRepository->findWithoutFail($id);

        if (empty($tipoServicios)) {
            Flash::error('Tipo Servicios not found');

            return redirect(route('tipoServicios.index'));
        }

        $tipoServicios = $this->tipoServiciosRepository->update($request->all(), $id);

        Flash::success('Tipo Servicios updated successfully.');

        return redirect(route('tipoServicios.index'));
    }

    /**
     * Remove the specified TipoServicios from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoServicios = $this->tipoServiciosRepository->findWithoutFail($id);

        if (empty($tipoServicios)) {
            Flash::error('Tipo Servicios not found');

            return redirect(route('tipoServicios.index'));
        }

        $this->tipoServiciosRepository->delete($id);

        Flash::success('Tipo Servicios deleted successfully.');

        return redirect(route('tipoServicios.index'));
    }
}
