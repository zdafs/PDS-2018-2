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

<div class="card">
  <div class="card-body">
    <h3 class="card-title">Detalhes do Pedido</h3>
    <h4>R${{ $pedido->preco }}</h4>
    <!--
        paracada(link in links)
            <p class="card-text"><b>URL:</b> <a href=" $link->url "> $link->url </a></p>
        fimparacada
    -->
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
