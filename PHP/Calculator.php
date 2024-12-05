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
            $first = $_POST['first'];
            $sign = $_POST['sign'];
            $last = $_POST['last'];
            switch ($sign):
                case '+' :
                    $result = $first + $last;
                    echo "$result";
                    break;
                case '-' :
                    $result = $first - $last;
                    echo "$result";
                    break;
                case '*' :
                    $result = $first * $last;
                    echo "$result";
                    break;
                case '/' :
                    if ($last == 0) {
                        echo 'Error: Division by zero';
                        exit;
                    }
                    $result = $first / $last;
                    echo "$result";
                    break;
                case '%' :
                    if ($last == 0) {
                        echo 'Error: Division by zero';
                        exit;
                    }
                    $result1 = $first % $last;
                    $result2 = floor($first / $last);
                    echo "Renimder is :-$result1 and Quotientis :-$result2";
                    break;
                case '^' :
                    $result = pow($first, $last);
                    echo "$result";
                    break;
                case '//' :
                    if ($last == 0) {
                        echo 'Error: Division by zero';
                        exit;
                    }
                    $result = floor($first / $last);
                    echo "$result";
                    break;
                default :
                    echo 'Error: Invalid operator';
                    exit;
            endswitch;
        ?>
    </div>
    <a href="http://localhost/php/"><button>exit</button></a>
    <a href="Calculator.html"><button>next</button></a>
</body>
</html>
