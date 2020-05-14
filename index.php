<?php

$user_text = "";
$sorted_text = "";

require "functions/sorter.php";

if ($_SERVER["REQUEST_METHOD"] === "POST")
{
    $user_text = trim($_POST["user-text"]);
    if (strlen($user_text) > 0 && $user_text != " "){

    $sorted_text = sort_string($_POST["user-text"]);
    ?>
    <style type="text/css">
    #sorted-text {
        visibility: visible!important;
        }</style>
        <?php
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>SubString-Sorter</title>
        <link rel="stylesheet" type="text/css" media="screen" href="css/styles.css" />
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/93f7e3b0db.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="yellow">
  <path  fill="#ffe0ac" d="M36.8,-49.7C48.3,-42.3,58.8,-32.4,66.8,-19C74.8,-5.7,80.4,11.1,77.6,27C74.9,42.8,63.8,57.6,49.4,68.7C35.1,79.8,17.6,87.1,2.9,83C-11.7,79,-23.4,63.7,-35.8,52C-48.1,40.3,-61.1,32.2,-66.6,20.4C-72,8.7,-69.9,-6.7,-63.5,-18.9C-57.1,-31.1,-46.5,-40.2,-35.1,-47.7C-23.8,-55.2,-11.9,-61.3,0.4,-61.7C12.6,-62.2,25.3,-57.2,36.8,-49.7Z" transform="translate(100 100)" />
</svg>
<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="pink">
  <path fill="#ffacb7" d="M23.2,-29C30.3,-21.7,36.4,-14.6,38,-6.6C39.5,1.5,36.5,10.4,32.6,20.4C28.7,30.4,23.9,41.5,13.9,50.4C3.9,59.4,-11.4,66.3,-24.6,63.3C-37.9,60.4,-49.1,47.6,-57.3,33.2C-65.4,18.8,-70.5,2.7,-62,-4.9C-53.5,-12.6,-31.4,-11.9,-18.9,-18.3C-6.3,-24.6,-3.1,-38,2.5,-41C8.1,-43.9,16.1,-36.4,23.2,-29Z" transform="translate(100 100)" />
</svg>
<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="blue">
  <path fill="#6886c5" d="M50.6,-70.3C64.1,-60,72.3,-43.1,72.8,-27C73.4,-11,66.4,4.1,62,21C57.7,37.8,56.1,56.4,46.2,61.2C36.3,66,18.2,56.9,0.5,56.2C-17.1,55.4,-34.1,62.9,-49.9,60.1C-65.7,57.2,-80.1,44,-86.4,27.4C-92.6,10.9,-90.6,-8.9,-83.7,-26.3C-76.8,-43.6,-65,-58.4,-50.2,-68.3C-35.5,-78.2,-17.7,-83.2,0.4,-83.8C18.6,-84.4,37.2,-80.6,50.6,-70.3Z" transform="translate(100 100)" />
</svg>
<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="grey">
  <path fill="#dadada" d="M43.8,-68.4C49,-56.5,40.1,-33.3,45,-15.3C49.9,2.7,68.6,15.5,73.1,30.7C77.7,45.8,68.2,63.3,53.7,68.1C39.1,72.8,19.6,64.8,2.4,61.6C-14.8,58.3,-29.7,59.8,-39.8,53.6C-50,47.4,-55.5,33.6,-62.9,18.6C-70.3,3.6,-79.6,-12.6,-72.6,-20.3C-65.5,-27.9,-42.2,-27,-27.4,-35.7C-12.6,-44.5,-6.3,-63,6.5,-71.9C19.3,-80.9,38.6,-80.3,43.8,-68.4Z" transform="translate(100 100)" />
</svg>
        <h1>sub-string sorter</h1>
        <br />
        <h3>Enter a body of text in the textarea below and click submit.
            A new textarea will show a copy of the string with each substring sorted alphabetically.</h3>
        <form method="post">
        <textarea autofocus required name="user-text" rows="10" maxlength="1000" placeholder="place some text to be sorted..."><?=$user_text?></textarea>
        <button type="submit">SUBMIT</button>
        </form>
        <textarea id="sorted-text" name="sorted-text" rows="10"><?=$sorted_text?></textarea>

        <footer>
            <a href="https://github.com/HJEC" target="_blank">Henry J. E. Crookes - 2020</a>
            <a href="https://linkedin.com/in/henry-crookes" target="_blank">
            <i class="fab fa-linkedin"></i></a>
            <a href="https://github.com/HJEC" target="_blank">
            <i class="fab fa-github"></i></a>
            <a href="https://www.instagram.com/hjec.dev/" target="_blank">
            <i class="fab fa-instagram"></i></a>
        </footer>
    </body>
</html>
