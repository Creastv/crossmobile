$(function () {
    // Kliknięcie w zakładkę
    $(document).on('click', '.tab-nav a', function (e) {
        e.preventDefault();

        // Usunięcie klasy 'active' ze wszystkich zakładek
        $('.tab-nav a').removeClass('active');
        $('.tab-wrapper .OfferSwiper').removeClass('active');

        // Dodanie klasy 'active' do klikniętej zakładki
        $(this).addClass('active');

        // Wyświetlenie odpowiedniej zawartości
        let tabID = $(this).data('tab');
        $('#' + tabID).addClass('active');
        console.log(tabID);
    });
});
