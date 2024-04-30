<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />

    <title>ICO</title>
    <link rel="icon" href="img/ico.png">

</head>

<body>

        <div class="row">
            <div style="padding: 10px;"  class="col s1 m7 l7 hide-on-med-and-up">
                <a id="menuButton" onmouseup="openMenu()" style="vertical-align: middle;" href='#'><i class="material-icons">menu</i></a>
            </div>  
            <!-- logos -->
            <div class="col s6 m3 l3 logos ">
                <div class="contenedorlogos center">
                    <a href="https://www.unam.mx/">
                        <div class=""><img class="img-fluid" width="100%" src="img/logomediano.png"></div>
                    </a>
                </div>
            </div>
            <!-- /logos -->

            <!-- start nav -->
            

            <div class="col s7 m7 l7  hide-on-small-only" id="menu">
                <!-- start menu -->
                <ul style="display: flex; justify-content:flex-end;">
                    <li class="bordegris"><a class="center" href="index.php">Inicio</a></li>
                </ul>
                <!-- end menu -->
            </div>
            <!-- end nav -->

            <!-- /menu -->

            <div class="col s5 m2 l2">
                <a href="index.php">
                    <div class="logos"><img width="100%" class="img-fluid" src="img/logoico.png"></div>
                </a>
            </div>

        </div>

    <span id="hiddenMenu" hidden>
        <div  class="col s12 m12 l12 hide-on-med-and-up" style="width:100%; margin-top:-12%" id="menu">
                <!-- start menu -->
                <ul>
                    <li class="bordegris"><a class="center" href="index.php">Inicio</a></li>
                    
                </ul>
                <!-- end menu -->
            </div>
</span>

            <script>
                function openMenu()
                {
                    menu = document.getElementById('hiddenMenu');
                    status = menu.getAttribute('hidden');

                    if(status=='null')
                    {
                        menu.setAttribute('hidden',true);
                    }
                    else
                    {
                        menu.removeAttribute('hidden');
                    }

                }
            </script>