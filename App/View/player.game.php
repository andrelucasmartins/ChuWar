<div class="rounded p-5 mt-5 mb-5 bg-white section">
<?php echo "Olá ".$jogador;

?>
<div class="row justify-content-between">
<div class="col-4">
<?php  foreach($paises as $country => $key): ?>
  <table class="table">
  <thead class="thead-inverse">
      <tr>
        <th># <?php echo $key["id"] ?></th>
        <th><?php echo 'País - '.$key["pais"] ?></th>
        <th>Rodada</th>
        <th>Username</th>
      </tr>
  </thead>
  <tbody>

    <tr>
      <td scope="row">#</td>
      
        <td><?php echo implode(" ", array_values($key['fronteira']) ?: $key) ?></td>
     
      <td><?php echo $rodada ?? null ?></td>
      <td><?php $jogador ?></td>
    </tr>
   
  </tbody>
  </table>
    <?php endforeach; ?>

    
  </div>
  <div class="col-4">
  <table class="table">
      <thead class="thead-default">
        <tr>
          <th>#</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Username</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
</div>