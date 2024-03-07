<!-- 
 create un file index.php in cui:

✅- è definita una classe ‘Movie’

✅=> all'interno della classe sono dichiarate delle variabili d'istanza

✅=> all'interno della classe è definito un costruttore

✅=> all'interno della classe è definito almeno un metodo

✅- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà 
-->



<?php

class Movie
{

    // Dichiarazione delle variabili di istanza
    public $title;
    public $director;
    public $releaseYear;
    public $genre;

    // Metodo costruttore per inizializzare le variabili di istanza
    function __construct($_title, $_director, $_releaseYear, $_genre)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->releaseYear = $_releaseYear;
        $this->genre = $_genre;
    }

    public static function greet(){
        return "Ciao! Benvenuto nel fantastico mondo del cinema!";
    }

    // utilizzo del metodo Set
    public function setMovie($nomeTitle, $nomeDirector, $annoReleaseYear, $genereGenre)
    {
        $this->title = $nomeTitle;
        $this->director = $nomeDirector;
        $this->releaseYear = $annoReleaseYear;
        $this->genre = $genereGenre;
    }
}


$avatarDue = new Movie('Avatar', 'James Cameron', '16 Dicembre 2022', 'Azione');
$laLeggendaDiAnng = new Movie('La leggenda di Aang', 'Michael Dante DiMartino', '2024', 'Serie Tv');

var_dump($avatarDue, $laLeggendaDiAnng);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous' />
</head>

<body>
    <div class="container mt-5 text-center ">
        <h1><?php echo Movie::greet() ?></h1>
        <div class="d-flex justify-content-center flex-column align-items-center  ">

            <h2>Dettagli del film: Avatar</h2>
            <ul>
                <li><strong>Title:</strong> <?php echo $avatarDue->title; ?></li>
                <li><strong>Director:</strong> <?php echo $avatarDue->director; ?></li>
                <li><strong>Release Year:</strong> <?php echo $avatarDue->releaseYear; ?></li>
                <li><strong>Genre:</strong> <?php echo $avatarDue->genre; ?></li>
            </ul>

            <h2 class="mt-5">Dettagli del film: La leggenda di Aang</h2>
            <ul>
                <li><strong>Title:</strong> <?php echo $laLeggendaDiAnng->title; ?></li>
                <li><strong>Director:</strong> <?php echo $laLeggendaDiAnng->director; ?></li>
                <li><strong>Release Year:</strong> <?php echo $laLeggendaDiAnng->releaseYear; ?></li>
                <li><strong>Genre:</strong> <?php echo $laLeggendaDiAnng->genre; ?></li>
            </ul>
        </div>
    </div>

</body>

</html>