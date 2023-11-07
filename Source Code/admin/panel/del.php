

<?php
include('config.php');

require 'vendor2/autoload.php'; 
// Composer se install kiya hua ho to yeh line add karein
// PHPMailer Integration
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_GET['fid'])){
     $fid = $_GET['fid'];
   
     // Update the status to "Delivered" in the database
     $update_query = "UPDATE `form` SET status = 'deliver' WHERE fid = $fid";
     mysqli_query($connection, $update_query);

  // Fetch the user's email for sending an email
  $email_query = "SELECT * FROM `form` WHERE fid = $fid";
  $result = mysqli_query($connection, $email_query);
  if (mysqli_num_rows($result) > 0) {
     $row = mysqli_fetch_assoc($result);
     $email = $row['femail'];
     $name = $row['fname'];
 

            // PHPMailer configuration
            $mail = new PHPMailer(true);
            try {
                // Server settings
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com'; // SMTP server
                $mail->SMTPAuth = true;
                $mail->Username = 'siddiquiaffan701@gmail.com'; // Sender's email address
                $mail->Password = 'hwmg luvt ngny zuym';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // TLS encryption
                $mail->Port = 587; // Port for TLS

                // Recipient settings
                $mail->setFrom('siddiquiaffan701@gmail.com', 'Affan');
                $mail->addAddress($email,$name); // User ka email address

                // Email content
                $mail->isHTML(true);
                $mail->Subject = 'Courier Website';
                $mail->Body = 'Your Courier Has Been Delivered.';

                $mail->send();
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
  header('location: deliver.php');

    } 
}

?>