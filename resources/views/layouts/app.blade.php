@extends('inspinia::layouts.main')

@if (auth()->check())
@section('user-avatar', 'https://www.gravatar.com/avatar/' . md5(auth()->user()->email) . '?d=mm')
@section('user-name', auth()->user()->name)
@endif

@section('breadcrumbs')
@include('inspinia::layouts.main-panel.breadcrumbs', [
  'breadcrumbs' => [
    (object) [ 'title' => 'Home', 'url' => route('home') ]
  ]
])
@endsection

@section('sidebar-menu')
  <ul class="nav metismenu" id="side-menu" style="padding-left:0px;">
    <li class="active">
      <a href="{{ route('home') }}"><i class="fa fa-home"></i> <span class="nav-label">Home</span></a>
      <a href="{{ route('user.index') }}"><i class="fa fa-users"></i> <span class="nav-label">Usuarios</span></a>
      <a href="{{ route('company') }}"><i class="fa fa-building"></i> <span class="nav-label">Empresas</span></a>
      <a href="{{ route('home') }}"><i class="fa fa-newspaper-o"></i> <span class="nav-label">Cat&aacute;logos</span></a>
      <a href="{{ route('home') }}"><i class="fa fa-paste"></i> <span class="nav-label">Folletos</span></a>
      <a href="{{ route('home') }}"><i class="fa fa-bar-chart"></i> <span class="nav-label">Reportes</span></a>
    </li>
  </ul>
@endsection
