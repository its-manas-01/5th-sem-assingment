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
            $year = $_POST['year'];
            if (($year % 4 == 0) && ($year % 100!= 0) || ($year % 400 == 0)) {
                echo "$year is a leap year.";
            } else {
                echo "$year is not a leap year.";
            }
       ?>
    </div>
    <a href="http://localhost/php/"><button>exit</button></a>
    <a href="Leap.html"><button>next</button></a>
</body>
</html>