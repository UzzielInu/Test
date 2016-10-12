<!DOCTYPE html>
<html>
<body>

<?php
$t = date(" D"." d"." F"." Y");
echo "<p>The hour (of the server) is " . $t; 
echo ", and will give the following message:</p>";

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}

?>
<br>
<?php
echo $_POST['Opcion1']."<br>";
echo $_POST['Opcion2']."<br>";
echo $_POST['Opcion3']."<br>";
?>

 
</body>
</html>