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

    ?>

    <!-- frase e lunghezza iniziali -->
    <h1>Frase iniziale: </h1>
    <p>
        <b>
            <?php echo $testo ?>
        </b>
    </p>
    <p>
        La sua lunghezza è: <?php echo strlen($testo) ?>
    </p>

</body>
</html>


