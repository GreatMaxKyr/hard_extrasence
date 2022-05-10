<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class=''>
    <div class="main">
        <?php
            echo "
                <form action='morl.php' method='POST'>
            ";
            session_start();
            $option = $_SESSION['option'];
            $riddle = $_SESSION['riddle'];
            $times = $_SESSION['times'];
            var_dump($_SESSION['times']);
            if ($option == $riddle) {
                echo "
                    <div class='win'>
                    <p class='ye'>YOU WIN!:D</p>
                ";
                bar ($times);                
                echo "
                    </div>
                ";
            }elseif ($option != $riddle) {
                echo "
                    <p class='no'>YOU LOSE :(</p>
                ";
                $times -= 25;
                bar ($times); 
            }
            function bar ($times) {
                echo "
                        <p class='rorno'>Ви екстрасенс на:</p>
                ";
                if ($times == 100){
                    echo"<div class='bar'><img src='img/100.png' alt='100%'></div>";
                }elseif ($times == 75){
                    echo"<div class='bar'><img src='img/75.png' alt='75%'></div>";
                }elseif ($times == 50){
                    echo"<div class='bar'><img src='img/50.png' alt='50%'></div>";
                }elseif ($times == 25){
                    echo"<div class='bar'><img src='img/25.png' alt='25%'></div>";
                }elseif ($times == 0){
                    echo"<div class='bar'><img src='img/0.png' alt='0%'></div>";
                }
                echo "<div class='img'><img src='img/ball.png' alt='magic_ball'></div>";
            }
            echo "
                </form>           
            ";
        ?>
    </div>
</body>
</html>