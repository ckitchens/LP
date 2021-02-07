<?php
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $visitoremail = $_POST['email'];
  $phonenum = $_POST['phoneNumber'];
  $message = $_POST['mess'];

  $fnamem = $_POST['fnamem'];
  $lnamem = $_POST['lnamem'];
  $visitoremailm = $_POST['emailm'];
  $phonenum = $_POST['phoneNumber'];
  $messagem = $_POST['messm'];

  $email_from = 'Gabe@mylinkpad.com';
  $email_subject = "New Form Submission";
  $email_body = "Desktop Submission \nFirst Name: $fname.\n".
    "Last Name: $lname.\n".
      "Email: $visitoremail.\n".
        "Phone Number: $phonenum.\n".
          "Project Details: $message.\n".
            "Mobile Submission \nFirst Name: $fnamem.\n".
                "Last Name: $lnamem.\n".
                    "Email: $visitoremailm.\n".
                        "Phone Number: $phonenum.\n".
                            "Project Details: $messagem.\n";

  $to = "gsm525@outlook.com";

  mail($to,$email_subject,$email_body);
  header("Location: http://mylinkpad.com/Contact.html");

?>
