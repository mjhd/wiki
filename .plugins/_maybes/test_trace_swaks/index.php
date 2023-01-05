<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEGAMAIL</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!--[if lt IE 9]><script src="js/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <style>
        form {
          padding: 2px;
          width: 250px;
        }
        input {
          width: 100%;
        }
        input[type="submit"], input[type="button"] {
          width: initial;
        }
        fieldset {
          border: none;
        }
        #submits > input {
          margin: 0 0 5px 5px;
        }
    </style>
</head>
<body>
<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
    <div>
      <label for="to_address">To address:</label><br>
      <input name="to_address" id="to_address" type="email" required>
    </div>
    <div>
      <label for="from_address">From address:</label><br>
      <input name="from_address" id="from_address" type="email">
    </div>
    <div>
      <label for="subject">Subject:</label><br>
      <input name="subject" id="subject" type="text">
    </div>
    <div>
      <label for="message">Message:</label><br>
      <textarea name="message" id="message" cols="45" rows="8"></textarea>
    </div>
    <fieldset id="submits">
      <input name="send" type="submit" value="Send"><input name="trace" type="submit" value="Send & Trace"><input type="button" value="Insert Dummy Values" onclick="fill()">
    </fieldset>
</form>
<script type="text/javascript">
function fill(){
    document.getElementById("from_address").value = "nowadmin@nmgclients.com"
    document.getElementById("to_address").value = "testy@nmgclients.com"
    document.getElementById("subject").value = "this is test"
    document.getElementById("message").value = "this is message!"
}
</script>
<?php
if(isset($_POST["to_address"])){
   $to_email = $_POST["to_address"];
   $subject = ($_POST["subject"]) ? ($_POST["subject"]) : "(no subject)";
   $body = ($_POST["message"]) ? ($_POST["message"]) : "(no message)";
   $from_email = ($_POST["from_address"]) ? ($_POST["from_address"]) : "anonymous@anonymous";

   if (isset($_POST["send"]))
     mail($to_email, $subject, $body, "From: $from_email");
   if (isset($_POST["trace"])){
     exec("swaks --to " . $to_email . " --from " . $from_email . " --server nowserver.com --body '" . $body . "' --header 'Subject: " . $subject . "'", $response);
     foreach($response as $out)
      echo $out . "<br />";
   }
}
?>
</body>
</html>
