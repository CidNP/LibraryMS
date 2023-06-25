<?php

include("data_class.php");

$login_email=$_GET['login_email'];
$login_pasword=$_GET['login_pasword'];
$login_admin=$_GET['login_admin'];

if($login_email==null||$login_pasword==null){
    $emailmsg="";
    $pasdmsg="";
    
    if($login_email==null){
        $emailmsg="Email Empty";
    }
    if($login_pasword==null){
        $pasdmsg="Pasword Empty";
    }

    header("Location: index.php?emailmsg=$emailmsg&pasdmsg=$pasdmsg");
}

elseif($login_email!=null&&$login_pasword!=null){
 

    $obj=new data();
    $obj->setconnection();

    if($login_admin==true){
        $obj->adminLogin($login_email,$login_pasword);
    }
    else{
        $obj->userLogin($login_email,$login_pasword);
    }

}
