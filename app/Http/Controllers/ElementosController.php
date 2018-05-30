<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateElementosRequest;
use App\Http\Requests\UpdateElementosRequest;
use App\Repositories\ElementosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ElementosController extends AppBaseController
{
    /** @var  ElementosRepository */
    private $elementosRepository;

    public function __construct(ElementosRepository $elementosRepo)
    {
        $this->elementosRepository = $elementosRepo;
    }

    /**
     * Display a listing of the Elementos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->elementosRepository->pushCriteria(new RequestCriteria($request));
        $elementos = $this->elementosRepository->all();

        return view('elementos.index')
            ->with('elementos', $elementos);
    }

    /**
     * Show the form for creating a new Elementos.
     *
     * @return Response
     */
    public function create()
    {
        return view('elementos.create');
    }

    /**
     * Store a newly created Elementos in storage.
     *
     * @param CreateElementosRequest $request
     *
     * @return Response
     */
    public function store(CreateElementosRequest $request)
    {
        $input = $request->all();

        $elementos = $this->elementosRepository->create($input);

        Flash::success('Elementos agregado exitosamente.');

        return redirect(route('elementos.index'));
    }

    /**
     * Display the specified Elementos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        //$elementos = $this->elementosRepository->findWithoutFail($id);
        $elementos = DB::select('
                SELECT e.id, e.descripcion, f.foto, e.created_at, e.updated_at,e.lon,e.lat,e.icono, s.descripcion as servicios_id
                FROM elementos e, fotos f, servicios s, servicios_elementos se
                WHERE e.id=f.elementos_id AND s.id=se.servicios_id AND e.id=se.elementos_id AND e.id='.$id
        );
        if (empty($elementos)) {
            Flash::error('Elementos no encontrado');

            return redirect(route('elementos.index'));
        }

        return view('elementos.show')->with('elementos', $elementos);
    }

    /**
     * Show the form for editing the specified Elementos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $elementos = $this->elementosRepository->findWithoutFail($id);

        if (empty($elementos)) {
            Flash::error('Elementos no encontrado');

            return redirect(route('elementos.index'));
        }

        return view('elementos.edit')->with('elementos', $elementos);
    }

    /**
     * Update the specified Elementos in storage.
     *
     * @param  int              $id
     * @param UpdateElementosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateElementosRequest $request)
    {
        $elementos = $this->elementosRepository->findWithoutFail($id);

        if (empty($elementos)) {
            Flash::error('Elementos no encontrado');

            return redirect(route('elementos.index'));
        }

        $elementos = $this->elementosRepository->update($request->all(), $id);

        Flash::success('Elementos actualizado exitosamente.');

        return redirect(route('elementos.index'));
    }

    /**
     * Remove the specified Elementos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $elementos = $this->elementosRepository->findWithoutFail($id);

        if (empty($elementos)) {
            Flash::error('Elementos no encontrado');

            return redirect(route('elementos.index'));
        }

        $this->elementosRepository->delete($id);

        Flash::success('Elementos eliminado exitosamente.');

        return redirect(route('elementos.index'));
    }
}
