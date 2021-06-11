$(".btn-about").click(function(event){
    event.preventDefault();
    
    $("html, body").animate({
        scrollTop: $('.contant').offset().top - $("header").outerHeight()

    },1000)
});

$(".btn-cost").click(function(event){
    event.preventDefault();

    $("html, body").animate({
        scrollTop: $('.package').offset().top - $("header").outerHeight()

    },1000)
});

$(".logo-menu").click(function(event){
    event.preventDefault();

    $("html, body").animate({
        scrollTop: $('.container-header').offset().top - $("header").outerHeight()

    },1000)
});

$(".about-ua").click(function(event){
    event.preventDefault();

    $("html, body").animate({
        scrollTop: $('.contant').offset().top - $("header").outerHeight()

    },1000)
});

$(".advantage").click(function(event){
    event.preventDefault();

    $("html, body").animate({
        scrollTop: $('.feature').offset().top - $("header").outerHeight()

    },1000)
});

$(".what-to-order").click(function(event){
    event.preventDefault();

    $("html, body").animate({
        scrollTop: $('.business').offset().top - $("header").outerHeight()

    },1000)
});

$(".cost").click(function(event){
    event.preventDefault();

    $("html, body").animate({
        scrollTop: $('.package').offset().top - $("header").outerHeight()

    },1000)
});

$(".reviews").click(function(event){
    event.preventDefault();

    $("html, body").animate({
        scrollTop: $('.reviews-container').offset().top - $("header").outerHeight()

    },1000)
});

$(".contacts").click(function(event){
    event.preventDefault();

    $("html, body").animate({
        scrollTop: $('.contact').offset().top - $("header").outerHeight()

    },1000)
});

$(".btn-main").click(function(event){
    event.preventDefault();

    $("html, body").animate({
        scrollTop: $('.feature').offset().top - $("header").outerHeight()

    },1000)
});

$(".btn-feature-2").click(function(event){
    event.preventDefault();

    $("html, body").animate({
        scrollTop: $('.package').offset().top - $("header").outerHeight()

    },1000)
});

$(".business-container-box-content-btn").click(function(event){
    event.preventDefault();

    $("html, body").animate({
        scrollTop: $('.contact').offset().top - $("header").outerHeight()

    },1000)
});

$(".btn-price").click(function(event){
    event.preventDefault();

    $("html, body").animate({
        scrollTop: $('.contact').offset().top - $("header").outerHeight()

    },1000)
});

$(".scroll").click(function(event){
    event.preventDefault();

    $("html, body").animate({
        scrollTop: $('.container-header').offset().top - $("header").outerHeight()
        
    },1000)
});

let sliderItems = $(".reviews-container-slider-box-item.normal");
let sliderBullets = $(".bullets-box-item");
let sliderBox = $(".reviews-container-slider-box");
let now = 0;

sliderBox.css("width", (sliderItems.length + 2) * 100 + "%");

console.dir(sliderItems);   

sliderBullets.click(function(event){

    let clickNum = sliderBullets.index( $(this) );
    now = clickNum;
    sliderBox.animate({
        left: -100 * (now + 1) + "%"
    });
    sliderBullets.removeClass("active");
    $(this).addClass("active");
});

$(".burger").click(function(event){
    $(this).toggleClass("burger-active");
    $("ul").toggleClass("active");
});
