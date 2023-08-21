<?php   

    $paragraph = $_GET['paragraph'];
    $censorWord = $_GET['censorship'];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Badwords</title>
    </head>
    <body>
        <main>

            <h1>Censor 2000</h1>

            <form action="risultato.php" method="get">
                <textarea name="paragraph" id="" rows="4" cols="50"></textarea>
                <br>
                <input type="text" name="censorship" id="">
                <button>Apply censorship</button>
            </form>
            
        </main>
        
    </body>
</html>