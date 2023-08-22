<?php
$_SESSION['url retorno'] = S SERVER['PHP SELF'];
if(lisset($ SESSION['login'])) {
header ('Location: login formulario.php');
exit;
}
?>


<?php
session start();

2

perv class="card">
= <div class="card-header">
<hl> Projeto Blog em PHP + MySQL IFSP - MURILO</hl>

- </div>
<?php if(isset(S SESSION['login'])): ?>
=| <div class="card-body text-right">

Olá <?php echo $ SESSION['login']['usuario']['nome']?>!
<a href="core/usuario_ repositorio.php?acac=logout"
class="btn btn-link btn-sm" role="button">8air</a>
F </div>
<?php endif ?>
</div>

As propriedades class estão utilizando classes CSS do bootstrap, é o
suficiente para termos um visual mais elaborado em nossas páginas.
Em seguida temos o código do arquivo “rodape.php” na pasta

“includes”.

=

obs WR

[ea]

<div class="card">
<div class="card-body text-center">

<p>Copyright - <a href='http://www.ifsp.edu.br'
target='_blank'>IFSP</a></p>

</div>

O menu da aplicação possui uma opção que só deve ser exibida para
usuarios administradores. Segue o código do arquivo “menu.php” que
deverá estar na pasta “includes”.

1
2
3
4
5
6
7
8

i

</div>

<div class="card">
<div class="card-header">

<div class="card-body">
<ul class="nav flex-column">

<li class="nav-item">

<a class="nav-link" href="index.php">Home</a>
</li>
<li class="nav-item">

<a class="nav-link" href="usuario formulario.php">Cadastre-se</a>
</li>
<li class="nav-item">

<a class="nav-link" href="login formulario.php">Login</a>
</li>
<li class="nav-item">

<a class="nav-link" href="post formulario.php">Incluir Post</a>
</li>
<?php if ((isset(S SESSION['login']))

&& (S SESSION['login'] ['usuario'] ['adm'] === 1)) : ?2>

<li class="nav-item">

<a class="nav-link" href="usuarios.php">Usuários</a>
</li>
<?php endif; ?>

</ul>

Por último temos nosso formulário de busca, o arquivo chama
“busca.php” também na pasta “includes”.

=

OWN

29

<form class="form-inline my-2 my-1g-0" method='get' action=''>
<input class="form-control mr-sm-2" type="search" name='busca'

placeholder="Busca" aria-label="Busca'">

<button class="btn btn-outline-success my-2 my-sm-0"

type="submit" >Buscar</button>

10. Testando as includes

Agora que já temos as includes para topo, menu e rodapé podemos
criar uma página de teste para checar se está tudo funcionando como
deveria. Criar o arquivo “pagina teste.php” na pasta raiz do projeto

blog.

30

<!DOCTYPE html>
m|O<html>
H <head>

<title>Post | Projeto para Web com PHP</title>

<link rel="stylesheet"

href="lib/bootstrap-4.2.1-dist/css/bootstrap.min.css">
</head>
=| <body>
H <div class="container">
= <div class="row">
= <div class="col-md-12">
= <?php
include 'includes/topo.php';
Fr 7>
L </div>
L </div>
= <div class="row" style="min-height: 500px;">
I <div class="col-md-12">
<?php include 'includes/menu.php'; ?>
- </div>
=| <div class="col-md-10" style="padding-top: 50px;">
<h2>Pagina teste includes</h2>
- </div>
L </div>
= <div class="row">
: <div class="col-md-12">
= <?php
include 'includes/rodape.php';

Fr 7>
L </div>
L </div>
L </div>

<script src="1ib/bootstrap-4.2.1-dist/js/bootstrap.min.js"></script>
- </body>
L</html>
Resultado após executar nossa página de teste, pelo endereço
http://localhost/bloa/padgina teste.php.

[E Post | Projeto para Web com PHP X

1 € 3 CG O localhost8080/blog/pagina_teste.php Q *»0 :

Projeto Blog em PHP + MySQL IFSP - MURILO

Menu

Home
Cadastre-se
Login

Incluir Post

Pagina teste includes

Copyright - IFSP

31
