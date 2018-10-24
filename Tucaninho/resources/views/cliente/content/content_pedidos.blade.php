@extends('cliente.painel_cliente')

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
            <th scope="col">Preço</th>
            <th scope="col">Descrição</th>
            <th scope="col">Link</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($pedidos as $pedido)
            <tr class="clickable-row" data-href="{{action('PedidosController@detalhesPedido', [$pedido->pedido_id])}}">
              <th scope="row">{{\Carbon\Carbon::parse($pedido->pedido_id)->format('d/m/Y - H:i')}}</th>
              <td>{{$pedido->preco}}</td>
              <td>{{substr($pedido->descricao, 0, 30).'...'}}</td>
              <td><a href="{{$pedido->url}}">Deal</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
  </div>
@endsection
