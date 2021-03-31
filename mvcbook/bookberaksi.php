<?php
include_once('bookcontroller.php');
$main_ctrl=new BookController();
$main_ctrl->invoke();
//$main_ctrl->invokeDB(); //pilih salah satu method
?>