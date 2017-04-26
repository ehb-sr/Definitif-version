$(document).ready(function () {

    initialise();

    var currentItem;
    var newCurrentItem;

    $('.item').on('click', function() {

        if(currentItem != null)
            currentItem.removeClass('current');

        newCurrentItem = $(this);

        newCurrentItem.addClass('current');
        currentItem = newCurrentItem;
    });
    $('#comment-'+$id)
/*
    $(function () {

        $("#about").click(function () {
            ChangeUrl('About', 'about');
            $( "#content" ).load( "about", function () {
                   //parallax($(window).width(), $(window).height());
            });
        });
        $("#stuvers").click(function () {
            ChangeUrl('Stuvers', 'stuvers');
            $( "#content" ).load( "stuvers" );
            initialise();
        });
        $("#raden").click(function () {
            ChangeUrl('Raden', 'raden');
            $( "#content" ).load( "raden" );
            initialise();
        });
        $("#dossier").click(function () {
            ChangeUrl('Dossier', 'dossier');
            $( "#content" ).load( "dossier" );
            initialise();
        });
        $("#verkiezing").click(function () {
            ChangeUrl('Verkiezing', 'verkiezing');
            $( "#content" ).load( "verkiezing" );
            initialise();
        });
        $("#contact").click(function () {
            ChangeUrl('Contact', 'contact');
            $( "#content" ).load( "contact" );
            $('head').append('@include("contact.head")');
        });
    });
*/
});


function initialise() {
    $.parallax();
}

function ChangeUrl(page, url) {
    if (typeof (history.pushState) != "undefined") {
        var obj = { Page: page, Url: url };
        history.pushState(obj, obj.Page, obj.Url);
    } else {
        alert("Browser does not support HTML5.");
    }
}