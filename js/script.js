/* ============================================== */
/* LAZY-LOAD */
/* ============================================== */
const observer = lozad();
observer.observe();

/* ============================================== */
/* PRELOADER */
/* ============================================== */

window.addEventListener("load", () => {
  const progress = document.getElementById("progress");
  const data = document.getElementById("data");
  const preloader = document.getElementById("preloader");

  let index = 0;
  let interval = setInterval(() => {
    if (index >= 100) {
      clearInterval(interval);
      setTimeout(() => {
        preloader.classList.add("hidden"); // Activa el fade out con CSS
        setTimeout(() => {
          preloader.style.display = "none"; // Oculta completamente después del fade
      }, 200);
    }, 200);
  } else {
      index++;
      data.innerText = `${index}%`;
      progress.style.background = `conic-gradient(
          #4ea9e6 ${index * 3.6}deg,
           #1F3761 ${index * 3.6}deg
      )`;
  }
}, 15);
});

/* ============================================== */
/* MENU HAMBURGUER */
/* ============================================== */

if (document.documentElement.clientWidth < 1080) {
    $('.hamburguer').click(function () {
        $('.navigation .menu').toggleClass('active');
        $(this).toggleClass("active");
    });

    $('.navigation .menu a').click(function (e) {
        // Si el <a> pertenece a un li con sub-submenú, no cerrar el menú
        if ($(this).closest('li').find('.sub-sub').length) {
            e.preventDefault(); // Evita navegación
            return; // Salimos sin cerrar el menú
        }

        // Si es un link normal, cerrar el menú
        $('.navigation .menu').removeClass('active');
        $('.hamburguer').removeClass("active");
    });

}

/* ============================================== */
/* NAVIGATION                                     */
/* ============================================== */
$(document).ready(function () {
    var sections = $('.anchor');
    var nav = $('nav .navigation');
    var nav_height = nav.outerHeight();

    // Scroll activo para resaltar secciones
    $(window).on('scroll', function () {
        var cur_pos = $(this).scrollTop();

        sections.each(function () {
            var top = $(this).parent().offset().top - nav_height;
            var bottom = top + $(this).parent().outerHeight();

            if (cur_pos >= top && cur_pos <= bottom) {
                nav.find('a').removeClass('active');
                sections.removeClass('active');

                $(this).addClass('active');
                nav.find('a[href="#' + $(this).attr('id') + '"]').addClass('active');
            }
        });
    });

    // Scroll suave para anchors internos
    $('a[href*="#"]:not([href="#"])').click(function () {
        if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
            location.hostname == this.hostname
        ) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                var nav_height = nav.outerHeight();

                $('html, body').stop().animate({
                    scrollTop: target.offset().top - nav_height
                }, 500, 'swing');

                // Cierra submenús al hacer clic en enlaces del menú
                document.querySelector(".lan")?.classList.remove("active");
                document.querySelector(".btn-lan")?.classList.remove("open");
                document.querySelector(".sub")?.classList.remove("active");
                document.querySelector(".btn-sub")?.classList.remove("open");

                return false;
            }
        }
    });
});

/* ============================================== */
/* LANGUAGE + SUBMENU + SUB-SUBMENU                */
/* ============================================== */
document.addEventListener("DOMContentLoaded", function () {
    document.addEventListener("click", function (e) {
        const allMenus = document.querySelectorAll(".lan, .sub, .cus");
        const allButtons = document.querySelectorAll(".btn-lan, .btn-sub, .btn-cus");

        // Detecta si clic fue en algún botón de submenú
        const clickedBtn = e.target.closest(".btn-lan, .btn-sub, .btn-cus");
        const clickedMenu = clickedBtn?.nextElementSibling;

        if (clickedBtn && clickedMenu) {
            e.preventDefault();

            // Cierra todos los demás
            allMenus.forEach(menu => {
                if (menu !== clickedMenu) menu.classList.remove("active");
            });
            allButtons.forEach(btn => {
                if (btn !== clickedBtn) btn.classList.remove("open");
            });

            // Alterna el clic actual
            clickedMenu.classList.toggle("active");
            clickedBtn.classList.toggle("open");
            return;
        }

        // === Click en sub-submenú ===
        const subSubTrigger = e.target.closest(".sub > li");
        const isRealLink = e.target.closest(".sub-sub a");

        if (subSubTrigger && subSubTrigger.querySelector(".sub-sub") && !isRealLink) {
            e.preventDefault();
            subSubTrigger.classList.toggle("open");

            // Cierra otros sub-sub abiertos
            subSubTrigger.parentElement.querySelectorAll("li.open").forEach(li => {
                if (li !== subSubTrigger) li.classList.remove("open");
            });
            return;
        }

        // === Click fuera de cualquier menú ===
        if (!e.target.closest(".lan, .sub, .cus")) {
            allMenus.forEach(menu => menu.classList.remove("active"));
            allButtons.forEach(btn => btn.classList.remove("open"));
            document.querySelectorAll(".sub li.open").forEach(li => li.classList.remove("open"));
        }
    });

    // Cerrar todo con Escape
    document.addEventListener("keydown", function (e) {
        if (e.key === "Escape") {
            document.querySelectorAll(".lan, .sub, .cus").forEach(menu => menu.classList.remove("active"));
            document.querySelectorAll(".btn-lan, .btn-sub, .btn-cus").forEach(btn => btn.classList.remove("open"));
            document.querySelectorAll(".sub li.open").forEach(li => li.classList.remove("open"));
        }
    });
});

/* ============================================== */
/* EFFECT MENU */
/* ============================================== */

$(function () {
    $(window).on("scroll", function () {
        // Solo activa si ancho > 768px
        if ($(window).width() > 768) {
            if ($(window).scrollTop() > 1) {
                $(".navigation").addClass("effect");
            } else {
                $(".navigation").removeClass("effect");
            }
        } else {
            // En móviles asegúrate de quitar la clase si estaba aplicada
            $(".navigation").removeClass("effect");
        }
    });
});

/* ============================================== */
/* INGREDIENTS */
/* ============================================== */











