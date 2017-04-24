<?php
$page = 'como-funciona';
$title = 'Como funciona';
include('header.php');
?>
<section class="bg bg-grey como-funciona">
  <div class="bg"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-5 col-sm-8 col-sm-offset-4">
        <h2 class="left">Quer entender melhor como funciona?</h2>
        <h4 class="title left normal tarja-2x">A praticidade, qualidade e economia que você sempre sonhou.</h4>
        <p>Nossos projetos são exclusivamente online. Projetamos tanto espaços residenciais, como comerciais. O valor é definido pela metragem quadrada total, independentemente da quantidade de ambientes contida nela. Ou seja, você pode incluir um ou mais ambientes na mesma metragem quadrada. Após se cadastrar,você será direcionado a um questionário, onde fará o envio da planta e de todos os detalhes do ambiente a ser reformado. É importante que nos envie todas as informações que considerar relevante. Iremos disponibilizar conversas via Skype e área do cliente para melhor atendê-los! Veja o passo a passo abaixo e saiba como ficou muito mais fácil ter a casa dos seus sonhos.</p>
      </div>
    </div>
  </div>
</section>
<h2 class="title tarja-2x typed" style="margin:90px 0;">Projetos <span class="element"></span></h2>
<section class="bg bg-dark projetos-personalizados icon-text">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <img src="<?php echo $urlbase ?>images/como-funciona-icon-responda.png" alt="Responda nosso questionário e envie a planta." />
        <h4>Responda nosso questionário e envie a planta.</h4>
        <p>Faça seu cadastro, defina a metragem quadrada do projeto. Em seguida, responda ao nosso questionário, assim saberemos mais sobre você e o que planeja para o seu ambiente. Por fim, anexe a planta e as fotos do local. Não esqueça de nos contar até os pequenos detalhes, eles são muito importantes na hora de projetar um ambiente perfeito para você.</p>
      </div>
      <div class="col-md-3">
        <img src="<?php echo $urlbase ?>images/como-funciona-icon-pagamento.png" alt="Faça o pagamento." />
        <h4>Faça o pagamento.</h4>
        <p>Escolha qual será a forma de pagamento. Assim que ele for confirmado, começará a contar o prazo para a entrega do seu projeto.</p>
      </div>
      <div class="col-md-3">
        <img src="<?php echo $urlbase ?>images/como-funciona-icon-contato.png" alt="Fique em contato com os nossos arquitetos." />
        <h4>Fique em contato com os nossos arquitetos.</h4>
        <p>Todos nossos arquitetos são especializados em decoração de interiores e terão todo o cuidado com o seu projeto. Durante todo o processo, você terá contato direto com o arquiteto responsável pelo seu projeto, via área do cliente. Desta forma, poderemos esclarecer quaisquer dúvidas venham a surgir.</p>
      </div>
      <div class="col-md-3">
        <img src="<?php echo $urlbase ?>images/como-funciona-icon-projeto.png" alt="Receba seu projeto." />
        <h4>Receba seu projeto.</h4>
        <p>Em 20 dias úteis você receberá todo seu projeto via área do cliente e e-mail, em alguns dias também pelo correio. Após a entrega do projeto, você terá até 15 dias úteis para fazer o pedido de revisão ou alteração de qualquer etapa que julgue necessária.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <a href="#" class="btn-stroke">Comece agora</a>
      </div>
    </div>
  </div>
</section>
<?php include('footer.php'); ?>
<script src="<?php echo $urlbase ?>js/typed.js"></script>
<script>

Typed.new('.element', {
	strings: ["First sentence.", "Second sentence."],
	typeSpeed: 0,
	loop: true
});


equalheight = function(container){

var currentTallest = 0,
     currentRowStart = 0,
     rowDivs = new Array(),
     $el,
     topPosition = 0;
 $(container).each(function() {

   $el = $(this);
   $($el).height('auto')
   topPostion = $el.position().top;

   if (currentRowStart != topPostion) {
     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
       rowDivs[currentDiv].height(currentTallest);
     }
     rowDivs.length = 0; // empty the array
     currentRowStart = topPostion;
     currentTallest = $el.height();
     rowDivs.push($el);
   } else {
     rowDivs.push($el);
     currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
  }
   for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
     rowDivs[currentDiv].height(currentTallest);
   }
 });
}

$(window).load(function() {
  equalheight('h4');
});


$(window).resize(function(){
  equalheight('h4');
});
</script>

