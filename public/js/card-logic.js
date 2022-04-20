$(window).on('load', function () {
    $('body').toggleClass('preload loaded');
});

var viewportWidth = $(window).width();
var viewportHeight = $(window).height();
console.log('viewport is ' + viewportWidth + 'px x ' + viewportHeight + 'px.');

if ($('body').hasClass('mobile')) {
    var viewportHeightMobile = $('.vh-landing').outerHeight();
    $('.vh-landing').css({ height: viewportHeight });
}

$(document).on('click', '.gallery-img-wrapper', function(){
    var imageAtHand = $(this).children('.gal-image').css('background-image');
    var imageSrc = imageAtHand.replace('url("','').replace('")','');
    console.log(imageAtHand);
    $('.gal-img-of').attr('src',imageSrc);
    $('body').addClass('takeover-active');
});


$(document).on('click', '.menu-animator.dots', function(){
    $(this).removeClass('dots').addClass('cross');
    $('body').addClass('menu-active');
});

$(document).on('click', '.menu-animator.cross', function(){
    $(this).removeClass('cross').addClass('dots');
});

$(document).on('click', 'body.menu-active .menu-animator.cross', function(){
    $('body').removeClass('menu-active');
});
$(document).on('click', 'body.theme-active .menu-animator.cross', function(){
    $('body').removeClass('theme-active');
});
$(document).on('click', 'body.edit-active .menu-animator.cross', function(){
    $('body').removeClass('edit-active');
    $('.editable').attr('contenteditable', 'false');
});

$(document).on('click', '.menu-item.edit', function(){
    $('body').addClass('edit-active');
    $('body').removeClass('menu-active');
    $('.editable').attr('contenteditable', 'true');
});


$('.editable').bind('keydown', function(event) {
    var target = $(event.target);
    c = event.keyCode;
    
    if(c === 13 || c === 27) {
        $('.editable').blur();
        // Workaround for webkit's bug
        window.getSelection().removeAllRanges();
    }
});

$('.editable').on('focus', function() {
    $(this).addClass('focus');
});

$('.editable').on('blur', function() {
    $(this).removeClass('focus');
});


$(document).on('click', '.menu-item.theme', function(){
    $('body').addClass('theme-active');
    $('body').removeClass('menu-active');
});

$(document).on('click', '.takeover', function(){
    $('body').removeClass('takeover-active');
});

Coloris({
    // parent: '.container',
    el: '.coloris',
    wrap: true,
    theme: 'dark',
    margin: 6,
    // Set the prefered color string format:
    //  * hex: outputs #RRGGBB or #RRGGBBAA (default).
    //  * rgb: outputs rgb(R, G, B) or rgba(R, G, B, A).
    //  * hsl: outputs hsl(H, S, L) or hsla(H, S, L, A).
    //  * mixed: outputs #RRGGBB when alpha is 1; otherwise rgba(R, G, B, A).
    format: 'hex',
    alpha: false,
    clearButton: {
        show: false,
        label: 'Clear'
    },
    swatches: [
        '#d43f8d',
        '#0250c5',
        '#aab7c9',
        '#0b2954',
        '#FFF720',
        '#3CD500',
        '#dbbe3d',
        '#005230',
    ]
});

var masterHex1 = $('.coloris-1').val();
var masterHex2 = $('.coloris-2').val();

var tiny1 = tinycolor(masterHex1);
var tiny2 = tinycolor(masterHex2);
var bgHex1 = tiny1.brighten(36).toString();
var bgHex2 = tiny2.brighten(36).toString();

var gradColors = ('linear-gradient(135deg, ' + masterHex1 + ' 0%, ' + masterHex2 + ' 87%)');
var bgGradColors = ('linear-gradient(135deg, ' + bgHex1 + ' 0%, ' + bgHex2 + ' 87%)');
var userTextShadow = ('2px 2px 0' + masterHex1);
var linkAccentLine = ('4px solid ' + masterHex2);

console.log('Initial masterHex1: ' + masterHex1);
console.log('Initial masterHex2: ' + masterHex2);
console.log('Initial Gradient CSS: "' + gradColors + '"');
console.log('Initial BG Gradient CSS: "' + bgGradColors + '"');

$('.debug-console').append('<span>Viewport: ' + viewportWidth + ' x ' + viewportHeight + '</span>');
$('.debug-console').append('<span>Initial masterHex1: ' + masterHex1 + '</span>');
$('.debug-console').append('<span>Initial masterHex2: ' + masterHex2 + '</span>');
$('.debug-console').append('<span>Initial Gradient CSS: "' + gradColors + '"</span>');
$('.debug-console').append('<span>Initial BG Gradient CSS: "' + bgGradColors + '"</span>');

$('.head, .link-img').css('background-image', gradColors);
$('body .fixed-bg').css('background-image', bgGradColors);
$('.user-spokenname').css('text-shadow', userTextShadow);
$('.link').css('border-right', linkAccentLine);
$('.link-move-arrow svg').css('fill', masterHex2);


$(document).on('change', '.coloris-1', function(){
    masterHex1 = $(this).val();

    gradColors = ('linear-gradient(135deg, ' + masterHex1 + ' 0%, ' + masterHex2 + ' 87%)');
    userTextShadow = ('2px 2px 0' + masterHex1);
    $('.head, .link-img').css('background-image', gradColors);
    $('.user-spokenname').css('text-shadow', userTextShadow);

    tiny1 = tinycolor(masterHex1);
    bgHex1 = tiny1.brighten(36).toString();
    bgGradColors = ('linear-gradient(135deg, ' + bgHex1 + ' 0%, ' + bgHex2 + ' 87%)');
    $('body .fixed-bg').css('background-image', bgGradColors);

    console.log('masterHex1 updated to: ' + masterHex1);
    $('.debug-console').append('<span>masterHex1 updated to: ' + masterHex1 + '</span>');

    darkenColor1();
});

$(document).on('change', '.coloris-2', function(){
    masterHex2 = $(this).val();

    gradColors = ('linear-gradient(135deg, ' + masterHex1 + ' 0%, ' + masterHex2 + ' 87%)');
    linkAccentLine = ('4px solid ' + masterHex2);
    $('.head, .link-img').css('background-image', gradColors);
    $('.link').css('border-right', linkAccentLine);

    tiny2 = tinycolor(masterHex2);
    bgHex2 = tiny2.brighten(36).toString();
    bgGradColors = ('linear-gradient(135deg, ' + bgHex1 + ' 0%, ' + bgHex2 + ' 87%)');
    $('body .fixed-bg').css('background-image', bgGradColors);

    $('.link-move-arrow svg').css('fill', masterHex2);

    if ( tiny2.getLuminance() >= 0.75) {
        console.log('light bg');
        $('body').removeClass('dark').addClass('light');
    } else if ( tiny2.getLuminance() < 0.75) {
        console.log('dark bg');
        $('body').removeClass('light').addClass('dark');
    } else {
        console.log('Whoa, something went awry with the lum check.');
    }

    console.log('lum: ' + tiny2.getLuminance());
    console.log('masterHex2 updated to: ' + masterHex2);
    $('.debug-console').append('<span>masterHex2 updated to: ' + masterHex2 + '</span>');
    $('.debug-console').append('<span>lum: ' + tiny2.getLuminance() + '</span>');
});

var titleFontWild = 'title-font-';

$.fn.removeClassPrefix = function(prefix) {
    this.each(function(i, el) {
        var classes = el.className.split(" ").filter(function(c) {
            return c.lastIndexOf(prefix, 0) !== 0;
        });
        el.className = $.trim(classes.join(" "));
    });
    return this;
};

$('#title-font').on("change", function(){
    console.log($('#title-font').val());
    if        ( $('#title-font').val() == 1 ) {
        $('body').removeClassPrefix(titleFontWild).addClass('title-font-1');
    } else if ( $('#title-font').val() == 2 ) {
        $('body').removeClassPrefix(titleFontWild).addClass('title-font-2');
    } else if ( $('#title-font').val() == 3 ) {
        $('body').removeClassPrefix(titleFontWild).addClass('title-font-3');
    } else if ( $('#title-font').val() == 4 ) {
        $('body').removeClassPrefix(titleFontWild).addClass('title-font-4');
    } else if ( $('#title-font').val() == 5 ) {
        $('body').removeClassPrefix(titleFontWild).addClass('title-font-5');
    } else if ( $('#title-font').val() == 6 ) {
        $('body').removeClassPrefix(titleFontWild).addClass('title-font-6');
    } else if ( $('#title-font').val() == 7 ) {
        $('body').removeClassPrefix(titleFontWild).addClass('title-font-7');
    } else if ( $('#title-font').val() == 8 ) {
        $('body').removeClassPrefix(titleFontWild).addClass('title-font-8');
    } else if ( $('#title-font').val() == 9 ) {
        $('body').removeClassPrefix(titleFontWild).addClass('title-font-9');
    } else if ( $('#title-font').val() == 10 ) {
        $('body').removeClassPrefix(titleFontWild).addClass('title-font-10');
    } else if ( $('#title-font').val() == 11 ) {
        $('body').removeClassPrefix(titleFontWild).addClass('title-font-11');
    } else if ( $('#title-font').val() == 12 ) {
        $('body').removeClassPrefix(titleFontWild).addClass('title-font-12');
    } else if ( $('#title-font').val() == 13 ) {
        $('body').removeClassPrefix(titleFontWild).addClass('title-font-13');
    } else if ( $('#title-font').val() == 14 ) {
        $('body').removeClassPrefix(titleFontWild).addClass('title-font-14');
    }
});
