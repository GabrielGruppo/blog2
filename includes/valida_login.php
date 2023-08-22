<?php
$_SESSION['url retorno'] = $_SERVER['PHP SELF'];
if(lisset($ SESSION['login'])) {
header ('Location: login formulario.php');
exit;
}
?>

