<!-- ============================================== -->
<!-- ONE -->
<!-- ============================================== -->

<section>
    <div class="block-box-bg overlay o-50">
        <img class="full-img-abs" src="./images/body/treo/bg_revive.webp" />
        <div class="mw-1440 jc-center ai-center dh-100 med-h-0 med-fd-col-rev g-30 p-30">
            <div class="info w-50 med-w-100 all-tc-0 med-t-c">
                <h2 class="h1">Revive</h2>
                <p class="h3">Wake Sharp Think Limitless</p>
                <p>At the cellular level, Revive supports memory consolidation, healthy neural communication, and protein synthesis—key factors in learning, recall, and mental resilience throughout the day.</p>
                <a href="#" class="btn big c-ter br-50 mt-40 small-mt-20"><?php echo $Btn_buy; ?></a>
            </div>
            <img class="mw-400" src="./images/body/treo/revive.webp" />
        </div>
    </div>
</section>

<section class="c-sec">
    <div class="h-100 of-h rel">
    	<h2 class="abs-text h1 t-c">Wake up your mind,<br>own the day</h2>
        <img class="img-middle" src="./images/body/treo/revive.webp" />

        <ul class="ingredients">
        	<li><span class="v-custom icon icon-1 c-pri br-50 revive"></span>Extract 1</li>
        	<li><span class="v-custom icon icon-2 c-pri br-50 revive"></span>Extract2</li>
        	<li><span class="v-custom icon icon-3 c-pri br-50 revive"></span>Extract3</li>
        	<li><span class="v-custom icon icon-4 c-pri br-50 revive"></span>Extract4</li>
        	<li><span class="v-custom icon icon-5 c-pri br-50 revive"></span>Extract5</li>
        	<li><span class="v-custom icon icon-6 c-pri br-50 revive"></span>Extract6</li>
        </ul>
    </div>
</section>

<section>
	<div class="dh-100 of-h rel all-tc-0">
		<div class="benefits b-1">
			<span class="v-custom icon icon-7 revive i-big"></span>			
			<p>Texto</p>
		</div>
		<div class="benefits b-2">
			<span class="v-custom icon icon-8 revive i-big"></span>
			<p>Texto</p>
		</div>
		<div class="benefits b-3">
			<span class="v-custom icon icon-9 revive i-big"></span>			
			<p>Texto</p>
		</div>
		<div class="benefits b-4">
			<span class="v-custom icon icon-10 revive i-big"></span>		
			<p>Texto</p>
		</div>
        <video class="full-img" src="https://temporal.darevita.com/wp-content/uploads/2025/07/DV-secuencia-1-2.mp4#t=2,41" autoplay loop muted></video>
    </div>
</section>

<section class="c-ter">
	<div class="mw-1280 t-c big">
		<h2 class="h1">One goal, three essentials, unlock your full potential.</h2>
		<a href="#" class="btn big c-pri br-50 mt-40 small-mt-20">Start Now</a>
	</div>
</section>

<script>
document.addEventListener("DOMContentLoaded", () => {
  const sections = document.querySelectorAll("section"); // Todas las secciones
  let isScrolling = false;

  window.addEventListener("wheel", (e) => {
    if (isScrolling) return; // Evita múltiples triggers

    // Detecta dirección
    if (e.deltaY > 0) { 
      // Scroll hacia abajo
      goToNextSection();
    } else {
      // Scroll hacia arriba
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

    // Da tiempo a que termine el scroll antes de permitir otro
    setTimeout(() => { isScrolling = false; }, 800);
  }
});
</script>



