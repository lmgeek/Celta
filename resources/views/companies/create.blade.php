<?php
/**
 * Created by PhpStorm.
 * User: luismarin
 * Date: 2019-02-07
 * Time: 00:21
 */
?>

@extends('layouts.app')

@section('title', 'Companies')

@section('content')
    <div class="jumbotron">
        <h2>{{ $title }}</h2>
        <div class="row">
            <form action="{{ route('company.store') }}" method="post">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Nombre de la Compañia</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Compañia de Ejemplo" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="correo@micompañia.com" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <form action="#" class="dropzone" id="dropzoneForm">
                        <div class="fallback">
                            <input name="file" type="file" multiple />
                        </div>
                    </form>
                </div>
            </form>
        </div>


    </div>

@endsection

@section('sidebar')
    @parent
