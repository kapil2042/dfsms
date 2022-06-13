<html>
<head>
  <meta charset="utf-8">
  <title>DAIRY FARM SHOP MANAGEMENT SYSTEM</title>
<style type="text/css">
  <?php include "all.css" ?>
</style>
</head>
<body id="back">
  <table width="100%" cellpadding="7px">
      <tr>
        <th align="left" style="color:red; font-size: 30px; font-weight: bold; font-family: serif ; text-shadow: 1px 1px white;"><u>WELCOME TO DAIRY FARM SHOP MANAGEMENT SYSTEM</u></th>
        
      </tr>
    </table>
  <div id="login">
  <form action="loginchk.php" method="post">
    <div id="logintbl">
    <fieldset style="border-color: #00802b; border-style: groove;">
    <table width="100%" border="0" cellpadding="3px">
      <tr width="100%">
        <legend><h1 style="color: #00802b; text-shadow: 1px 1px #dcdedd; ">LOGIN</h1></legend>
      	</tr>
      	<tr>
        	<td>
        	<?php
            	if (isset($_GET["err"])) {
              		if($_GET["err"]==1){
                		echo "<caption><b><font color=#b30000>Username or Password Wrong!!</font></b></caption>";
                	}
              	}
           ?>
       		</td>
   		</tr>
      <tr>
        <td align="right" width="45%"><label><b>USER NAME:</b></label></td>
        <td><input type="text" name="unm" id="text" placeholder="User Name or Mobile Number" required></td>
      </tr>
      <tr>
        <td align="right"><label><b>PASSWORD:</b></label></td>
        <td><input type="password" name="pwd" id="text" placeholder="Password" required></td>
      </tr>
      <tr>
        <th align="right"><input type="submit" value="Login" name="login" id="btn" style="background: #0099ff; color: white;"></th>
        <th align="left"><input type="reset" value="Cancle" name="Cancle" id="btn" style="background: ghostwhite;"></th>
      </tr>
      <tr>
		<td></td>
        <td style="margin-right: 20px; text-align: right;"><a href="createAcc.php" style="color: black;"><b>Create Account!</b></a>&nbsp;&nbsp;&nbsp;&nbsp;</td>
      </tr>
    </table>
    </fieldset>
    </div>
  </form>
  </div>
</body>
</html>