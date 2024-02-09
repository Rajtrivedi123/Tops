<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>

    <form method="post" action="">
        <label for="num1">Number 1:</label>
        <input type="number" name="num1" required><br><br>
        
        <label for="num2">Number 2:</label>
        <input type="number" name="num2" required><br><br>
       
        <input type="submit" name="operator" value="+">
        <input type="submit" name="operator" value="-">
        <input type="submit" name="operator" value="*">
        <input type="submit" name="operator" value="/">
        
        <br><br>
        <label for="result">Answer :</label>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operator = $_POST["operator"];

            if (is_numeric($num1) && is_numeric($num2)) {
                switch ($operator) {
                    case "+":
                        $result = $num1 + $num2;
                        break;
                    case "-":
                        $result = $num1 - $num2;
                        break;
                    case "*":
                        $result = $num1 * $num2;
                        break;
                    case "/":
                        if ($num2 != 0) {
                            $result = $num1 / $num2;
                        } else {
                            echo "Cannot Divide by zero";
                            exit;
                        }
                        break;
                    default:
                        echo "Invalid operator.";
                        exit;
                }

                echo $result;
            } 
        }
        ?>
    </form>

</body>
</html>
