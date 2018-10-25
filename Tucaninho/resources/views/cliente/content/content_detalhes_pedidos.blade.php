@switch($pedido->tipo_viagem)
    @case('0')
        <?php $viagem = 'Ida Doméstica' ?>
    @break
    @case('1')
        <?php $viagem = 'Ida Internacional' ?>
    @break
    @case('2')
        <?php $viagem = 'Retorno (Ida e Volta)' ?>
    @break
    @case('3')
        <?php $viagem = 'Múltiplas Paradas' ?>
    @break
    @default
        <?php $viagem = 'Volta ao Mundo' ?>
@endswitch

@switch($pedido->tipo_passagem)
    @case('0')
        <?php $passagem = 'Econômica' ?>
    @break
    @case('1')
        <?php $passagem = 'Econômica Premium' ?>
    @break
    @case('2')
        <?php $passagem = 'Executiva' ?>
    @break
    @default
        <?php $passagem = 'Primeira Classe' ?>
@endswitch

@extends('cliente.painel_cliente')

@section('title')
    Detalhes do Pedido
@endsection

@section('content')
  <!-- Page Content -->
  <div class="container-fluid">
    @include('components.painel_navbar')

    <div class="row">

      <!-- /.col-lg-3 -->

      <div class="col-md-12">

        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Detalhes do Pedido</h3>
            <h4>R${{ $pedido->preco }}</h4>
            <p class="card-text"><b>URL:</b> <a href="{{ $pedido->url }}">{{ $pedido->url }}</a></p>
            <div class="row">
                <p class="col-md-3 card-text"><b>Tipo da viagem:</b> {{ $viagem }}</p>
                <p class="col-md-3 card-text"><b>Classe:</b> {{ $passagem }}</p>
            </div>
            <div class="row">
                <p class="col-md-3 card-text"><b>Quantidade adultos:</b> {{ $pedido->qnt_adultos }}</p>
                <p class="col-md-3 card-text"><b>Quantidade crianças:</b> {{ $pedido->qnt_criancas }}</p>
                <p class="col-md-3 card-text"><b>Quantidade bebês:</b> {{ $pedido->qnt_bebes }}</p>
            </div>
            @if($pedido->preferencia!='')
                <p class="card-text"><b>Preferências:</b> {{ $pedido->preferencia }}</p>
            @endif
            <hr>
            <p class="card-text">{{ $pedido->descricao }}</p>

          </div>
        </div>
        <!-- /.card -->

        <!--<div class="card card-outline-secondary my-4">
          <div class="card-header">
            Ofertas
          </div>
          <div class="card-body">
            <p class="h4">R$150,00</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted float-right">Posted by Anonymous on 3/1/17</small>
            <br>
            <button type="button" class="btn btn-warning">Aceitar Oferta</button>
            <hr>
            <p class="h4">R$149,99</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted float-right">Posted by Anonymous on 3/1/17</small>
            <br>
            <button type="button" class="btn btn-warning">Aceitar Oferta</button>
            <hr>
            <p class="h4">R$145,80</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted  float-right">Posted by Anonymous on 3/1/17</small>
            <br>
            <button type="button" class="btn btn-warning">Aceitar Oferta</button>
            <hr>
            <a href="#" class="btn btn-success">Fazer uma oferta</a> -->
          <!--</div>-->
        <!--</div>-->
        <!-- /.card -->

      </div>
      <!-- /.col-lg-9 -->

    </div>

  </div>
  <!-- /.container -->
@endsection
