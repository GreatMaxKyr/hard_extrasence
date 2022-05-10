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
            echo "<form action='end.php' method='POST'>";
                session_start();
                $count = $_SESSION['count'];
                $option = $_POST['option'];
                $finish = $_SESSION['finish'];
                $start = $_SESSION['start'];
                $riddle = $_SESSION['riddle'];
                $dis = $_SESSION['dis'];
                $_SESSION['option'] = $option;               
                if ($option == $riddle){
                    header('Location: end.php');
                }elseif ($option > $riddle){
                    echo"<p>Загадане число менше вибраного вами попереднього числа</p>";
                    $_SESSION['times'] -= 25;
                }elseif ($option < $riddle){
                    echo"<p>Загадане число більше вибраного вами попереднього числа</p>";
                    $_SESSION['times'] -= 25;
                }
                echo "
                    <div>
                        <label class='cool-select'>
                            <select class='select' name='option'>
                ";
                for ($count = $start;$count <= $finish;$count++) {
                    echo "<option value='$count'>$count</option>";
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