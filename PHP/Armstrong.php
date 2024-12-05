<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="design.css">
</head>
<body>
    <div id="border">
        <?php
            $number = $_POST['number'];
            $original = $number;
            $sum=0;
            while ($number!=0)
            {
                $remainder = $number % 10;
                $sum += pow($remainder,3);
                $number = floor($number / 10);
            }
            if ($sum == $original)
            {
                echo "$original is a Armstrong number.";
            }
            else
            {
                echo "$original is not a Armstrong number.";
            }
        ?>
    </div>
    <a href="http://localhost/php/"><button>EXIT</button></a>
    <a href="Armstrong.html"><button>NEXT</button></a>
</body>
</html>