<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateValoresConceptosRequest;
use App\Http\Requests\UpdateValoresConceptosRequest;
use App\Repositories\ValoresConceptosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Conceptos;

class ValoresConceptosController extends AppBaseController
{
    /** @var  ValoresConceptosRepository */
    private $valoresConceptosRepository;

    public function __construct(ValoresConceptosRepository $valoresConceptosRepo)
    {
        $this->valoresConceptosRepository = $valoresConceptosRepo;
    }

    /**
     * Display a listing of the ValoresConceptos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->valoresConceptosRepository->pushCriteria(new RequestCriteria($request));
        $valoresConceptos = $this->valoresConceptosRepository->all();

        return view('valores_conceptos.index')
            ->with('valoresConceptos', $valoresConceptos);
    }

    /**
     * Show the form for creating a new ValoresConceptos.
     *
     * @return Response
     */
    public function create()
    {
        $Conceptos=Conceptos::pluck('descripcion','id');
        $datos = ['conceptos' => $Conceptos];
        return view('valores_conceptos.create')->with('datos', $datos);
    }

    /**
     * Store a newly created ValoresConceptos in storage.
     *
     * @param CreateValoresConceptosRequest $request
     *
     * @return Response
     */
    public function store(CreateValoresConceptosRequest $request)
    {
        $input = $request->all();

        $valoresConceptos = $this->valoresConceptosRepository->create($input);

        Flash::success('Valores Conceptos saved successfully.');

        return redirect(route('valoresConceptos.index'));
    }

    /**
     * Display the specified ValoresConceptos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $valoresConceptos = $this->valoresConceptosRepository->findWithoutFail($id);

        if (empty($valoresConceptos)) {
            Flash::error('Valores Conceptos not found');

            return redirect(route('valoresConceptos.index'));
        }

        return view('valores_conceptos.show')->with('valoresConceptos', $valoresConceptos);
    }

    /**
     * Show the form for editing the specified ValoresConceptos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $valoresConceptos = $this->valoresConceptosRepository->findWithoutFail($id);

        if (empty($valoresConceptos)) {
            Flash::error('Valores Conceptos not found');

            return redirect(route('valoresConceptos.index'));
        }

        return view('valores_conceptos.edit')->with('valoresConceptos', $valoresConceptos);
    }

    /**
     * Update the specified ValoresConceptos in storage.
     *
     * @param  int              $id
     * @param UpdateValoresConceptosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateValoresConceptosRequest $request)
    {
        $valoresConceptos = $this->valoresConceptosRepository->findWithoutFail($id);

        if (empty($valoresConceptos)) {
            Flash::error('Valores Conceptos not found');

            return redirect(route('valoresConceptos.index'));
        }

        $valoresConceptos = $this->valoresConceptosRepository->update($request->all(), $id);

        Flash::success('Valores Conceptos updated successfully.');

        return redirect(route('valoresConceptos.index'));
    }

    /**
     * Remove the specified ValoresConceptos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $valoresConceptos = $this->valoresConceptosRepository->findWithoutFail($id);

        if (empty($valoresConceptos)) {
            Flash::error('Valores Conceptos not found');

            return redirect(route('valoresConceptos.index'));
        }

        $this->valoresConceptosRepository->delete($id);

        Flash::success('Valores Conceptos deleted successfully.');

        return redirect(route('valoresConceptos.index'));
    }
}
