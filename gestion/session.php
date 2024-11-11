<?php 

session_start();

if(isset($_SESSION['admin_name']) ){
	//header("Location: ./index.php");
  
    if($_SESSION['admin_name'] == "[inser superadmin user]"){
        $superadmin = true;
    }else{
        $superadmin = false;
    }
      
}else{
    header("Location: ./login.php");
}