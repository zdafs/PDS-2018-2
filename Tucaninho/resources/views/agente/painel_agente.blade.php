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
          Bem Vindo, Blablabla
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
      <a href="/">Logout</a>
  </li>
@endsection

@section('content')
  @yield('content')
@endsection
