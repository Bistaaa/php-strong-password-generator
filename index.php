<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <?php // include "functions.php"; ?>

    <style>
        body{
            background-color: rgba(0,22,50,255);
        }

        h1{
            color: rgba(113,132,150,255);
            text-align: center;
        }

        h2{
            color: white;
            text-align: center;
        }

        .form-container{
            background-color: white;
            padding: 50px;
            border-radius: 30px;
        }

        #avvia{
            color: white;
            background-color: rgba(8,107,253,255);
        }

        #inputs{
            margin-top: 300px;
        }
    </style>

</head>

<?php
    $lettersMin = range("a", "z" );
    $lettersCap = range("A", "Z" );
    $numbers = range("1", "9" );
    $symbols = [
                ...range("!", "/"),
                ...range(":", "@"),
                ...range("[", "'"),
                ...range("{", "~"),     
                ];

    $final = [...$lettersMin, ...$lettersCap, ...$numbers, ...$symbols ];
           
    $lenght = $_GET["lenght"];

    $res = "";
    for($x=0; $x<$lenght;$x++) {
        
        $rndInd = rand(0, count($final) - 1);
        $rdnChr = $final[$rdnInd];
        $res .= $rdnChr;

    }

    var_dump($res)
?>


<body class="container my-3">

    <h1>Strong Password Generator</h1>
    <h2>Genera una password sicura</h2>
    

    <form>
        <div class="row form-container">
            <div class="col d-flex flex-column" id="left-column">
                <label for="lenght">Lunghezza Password</label>
                <label for="mail">Consenti ripetizioni di uno o più caratteri</label>
                <div id="inputs">
                    <input type="submit" value="Invia" id="avvia">
                    <input type="submit" value="Annulla" id="annulla">
                </div>
            </div>
            <div class="col d-flex flex-column" id="right-column">
                <input type="number" name="lenght" id="lenght" value="<?php echo $_GET['lenght']; ?>">
                <div id="radio-container">
                    <input type="radio" id="ripetizioni_si" name="parking" value="yes">
                    <label for="ripetizioni_si">Si</label>
                    <input type="radio" id="ripetizioni_no" name="parking" value="no">
                    <label for="ripetizioni_no">No</label>
                </div>
                <div id="checkbox-container">
                    <input type="checkbox" id="lettere" name="lettere">
                    <label for="parking_yes">Lettere</label>
                    <input type="checkbox" id="numeri" name="numeri">
                    <label for="parking_yes">Numeri</label>
                    <input type="checkbox" id="simboli" name="simboli">
                    <label for="parking_yes">Simboli</label>
                </div>
            </div>
        </div>
    </form>    
</body>
</html>