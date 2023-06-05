<?php
error_reporting(0);
require_once("functions.php");

if($_POST){
    Kaydet($_POST["ad"], $_POST["telefon"]);
    echo "<div>Kayıt başarılı!</div>";
}
?>

<?php
if ($_GET["ad"] && $_GET["telefon"]){
    // print_r($_GET["ad"].$_GET["telefon"]);
    Sil($_GET["ad"], $_GET["telefon"]);
    echo "<div>Kayıt silindi!</div>";
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
    if($telefon){
        echo "<div>$ad: $telefon <a onclick='return confirm(`Emin misiniz?`)' href='./?ad=$ad&telefon=$telefon'>Sil</a></div>";
    }
}
?>
