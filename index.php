<?php 
    class Movie {
        public $title;
        public $year;
        public $genere;
        public $time;
        public $rating;

        public function __constructor($title, $year, $genre, $time, $rating){
            $this -> title = $title;
            $this -> year = $year;
            $this -> genre = $genre;
            $this -> time = $time;
            $this -> rating = $rating;

        }

        public function getMovieDetails(){
            $string = "Movie: ".$this->$title.", Genre: ".$this->$genre." Year: ".$this->$year." Time: ".$this->$time.
            " ".$this->$rating;
             if($this->$rating != NULL ){
                $string.= ", Rating:" .$this->$rating;
             }
             return $string;
        }

      
  
    }
        
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