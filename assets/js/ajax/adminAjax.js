$ = jQuery;
$(function(){
    $('.import-section-wrapper').on( 'click', '#start-import-sections', function () {
        jQuery.ajax({
            type: "post",
            dataType: "json",
            url: myAjax.ajaxurl,
            data: {
                action: "includeModules",
            },
            success: function (response) {
                if (response.status == 200) {
                    notify('Sekcje zostały zaimportowane','success');
                } else {
                    notify(response.msg,'error');
                }
            },
            error: function (response) {
                console.error(response);
            }
        });
    });
})