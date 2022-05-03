<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <?php 

    /*
    Descrizione: 
    Creare una variabile con un paragrafo di testo a vostra scelta.
    Stampare a schermo il paragrafo e la sua lunghezza.
    Una parola da censurare viene passata dall'utente tramite parametro GET.
    Stampare di nuovo il paragrafo e la sua lunghezza, 
    dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
    */

    $testo = 'Il mio primo approccio con il back-end!';

    $parolaDaCensurare = $_GET['badword'];

    $testoCensurato = str_replace($parolaDaCensurare, '***', $testo);

    ?>

    <!-- frase e lunghezza iniziali -->
    <h2>Frase iniziale: </h2>
    <p>
        <b>
            <?php echo $testo ?>
        </b>
    </p>
    <p>
        La sua lunghezza è: <?php echo strlen($testo) ?>
    </p>

    <!-- frase e lunghezza modificati -->
    <h2>Frase modificata: </h2>
    <p>
        <b>
            <?php echo $testoCensurato ?>
        </b>
    </p>
    <p>
        La sua lunghezza è: <?php echo strlen($testoCensurato) ?>
    </p>

</body>
</html>


