<?php 
  
    define("IS_DEBUG", $_SERVER["HTTP_HOST"] == "localhost" ? true :false);
    $firstname =$lastname = $subject = $email= $message ="";
    $firstnameError = $lastnameError =$subjectErrot = $emailError = "";

//   var_dump($SERVER)
  if($_SERVER["REQUEST_METHOD"]  == "POST"){
    $firstname = isset($POST["firstname"]) ?checkInput($_POST("firstname")) : "";
    $lastname = isset($POST["lastname"])?checkInput($_POST(")lastname")) : "";
    $subject = isset($POST["subjec"])?checkInput($_POST("subject")) : "";
    $email = isset($POST["email"])?checkInput($_POST("email")) : "";
    $message =isset( $POST["masssage"])?checkInput($_POST("massage")) : "";
    if(!isEmail($email)){
        $emailError = "Veillez verifiez votre email.";
        echo  '<p class = "error">' .$emailError .'</p>';
    }

  }else{
    if(IS_DEBUG){
    echo"pas post";
    }
}
    function checkInput($input){
    $input = trim($input);
    $input=  stripcslashes($input);
    $input= htmlspecialchars($input);
    if(IS_DEBUG){
        echo $input;
        echo "br";
    }

    return $input;
}

function isEmail($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL);
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
<!-- <form method="post" action="/tp_formulraire-de-contact/www/index.php/"><script>alert('bonjour')</script> -->
<form method="post" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
        <form method="post" action="<?php $_SERVER["PHP_SELF"]      ?>">
            <input type="text" placeholder="Prenom"name="firstname" value="<?php echo $firstname ?>"required>
            <input type="text" placeholder="nom"name="lastname" value="<?php echo $lastname ?>"required>
            <input type="text" placeholder="Sujet"name="subject"value="<?php echo $subject ?>" required>
            <input type="email" placeholder="exmemple@email.com" name="email" value="<?php echo $email ?>" required>
              
             <!-- <p class=error>verifier votre message</p> -->
            <textarea cols="30" rows="10" name="message"  value="<?php echo $message ?>"required></textarea>
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
