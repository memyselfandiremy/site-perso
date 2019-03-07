<?php

$errorMsg ="";


/* NOM */
if (preg_match("#^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$#", $_POST["nom"])) {
    $nom = $_POST["nom"];
} else {
    $errorMsg = 'Nom incorrect<br>'; 
}



/* EMAIL */
if (preg_match("#^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$#", $_POST["email"])) {
    $email = $_POST["email"];
} else {
    $errorMsg .= 'Email incorrect<br>'; 
}

/* OBJET */
if (empty($_POST["objet"])) {
    $errorMsg .= "Objet non valide<br>";
 } else {
     $objet = $_POST["objet"];
 }

/* MESSAGE */
if (empty($_POST["message"])) {
   $errorMsg .= "Message non valide<br>";
} else {
    $message = $_POST["message"];
}



/* ERROR */
$email_destinataire = 'marie_ange_remy@msn.com';


if(empty($errorMsg)){
    $msg = "Nom: ".$nom.", Email: ".$email.", Objet: ".$objet.", Message:".$message;
    mail($email_destinataire, $msg, $objet);
    $message_envoye = "Votre message a bien été envoyé !"; 
    echo json_encode(['code'=>200, 'msgok'=>$message_envoye]);
} else {
    echo json_encode(['code'=>404, 'msg'=>$errorMsg]);
}

?>
