<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUsuariosRolRequest;
use App\Http\Requests\UpdateUsuariosRolRequest;
use App\Repositories\UsuariosRolRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\User;
use App\Models\Roles;
use Illuminate\Support\Facades\DB;

class UsuariosRolController extends AppBaseController
{
    /** @var  UsuariosRolRepository */
    private $usuariosRolRepository;

    public function __construct(UsuariosRolRepository $usuariosRolRepo)
    {
        $this->usuariosRolRepository = $usuariosRolRepo;
    }

    /**
     * Display a listing of the UsuariosRol.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $usuariosRols =  DB::table('usuarios_rols')
                ->join('users', 'usuarios_rols.users_id', '=', 'users.id')
                ->join('roles', 'usuarios_rols.roles_id', '=', 'roles.id')
                ->selectRaw('usuarios_rols.*,users.name as usuario,roles.descripcion as roles')
                ->get();

        return view('usuarios_rols.index')
            ->with('usuariosRols', $usuariosRols);
    }

    /**
     * Show the form for creating a new UsuariosRol.
     *
     * @return Response
     */
    public function create()
    {
        $users=User::pluck('name','id');
        $roles=Roles::pluck('descripcion','id');
        $datos = ['users' => $users, 'roles' => $roles];
        return view('usuarios_rols.create')->with('datos', $datos);
    }

    /**
     * Store a newly created UsuariosRol in storage.
     *
     * @param CreateUsuariosRolRequest $request
     *
     * @return Response
     */
    public function store(CreateUsuariosRolRequest $request)
    {
        $input = $request->all();

        $usuariosRol = $this->usuariosRolRepository->create($input);

        Flash::success('Usuarios Rol saved successfully.');

        return redirect(route('usuariosRols.index'));
    }

    /**
     * Display the specified UsuariosRol.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $usuariosRol = $this->usuariosRolRepository->findWithoutFail($id);

        if (empty($usuariosRol)) {
            Flash::error('Usuarios Rol not found');

            return redirect(route('usuariosRols.index'));
        }

        return view('usuarios_rols.show')->with('usuariosRol', $usuariosRol);
    }

    /**
     * Show the form for editing the specified UsuariosRol.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $usuariosRol = $this->usuariosRolRepository->findWithoutFail($id);

        if (empty($usuariosRol)) {
            Flash::error('Usuarios Rol not found');

            return redirect(route('usuariosRols.index'));
        }

        $users=User::pluck('name','id');
        $roles=Roles::pluck('descripcion','id');
        $datos = ['users' => $users, 'roles' => $roles,'usuariosRol'=>$usuariosRol];

        return view('usuarios_rols.edit')->with('datos', $datos);
    }

    /**
     * Update the specified UsuariosRol in storage.
     *
     * @param  int              $id
     * @param UpdateUsuariosRolRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUsuariosRolRequest $request)
    {
        $usuariosRol = $this->usuariosRolRepository->findWithoutFail($id);

        if (empty($usuariosRol)) {
            Flash::error('Usuarios Rol not found');

            return redirect(route('usuariosRols.index'));
        }

        $usuariosRol = $this->usuariosRolRepository->update($request->all(), $id);

        Flash::success('Usuarios Rol updated successfully.');

        return redirect(route('usuariosRols.index'));
    }

    /**
     * Remove the specified UsuariosRol from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $usuariosRol = $this->usuariosRolRepository->findWithoutFail($id);

        if (empty($usuariosRol)) {
            Flash::error('Usuarios Rol not found');

            return redirect(route('usuariosRols.index'));
        }

        $this->usuariosRolRepository->delete($id);

        Flash::success('Usuarios Rol deleted successfully.');

        return redirect(route('usuariosRols.index'));
    }
}
