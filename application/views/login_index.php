<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>E-CAD</title>
	<script type="text/javascript" href = "assets/scripts/js.js"></script>

</head>
<style>
 
 #center{
     position: absolute;
     top: 20%;
     left: 25%;
     width: calc(100% - 50%);
     height: calc(100% - 40%);
     background-color: transparent;
     background-image: url('assets/images/img4.jpg'), url('../assets/images/img4.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    box-shadow: 0px 10px 10px #000;
 }
 #centerForm{
     position: absolute;
     top:0px;
     left: 50%;
     width: 50%;
     height: 100%;
     background-color: white;
 }
 .loginTbl{
     position: absolute;
     top: 10%;
     left: 10%;
     width: calc(100% - 20%);
     font-size: 17px;
  padding: 8px;
 }
 input[type=text], [type=password]  {
  width: 100%;
  margin-bottom: 10px;
  padding: 8px 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
  color: rgb(0, 0, 0);
}
input[type=submit]{
    position: absolute;
    right: 0px;
    padding: 10px 15px;
    font-weight: bold;
    color: #fff;
    background-color: #008CBA;
    border: none;
    border-radius: 3px 3px;
    cursor: pointer;
}
input[type=submit]:hover{
    background-color:  #1c7e9e;
}
.alert {
  padding: 20px;
  background-color: #ff9800;
  color: white;
  text-align: center;
}

#centerLeft{
     position: absolute;
     top:0px;
     left: 0%;
     width: 50%;
     height: 100%;
     background-color: rgba(0,0,0, 0.5);
     color: #fff;
     letter-spacing: 3px;
     text-align: center;
 }
 #soon{
     position: absolute;
     top: calc((100% - 126px)/3);
     left: calc((100% - 256.33px)/2);
     font-size: 55px;
 }
 a{
     color: #000;
     font-family: arial;
     font-size: 15px;
 }
 a:hover{
    color: red;
 }


</style>
<body>
<div id = "center">
    <div id = "centerLeft">
        <h1 id = "soon">COMING <br/>SOON!</h1>
    </div>
    <div id = "centerForm">
        <form action="<?php echo base_url()."login/error" ?>" method ="post">
            <?php
            
                if(!isset($logs) || $logs == 'default' ){

                }else{ ?>
                    <div class="alert">
                    <strong>Alert!</strong> No Database Found!
                    </div>
               <?php } ?>
            <table class = "loginTbl">
                <th>
                    <h1>Welcome</h1>
                </th>
                <tr>
                    <td>Email<br/>
                    <input type = "text" name = "email" /></td>
                </tr>
                <tr>
                    <td>Password<br/>
                    <input type = "password" name = "password" /></td>
                </tr>
                <tr>
                    <td><a href = ''>Sign Up</a>
                        <input type = "submit" value ="Login" name = "Submit" /></td>
                </tr>
            </table>
        </form>
    </div>
</div>
</body>
</html>
