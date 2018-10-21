<?php
class Model_Film extends CI_Model
{
    public function GetAllFilms($idCinema)
    {
        $sql = $this->db->query("SELECT codeFilm, nomFilm, imageFilm, nbVotes, totalVotes
                                 FROM film, projeter
                                 WHERE codeFilm = numFilm
                                 AND numCinema ='".$idCinema."'");
        return $sql->result();
    }
}
?>