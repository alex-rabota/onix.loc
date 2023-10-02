//Btn slide icon
$(".slick-dots li button").addClass("fa");

//Count Slide
let currentSlide = $('#work-slider').slick('slickCurrentSlide') + 1;
let countSlide = $("#work-slider").slick("getSlick").slideCount;

$(".current-slide").text(currentSlide);
$(".count-slide").text(countSlide);

$("#work-slider").on("afterChange", function(event, slick, currentSlide, nextSlide){
    $(".current-slide").text(currentSlide + 1);
});

let currentSlideTesti = $('#testimonals-slider').slick('slickCurrentSlide') + 1;
let countSlideTesti = $("#testimonals-slider").slick("getSlick").slideCount;

$(".current-slide-testi").text(currentSlideTesti);
$(".count-slide-testi").text(countSlideTesti);

$("#testimonals-slider").on("afterChange", function(event, slick, currentSlide, nextSlide){
    $(".current-slide-testi").text(currentSlide + 1);
});

//Modal
$(document).on('click', '[data-modal-id]', function(e) {
    let modalLocation = $(this).attr('data-modal-id');
    $('#' + modalLocation).removeClass("modal-none");
    $('#' + modalLocation).removeClass("modalFadeOut");
    $(".modal-window-msg").addClass("modal-window-visible");
    $(".modal-window-msg").removeClass("modal-window-hidden");
    if ($(window).width() >= 768) {
        $("body").css({
            "overflow": "hidden",
            "padding-right": "17px",
        });
    }
    return false;
});

function modalClose(than) {
    if(than) {
        than.addClass("modalFadeOut");
    }
    setTimeout(function() {
        $(".modal-window-call").addClass("modal-none");
        if ($(window).width() >= 768) {
            $("body").css({
                "overflow": "auto",
                "padding-right": 0,
            });
        }
    }, 500);
    $(".modal-window-msg").removeClass("modal-window-visible");
    $(".modal-window-msg").addClass("modal-window-hidden");
    if($(".menu-btn").hasClass("active")) {
        $(".menu-btn").toggleClass("active");
        $(".ul-menu").toggleClass("ul-menu-visible");
    }

}

$(".modal-window-call").click(function(){
    modalClose($(this));
});

$(".modal-window-close").click(function(){
    modalClose();
});

$(".modal-window-msg").click(function(){
    event.stopPropagation();
});

//Menu btn
$(".menu-btn").click(function() {
    if($(this).hasClass("active")) {
        setTimeout(function() {
            $(".modal-window-call").addClass("modal-none");
        }, 500);
        $('#modal-window-menu').addClass("modalFadeOut");
        $(".ul-menu").toggleClass("ul-menu-visible");
    } else {
        $('#modal-window-menu').removeClass("modal-none");
        $('#modal-window-menu').removeClass("modalFadeOut");
        $(".ul-menu").toggleClass("ul-menu-visible");
    }
    $(this).toggleClass("active");
});

//Agree
$('.skibidiAgree').click(function(event) {
    /* Act on the event */
    if(event.target.tagName == "A"){
        return;
    }
    let Chekbox = $(this).children('.skibidiChekboxAgree'),
        Button = $(this).closest('form').find('.skibidi-form-submit');
    if(Chekbox.hasClass('checked')) {
        Button.fadeOut(0,function() {
            $(this).addClass('hidden').css({display: 'inline-block', opacity: 0});
        });
        Chekbox.removeClass('checked');
    } else {
        Button.removeClass('hidden').removeAttr('style').css({display: 'none'}).fadeIn(0);
        Chekbox.addClass('checked');
    }
});

//Anchor
$("a.anchor").bind("click", function(e){
    let anchor = $(this);
    let name = anchor.attr("href").replace(new RegExp("#", "gi"), "");
    $('html, body').stop().animate({
        scrollTop: $("a[name=" + name + "]").offset().top
    }, 500);
    e.preventDefault();
    return false;
});

//Step block
$(".btn-calculate-prev").on("click", function () {
    if(!$(this).hasClass("load-ok")) {
        $(".calculate-content").load("stone.php");
    }
    $(".btn-calculate-prev").addClass("load-ok");
});

//Scroll first screen
$('#scroll_down').on("click", function() {
    $("html:not(:animated),body:not(:animated)").animate({
        scrollTop: $('header').height()
    }, 800);
});

//To top
$(window).scroll(function () {
    if ($(this).scrollTop() > 0) {
        $('#scroller').addClass("visible");
    } else {
        $('#scroller').removeClass("visible");
    }
});
$('#scroller').click(function () {
    $('body,html').animate({
        scrollTop: 0
    }, 400);
    return false;
});