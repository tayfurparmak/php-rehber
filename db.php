<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

function Add($ad, $telefon)
{
  global $conn;
  $sql = "INSERT INTO rehber (ad, telefon) VALUES ('$ad', '$telefon')";
  $conn->query($sql);
}

function Delete($id)
{
  global $conn;
  $sql = "DELETE FROM rehber WHERE id = '$id'";
  $conn->query($sql);
}

function Update($id, $ad, $telefon)
{
  global $conn;
  $sql = "UPDATE rehber SET ad = '$ad', telefon = '$telefon' WHERE id = '$id'";
  $conn->query($sql);
}

function GetAll()
{
  global $conn;
  $sql = "SELECT id, ad, telefon FROM rehber";
  $result = $conn->query($sql);
  return $result;
}

function Get($id)
{
  global $conn;
  $sql = "SELECT id, ad, telefon FROM rehber WHERE id = '$id'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      return $row;
    }
  }
}
