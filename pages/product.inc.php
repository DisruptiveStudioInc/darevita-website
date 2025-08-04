<!-- ============================================== -->
<!-- ONE -->
<!-- ============================================== -->
<?php 
// ====================
// MAPS PARA PRODUCTOS
// ====================
$Links_map = [
    "revive"      => "usdev.darevita.com",
    "rejuvenate"  => "usdev.darevita.com",
    "restore"     => "usdev.darevita.com"
];

$Links_usa_map = [
    "revive"      => $Shop_usa_revive,
    "rejuvenate"  => $Shop_usa_rejuvenate,
    "restore"     => $Shop_usa_restore
];

$Links_mex_map = [
    "revive"      => $Shop_mex_revive,
    "rejuvenate"  => $Shop_mex_rejuvenate,
    "restore"     => $Shop_mex_restore
];

$Bg_map = [
    "revive"      => "Revive",
    "rejuvenate"  => "Rejuvenate",
    "restore"     => "Restore"
];

$Titulo_map = $Bg_map;

$Subtitulo_map = [
    "revive"      => $Products_title_01,
    "rejuvenate"  => $Products_title_02,
    "restore"     => $Products_title_03
];

$Text_map = [
    "revive"      => $Products_text_01,
    "rejuvenate"  => $Products_text_02,
    "restore"     => $Products_text_03
];

$Ingredients_map = [
    "revive"      => $Ingredients_01,
    "rejuvenate"  => $Ingredients_02,
    "restore"     => $Ingredients_03
];

$Ingredients_list_map = [
    "revive" => [
        $Ingredients_01_01, $Ingredients_01_02, $Ingredients_01_03,
        $Ingredients_01_04, $Ingredients_01_05, $Ingredients_01_06
    ],
    "rejuvenate" => [
        $Ingredients_02_01, $Ingredients_02_02, $Ingredients_02_03,
        $Ingredients_02_04, $Ingredients_02_05, $Ingredients_02_06
    ],
    "restore" => [
        $Ingredients_03_01, $Ingredients_03_02, $Ingredients_03_03,
        $Ingredients_03_04, $Ingredients_03_05, $Ingredients_03_06
    ]
];

$Benefits_list_map = [
    "revive" => [
        $Benefits_01_01, $Benefits_01_02, $Benefits_01_03, $Benefits_01_04
    ],
    "rejuvenate" => [
        $Benefits_02_01, $Benefits_02_02, $Benefits_02_03, $Benefits_02_04
    ],
    "restore" => [
        $Benefits_03_01, $Benefits_03_02, $Benefits_03_03, $Benefits_03_04
    ]
];

$Benefits_sub_map = [
    "revive"      => $Benefits_sub_01,
    "rejuvenate"  => $Benefits_sub_02,
    "restore"     => $Benefits_sub_03
];

// ====================
// ASIGNACIÓN SEGURA
// ====================
$Links       = $Links_map[$id]           ?? "";
$Links_usa   = $Links_usa_map[$id]       ?? "";
$Links_mex   = $Links_mex_map[$id]       ?? "";
$Bg          = $Bg_map[$id]              ?? "";
$Titulo      = $Titulo_map[$id]          ?? "";
$Subtitulo   = $Subtitulo_map[$id]       ?? "";
$Text        = $Text_map[$id]            ?? "";
$Ingredients = $Ingredients_map[$id]     ?? "";
$Ingredients_list = $Ingredients_list_map[$id] ?? [];
$Benefits_Sub = $Benefits_sub_map[$id]   ?? "";
$Benefits_list = $Benefits_list_map[$id] ?? [];

?>

<section>
    <div class="block-box-bg overlay o-40">
        <div class="mw-1440 jc-center ai-center dh-100 small-fd-col-rev g-30 p-30">

            <div class="info w-50 med-w-100 all-tc-0 small-t-c">
                <h1 class="h1"><?php echo $Titulo; ?></h1>
                <p class="h3"><?php echo $Subtitulo; ?></p>
                <p class="small-d-none"><?php echo $Text; ?></p>

                <div class="btns g-10 small-jc-center">
                    <a href="<?php echo $Links_usa; ?>" class="btn c-ter br-50 v-custom my_flags icon-text icon-1" aria-label="Buy in USA"><?php echo $Btn_buy; ?></a>
                    <a href="<?php echo $Links_mex; ?>" class="btn c-ter br-50 v-custom my_flags icon-text icon-2" aria-label="Buy in Mexico"><?php echo $Btn_buy; ?></a>
                </div>
            </div>

            <img class="mw-400 med-w-30 small-w-60 small-mt-40" src="./images/body/treo/<?php echo $id; ?>.webp" alt="<?php echo $Titulo; ?> Product" />
        </div>
        <img class="full-img-abs" src="./images/body/treo/bg_<?php echo $id; ?>.webp" alt="<?php echo $Titulo; ?> background" />
    </div>
</section>

<section class="c-sub <?php echo $id; ?>">
    <div class="h-100 of-h rel small-h-0">

        <div class="ingredients_wrap">
            <h2 class="abs-text h1 t-c"><?php echo $Ingredients; ?></h2>
            <ul class="ingredients">
                <?php foreach ($Ingredients_list as $index => $ingredient): ?>
                    <li>
                        <span class="v-custom icon icon-<?php echo $index+1; ?> c-pri br-50 <?php echo $id; ?>"></span>
                        <?php echo $ingredient; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <img class="img-middle small-d-none" src="./images/body/treo/<?php echo $id; ?>.webp" alt="<?php echo $Titulo; ?> Product" />
    </div>
</section>

<div id='Modal_<?php echo $id; ?>' class='modal modal_product'>
    <div class='modal-content rel' style="padding: 10px;">
    <button type="button" class="v-white c-pri icon icon-close" onclick="closeModal('Modal_<?php echo $id; ?>')"></button>

    <video class="full-img" 
        src="./video/test.webm" 
        autoplay loop muted playsinline
        poster="./images/body/letters/1.webp">
    </video>
    </div>
</div>

<section>
    <div class="h-100 rel all-tc-0 overlay o-50 custom">
        <div class="center">
            <h2 class="h1"><?php echo $Benefits; ?></h2>
            <p><?php echo $Benefits_Sub; ?></p>
            <button type="button" class="btn big c-pri br-50 mt-40 small-mt-20" onclick="openModal('Modal_<?php echo $id; ?>')"><?php echo $Btn_view; ?></button>
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

        <img class="full-img" src="./images/body/subpage/bg_<?php echo $id; ?>.webp" alt="<?php echo $id; ?>">

    </div>
</section>

<section>
	<div class="mw-1280">

		<div class="t-c">
			<h2 class="h2"><?php echo $Satarted_title; ?></h2>
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
			            echo "
			            <li>
				            <div class='text c-{$item[2]}'>
				            	<span class='v-black c-{$item[2]} icon br-5 icon-quote'></span>
				            	<p>{$item[0]}</p>
				            	<p>{$item[1]}</p>
				            </div>
				            <img src='./images/body/banner/0{$counter}.webp' alt='{$item[0]}'/>
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
					<p><?php echo $Satarted_text_03; ?></p>
				</div>
			</div>

		</div>
	</div>
</section>

<section class="c-<?php echo $id; ?>">
	<div class="mw-1280 t-c big">
		<h2 class="h1 med-mt-50"><?php echo $Footer_subpage; ?></h2>
		<a href="<?php echo $Register; ?>" target="_blank" class="btn big c-pri br-50 mt-40 small-mt-20"><?php echo $Btn_start; ?></a>
	</div>
</section>

<script>

/* ============================================== */
/* SECTIONS */
/* ============================================== */

document.addEventListener("DOMContentLoaded", () => {
  const sections = document.querySelectorAll("section");
  let isScrolling = false;

  // Solo activar scroll forzado en pantallas >= 768px
  if (window.innerWidth >= 768) {
    
    window.addEventListener("wheel", (e) => {
      if (isScrolling) return; // Evita múltiples triggers

      const currentIndex = getCurrentSectionIndex();

      // Detecta dirección
      if (e.deltaY > 0) { 
        goToNextSection();
      } else {
        goToPrevSection();
      }
    }, { passive: false });

    function getCurrentSectionIndex() {
      let index = 0;
      let scrollPos = window.scrollY + window.innerHeight / 2;
      sections.forEach((sec, i) => {
        if (scrollPos >= sec.offsetTop) index = i;
      });
      return index;
    }

    function goToNextSection() {
      const currentIndex = getCurrentSectionIndex();
      if (currentIndex < sections.length - 1) {
        scrollToSection(currentIndex + 1);
      }
    }

    function goToPrevSection() {
      const currentIndex = getCurrentSectionIndex();
      if (currentIndex > 0) {
        scrollToSection(currentIndex - 1);
      }
    }

    function scrollToSection(index) {
      isScrolling = true;
      sections[index].scrollIntoView({ behavior: "smooth" });
      setTimeout(() => { isScrolling = false; }, 800);
    }
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



