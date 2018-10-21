<!DOCTYPE html>
<html>
    <head> <meta charset="utf-8">
        <title>Acceuil</title>
            <link rel="stylesheet" href="Bootstrap/css/bootstrap.css" />
            <link rel="stylesheet" href="CSS/Style.css" />
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
                            echo "<input name='Film' onclick=AfficherLesFilms('".$unCinema->codeCine."') type='radio' value='". $unCinema->codeCine ."'>".$unCinema->codeCine."  ".$unCinema->nomCine."<br><img src='".$unCinema->imageCine."'></span><br>                                                            "; 
                            ?>
                                      
                                </figure>
                            <?php
                        }
                ?>

            </div> 
        <h2>Les Films proposer par ce cinéma</h2>
            <div id='divFilm'></div>
    </main>
    <footer>
        Mentions légales bla bla bla bla
    </footer>

</body>