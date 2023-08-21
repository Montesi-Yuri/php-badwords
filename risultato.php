<?php 

    $paragraph = $_GET['paragraph'];
    $censorWord = $_GET['censorship'];
    $newParagraph = str_replace($censorWord, '***', $paragraph);

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
    
            <h1>
                risultato
            </h1>

            <div>
                <?php 
                    echo 'Your paragraph: ', $paragraph;
                    echo '<br>';
                    echo 'paragraph length = ', strlen($paragraph);

                    echo '<br> ----------------- <br>';

                    echo $newParagraph, '<br>', 'paragraph length = ', strlen($newParagraph);
                ?>
            </div>

            <form action="index.php">
                <button>
                    Go back
                </button>
            </form>
            
        </main>

    </body>
</html>