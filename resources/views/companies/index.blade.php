<?php
/**
 * Created by PhpStorm.
 * User: luismarin
 * Date: 2019-02-03
 * Time: 14:46
 */
?>

@extends('layouts.app')

@section('title', 'Conpanies')

@section('content')
    <h1>{{ $title }}</h1>

    <button class="btn btn-primary " type="button" onclick="location.href = '{{ route('company.create') }}'">
        <i class="fa fa-plus"></i>&nbsp;Agregar
    </button>

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
