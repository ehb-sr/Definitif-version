<script>
    $(document).scroll(function () {
        var y = $(this).scrollTop();
        var followWrap = $('#followWrap').offset().top;
        if (y > followWrap) {
            $('#followItem').addClass('sticky');
        } else {
            $('#followItem').removeClass('sticky');
        }

        var x = $(this).scrollTop();
        var followMenu = $('#followMenuWrap').offset().top;
        if (x > followMenu) {
            $('#followMenu').addClass('stickyMenu');
        } else {
            $('#followMenu').removeClass('stickyMenu');
        }
    });
</script>