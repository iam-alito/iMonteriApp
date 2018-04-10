<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCombosRequest;
use App\Http\Requests\UpdateCombosRequest;
use App\Repositories\CombosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Conceptos;
use App\Models\Estados;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CombosController extends AppBaseController
{
    /** @var  CombosRepository */
    private $combosRepository;

    public function __construct(CombosRepository $combosRepo)
    {
        $this->combosRepository = $combosRepo;
    }

    /**
     * Display a listing of the Combos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $combos =  DB::table('combos')
                ->join('users', 'combos.users_id', '=', 'users.id')
                ->join('estados', 'combos.estado_id', '=', 'estados.id')
                ->join('conceptos', 'combos.concepto_id', '=', 'conceptos.id')
                ->selectRaw('combos.*,users.name,estados.descripcion as descestado,conceptos.descripcion as desconcep')
                ->get();

        return view('combos.index')->with('combos', $combos);      
    }

    /**
     * Show the form for creating a new Combos.
     *
     * @return Response
     */
    public function create()
    {
        $conceptos=Conceptos::pluck('descripcion','id');
        $estados=Estados::pluck('descripcion','id');
        $datos = ['conceptos' => $conceptos, 'estados' => $estados];
        return view('combos.create')->with('datos', $datos);
    }

    /**
     * Store a newly created Combos in storage.
     *
     * @param CreateCombosRequest $request
     *
     * @return Response
     */
    public function store(CreateCombosRequest $request)
    {
        $input = $request->all();
        $input['users_id']=Auth::id();
        $combos = $this->combosRepository->create($input);

        Flash::success('Combos saved successfully.');

        return redirect(route('combos.index'));
    }

    /**
     * Display the specified Combos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $combos = $this->combosRepository->findWithoutFail($id);

        if (empty($combos)) {
            Flash::error('Combos not found');

            return redirect(route('combos.index'));
        }

        return view('combos.show')->with('combos', $combos);
    }

    /**
     * Show the form for editing the specified Combos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $combos = $this->combosRepository->findWithoutFail($id);

        if (empty($combos)) {
            Flash::error('Combos not found');

            return redirect(route('combos.index'));
        }
        $conceptos=Conceptos::pluck('descripcion','id');
        $estados=Estados::pluck('descripcion','id');
        $datos = ['conceptos' => $conceptos, 'estados' => $estados, 'combos' => $combos];
        return view('combos.edit')->with('datos', $datos);
    }

    /**
     * Update the specified Combos in storage.
     *
     * @param  int              $id
     * @param UpdateCombosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCombosRequest $request)
    {
        $combos = $this->combosRepository->findWithoutFail($id);

        if (empty($combos)) {
            Flash::error('Combos not found');

            return redirect(route('combos.index'));
        }

        $combos = $this->combosRepository->update($request->all(), $id);

        Flash::success('Combos updated successfully.');

        return redirect(route('combos.index'));
    }

    /**
     * Remove the specified Combos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $combos = $this->combosRepository->findWithoutFail($id);

        if (empty($combos)) {
            Flash::error('Combos not found');

            return redirect(route('combos.index'));
        }

        $this->combosRepository->delete($id);

        Flash::success('Combos deleted successfully.');

        return redirect(route('combos.index'));
    }
}
