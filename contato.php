<?php
$page = 'contato';
$title = 'Contato';
include('header.php');
?>
<section>
  <div class="container">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1">
        <h2 class="title left tarja-center">Entre em contato!</h2>
        <p>Estamos a disposição para atendê-los.<br>
        Ligue para a gente, mande um WhatsApp ou deixe sua mensagem que iremos lhe retornar o mais breve possível.</p>
      </div>
    </div>
  </div>
</section>
<section class="contatos bg bg-grey pad-2x">
  <div class="container">
    <div class="row">
      <ul>
        <li><i class="fa fa-phone" aria-hidden="true"></i>+55 21 3502-8733</li>
        <li><i class="fa fa-whatsapp" aria-hidden="true"></i>+55 21 9 0000-0000</li>
        <li><i class="fa fa-clock-o" aria-hidden="true"></i>10h as 18h de Segunda à Sexta-feira</li>
        <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:contato@casaideiaonline.com.br">contato@casaideiaonline.com.br</a></li>
      </ul>
    </div>
  </div>
</section>
<section class="contato">
  <div class="container">
    <form>
      <div class="row">
        <div class="col-md-5">
          <input type="text" placeholder="nome completo" />
          <input type="email" placeholder="e-mail" />
          <input type="tel" placeholder="telefone" />
        </div>
        <div class="col-md-7">
          <textarea placeholder="mensagem"></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2 col-md-offset-10">
          <button type="submit" class="">Enviar</button>
        </div>
      </div>
    </form>
  </div>
</section>
<?php include('footer.php'); ?>