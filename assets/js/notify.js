$ = jQuery;
$(function () {
    if (!$('.notifications-wrapper').length) {
        $('body').append(`
        <div class="notifications-wrapper">
            <div class="notification-items">
            </div>
        </div>`);
    }
})
function notify(text, type) {
    $(`<div class="notification-item notify-${type}">
        <p>${text}</p>
    </div>
    `).appendTo($('.notification-items')).fadeOut(7500);
}