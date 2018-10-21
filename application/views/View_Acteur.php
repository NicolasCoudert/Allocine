<?php
    foreach($lesActeurs as $unActeur)
        {   
?>
    <span class="spanacteur">
<?php
            echo "".$unActeur->codeActeur."<br>".$unActeur->nomActeur."<br><br><img src='".$unActeur->imageActeur."'><br>"
?>
    </span>
<?php    
        }
?>