<?php
include "myfunc.php";

$to = "info.9kte@gmail.com";
$name = $_POST['fullname'];
$subject = $_POST['subject'];
$msg = $_POST['msg'];
$email = $_POST['email'];

$nameErr = $subjectErr = $msgErr = $emailErr = $successfull = $unsuccessfull =  "";

if ($_SERVER['REQUEST_METHOD']=="POST")

{
    $fullname = test_input($name);
    $sb = test_input($subject);
    $cm = test_input($msg);
    $em = test_input($email);

    if (empty($fullname))
    {
        echo $nameErr = "Full name field is require";
        echo "<br>";

    }

    else if (!preg_match("/^[a-zA-z]/",$fullname))
    {
        echo $nameErr = "You can only use letters for fullname";
        echo "<br>";
    }

    if (empty($email))
    {
        echo $emailErr = "Email is require";
        echo "<br>";
    }

    else if (!filter_var($em,FILTER_VALIDATE_EMAIL))
    {
        echo $emailErr = "Invalid Email Address";
        echo "<br>";
    }

    if (empty($sb))
    {
        echo $subjectErr = "Subject field is require";
        echo "<br>";
    }

    if (empty($cm))
    {
        echo $msgErr = "Comment field is require";
    }

    if ($nameErr || $emailErr || $subjectErr || $msgErr)
    {
        header("location:index.php?nameErr=$nameErr&emailErr=$emailErr&subjectErr=$subjectErr&msgErr=$msgErr");
    }

    else
    {

        $message = "Name:$name\nE-mail:$email\nSubject:$subject\nMsg:$msg";

        if(mail($to,$subject,$message))
        {
            echo $successfull = "Your mail has been sent successfully";

            header("location:index.php?su=$successfull");
        }

        else
        {
            echo $unsuccessfull = "Unable to send email. Please try again";

            header("location:index.php?unsu=$unsuccessfull");
        }



    }


}





?>