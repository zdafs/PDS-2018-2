<div id="myModal" class="modal">
  <div id="id_logindiv">
  <button type="button" class="close" id="closeBtn" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <form class="form-horizontal" id="formLogin" action="{{action('ClienteAuth\ClienteLoginController@authenticate')}}" method="post">
    @csrf
    <div class="form-group">
      <label class="control-label col-xs-2 col-sm-2" for="emailLogin"></label>
      <div class="col-xs-10 col-sm-10 form-control-static">
        <input type="email" name="email" class="form-control" id="emailLogin" placeholder="Insira o email aqui" maxlength="100" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"></label>
      <div class="col-sm-10 form-control-static">
        <input type="password" name="pwd" class="form-control" id="pwd" placeholder="Insira a senha aqui" maxlength="30" required>
      </div>
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-default" id="entrar">Entrar</button>
    </div>
  </form>
  <form class="form-horizontal" id="formCadastro">
      <label class="control-label col-xs-2 col-sm-2" for="email"></label>
      <div class="col-xs-10 col-sm-10 form-control-static">
        <input type="email" name="email" class="form-control" id="email" placeholder="Insira o email aqui" maxlength="100" required>
      </div>
      <label class="control-label col-xs-2 col-sm-2" for="nome"></label>
      <div class="col-xs-10 col-sm-10 form-control-static">
        <input type="text" name="nome" class="form-control" id="nome" placeholder="Insira o seu nome aqui" maxlength="100" required>
      </div>
      <label class="control-label col-sm-2" for="pwdCadastro"></label>
      <div class="col-sm-10 form-control-static">
        <input type="password" name="pwd" class="form-control" id="pwdCadastro" placeholder="Insira a senha aqui" maxlength="30" required>
      </div>
      <label class="control-label col-sm-2" for="pwd2"></label>
      <div class="col-sm-10 form-control-static">
        <input type="password" name="pwd2" class="form-control" id="pwd2" placeholder="Confirme a sua senha" maxlength="30" required>
      </div>
    <br>
    <div class="text-center">
      <button type="submit" class="btn btn-default" id="cadastrar">Cadastrar</button>
    </div>
  </form>
  <form class="form-horizontal" id="formSenha">
      <label class="control-label col-xs-2 col-sm-2" for="emailSenha"></label>
      <div class="col-xs-10 col-sm-10 form-control-static">
        <input type="email" name="email" class="form-control" id="emailSenha" placeholder="Insira o email aqui" maxlength="100" required>
      </div>
    <br>
    <div class="text-center">
      <button type="submit" class="btn btn-default" id="enviar">Enviar</button>
    </div>
  </form>
  <hr>
  <div class="text-center">
    <a href="#" class="fa-stack fa-lg" id="facebookIcon">
        <i class="far fa-circle fa-stack-2x""></i>
        <i class="fab fa-facebook-f fa-stack-1x fa-inverse""></i>
    </a>
    <button type="button" class="btn btn-default" id="login">Login</button>
  </div>
  <br>
  <button type="button" class="btn btn-default" id="esqSenha">Esqueceu a senha?</button>
  <button type="button" class="btn btn-default" id="cadastro">Cadastrar-se</button>
</div>
</div>
