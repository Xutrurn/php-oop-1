<?php

class Movie {
    public $titolo;
    public $genere;

    public function __construct($_titolo,$_genere)

    {
        $this->titolo = $_titolo;
        $this->genere = $_genere;
    }

    public function getTitolo()

    {
        return $this->titolo;
    }

    public function getGenere()

    {
        return $this->genere;
    }
}

$movie1 = new Movie('Titolo 1','Genere 1');
$movie2 = new Movie('Titolo 2','Genere 2');
$movie3 = new Movie('Titolo 3','Genere 3');
$movie4 = new Movie('Titolo 4','Genere 4');
$movie5 = new Movie('Titolo 5','Genere 5');

$movies = [$movie1, $movie2, $movie3, $movie4, $movie5];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>

<body>
    <div class="container"> 
        <?php foreach ($movies as $movie) { ;?>
            <div>
                <p>
                    <?php echo "Titolo Movie: " .$movie->getTitolo() ; ?>
                </p>
                <p>
                    <?php echo "Genere: " .$movie->getGenere() ; ?>
                </p>
            </div>
        <?php } ; ?>
    </div>
</body>

</html>

