<?php
 $urlbase = 'http://www.baseinterativa.com.br/projetos/casa_ideia_on_line/develop/'
 //$urlbase = 'http://localhost/casaideia/'
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<link href="<?php echo $urlbase ?>favicon.ico" rel="shortcut icon">

<title><?php if ($title) echo $title.' - ' ?>Casa de Ideia</title>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Owl Stylesheets -->
<link rel="stylesheet" href="<?php echo $urlbase ?>css/owl.carousel.min.css">

<!-- Owl Scripts -->
<script src="<?php echo $urlbase ?>js/jquery.min.js"></script>
<script src="<?php echo $urlbase ?>js/owl.carousel.min.js"></script>

<!-- Tab -->
<script src="<?php echo $urlbase ?>js/velocity.min.js"></script>
<script src="<?php echo $urlbase ?>js/tabtab.min.js"></script>

<!-- FancyBox -->
<link rel="stylesheet" href="<?php echo $urlbase ?>css/jquery.fancybox.min.css">
<script src="<?php echo $urlbase ?>js/jquery.fancybox.min.js"></script>

<!-- Scroll Header Animation -->
<script src="<?php echo $urlbase ?>js/classie.js"></script>
<script>
    function init() {
        window.addEventListener('scroll', function(e){
            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                shrinkOn = 100,
                header = document.querySelector("header");
            if (distanceY > shrinkOn) {
                classie.add(header,"smaller");
            } else {
                if (classie.has(header,"smaller")) {
                    classie.remove(header,"smaller");
                }
            }
        });
    }
    window.onload = init();
</script>

<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- Font Awesome -->
<script src="https://use.fontawesome.com/ccc4988e1f.js"></script>

<link rel="stylesheet" href="<?php echo $urlbase ?>css/estilo.css">

</head>
<body>
<div class="spacer"></div>
<header>
  <div class="container">
    <div class="row">
      <h1>Casa Ideia</h1>
      <i class="bt-menu-mobile fa fa-bars" aria-hidden="true"></i>
      <ul class="menu">
        <li><a href="<?php echo $urlbase ?>" <?php echo ($page == 'home') ? 'class="current"' : '';?>>Home</a></li>
        <li><a href="<?php echo $urlbase ?>sobre/" <?php echo ($page == 'sobre') ? 'class="current"' : '';?>>Sobre</a></li>
        <li><a href="<?php echo $urlbase ?>como-funciona/" <?php echo ($page == 'como-funciona') ? 'class="current"' : '';?>>Como funciona</a></li>
        <li><a href="<?php echo $urlbase ?>o-que-voce-recebe/" <?php echo ($page == 'o-que-voce-recebe') ? 'class="current"' : '';?>>O que você recebe</a></li>
        <li><a href="<?php echo $urlbase ?>precos-e-prazos/" <?php echo ($page == 'precos-e-prazos') ? 'class="current"' : '';?>>Preços e prazos</a></li>
        <li><a href="<?php echo $urlbase ?>contato/" <?php echo ($page == 'contato') ? 'class="current"' : '';?>>Contato</a></li>
      </ul>
      <div class="col-md-2 col-md-offset-0 col-sm-8 col-sm-offset-2 social-cliente">
        <div class="social">
          <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
          <a href="#" class="facebook"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
          <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>
        <a href="<?php echo $urlbase ?>area-do-cliente/" class="btn-black sm">Área do cliente</a>
      </div>
    </div>
  </div>
</header>