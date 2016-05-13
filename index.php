<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $human = $_POST['human'];
    $from = 'From: TangledDemo';
    $to = 'demo@tangledindesign.com';
    $subject = 'Hello';

    $body = "From: $name\n EMail: $email\n Message: $message\n";
?>

<?php 
    if ($_POST['submit']) {
      if ($name != '' && $email != '' && $message '') {
        if ($human == 4) {
          if (main($to, $subject, $body, $from)) {
            echo '<p>Your message has been sent!</p>';
          } else {
            echo '<p>Something went wrong, go back and try again!</p>';
          }
        } else {
          echo '<p>You answered the anti-spam questions wrong!!</p>';
        }
      } else {
        echo '<p>You need to fill in all required fields!!</p>';
      }
    }
?>
