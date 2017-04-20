<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home - Studentenraad</title>
    <link rel="stylesheet" href="{{ asset('css/main2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">

    <link rel="stylesheet" href="{{ asset('css/caroussel/edslider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/caroussel/style.css') }}">
   <link rel="stylesheet" href="{{ asset('css/parallax.css') }}">
    <script rel="script" src="{{ asset('js/jquery.min.js') }}"></script>
    <script rel="script" src="{{ asset('js/jquery-edslider-1.4.js') }}"></script>
    <script rel="script" src="{{ asset('js/parallax.js') }}"></script>
</head>
<body>
<div class="containerMenu">
    <a class="menuLogo" href="./"><img src="{{ asset('img/SR_Logo_transparant_wit.png') }}"> </a>
    <div>
        <a class="item" href="/">Home</a>
        <a class="item" href="/wat">About</a>
        <a class="item" href="/stuvers">Stuvers</a>
        <a class="item" href="#">Raden</a>
        <a class="item" href="#">Dossiers</a>
        <a class="item" href="#">Galerij</a>
        <a class="item" href="#">Verkiezing</a>
        <a class="item" href="/contact">Contact</a>
    </div>
</div>
<div class="content">
<div class="sitewrap">
<iframe id="gmap" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d17590.66374116123!2d4.35118413849884!3d50.83816663616846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sbe!4v1491139715855" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</iframe>
<div id="container"><div dir="ltr" style="text-align: left;" >
</div>
        <div class="leftSide">
            <h1>Contact Us!</h1>

            <h3>Adres</h3>
            <p> Nijverheidskaai 170<br>
            1070 Anderlecht</p>

            <p>02 523 37 37</p>
            <p>erasmushogeschool@ehb.be</p>

            <br>
            <h3>Social Media</h3>
            <div class="cardContact">
                                    <img src="{{ asset('img/home/facebook-logo-white.jpg') }}" alt="" class="contentImg top">
                                    <img src="{{ asset('img/home/facebook-logo.jpg') }}" alt="" class="contentImg">
                                    <img src="{{ asset('img/home/email-icon-white.jpg') }}" alt="" class="contentImg top">
                                    <img src="{{ asset('img/home/email-icon.jpg') }}" alt="" class="contentImg">
                                </div>
        </div>
        <div class="rightSide">
            <form>
            <label>Voornaam</label><br>
            <input type="text" name="voornaam">
            <br>
            <label>Achternaam</label><br>
            <input type="text" name="achternaam">
            <br>
            <label>Email</label><br>
            <input type="text" name="email">
            <br>
            <label>Campus</label><br>
            <select id="selectboxCampus">
                                        <option value=""></option>
                                        <option value="Design en technologie">Design en technologie</option>
                                        <option value="Management, media & maatschappij">Management, media & maatschappij</option>
                                        <option value="Gezondheidszorg & Landsschapsarchitectuur">Gezondheidszorg & Landsschapsarchitectuur</option>
                                        <option value="Onderwijs & Pedagogie">Onderwijs & Pedagogie</option>
                                        <option value="Koninklijk Conservatorium Brussel">oninklijk Conservatorium Brussel</option>
                                        <option value="RITCS">RITCS</option>

                                    </select>
            <br>
                        <label>Type</label><br>
                        <input type="text" name="Type">
                        <br>
                                    <label>Vraag</label><br>
                                    <textarea  name="vraag"></textarea>
             <br>
                                    <input type="submit" value="verzenden">

            </form>

        </div></div>

</div>
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
</script>
</body>
</html>