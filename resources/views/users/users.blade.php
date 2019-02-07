<?php
/**
 * Created by PhpStorm.
 * User: luismarin
 * Date: 2019-02-03
 * Time: 14:08
 */

?>

@extends('layouts.app')

@section('title', 'Usuarios')

@section('content')
    <h1>{{ $title }}</h1>

    <table class="table table-bordered">
        <thead class="text-center">
            <tr>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Correo</th>
                <th>Empresa</th>
                <th>Acciones</th>
            </tr>
        </thead>
        @forelse ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>Empresa</td>
                <td class="text-center">
                    <a href="#" class="action-button" data-toggle="tooltip-edit-user" title="Editar Usuario"><i class="fa fa-edit"></i></a>
                    &nbsp;&nbsp;
                    <a href="#" onclick="return confirm('Seguro que desea eliminar el usuario?')" class="action-button" data-toggle="tooltip-trash-user" title="Eliminar Usuario"><i class="fa fa-trash"></i></a>
                </td>
                {{--{{ route('user.destroy',$user->id) }}--}}
            </tr>
        @empty
            <li>No hay usuarios registrados.</li>
        @endforelse
    </table>

@endsection

@section('sidebar')
    @parent
@endsection


