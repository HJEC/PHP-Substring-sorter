<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$returned = "";

require_once "functions/sorter.php";

if ($_SERVER["REQUEST_METHOD"] === "POST")
{
    $returned = sort_String($_POST["user-text"]);
    ?>
    <style type="text/css">
    #sorted-text {
        visibility: visible!important;
        }</style>
        <?php
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>SubString-Sorter</title>
        <link rel="stylesheet" type="text/css" media="screen" href="css/styles.css" />
    </head>
    <body>
        <h1>sub-string sorter</h1>
        <br />
        <h3>Enter a body of text in the textarea below and click submit.
            A new textarea will show a copy of the string with each substring sorted alphabetically.</h3>
        <form action="" method="post">
        <textarea autofocus required name="user-text" rows="10" maxlength="1000" placeholder="place some text to be sorted..."></textarea>
        <button type="submit">SUBMIT</button>
        <textarea id="sorted-text" name="sorted-text" rows="10"><?=$returned?></textarea>
        </form>
    </body>
</html>
