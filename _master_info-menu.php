        <div class="rightloginform">
        <?php 
            if(isset($_SESSION["loggedin"])) 
            { 
                if($_SESSION["loggedin"]=="ok");
                {
            ?>
            <form>
            <input class="button" type="button" value="Logout" onClick="window.location.href='logout_doit.php';" />
            <p />
            </form>

        <?php }} else { ?>

            <form name="loginform" action="login_doit.php" onSubmit="return loginFormCheck()" onSubmit="return formCheck()" enctype="multipart/form-data" method="post">
            Employee Code: <input type="text" name="employeecode" id="employeecode" size="7" maxlength="7" />
            <p />
            Password: <input type="password" name="password" id="password" size="7" maxlength="7" />
            <p />
            <input type="submit" class="button" value="Login" onClick="javascript:hashing()" />
            <input class="button" type="reset" value="Reset" />
            <p />
            </form>

        <?php } ?>
        </div>
        
        <?php if(isset($_SESSION["loggedin"])) {  if($_SESSION["loggedin"]=="ok"); { ?>
        
        <div class="rightmenuitem">Right button 1</div>
        <div class="rightmenuitem">Right button 2</div>
        <div class="rightmenuitem">Right button 3</div>

        <?php }} ?>
