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
  <div id="crtAcc">
  <form action="addData.php" method="post">
    <div id="createtbl">
    <fieldset style="border-color: palegreen; border-style: groove;">
    <table width="100%" border="0" cellpadding="3px">
      <tr width="100%">
        <legend><h1 style="color: #32a84a; text-shadow: 1px 1px #dcdedd; "><b>Create Account</b></h1></legend>
      </tr>
      <tr>
        <td>

          <?php
            if (isset($_GET["err"])) {
              if($_GET["err"]==1){
                echo "<caption><b><font color=#b30000>Password And Confirm Password Is Diffrent</font></b></caption>";
              }
              if($_GET["err"]==3){
                echo "<caption><b><font color=#b30000>Username or Mobile Number already exist!!</font></b></caption>";
              }
              if($_GET["err"]==2){
                echo '<script> if((alert("Account Created Success"))!=0){
                  window.location.href = "index.php";
                }</script>';
              }
            }
          ?>



        </td>
      </tr>
      <tr>
        <td align="right" width="45%"><label><b>YOUR NAME:</b></label></td>
        <td><input type="text" name="ynm" id="text" placeholder="Your Name" required></td>
      </tr>
      <tr>
        <td align="right"><label><b>MOBILE NUMBER:</b></label></td>
        <td><input type="text" name="mn" id="text" placeholder="Mobile Number" required></td>
      </tr>
      <tr>
        <td align="right" width="45%"><label><b>CREATE USER NAME:</b></label></td>
        <td><input type="text" name="unm" id="text" placeholder="User Name" required></td>
      </tr>
      <tr>
        <td align="right" width="45%"><label><b>CREATE PASSWORD:</b></label></td>
        <td><input type="password" name="pwd" id="text" placeholder="Password" required></td>
      </tr>
      <tr>
        <td align="right" width="45%"><label><b>CONFIRM PASSWORD:</b></label></td>
        <td><input type="text" name="cpwd" id="text" placeholder="Confirm Password" required></td>
      </tr>
      <tr>
        <th align="right"><input type="submit" value="Create" name="login" id="btn" style="background: #0099ff; color: white;"></th>
        <th align="left"><input type="reset" value="Cancle" name="Cancle" id="btn" style="background: ghostwhite;"></th>
      </tr>
      <tr>
        <td height="20px"></td>
      </tr>
    </table>
    </fieldset>
    </div>
  </form>
  </div>
</body>
</html>