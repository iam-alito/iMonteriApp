<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;

class VerificadorAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $id=($request->user()->id);
        $usuariosRols =  DB::table('usuarios_rols')
                ->join('users', 'usuarios_rols.users_id', '=', 'users.id')
                ->join('roles', 'usuarios_rols.roles_id', '=', 'roles.id')
                ->where('usuarios_rols.users_id', '=',$id)
                ->selectRaw('roles.descripcion')
                ->get();

        if(count($usuariosRols)>0){

            if($usuariosRols[0]->descripcion=='Root'){
                return $next($request);
            }else{
                abort(403, "¡No tienes permisos!");
            }

        }else{
            abort(403, "¡No tienes Asignado un rol!");
        }
        
    }
}
