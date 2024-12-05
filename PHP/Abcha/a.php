<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $first = $_POST['number1'];
        $last = $_POST['number2'];
        $sign = $_POST['sign'];
        $result = 0;
        switch ($sign) {
            case '+':
                $result = $first + $last;
                break;
            case '-':
                $result = $first - $last;
                break;
            case '*':
                $result = $first * $last;
                break;
            case '/':
                if ($last == 0) {
                    echo 'Error: Division by zero';
                    exit;
                }
                $result = $first / $last;
                break;
            default:
                echo 'Error: Invalid operator';
                exit;
        }
    ?>
    <a href="end.js"><button type="close">exit</button></a>
    <a href="index.html"><button>next</button></a>
</body>
</html>