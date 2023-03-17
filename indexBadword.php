<?php 

$name = $_GET['name'];
var_dump($name);
$password = $_GET['pass'];
var_dump($password);
$censored_password = str_replace($password, '***', $password);



?>
<div>
  <p>Ecco il tuo nome <?php echo $name ?> -------<?php echo strlen($name) ?></p>
</div>
<div>
  <p>Ecco la tua password <?php echo $password ?>-------<?php echo strlen($password) ?></p>
</div>
<div>
  <p>Ecco la tua password censurata '<?php echo $censored_password ?>'------<?php  echo strlen($censored_password) ?></p>
</div>


