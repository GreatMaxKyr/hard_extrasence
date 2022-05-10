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
            echo "<form action='morl.php' method='POST'>";
                session_start();
                $finish = $_SESSION['finish'];
                $start = $_SESSION['start'];
                $count = $_SESSION['count'];
                $option = $_POST['option'];
                $_SESSION['option'] = $option;
                $riddle = $_SESSION['riddle'];
                $dis = $_SESSION['dis'];               
                $middle = $start + 4;
                if ($option == $riddle){
                    header('Location: end.php');
                }elseif ($option != $riddle) {
                    $_SESSION['times'] -= 25;
                }
                echo "<p class='no'>На жаль ви не вгадали загадане число</p>";
                echo "<p>Ось п'ять чисел, одне з них - правильне</p>";
                if ($middle < $riddle) {
                    $start = $middle + 1;
                    $_SESSION['start'] = $start;
                }elseif ($middle  >= $riddle){
                    $finish = $middle;
                    $_SESSION['finish'] = $finish;
                }
                echo "
                    <div>
                        <label class='cool-select'>
                            <select class='select' name='option'>
                ";
                for ($count = $start;$count <= $finish;$count ++) {
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