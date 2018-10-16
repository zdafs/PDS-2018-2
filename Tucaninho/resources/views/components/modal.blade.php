<div id="myModal" class="modal">
  <div id="id_logindiv">
  <button type="button" class="close" id="closeBtn" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <form class="form-horizontal" id="formLogin">
    <div class="form-group">
      <label class="control-label col-xs-2 col-sm-2" for="usuario">Email:</label>
      <div class="col-xs-10 col-sm-10 form-control-static">
        <input type="text" name="email" class="form-control" id="email" placeholder="Insira o email aqui" maxlength="100" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Senha:</label>
      <div class="col-sm-10 form-control-static">
        <input type="password" name="pwd" class="form-control" id="pwd" placeholder="Insira a senha aqui" maxlength="30" required>
      </div>
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-default" id="entrar">Entrar</button>
    </div>
  </form>
  <hr>
  <span class="fa-stack fa-lg" id="facebookIcon">
    <i class="far fa-circle fa-stack-2x"></i>
    <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
  </span>
  <br>
        <button type="button" class="btn btn-default" id="esqSenha">Esqueceu a senha?</button>
  <button type="button" class="btn btn-default" id="cadastro">Cadastrar-se</button>
</div>
</div>
