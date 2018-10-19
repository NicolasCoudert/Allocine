<?php
class Model_Cinema extends CI_Model
{
    public function GetAllCinema()
    {
        $sql = $this->db->query('SELECT codeCine, nomCine, imageCine FROM cinema');
        return $sql->result();
    }
}
?>