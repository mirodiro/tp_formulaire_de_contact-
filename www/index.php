<?php 
  
    define("IS_DEBUG", $_SERVER["HTTP_HOST"] == "localhost" ? true :false);
    $firstname =$lastname = $subject = $email= $message ="";

//   var_dump($SERVER)
  if($_SERVER["REQUEST_METHOD"]  == "POST"){
    $firstname = $POST["firstname"];
    $lastname = $POST["lastname"];
    $subject = $POST["subjec"];
    $email = $POST["email"];
    $message = $POST["masssage"];

  }else{
    if(IS_DEBUG){
    echo"pas post";
  }
}
?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>TP Discord</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css" media="all and (max-width: 768px)">
</head>

<body>
    <div id="formulaire">
        <form method="post" action="<?php $_SERVER["PHP_SELF"]      ?>">
            <input type="email" placeholder="Prenom"name="firstname" required>
            <input type="text" placeholder="nom"name="lastname" required>
            <input type="text" placeholder="Sujet"name="subject" required>
            <input type="text" placeholder="exmemple@email.com" name="email"required>
            <textarea cols="30" rows="10" name="message" required></textarea>
            <input type="password" placeholder="mot de passe" required>
            <div id="select"> 
            <select name="date">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
            <select name="month">
                <option>Janviers</option>
                <option>Février</option>
                <option>Mars</option>
                <option>Avril</option>
                <option>Mai</option>
            </select>
            <select>
                <option>2021</option>
                <option> 2022</option>
                <option> 2023</option>
                <option> 2024</option>
                <option> 2025</option>
            </select>
            </div>
            <input type="submit" value="ENVOYER">
        </form>
    </div>
</body></html>
