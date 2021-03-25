<?php 

  $exercios = [
    1,
    2,
    3,
    4,
    5,
    6,
    8
  ];

?>

<?php foreach ($exercios as $exercio) { ?>
  <a href="<?= $exercio ?>"><?= $exercio ?></a> 
  </br>
  </br>
<?php } ?>