<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=1">
    <title>Form Submit to Send Email</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

    <?php
if(!empty($_POST["send"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $toEmail = $_POST["christopher.simon496@gmail.com"];

    $mailHeaders = "Name:" . $name . 
    "\r\n Email: " . $email .
    "\r\n Message: " . $message . "\r\n";

    if(mail($toEmail, $name, $mailHeaders)){
        $message = "Your message has been sent successfully.";


    }
    
     

}
?>
    <form id="contact_form" method="post" action="./submitForm.php" enctype="multipart/form-data">
        <div class="fields">
            <div class="field">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" />
            </div>
            <div class="field">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" />
            </div>
            <div class="field">
                <label for="message">Message</label>
                <textarea name="message" id="message" rows="4"></textarea>
            </div>
        </div>
        <ul class="actions">
            <li><input type="submit" name="send" value="Send Message" /></li>
        </ul>
        <?php if(!empty($message)){ ?>



        <div class="success">
            <strong><?php echo $message; ?></strong>
        </div>
        <?php }  ?>
    </form>
</body>

</html>