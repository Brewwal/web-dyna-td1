<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Exo 2</title>
</head>
<body>


<?php
$size = $_GET["size"];
$color = $_GET["color"];
$message = $_GET["message"];
?>


<form method="GET">
    <label for="size">Size : </label>
    <input type="number" value="12" name="size" id="size">
    <label for="Color">Color : </label>
    <input type="color" id="color" onchange="clickColor(0, -1, -1, 5)" value="#00000" name="color">
	<label for="Color">Message : </label>
	<input type="string" value="" name="message" id="message">
	<input type="submit" value="Valider">
	
</form>



<a href="/web-dyna-td1/td1/ex2.php?color=red&message=hello&size=15">Afficher Hello en rouge</a>
<a href="/web-dyna-td1/td1/ex2.php?color=green&message=hello&size=30">Afficher Hello en vert</a>
<a href="/web-dyna-td1/td1/ex2.php?color=blue&message=hello&size=50">Afficher Hello en bleu</a>

<div style=
"font-size : <?php echo $size; ?>px; color : <?php echo $color; ?>"
> 
<?php echo $message ?>
</div>


</body>
</html>