<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateServiciosRequest;
use App\Http\Requests\UpdateServiciosRequest;
use App\Repositories\ServiciosRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\tipoServicios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ServiciosController extends AppBaseController
{
    /** @var  ServiciosRepository */
    private $serviciosRepository;

    public function __construct(ServiciosRepository $serviciosRepo)
    {
        $this->serviciosRepository = $serviciosRepo;
    }

    /**
     * Display a listing of the Servicios.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        /*$this->serviciosRepository->pushCriteria(new RequestCriteria($request));
        $servicios = $this->serviciosRepository->all();
        $tipo_servicios=tipoServicios::pluck('descripcion','id');*/
        $servicios = DB::select('
                SELECT s.id, ts.descripcion as tipo_servicios_id, s.descripcion, s.valor, s.icono
                FROM servicios s, tipo_servicios ts
                WHERE s.tipo_servicios_id=ts.id'
        );
        return view('servicios.index')
            ->with('servicios', $servicios);
    }

    /**
     * Show the form for creating a new Servicios.
     *
     * @return Response
     */
    public function create()
    {
        $tipo_servicios=tipoServicios::pluck('descripcion','id');
        $datos = ['tipos' => $tipo_servicios];
        return view('servicios.create')->with('datos', $datos);
    }

    /**
     * Store a newly created Servicios in storage.
     *
     * @param CreateServiciosRequest $request
     *
     * @return Response
     */
    public function store(CreateServiciosRequest $request)
    {
        $input = $request->all();

        $servicios = $this->serviciosRepository->create($input);

        Flash::success('Servicios agregada exitosamente.');

        return redirect(route('servicios.index'));
    }

    /**
     * Display the specified Servicios.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
    $servicios = DB::select('
                SELECT s.id, ts.descripcion as tipo_servicios_id, s.descripcion, s.valor, s.icono,s.created_at,s.updated_at
                FROM servicios s, tipo_servicios ts
                WHERE s.tipo_servicios_id=ts.id'
        );
        //$servicios = $this->serviciosRepository->findWithoutFail($id);

        if (empty($servicios)) {
            Flash::error('Servicios no encontrado');

            return redirect(route('servicios.index'));
        }

        return view('servicios.show')->with('servicios', $servicios);
    }

    /**
     * Show the form for editing the specified Servicios.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $servicios = $this->serviciosRepository->findWithoutFail($id);
        $tipo_servicios=tipoServicios::pluck('descripcion','id');
        $datos = ['tipos' => $tipo_servicios];
        if (empty($servicios)) {
            Flash::error('Servicios no encontrado');

            return redirect(route('servicios.index'));
        }
        $tipo_servicios=tipoServicios::pluck('descripcion','id');
        $datos = ['tipos' => $tipo_servicios, 'servicios'=> $servicios];
        return view('servicios.edit')->with('datos', $datos);
    }

    /**
     * Update the specified Servicios in storage.
     *
     * @param  int              $id
     * @param UpdateServiciosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateServiciosRequest $request)
    {
        $servicios = $this->serviciosRepository->findWithoutFail($id);

        if (empty($servicios)) {
            Flash::error('Servicios no encontrado');

            return redirect(route('servicios.index'));
        }

        $servicios = $this->serviciosRepository->update($request->all(), $id);

        Flash::success('Servicios actualizado exitosamente.');

        return redirect(route('servicios.index'));
    }

    /**
     * Remove the specified Servicios from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $servicios = $this->serviciosRepository->findWithoutFail($id);

        if (empty($servicios)) {
            Flash::error('Servicios no encontrado');

            return redirect(route('servicios.index'));
        }

        $this->serviciosRepository->delete($id);

        Flash::success('Servicios eliminado exitosamente.');

        return redirect(route('servicios.index'));
    }
}
