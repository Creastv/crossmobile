$(function () {
    // Kliknięcie w zakładkę
    $(document).on('click', '[tab-href]', function (e) {
        e.preventDefault();

        // Usunięcie klasy 'active' ze wszystkich zakładek
        $('.btn-tab').removeClass('active');
        $('[data-tab]').removeClass('active');

        // Dodanie klasy 'active' do klikniętej zakładki
        $(this).addClass('active');

        // Wyświetlenie odpowiedniej zawartości
        let tabID = $(this).attr('tab-href');
        $('[data-tab="' + tabID + '"]').addClass('active');
    });
});

