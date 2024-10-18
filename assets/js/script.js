$ = jQuery;

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}



// toggle hamburger
function toggleMenu() {
    var menu = document.querySelector(".nav-primary");
    var bars = document.querySelectorAll(".bar");
    menu.classList.toggle("active");
    bars.forEach(function (bar) {
        bar.classList.toggle("active");
    });
}
// toggle hamburger
function toggleDesktopMenu() {
    let menu = $(".nav-wrapper-desktop");
    let hamburger = $(".desktop-hamburger");
    menu.toggleClass('opened');
    hamburger.toggleClass('opened');
}




// /* NAVBAR STICKY */
$(function () {

    setTimeout(() => {
        // $('body>main').css('padding-top', $('.navbar-default').outerHeight() + 20);
    }, 1);
    $(window).on('scroll resize', function () {
        // $('body>main').css('padding-top', $('.navbar-default').outerHeight() + 20);
        if ($(this).scrollTop() > 0) {
            $('body').addClass('navbar-sticky');
        } else {
            $('body').removeClass('navbar-sticky');
        }
    });
})


$(window).on('resize', function () {
    // adapt footer height to 100%
    adaptFooter();
});


$(function () {
    adaptFooter();
})

// Adapt footer height to 100%
function adaptFooter() {
    // console.log('adaptFooter');
    const footerHeight = $('footer').outerHeight();
    $('main').attr('style', `min-height:calc(100vh - ${footerHeight}px)`);
}





$(function () {
    // Pokazuj strzałkę, gdy przewinięcie przekroczy 100px
    $(window).scroll(function () {
        if ($(this).scrollTop() > 500) {
            $('#scrollUp').fadeIn();
        } else {
            $('#scrollUp').fadeOut();
        }
    });

    // Przewiń do góry, gdy klikniesz na strzałkę
    $('.scrollUp').click(function (e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, 600);
        return false;
    });
});


$(function () {
    // Wyświetl popup od razu po załadowaniu strony
    $(document).on('click', '.popup-btn', function () {
        $('#popup-backdrop').addClass('popup-show');
    })

    // Zamknij popup po kliknięciu w "x"
    $(document).on('click', '#popup-close', function () {
        $('#popup-backdrop').removeClass('popup-show');
    });

    // Zamknij popup po kliknięciu w backdrop
    $(document).on('click', '#popup-backdrop', function (e) {
        if (e.target === this) {
            $(this).removeClass('popup-show');
        }
    });
});


// // Wyświetlenie modala na 30s po załadowaniu strony
// $(function () {
//     if (!getCookie('modalShown')) {
//         setTimeout(() => {
//             $('#popup-backdrop').addClass('popup-show');
//             setCookie('modalShown', 1, 1);
//         }, 30000);
//     }
// })

// Wyświetlenie modala na wyjazd myszką ze strony
$(document).on('mouseleave', function (e) {
    if (!getCookie('modalLeave')) {
        $('#popup-backdrop').addClass('popup-show');
        setCookie('modalLeave', 1, 1);
    };
});