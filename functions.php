<?php
function Kaydet($ad, $telefon)
{
    if (!file_exists("dosya.txt")) {
        touch("dosya.txt");
    }
    $myfile = fopen("dosya.txt", "a") or die("Unable to open file!");
    $txt = $ad . "|" . $telefon;
    fwrite($myfile, $txt . "\n");
    fclose($myfile);
}

function Sil($ad, $telefon)
{
    $satirlar = Oku();
    $yeni_kayitlar = array();
    foreach ($satirlar as $satir) {
        $parcala = explode("|", $satir);
        $_ad = trim($parcala[0]);
        $_telefon = trim($parcala[1]);
        if (
            $_ad == $ad &&
            $_telefon == $telefon
        ) {
            continue;
        }
        $yeni_kayitlar[] = $_ad . "|" . $_telefon;
    }
    if (!file_exists("dosya.txt")) {
        touch("dosya.txt");
    }
    $myfile = fopen("dosya.txt", "w") or die("Unable to open file!");
    $txt = implode("\n", $yeni_kayitlar);
    fwrite($myfile, $txt . "\n");
    fclose($myfile);
}

function Oku()
{
    $myfile = fopen("dosya.txt", "r") or die("Unable to open file!");
    $dosya = fread($myfile, filesize("dosya.txt"));
    fclose($myfile);
    $satirlar = explode("\n", $dosya);
    return $satirlar;
}
