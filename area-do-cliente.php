<?php
$page = 'area-do-cliente';
$title = 'Área do cliente';
include('header.php');
?>
<section>
  <div class="container">
    <form>
      <div class="row">
        <div class="col-sm-12">
          <h2 class="title">Área do cliente</h2>
        </div>
      </div>
      <div class="row">
        <h4 class="text-center" style="margin:10px 0 15px;">Faça seu login</h4>
        <div class="col-sm-4  col-sm-offset-4">
          <input type="email" placeholder="e-mail" />
          <input type="password" placeholder="senha" />
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4  col-sm-offset-4 col-md-2 col-md-offset-5 text-center">
          <button type="submit" class="">Entrar</button>
          <small class="text-nowrap">Esqueceu sua senha? <a href="#">Clique aqui</a></small>
        </div>
      </div>
      <div class="row">
        <h4 class="text-center" style="margin:60px 0 15px;">Crie sua conta</h4>
        <div class="col-sm-4  col-sm-offset-4 col-md-2 col-md-offset-5 text-center">
          <button type="submit" class="">Cadastre-se</button>
        </div>
      </div>
    </form>
  </div>
</section>
<?php include('footer.php'); ?>