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
                $("#preco").val("");
                $("#disabledPreco").val("");
                $("#descricao").val("");
                $('#oferta').collapse("hide");
                $('#realizar_oferta').show("slow");
            });
        });

       $(function() {
           $('#preco').change(function() {
                $("#disabledPreco").val((parseFloat($(this).val())*1.1).toFixed(2));
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

        @include('components.info_pedido', ['pedido' => $pedido])

        <div class="row">
                <div class="col-xl-12 py-5">
                    <div class="card collapse multi-collapse" id="oferta">
                        <div class="card-body" id="contact-form">
                            <h3 class="card-title">Realizar Oferta</h3>

                            <!-- formulário de oferta -->
                            <form method="post" action="contact.php" role="form">
                                @csrf

                                <div class="controls">

                                    <!-- campo -->
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="preco">O preço da sua oferta:</label>
                                                <input id="preco" type="number" min="1" step="0.01" class="form-control" placeholder="Ex.: R$200,00 *" required="required" value="">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- campo -->
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="disabledPreco">Preço final a ser pago, calculado a partir da taxa de serviço do Tucaninho:</label>
                                                <input class="form-control"  id="disabledPreco" type="text" value="" name="preco" disabled>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- campo -->
                                     <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="descricao">Descreva os detalhes da sua oferta:</label>
                                                <textarea id="descricao" name="descricao" class="form-control" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dicta fugit fugiat hic aliquam itaque facere, soluta. *" rows="4" required="required" data-error="Nos deixe uma mensagem." maxlength="1000"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <input type="hidden" name="email_cliente" value="{{$pedido->email_cliente}}">
                                <input type="hidden" name="pedido_id" value="{{$pedido->pedido_id}}">
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
