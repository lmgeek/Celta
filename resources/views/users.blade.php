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

    <ul>
        @forelse ($users as $user)
            <li>{{ $user->name }}, ({{ $user->email }})</li>
        @empty
            <li>No hay usuarios registrados.</li>
        @endforelse
    </ul>
@endsection

@section('sidebar')
    @parent
@endsection
