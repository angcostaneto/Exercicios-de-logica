<?php

  $ordena_numeros = [];

  // Recebe n numeros para ordenar.
  function ordenaNumeros(...$numeros) {
    $array_ordenado = [];
    foreach ($numeros as $numero) {
      $array_ordenado[] = $numero;
    }

    sort($array_ordenado);

    return $array_ordenado;
  }

  if ($numeros = $_POST) {
    // Transforma tudo em uma variavel, assim não repetindo o array do exercicio.
    foreach ($numeros as $nome_variavel => $numero) {
      ${$nome_variavel} = $numero;
    }

    $ordena_numeros = ordenaNumeros(
      $numero1,
      $numero2,
      $numero3,
      $numero4,
      $numero5,
      $numero6
    );

  }

?>


<form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
  <?php for($i = 1; $i <= 6; $i++) { ?>
    <label for="numero<?= $i ?>">Numero <?= $i ?></label>
    <input name="numero<?= $i ?>" type="number">
    </br>
    </br>
  <?php } ?>
  <input type="submit" value="Enviar" />
</form>

<div>
  <?php foreach ($ordena_numeros as $numero_ordenado) { ?> 
    <?= $numero_ordenado ?> </br>
  <?php } ?>
</div>