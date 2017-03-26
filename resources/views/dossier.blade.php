<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dossier</title>

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/parallax.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dossier.css') }}">
    <script rel="script" src="{{ asset('js/jquery.min.js') }}"></script>
    <script rel="script" src="{{ asset('js/parallax.js') }}"></script>
</head>
<body>
<div class="containerMenu">
    <a class="menuLogo" href="./"><img src="{{ asset('img/SR_Logo_transparant_wit.png') }}"> </a>
    <div>
        <a class="item" href="#" id="about">About</a>
        <a class="item" href="#" id="stuvers">Stuvers</a>
        <a class="item" href="#" id="raden">Raden</a>
        <a class="item" href="#">Dossiers</a>
        <a class="item" href="#">Verkiezing</a>
        <a class="item" href="#">Contact</a>
    </div>
</div>

<div class="content">
    <div class="sitewrap">
        <div class="contentwrap">
            <h1>Dossiers</h1>
            <p></p>
        </div>
        <div class="photowrap">
            <img src="{{ asset('img/home/parallax/event-background.jpg') }}" class="bgimages" alt=""/>
        </div>
        <div class="contentwrap">
            <div id="followWrap">
                <h2 id="followItem">2016 - 2017</h2>
            </div>
            <div id="followMenuWrap">
                <div id="followMenu">
                    <h3>Academiejaar</h3>
                    <h4>2016 - 2017</h4>
                    <h4>2017 - 2018</h4>
                </div>
            </div>

            <div class="flex box">
                <div class="flex-kol topic-box">
                    <h2 class="title-topic">Titel</h2>
                    <h4 class="topic">Topic</h4>
                </div>
                <div class="flex-kol">
                    <button class="pdf">PDF</button>
                    <div class="flex-kol">
                        <h4 class="title-einde">Einde</h4>
                        <p class="timestamp-einde">Timestamp</p>
                    </div>
                </div>
            </div>
            <div class="flex-kol comment-content">
                <div class="flex-kol comment-box">
                    <p class="timestamp-message">Timestamp</p>
                    <p class="comment-user">Comment user</p>
                </div>
                <div class="flex">
                    <textarea></textarea>
                    <img src="#" class="add-btn">
                </div>
            </div>
            <p class="s-more">See More</p>

            <div class="flex box">
                <div class="flex-kol topic-box">
                    <h2 class="title-topic">Titel</h2>
                    <h4 class="topic">Topic</h4>
                </div>
                <div class="flex-kol">
                    <button class="pdf">PDF</button>
                    <div class="flex-kol">
                        <h4 class="title-einde">Einde</h4>
                        <p class="timestamp-einde">Timestamp</p>
                    </div>
                </div>
            </div>
            <div class="flex-kol comment-content">
                <div class="flex-kol comment-box">
                    <p class="timestamp-message">Timestamp</p>
                    <p class="comment-user">Comment user</p>
                </div>
                <div class="flex">
                    <textarea></textarea>
                    <img src="#" class="add-btn">
                </div>
            </div>
            <p class="s-more">See More</p>

            <div class="flex box">
                <div class="flex-kol topic-box">
                    <h2 class="title-topic">Titel</h2>
                    <h4 class="topic">Topic</h4>
                </div>
                <div class="flex-kol">
                    <button class="pdf">PDF</button>
                    <div class="flex-kol">
                        <h4 class="title-einde">Einde</h4>
                        <p class="timestamp-einde">Timestamp</p>
                    </div>
                </div>
            </div>
            <div class="flex-kol comment-content">
                <div class="flex-kol comment-box">
                    <p class="timestamp-message">Timestamp</p>
                    <p class="comment-user">Comment user</p>
                </div>
                <div class="flex">
                    <textarea></textarea>
                    <img src="#" class="add-btn">
                </div>
            </div>
            <p class="s-more">See More</p>

            <div class="flex box">
                <div class="flex-kol topic-box">
                    <h2 class="title-topic">Titel</h2>
                    <h4 class="topic">Topic</h4>
                </div>
                <div class="flex-kol">
                    <button class="pdf">PDF</button>
                    <div class="flex-kol">
                        <h4 class="title-einde">Einde</h4>
                        <p class="timestamp-einde">Timestamp</p>
                    </div>
                </div>
            </div>
            <div class="flex-kol comment-content">
                <div class="flex-kol comment-box">
                    <p class="timestamp-message">Timestamp</p>
                    <p class="comment-user">Comment user</p>
                </div>
                <div class="flex">
                    <textarea></textarea>
                    <img src="#" class="add-btn">
                </div>
            </div>
            <p class="s-more">See More</p>

            <div class="flex box">
                <div class="flex-kol topic-box">
                    <h2 class="title-topic">Titel</h2>
                    <h4 class="topic">Topic</h4>
                </div>
                <div class="flex-kol">
                    <button class="pdf">PDF</button>
                    <div class="flex-kol">
                        <h4 class="title-einde">Einde</h4>
                        <p class="timestamp-einde">Timestamp</p>
                    </div>
                </div>
            </div>
            <div class="flex-kol comment-content">
                <div class="flex-kol comment-box">
                    <p class="timestamp-message">Timestamp</p>
                    <p class="comment-user">Comment user</p>
                </div>
                <div class="flex">
                    <textarea></textarea>
                    <img src="#" class="add-btn">
                </div>
            </div>
            <p class="s-more">See More</p>



        </div>
    </div>
</div>
<script src="{{ asset('js/main.js') }}"></script>
<script>
    $(document).ready(function(){
        $.parallax({
            speed: .70
        });
    });

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


</body>
</html>