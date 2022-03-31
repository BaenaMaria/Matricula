/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ (() => {

$(document).ready(function () {
  init();
});

var init = function init() {
  var windowWidth = $(window).width();
  hoverMenu(); // marginTop();

  moveSelect();
  openMenu();
  moveCarrousel();
  moveTransition();
  moveTestimonios();
  moveProfesores();

  $.fn.SnakeParallax = function (a) {
    this.ready(function () {
      $('[snake-parallax="hero"]').css({
        "background-repeat": "no-repeat",
        "background-size": "cover",
        overflow: "hidden",
        width: "100%",
        height: "100vh",
        position: "relative"
      }), $("head").append($("<style>body,html{width:100%;height:100%;}</style>"));
      var e = $.extend({
        backgroundPosition: "center top",
        backgroundImage: ""
      }, a);
      return $('[snake-parallax="hero"]').css({
        backgroundPosition: e.backgroundPosition,
        backgroundImage: e.backgroundImage
      });
    }), this.scroll(function () {
      var a = $(document).scrollTop().valueOf() / 2;
      $('[snake-parallax="hero"]').css({
        height: "calc(100vh - " + Math.round(a) + "px)"
      });
    });
  };

  $(document, window).SnakeParallax({
    backgroundImage: "url('/images/fondo_home.webp')"
  });
};

var moveProfesores = function moveProfesores() {
  $('.--profesorado').on('click', function () {
    var page = $('.--profesorado').attr('data');
    var oldPage = page;
    page = parseInt(page);
    page++;

    if (page > 3) {
      page = 1;
    }

    $('.--profesorado').attr('data', page);
    $('.--profesorado_franja').attr('data', page);
    $('.--profesorado_bloque').attr('data', page);

    if (page == 1) {
      $(".--profesorado_mascara_img_principal").css('left', '0').css('right', '0');
      $(".--profesorado_mascara_img_secundaria").css('left', '0').css('right', '0');
    } else {
      $(".--profesorado_mascara_img_principal[data=\"".concat(oldPage, "\"]")).css('left', '-100%').css('right', '100%');
      $(".--profesorado_mascara_img_secundaria[data=\"".concat(oldPage, "\"]")).css('left', '-100%').css('right', '100%');
    }

    $(".--profesorado_copy[data=\"".concat(oldPage, "\"]")).fadeOut();
    $(".--profesorado_copy[data=\"".concat(page, "\"]")).fadeIn();
    $(".--profesorado_texto[data=\"".concat(oldPage, "\"]")).fadeOut();
    $(".--profesorado_texto[data=\"".concat(page, "\"]")).fadeIn();
    setTimeout(function () {}, 500);
    setTimeout(function () {// $(`.--profesorado_bloque p[data="${oldPage}"]`).fadeOut();
      // $(`.--profesorado_bloque p[data="${page}"]`).fadeIn();
    }, 450);
  });
};

var moveTestimonios = function moveTestimonios() {
  $('.--testimonios__1').on('click', function () {
    var page = $('.--testimonios__1').attr('data');
    var animation1 = $(".--testimonios__1  .--content_testimonios[data=\"".concat(page, "\"]"));
    $(".--testimonios__1 .--content_testimonios[data=\"".concat(page, "\"]")).css('transform', 'translateX(50vw)');
    $(".--testimonios__1 .--content_testimonios[data=\"".concat(page, "\"]")).fadeOut();
    $(".--testimonios__1 .--content_testimonios[data=\"".concat(page, "\"]")).removeClass('--visible');
    setTimeout(function () {
      $(animation1).css('transform', 'translateX(-50vw)');
    }, 500);
    page = parseInt(page);
    page++;

    if (page > 2) {
      page = 1;
    }

    $('.--testimonios__1').attr('data', page);
    $(".--testimonios__1 .--content_testimonios[data=\"".concat(page, "\"]")).fadeIn().css("display", "grid").addClass('--visible').css('transform', 'translateX(0px)');
  });
  $('.--testimonios__2').on('click', function () {
    var page = $('.--testimonios__2').attr('data');
    var animation1 = $(".--testimonios__2  .--content_testimonios[data=\"".concat(page, "\"]"));
    $(".--testimonios__2 .--content_testimonios[data=\"".concat(page, "\"]")).css('transform', 'translateX(-50vw)');
    $(".--testimonios__2 .--content_testimonios[data=\"".concat(page, "\"]")).fadeOut();
    $(".--testimonios__2 .--content_testimonios[data=\"".concat(page, "\"]")).removeClass('--visible');
    setTimeout(function () {
      $(animation1).css('transform', 'translateX(50vw)');
    }, 500);
    page = parseInt(page);
    page++;

    if (page > 2) {
      page = 1;
    }

    $('.--testimonios__2').attr('data', page);
    $(".--testimonios__2 .--content_testimonios[data=\"".concat(page, "\"]")).fadeIn().css("display", "grid").addClass('--visible').css('transform', 'translateX(0px)');
  });
};

var contador = function contador(el, sumatoria) {
  var contentContador = el.html();
  contentContador = parseInt(contentContador);

  var _loop = function _loop(i) {
    setTimeout(function () {
      el.html(i);
    }, 10);
  };

  for (var i = 0; i <= contentContador; i++) {
    _loop(i);
  }
};

var moveTransition = function moveTransition() {
  $('.--transition_niveles').on('click', function () {
    $('.--mascara_transition').addClass('--transition');
    var page = $('.--content_transition').attr('data');
    page = parseInt(page);
    page++;

    if (page > 4) {
      page = 1;
    }

    $('.--content_transition').attr('data', page);
    $('.--progress_transition').attr('data', page);
    setTimeout(function () {
      $('.--b_title_transition h3').removeClass('--active');
      $(".--b_title_transition h3[data=\"".concat(page, "\"]")).addClass('--active');
      $('.--b_copy_transition p').removeClass('--active');
      $(".--b_copy_transition p[data=\"".concat(page, "\"]")).addClass('--active');
    }, 450);
    setTimeout(function () {
      $('.--mascara_transition').removeClass('--transition');
    }, 500);
  });
  var el = document.getElementById('__transition_niveles');
  swipedetect(el, function (swipedir) {
    // swipedir contains either "none", "left", "right", "top", or "down"
    if (swipedir == "left") {
      $('.--mascara_transition').addClass('--transition');
      var page = $('.--content_transition').attr('data');
      page = parseInt(page);
      page++;

      if (page > 4) {
        page = 1;
      }

      $('.--content_transition').attr('data', page);
      $('.--progress_transition').attr('data', page);
      setTimeout(function () {
        $('.--b_title_transition h3').removeClass('--active');
        $(".--b_title_transition h3[data=\"".concat(page, "\"]")).addClass('--active');
        $('.--b_copy_transition p').removeClass('--active');
        $(".--b_copy_transition p[data=\"".concat(page, "\"]")).addClass('--active');
      }, 450);
      setTimeout(function () {
        $('.--mascara_transition').removeClass('--transition');
      }, 500);
    }
  });
};

var moveCarrousel = function moveCarrousel() {
  $('#__container_carrousel').on('click', function () {
    $('.--franja_carrousel').addClass('--transition');
    var page = $('#__page_carrousel span').html();
    page = parseInt(page);
    page++;

    if (page > 4) {
      page = 1;
    }

    $('.--franja_carrousel').attr('data', page);
    $('#__page_carrousel span').html(page);
    setTimeout(function () {
      $('.--b_title_carrousel h3').removeClass('--active');
      $(".--b_title_carrousel h3[data=\"".concat(page, "\"]")).addClass('--active');
      $('.--b_copy_carrousel p').removeClass('--active');
      $(".--b_copy_carrousel p[data=\"".concat(page, "\"]")).addClass('--active');
    }, 450);
    setTimeout(function () {
      $('.--franja_carrousel').removeClass('--transition');
    }, 500);
  });
  var el = document.getElementById('__container_carrousel');
  swipedetect(el, function (swipedir) {
    // swipedir contains either "none", "left", "right", "top", or "down"
    if (swipedir == "left") {
      $('.--franja_carrousel').addClass('--transition');
      var page = $('#__page_carrousel span').html();
      page = parseInt(page);
      page++;

      if (page > 4) {
        page = 1;
      }

      $('.--franja_carrousel').attr('data', page);
      $('#__page_carrousel span').html(page);
      setTimeout(function () {
        $('.--b_title_carrousel h3').removeClass('--active');
        $(".--b_title_carrousel h3[data=\"".concat(page, "\"]")).addClass('--active');
        $('.--b_copy_carrousel p').removeClass('--active');
        $(".--b_copy_carrousel p[data=\"".concat(page, "\"]")).addClass('--active');
      }, 450);
      setTimeout(function () {
        $('.--franja_carrousel').removeClass('--transition');
      }, 500);
    }
  });
};

var moveSelect = function moveSelect() {
  $('.--menu_list_item').on('mouseenter', function () {
    var itemMarcado = $('.--select');
    var dataItemMarcado = itemMarcado.attr('data-order');
    $('.--menu_list_item').removeClass('--select');
    $(this).addClass('--select');
    $('.--menu_list_item').removeClass('--go_left');
    $('.--menu_list_item').removeClass('--go_right');

    if ($(this).attr('data-order') < dataItemMarcado) {
      $(this).addClass('--go_left');
      $(itemMarcado).addClass('--go_right'); // console.log('left')
    } else {
      $(this).addClass('--go_right');
      $(itemMarcado).addClass('--go_left'); // console.log('right');
    }
  });
};

var hoverMenu = function hoverMenu() {
  $('.--menu_list_item_desp').on('mouseenter', function () {
    // console.log('desplegar');
    var attrItemMenu = $(this).attr('data');
    $('.--desplegable').addClass('--desplegado');
    $(".--deplegable_list").removeClass('--visible');
    $(".--deplegable_list[data=\"".concat(attrItemMenu, "\"]")).addClass('--visible');

    if (attrItemMenu == "rrss") {
      $('.--desplegable').addClass('--deplegable_list_rrss');
    } else {
      $('.--desplegable').removeClass('--deplegable_list_rrss');
    }
  });
  $('.--desplegable').on('mouseenter', function () {
    // console.log('desplegar');
    $('.--desplegable').addClass('--desplegado');
  });
  $('.--menu_list_item_desp, .--desplegable').on('mouseleave', function () {
    // console.log('plegar');
    $('.--desplegable').removeClass('--desplegado');
  });
};

var marginTop = function marginTop() {
  var navHeight = $('.--nav_primary').height();
  $('body').css('margin-top', navHeight + 'px');
};

function isTouchDevice() {
  return 'ontouchstart' in window || navigator.maxTouchPoints > 0 || navigator.msMaxTouchPoints > 0;
}

var openMenu = function openMenu() {
  $('.--icon_menu').on('click', function (e) {
    e.preventDefault();
    console.log('open');
    $('.--nav_primary').toggleClass('--open');
    $('.--content_menu').fadeToggle();
    $('.--links[data-select="1"]').toggleClass('--content_menu_visible');
    $('body').toggleClass('--overflow');
  }); // menu display mobile

  $('.--return').on('click', function () {
    var parent = $(this).parent().attr('data-select');
    $('.--open_menu').removeClass('--open_menu');
    $('.--links[data-select="1"]').addClass('--open_menu');
    $('.--links[data-select="1"]').addClass('--content_menu_visible');
  });
  $('.--content_menu_link').on('click', function () {
    var dataLink = $(this).attr('data-link');
    $('.--links[data-select="1"]').removeClass('--content_menu_visible');
    setTimeout(function () {
      $('.--open_menu]').removeClass('--open_menu');
    }, 400);
    $(".--links[data-select=\"".concat(dataLink, "\"]")).addClass('--open_menu');
  });
};

function swipedetect(el, callback) {
  var touchsurface = el,
      swipedir,
      startX,
      startY,
      distX,
      distY,
      threshold = 150,
      //required min distance traveled to be considered swipe
  restraint = 100,
      // maximum distance allowed at the same time in perpendicular direction
  allowedTime = 300,
      // maximum time allowed to travel that distance
  elapsedTime,
      startTime,
      handleswipe = callback || function (swipedir) {};

  touchsurface.addEventListener('touchstart', function (e) {
    var touchobj = e.changedTouches[0];
    swipedir = 'none';
    dist = 0;
    startX = touchobj.pageX;
    startY = touchobj.pageY;
    startTime = new Date().getTime(); // record time when finger first makes contact with surface

    e.preventDefault();
  }, false);
  touchsurface.addEventListener('touchmove', function (e) {
    e.preventDefault(); // prevent scrolling when inside DIV
  }, false);
  touchsurface.addEventListener('touchend', function (e) {
    var touchobj = e.changedTouches[0];
    distX = touchobj.pageX - startX; // get horizontal dist traveled by finger while in contact with surface

    distY = touchobj.pageY - startY; // get vertical dist traveled by finger while in contact with surface

    elapsedTime = new Date().getTime() - startTime; // get time elapsed

    if (elapsedTime <= allowedTime) {
      // first condition for awipe met
      if (Math.abs(distX) >= threshold && Math.abs(distY) <= restraint) {
        // 2nd condition for horizontal swipe met
        swipedir = distX < 0 ? 'left' : 'right'; // if dist traveled is negative, it indicates left swipe
      } else if (Math.abs(distY) >= threshold && Math.abs(distX) <= restraint) {
        // 2nd condition for vertical swipe met
        swipedir = distY < 0 ? 'up' : 'down'; // if dist traveled is negative, it indicates up swipe
      }
    }

    handleswipe(swipedir);
    e.preventDefault();
  }, false);
}

/***/ }),

/***/ "./resources/scss/app.scss":
/*!*********************************!*\
  !*** ./resources/scss/app.scss ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/assets/js/app": 0,
/******/ 			"assets/css/app": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["assets/css/app"], () => (__webpack_require__("./resources/js/app.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["assets/css/app"], () => (__webpack_require__("./resources/scss/app.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;