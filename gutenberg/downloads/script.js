$(document).on('click', '[data-scroll]', function () {
    // Pobranie dynamicznej wartości atrybutu data-scroll
    let scrollToCategory = $(this).data('scroll');

    // Znalezienie elementu na podstawie dynamicznej wartości data-category
    let targetElement = $('[data-category="' + scrollToCategory + '"]');
    

    // Sprawdzenie, czy element .nav-wrapper istnieje, i pobranie jego wysokości
    let navHeight = $('.nav-wrapper').length ? $('.nav-wrapper').outerHeight() : 0;

    $('.download-category').removeClass('active');
    targetElement.addClass('active');


    // Przewinięcie strony do elementu docelowego, odejmując wysokość nawigacji
    if (targetElement.length) {
        $('html, body').animate({
            scrollTop: targetElement.offset().top - navHeight
        }, 1000); // Czas animacji w milisekundach
    }
});


$('.download-category[data-category="cat_0"]').toggleClass('active');

$(document).on('click', '[data-category] .download-cat-title', function () {

    let scrollToCategory = $(this).parent().data('category');

    let targetElement = $('[data-category="' + scrollToCategory + '"]');

    $('.download-category').removeClass('active');

    targetElement.toggleClass('active');

    let navHeight = $('.nav-wrapper').length ? $('.nav-wrapper').outerHeight() : 0;

    if (targetElement.length) {
        $('html, body').animate({
            scrollTop: targetElement.offset().top - (navHeight + 30)
        }, 1000); // Czas animacji w milisekundach
    }

console.log(scrollToCategory)
});