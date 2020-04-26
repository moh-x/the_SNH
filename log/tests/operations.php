<?php
if($first_name = "") {
    $errorArray = "First Name cannot be blank";
} else {
    //do this
}
//The above could also be written as:
$first_name == "" ? $errorArray = "First Name cannot be blank" : "";
?>