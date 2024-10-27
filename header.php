<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Lorem, ipsum.</h1>
    </header>
    <?php
include "nav.php";
//include "params.php";
/* змінні $user и $today задані у файлі params.php*/
$condition_admin = false;
if ($condition_admin) {
    include ("admin.php");
} else {
    include ("params.php");
}
$str = <<<EOD
     <p class="user">Привіт, $user! Сьогодні $today </p>
EOD;
// echo '<p class="user">';
// echo "Привіт, $user!\n"; // виведе "Привіт, Василь!"
// echo "Сьогодні $today";
// echo "</p>";
echo $str;
?>