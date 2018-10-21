<?php
    foreach($lesFilms as $unFilm)
        {   
?>
    <span class="spanfilm">
<?php
            echo "<input name='Acteur' onclick=AfficherLesActeurs('".$unFilm->codeFilm."') type=radio value='".$unFilm->codeFilm."'>".$unFilm->codeFilm."<br>".$unFilm->nomFilm."<br><br><img src='".$unFilm->imageFilm."'><br>Une note total de ".$unFilm->totalVotes." pour ".$unFilm->nbVotes." votes<br>";
            // echo "Pour une moyenne de "" sur 5"
            echo "Donnez une note à ce film ! <br><button onclick='voter(1,$(this))' type='submit' name='vote1' value=".$unFilm->codeFilm.">1</button>";
            echo "<button onclick='voter(2,$(this))' type='submit' name='vote2' value=".$unFilm->codeFilm.">2</button>";
            echo "<button onclick='voter(3,$(this))' type='submit' name='vote3' value=".$unFilm->codeFilm.">3</button>";
            echo "<button onclick='voter(4,$(this))' type='submit' name='vote4' value=".$unFilm->codeFilm.">4</button>";
            echo "<button onclick='voter(5,$(this))' type='submit' name='vote5' value=".$unFilm->codeFilm.">5</button>";
?>
    </span>
<?php    
        }
?>