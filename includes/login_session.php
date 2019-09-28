<?php
include 'database/db_connection.php';

if (isset($_POST['key'])) { 
        if (isset($_POST['key'])=='login_btn') { 
        $email = $conn->real_escape_string($_POST['email']);
        $password = $conn->real_escape_string($_POST['password']);
        $sql = mysqli_query($conn, "SELECT CONCAT(u.firstname,' ',u.lastname) AS 'fullname' ,u.id,u.email,u.password FROM `users` u WHERE email='$email' AND password='$password' ");
        $data = $sql->fetch_assoc();
            if ($sql->num_rows > 0) {
                $_SESSION['loggedIn'] = '1';
                $_SESSION['userID'] = $data['id'];
                $_SESSION['userFullname'] = $data['fullname'];
                exit('success');
            } else {
                exit('invalid');
            }
        }
}
?>