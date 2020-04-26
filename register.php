<?php session_start();
//The next two lines were used for testing
//$_SESSION['TESTING'] = "tESTING Session!";
//print_r($_SESSION);
include_once('lib/header.php'); ?>

    <p><strong>Register here</strong></p>

    <form method="POST" action="processregister.php">
        <p>
            <?php

                if(isset($_SESSION['error']) && !empty($_SESSION['error'])){
                    echo "<span style='color:red'>" . $_SESSION['error'] . "</span>";
                    //end session- we could also use session_destroy();
                    //session_unset(); just clears the $_SESSION variable.
                    session_destroy(); //destroys the session data that is stored in the session storage (e.g. the session file in the file system).
                }
            ?>
        </p>
        <p>
            <label>First Name</label><br/>
            <input 
            <?php
                if(isset($_SESSION['first_name']) && !empty($_SESSION['first_name'])){
                    echo "value=" . $_SESSION['first_name'];
                    //session_unset(); 
                    //xyluz tried $_SESSION['first_name'] = ""; and got an ugly result!
                }
            ?>
            type="text" name="first_name" placeholder="First Name"/>
        </p>
        <p>
            <label>Last Name</label><br/>
            <input 
            <?php
                if(isset($_SESSION['last_name']) && !empty($_SESSION['last_name'])){
                    echo "value=" . $_SESSION['last_name'];
                }
            ?>
            type="text" name="last_name" placeholder="Last Name"/>
        </p>
        <p>
            <label>Gender</label>
            <select name="gender">
                <option value="">Select a gender</option>
                <option
                <?php
                    if(isset($_SESSION['gender']) && $_SESSION['gender'] == 'Female'){
                        echo "Selected";
                    }
                ?>
                >Female</option>
                <option
                <?php
                    if(isset($_SESSION['gender']) && $_SESSION['gender'] == 'Male'){
                        echo "Selected";
                    }
                ?>
                >Male</option>
            </select>
        </p>
        <p>
            <label>Email</label><br/>
            <input 
            <?php
                if(isset($_SESSION['email']) && !empty($_SESSION['email'])){
                    echo "value=" . $_SESSION['email'];
                }
            ?>
            type="text" name="email" placeholder="Email"/>
        </p>
        <p>
            <label>Password</label><br/>
            <input type="password" name="password" placeholder="password"/>
        </p>

        <p>
            <label>Designation</label>
            <select name="designation">
                <option value="">Select one</option>
                <option
                <?php
                    if(isset($_SESSION['designation']) && $_SESSION['designation'] == 'Medical Team (MT)'){
                        echo "Selected";
                    }
                ?>
                >Medical Team (MT)</option>
                <option
                <?php
                    if(isset($_SESSION['designation']) && $_SESSION['designation'] == 'Patient'){
                        echo "Selected";
                    }
                ?>
                >Patient</option>
            </select>
        </p>
        <p>
            <label>Department</label><br/>
            <input 
            <?php
                if(isset($_SESSION['department']) && !empty($_SESSION['department'])){
                    echo "value=" . $_SESSION['department'];
                }
            ?>
            type="text" name="department" placeholder="Department"/>
        </p>
        <p>
            <button type="submit">Register</button>
        </p>
    </form>

    <?php include_once('lib/footer.php'); ?>