<!DOCTYPE html>
<html>
    <head> <meta charset="utf-8">
        <title>Acceuil</title>
            <link rel="stylesheet" href="Bootstrap/css/bootstrap.css" />
            <link rel="stylesheet" href="CSS/Style.css" />
            <!-- <link href="https://fonts.googleapis.com/css?family=Bellefair|Open+Sans:400,400i,600i,700" rel="stylesheet">   -->
    <script type="text/javascript" src="JQuery/jquery-3.1.1.min.js"></script>
    <script src="JS/MesFonctions.js"></script>
    </head>
<body>  
    <main>
        
<?php
    foreach($lesFilms as $unFilm)
        {   
?>
    <span class="spanfilm">
<?php
            echo "<input name='Acteur' onclick=AfficherLesActeurs('".$unFilm->codeFilm."') type='radio' value='".$unFilm->codeFilm."'>".$unFilm->nomFilm."<br><img src='".$unFilm->imageFilm."'></br>"; 
?>
    </span>
<?php    
        }
?>
    </main>
</body>