<?php
$_SESSION['url retorno'] = S SERVER['PHP SELF'];
if(lisset($ SESSION['login'])) {
header ('Location: login formulario.php');
exit;
}
?>

