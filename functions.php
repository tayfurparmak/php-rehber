<?php
function Kaydet($ad, $telefon) {
    if (!file_exists("dosya.txt")) {
        touch("dosya.txt");
    }
    $myfile = fopen("dosya.txt", "a") or die("Unable to open file!");
    $txt = $ad."|".$telefon;
    fwrite($myfile, $txt."\n");
    fclose($myfile);
}

function Sil(){

}

function Oku(){
    $myfile = fopen("dosya.txt", "r") or die("Unable to open file!");
    $dosya = fread($myfile,filesize("dosya.txt"));
    fclose($myfile);

    $satirlar = explode("\n", $dosya);
    return $satirlar;
}