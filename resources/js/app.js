
$(document).ready(function(){
    init();

});

const init = () => {
    const windowWidth = $(window).width();
    hoverMenu();
    // marginTop();
    moveSelect();
    openMenu();
    moveCarrousel();
    moveTransition();
    moveTestimonios();
    moveProfesores();

$.fn.SnakeParallax=function(a){this.ready(function(){$('[snake-parallax="hero"]').css({"background-repeat":"no-repeat","background-size":"cover",overflow:"hidden",width:"100%",height:"100vh",position:"relative"}),$("head").append($("<style>body,html{width:100%;height:100%;}</style>"));var e=$.extend({backgroundPosition:"center top",backgroundImage:""},a);return $('[snake-parallax="hero"]').css({backgroundPosition:e.backgroundPosition,backgroundImage:e.backgroundImage})}),this.scroll(function(){var a=$(document).scrollTop().valueOf()/2;$('[snake-parallax="hero"]').css({height:"calc(100vh - "+Math.round(a)+"px)"})})};
$(document, window).SnakeParallax({
    backgroundImage:"url('/images/fondo_home.webp')"
  });
}


const moveProfesores = function(){
    $('.--profesorado').on('click', function(){
        var page = $('.--profesorado').attr('data');
        var oldPage = page;
        page = parseInt(page);
        page++;
        if(page > 3){
            page = 1;
        }
        $('.--profesorado').attr('data', page);
        $('.--profesorado_franja').attr('data', page);
        $('.--profesorado_bloque').attr('data', page);
        if(page == 1){
            $(`.--profesorado_mascara_img_principal`).css('left', '0').css('right', '0');
            $(`.--profesorado_mascara_img_secundaria`).css('left', '0').css('right', '0');
        }else{
            $(`.--profesorado_mascara_img_principal[data="${oldPage}"]`).css('left', '-100%').css('right', '100%');
            $(`.--profesorado_mascara_img_secundaria[data="${oldPage}"]`).css('left', '-100%').css('right', '100%');
        }
        $(`.--profesorado_copy[data="${oldPage}"]`).fadeOut();
        $(`.--profesorado_copy[data="${page}"]`).fadeIn();
        $(`.--profesorado_texto[data="${oldPage}"]`).fadeOut();
        $(`.--profesorado_texto[data="${page}"]`).fadeIn();

        setTimeout(function(){
            
        }, 500);
        setTimeout(function(){
            // $(`.--profesorado_bloque p[data="${oldPage}"]`).fadeOut();
            // $(`.--profesorado_bloque p[data="${page}"]`).fadeIn();
           
        }, 450);
    });
}


const moveTestimonios = function(){
    $('.--testimonios__1').on('click', function(){
        var page = $('.--testimonios__1').attr('data');
        var animation1 = $(`.--testimonios__1  .--content_testimonios[data="${page}"]`);
        $(`.--testimonios__1 .--content_testimonios[data="${page}"]`).css('transform', 'translateX(50vw)');
        $(`.--testimonios__1 .--content_testimonios[data="${page}"]`).fadeOut();
        $(`.--testimonios__1 .--content_testimonios[data="${page}"]`).removeClass('--visible');
        setTimeout(() => {
            $(animation1).css('transform', 'translateX(-50vw)');
        }, 500);
        page = parseInt(page);
        page++;
        if(page > 2){
            page = 1;
        }
        $('.--testimonios__1').attr('data', page);
        $(`.--testimonios__1 .--content_testimonios[data="${page}"]`).fadeIn().css("display", "grid").addClass('--visible').css('transform', 'translateX(0px)');
    });
    $('.--testimonios__2').on('click', function(){
        var page = $('.--testimonios__2').attr('data');
        var animation1 = $(`.--testimonios__2  .--content_testimonios[data="${page}"]`);
        $(`.--testimonios__2 .--content_testimonios[data="${page}"]`).css('transform', 'translateX(-50vw)');
        $(`.--testimonios__2 .--content_testimonios[data="${page}"]`).fadeOut();
        $(`.--testimonios__2 .--content_testimonios[data="${page}"]`).removeClass('--visible');
        setTimeout(() => {
            $(animation1).css('transform', 'translateX(50vw)');
        }, 500);
        page = parseInt(page);
        page++;
        if(page > 2){
            page = 1;
        }
        $('.--testimonios__2').attr('data', page);
        $(`.--testimonios__2 .--content_testimonios[data="${page}"]`).fadeIn().css("display", "grid").addClass('--visible').css('transform', 'translateX(0px)');
    });
}

const contador = function(el, sumatoria){
    var contentContador = el.html();
    contentContador = parseInt(contentContador);
    for (let i = 0; i <= contentContador; i ++) {
        setTimeout(() => {
            el.html(i);
        }, 10);
    }
}

const moveTransition = function(){
    $('.--transition_niveles').on('click', function(){
        $('.--mascara_transition').addClass('--transition');
        var page = $('.--content_transition').attr('data');
        page = parseInt(page);
        page++;
        if(page > 4){
            page = 1;
        }
        $('.--content_transition').attr('data', page);
        $('.--progress_transition').attr('data', page);
        setTimeout(function(){
            $('.--b_title_transition h3').removeClass('--active');
            $(`.--b_title_transition h3[data="${page}"]`).addClass('--active');
            $('.--b_copy_transition p').removeClass('--active');
            $(`.--b_copy_transition p[data="${page}"]`).addClass('--active');
        }, 450);
        setTimeout(function(){
            $('.--mascara_transition').removeClass('--transition');
        }, 500);
    });
    var el = document.getElementById('__transition_niveles');
    swipedetect(el, function(swipedir){
            // swipedir contains either "none", "left", "right", "top", or "down"
           if(swipedir == "left"){
            $('.--mascara_transition').addClass('--transition');
            var page = $('.--content_transition').attr('data');
            page = parseInt(page);
            page++;
            if(page > 4){
                page = 1;
            }
            $('.--content_transition').attr('data', page);
            $('.--progress_transition').attr('data', page);
            setTimeout(function(){
                $('.--b_title_transition h3').removeClass('--active');
            $(`.--b_title_transition h3[data="${page}"]`).addClass('--active');
            $('.--b_copy_transition p').removeClass('--active');
            $(`.--b_copy_transition p[data="${page}"]`).addClass('--active');
            }, 450);
            setTimeout(function(){
                $('.--mascara_transition').removeClass('--transition');
            }, 500);
           }
        });
}

const moveCarrousel = function(){
    $('#__container_carrousel').on('click', function(){
        $('.--franja_carrousel').addClass('--transition');
        var page = $('#__page_carrousel span').html();
        page = parseInt(page);
        page++;
        if(page > 4){
            page = 1;
        }
        $('.--franja_carrousel').attr('data', page);
        $('#__page_carrousel span').html(page);
        setTimeout(function(){
            $('.--b_title_carrousel h3').removeClass('--active');
            $(`.--b_title_carrousel h3[data="${page}"]`).addClass('--active');
            $('.--b_copy_carrousel p').removeClass('--active');
            $(`.--b_copy_carrousel p[data="${page}"]`).addClass('--active');
        }, 450);
        setTimeout(function(){
            $('.--franja_carrousel').removeClass('--transition');
        }, 500);
    });
    var el = document.getElementById('__container_carrousel');
    swipedetect(el, function(swipedir){
            // swipedir contains either "none", "left", "right", "top", or "down"
           if(swipedir == "left"){
            $('.--franja_carrousel').addClass('--transition');
            var page = $('#__page_carrousel span').html();
            page = parseInt(page);
            page++;
            if(page > 4){
                page = 1;
            }
            $('.--franja_carrousel').attr('data', page);
            $('#__page_carrousel span').html(page);
            setTimeout(function(){
                $('.--b_title_carrousel h3').removeClass('--active');
                $(`.--b_title_carrousel h3[data="${page}"]`).addClass('--active');
                $('.--b_copy_carrousel p').removeClass('--active');
                $(`.--b_copy_carrousel p[data="${page}"]`).addClass('--active');
            }, 450);
            setTimeout(function(){
                $('.--franja_carrousel').removeClass('--transition');
            }, 500);
           }
        });
}


const moveSelect = function(){
    $('.--menu_list_item').on('mouseenter', function(){
        let itemMarcado = $('.--select');
        let dataItemMarcado = itemMarcado.attr('data-order');
        $('.--menu_list_item').removeClass('--select');
        $(this).addClass('--select');
        $('.--menu_list_item').removeClass('--go_left');
        $('.--menu_list_item').removeClass('--go_right');
        if($(this).attr('data-order') < dataItemMarcado){
            $(this).addClass('--go_left');
            $(itemMarcado).addClass('--go_right');
            // console.log('left')
        }else{
            $(this).addClass('--go_right');
            $(itemMarcado).addClass('--go_left');
            // console.log('right');
        }
    });
}

const hoverMenu = function(){
        $('.--menu_list_item_desp').on('mouseenter', function(){
            // console.log('desplegar');
            let attrItemMenu = $(this).attr('data');
            $('.--desplegable').addClass('--desplegado');
            $(`.--deplegable_list`).removeClass('--visible');
            $(`.--deplegable_list[data="${attrItemMenu}"]`).addClass('--visible');
            if(attrItemMenu == "rrss"){
                $('.--desplegable').addClass('--deplegable_list_rrss');
            }else{
                $('.--desplegable').removeClass('--deplegable_list_rrss');
            }
        });
        $('.--desplegable').on('mouseenter', function(){
            // console.log('desplegar');
            $('.--desplegable').addClass('--desplegado');
        });
        $('.--menu_list_item_desp, .--desplegable').on('mouseleave', function(){
            // console.log('plegar');
    
            $('.--desplegable').removeClass('--desplegado');
        });
}

const marginTop = () => {
    let navHeight = $('.--nav_primary').height();
    $('body').css('margin-top', navHeight+'px');
}


function isTouchDevice() {
    return (('ontouchstart' in window) ||
       (navigator.maxTouchPoints > 0) ||
       (navigator.msMaxTouchPoints > 0));
  }

const openMenu = function(){
    $('.--icon_menu').on('click', function(e){
        e.preventDefault();
        console.log('open');
        $('.--nav_primary').toggleClass('--open');
        $('.--content_menu').fadeToggle();
        $('.--links[data-select="1"]').toggleClass('--content_menu_visible');
        $('body').toggleClass('--overflow');
      });

// menu display mobile
$('.--return').on('click', function(){
    let parent = $(this).parent().attr('data-select');
          $('.--open_menu').removeClass('--open_menu');
          $('.--links[data-select="1"]').addClass('--open_menu');
          $('.--links[data-select="1"]').addClass('--content_menu_visible');
  });
  $('.--content_menu_link').on('click', function(){
    let dataLink = $(this).attr('data-link');
    $('.--links[data-select="1"]').removeClass('--content_menu_visible');
    setTimeout(function(){
        $('.--open_menu]').removeClass('--open_menu');
    }, 400)
    $(`.--links[data-select="${dataLink}"]`).addClass('--open_menu');
  });
}

function swipedetect(el, callback){
  
    var touchsurface = el,
    swipedir,
    startX,
    startY,
    distX,
    distY,
    threshold = 150, //required min distance traveled to be considered swipe
    restraint = 100, // maximum distance allowed at the same time in perpendicular direction
    allowedTime = 300, // maximum time allowed to travel that distance
    elapsedTime,
    startTime,
    handleswipe = callback || function(swipedir){}
  
    touchsurface.addEventListener('touchstart', function(e){
        var touchobj = e.changedTouches[0]
        swipedir = 'none'
        dist = 0
        startX = touchobj.pageX
        startY = touchobj.pageY
        startTime = new Date().getTime() // record time when finger first makes contact with surface
        e.preventDefault()
    }, false)
  
    touchsurface.addEventListener('touchmove', function(e){
        e.preventDefault() // prevent scrolling when inside DIV
    }, false)
  
    touchsurface.addEventListener('touchend', function(e){
        var touchobj = e.changedTouches[0]
        distX = touchobj.pageX - startX // get horizontal dist traveled by finger while in contact with surface
        distY = touchobj.pageY - startY // get vertical dist traveled by finger while in contact with surface
        elapsedTime = new Date().getTime() - startTime // get time elapsed
        if (elapsedTime <= allowedTime){ // first condition for awipe met
            if (Math.abs(distX) >= threshold && Math.abs(distY) <= restraint){ // 2nd condition for horizontal swipe met
                swipedir = (distX < 0)? 'left' : 'right' // if dist traveled is negative, it indicates left swipe
            }
            else if (Math.abs(distY) >= threshold && Math.abs(distX) <= restraint){ // 2nd condition for vertical swipe met
                swipedir = (distY < 0)? 'up' : 'down' // if dist traveled is negative, it indicates up swipe
            }
        }
        handleswipe(swipedir)
        e.preventDefault()
    }, false)
}
  

