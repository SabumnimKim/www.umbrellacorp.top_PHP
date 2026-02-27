<?php include("_security.php") ?>     
<?php include("_config.php") ?>     
<?php include("_globals.php") ?>     

<?php 
// ----- Locals: ------

?>

<?php include("_master_head.php") ?>     
<div class="grid-container">

    <!---- GRID ROW 1 START ------------------------------------------>
    <div class="grid-emptyblack" ></div>
    <div class="grid-header">
        <?php include("_master_header.php") ?>     
    </div>
    <div class="grid-emptyblack"></div>
    <!---- GRID ROW 1 END --------------------------------------------->

    <!---- GRID ROW 2 START ------------------------------------------->

        <?php include("_master_breadcrum.php") ?>  

    <!---- GRID ROW 2 END --------------------------------------------->

    <!---- GRID ROW 3 START ------------------------------------------->
    <div class="grid-topmenu">
        <?php include("_master_menu.php") ?>
    </div>
    <!---- GRID ROW 3 END -------------------------------------------->

    <!---- GRID ROW 4 START ------------------------------------------>
    <div class="grid-empty"></div>
    <div class="grid-main">
    <div class="main">

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
    // SKAPA SESSIONERNA
    $_SESSION["loggedin"] = "ok";
    $_SESSION["employeecode"] = $employeecode;

    ?>
        SUCCESS
    <?php
}
else 
{
    ?>
        SOMETHING WENT WRONG
    <?php
}
?>


    </div>
    </div>
    <div class="grid-rightmenu">        
        <?php include("_master_info-menu.php") ?>
    </div>
    <div class="grid-empty"></div>
    <!---- GRID ROW 4 END --------------------------------------------->

    <div class="grid-emptyblack" ></div>
    <div class="grid-footer">
        <?php include("_master_footer.php") ?>
    </div>
    <div class="grid-emptyblack"></div>

</div>

<?php include("_master_bottom.php") ?>

