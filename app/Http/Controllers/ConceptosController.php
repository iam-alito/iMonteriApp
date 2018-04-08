<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateConceptosRequest;
use App\Http\Requests\UpdateConceptosRequest;
use App\Repositories\ConceptosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\tipoConceptos;
use App\Models\Estado;
use Illuminate\Support\Facades\DB;

class ConceptosController extends AppBaseController
{
    /** @var  ConceptosRepository */
    private $conceptosRepository;

    public function __construct(ConceptosRepository $conceptosRepo)
    {
        $this->conceptosRepository = $conceptosRepo;
    }

    /**
     * Display a listing of the Conceptos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $conceptos =  DB::table('conceptos')
                ->join('users', 'conceptos.users_id', '=', 'users.id')
                ->join('estados', 'conceptos.estado_id', '=', 'estados.id')
                ->join('tipo_conceptos', 'conceptos.tipo_conceptos_id', '=', 'tipo_conceptos.id')
                ->selectRaw('conceptos.*,users.name,estados.descripcion as desc_estado,tipo_conceptos.descripcion as desctp')
                ->get();

        return view('conceptos.index')
            ->with('conceptos', $conceptos);
    }

    /**
     * Show the form for creating a new Conceptos.
     *
     * @return Response
     */
    public function create()
    {
        $tipo_conceptos=tipoConceptos::pluck('descripcion','id');
        $estados=Estado::pluck('descripcion','id');
        $datos = ['tipos' => $tipo_conceptos, 'estados' => $estados];
        return view('conceptos.create')->with('datos', $datos);
    }

    /**
     * Store a newly created Conceptos in storage.
     *
     * @param CreateConceptosRequest $request
     *
     * @return Response
     */
    public function store(CreateConceptosRequest $request)
    {
        $input = $request->all();

        $conceptos = $this->conceptosRepository->create($input);

        Flash::success('Conceptos Guardado exitosamente.');

        return redirect(route('conceptos.index'));
    }

    /**
     * Display the specified Conceptos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $conceptos = $this->conceptosRepository->findWithoutFail($id);

        if (empty($conceptos)) {
            Flash::error('Conceptos not found');

            return redirect(route('conceptos.index'));
        }

        return view('conceptos.show')->with('conceptos', $conceptos);
    }

    /**
     * Show the form for editing the specified Conceptos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $conceptos = $this->conceptosRepository->findWithoutFail($id);

        if (empty($conceptos)) {
            Flash::error('Conceptos not found');

            return redirect(route('conceptos.index'));
        }

        $tipo_conceptos=tipoConceptos::pluck('descripcion','id');
        $estados=Estado::pluck('descripcion','id');
        $datos = ['tipos' => $tipo_conceptos, 'estados' => $estados,'conceptos'=> $conceptos];
        return view('conceptos.edit')->with('datos', $datos);

        //return view('conceptos.edit')->with('conceptos', $conceptos);
    }

    /**
     * Update the specified Conceptos in storage.
     *
     * @param  int              $id
     * @param UpdateConceptosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateConceptosRequest $request)
    {
        $conceptos = $this->conceptosRepository->findWithoutFail($id);

        if (empty($conceptos)) {
            Flash::error('Conceptos not found');

            return redirect(route('conceptos.index'));
        }

        $conceptos = $this->conceptosRepository->update($request->all(), $id);

        Flash::success('Conceptos Actualizado exitosamente.');

        return redirect(route('conceptos.index'));
    }

    /**
     * Remove the specified Conceptos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $conceptos = $this->conceptosRepository->findWithoutFail($id);

        if (empty($conceptos)) {
            Flash::error('Conceptos not found');

            return redirect(route('conceptos.index'));
        }

        $this->conceptosRepository->delete($id);

        Flash::success('Conceptos Borrado exitosamente.');

        return redirect(route('conceptos.index'));
    }
}
