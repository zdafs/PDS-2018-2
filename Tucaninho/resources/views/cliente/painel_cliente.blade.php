@extends('layout_geral')

@section('styles')
  @yield('styles')
@endsection

@section('scripts')
  @yield('scripts')
@endsection

@section('sidebar')
  <li class="sidebar-brand">
      <a href="/cliente/pedidos">
          Painel Cliente
      </a>
  </li>
  <li>
      <a href="{{action('PedidosController@listaPedidos')}}">Pedidos</a>
  </li>
  <li>
      <a href="/cliente/novo">Novo Pedido</a>
  </li>
  <li>
      <a href="/cliente/conversas">Conversas</a>
  </li>
  <li>
      <a href="/cliente/config">Configurações</a>
  </li>
  <li>
      <a href="{{action('ClienteController@logout')}}">Logout</a>
  </li>
@endsection

@section('content')
  @yield('content')
@endsection
