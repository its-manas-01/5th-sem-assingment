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
            $number4 = $_POST['4th'];
            $number5 = $_POST['5th'];
            $total = $_POST['total'];

            $marks = floor((($number1+$number2+$number3+$number4+$number5)*100)/$total);

            if ($marks>=80)
            {
                echo "Your average marks is :-$marks<br> Grade is :-Merit";
            }
            elseif ($marks>=60)
            {
                echo "Your average marks is :-$marks<br> Grade is :-1st division";
            }
            elseif ($marks>=45)
            {
                echo "Your average marks is :-$marks<br> Grade is :-2nd dvision";
            }
            elseif ($marks>=33)
            {
                echo "Your average marks is :-$marks<br> Grade is :-3rd division";
            }
            else
            {
                echo "Your average marks is :-$marks<br> Grade is :-Fail";
            }
            ?>
    </div>
    <a href="http://localhost/php/"><button>EXIT</button></a>
    <a href="marks.html"><button>NEXT</button></a>
</body>
</html>
