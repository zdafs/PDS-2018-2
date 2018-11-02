<?php
    $array_nome_cliente = explode(" ", \Auth::guard('cliente')->user()->nome_cliente, 2);
    $primeiro_nome_cliente = $array_nome_cliente[0]
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
          Bem Vindo, {{$primeiro_nome_cliente}}
      </a>
  </li>
  <li>
      <a href="{{action('PedidosController@listaPedidosCliente')}}">Pedidos</a>
  </li>
  <li>
      <a href="/cliente/novo">Novo Pedido</a>
  </li>
  <!--<li>
      <a href="/cliente/conversas">Conversas</a>
  </li>
  <li>
      <a href="/cliente/config">Configurações</a>
  </li>-->
  <li>
      <a href="{{action('ClienteController@logout')}}">Logout</a>
  </li>
@endsection

@section('content')
  @yield('content')
@endsection
