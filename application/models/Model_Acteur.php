<?php
class Model_Acteur extends CI_Model
{
    public function GetAllActeurs()
    {
        $sql = $this->db->query("SELECT acteur.codeActeur, acteur.nomActeur, acteur.imageActeur 
                                FROM acteur, jouer, film
                                WHERE acteur.codeActeur = jouer.numActeur
                                AND jouer.numFilm = film.codeFilm 
                                AND film.codeFilm ='".$idFilm."'");
        return $sql->result();
    }
}
?>