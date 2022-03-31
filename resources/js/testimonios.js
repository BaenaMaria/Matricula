
$(document).ready(function(){
    init();

});

const init = () => {
    moveTestimonios();
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
  

