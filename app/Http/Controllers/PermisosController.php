<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePermisosRequest;
use App\Http\Requests\UpdatePermisosRequest;
use App\Repositories\PermisosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Roles;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PermisosController extends AppBaseController
{
    /** @var  PermisosRepository */
    private $permisosRepository;

    public function __construct(PermisosRepository $permisosRepo)
    {
        $this->permisosRepository = $permisosRepo;
    }

    /**
     * Display a listing of the Permisos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->permisosRepository->pushCriteria(new RequestCriteria($request));
        $permisos = $this->permisosRepository->all();

        return view('permisos.index')
            ->with('permisos', $permisos);
    }

    /**
     * Show the form for creating a new Permisos.
     *
     * @return Response
     */
    public function create()
    {
        $roles=Roles::pluck('descripcion','id');
        $datos = ['roles' => $roles];
        return view('permisos.create')->with('datos', $datos);
    }

    /**
     * Store a newly created Permisos in storage.
     *
     * @param CreatePermisosRequest $request
     *
     * @return Response
     */
    public function store(CreatePermisosRequest $request)
    {
        $input = $request->all();
        $input['users_id']=Auth::id();

        $permisos = $this->permisosRepository->create($input);

        Flash::success('Permisos saved successfully.');

        return redirect(route('permisos.index'));
    }

    /**
     * Display the specified Permisos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $permisos = $this->permisosRepository->findWithoutFail($id);

        if (empty($permisos)) {
            Flash::error('Permisos not found');

            return redirect(route('permisos.index'));
        }

        return view('permisos.show')->with('permisos', $permisos);
    }

    /**
     * Show the form for editing the specified Permisos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $permisos = $this->permisosRepository->findWithoutFail($id);

        if (empty($permisos)) {
            Flash::error('Permisos not found');

            return redirect(route('permisos.index'));
        }

        return view('permisos.edit')->with('permisos', $permisos);
    }

    /**
     * Update the specified Permisos in storage.
     *
     * @param  int              $id
     * @param UpdatePermisosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePermisosRequest $request)
    {
        $permisos = $this->permisosRepository->findWithoutFail($id);

        if (empty($permisos)) {
            Flash::error('Permisos not found');

            return redirect(route('permisos.index'));
        }

        $permisos = $this->permisosRepository->update($request->all(), $id);

        Flash::success('Permisos updated successfully.');

        return redirect(route('permisos.index'));
    }

    /**
     * Remove the specified Permisos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $permisos = $this->permisosRepository->findWithoutFail($id);

        if (empty($permisos)) {
            Flash::error('Permisos not found');

            return redirect(route('permisos.index'));
        }

        $this->permisosRepository->delete($id);

        Flash::success('Permisos deleted successfully.');

        return redirect(route('permisos.index'));
    }
}
