@extends('agente.painel_agente')

@section('title')
    Pedidos
@endsection

@section('styles')
@endsection

@section('scripts')
  <script>
    $(".clickable-row").css('cursor', 'pointer');
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
  </script>
@endsection

@section('content')
  <div class="container-fluid">
      @include('components.painel_navbar')
      <!-- Project One -->
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Data</th>
            <th scope="col">Cliente</th>
            <th scope="col">Preço</th>
            <th scope="col">Descrição</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($pedidos as $pedido)
            <tr class="clickable-row" data-href="{{action('PedidosController@detalhesPedidoAgente', [encrypt($pedido->pedido_id), encrypt($pedido->email_cliente)])}}">
              <th scope="row">{{\Carbon\Carbon::parse($pedido->pedido_id)->format('d/m/Y - H:i')}}</th>
              <td>{{$pedido->email_cliente}}</td>
              <td>{{$pedido->preco}}</td>
              @if(strlen($pedido->descricao)<60)
                <td>{{$pedido->descricao}}</td>
              @else
                <td>{{substr($pedido->descricao, 0, 57).'...'}}</td>
              @endif
            </tr>
          @endforeach
        </tbody>
      </table>
  </div>
@endsection
