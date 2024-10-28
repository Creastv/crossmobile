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



// $(function () {
//     function setEqualHeight() {
//         let maxHeight = 0;

//         // Resetujemy wysokości, aby obliczenia były poprawne po zmianie rozmiaru okna
//         $('.features-2 .single-offer').css('height', 'auto');

//         // Znajdź najwyższy element
//         $('.features-2 .single-offer').each(function () {
//             let thisHeight = $(this).outerHeight();
//             if (thisHeight > maxHeight) {
//                 maxHeight = thisHeight;
//             }
//         });

//         // Ustaw każdemu elementowi najwyższą wysokość
//         $('.features-2 .single-offer').css('height', maxHeight + 'px');
//     }

//     // Uruchom funkcję po załadowaniu strony
//     setEqualHeight();

//     // Uruchom funkcję również przy zmianie rozmiaru okna
//     $(window).on('resize', function () {
//         setEqualHeight();
//     });
// });
