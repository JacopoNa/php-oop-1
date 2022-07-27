<?php

class Movie {
    public $title;
    public $genre;
    public $language;
    public $director;
    public $mainActor;
    public $rating;

    public function __construct($_title, $_genre) {
        $this->title = $_title;
        $this->genre = $_genre;
    }

    public function getRating() {
        return 'il rating di questo film è di' . ' ' . $this->rating;
    }


}

$SpiderMan = new Movie('Spiderman No-way Home', 'action');
$SpiderMan->language = 'english';
$SpiderMan->director = 'Jon Watts';
$SpiderMan->mainActor = 'Tom Holland';
$SpiderMan->rating = '5 stelle';

$Thor = new Movie('Thor: Love and Thunder', 'action');
$Thor->language = 'english';
$Thor->director = 'Taika Waititi';
$Thor->mainActor = 'Chris Hemsworth';
$Thor->rating = '3 stelle';

$IronMan = new Movie('Iron Man', 'action');
$IronMan->language = 'english';
$IronMan->director = 'Jon Favreau';
$IronMan->mainActor = 'Robert Downey Jr';
$IronMan->rating = '4 stelle';

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
    <h1><?php echo $SpiderMan->title; ?></h1>
    <div>Info :
        <h3>Genere: <?php echo $SpiderMan->genre; ?></h3>
        <h3>Lingua: <?php echo $SpiderMan->language; ?></h3>
        <h3>Direttore: <?php echo $SpiderMan->director; ?></h3>
        <h3>Attore principale: <?php echo $SpiderMan->mainActor; ?></h3>
        <h4><?php echo $SpiderMan->getRating(); ?></h4>
    </div>

    <h1><?php echo $Thor->title; ?></h1>
    <div>Info :
        <h3>Genere: <?php echo $Thor->genre; ?></h3>
        <h3>Lingua: <?php echo $Thor->language; ?></h3>
        <h3>Direttore: <?php echo $Thor->director; ?></h3>
        <h3>Attore principale: <?php echo $Thor->mainActor; ?></h3>
        <h4><?php echo $Thor->getRating(); ?></h4>
    </div>

    <h1><?php echo $IronMan->title; ?></h1>
    <div>Info :
        <h3>Genere: <?php echo $IronMan->genre; ?></h3>
        <h3>Lingua: <?php echo $IronMan->language; ?></h3>
        <h3>Direttore: <?php echo $IronMan->director; ?></h3>
        <h3>Attore principale: <?php echo $IronMan->mainActor; ?></h3>
        <h4><?php echo $IronMan->getRating(); ?></h4>
    </div>

</body>
</html>