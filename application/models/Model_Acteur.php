<?php
class Model_Acteur extends CI_Model
{
    public function GetAllActeurs()
    {
        $sql = $this->db->query("SELECT acteur.codeActeur, acteur.nomActeur, acteur.imageActeur 
                                FROM acteur, jouer
                                WHERE acteur.codeActeur = jouer.numActeur 
                                AND jouer.numFilm ='".$idFilm."'");
        return $sql->result();
    }
}
?>