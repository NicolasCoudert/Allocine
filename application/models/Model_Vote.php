<?php
class Model_Vote extends CI_Model
{
    public function AjouterVote($note, $codefilm)
    {
        $sql = $this->db->query("UPDATE film
                                 SET nbVotes=nbVotes+1 , totalVotes=totalVotes+".$note."
                                 WHERE codeFilm='".$codefilm."'");
    }
}
?>