<?php

include("data_class.php");


$authorname=$_POST['authorname'];
$authorbook=$_POST['authorbook'];



if (move_uploaded_file($_FILES["authorpic"]["tmp_name"],"uploads/" . $_FILES["authorpic"]["name"])) {

    $authorpic=$_FILES["authorpic"]["name"];

$obj=new data();
$obj->setconnection();
$obj->addauthor($authorpic,$authorname,$authorbook);
  } 
  else {
     echo "File not uploaded";
  }