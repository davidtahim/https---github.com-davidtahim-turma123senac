<!doctype html>

<html lang="pt-br">


<head>

<meta charset="utf-8">

<title>Meu amigo cão - Petshop</title>
<?php wp_head();?>

</head>




<body id="inicial">


<header>

<h1>Meu amigo cão - Petshop</h1>

<div id="anuncio"></div>



<section>

<p><a href="boletim.html">Assine o boletim mensal</a></p>

<p>nos acompanhe: </p>
<figure>

</figure>

</section>

</header>

<nav>

<?php 
            $args = array(
              'menu'        => 'header-menu',
              'menu_class'  => 'nav navbar-nav',
              'container'   => 'false'
            );
            wp_nav_menu( $args );
          ?>

</nav>

