@extends('layout_geral')

@section('sidebar')
  <li class="sidebar-brand">
      <a href="/cliente/pedidos">
          Painel Cliente
      </a>
  </li>
  <li>
      <a href="/cliente/pedidos">Pedidos</a>
  </li>
  <li>
      <a href="/cliente/conversas">Conversas</a>
  </li>
  <li>
      <a href="/cliente/config">Configurações</a>
  </li>
  <li>
      <a href="/">Logout</a>
  </li>
@endsection

@section('content')
  @yield('content')
@endsection
