<?php include("_security.php") ?>     
<?php include("_config.php") ?>     
<?php include("_globals.php") ?>     

<?php
$employeecode = $_POST["employeecode"];
$password = $_POST["password"];
$loggedin="no";
$lockout="";

if($result = mysqli_query($conn, "SELECT * FROM users WHERE employeecode='$employeecode' AND passwd='$password'"))
{
    while($row = mysqli_fetch_assoc($result)) 
    {
        $id = $row["id"];
        $logintimes =$row["logintimes"];
        $lastlogin =$row["lastlogin"];
        $lockout = $row["lockout"];
        $loggedin="ok";
    }
}

// INLOGGNINGEN LYCKADES
if($loggedin=="ok" && $lockout!="x")
{
    echo "SUCCESS";
}
else 
{
    echo "UNSUCCESS";
}

?>