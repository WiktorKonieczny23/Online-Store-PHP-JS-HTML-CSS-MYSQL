<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vanguard Tech</title>
    <link rel="shortcut icon" href="logo.png">
    <link rel="stylesheet" href="css2.css">
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
<section id="kategorie">
<form action="index.php" method="post">
<input type="text" name="wyszukiwarka"><input type="submit" value="WYSZUKAJ">
</form>

</section>
<section id="produkty">
<table>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'vanguardtech');
if(isset($_POST['wyszukiwarka'])){
    $tresc=$_POST['wyszukiwarka'];

$sql = "SELECT * FROM produkty WHERE marka LIKE '$tresc'or kategoria LIKE '$tresc' or model LIKE '$tresc'";
$result=$conn->query($sql);
foreach($result as $row){
    echo "<tr><td>".$row['marka']."</td><td>".$row['model']."</td><td>".$row['cena']."PLN</td><td>".'<img src="data:image/jpeg;base64,'.base64_encode( $row['foto'] ).'" width="200" height="230"/>'."</td></tr>";
}
}
$conn = mysqli_connect('localhost', 'root', '', 'vanguardtech');
if(empty($_POST['wyszukiwarka'])){
    $sql = "SELECT * FROM produkty";
$result=$conn->query($sql);
foreach($result as $row){
    echo "<tr><td>".$row['marka']."</td><td>".$row['model']."</td><td>".$row['cena']."PLN</td><td>".'<img src="data:image/jpeg;base64,'.base64_encode( $row['foto'] ).'" width="200" height="230"/>'."</td><td>"."<a href='koszyk.php'><img src='koszyk2.png' width='100' height='100' id='koszykfoto'></a>";
}
}
mysqli_close($conn);
?>
</table>
</section>
</main>
<footer>
<br>
Vanguard Tech sp. z o.o.<br>
+48 508 342 416<br>
biuro@vtech.pl<br>
Technologiczna 7, Szczecin 70-773
</footer>
</body>
</html>