<?php
include "database.php";
session_start();
function redirect($location){
    return header("Location: " . $location);
    exit;
}

function email_exists($email){
    global $connection;
    $query = "SELECT email FROM users WHERE email = '$email'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_num_rows($result);    
    if ($row > 0){
        return true;
    }
    else{
        return false;
    }
}
function user_registration($email, $full_name, $country, $password){
    global $connection;
    date_default_timezone_set("Asia/Kathmandu");
    $date=date('d-m-Y');
    $password = password_hash($password, PASSWORD_BCRYPT, array('cost'=>12));
    $register_query = mysqli_query($connection, "INSERT INTO users(full_name, email, profile_image, country, password, status, role, date) VALUES('$full_name','$email', 'profile.jpg', '$country', '$password', 'blocked', 'user', '$date')");
    if($register_query){
        $subject="Email Verification";
        $from = "noreply@ismt.com";
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: '.$from."\r\n".
        'Reply-To: '.$from."\r\n" .
        'X-Mailer: PHP/' . phpversion();
        $message ="
        <html>
        <head>
        <title>Email Verification</title>
        </head>
        <body>
        <h2>Dear $full_name,</h2>
        <p>Thank you for requesting user registration. Please click link given below to activate your user account.</p>
        <center><a href='http://localhost:8080/FunOlympic/email_verification.php?email=$email'>Complete Verification</a><center>
        </body>
        </html>";
        
        mail($email, $subject, $message, $headers);
        return true;
    }
}

function email_verification($email){
    global $connection;
    $result = mysqli_query($connection, "UPDATE users SET status = 'unblocked' WHERE email = '{$email}'");
    if(!$result){
        return false;
    }
    return true;
}

function is_verified($email){
    global $connection;
    $select_user = mysqli_query($connection, "SELECT * FROM users WHERE  email = '{$email}' AND status = 'unblocked'");
    $row = mysqli_num_rows($select_user);
    if ($row > 0){
        return true;
    }
    else{
        return false;
    }
}
function user_login($email, $password){
    global $connection;
    $login_user = mysqli_query($connection, "SELECT * FROM users WHERE email = '{$email}' AND status = 'unblocked'");
    while ($row = mysqli_fetch_array($login_user)) {
        $db_userid = $row['user_id'];
        $db_fullname = $row['full_name'];
        $db_password = $row['password'];
        $db_role = $row['role'];
        if (password_verify($password, $db_password)) {
            $_SESSION['user_id'] = $db_userid;
            $_SESSION['full_name'] = $db_fullname;
            $_SESSION['email'] = $email;
            if($db_role == 'admin'){
                redirect('admin/admin-dashboard.php');
            }
            else{
                redirect('user-homepage.php');
            }
        }
    }
}

function request_password_reset($email){
    global $connection;
    date_default_timezone_set("Asia/Kathmandu");
    $date=date('d-m-Y');
    $insert_query = mysqli_query($connection, "INSERT INTO password_reset_request(email, requested_date) VALUES('$email', '$date') ");
    if($insert_query){
        return true;
    }
}

function change_password($email, $new_password){
    global $connection;
    $hashed_password = password_hash($new_password, PASSWORD_BCRYPT, array('cost'=>12));
        $result = mysqli_query($connection, "UPDATE users SET password = '{$hashed_password}' WHERE email = '{$email}'");
        if(!$result){
            return false;
        }
        return true;
}


//--------------------------- functions for admin ---------------------------
function count_result($table){
    global $connection;
    $query = "SELECT * FROM " . $table;
    $select_from_table = mysqli_query($connection, $query);
    $result = mysqli_num_rows($select_from_table);
    return $result;
}

function changeStatusToInactive(){
    global $connection;
    if (isset($_GET['inactive'])) {
        $user_id = $_GET['inactive'];
        mysqli_query($connection, "UPDATE users SET status = 'blocked' WHERE user_id = {$user_id}");
    }
}

function changeStatusToActive(){
    global $connection;
    if (isset($_GET['active'])) {
        $user_id = $_GET['active'];
        mysqli_query($connection, "UPDATE users SET status = 'unblocked' WHERE user_id = {$user_id}");        
    }
}

function send_mail_after_password_reset($email){
    global $connection;
    $subject="Password Reset Link";
    $from = "noreply@ismt.com";
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    $message ="
    <html>
    <head>
    <title>Password Reset Link</title>
    </head>
    <body>
    <p style='text-align:center'>Kindly follow the link to change your password.</p>
    <center><a href='http://localhost:8080/FunOlympic/forgot_password_process.php?email=$email'>Change Password</a><center>
    </body>
    </html>";
    if(mail($email, $subject, $message, $headers)){
        mysqli_query($connection, "DELETE FROM password_reset_request WHERE email = '$email'");
    }
    
    return true;
}


//add category
function add_category($title){
    global $connection;
    $add_category = mysqli_query($connection, "INSERT INTO categories(title) VALUES('$title')");
    if($add_category){
        return true;
    }
}
//delete category
function delete_categories(){
    global $connection;
    if (isset($_GET['delete'])) {
         $category_id = $_GET['delete'];
         $category_title = $_GET['title'];
         $select_vid = mysqli_query($connection, "SELECT video_id FROM videos WHERE vCategory = '$category_title' LIMIT 1");
         if(mysqli_num_rows($select_vid)!=0){
            $row = mysqli_fetch_assoc($select_vid);
            $vid = $row['video_id'];
            $delete_rating_info = mysqli_query($connection, "DELETE FROM rating_info WHERE vid = $vid");
            $delete_comments = mysqli_query($connection, "DELETE FROM comment WHERE video_id = {$vid}");
            $delete_live_videos = mysqli_query($connection, "DELETE FROM livevideo WHERE vCategory = '{$category_title}'");
            $delete_videos = mysqli_query($connection, "DELETE FROM videos WHERE vCategory = '{$category_title}'");
            $delete_fixtures = mysqli_query($connection, "DELETE FROM fixtures WHERE fixture_category = '{$category_title}'");
            $delete_news = mysqli_query($connection, "DELETE FROM news WHERE nCategory = '{$category_title}'");
            $delete_photos = mysqli_query($connection, "DELETE FROM admin_gallery WHERE img_Category = '{$category_title}'");
         }
            $delete_cat = mysqli_query($connection, "DELETE FROM categories WHERE category_id = {$category_id}");
        }
}
?>
