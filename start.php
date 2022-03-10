
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = '';
        $userpassword = '';
        //check whether the form values are set or not using isset() method
        if (isset($_POST['username'])) {
            $useremail = $_POST['username'];
        }
        if (isset($_POST['userpassword'])) {
            $userpassword = $_POST['userpassword'];
        }
    
        if ($username && $userpassword) {
            echo "Welcome " . $username;
        } else {
            echo "Please enter both email and password";
        }
}