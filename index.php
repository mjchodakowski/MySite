



<!DOCTYPE html>
<html lang="pl">

<head>
    <link rel="shortcut icon" href="/favicon.ico">
    <meta charset="UTF-8" />
    <title>Porfolio</title>
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/index_mobile.css">
    <link rel="stylesheet" href="css/index.css">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="https://s.electerious.com/basicScroll/dist/basicScroll.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>
</head>

<body>
    <div id="parallax">
        <div class="title-color"></div>
        <img class="scene" data-modifier="30" src="parallax\bud1.jpg">
        <div id="test" class="scene" data-modifier="0" style="--translateY:0px;">
            <div class="titleIMG">
                <div id="title"></div>
            </div>
            <div id="menu">
                <a href="#sterted" class="btn mobilehide">Poznaj moją historię</a>
                <a href="#experience" class="btn mobilehide">Doświadczenie i projekty</a>
                <a href="#cert" class="btn mobilehide">Hobby</a>
                <a href="gallery/index.html" class="btn">Galeria</a>
                <a href="cv.html" class="btn mobilehide" style="background:#808080;">Curriculum vitae</a>
                <a href="#contact" class="btn">Kontakt</a>
            </div>

            <div id="OmnieStyle">
                <div style="float:unset"></div>
            </div>
        </div>


        <?php    

    if(!$_COOKIE['michalchodakowski']=="1")
    {
        $plik="licz.txt";
        //odczytujemy aktualną wartość z pliku
        $file=fopen($plik, "r");
        flock($file, 1);
        $liczba=fgets($file, 16);
        flock($file, 3);
        fclose($file);
        $liczba++; //zwiększamy o 1
        //zapisujemy nową wartość licznika
        $file=fopen($plik, "w");
        flock($file, 2);
        fwrite($file, $liczba++);
        flock($file, 3);
        fclose($file); 
        setcookie("michalchodakowski","1");
        //ob_end_flush();
    }
?>

        <div class="TopA mobilehide" id="button">
            <img src="loga/accros.png" style="transform:rotate(180deg);" width="60" height="60">
        </div>


        <div id="sterted" style="margin-top: 50px;" class="rctmain">
            <div id="startedID_Other">
                <div id="TitleOmnie">poznaj moją krotką historię</div>
                <div style="text-indent: 20px;">

                    <div class="divomnie">
                        <div class="omnieClose"><img class="imgomnie" src="child.png"></div>
                        <div class="omnieOpen">
                            <div class="titlePomnie">narodziny</div>
                            <div class="opisOmnie">Pewnego styczniowego ranka w 1995 roku gdy języki tj. Java oraz PHP dopiero powstawały  a internet w Polsce raczkował przyszedł pewien człowiek. 
                            Byłem nim ja..</div>
                        </div>
                    </div>

                    <div class="divomnie">
                    <div class="omnieClose"><img class="imgomnie" src="home.png"></div>
                        <div class="omnieOpen">
                            <div class="titlePomnie">DORASTAŁEM TUTAJ…</div>
                            <div class="opisOmnie">Urodziłem się oraz dorastałem w mieście w którym w tym czasie liczyło niespełna 250 tyś mieszkańców a nazywa się Sosnowiec w którym nadal mieszkam. </div>
                        </div>
                    </div>

                    <div class="divomnie">
                    <div class="omnieClose"><img class="imgomnie" src="primaryschool.png"></div>
                        <div class="omnieOpen">
                            <div class="titlePomnie">POCZĄTKI EDUKACJI</div>
                            <div class="opisOmnie">Od samego początku interesowały mnie przedmioty ścisłe. Na matematykę, fizykę, informatykę zawsze znalazłem czas po zajęciach szkolnych.
                             Sport także nie był mi obcy, uczestniczyłem oraz zdobywałem wiele miejsc w międzyszkolnych olimpiadach w lekkoatletyce. 
                            </div>
                        </div>
                    </div>

                    <div class="divomnie">
                    <div class="omnieClose"><img class="imgomnie" src="secendaryschool.png"></div>
                        <div class="omnieOpen">
                            <div class="titlePomnie">SZKOŁA ŚREDNIA</div>
                            <div class="opisOmnie">W liceum skupiałem dalej się rozwijaniu swojej pasji oraz nauce przedmiotów ścisłych. 
                            Ciągle podnosiłem swoje umiejętności programowania, głównie w C/C++. Dodatkowo, od początku liceum, zacząłem zdobywać bezcenne doświadczenie w swoich prywatnych projektach. 
                            Nie zawsze praca przebiegała idealnie, ale doświadczenia te zaprocentowały już teraz… 
                            </div>
                        </div>
                    </div>

                    <div class="divomnie">
                    <div class="omnieClose"><img class="imgomnie" src="study.png"></div>
                        <div class="omnieOpen">
                            <div class="titlePomnie">STUDIA</div>
                            <div class="opisOmnie">
                            Po szkole średniej przyszła pora na studia trudny wybór w spełnieniu wszystkich moich oczekiwań i zainteresowań.  Postawiłem na jedną kartę i wybrałem się na kierunek Informatyki na
                             <img style="height: 40px; float:left; margin:5px;" src="wimii.png">
                              Wydział Informatyki i Mechaniki w Częstochowie. </br>Tematem moje pracy dyplomowej było Opracowanie narzędzia do administracji systemem Linux 
                             z poziomu przeglądarki internetowej. (ang. Development of the Internet browser’s level management tool for the Linux system) </div>
                        </div>
                    </div>
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
            <div class="omnieClose"><img class="imgomnie" style="opacity:1;" src="wimii.png"></div>

                <ul>                
                    <li> <div class="GalleryLinkHobby"> 2015 r.  -  2019 r. </div> Politechnika Czestochowaska, Wydział Inżynieri Mechanicznej i
                        Informatyki studia Inzynierskie o kierunku Informatyki i specjalizacji
                        Sieci komputertowe </li>
                       
                        

                </ul>
            </div>
        </div>

        <div id="cert" class="rct">
            <div id="hobbyID" class="title">Moje Hobby</div>
            <div class="text">
            <ul>
            <li>Fotografia <a href="gallery/index.html" class="GalleryLinkHobby">GALERIA ZDJEĆ</a></li> 
            <li> Podróze </li>
            <li> Książki</li>
                <ul> 
                    <li>Kryminał <div style="font-size:0.9em; color:bisque;">Remigiusz Mróz</div></li>
                    <li>Fantastyka <div style="font-size:0.9em;color:bisque;">George R.R. Martin, Andzej, Sapkowski, J.K. Rowling, Arthur Ignatius Conan Doyle</div></li>
                    <li>Literatura faktu <div style="font-size:0.9em;color:bisque;">Timothy Peake</div></li>
                </ul>
            <li> Sport</li>
                <ul> 
                    <li>Kolarstwo</li>
                    <li>Sporty wodne</li>
                </ul>
            
            <li>Technologia</li>
            <ul> 
                    <li>Nowinki Technologiczne</li>
                    <li>Majsterkowanie</li>
                </ul>
            </ul>
            </div>
        </div>
        <div style="clear:both"></div>



        

        <div id="contact" class="rct">
            <div id="contactID" class="title">Bądźmy w kontakcie</div>

            <form class="form" id="contactForm" method="post" action="send-script.php">
                <div class="form-row">
                    <label for="field-name">Name*</label>
                    <input class="textity" type="text" name="name" required id="field-name" data-error="Wypełnij to pole" pattern="[a-zA-ZąĄććęęłŁńŃóÓśŚżŻŹŹ ]+">
                </div>
                <div class="form-row">
                    <label for="field-email">Adres e-mail*</label>
                    <input class="textity" type="email" name="email" required id="field-email" data-error="Wpisz poprawny email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+">
                </div>
                <div class="form-row">
                    <label for="field-message">Wiadomość*</label>
                    <textarea class="textity" name="message" required data-error="Musisz wypełnić pole" id="field-message" pattern=".+"></textarea>
                </div>
                <div class="form-row" style="display: none">
                    <label class="checkbox-cnt">
                        <input type="checkbox" required data-error="Musisz wypełnić pole" name="regulation" checked="checked">
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
                    <div id="contactText">Michał Chodakowski</br></br>
                        <i class="fa fa-phone fa-x2"></i> tel. +48 790 609 315</br>
                        <a href='https://github.com/mjchodakowski' id="contactText">https://github.com/mjchodakowski</a></br>
                        <i class="fa fa-envelope-o fa-x2"></i><a  href="mailto:kontakt@michalchodakowski.pl" >kontakt@michalchodakowski.pl </a></br>
                        <i class="fa fa-envelope-o fa-x2"></i><a  href="mailto:contact@michalchodakowski.pl" >contact@michalchodakowski.pl </a></br>
                        <i class="fa fa-envelope-o fa-x2"></i><a  href="mailto:mjchodakowski@gmail.com ?subject=with%20site%20michalchodakowski.pl">mjchodakowski@gmail.com</a></br>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    <div class="foot" style="color:white; text-align:right; font-size:10px; margin: 20px;">Copyright © 2021 Michał Chodakowski. All rights reserved.  -  <?php include ('licz.txt'); ?> </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="scripts/index.js"></script>
    <script type="text/javascript" src="scripts/form.js"></script>
</body>

</html>