<?php
/**
 * Created by PhpStorm.
 * User: luismarin
 * Date: 2019-02-03
 * Time: 14:46
 */
?>

@extends('layouts.app')

@section('title', 'Usuarios')

@section('content')
    <h1>{{ $title }}</h1>

    

    <ul>
        @forelse ($companies as $c)
            <li>{{ $c->name }}, ({{ $c->email }})</li>
        @empty
            <li>No hay companies registrados.</li>
        @endforelse
    </ul>
@endsection

@section('sidebar')
    @parent
@endsection
