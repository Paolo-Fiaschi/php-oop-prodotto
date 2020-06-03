<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop</title>
    <?php
        class Prodotto {
            public $colore;
            public $materiale;

            function __construct($colore, $materiale){
                $this-> colore = $colore;
                $this-> materiale = $materiale;
            }
            public function printMe(){
                echo "Colore: ". $this-> colore. "<br>"
                . "Materiale : ". $this-> materiale. "<br>";
            }
        }
        class Maglia extends Prodotto{

            public $nTagliaS;
            public $nTagliaM;
            public $nTagliaL;

            function __construct($nTagliaS, $nTagliaM, $nTagliaL, $colore, $materiale){

                parent::__construct($colore, $materiale);

                $this-> nTagliaS = $nTagliaS;
                $this-> nTagliaM = $nTagliaM;
                $this-> nTagliaL = $nTagliaL;
            }
            public function totMaglie(){
                return $this-> nTagliaS + $this-> nTagliaM + $this-> nTagliaL;
            }
            public function printMe(){
                echo "taglie S numero: ". $this-> nTagliaS. "<br>"
                . "taglie M numero: ". $this-> nTagliaM. "<br>"
                . "taglie L numero: ". $this-> nTagliaL. "<br>"
                . parent:: printMe()
                . "Per un totale di maglie disponibili: ". $this-> totMaglie(). "<br><br>";

            }
        }
        class Pantalone extends Prodotto{
            public $modello;
            public $taglia;

            public function __construct($modello, $taglia, $colore, $materiale){

                parent::__construct($colore, $materiale);
                $this-> modello = $modello;
                $this-> taglia = $taglia;
            }
            public function printMe(){
                echo parent:: printMe()
                . "modello: " . $this-> modello . "<br>"
                . "taglia: " . $this-> taglia . "<br><br>";

            }
        }
        $maglieNewStyle = new Maglia(15, 3, 10, "nero", "cotone");
        $maglieOldStyle = new Maglia(10, 0, 5, "blue", "cotone misto lana");
        $jeans = new Pantalone("skinny", 46, "nero", "jeans");
        $pantalone = new Pantalone("pantalone", 50, "verde", "cotone");
        echo "Maglie: <br>";
        echo "Maglie 'New Style': <br>";
        echo $maglieNewStyle->  printMe();
        echo "Maglie 'Old Style': <br>";
        echo $maglieOldStyle->  printMe();
        echo "<br>-----------------------<br><br>";
        echo "Pantaloni: <br>";
        echo "Jeans: <br>";
        echo $jeans-> printMe();
        echo "Pantalone: <br>";
        echo $pantalone-> printMe();

    ?>
</head>
<body>
    
</body>
</html>