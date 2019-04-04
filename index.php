<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        .calculate {
            padding: 20px;
        }

        input[type=text] {
            width: 50px;
            padding: 5px 6px 5px;
        }

        form {
            border: 5px;
        }
    </style>
</head>
<body>
<form method="post">
    <div class="calculate">
        <input type="text" name="InventMentAmount">
        <input type="text" name="YearlyInterestRate">
        <input type="text" name="numberofyears">
        <input type="submit" value="calculate">
    </div>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $InventMent = $_POST["InventMentAmount"];
    $yearly = $_POST["YearlyInterestRate"];
    $numberofyear = $_POST["numberofyears"];
    $calculate = $InventMent ;
    while ($_POST["numberofyears"] > 0) {
        $calculate = $calculate * (1 + $yearly);
        $_POST["numberofyears"]--;
    }
    echo $calculate;
}

?>
</body>
</html>