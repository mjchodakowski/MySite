<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8" />
    <title>Moje Porfolio</title>
    <link rel="stylesheet" href="css/index_mobile.css">
    <link rel="stylesheet" href="css/index.css">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="https://s.electerious.com/basicScroll/dist/basicScroll.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <link href='https://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>

    <div id="parallax">
        <div class="title-color"></div>
        <img class="scene" data-modifier="30" src="parallax\bud1.jpg">


        <div id="test" class="scene" data-modifier="0" style="--translateY:0px;">
            <div class="titleIMG"><div id="title"></div></div>
            <div id="menu">
                <a href="#sterted" class="btn">o mnie</a>
                <a href="#experience" class="btn">Doświadczenie i projekty</a>
                <a href="#cert" class="btn">Certyfikaty</a>
                <a href="#wykształcenieID" class="btn">Wykrztałcenie</a>
                <a href="#contact" class="btn">Kontakt</a>
            </div>

            <div id="OmnieStyle">
                <div style="float:unset"></div>
            </div>
        </div>


        <div class="TopA" id="button">
            <img src="loga/accros.png" style="transform:rotate(180deg);" width="60" height="60">
        </div>


        <div id="sterted" style="margin-top: 50px;" class="rctmain">
            <img src="css/my.png" id="myimage" alt="TitlePhoto">

            
            <div id="startedID_Other">
                <div id="stertedID">o mnie</div>
                <div style="text-indent: 20px;">Jestem absolwentem Politechniki Częstochowskiej na Wydziale Inżynierii Mechanicznej i
                Informatyki o kierunku Informatyka i specjalizacji Sieci Komputerowe a obecnie jestem  na drugim stopniu studiów magisterskich.
                Od młodzieńczych lat zajmuje się tworzeniem układów elektronicznych oraz programowaniem  ich. Moimi pierwszymi projektami którymi zajomaweł się były tworzone przy pomocy Arduino
                UNO z mikrokontrolerem Atmega 328. Wraz z chęcią tworzenia większych projektów i poznania  innych rodzajów technologi a zarazem ograniczeniami bedącymi w danym module. Zaczołem
                twożyć przy pomocy płytki AT91SAM7X256 na mikrokotrolerze 32bitowym, dzięki czemu tworzyłem sterowniki np. pralek automatycznych.</br>
                Wraz z rozpoczeciem studiów tworzyłem aplikacje internetowe. Podczas praktyk studenckich pracowałem
                także nad aplikacją mobilną,  której zadaniem było stworzenie serwera do zarządzenia mikrokontrolerem z wbudowanym modułem GSM.
                Aplikacja ta była tworzona przy   udziale edytora Visual Studio Code i wieloplatformowym środowisku Node.js z biblioteką React.
            </div>
            </div>
        </div>
        
        <div style="clear:both"></div>

        <div id="experience" class="rct">
            <div class="title">Doświadczenie i projekty</div>
            <div id="startedID_">

                <img class="experienceDate" src="css/csharp_.png" id="csharp_">
                <img class="experienceDate" src="css/cplusolus_.png" id="cplusolus_">
                <img class="experienceDate" src="css/c_.png" id="c_">
                <img class="experienceDate" src="css/python_.png" id="python_">
                <img class="experienceDate" src="css/bootstrap_.png" id="bootstrap_">
                <img class="experienceDate" src="css/js_.png" id="js_">
                <img class="experienceDate" src="css/f_.png" id="f_">

                <div style="clear:both"></div>


                <div id="csharp" class="experienceDate_">
                    <div class="csharpTitle">Projekt przy użyciu języka C#</div>
                    <div style="max-width:100%">
                        <div id="csharpExample"> Celem niniejszej projektu było stworzenie narzedzia do administracji
                            systemem Linux z poziomu przegladarki
                            internetowej. </br> Głównym zadaniem jest zarzadzanie systemem Linux w kazdym mozliwym
                            miejscu, majac dostep tylko do łacza internetowego.
                            Opracowana aplikacjia została przy pomocy ASP.Net MVC wraz z framworkami Entity Framework.
                        </div>
                        <div id="imagecsharp2"></div>
                    </div>
                    <div style="clear:both"></div>
                </div>

                <div id="cplusolus" class="experienceDate__">
                    Tworzenie aplikacji współbieżnych oraz rozproszonych OpenMP i MPI.
                </div>

                <div id="c" class="experienceDate__">
                    Programowanie mikrokontrolerów 16-bitowych oraz 32 bitowych. AT91SAM7X256 oraz atmega 328 itp
                </div>

                <div id="python" class="experienceDate__">
                    Aplikacja mobilna działające w systemie Android napisana w języku Python przy pomocy biblioteki
                    Kivy.
                </div>

                <div id="bootstrap" class="experienceDate__">
                </div>

                <div id="js" class="experienceDate__">
                    Stworzenie dedykowanego serwera z wykorzystaniem Node.js i modułu Mosca
                </div>

                <div id="f" class="experienceDate__">
                    Tworzeniu modeli 3D z udziałem Autodesk Fusion 360
                </div>

            </div>

            <div id="startedID_2"></div>

        </div>

      
        <div id="projects" class="rct">
            <div id="wykształcenieID" class="title">Wykształcenie</div>
            <div class="text">
                <ul>
                    <li>Politechnika Czestochowaska, Wydział Inżynieri Mechanicznej i
                        Informatyki studia magisterskie o kierunku Informatyki i specjalizacji //2020r - ?</li>
                    <li>Politechnika Czestochowaska, Wydział Inżynieri Mechanicznej i
                        Informatyki studia Inzynierskie o kierunku Informatyki i specjalizacji
                        Sieci komputertowe // 2015r -2019r </li>
                </ul>
            </div>
        </div>

        <div id="cert" class="rct">
            <div id="hobbyID" class="title">Certyfikaty</div>
            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Praesent eu turpis
                orci.
            </div>
        </div>
        <div style="clear:both"></div>


        <div id="contact" class="rct">
            <div id="contactID" class="title">Bądźmy w kontakcie</div>

            <form class="form" id="contactForm" method="post" action="send-script.php">
                <div class="form-row">
                    <label for="field-name">Name*</label>
                    <input class="textity"  type="text" name="name" required id="field-name" data-error="Wypełnij to pole"
                        pattern="[a-zA-ZąĄććęęłŁńŃóÓśŚżŻŹŹ ]+">
                </div>
                <div class="form-row">
                    <label for="field-email">Adres e-mail*</label>
                    <input class="textity" type="email" name="email" required id="field-email" data-error="Wpisz poprawny email"
                        pattern="[^@\s]+@[^@\s]+\.[^@\s]+">
                </div>
                <div class="form-row">
                    <label for="field-message">Wiadomość*</label>
                    <textarea class="textity" name="message" required data-error="Musisz wypełnić pole" id="field-message"
                        pattern=".+"></textarea>
                </div>
                <div class="form-row" style="display: none">
                    <label class="checkbox-cnt">
                        <input type="checkbox" required data-error="Musisz wypełnić pole" name="regulation" checked="checked" >
                        <i class="state" aria-hidden="true"></i>
                    </label>

                </div>
                <div class="form-row">
                    <button type="submit" class="submit-btn">
                        Wyślij formularz
                    </button>
                </div>
            </form>



        </div>


        <div>
            <div id="foot">
                <div class="foots">
                    <div id="contactText">Michał Chodakowski</br>
                        <i class="fa fa-phone fa-x2"></i> tel. +48 790 609 315</br>
                        <i class="fa fa-envelope-o fa-x2"></i><a style="text-decoration: none;" href="mailto:mjchodakowski@gmail.com?subject=Kontakt%20strona%20">mjchodakowski@gmail.com</a></br>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    <div class="foot" style="color:white; text-align:right; font-size:10px; margin: 20px;">Copyright © 2021 Nazwa
        użytkownika. All rights reserved. </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="scripts/index.js"></script>
    <script type="text/javascript" src="scripts/form.js"></script>
</body>

</html>