<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX01 - Fibonacci</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>SEQUÊNCIA DE FIBONACCI</h1>
    <img src="images/galaxy.png" alt="galaxia fibonacci">
    <div>
        <p>
            <?php
                $prev_value = 0;
                $actual_value = 1;
                $repeat = 50;
                    for ($i = 0; $i < $repeat; $i++) {
        
                        if ($i == 0) {
                            echo "0, ";
                        }
        
                        if ($i != $repeat - 1) {
                            echo $actual_value .", ";
                        } else {
                            echo $actual_value ."...";
                        }
        
                        $aux_var = $actual_value;
                        $actual_value += $prev_value;
                        $prev_value = $aux_var;
                    }
            ?>
        </p>
    </div>
</body>
</html>


