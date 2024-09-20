<html><head>
    <title>getReceive.php</title>
</head><body>
<h1>Hallo <?php echo $_GET["var"];?></h1>
<?php
$auswahl =  $_POST["genre"];
echo "<p>Für die Kategorie <strong>" . $auswahl . "</strong> empfehlen wir folgende Band/ Künstler:</p>";
echo "<p><strong>";
if ($auswahl == "elektro"){
    echo "Tycho";
}
else if($auswahl == "rock"){
    echo "Rammstein";
}
else if($auswahl == "klassik"){
    echo "Ludwig v. Beethoven";
}
else if($auswahl == "pop"){
    echo "White Lies";
}
echo "</strong></p>";
?>


</body></html>
