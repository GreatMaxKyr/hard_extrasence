<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="main">
        <?php
        
            echo "<form action='5v5.php' method='POST'>";
            session_start();
            
            $finish = $_SESSION['finish'];
            $start = $_SESSION['start'];
            $option = $_POST['option'];
            $riddle = $_SESSION['riddle'];
            $number = $_SESSION['number'];
            $dis = $_SESSION['dis'];
            var_dump($riddle);
            $_SESSION['option'] = $option;
            while ($start <= $riddle){
                $start += 10;
            }
            $start -= 10;
            $_SESSION['start'] = $start;
            if ($option == $start){
                $_SESSION['count']++;
                echo "<p class='ye'>Ви вгадали діапазон</p>";
            }else {
                echo "<p class='no'>На жаль ви не вгадали діапазон</p>";
                $_SESSION['times'] -= 25;
            }
            echo "
                <p>Тепер спробуйте вгадати правильне число :)</p>
                <input type='hidden' name='start' value='$start'>
            ";
            $finish = $start + 9;
            $_SESSION['finish'] = $finish;
            echo "
                    <div>
                        <label class='cool-select'>
                            <select class='select' name='option'>
                ";
            for ($ten = $start; $ten <= $finish; $ten++) {//виводить всі числа правильного діапозона
                echo "<option value='$ten'>$ten</option>";
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