<?php

$decimal = $_POST['decimal'];
$error = NULL;
$resultados = [];
// Calcula a porcentagem
function calculaPorcentagem($porcentagem, $valor) {
  return ($porcentagem / 100) * $valor;
}

// Verifica se é um numero digitado.
if (is_numeric($decimal)) {  
  $cinquenta_porcento = calculaPorcentagem(50, $decimal);
  $dez_porcento = calculaPorcentagem(10, $decimal);
  $cinco_porcento = calculaPorcentagem(5.5, $decimal);
  $um_porcento = calculaPorcentagem(1, $decimal);
  $somatoria = $cinquenta_porcento + $dez_porcento + $cinco_porcento + $um_porcento;

  $resultados = [
    [
      'descricao' => '50%',
      'valor' => $cinquenta_porcento
    ],
    [
      'descricao' => '10%',
      'valor' => $dez_porcento
    ],
    [
      'descricao' => '5.5%',
      'valor' => $cinco_porcento
    ],
    [
      'descricao' => '1%',
      'valor' => $um_porcento
    ],
    [
      'descricao' => 'Somatoria',
      'valor' => $somatoria
    ],
  ];
}
// Verifica se está setado algum valor, isto impede de disparar o erro caso, não
// tenha nada digitado.
elseif (isset($decimal)) {
  $error = 'Apenas decimais';
}

?>

<form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
  <input name="decimal" />
  <input type="submit" value="Enviar" />
</form>

<?php if (!$error) { ?> 
  <div>
    <?php foreach ($resultados as $resultado) { ?>
        <p> <?= $resultado['descricao'] . ': ' .  $resultado['valor'] ?> </p>
    <?php } ?>

  </div>
<?php } else { ?>
  <p style="color:red"><?= $error ?></p>
<?php } ?>
