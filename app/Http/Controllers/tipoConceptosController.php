<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTipoConceptosRequest;
use App\Http\Requests\UpdateTipoConceptosRequest;
use App\Repositories\TipoConceptosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TipoConceptosController extends AppBaseController
{
    /** @var  TipoConceptosRepository */
    private $tipoConceptosRepository;

    public function __construct(TipoConceptosRepository $tipoConceptosRepo)
    {
        $this->tipoConceptosRepository = $tipoConceptosRepo;
    }

    /**
     * Display a listing of the TipoConceptos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoConceptosRepository->pushCriteria(new RequestCriteria($request));
        $tipoConceptos = $this->tipoConceptosRepository->all();

        $tipoConceptos =  DB::table('tipo_conceptos')
                ->join('users', 'tipo_conceptos.users_id', '=', 'users.id')
                ->selectRaw('tipo_conceptos.*,users.name')
                ->get();

        return view('tipo_conceptos.index')
            ->with('tipoConceptos', $tipoConceptos);
    }

    /**
     * Show the form for creating a new TipoConceptos.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_conceptos.create');
    }

    /**
     * Store a newly created TipoConceptos in storage.
     *
     * @param CreateTipoConceptosRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoConceptosRequest $request)
    {
        $input = $request->all();
        $input['users_id']=Auth::id();

        $tipoConceptos = $this->tipoConceptosRepository->create($input);

        Flash::success('Tipo Conceptos saved successfully.');

        return redirect(route('tipoConceptos.index'));
    }

    /**
     * Display the specified TipoConceptos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoConceptos = $this->tipoConceptosRepository->findWithoutFail($id);

        if (empty($tipoConceptos)) {
            Flash::error('Tipo Conceptos not found');

            return redirect(route('tipoConceptos.index'));
        }

        return view('tipo_conceptos.show')->with('tipoConceptos', $tipoConceptos);
    }

    /**
     * Show the form for editing the specified TipoConceptos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoConceptos = $this->tipoConceptosRepository->findWithoutFail($id);

        if (empty($tipoConceptos)) {
            Flash::error('Tipo Conceptos not found');

            return redirect(route('tipoConceptos.index'));
        }

        return view('tipo_conceptos.edit')->with('tipoConceptos', $tipoConceptos);
    }

    /**
     * Update the specified TipoConceptos in storage.
     *
     * @param  int              $id
     * @param UpdateTipoConceptosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoConceptosRequest $request)
    {
        $tipoConceptos = $this->tipoConceptosRepository->findWithoutFail($id);

        if (empty($tipoConceptos)) {
            Flash::error('Tipo Conceptos not found');

            return redirect(route('tipoConceptos.index'));
        }

        $tipoConceptos = $this->tipoConceptosRepository->update($request->all(), $id);

        Flash::success('Tipo Conceptos updated successfully.');

        return redirect(route('tipoConceptos.index'));
    }

    /**
     * Remove the specified TipoConceptos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoConceptos = $this->tipoConceptosRepository->findWithoutFail($id);

        if (empty($tipoConceptos)) {
            Flash::error('Tipo Conceptos not found');

            return redirect(route('tipoConceptos.index'));
        }

        $this->tipoConceptosRepository->delete($id);

        Flash::success('Tipo Conceptos deleted successfully.');

        return redirect(route('tipoConceptos.index'));
    }
}
