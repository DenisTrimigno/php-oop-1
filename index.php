<?php 

class Genre {
    public $name;

    public function __construct($name){
        $this->name = $name;
    }
}


class Movie {
    public $title;
    public $year;
    public $genre;
    public $time;
    public $rating;

    public function __construct($title, $year, $genre, $time, $rating){
        $this->title = $title;
        $this->year = $year;
        $this->genre = $genre;
        $this->time = $time;
        $this->rating = $rating;
    }

    public function getMovieDetails(){
        $string = "Movie: ".$this->title.", Genre: ".$this->genre.", Year: ".$this->year.", Time: ".$this->time;
        if($this->rating != NULL ){
            $string .= ", Rating: " .$this->rating;
        }
        return $string;
    }
}

        
    //CREAZIONE ISTANZE DELLA CLASSE

    $pirati_dei_caraibi = new Movie ('Pirati dei Caraibi','2013', new Genre('Azione'), 180, "" );

    var_dump($pirati_dei_caraibi)

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js">
    <title>Document</title>
</head>
<body>
    
</body>
</html>