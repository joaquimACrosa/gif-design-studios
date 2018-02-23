
<?php


if(isset($_POST['name']))
    {
        $email = $_POST['email'];
        $to = 'info@gifdesignstudios.com';
        $subject = 'Contact from ' . $email;
        $message = $_POST['message'];

        mail($to, $subject, $message);
        echo $_POST['message'];

    }
?>
