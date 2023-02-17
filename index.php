<?php
class Movies
{
    public $title;
    public $author;
    public $genre;

    public function presentazioneFilm()
    {
        echo 'Titolo del Film: ' .  $this->title . '<br>' . 'Autore del Film: ' .  $this->author . '<br>' . 'Genere del Film: ' .  $this->genre . '<br>';
    }
    public function __construct ($title, $author, $genre){
        $this->title = $title;
        $this->author = $author;
        $this->genre = $genre;
    }
}

$titanic = new Movies("Titanic", "James Cameron", "Dramatic");
$rocky = new Movies("Rocky IV", "Silvester Stallone", "Action");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php $titanic -> presentazioneFilm() ?></p>
    <p><?php $rocky -> presentazioneFilm() ?></p>
</body>
</html>

