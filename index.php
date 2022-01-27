<!-- - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->



<?php
/* CREO LA CLASSE MOVIE */
class movie {

    public $titolo;

    public $regista;

    public $durata;

    public $genere;

/* RENDO OBBLIGATOI IL TITOLO E IL GENERE DEL FILM */
    public function __construct($_titolo, $_genere){
        $this->titolo = $_titolo;

        $this->genere = $_genere;


    }

/* STAMPO TUTTE LE CARATTERISTICHE DEL FILM */
    public function dati(){
        return $this->titolo . ' ' . $this->regista . ' ' . $this->durata . ' ' . $this->genere; 
    }
}
/* TITANIC */
$titanic = new movie('Titanic', 'Drammatico');
$titanic->regista = 'James Cameron';
$titanic->durata = '3';

/* IL SIGNORE DEGLI ANELLI */
$lotr = new movie('Il signore degli anelli', 'Fantasy');
$lotr->regista = 'Peter Jackson';
$lotr->durata = '5';

/* 
echo $titanic->dati();
echo $lotr->dati();
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film con le Classi</title>
</head>
<body>
    <h1>Lista film con le proprie caratteristiche:</h1>
    <div >
        <h3><?php echo $titanic->titolo;?></h3>
        <ul>
            <li>Il regista, è: <?php echo $titanic->regista?></li>
            <li>Il genere, è: <?php echo $titanic->genere?></li>
            <li>La durata, è di: <?php echo $titanic->durata?>ore</li>
            

        </ul>
    </div>
    <div >
        <h3><?php echo $lotr->titolo;?></h3>
        <ul>
            <li>Il regista, è: <?php echo $lotr->regista?></li>
            <li>Il genere, è: <?php echo $lotr->genere?></li>
            <li>La durata, è di: <?php echo $lotr->durata?>ore</li>
            

        </ul>
    </div>
    

</body>
</html>