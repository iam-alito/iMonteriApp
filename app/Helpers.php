<?php

use Illuminate\Support\Facades\DB;

function obtenerRol()
{
    $id=auth()->id();
    $usuariosRols =  DB::table('usuarios_rols')
            ->join('users', 'usuarios_rols.users_id', '=', 'users.id')
            ->join('roles', 'usuarios_rols.roles_id', '=', 'roles.id')
            ->where('usuarios_rols.users_id', '=',$id)
            ->selectRaw('roles.descripcion')
            ->get();

    $usuariosRols=($usuariosRols[0]->descripcion);
    return $usuariosRols;
}