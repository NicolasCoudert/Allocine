<?php

class IndexCinema extends CI_controller
{
    public function index()
    {
        $this->load->model("Model_Cinema");
        $data['lesCinemas']=$this->Model_Cinema->GetAllCinema();
        $this->load->view("View_Cinema", $data);
    }

    public function AfficherlesFilms()
    {
        $idCinema = $_GET['idCine'];
        $this->load->model("Model_Film");
        $data['lesFilms']=$this->Model_Film->GetAllFilms($idCinema);
        $this->load->view("View_Film", $data);
    }

    public function AfficherLesActeurs()
    {
        $idActeur = $_GET['idFilm'];
        $this->load->model("Model_Acteur");
        $data['lesActeurs']=$this->Model_Acteur->GetAllActeurs($idFilm);
        $this->load->view("View_Acteur", $data);
    }
}
?>