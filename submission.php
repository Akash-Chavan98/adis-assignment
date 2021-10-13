<?php
if ( isset( $_POST['submit'] ) ) {
    $txt1 = $_REQUEST['txt1'];
    $txt2 = $_REQUEST['txt2'];
    $txt3 = $_REQUEST['txt3'];
    $txt4 = $_REQUEST['db1'];
    
    echo 'name of cattle: ' . $txt1;
    echo 'tag no: ' . $txt2;
    echo 'gender: ' . $txt3;
    echo 'dob: ' . $txt4;
}
?>