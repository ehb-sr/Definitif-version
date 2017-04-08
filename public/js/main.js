$(document).ready(function () {

    var currentItem;
    var newCurrentItem;

    $.parallax({
        speed: .70
    });

    $('.item').on('click', function() {

        if(currentItem != null)
            currentItem.removeClass('current');

        newCurrentItem = $(this);

        newCurrentItem.addClass('current');
        currentItem = newCurrentItem;
    });


});