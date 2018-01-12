    <div class="row">
    <div class="card mx-auto">

      <!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
  <li class="nav-item col s6">
    <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Entrar</a>
  </li>
  <li class="nav-item col s6">
    <a class="nav-link " data-toggle="tab" href="#profile" role="tab">Cadastrar</a>
  </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="home" role="tabpanel">
    <div class="card-block">
      <form action="/partida" method="post" name="form1">
        <div class="form-group">
          <label for="text">Nome do jogador</label>
          <input type="text" class="form-control" id="jogador" name="nome" placeholder="Ex: João">
        </div>
        <!-- <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" id="pwd" name="pwd">
        </div> -->
        <button type="submit" class="btn btn-primary text-center  form-control">Start</button>
      </form>
  </div>
  </div>
  <div class="tab-pane" id="profile" role="tabpanel">
      <div class="card-block">
          <form action="/cadastrar" method="post" name="form2">
            <div class="form-group">
              <label for="text">Nome completo</label>
              <input type="text" class="form-control" id="jogador" name="nomeC">
            </div>
            <div class="form-group">
              <label for="pwd">Senha:</label>
              <input type="password" class="form-control" id="pwd" name="pwdC">
            </div>
            <button type="submit" class="btn btn-primary text-center  form-control">Cadastrar</button>
          </form>
      </div>
      
  </div>
</div>
  <div class="alert alert-danger" role="alert">
    <?php $messageError ?>
  </div>
      </div>
    </div>