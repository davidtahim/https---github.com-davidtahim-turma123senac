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

<div id="anuncio"><img src="<?php bloginfo('template_directory');?>/imagens/anuncio-cantinho-feliz-h.jpg" alt="anúncio - cantinho feliz, hotel para cachorro"></div>



<section>

<p><a href="boletim.html">Assine o boletim mensal</a></p>

<p>nos acompanhe: </p>
<figure>
<a href="#"><img src="<?php bloginfo('template_directory');?>/imagens/ms-facebook.gif" alt="facebook"></a> 
<a href="#"><img src="<?php bloginfo('template_directory');?>/imagens/ms-twitter.gif" alt="twitter"></a> 
<a href="#"><img src="<?php bloginfo('template_directory');?>/imagens/ms-youtube.gif" alt="youtube"></a> 
<a href="#"><img src="<?php bloginfo('template_directory');?>/imagens/ms-pinterest.gif" alt="pinterest"></a> 
<a href="#"><img src="<?php bloginfo('template_directory');?>/imagens/ms-gmais.gif" alt="google mais"></a>
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

