
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

            if ($number % 2 == 0) 
            {
                echo "$number is even.";
            }
            else
            {
                echo "$number is odd.";
            }
        ?>
    </div>
    <a href="http://localhost/php/"><button>EXIT</button></a>
    <a href="even odd.html"><button>NEXT</button></a>
</body>
</html>