<div>
    <h2>Please login</h2>

    <p style="color:red;font-weight:bold;"><?php $msg = "Either your email or password is missing. Try again"; echo($msg) ; ?></p>
    <!--START FORM-->
    <FORM  ACTION="<?php echo("login.php");?>"  METHOD="POST" name="form"/>
    <!--START LOGIN TABLE -->
        <table  class="backgrounds" width="21%" border="1"  cellpadding="1" cellspacing="2">
        <tr>
        <td>Email:</td>
        <td><input type="text" name="email" size="25" maxlength="40" CLASS="shadeform"/></td>
        </tr>
        <tr>
        <td>Password:</td>
        <td><input type="text" name="password" size="25" maxlength="40" CLASS="shadeform"/></td>
        </tr>
        <tr>
        <td colspan="2">
        <div align="center">
        <input type="hidden" name="flag" value="true" />
        <input type="hidden" name="gotoPage" value="<?php echo($page);?>" />
        <input type="submit" name="submit" value="     Login    "/>
        </div>
        </td>
        </tr>
        </table>
    <!--END TABLE -->
    </FORM>
    <!--END FORM -->
</div>

