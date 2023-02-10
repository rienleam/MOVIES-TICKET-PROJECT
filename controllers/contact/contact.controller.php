<?php
require "views/partials/header.php";
require "views/partials/nav.php";

function validate_username(string $username) : bool
{
   return !ctype_alnum( $username);
}

function validate_email(string $e_mail) : bool
{
   return !filter_var( $e_mail,FILTER_VALIDATE_EMAIL);
}

$username_error = '';
$e_mail_error = '';
$telephone_error = '';
$topic_error = '';
$message_error = ''; 

$task_complete = 0;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'] ? $_POST['username'] : '';
    $e_mail = $_POST['e-mail'] ? $_POST['e-mail'] : '';
    $telephone = $_POST['telephone'] ? $_POST['telephone'] : '';
    $topic = $_POST['the-topic'] ? $_POST['the-topic'] : '';
    $message = $_POST['user-message'] ? $_POST['user-message'] : '';

    if (empty($username)) {
        $username_error = "Name required";
    } else if (!empty($username)){
        $task_complete += 1;
    }
    if (empty($e_mail)) {
        $e_mail_error = "Email required";
    } else if(!empty($e_mail)){
        $email_validate = validate_email($e_mail);
        if ($email_validate) {
            $e_mail_error = "Email required '@";
        } else {
            $task_complete += 1;
        }
    }
    if (empty($telephone)) {
        $telephone_error = "Phone number required";
    } else if (!empty($telephone)) {
        $task_complete += 1;
    }
    if (empty($topic)) {
        $topic_error = "Topic required";
    } else if (!empty($topic)) {
        $task_complete += 1;
    }
    if (empty($message)) {
        $message_error = "Message required";
    } else if (!empty($message)) {
        $task_complete += 1;
    }
    if ($task_complete == 5) {
        inputDataInToDB($username, $telephone, $e_mail, $topic, $message);
        header("Location: /");
    }
}

require "views/contact/contact.view.php";

require "views/partials/footer.php";

?>