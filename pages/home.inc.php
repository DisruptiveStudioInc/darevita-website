<!-- ============================================== -->
<!-- ONE -->
<!-- ============================================== -->

<section class="rel hero-pin">
    <div class="anchor" id="home"></div>
    <div class="dh-100 of-h">
        <video class="full-img" src="https://temporal.darevita.com/wp-content/uploads/2025/07/DV-secuencia-1-2.mp4#t=2.41" autoplay loop muted></video>
    </div> 

    <div class="text-hero t-c hero-text">
        <h1 class="h1-special first"><span>Darevita:</span> <?php echo $Hero_01; ?></h1>
        <p class="h4 w-50 med-w-80 small-w-100 m-center"><?php echo $Hero_02; ?></p>
    </div>
</section>

<section class="c-sec">
	<div class="anchor" id="inside"></div>
	<div class="mw-1440 jc-center ai-center">
		<div class="t-c">
			<h2 class="h1-special mb-50 small-mb-0"><?php echo $Journey_title; ?></h2>
			<div class="tabs t-c">
				<div class="tab-header">
					<div class="tab active"><span>01</span><?php echo $Journey_button_1; ?></div>
					<div class="tab"><span>02</span><?php echo $Journey_button_2; ?></div>
					<div class="tab"><span>03</span><?php echo $Journey_button_3; ?></div>
					<div class="tab"><span>04</span><?php echo $Journey_button_4; ?></div>
					<div class="active-indicator small-d-none"></div>
				</div>

				<div class="tab-content">
					<div class="content active" data-text="Experience our revolutionary products that transform lives."><?php echo $Journey_text_1; ?></div>
					<div class="content" data-text="Join a community that believes in giving without expectation."><?php echo $Journey_text_2; ?></div>
					<div class="content" data-text="Build a future where purpose and prosperity go hand in hand."><?php echo $Journey_text_3; ?></div>
					<div class="content" data-text="Witness the power of positive change in yourself and others."><?php echo $Journey_text_4; ?></div>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="h-100 pin rel of-h small-h-0 letters">
		<div>
			<h2 class="word_01"><?php echo $Letters_title_01; ?><span><?php echo $Letters_text_01; ?></span></h2>
			<img class="img_01" src="./images/body/letters/1.webp" alt="<?php echo $Letters_title_01; ?>">
		</div>

		<div>
			<h2 class="word_02"><?php echo $Letters_title_02; ?><span><?php echo $Letters_text_02; ?></span></h2>
			<img class="img_02" src="./images/body/letters/2.webp" alt="<?php echo $Letters_title_02; ?>">
		</div>
		<div>
			<h2 class="word_03"><?php echo $Letters_title_03; ?><span><?php echo $Letters_text_03; ?></span></h2>
			<img class="img_03" src="./images/body/letters/3.webp" alt="<?php echo $Letters_title_03; ?>">
		</div>
		<div>
			<h2 class="word_04"><?php echo $Letters_title_04; ?><span><?php echo $Letters_text_04; ?></span></h2>
			<img class="img_04" src="./images/body/letters/4.webp" alt="<?php echo $Letters_title_04; ?>">
		</div>
	</div>
</section>

<section>
	<div class="mw-1440 t-c h-100 small-h-0 small-fd-col g-20 jc-center ai-center rel parallax">
		<h2 class="h1-special"><?php echo $Vision_text; ?></h2>
		<div class="box box_1">
			<h3 class="h3"><?php echo $Vision_title_01; ?></h3>
			<p class="h5"><?php echo $Vision_text_01; ?></p>
		</div>
		<div class="box box_2">
			<h3 class="h3"><?php echo $Vision_title_02; ?></h3>
			<p class="h5"><?php echo $Vision_text_02; ?></p>
		</div>
		<div class="box box_3">
			<h3 class="h3"><?php echo $Vision_title_03; ?></h3>
			<p class="h5"><?php echo $Vision_text_03; ?></p>
		</div>
	</div>
</section>

<?php
$Modal = array(
	array(
		'Restore',
		$Products_title_01,
		$Products_text_01,
		array(
			$Products_res_key_01,
			$Products_res_key_02,
			$Products_res_key_03,
			$Products_res_key_04,
		)
	),
	array(
		'Rejuvenate',
		$Products_title_02,
		$Products_text_02,
		array(
			$Products_rej_key_01,
			$Products_rej_key_02,
			$Products_rej_key_03,
			$Products_rej_key_04,
		)
	),
	array(
		'Revive',
		$Products_title_03,
		$Products_text_03,
		array(
			$Products_rev_key_01,
			$Products_rev_key_02,
			$Products_rev_key_03,
			$Products_rev_key_04,
		)
	)
);

$counter = 1;

foreach ($Modal as $item){
	echo "
	<div id='Modal{$counter}' class='modal'>
	<div class='modal-content rel'>
	<span class='v-white c-pri icon br-10 icon-close' onclick=\"closeModal('Modal{$counter}')\"></span>
	<h2 class='h2 tc-pri t-c med-t-l'>{$item[0]}</h2>
	<p class='h5'>{$item[1]}</p>
	<p>{$item[2]}</p>
	<ul class='menu-list icon-check col-2 small-col-1 g-10 small-g-0 mt-20'>";
	foreach ($item[3] as $listItem) {
		echo "<li style='font-size:0.8rem;' class='c-sec br-5'>$listItem</li>";
	}
	echo "  </ul>
	</div>
	</div>
	";
	$counter++;
}
?>

<section>
	<div class="h-100 med-h-0 med-fd-col-rev content-scroll jc-center ai-center rel">

		<div class="box_product img-one rel">
			<span>
				<button type="button" class="v-white c-pri icon br-50 icon-more" onclick="openModal('Modal1')"></button>
				<a href="<?php echo $Shop_usa_restore; ?>" class="btn c-ter br-50 v-custom my_flags icon-text icon-1"><?php echo $Btn_buy; ?></a>
				<a href="<?php echo $Shop_mex_restore; ?>" class="btn c-ter br-50 v-custom my_flags icon-text icon-2"><?php echo $Btn_buy; ?></a>
			</span>
			<img src="./images/body/treo/restore.webp" class="product" alt="restore"/>
		</div>

		<div class="box_product img-two">
			<span>
				<button type="button" class="v-white c-pri icon br-50 icon-more" onclick="openModal('Modal2')"></button>
				<a href="<?php echo $Shop_usa_rejuvenate; ?>" class="btn c-ter br-50 v-custom my_flags icon-text icon-1"><?php echo $Btn_buy; ?></a>
				<a href="<?php echo $Shop_mex_rejuvenate; ?>" class="btn c-ter br-50 v-custom my_flags icon-text icon-2"><?php echo $Btn_buy; ?></a>
			</span>
			<img src="./images/body/treo/rejuvenate.webp" class="product" alt="rejuvenate"/>
		</div>

		<div class="box_product img-three">
			<span>
				<button type="button" class="v-white c-pri icon br-50 icon-more" onclick="openModal('Modal3')"></button>
				<a href="<?php echo $Shop_usa_revive; ?>" class="btn c-ter br-50 v-custom my_flags icon-text icon-1"><?php echo $Btn_buy; ?></a>
				<a href="<?php echo $Shop_mex_revive; ?>" class="btn c-ter br-50 v-custom my_flags icon-text icon-2"><?php echo $Btn_buy; ?></a>
			</span>
			<img src="./images/body/treo/revive.webp" class="product" alt="revive"/>
		</div>

		<img class="polvo med-d-none" src="./images/body/treo/polvo.webp">
		<img class="background med-d-none img_product_restore" src="./images/body/treo/bg_restore.webp" alt="restore background">
		<img class="background med-d-none img_product_rejuvenate" src="./images/body/treo/bg_rejuvenate.webp" alt="rejuvenate background">
		<img class="background med-d-none img_product_revive" src="./images/body/treo/bg_revive.webp" alt="revive background">

	</div>
</section>

<section>
	<div class="mw-1280 t-c big">
		<h2 class="h1"><?php echo $Slogan_title; ?></h2>
		<p class="h3">“<?php echo $Slogan_text; ?>”</p>
		<a href="<?php echo $Register; ?>" class="btn big c-ter br-50 mt-40 small-mt-20"><?php echo $Btn_live; ?></a>
	</div>
</section>


<section class="c-sec">
	<div class="anchor"></div>
	<div class="mw-1440 t-c pb-0">
		<p class="h2"><?php echo $Truth_title; ?></p>
	</div>
	<div>
		<ul class="textos">
			<li>
				<h2><?php echo $Truth_title_01; ?></h2>
				<span><img src="./images/body/truth/1.webp" alt="<?php echo $Truth_title_01; ?>"/>
					<p class="h4">"<?php echo $Truth_text_01; ?>"</p>
				</span>
			</li>
			<li>
				<h2><?php echo $Truth_title_02; ?></h2>
				<span><img src="./images/body/truth/2.webp" alt="<?php echo $Truth_title_02; ?>"/>
					<p class="h4">"<?php echo $Truth_text_02; ?>"</p>
				</span>
			</li>
			<li>
				<h2><?php echo $Truth_title_03; ?></h2>
				<span><img src="./images/body/truth/3.webp" alt="<?php echo $Truth_title_03; ?>"/>
					<p class="h4">"<?php echo $Truth_text_03; ?>"</p>
				</span>
			</li>
			<li>
				<h2><?php echo $Truth_title_04; ?></h2>
				<span><img src="./images/body/truth/4.webp" alt="<?php echo $Truth_title_04; ?>"/>
					<p class="h4">"<?php echo $Truth_text_04; ?>"</p>
				</span>
			</li>
		</ul>
	</div>
</section>

<section>
	<div class="mw-1280 big">
		<div class="jc-center g-40 ai-center small-ai-start small-fd-col">

			<div class="img_spirit small-d-none">
				<span class="img_product">
					<div class="product_wrapper">
						<img src="./images/body/the_spirit/1.webp" class="img_reference" alt="revive"/>
						<img src="./images/body/treo/revive.webp" class="product" alt="revive"/>
					</div>
				</span>
				<span class="img_product">
					<div class="product_wrapper">
						<img src="./images/body/the_spirit/2.webp" class="img_reference" alt="rejuvenate"/>
						<img src="./images/body/treo/rejuvenate.webp" class="product" alt="rejuvenate"/>
					</div>
				</span>
				<span class="img_product">
					<div class="product_wrapper">
						<img src="./images/body/the_spirit/3.webp" class="img_reference" alt="restore"/>
						<img src="./images/body/treo/restore.webp" class="product" alt="restore"/>
					</div>
				</span>
			</div>

			<img src="./images/body/treo/all.webp" class="mw-300 m-center small-d-block d-none" alt="all products"/>

			<!-- Textos -->
			<div class="text_spirit">
				<h2 class="h2 small-t-c"><?php echo $Spirit_title; ?></h2>
				<div class="text_one">
					<p class="h2"><?php echo $Spirit_title_01; ?></p>
					<p><?php echo $Spirit_text_01; ?></p>
				</div>

				<div class="text_two">
					<p class="h2"><?php echo $Spirit_title_02; ?></p>
					<p><?php echo $Spirit_text_02; ?></p>
				</div>

				<div class="text_tree">
					<p class="h2"><?php echo $Spirit_title_03; ?></p>
					<p><?php echo $Spirit_text_03; ?></p>
				</div>
			</div>

		</div>
	</div>
</section>

<section class="c-ter">
	<div class="mw-1280 t-c big">
		<h2 class="h1"><?php echo $Traits_title; ?></h2>
		<a href="<?php echo $Register; ?>" class="btn big c-pri br-50 mt-40 small-mt-20"><?php echo $Btn_part; ?></a>
	</div>
</section>

<script>
/* ============================================== */
/* SCROLL-MAGIC */
/* ============================================== */

$(document).ready(function() {
    var controller = new ScrollMagic.Controller();
    var animationSpeed = 0.75;
    var animationLinear = Power3.easeInOut;

    //*------------- GALLERY

    if (window.matchMedia("(min-width: 1080px)").matches) {

    var textoTimeline = new TimelineMax();
    textoTimeline
        .fromTo('.word_01', animationSpeed, {opacity: 1, scale: 1}, {opacity: 0, scale: 4, ease: animationLinear,immediateRender: false})
        .fromTo('.word_02', animationSpeed, {opacity: 0, scale: 1}, {opacity: 1, scale: 1, ease: animationLinear,immediateRender: false})
        .to('.word_02', animationSpeed, {opacity: 0, scale: 4, ease: animationLinear})
        .fromTo('.word_03', animationSpeed, {opacity: 0, scale: 1}, {opacity: 1, scale: 1, ease: animationLinear,immediateRender: false})
        .to('.word_03', animationSpeed, {opacity: 0, scale: 4, ease: animationLinear})
        .fromTo('.word_04', animationSpeed, {opacity: 0, scale: 1}, {opacity: 1, scale: 1, ease: animationLinear,immediateRender: false});

    // Timeline de imagen
    var imgTimeline = new TimelineMax();
    imgTimeline
        .fromTo('.img_01', animationSpeed, {opacity: 1}, {opacity: 0, ease: animationLinear, immediateRender: false}, "+=0.2")
        .fromTo('.img_02', animationSpeed, {opacity: 1}, {opacity: 0, ease: animationLinear, immediateRender: false}, "+=0.8")
        .fromTo('.img_03', animationSpeed, {opacity: 1}, {opacity: 0, ease: animationLinear, immediateRender: false}, "+=0.8")
        .fromTo('.img_04', animationSpeed, {opacity: 1}, {opacity: 1, ease: animationLinear, immediateRender: false}, "+=0.8");

    // Creamos un timeline maestro donde los sincronizamos
    var master = new TimelineMax();
    master.add(textoTimeline, 0); // Inicia al mismo tiempo
    master.add(imgTimeline, 0);   // Inicia también al mismo tiempo

    // ScrollMagic Scene única con pin
    new ScrollMagic.Scene({
        triggerElement: '.pin',
        duration: '300%',
        triggerHook: 0
    })
    .setPin('.pin')
    .setTween(master)
    //.addIndicators()
    .addTo(controller);

    }

    //*------------- HERO

    if (window.matchMedia("(min-width: 1080px)").matches) {
        var heroTimeline = new TimelineMax();
        heroTimeline
            .fromTo('.hero-text', animationSpeed,
                {opacity: 0},
                {opacity: 1}, "+=0.5"
            );

        // ScrollMagic Scene
        new ScrollMagic.Scene({
            triggerElement: '.hero-pin',
            duration: '100%',
            triggerHook: 0
        })
        .setPin('.hero-pin')
        .setTween(heroTimeline)
        //.addIndicators()
        .addTo(controller);
    }


    //*------------- PAPALLAX

    if (window.matchMedia("(min-width: 1080px)").matches) {

    var rot1 = Math.random() * 30 - 10; // entre -5 y 5 grados
    var rot2 = Math.random() * 5 - 5;
    var rot3 = Math.random() * 20 - 15;

    var parallaxTimeline = new TimelineMax();

    parallaxTimeline
      .fromTo('.parallax .box_1', animationSpeed, 
        { left: "0%", top: "40%", rotation: 0 }, 
        { left: "0%", top: "20%", rotation: rot1, ease: animationLinear })
      .fromTo('.parallax .box_2', animationSpeed, 
        { left: "40%", top: "70%", rotation: 0 }, 
        { left: "40%", top: "30%", rotation: rot2, ease: animationLinear }, 0)
      .fromTo('.parallax .box_3', animationSpeed, 
        { left: "80%", top: "60%", rotation: 0 }, 
        { left: "80%", top: "40%", rotation: rot3, ease: animationLinear }, 0);


    var parallax = new ScrollMagic.Scene({
        triggerElement: '.parallax',
        duration: "150%",
        triggerHook: 1
    })
    .setTween(parallaxTimeline)
    //.addIndicators()
    .addTo(controller);

    }

    //*------------- CONTENT SCROLL

    if (window.matchMedia("(min-width: 1080px)").matches) {
        var content = new TimelineMax();

        new ScrollMagic.Scene({
            triggerElement: '.content-scroll',
            duration: '50%',
            triggerHook: 0
        })
        .setPin('.content-scroll')
        //.addIndicators()
        .addTo(controller);

        content
            .fromTo('.content-scroll .polvo', animationSpeed, 
                { opacity: 0, scale: 0 }, 
                { opacity: 1, scale: 1 })
            .to('.content-scroll .img-one',  animationSpeed, {x: "100%" },0)
            .to('.content-scroll .img-two',  animationSpeed, {x: "-100%"},0)
            .to('.content-scroll .img-three',animationSpeed, {x: "0%"   },0)
            .to('.content-scroll .img-one',  animationSpeed, {x: "0%"   },1)
            .to('.content-scroll .img-two',  animationSpeed, {x: "0%"   },1)
            .to('.content-scroll .img-three',animationSpeed, {x: "0%"   },1);
                    
        new ScrollMagic.Scene({
            triggerElement: '.content-scroll',
            duration: '100%',
            triggerHook: 0
        })
        .setTween(content)
        //.addIndicators()
        .addTo(controller);
    }


});

/* ============================================== */
/* MOUSE HOVER */
/* ============================================== */

const texts = document.querySelectorAll('.text_spirit div');
const products = document.querySelectorAll('.img_product');

texts.forEach((text, index) => {
  text.addEventListener('mouseenter', () => {
    products.forEach((product, i) => {
      const circle = product.querySelector('.img_reference');

      if (i === index) {
        // Mostrar producto con animación
        product.style.opacity = '1';
        circle.style.animation = 'circleSlideFade 0.6s 0.2s forwards';
        product.classList.add('show'); // activa el flip
      } else {
        product.style.opacity = '0';
        circle.style.animation = 'none';
        product.classList.remove('show');
      }
    });
  });
});

/* ============================================== */
/* MODAL */
/* ============================================== */

// Función para abrir el modal
function openModal(modalId) {
    var modal = document.getElementById(modalId);
    if (modal) {
        modal.classList.add('open'); // Muestra el modal
        document.body.classList.add('no-scroll'); // Bloquea el scroll
    }
}

// Función para cerrar el modal
function closeModal(modalId) {
    var modal = document.getElementById(modalId);
    if (modal) {
        modal.classList.remove('open'); // Oculta el modal
        checkModalsOpen(); // Verifica si hay otros modales abiertos
    }
}

// Función para verificar si hay modales abiertos y desbloquear el scroll
function checkModalsOpen() {
    var openModals = document.querySelectorAll('.modal.open');
    if (openModals.length === 0) {
        document.body.classList.remove('no-scroll'); // Reactiva el scroll
    }
}

// Función para cerrar el modal si se hace clic fuera de él
window.onclick = function(event) {
    var modals = document.querySelectorAll('.modal');
    modals.forEach(function(modal) {
        if (event.target === modal) {
            closeModal(modal.id);
        }
    });
};


/* ============================================== */
/* TABS */
/* ============================================== */

const tabs = document.querySelectorAll('.tab');
const contents = document.querySelectorAll('.content');
const indicator = document.querySelector('.active-indicator');

function typeWriterEffect(element, text, speed = 30) {
  element.textContent = '';
  let i = 0;
  function type() {
    if (i < text.length) {
      element.textContent += text.charAt(i);
      i++;
      setTimeout(type, speed);
    }
  }
  type();
}

tabs.forEach((tab, index) => {
  tab.addEventListener('click', () => {
    tabs.forEach(t => t.classList.remove('active'));
    contents.forEach(c => c.classList.remove('active'));

    tab.classList.add('active');
    const content = contents[index];
    content.classList.add('active');

    const text = content.getAttribute('data-text') || '';
    typeWriterEffect(content, text);

    indicator.style.transform = `translateX(${tab.offsetLeft}px)`;
    indicator.style.width = `${tab.offsetWidth}px`;
  });
});

window.addEventListener('load', () => {
  const activeTab = document.querySelector('.tab.active');
  const activeContent = document.querySelector('.content.active');

  indicator.style.transform = `translateX(${activeTab.offsetLeft}px)`;
  indicator.style.width = `${activeTab.offsetWidth}px`;

  const text = activeContent.getAttribute('data-text') || '';
  typeWriterEffect(activeContent, text);
});

/* ============================================== */
/* PARALLAX TEXTO SOLO EN DESKTOP */
/* ============================================== */

document.querySelectorAll('ul.textos li').forEach(item => {
  const span = item.querySelector('span');
  const img = span.querySelector('img');

  // Solo aplica parallax si ancho > 1080px
  if (window.innerWidth > 1080) {
    item.addEventListener('mousemove', e => {
      const rect = item.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;
      const moveX = (rect.width / 2 - x) / 20;
      const moveY = (rect.height / 2 - y) / 20;

      img.style.transform = `translate(${moveX}px, ${moveY}px)`;
    });

    item.addEventListener('mouseleave', () => {
      img.style.transform = `translate(0px, 0px)`;
    });
  } else {
    // En mobile: sin transformaciones
    img.style.transform = 'none';
  }
});

</script>


