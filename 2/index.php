<?php

$data1 = $_POST['data1'] ?? NULL;
$data2 = $_POST['data2'] ?? NULL;

// Calcula a distancia em dias.
function calculaDistanciaDias($data1, $data2) {
  $data1 = date_create($data1);
  $data2 = date_create($data2);

  if ($data1 > $data2) {
    $diferenca = date_diff($data1, $data2);
  }

  elseif ($data2 > $data1) {
    $diferenca = date_diff($data2, $data1);
  }

  else {
    $diferenca = date_diff($data1, $data2);
  }
  
  // %a retorna em dias.
  return $diferenca->format('%a');
}

// Formata a data para o padrão brasileiro.
function formataData($data) {
  $data = date_create($data);
  return $data->format('d-m-Y');
}

$data1_formatada = formataData($data1);
$data2_formatada = formataData($data2);
$diferenca = calculaDistanciaDias($data1, $data2);

?>

<form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
  <?php for($i = 1; $i <= 2; $i++) { ?>
    <label for="data<?= $i ?>">Data <?= $i ?></label>
    <input name="data<?= $i ?>" data-mask="0000-00-00" />
    </br>
    </br>
  <?php } ?>
  <input type="submit" value="Enviar" />
</form>

  <div>
    <p>Data 1: <?= $data1_formatada ?> </p>
    <p>Data 2: <?= $data2_formatada ?> </p>
    <p>Diferença: <?= $diferenca ?> </p>
  </div>

<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

<script 
  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>