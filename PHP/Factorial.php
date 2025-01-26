<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="border">
        <?php
            $numb = $number = $_POST['num'];
            $factorial=1;
            while ($number!=0)
            {
                $factorial = $factorial * $number;
                $number--;
            }
            echo "Factorial of $numb is $factorial";
        ?>
    </div>
    <a href="http://localhost/php/"><button>EXIT</button></a>
    <a href="Factorial.html"><button>NEXT</button></a>
</body>
</html>