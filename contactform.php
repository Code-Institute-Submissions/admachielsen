<?php
if (isset($_POST['submit'])) {
 $name = $_POST['name'];
 $subject = $_POST['mail'];
 $mailFrom = $_POST['message'];
 
 $mailTo = "g.machielsen@gmail.com";
 $headers = "From: ".$mailFrom;
 $txt = "You have received an e-mail from ".$name.".\n\n".$message;
 
 
 mail($mailTo, $subject, $txt, $headers);
//  header("Location: index.html?mailsend");
 }