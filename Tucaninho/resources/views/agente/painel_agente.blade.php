<?php
    $array_nome_agente = explode(" ", \Auth::guard('agente')->user()->nome_agente, 2);
    $primeiro_nome_agente = $array_nome_agente[0]
?>

@extends('layout_geral')

@section('title')
    @yield('title')
@endsection

@section('styles')
  @yield('styles')
@endsection

@section('scripts')
  @yield('scripts')
@endsection

@section('sidebar')
  <li class="sidebar-brand">
      <a style="{pointer-events: none;}">
          Bem Vindo, {{$primeiro_nome_agente}}
      </a>
  </li>
  <li>
      <a href="{{action('PedidosController@listaPedidosAgente')}}">Pedidos</a>
  </li>
  <!--<li>
      <a href="/cliente/conversas">Conversas</a>
  </li>
  <li>
      <a href="/cliente/config">Configurações</a>
  </li>-->
  <li>
      <a href="{{action('AgenteController@logout')}}">Logout</a>
  </li>
@endsection

@section('content')
  @yield('content')
@endsection
