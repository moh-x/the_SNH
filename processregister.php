<?php session_start();

//print_r($_POST);

$errorCount = 0;

//Collecting and verifying the data (validation)
$first_name = $_POST['first_name'] != "" ? $_POST['first_name'] : $errorCount++;
$last_name = $_POST['last_name'] != "" ? $_POST['last_name'] : $errorCount++;
$email = $_POST['email'] != "" ? $_POST['email'] : $errorCount++;
$password = $_POST['password'] != "" ? $_POST['password'] : $errorCount++;
$gender = $_POST['gender'] != "" ? $_POST['gender'] : $errorCount++;
$designation = $_POST['designation'] != "" ? $_POST['designation'] : $errorCount++;
$department = $_POST['department'] != "" ? $_POST['department'] : $errorCount++;

$_SESSION['first_name'] = $first_name;
$_SESSION['last_name'] = $last_name;
$_SESSION['email'] = $email;
$_SESSION['gender'] = $gender;
$_SESSION['designation'] = $designation;
$_SESSION['department'] = $department;

if($errorCount > 0){
    //redirect back and display error
    header("Location: register.php");
    //a session message
    $_SESSION["error"] = "You have ".$errorCount." errors in your form submission";
}else{
    //continue to database
    echo "Sucessful!";
}

//Saving the data into the database (folder)

//Return back to the page, with a status message

?>