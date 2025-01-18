$(document).ready(function () {
    $('#hamburger').on("click", () => {
        $('#main-nav').toggle();
    })

    if ($(window).width() >= 992) {
        $('#main-nav').removeClass('hidden');
    }

    let curYear = new Date().getFullYear();
    $('#copyright').text('Copyright © ' + curYear + ' Julien Chambers, all rights reserved.');
})