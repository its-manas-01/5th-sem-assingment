
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
            $number1 = $_POST['1st'];
            $number2 = $_POST['2nd'];
            $number3 = $_POST['3rd'];

            $maximum = max($number1,$number2,$number3);
            echo "The maximum is :-$maximum" ;
        ?>
    </div>
    <a href="http://localhost/php/"><button>exit</button></a>
    <a href="max.html"><button>next</button></a>
</body>
</html>