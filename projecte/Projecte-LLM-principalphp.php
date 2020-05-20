<?
$server = "localhost";
$user = "root";
$pw = "";
$db = "projectellm";

$connect=mysqli_connect($server, $user, $pw, $db);

if( !$connect)
{

    die("ERROR: No s'ha pogut conectar amb la base de dades $db en el server $server
        fernt servir el nom $user ( ".mysqli_connect_errno().
        ", ".mysqli_connect_error().")");
}

$email = $_GET["email"];
$contra = $_GET["password"];


$userquery = "SELECT usuari.correu, usuari.contrasenya FROM usuari WHERE usuari.correu = "$email" and usuari.contrasenya = "$contra"";


$result = mysqli_query($connect, $userquery);

if ( $result == true )
{
    echo "Mal"
}else{
    echo "Bé"
}
?>