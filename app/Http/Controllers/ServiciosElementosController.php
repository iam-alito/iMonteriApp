<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateServiciosElementosRequest;
use App\Http\Requests\UpdateServiciosElementosRequest;
use App\Repositories\ServiciosElementosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Elementos;
use App\Models\Servicios;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ServiciosElementosController extends AppBaseController
{
    /** @var  ServiciosElementosRepository */
    private $serviciosElementosRepository;

    public function __construct(ServiciosElementosRepository $serviciosElementosRepo)
    {
        $this->serviciosElementosRepository = $serviciosElementosRepo;
    }

    /**
     * Display a listing of the ServiciosElementos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->serviciosElementosRepository->pushCriteria(new RequestCriteria($request));
        $serviciosElementos = $this->serviciosElementosRepository->all();

        return view('servicios_elementos.index')
            ->with('serviciosElementos', $serviciosElementos);
    }

    /**
     * Show the form for creating a new ServiciosElementos.
     *
     * @return Response
     */
    public function create()
    {
        $servicios=Servicios::pluck('descripcion','id');
        $elementos=Elementos::pluck('descripcion','id');
        $datos = ['elementos' => $elementos, 'servicios'=>$servicios];
        return view('servicios_elementos.create')->with('datos',$datos);
    }

    /**
     * Store a newly created ServiciosElementos in storage.
     *
     * @param CreateServiciosElementosRequest $request
     *
     * @return Response
     */
    public function store(CreateServiciosElementosRequest $request)
    {
        $input = $request->all();

        $serviciosElementos = $this->serviciosElementosRepository->create($input);

        Flash::success('Servicios Elementos saved successfully.');

        return redirect(route('serviciosElementos.index'));
    }

    /**
     * Display the specified ServiciosElementos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $serviciosElementos = $this->serviciosElementosRepository->findWithoutFail($id);

        if (empty($serviciosElementos)) {
            Flash::error('Servicios Elementos not found');

            return redirect(route('serviciosElementos.index'));
        }

        return view('servicios_elementos.show')->with('serviciosElementos', $serviciosElementos);
    }

    /**
     * Show the form for editing the specified ServiciosElementos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $serviciosElementos = $this->serviciosElementosRepository->findWithoutFail($id);
        $servicios=Servicios::pluck('descripcion','id');
        $elementos=Elementos::pluck('descripcion','id');
        $datos = ['elementos' => $elementos, 'servicios'=>$servicios];
        if (empty($serviciosElementos)) {
            Flash::error('Servicios Elementos not found');

            return redirect(route('serviciosElementos.index'));
        }
                $servicios=Servicios::pluck('descripcion','id');
        $elementos=Elementos::pluck('descripcion','id');
        $datos = ['elementos' => $elementos, 'servicios'=>$servicios, 'serviciosElementos'=>$serviciosElementos];
        return view('servicios_elementos.edit')->with('datos', $datos);
    }

    /**
     * Update the specified ServiciosElementos in storage.
     *
     * @param  int              $id
     * @param UpdateServiciosElementosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateServiciosElementosRequest $request)
    {
        $serviciosElementos = $this->serviciosElementosRepository->findWithoutFail($id);

        if (empty($serviciosElementos)) {
            Flash::error('Servicios Elementos not found');

            return redirect(route('serviciosElementos.index'));
        }

        $serviciosElementos = $this->serviciosElementosRepository->update($request->all(), $id);

        Flash::success('Servicios Elementos updated successfully.');

        return redirect(route('serviciosElementos.index'));
    }

    /**
     * Remove the specified ServiciosElementos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $serviciosElementos = $this->serviciosElementosRepository->findWithoutFail($id);

        if (empty($serviciosElementos)) {
            Flash::error('Servicios Elementos not found');

            return redirect(route('serviciosElementos.index'));
        }

        $this->serviciosElementosRepository->delete($id);

        Flash::success('Servicios Elementos deleted successfully.');

        return redirect(route('serviciosElementos.index'));
    }
}
