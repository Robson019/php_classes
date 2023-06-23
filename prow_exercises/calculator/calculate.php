<?php session_start();?>

<?php
    $operation = $_REQUEST["operation"];
    $v1 = $_REQUEST["first_value"];
    $v2 = $_REQUEST["second_value"];

    $result = 0;

    switch ($operation) {
        case "sum":
            $result = sum($v1, $v2);
            break;
        case "subtration":
            $result = sub($v1, $v2);
            break;
        case "multiplication":
            $result = mult($v1, $v2);
            break;      
        case "division":
            $result = div($v1, $v2);
            break;
        default:
            $result = "[ERRO] Opção inválida";
            break;
    }

    function sum($v1, $v2) {
        return $v1+$v2;
    }

    function sub($v1, $v2) {
        return $v1-$v2;
    }

    function mult($v1, $v2) {
        return $v1*$v2;
    }

    function div($v1, $v2) {
        if ($v2 != 0) {
            return $v1/$v2;
        }
        return "[ERRO] Divisão inválida";
    }

    $_SESSION["resp"] = $result;

    header("Location: calculator.php");
    exit;
?>