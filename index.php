<?php
$page = 'home';
include('header.php');
?>
<section>
<div class="container">
  <div class="row">
    <div class="owl-carousel banner-1 owl-theme col-md-4">
      <div class="item"><img src="<?php echo $urlbase ?>images/banner_1.jpg" /></div>
      <div class="item"><img src="<?php echo $urlbase ?>images/banner_2.jpg" /></div>
      <div class="item"><img src="<?php echo $urlbase ?>images/banner_3.jpg" /></div>
      <div class="item"><img src="<?php echo $urlbase ?>images/banner_4.jpg" /></div>
      <div class="item"><img src="<?php echo $urlbase ?>images/banner_5.jpg" /></div>
      <div class="item"><img src="<?php echo $urlbase ?>images/banner_6.jpg" /></div>
      <div class="item"><img src="<?php echo $urlbase ?>images/banner_7.jpg" /></div>
      <div class="item"><img src="<?php echo $urlbase ?>images/banner_8.jpg" /></div>
      <div class="item"><img src="<?php echo $urlbase ?>images/banner_9.jpg" /></div>
      <div class="item"><img src="<?php echo $urlbase ?>images/banner_10.jpg" /></div>
      <div class="item"><img src="<?php echo $urlbase ?>images/banner_11.jpg" /></div>
      <div class="item"><img src="<?php echo $urlbase ?>images/banner_12.jpg" /></div>
    </div>
    <div class="owl-carousel banner-2 owl-theme col-md-4">
      <div class="item"><img src="<?php echo $urlbase ?>images/banner_1.jpg" /></div>
      <div class="item"><img src="<?php echo $urlbase ?>images/banner_2.jpg" /></div>
      <div class="item"><img src="<?php echo $urlbase ?>images/banner_3.jpg" /></div>
      <div class="item"><img src="<?php echo $urlbase ?>images/banner_4.jpg" /></div>
      <div class="item"><img src="<?php echo $urlbase ?>images/banner_5.jpg" /></div>
      <div class="item"><img src="<?php echo $urlbase ?>images/banner_6.jpg" /></div>
      <div class="item"><img src="<?php echo $urlbase ?>images/banner_7.jpg" /></div>
      <div class="item"><img src="<?php echo $urlbase ?>images/banner_8.jpg" /></div>
      <div class="item"><img src="<?php echo $urlbase ?>images/banner_9.jpg" /></div>
      <div class="item"><img src="<?php echo $urlbase ?>images/banner_10.jpg" /></div>
      <div class="item"><img src="<?php echo $urlbase ?>images/banner_11.jpg" /></div>
      <div class="item"><img src="<?php echo $urlbase ?>images/banner_12.jpg" /></div>
    </div>
    <div class="owl-carousel banner-3 owl-theme col-md-4">
      <div class="item"><img src="<?php echo $urlbase ?>images/banner_1.jpg" /></div>
      <div class="item"><img src="<?php echo $urlbase ?>images/banner_2.jpg" /></div>
      <div class="item"><img src="<?php echo $urlbase ?>images/banner_3.jpg" /></div>
      <div class="item"><img src="<?php echo $urlbase ?>images/banner_4.jpg" /></div>
      <div class="item"><img src="<?php echo $urlbase ?>images/banner_5.jpg" /></div>
      <div class="item"><img src="<?php echo $urlbase ?>images/banner_6.jpg" /></div>
      <div class="item"><img src="<?php echo $urlbase ?>images/banner_7.jpg" /></div>
      <div class="item"><img src="<?php echo $urlbase ?>images/banner_8.jpg" /></div>
      <div class="item"><img src="<?php echo $urlbase ?>images/banner_9.jpg" /></div>
      <div class="item"><img src="<?php echo $urlbase ?>images/banner_10.jpg" /></div>
      <div class="item"><img src="<?php echo $urlbase ?>images/banner_11.jpg" /></div>
      <div class="item"><img src="<?php echo $urlbase ?>images/banner_12.jpg" /></div>
    </div>
    
	<script>
		$('.banner-1').owlCarousel({
			animateOut: 'fadeOut',
			loop:true,
			margin:30,
			nav:false,
			dots:false,
			autoplay:true,
			items:1,
			autoplayTimeout:4300,
		});

		
		$('.banner-2').owlCarousel({
			animateOut: 'fadeOut',
			loop:true,
			margin:30,
			nav:false,
			dots:false,
			autoplay:true,
			items:1,
			autoplayTimeout:4900,
		});

		
		$('.banner-3').owlCarousel({
			animateOut: 'fadeOut',
			loop:true,
			margin:30,
			nav:false,
			dots:false,
			autoplay:true,
			items:1,
			autoplayTimeout:4600,
		});
		
		$('.banner-1, .banner-2, .banner-3').trigger('stop.owl.autoplay')
		
		setTimeout(function() {
			$('.banner-1').trigger('play.owl.autoplay',[1000]);
		}, 1000);		
		setTimeout(function() {
			$('.banner-2').trigger('play.owl.autoplay',[1000]);
		}, 3000);		
		setTimeout(function() {
			$('.banner-3').trigger('play.owl.autoplay',[1000]);
		}, 2000);
    </script>
  </div>
</div>
</section>
<h2>Transforme sua casa em um <u>click</u></h2>
<section class="transforme bg bg-grey">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-md-offset-1 col-sm-10 col-sm-offset-1">
        <ol>
          <li><strong>Faça seu cadastro</strong>, envie a planta do seu ambiente, defina seu orçamento e responda um questionário para a gente conhecer um pouco mais sobre você.</li>
          <li>Após <strong>a confirmação do pagamento</strong>, seu projeto começará a ser elaborado pela nossa equipe de arquitetos, que estarão em contato com você durante todo o processo.</li>
          <li>Em um prazo máximo de 20 dias úteis, o projeto chegará para você via área do cliente e e-mail.<br />
<strong>Veja aqui</strong> o que você irá receber.</li>
        </ol>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 col-sm-12">
      <div class="col-sm-6">
        <a href="#" class="btn-black lg">Comece agora</a>
      </div>
      <div class="col-sm-6">
        <a href="#" class="btn-black lg">Entenda melhor como funciona</a>
      </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="row">
      <h2 class="title">Antes & Depois</h2>
    </div>
    <div class="row tabs">
      <ul class="filtro text-center tabs__menu">
        <li><a>Todos</a></li>
        <li><a>Quarto</a></li>
        <li><a>Sala</a></li>
        <li><a>Banheiro</a></li>
        <li><a>Escritório</a></li>
        <li><a>Varanda</a></li>
        <li><a>Cozinha</a></li>
      </ul>
      <div class="col-md-12 tabs__content">
        <div class="antes-depois owl-carousel owl-theme todos">
          <div class="item"><img src="<?php echo $urlbase ?>images/antes-depois_01.jpg" /></div>
          <div class="item"><img src="<?php echo $urlbase ?>images/antes-depois_01.jpg" /></div>
          <div class="item"><img src="<?php echo $urlbase ?>images/antes-depois_01.jpg" /></div>
        </div>
        <div class="antes-depois owl-carousel owl-theme quarto">
          <div class="item"><img src="<?php echo $urlbase ?>images/antes-depois_01.jpg" /></div>
          <div class="item"><img src="<?php echo $urlbase ?>images/antes-depois_01.jpg" /></div>
          <div class="item"><img src="<?php echo $urlbase ?>images/antes-depois_01.jpg" /></div>
        </div>
        <div class="antes-depois owl-carousel owl-theme sala">
          <div class="item"><img src="<?php echo $urlbase ?>images/antes-depois_01.jpg" /></div>
          <div class="item"><img src="<?php echo $urlbase ?>images/antes-depois_01.jpg" /></div>
          <div class="item"><img src="<?php echo $urlbase ?>images/antes-depois_01.jpg" /></div>
        </div>
        <div class="antes-depois owl-carousel owl-theme banheiro">
          <div class="item"><img src="<?php echo $urlbase ?>images/antes-depois_01.jpg" /></div>
          <div class="item"><img src="<?php echo $urlbase ?>images/antes-depois_01.jpg" /></div>
          <div class="item"><img src="<?php echo $urlbase ?>images/antes-depois_01.jpg" /></div>
        </div>
        <div class="antes-depois owl-carousel owl-theme escritorio">
          <div class="item"><img src="<?php echo $urlbase ?>images/antes-depois_01.jpg" /></div>
          <div class="item"><img src="<?php echo $urlbase ?>images/antes-depois_01.jpg" /></div>
          <div class="item"><img src="<?php echo $urlbase ?>images/antes-depois_01.jpg" /></div>
        </div>
        <div class="antes-depois owl-carousel owl-theme varanda">
          <div class="item"><img src="<?php echo $urlbase ?>images/antes-depois_01.jpg" /></div>
          <div class="item"><img src="<?php echo $urlbase ?>images/antes-depois_01.jpg" /></div>
          <div class="item"><img src="<?php echo $urlbase ?>images/antes-depois_01.jpg" /></div>
        </div>
        <div class="antes-depois owl-carousel owl-theme cozinha">
          <div class="item"><img src="<?php echo $urlbase ?>images/antes-depois_01.jpg" /></div>
          <div class="item"><img src="<?php echo $urlbase ?>images/antes-depois_01.jpg" /></div>
          <div class="item"><img src="<?php echo $urlbase ?>images/antes-depois_01.jpg" /></div>
        </div>
      </div>
	<script>
		var owl = $('.antes-depois');
		$('.antes-depois').owlCarousel({
			loop:true,
			margin:0,
			nav:true,
			dots:false,
			autoplay:true,
			responsive:{
				0:{
					items:1
				}
			}
		});
$(window).load(function() {
    $('.tabs').tabtab({
    tabMenu: '.tabs__menu',             // direct container of the tab menu items
    tabContent: '.tabs__content',
	startSlide: 1,
	dynamicHeight: true,                // if true the height will dynamic and animated.
    useAnimations: true
});
});
    </script>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="row">
      <h2 class="title">Casa Ideia na mídia</h2>
    </div>
    <div class="row">
    <div class="col-md-10 col-md-offset-1">
    <div class="midias owl-carousel owl-theme">
      <div class="item"><img src="<?php echo $urlbase ?>images/midia-oglobo.png" /></div>
      <div class="item"><img src="<?php echo $urlbase ?>images/midia-odia.png" /></div>
      <div class="item"><img src="<?php echo $urlbase ?>images/midia-globocom.png" /></div>
      <div class="item"><img src="<?php echo $urlbase ?>images/midia-oglobo.png" /></div>
      <div class="item"><img src="<?php echo $urlbase ?>images/midia-odia.png" /></div>
      <div class="item"><img src="<?php echo $urlbase ?>images/midia-globocom.png" /></div>
      <div class="item"><img src="<?php echo $urlbase ?>images/midia-oglobo.png" /></div>
      <div class="item"><img src="<?php echo $urlbase ?>images/midia-odia.png" /></div>
      <div class="item"><img src="<?php echo $urlbase ?>images/midia-globocom.png" /></div>
    </div>
    </div>
	<script>
		$('.midias').owlCarousel({
			loop:true,
			margin:50,
			nav:true,
			dots:false,
			autoplay:true,
			//autoWidth:true,
			items:5,
			responsive:{
				0:{
					items:2
				},
				600:{
					items:5
				}
			}
		})
    </script>
  </div>
  </div>
</section>
<section class="bg bg-grey">
  <div class="container">
    <div class="row">
      <div class="infos">
        <div class="item">
          <span class="icon"><img src="<?php echo $urlbase ?>images/icon-clientes.png" alt="Clientes atendidos" /></span>
          <span class="numero">2,530</span>
          <span class="info">Clientes atendidos</span>
        </div>
        <div class="item">
          <span class="icon"><img src="<?php echo $urlbase ?>images/icon-hora.png" alt="Horas trabalhadas" /></span>
          <span class="numero">84,265</span>
          <span class="info">Horas trabalhadas</span>
        </div>
        <div class="item">
          <span class="icon"><img src="<?php echo $urlbase ?>images/icon-projetos.png" alt="Projetos entregues" /></span>
          <span class="numero">2,530</span>
          <span class="info">Projetos entregues</span>
        </div>
        <div class="item">
          <span class="icon"><img src="<?php echo $urlbase ?>images/icon-cafe.png" alt="Copos de café" /></span>
          <span class="numero">1,230</span>
          <span class="info">Copos de café</span>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="duvidas-depoimentos-newsletter">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-md-offset-0 col-sm-10 col-sm-offset-1">
        <h3 class="title">Tire suas dúvidas</h3>
        <p>Ficou com alguma dúvida?<br>
        Entre em contato.</p>
        <p><a href="#" class="btn-black md">Fale conosco</a>
      </div>
      <div class="col-md-4 col-md-offset-1 col-sm-10 col-sm-offset-1">
        <h3 class="title">O que nossos clientes falam?</h3>
        <div class="depoimentos owl-carousel owl-theme">
          <div class="item">
            <p>Ficamos muito felizes com o resultado do projeto. As ideias colocadas pela arquiteta fizeram toda diferença, principalmente na sala e cozinha, onde o espaço era bastante limitado. Cores neutras, móveis clean e funcionais deixaram o espaço harmonioso e moderno. Outro destaque para nós foi para parte de iluminação, pois não tínhamos conhecimento que poderia fazer tanta diferença, com certeza hoje temos ambientes muito mais aconchegantes.</p>
            <p><strong>Stéphanie e Carlos Gonçalves / Joinville - SC</strong></p>
          </div>
          <div class="item">
            <p>Ficamos muito felizes com o resultado do projeto. As ideias colocadas pela arquiteta fizeram toda diferença, principalmente na sala e cozinha, onde o espaço era bastante limitado. Cores neutras, móveis clean e funcionais deixaram o espaço harmonioso e moderno. Outro destaque para nós foi para parte de iluminação, pois não tínhamos conhecimento que poderia fazer tanta diferença, com certeza hoje temos ambientes muito mais aconchegantes.</p>
            <p><strong>Stéphanie e Carlos Gonçalves / Joinville - SC</strong></p>
          </div>
        </div>
        	<script>
		$('.depoimentos').owlCarousel({
			loop:true,
			margin:0,
			nav:true,
			dots:false,
			autoplay:true,
			items:1
		});
    </script>
      </div>
      <div class="col-md-3 col-md-offset-1 col-sm-10 col-sm-offset-1">
        <h3 class="title">Receba nosso E-book</h3>
        <p>Deixe seu e-mail e receba nosso E-book gratuito com dicas selecionadas de decoração.</p>
        <form>
          <input type="email" placeholder="Digite seu e-mail">
          <button type="submit">Enviar</button>
        </form>
      </div>
    </div>
  </div>
</section>
<?php include('footer.php'); ?>