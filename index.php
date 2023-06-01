<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vanguard Tech</title>
    <link rel="shortcut icon" href="logo.png">
    <link rel="stylesheet" href="ceeses.css">
</head>
<body>
<header>
<!--slider z promocjami -->
<img src="logo.png" alt="logo" id="logo">
<script type="text/javascript">
        window.onload = zmiana;
        var nr = 0;
        function zmiana() {
        var obrazy = ["s1.png", "s2.png", "s3.png"];
        nr++;
        if (nr == obrazy.length) {
        nr = 0;
        }
        document.getElementById('baner').src = obrazy[nr];
        setTimeout(zmiana, 5000);
        }
</script>
<img src="1.jpg" alt="baner" id="baner">
</header>
<main>
<section id="wyszukiwanie">
<!--Wyszukiwarka-->
<form method="post">
<input type="text" id="wyszukiwarka">
</form>
</section>
<section id="filtry">

</section>
<section id="produkty">
<table>
<?php

?>
</table>
</section>
</main>
<footer>
Vanguard Tech sp. z o.o.<br>
+48 508 342 416<br>
biuro@vtech.pl<br>
Technologiczna 7, Szczecin 70-773
</footer>
</body>
</html>