<!-- ============================================== -->
<!-- ONE -->
<!-- ============================================== -->
<?php

$Titulo_revi = "revive";
$Titulo_reju = "rejuvenate";
$Titulo_rest = "restore";
$Titulo_reve = "revenuez";

$Bg_map = [
    $Titulo_revi  => "Revive",
    $Titulo_reju  => "Rejuvenate",
    $Titulo_rest  => "Restore",
    $Titulo_reve  => "Revenuez"
];

$Titulo_map = $Bg_map;

$Links_usa_map = [
    $Titulo_revi  => $Shop_usa_revive,
    $Titulo_reju  => $Shop_usa_rejuvenate,
    $Titulo_rest  => $Shop_usa_restore,
    $Titulo_reve  => $Shop_usa_revenuez
];

$Links_mex_map = [
    $Titulo_revi  => $Shop_mex_revive,
    $Titulo_reju  => $Shop_mex_rejuvenate,
    $Titulo_rest  => $Shop_mex_restore,
    $Titulo_reve  => $Shop_mex_revenuez
];

$Links_can_map = [
    $Titulo_revi  => $Shop_can_revive,
    $Titulo_reju  => $Shop_can_rejuvenate,
    $Titulo_rest  => $Shop_can_restore,
    $Titulo_reve  => $Shop_can_revenuez
];

$Subtitulo_map = [
    $Titulo_revi  => $Products_title_01,
    $Titulo_reju  => $Products_title_02,
    $Titulo_rest  => $Products_title_03,
    $Titulo_reve  => $Products_title_04
];

$Text_map = [
    $Titulo_revi  => $Products_text_01,
    $Titulo_reju  => $Products_text_02,
    $Titulo_rest  => $Products_text_03,
    $Titulo_reve  => $Products_text_04
];

$Ingredients_map = [
    $Titulo_revi  => $Ingredients_01,
    $Titulo_reju  => $Ingredients_02,
    $Titulo_rest  => $Ingredients_03,
    $Titulo_reve  => $Ingredients_04
];

$Ingredients_list_map = [
    $Titulo_revi => [
        $Ingredients_01_01, $Ingredients_01_02, $Ingredients_01_03,
        $Ingredients_01_04, $Ingredients_01_05, $Ingredients_01_06
    ],
    $Titulo_reju => [
        $Ingredients_02_01, $Ingredients_02_02, $Ingredients_02_03,
        $Ingredients_02_04, $Ingredients_02_05, $Ingredients_02_06
    ],
    $Titulo_rest => [
        $Ingredients_03_01, $Ingredients_03_02, $Ingredients_03_03,
        $Ingredients_03_04, $Ingredients_03_05, $Ingredients_03_06
    ],
    $Titulo_reve => [
        $Ingredients_04_01, $Ingredients_04_02, $Ingredients_04_03,
        $Ingredients_04_04, $Ingredients_04_05, $Ingredients_04_06
    ]
];

$Benefits_list_map = [
    $Titulo_revi => [
        $Benefits_01_01, $Benefits_01_02, $Benefits_01_03, $Benefits_01_04
    ],
    $Titulo_reju => [
        $Benefits_02_01, $Benefits_02_02, $Benefits_02_03, $Benefits_02_04
    ],
    $Titulo_rest => [
        $Benefits_03_01, $Benefits_03_02, $Benefits_03_03, $Benefits_03_04
    ],
    $Titulo_reve => [
        $Benefits_04_01, $Benefits_04_02, $Benefits_04_03, $Benefits_04_04
    ]
];

$Benefits_sub_map = [
    $Titulo_revi  => $Benefits_sub_01,
    $Titulo_reju  => $Benefits_sub_02,
    $Titulo_rest  => $Benefits_sub_03,
    $Titulo_reve  => $Benefits_sub_04
];

$Key_list_map = [
    $Titulo_revi => [
        $Key_01_01, $Key_01_02, $Key_01_03, $Key_01_04, $Key_01_05, $Key_01_06
    ],
    $Titulo_reju => [
        $Key_02_01, $Key_02_02, $Key_02_03, $Key_02_04, $Key_02_05
    ],
    $Titulo_rest => [
        $Key_03_01, $Key_03_02, $Key_03_03, $Key_03_04, $Key_03_05
    ]
];

// ====================
// ASIGNACIÓN SEGURA
// ====================

$Links_usa        = $Links_usa_map[$id]       ?? "";
$Links_mex        = $Links_mex_map[$id]       ?? "";
$Links_can        = $Links_can_map[$id]       ?? "";
$Bg               = $Bg_map[$id]              ?? "";
$Titulo           = $Titulo_map[$id]          ?? "";
$Subtitulo        = $Subtitulo_map[$id]       ?? "";
$Text             = $Text_map[$id]            ?? "";
$Ingredients      = $Ingredients_map[$id]     ?? "";
$Ingredients_list = $Ingredients_list_map[$id]?? [];
$Benefits_Sub     = $Benefits_sub_map[$id]    ?? "";
$Benefits_list    = $Benefits_list_map[$id]   ?? [];
$Key_list         = $Key_list_map[$id]        ?? "";

?>

<?php
    $Condicion_link_esp =($id === $Titulo_reve)? $Btn_buy_esp:$Btn_buy;
    $Condicion_link_eng =($id === $Titulo_reve)? $Btn_buy_eng:$Btn_buy;
?>

<section>
    <div class="block-box-bg overlay o-40">
        <div class="mw-1440 jc-center ai-center dh-100 small-fd-col-rev g-30 p-30">

            <div class="info w-50 med-w-100 all-tc-0 small-t-c">
                <h1 class="h1"><?php echo $Titulo; ?></h1>
                <p class="h3"><?php echo $Subtitulo; ?></p>
                <p class="small-d-none"><?php echo $Text; ?></p>

                <div class="btns g-10 small-jc-center">
                    <a href="<?php echo $Links_usa; ?>" class="btn c-ter br-50 v-custom my_flags icon-text icon-1" aria-label="Buy in USA"><?php echo $Condicion_link_eng; ?></a>
                    <a href="<?php echo $Links_mex; ?>" class="btn c-ter br-50 v-custom my_flags icon-text icon-2" aria-label="Buy in Mexico"><?php echo $Condicion_link_esp; ?></a>
                    <a href="<?php echo $Links_can; ?>" class="btn c-ter br-50 v-custom my_flags icon-text icon-8" aria-label="Buy in Canada"><?php echo $Condicion_link_eng; ?></a>
                </div>
            </div>

            <img class="mw-400 med-w-30 small-w-60 small-mt-40" src="./images/body/treo/<?php echo $id; ?>.webp" alt="<?php echo $Titulo; ?> Product" />
        </div>
        <img class="full-img-abs" src="./images/body/treo/bg_<?php echo $id; ?>.webp" alt="<?php echo $Titulo; ?> background" />
    </div>
</section>

<section class="c-sub <?php echo $id; ?>">
    <div class="h-100 of-h rel small-h-0">

        <img class="img-middle <?= $id === $Titulo_reve ? $id : ''; ?> small-d-none" src="./images/body/treo/<?php echo $id; ?>.webp" alt="<?php echo $Titulo; ?> Product" loading="lazy"/>

        <div class="ingredients_wrap">
            <h2 class="abs-text h1 t-c"><?php echo $Ingredients; ?></h2>
            <ul class="ingredients">
                <?php foreach ($Ingredients_list as $index => $ingredient): ?>
                    <li>
                        <span class="v-custom icon icon-<?php echo $index+1; ?> c-<?php echo $id; ?> br-50 <?php echo $id; ?>"></span>
                        <?php echo $ingredient; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

    </div>
</section>

<div id='Modal_<?php echo $id; ?>' class='modal modal_product'>
    <div class='modal-content rel' style="padding: 10px;">
    <button type="button" class="v-white c-pri icon icon-close" onclick="closeModal('Modal_<?php echo $id; ?>')"></button>

    <video class="full-img"
        src="./video/video.webm"
        autoplay loop muted playsinline
        poster="./images/body/letters/1.webp">
    </video>
    </div>
</div>

<section>
    <div class="h-100 rel all-tc-0 overlay o-50 custom">
        <div class="center">
            <h2 class="h1"><?php echo $Condicion_text_03 =($id === $Titulo_reve)? $Reve_Benefits:$Benefits; ?></h2>
            <p><?php echo $Benefits_Sub; ?></p>
            <!--<button type="button" class="btn big c-pri br-50 mt-40 small-mt-20" onclick="openModal('Modal_<?php echo $id; ?>')"><?php echo $Btn_view; ?></button>-->
        </div>

        <ul class="benefits-list small-d-none">
            <?php foreach ($Benefits_list as $index => $benefit): ?>
                <?php if (!empty($benefit)): // Evita imprimir vacíos ?>
                    <li class="benefits b-<?php echo $index + 1; ?>">
                        <span class="v-custom icon icon-<?php echo 7 + $index; ?> <?php echo $id; ?> i-big"></span>
                        <p><?php echo $benefit; ?></p>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>

        <img class="full-img" src="./images/body/subpage/bg_<?php echo $id; ?>.webp" alt="<?php echo $id; ?>" loading="lazy">

    </div>
</section>

<section class="c-sub <?php echo $id; ?>" style="display:<?php echo $Condicion =($id === $Titulo_reve)? 'none':'block'; ?>;">
    <div class="mw-1080 zoom-container">
        <div class="jc-between g-50 small-g-30 small-fd-col ai-center">
            <div id="big-image" class="<?php echo $id; ?>"></div>
            <div class="img-zoom w-100">
              <img id="small-image" class="full-img"
                   src="./images/body/treo/<?php echo $id; ?>_atras.webp"
                   alt="<?php echo $Titulo; ?> Product" loading="lazy" />
              <div id="lens"></div>
            </div>
            <div class="w-100">
                <h2 class="h3"><?php echo $Key_Title; ?></h2>
                <ul class="menu-list icon-check">

            <?php foreach ($Key_list as $index => $key): ?>
                <?php if (!empty($key)): // Evita imprimir vacíos ?>
                    <li><?php echo $key; ?></li>
                <?php endif; ?>
            <?php endforeach; ?>

                </ul>
            </div>
        </div>
    </div>
</section>

<section>
	<div class="mw-1280">

		<div class="t-c">
			<h2 class="h2"><?php echo $Condicion_title =($id === $Titulo_reve)? $Reve_title:$Satarted_title; ?></h2>
			<p class="h4"><?php echo $Satarted_sub; ?></p>
		</div>

		<div class="jc-center g-20 ai-center small-fd-col">

			<div class="banner">
				<ul>
					<?php
			        $Service = array(
			            array('Designed to support your body’s natural rhythms—cognitive, physical, and hormonal—24 hours a day.','Sofía R.',$id),
			            array('I can focus for hours without getting burned out. Revive works.','Leo M.',$id),
			            array('In one week, my memory and mental energy improved','Andrea T.',$id)
			        );

			        $counter = 1; // Inicia el contador en 1

			        foreach ($Service as $item){
                $imgBanner = $id === $Titulo_reve ? "{$Titulo_reve}-0{$counter}" : "0{$counter}";
                echo "
                <li>
                  <!--
                  <div class='text c-{$item[2]}'>
                    <span class='v-black c-{$item[2]} icon br-5 icon-quote'></span>
                    <p>{$item[0]}</p>
                    <p>{$item[1]}</p>
                  </div>
                  -->
                  <img src='./images/body/banner/{$imgBanner}.webp' alt='{$item[0]}'/>
                </li>
                ";
                $counter++;
			        }
			        ?>
				</ul>
			</div>

			<!-- Textos -->
			<div class="text_spirit <?php echo $id; ?>">
				<div>
					<p class="h3"><?php echo $Satarted_title_01; ?></p>
					<p><?php echo $Satarted_text_01; ?></p>
					<ul class="menu-list icon-check">
						<li><?php echo $Satarted_list_01; ?></li>
						<li><?php echo $Satarted_list_02; ?></li>
						<li><?php echo $Satarted_list_03; ?></li>
					</ul>
				</div>

				<div>
					<p class="h3"><?php echo $Satarted_title_02; ?></p>
					<p><?php echo $Satarted_text_02; ?></p>
				</div>

				<div>
					<p class="h3"><?php echo $Satarted_title_03; ?></p>
					<p><?php echo $Condicion_text_03 =($id === $Titulo_reve)? $Reve_text_03:$Satarted_text_03; ?></p>
				</div>
			</div>

		</div>
	</div>
</section>

<section class="c-<?php echo $id; ?>">
	<div class="mw-1280 t-c big">
		<h2 class="h1 med-mt-50 <?php echo $Condicion_text_03 =($id === $Titulo_reve)? "tc-0":""; ?>"><?php echo $Condicion_text_03 =($id === $Titulo_reve)? $Reve_Footer_subpage:$Footer_subpage; ?></h2>
		<a href="<?php echo $Register; ?>" target="_blank" class="btn big br-50 mt-40 small-mt-20 <?php echo $Condicion_text_03 =($id === $Titulo_reve)? "c-sec":"c-pri"; ?>"><?php echo $Btn_start; ?></a>
	</div>
</section>

<section>
    <div class="mw-1080 t-c p-20 p-tiny">
        <h4><?php echo $Disclaimer_title; ?></h4>
        <p><?php echo $Disclaimer_text; ?></p>
    </div>
</section>

<script>

/* ============================================== */
/* ZOOM */
/* ============================================== */

const lens = document.getElementById('lens');
const smallImg = document.getElementById('small-image');
const bigImg = document.getElementById('big-image');

// Asigna la imagen grande como fondo del contenedor
const bigImageURL = "./images/body/treo/png/<?php echo $id; ?>_atras.png";
bigImg.style.backgroundImage = `url('${bigImageURL}')`;

let rafId;

// Mostrar/Ocultar
smallImg.addEventListener('mouseenter', () => {
  lens.style.display = 'block';
  bigImg.classList.add('show');
});
smallImg.addEventListener('mouseleave', () => {
  lens.style.display = 'none';
  bigImg.classList.remove('show');
});

// Movimiento del lente
smallImg.addEventListener('mousemove', e => {
  if (rafId) cancelAnimationFrame(rafId);
  rafId = requestAnimationFrame(() => moveLens(e));
});

// Soporte táctil
smallImg.addEventListener('touchstart', () => {
  lens.style.display = 'block';
  bigImg.classList.add('show');
});
smallImg.addEventListener('touchend', () => {
  lens.style.display = 'none';
  bigImg.classList.remove('show');
});
smallImg.addEventListener('touchmove', e => {
  if (rafId) cancelAnimationFrame(rafId);
  rafId = requestAnimationFrame(() => moveLens(e.touches[0]));
});

function moveLens(e) {
  const rect = smallImg.getBoundingClientRect();
  const lensW = lens.offsetWidth;
  const lensH = lens.offsetHeight;

  let x = e.clientX - rect.left - lensW / 2;
  let y = e.clientY - rect.top - lensH / 2;

  const maxX = rect.width - lensW;
  const maxY = rect.height - lensH;

  // Limitar el movimiento y redondear para evitar saltos
  x = Math.round(Math.max(0, Math.min(x, maxX)));
  y = Math.round(Math.max(0, Math.min(y, maxY)));

  lens.style.left = x + 'px';
  lens.style.top = y + 'px';

  // Calcular escala entre imágenes
  const scaleX = bigImg.offsetWidth / lensW;
  const scaleY = bigImg.offsetHeight / lensH;

  bigImg.style.backgroundSize =
    `${smallImg.width * scaleX}px ${smallImg.height * scaleY}px`;
  bigImg.style.backgroundPosition =
    `-${x * scaleX}px -${y * scaleY}px`;
}


/* ============================================== */
/* SCROLL-MAGIC */
/* ============================================== */

document.addEventListener("DOMContentLoaded", function() {

    // Solo ejecutar si ancho >= 1080px
    if (window.innerWidth >= 1080) {

        // Función para cargar scripts dinámicamente
        function loadScript(src) {
            return new Promise((resolve, reject) => {
                const script = document.createElement('script');
                script.src = src;
                script.onload = resolve;
                script.onerror = reject;
                document.head.appendChild(script);
            });
        }

        // Cargar librerías en orden
        Promise.all([
            loadScript("https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"),
            loadScript("https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.3/ScrollMagic.min.js")
        ])
        .then(() => Promise.all([
            loadScript("https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.3/plugins/animation.gsap.min.js"),
            loadScript("https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js")
        ]))
        .then(() => {

            // ====== Aquí va TODO tu código ScrollMagic ======
            var controller = new ScrollMagic.Controller();
            var animationSpeed = 0.75;
            var animationLinear = Power3.easeInOut;
            var animationIn = Expo.easeIn;

            $('.ingredients_wrap').each(function() {
                var ingredientsElement = this.querySelector('.ingredients');

                if (ingredientsElement) {
                    var scene = new ScrollMagic.Scene({
                        triggerElement: this,
                        triggerHook: 0.2,
                        duration: "80%"
                    })
                    .setClassToggle(ingredientsElement, 'fade-in')
                    //.addIndicators()
                    .addTo(controller);
                }
            });

        });

    }

});


/* ============================================== */
/* BANNER */
/* ============================================== */

document.addEventListener("DOMContentLoaded", () => {
  const slides = document.querySelectorAll(".banner li");
  let current = 0;
  let interval;

  function showSlide(index) {
    slides.forEach((slide, i) => {
      slide.classList.remove("active", "fade-out");
      if (i === index) slide.classList.add("active");
    });
  }

  function nextSlide() {
    slides[current].classList.add("fade-out"); // Fade-out texto antes de salir
    setTimeout(() => {
      current = (current + 1) % slides.length;
      showSlide(current);
    }, 600);
  }

  function startSlider() {
    interval = setInterval(nextSlide, 4000); // cada 4s
  }

  function stopSlider() {
    clearInterval(interval);
  }

  // Inicialización
  showSlide(current);
  startSlider();

  // Detener al hacer hover
  const banner = document.querySelector(".banner");
  banner.addEventListener("mouseenter", stopSlider);
  banner.addEventListener("mouseleave", startSlider);
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

</script>



