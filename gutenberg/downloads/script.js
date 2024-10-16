$(document).on('click', '[data-scroll]', function () {
    // Pobranie dynamicznej wartości atrybutu data-scroll
    let scrollToCategory = $(this).data('scroll');

    // Znalezienie elementu na podstawie dynamicznej wartości data-category
    let targetElement = $('[data-category="' + scrollToCategory + '"]');

    // Sprawdzenie, czy element .nav-wrapper istnieje, i pobranie jego wysokości
    let navHeight = $('.nav-wrapper').length ? $('.nav-wrapper').outerHeight() : 0;

    // Przewinięcie strony do elementu docelowego, odejmując wysokość nawigacji
    if (targetElement.length) {
        $('html, body').animate({
            scrollTop: targetElement.offset().top - navHeight
        }, 1000); // Czas animacji w milisekundach
    }
});
