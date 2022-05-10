<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Екстрасенс</title>
</head>
<body>
    <div class="main">
        <?php
            echo "<form action='from10.php' method='POST'>";
                session_start();
                $count = 0;
                $_SESSION['count'] = $count;
                $start = 1;
                $_SESSION['start'] = $start;
                $finish = $start + 9;
                $_SESSION['finish'] = $finish;
                $riddle = rand(1,100);
                $_SESSION['riddle'] = $riddle;
                $dis = ['dis','dis','dis'];
                $_SESSION['dis'] = $dis;
                $_SESSION['times'] = 100;
                var_dump($_SESSION['riddle']);
                echo "
                    <div>
                        <p>В якому діапазоні знаходитсь правильне число?</p>
                        <label class='cool-select'>
                            <select class='select' name='option'>
                ";
                for ($input = 1;$input <= 100;$input += 10) {
                    $second = $input + 9;
                    echo "<option value='$input'>$input - $second</option>";
        
                }
                echo "
                            </select>
                        </label>
                        <input class='submit' type='submit' value='Вибрати число'>
                    </div>
                    <img src='img/ball.png' alt='magic_ball'>               
                ";
            echo "</form>";
        ?>
    </div>
</body>
</html>
