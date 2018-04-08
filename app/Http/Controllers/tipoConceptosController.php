<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetipoConceptosRequest;
use App\Http\Requests\UpdatetipoConceptosRequest;
use App\Repositories\tipoConceptosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\DB;

class tipoConceptosController extends AppBaseController
{
    /** @var  tipoConceptosRepository */
    private $tipoConceptosRepository;

    public function __construct(tipoConceptosRepository $tipoConceptosRepo)
    {
        $this->tipoConceptosRepository = $tipoConceptosRepo;
    }

    /**
     * Display a listing of the tipoConceptos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $tipoConceptos =  DB::table('tipo_conceptos')
                ->join('users', 'tipo_conceptos.users_id', '=', 'users.id')
                ->selectRaw('tipo_conceptos.*,users.name')
                ->get();

        return view('tipo_conceptos.index')
            ->with('tipoConceptos', $tipoConceptos);
    }

    /**
     * Show the form for creating a new tipoConceptos.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_conceptos.create');
    }

    /**
     * Store a newly created tipoConceptos in storage.
     *
     * @param CreatetipoConceptosRequest $request
     *
     * @return Response
     */
    public function store(CreatetipoConceptosRequest $request)
    {
        $input = $request->all();

        $tipoConceptos = $this->tipoConceptosRepository->create($input);

        Flash::success('Tipo Conceptos saved successfully.');

        return redirect(route('tipoConceptos.index'));
    }

    /**
     * Display the specified tipoConceptos.
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
     * Show the form for editing the specified tipoConceptos.
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
     * Update the specified tipoConceptos in storage.
     *
     * @param  int              $id
     * @param UpdatetipoConceptosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetipoConceptosRequest $request)
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
     * Remove the specified tipoConceptos from storage.
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
