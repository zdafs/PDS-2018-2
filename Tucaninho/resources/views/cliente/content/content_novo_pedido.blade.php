@extends('cliente.painel_cliente')

@section('styles')
  <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
@endsection


@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>
  <script>
        function somaQnt(){
            $("#disabledInput").val(parseInt($("#qnt_adultos option:selected").val()) + parseInt($("#qnt_criancas option:selected").val()) + parseInt($("#qnt_bebes option:selected").val()));
        }
  </script>
@endsection

@section('content')

  <div class="container-fluid">
    @include('components.painel_navbar')

      <div class="row">

          <div class="col-xl-12 pl-5"> <!-- <div class="col-xl-8 offset-xl-2 py-5"> ORIGINAL-->
                  <h1>Pedido</h1>
                  <p class="lead">Preencha o formulário com as informações necessárias</p>
                  <div class="card mt-4">



                      <div class="card-body">
              <!-- We're going to place the form here in the next step -->
                          <form id="contact-form" method="post" action="{{action('PedidosController@cadastraPedido')}}" role="form">
                              @csrf
                              <div class="messages"></div>

                              <div class="controls">

                                  <div class="row content-justify-center">
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label for="preco">O melhor preço que você encontrou:</label>
                                              <input id="preco" type="number" min="1" step="0.01" name="preco" class="form-control" placeholder="Ex.: R$200,00 *" required="required" data-error="O preco é obrigatório.">
                                              <div class="help-block with-errors"></div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-md-8">
                                          <div class="form-group">
                                              <label for="limk">Link do pacote encontrado:</label>
                                              <input id="link" type="url" name="link" class="form-control" placeholder="URL da imagem ou pedido *" required="required" data-error="A URL é obrigatória.">
                                              <div class="help-block with-errors"></div>
                                          </div>
                                      </div>
                                  </div>

                                   <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="descricao">Descreva os detalhes da sua viagem:</label>
                                              <textarea id="descricao" name="descricao" class="form-control" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dicta fugit fugiat hic aliquam itaque facere, soluta. *" rows="4" required="required" data-error="Nos deixe uma mensagem." maxlength="1000"></textarea>
                                              <div class="help-block with-errors"></div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="tipo_viagem">Tipo da viagem:</label>
                                              <select id="tipo_viagem" name="tipo_viagem" class="form-control" required="required" data-error="Especifique o tipo da viagem.">
                                                  <option value="0">Ida Doméstica</option>
                                                  <option value="1">Ida Internacional</option>
                                                  <option value="2">Retorno (Ida e Volta)</option>
                                                  <option value="3">Múltiplas Paradas</option>
                                                  <option value="4">Volta ao Mundo</option>
                                              </select>
                                              <div class="help-block with-errors"></div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                       <div class="col-md-3">
                                          <label for="form_need">Quantas pessoas irão viajar?</label>
                                       </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-md-2">
                                          <div class="form-group">
                                              <select id="qnt_adultos" name="qnt_adultos" class="form-control" required="required" data-error="Especifique o número de adultos." onchange="somaQnt();">
                                                  <option value="1">1 adulto</option>
                                                  <option value="2">2 adultos</option>
                                                  <option value="3">3 adultos</option>
                                                  <option value="4">4 adultos</option>
                                                  <option value="5">5 adultos</option>
                                                  <option value="6">6 adultos</option>
                                                  <option value="7">7 adultos</option>
                                                  <option value="8">8 adultos</option>
                                                  <option value="9">9 adultos</option>
                                                  <option value="10">10+ adultos</option>
                                              </select>
                                              <div class="help-block with-errors"></div>
                                          </div>
                                      </div>
                                     <div class="col-md-1"> <h2>+</h2> </div>
                                      <div class="col-md-2">
                                          <div class="form-group">
                                              <select id="qnt_criancas" name="qnt_criancas" class="form-control" required="required" data-error="Especifique o número de crianças." onchange="somaQnt();">
                                                  <option value="0">0 crianças</option>
                                                  <option value="1">1 criança</option>
                                                  <option value="2">2 crianças</option>
                                                  <option value="3">3 crianças</option>
                                              </select>
                                              <div class="help-block with-errors"></div>
                                          </div>
                                      </div>
                                      <div class="col-md-1"> <h2>+</h2> </div>
                                      <div class="col-md-2">
                                          <div class="form-group">
                                              <select id="qnt_bebes" name="qnt_bebes" class="form-control" required="required" data-error="Especifique o número de bebês." onchange="somaQnt();">
                                                  <option value="0">0 bebês</option>
                                                  <option value="1">1 bebê</option>
                                                  <option value="2">2 bebês</option>
                                                  <option value="3">3 bebês</option>
                                              </select>
                                              <div class="help-block with-errors"></div>
                                          </div>
                                      </div>
                                      <div class="col-md-1"> <h2>=</h2> </div>
                                      <div class="col-md-1">
                                          <div class="form-group">
                                              <input class="form-control" value="1" id="disabledInput" type="text" disabled>
                                          </div>
                                      </div>
                                      <div class="col-md-2"> <h5>Passageiros</h5>. </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-md-3">
                                          <label for="tipo_passagem">Classe:</label>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-md-8">
                                          <div class="form-group">

                                              <div class="radio">
                                                  <label class="radio">
                                                      <input type="radio" name="tipo_passagem" value="0" checked>
                                                      Econômica
                                                  </label>
                                              </div>

                                              <div class="radio">
                                                  <label class="radio">
                                                      <input type="radio" name="tipo_passagem" value="1">
                                                      Econômica Premium
                                                  </label>
                                              </div>

                                              <div class="radio">
                                                  <label class="radio">
                                                      <input type="radio" name="tipo_passagem" value="2">
                                                      Executiva
                                                  </label>
                                              </div>

                                              <div class="radio">
                                                  <label class="radio">
                                                      <input type="radio" name="tipo_passagem" value="3">
                                                      Primeira Classe
                                                  </label>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-md-8">
                                          <div class="form-group">
                                              <label for="preferencia">Companhias aéreas de preferência:</label>
                                              <input id="preferencia" type="text" name="preferencia" class="form-control" placeholder="Azul, TAM, ... (Campo não obrigatório)">
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-md-12">
                                          <input type="submit" class="btn btn-warning btn-send" value="Finalizar pedido">
                                      </div>
                                  </div>

                              </div>

                          </form>
                  </div>
              </div>
          </div>

      </div>

  </div>
@endsection
