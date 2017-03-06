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

    $('.mySlideshow').edslider({
        // Set width
        width     : 1520,
        //1536

        // Set height
        height    : 650,

        // Start position
        position  : 1,

        // Interval time between slides (in milliseconds)
        interval  : 50000,

        // <a href="http://www.jqueryscript.net/animation/">Animation</a> Speed (in milliseconds)
        duration  : 1000,

        // Enable/disable animation
        animation : false,

        // Enable/disable paginator
        paginator : false,

        // Enable/disable navigator
        navigator : true,

        //  Enable/disable interval progress bar
        progress  : true,

        // Load image url
        loadImgSrc: 'images/load.gif',

        //  Skin name
        skin      : 'edslider'
    });
});