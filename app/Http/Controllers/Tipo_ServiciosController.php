<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTipo_ServiciosRequest;
use App\Http\Requests\UpdateTipo_ServiciosRequest;
use App\Repositories\Tipo_ServiciosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class Tipo_ServiciosController extends AppBaseController
{
    /** @var  Tipo_ServiciosRepository */
    private $tipoServiciosRepository;

    public function __construct(Tipo_ServiciosRepository $tipoServiciosRepo)
    {
        $this->tipoServiciosRepository = $tipoServiciosRepo;
    }

    /**
     * Display a listing of the Tipo_Servicios.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoServiciosRepository->pushCriteria(new RequestCriteria($request));
        $tipoServicios = $this->tipoServiciosRepository->all();

        return view('tipo__servicios.index')
            ->with('tipoServicios', $tipoServicios);
    }

    /**
     * Show the form for creating a new Tipo_Servicios.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo__servicios.create');
    }

    /**
     * Store a newly created Tipo_Servicios in storage.
     *
     * @param CreateTipo_ServiciosRequest $request
     *
     * @return Response
     */
    public function store(CreateTipo_ServiciosRequest $request)
    {
        $input = $request->all();

        $tipoServicios = $this->tipoServiciosRepository->create($input);

        Flash::success('Tipo  Servicios saved successfully.');

        return redirect(route('tipoServicios.index'));
    }

    /**
     * Display the specified Tipo_Servicios.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoServicios = $this->tipoServiciosRepository->findWithoutFail($id);

        if (empty($tipoServicios)) {
            Flash::error('Tipo  Servicios not found');

            return redirect(route('tipoServicios.index'));
        }

        return view('tipo__servicios.show')->with('tipoServicios', $tipoServicios);
    }

    /**
     * Show the form for editing the specified Tipo_Servicios.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoServicios = $this->tipoServiciosRepository->findWithoutFail($id);

        if (empty($tipoServicios)) {
            Flash::error('Tipo  Servicios not found');

            return redirect(route('tipoServicios.index'));
        }

        return view('tipo__servicios.edit')->with('tipoServicios', $tipoServicios);
    }

    /**
     * Update the specified Tipo_Servicios in storage.
     *
     * @param  int              $id
     * @param UpdateTipo_ServiciosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipo_ServiciosRequest $request)
    {
        $tipoServicios = $this->tipoServiciosRepository->findWithoutFail($id);

        if (empty($tipoServicios)) {
            Flash::error('Tipo  Servicios not found');

            return redirect(route('tipoServicios.index'));
        }

        $tipoServicios = $this->tipoServiciosRepository->update($request->all(), $id);

        Flash::success('Tipo  Servicios updated successfully.');

        return redirect(route('tipoServicios.index'));
    }

    /**
     * Remove the specified Tipo_Servicios from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoServicios = $this->tipoServiciosRepository->findWithoutFail($id);

        if (empty($tipoServicios)) {
            Flash::error('Tipo  Servicios not found');

            return redirect(route('tipoServicios.index'));
        }

        $this->tipoServiciosRepository->delete($id);

        Flash::success('Tipo  Servicios deleted successfully.');

        return redirect(route('tipoServicios.index'));
    }
}
