<!DOCTYPE html>
<html>
    <head> <meta charset="utf-8">
        <title>Acceuil</title>
            <link rel="stylesheet" href="Bootstrap/css/bootstrap.css" />
            <link rel="stylesheet" href="CSS/Style.css" />
            <!-- <link href="https://fonts.googleapis.com/css?family=Bellefair|Open+Sans:400,400i,600i,700" rel="stylesheet">   -->
    <script type="text/javascript" src="JQuery/jquery-3.1.1.min.js"></script>
    <script src="JS/MesFonctions.js"></script>
    <script>
    </script>
    </head>
<body>  
    <main>
        <h2>Les cinémas</h2>
            <div id='divCinema'>
                <?php
                     foreach($lesCinemas as $unCinema)
                        {
                            ?>
                                <figure>
                                    <span class="spancinema">
                            <?php
                            echo "<input name='Film' onclick=AfficherLesFilms('".$unCinema->codeCine."') type='radio' value='". $unCinema->codeCine ."'>".$unCinema->codeCine."  ".$unCinema->nomCine."<br><img src='".$unCinema->imageCine."'><br>"; 
                            ?>
                                    </span>    
                                </figure>
                            <?php
                        }
                ?>

            </div> 

            <div id='divFilm'></div>
            <div id='divActeur'></div>
    </main>
    <footer>
        Mentions légales bla bla bla bla
    </footer>

</body>