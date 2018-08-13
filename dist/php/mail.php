<?php 
$nom=($_POST['nom']);
$email=($_POST['email']); 
$telephone=($_POST['telephone']); 
$message=($_POST['message']); 

$headers = "MIME-Version: 1.0\r\n"; 

$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n"; 

$headers .= "From: $nom <$email>\r\nReply-to : $nom <$email>\nX-Mailer:PHP"; 

$subject="Message du site"; 
$destinataire="titouan.galvani@ynov.com";
$tel="$telephone";
$body="$message"; 
if (mail($destinataire,$subject,$tel,$body,$headers)) { 
	echo "<script type='text/javascript'>\
	";  
	echo "alert('Le message a bien été envoyé');\
	"; 
	echo "</script>";   
} else {
	echo "<script type='text/javascript'>\
	";  
	echo "alert('Le message n'a pas pu être envoyé');\
	";  
	echo "</script>";  
}

header('Location: https://titouan-galvani.netlify.com/contact.html');
exit();
?>
 