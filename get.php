<html><head>
    <title>get.php</title>
</head><body>

<h1>Aus welchem Genre möchtes Du einen Band/ Künstler Vorschlag?</h1>

<?php
$name = $_POST["name"];
echo "<form action='getReceive.php?var=$name' method='POST'>";
?>

<input type="radio" name="genre" value="elektro"> Elektro<br>
<input type="radio" name="genre" value="rock"> Rock<br>
<input type="radio" name="genre" value="klassik"> Klassik<br>
<input type="radio" name="genre" value="pop"> Pop<br>



<input type="submit" name="submit" >
</form>

</body></html>

