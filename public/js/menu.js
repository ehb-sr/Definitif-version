$(document).ready(function () {

    var currentItem;
    var newCurrentItem;

    $('.item').on('click', function() {

        if(currentItem != null)
            currentItem.removeClass('current');

        newCurrentItem = $(this);

        newCurrentItem.addClass('current');
        currentItem = newCurrentItem;
    });
});