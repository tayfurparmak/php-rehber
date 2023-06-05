<?php
error_reporting(0);
require_once("functions.php");

if($_POST){
    Kaydet($_POST["ad"], $_POST["telefon"]);
    echo "<div>Kayıt başarılı!</div>";
}
?>

<form action="." method="post">
    <input type="text" name="ad" placeholder="Ad">
    <input type="text" name="telefon" placeholder="Telefon">
    <input type="submit" value="Kaydet">
</form>

<hr>

<?php
$satirlar = Oku();
foreach($satirlar as $satir){
    $parcala = explode("|", $satir);
    $ad = $parcala[0];
    $telefon = $parcala[1];
    if($telefon){ // if(1 && true && "1",,,,, 0 false "")
        echo "<div>$ad: $telefon <button>Sil</button></div>";
    }
}
?>
