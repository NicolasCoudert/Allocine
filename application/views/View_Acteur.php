<?php
    foreach($lesActeurs as $unActeur)
        {   
?>
    <span class="spanacteur">
<?php
            echo "".$unActeur->codeActeur."<br>".$unActeur->nomActeur."<br><img src='".$unActeur->imageActeur."'></span><br>"
?>
<?php    
        }
?>