$(".btn-first-prev").on("click", function () {
    $(this).parents(".maingrid").hide().prev().show();
    return false;
});

$(".btn-next-step").on("click", function () {
    $(this).parents(".calculate-step").removeClass('calculate-step-active').next().addClass('calculate-step-active');
    let blockId = $(this).parents(".calculate-step").next().attr("id");
    $(".calculate-step-tab a.calculate-step-link-active").removeClass('calculate-step-link-active');
    $(".calculate-step-tab a[data-step-id='" + blockId + "']").addClass('calculate-step-link-active');
    $('.modal-window-msg-calc').animate({
        scrollTop: 0
    }, 0);
    return false;
});

$(".btn-next-prev").on("click", function () {
    $(this).parents(".calculate-step").removeClass('calculate-step-active').prev().addClass('calculate-step-active');
    let blockId = $(this).parents(".calculate-step").prev().attr("id");
    $(".calculate-step-tab a.calculate-step-link-active").removeClass('calculate-step-link-active');
    $(".calculate-step-tab a[data-step-id='" + blockId + "']").addClass('calculate-step-link-active');
    $('.modal-window-msg-calc').animate({
        scrollTop: 0
    }, 0);
    return false;
});

$(".calculate-step-link-block").on("click", ".calculate-step-tab a:not(.calculate-step-link-active)", function () {
    $(this)
        .addClass('calculate-step-link-active')
        .parent()
        .siblings()
        .children()
        .removeClass('calculate-step-link-active')
        .closest('.calculate-content')
        .find('.calculate-step')
        .removeClass('calculate-step-active')
        .eq($(this).parent().index())
        .addClass('calculate-step-active');
    ;
    return false;
});

//Checkbox
$(".type-table-block").on("click", function () {
    $(this).parents(".row").children().children(".type-table-block-active").removeClass("type-table-block-active").find("input").prop("checked", false);
    $(this).addClass("type-table-block-active").find("input").prop("checked", true);
});

$(".calculate-dop").on("click", function () {
    $(this).toggleClass("calculate-dop-active");
    if ($(this).find("input").is(':checked')){
        $(this).find("input").prop('checked', false);
    } else {
        $(this).find("input").prop('checked', true);
    }
});

//Select size
$(".table-size-corner-img img").on("click", function () {
    $(this).parents(".table-size-corner").find(".corner-active").removeClass("corner-active");
    $(this).parent().addClass("corner-active");
    $(".table-size-img-main img").attr("src", $(this).attr("src"));

    String.prototype.filename=function(extension){
        let s = this.replace(/\\/g, '/');
        s = s.substring(s.lastIndexOf('/') + 1);
        return extension ? s.replace(/[?#].+$/, ''): s.split('.')[0];
    };
    let src = $(this).attr("src");
    let name = src.filename();

    $(".corner-name").attr("value", name);
});

//Stone tab
$(".table-stone-tab").on("click", ".stone-tab-block a:not(.active)", function () {
    $(this)
        .addClass('active')
        .parent()
        .siblings()
        .children()
        .removeClass('active')
        .closest('.tabs-stone-content')
        .find('.stone-box-block')
        .removeClass('stone-box-block-active')
        .eq($(this).parent().index())
        .addClass('stone-box-block-active');
    return false;
});

//Stone select
$(".stone-box-block img").on("click", function(){
    let name = $(this).attr("data-stone-name");
    $(".stone-box-block img").removeClass("stone-active");
    $(this).addClass("stone-active");
    $(".stone-name").attr("value", name);
});

$(".calculate-dop-edge-img img").on("click", function(){
    let name = $(this).attr("data-edge-name");
    $(".calculate-dop-edge-img img").removeClass("edge-active");
    $(this).addClass("edge-active");
    $(".edge-name").attr("value", name);
});

$('.skibidiAgree-calc').click(function(event) {
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