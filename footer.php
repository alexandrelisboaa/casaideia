<footer class="bg bg-grey">
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <h2 class="logo">Casa Ideia</h2>
      </div>
      <div class="col-md-3 contatos">
        <h4>Telefone</h4>
        <p>+55 21 3502-8733<br>
        10h às 18h de segunda<br>
        a sexta feira</p>
        <h4>Email</h4>
        <p><a href="mailto:contato@casadeideiaonline.com.br">contato@casadeideiaonline.com.br</a></p>
      </div>
      <div class="col-md-3 pagamentos">
        <h4>Formas de pagamento</h4>
        <p><img src="<?php echo $urlbase ?>images/pagamentos.png" alt="Formas de pagamento" /></p>
      </div>
      <div class="col-md-2 social col-md-offset-2 social">
        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10 col-md-offset-2 copy">
        <ul class="menu">
          <li><a href="<?php echo $urlbase ?>" <?php echo ($page == 'home') ? 'class="current"' : '';?>>Home</a></li>
          <li><a href="<?php echo $urlbase ?>sobre/" <?php echo ($page == 'sobre') ? 'class="current"' : '';?>>Sobre</a></li>
          <li><a href="<?php echo $urlbase ?>como-funciona/" <?php echo ($page == 'como-funciona') ? 'class="current"' : '';?>>Como funciona</a></li>
          <li><a href="<?php echo $urlbase ?>o-que-voce-recebe/" <?php echo ($page == 'o-voce-que-recebe') ? 'class="current"' : '';?>>O que você recebe</a></li>
          <li><a href="<?php echo $urlbase ?>precos-e-prazos/" <?php echo ($page == 'precos-e-prazos') ? 'class="current"' : '';?>>Preços e prazos</a></li>
          <li><a href="<?php echo $urlbase ?>contato/" <?php echo ($page == 'contato') ? 'class="current"' : '';?>>Contato</a></li>
        </ul>
        <div class="powered">
          <a href="#" target="_blank"><img src="<?php echo $urlbase ?>images/logo_base.png" /></a>
        </div>
      </div>
    </div>
  </div>
</footer>
<script>
alturaheader = $('header').outerHeight();
$('.spacer').css({'height':alturaheader});
$('.bt-menu-mobile').on('click touchstart', function(e) {
	$('header .menu, .bt-menu-mobile').toggleClass('menu-active');
	e.preventDefault();
});
$("select").change(function() {
	$(this).addClass("selecionado");
});
</script>
</body>
</html>