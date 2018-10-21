function AfficherLesFilms(idCinema)
{

    //alert(idCinema);
$.ajax
(
    {
        type:"get",
        url:"index.php/IndexCinema/AfficherLesFilms",
        data:"idCine="+idCinema,
        success:function(data)
        {
            $("#divFilm").empty();
            $("#divFilm").append(data);
        },
        error:function()
        {
            alert("Ereur d'affichage sur les Films");
        }
    }
);
}
function voter(note,btn)
{
   
$.ajax
(
    {
        type:"get",
        url:"index.php/IndexCinema/AjoutVote",
        data:"note="+note+"&film="+btn.val(),
        success:function(data)
        {
            $("#divFilm").empty();
            $("#divFilm").append(data);
        },
        error:function()
        {
            alert("Ereur d'affichage sur les votes");
        }
    }
);
}