<?php
/*  //se o jogo não foi iniciado ainda, inicia a contagem de tentativas e sorteia o número
 if (!isset($_SESSION['tentativa'])) { 
  $_SESSION['tentativa'] = 1; 
  $_SESSION['numero'] = rand(1,100); 
}

//se o usuário digitou algo e não foi a letra s 
if (isset($_POST['entrada']) && $_POST['entrada'] != "s") { 
  //lê a entrada do usuário 
  $entrada = $_POST['entrada'];
  //se o número digitado for o mesmo que o sorteado exibe mensagem para reinício 
  if ($_SESSION['numero'] == $entrada) { 
      echo "
          Parabéns, você acertou! O número era <strong>".$_SESSION['numero']."</strong>.<br/> 
          Você usou <strong>".$_SESSION['tentativa']."</strong> tentativas.<br/>
          Para jogar novamente digite <strong>s</strong>. 
      "; 
  //se o número digitado for menor... } 
  }elseif ($_SESSION['numero'] > $entrada) { 
      echo "O número é maior que ".$entrada."!"; 
      //se o número digitado for maior... 
  } else { 
      echo "O número é menor que ".$entrada."!"; 
  } 

  //incrementa a tentativa 

 echo $_SESSION['tentativa']++; 
//se o usuário digitou a letra s para começar de novo, destroi a variável de sessão com o número sorteado 
} elseif (isset($_POST['entrada']) && $_POST['entrada'] == "s") { 
  unset($_SESSION['numero']); session_destroy(); 
}  */
 
  $_SESSION['rodada'] = 0;
  if($_POST){
    if(!empty($_POST['num1'])){
      echo "agora";
      $_SESSION['rodada']++;
    }
  }

?>
<div class="rounded p-5 mt-5 mb-5 bg-white section">
<div class="p-3 mb-2 bg-primary text-white">
<?php echo "Olá, ".$jogador;?>
<a type="button" class="close" aria-label="Close" href="\sair" alt="sair">
<span aria-hidden="true">&times;</span>
</a>
</div>
<div class="row justify-content-between">
<div class="col-4">
<ul class="list-group">
  <li class="list-group-item justify-content-between">
    Partida
    <span class="badge badge-default badge-pill"><?php echo $partida ?></span>
  </li>
  <li class="list-group-item justify-content-between">
    Dapibus ac facilisis in 
    <span class="badge badge-default badge-pill"><?php echo $_SESSION['rodada'] ?></span>
  </li>
  <li class="list-group-item justify-content-between">
    Morbi leo risus
    <span class="badge badge-default badge-pill">1</span>
  </li>
</ul>
    <form action="#" method="post">
    
    <div class="row justify-content-between">
      <div class"">
        <select class="custom-select mt-3">
            <option selected>Meus Paises</option>
            <option value="1" name="num1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
        <div class="custom-controls-stacked">
        <label class="custom-control custom-radio">
            <input id="radioStacked1" name="radio-stacked" type="radio" class="custom-control-input">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Toggle this custom radio</span>
        </label>
        <label class="custom-control custom-radio">
            <input id="radioStacked2" name="radio-stacked" type="radio" class="custom-control-input">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Or toggle this other custom radio</span>
        </label>
        </div>
      </div>
      <div class"">
        <select class="custom-select mt-3">
            <option selected>Selecio um país para atacar</option>
            <option value="1" name="um">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
        <div class="custom-controls-stacked">
        <label class="custom-control custom-radio">
            <input id="radioStacked1" name="radio-stacked" type="radio" class="custom-control-input">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Toggle this custom radio</span>
        </label>
        <label class="custom-control custom-radio">
            <input id="radioStacked2" name="radio-stacked" type="radio" class="custom-control-input">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Or toggle this other custom radio</span>
        </label>
        </div>
        <!-- <input type='text' name='entrada'>
        <input type='submit' class="btn btn-primary" value='Tentar'> -->
        <button type="submit" class="btn btn-primary">Jogar</button>
      </div>
    </div>
    </form>
    
  </div>
  <div class="col-4">
  <ul class="list-group">
  <li class="list-group-item justify-content-between">
    Cras justo odio
    <span class="badge badge-default badge-pill">14</span>
  </li>
  <li class="list-group-item justify-content-between">
    Dapibus ac facilisis in
    <span class="badge badge-default badge-pill">2</span>
  </li>
  <li class="list-group-item justify-content-between">
    Morbi leo risus
    <span class="badge badge-default badge-pill">1</span>
  </li>
</ul>
</div>
</div>
