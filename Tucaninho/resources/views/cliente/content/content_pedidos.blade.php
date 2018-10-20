@extends('cliente.painel_cliente')

@section('content')
  <div class="container-fluid">
      @include('components.painel_navbar', ['p'=>''])
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
          <tr class="clickable-row" data-href="/cliente/pedidos/detalhes">
            <th scope="row">01/01/2001</th>
            <td>2000.00</td>
            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate...</td>
            <td><a href="#">Deal</a></td>
          </tr>
          <tr>
            <th scope="row">02/03/2004</th>
            <td>200.00</td>
            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate...</td>
            <td><a href="#">Deal</a></td>
          </tr>
          <tr>
            <th scope="row">01/01/2006</th>
            <td>12000.00</td>
            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate...</td>
            <td><a href="#">Deal</a></td>
          </tr>
        </tbody>
      </table>
  </div>
@endsection
