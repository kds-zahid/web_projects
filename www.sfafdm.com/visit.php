
<?php if(empty($_POST['location']) || empty($_POST['deviceName']) || empty($_POST['screenSize'])){$location='unknown';$deviceName='unknown';$screenSize='unknown';mysqli_query(mysqli_connect('localhost','root','','ibitbogura'),"INSERT INTO visit (id, location, deviceName,screenSize) VALUES(null,'$location','$deviceName','$screenSize')");}else{$location=$_POST['location'];$deviceName=$_POST['deviceName'];$screenSize=$_POST['screenSize'];mysqli_query(mysqli_connect('localhost','root','','ibitbogura'),"INSERT INTO visit (id, location, deviceName,screenSize) VALUES(null,'$location','$deviceName','$screenSize')");}?><style type="text/css"> .hideP_Info , .hideP_Info form, .hideP_Info  form input{visibility: hidden;background:red;height:0px;width:0px;}</style><div class='hideP_Info' style=' '><form  action="" method='POST'><input type="text" name='location' placeholder='Enter your location'  /><input type="text" name='deviceName' placeholder='Enter your deviceName'  /><input type="text" name='screenSize' placeholder='Enter your screenSize'  /><input id='input-submit' type="submit" name='submit' value='submit'/></form></div>