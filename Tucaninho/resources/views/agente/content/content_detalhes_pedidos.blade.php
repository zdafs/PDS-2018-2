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

@extends('agente.painel_agente')

@section('title')
    Detalhes do Pedido
@endsection

@section('scripts')
    <script type='text/javascript'>
       $(function() {
           $('#realizar_oferta').click(function() {
                $(this).hide();
            });
        });

       $(function() {
           $('#cancelar_oferta').click(function() {
                $("[name='preco']").val("");
                $("[name='precoFinal']").val("");
                $("[name='detalhes']").val("");
                $('#oferta').collapse("hide");
                $('#realizar_oferta').show("slow");
            });
        });
    </script>
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

        <div class="row">
                <div class="col-xl-12 py-5">
                    <div class="card collapse multi-collapse" id="oferta">
                        <div class="card-body" id="contact-form">
                            <h3 class="card-title">Realizar Oferta</h3>

                            <!-- formulário de oferta -->
                            <form method="post" action="contact.php" role="form">
                                <div class="controls">

                                    <!-- campo -->
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="form_name">O preço da sua oferta:</label>
                                                <input id="form_name" type="text" name="name" class="form-control" placeholder="Ex.: R$200,00 *" required="required" data-error="Firstname is required.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- campo -->
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="form_lastname">Preço final a ser pago, calculado a partir da taxa de serviço do Tucaninho:</label>
                                                <input class="form-control" id="disabledInput" type="text" value="R$220,00" disabled>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- campo -->
                                     <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="form_message">Descreva os detalhes da sua oferta:</label>
                                                <textarea id="form_message" name="message" class="form-control" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dicta fugit fugiat hic aliquam itaque facere, soluta. *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>


                            <button type="button" id="submeter_oferta" class="btn btn-outline-success">
                                Submeter
                            </button>
                            <button type="button" id="cancelar_oferta" class="btn btn-outline-danger">
                                Cancelar
                            </button>
                            <!-- ./formulário de oferta -->
                        </div>
                    </div>

                    <button type="button" class="btn btn-warning btn-lg btn-block" id="realizar_oferta" data-toggle="collapse" data-target="#oferta" aria-expanded="false" aria-controls="oferta">
                        Fazer uma oferta
                    </button>

                </div>
            </div>

      </div>
      <!-- /.col-lg-9 -->

    </div>

  </div>
  <!-- /.container -->
@endsection
