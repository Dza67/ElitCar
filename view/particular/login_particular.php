<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Elitcar">
    <base href="http://localhost/ElitCar/" target="_blank">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script defer src="js/main.js"></script>
    <title>ElitCar</title>
</head>
<body>

<?php
// Inclusion des fichiers nécessaires
include_once "../../controller/admin/role.php"; // Inclusion du fichier contenant les rôles de l'administrateur
include_once "../../model/pdo.php"; // Inclusion du fichier contenant la connexion à la base de données
include_once "../../controller/admin/tools.php"; // Inclusion du fichier contenant des fonctions utilitaires pour l'administrateur

?>
<div class="container-main-login">
    <div class="container-login">
        <div class="container-logo"><a target="_self" href="view/home"><img src="img/elitcar-login.png" alt="Logo Elitcar" width="256px" height="64px"></a></div>
        <div class="container-title">
            <h5 class="">SE CONNECTER</h5>
            <h5 class="">S'INSCRIRE</h5>
        </div>
        <div class="container-divider">
            <div class="divider-switch3 "></div>
            <div class="divider-switch4 "></div>
        </div>
        <div class="container-title-2">
            <h4 >Nous sommes contents de vous revoir</h4>
        </div>
        <div class="container-btn">
            <button class="btn btn-secondary my-1">Google</button>
            <button class="btn btn-secondary my-1">Facebook</button>
            <button class="btn btn-secondary my-1">Apple</button>
        </div>
        <div class="container-choose mt-2">
            <p>ou</p>
        </div>
        <?php include_once "../message.php" ?> <!-- Inclusion du fichier contenant le message -->

        <form id="form" class="mx-auto col-6 mt-2" action="" method="post">

            <div class="form-floating mb-3">
                <input type="mail" name="mail" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" name="psw" class="form-control" id="floatingPassword" placeholder="Mots de passe">
                <label for="floatingPassword">Mots de passe</label>
            </div>
            <input type="submit" class="form-control btn btn-light mt-3" value="Connexion">
        </form>
        <div class="container-title">
            <p>Vous voulez créer un compte sur Elitcar? <a href="view/login" target="_self" class="mx-2"> S'inscrire</a></p>
        </div>
    </div>
    <div class="container-img-login"></div>
</div>
<?php
// Vérification si les champs de formulaire ne sont pas vides
if (!empty($_POST['mail']) && !empty($_POST['psw'])){
    $mail = $_POST['mail']; // Récupération de l'adresse e-mail du formulaire
    $sql = "SELECT * FROM particular WHERE mail='$mail'"; // Requête SQL pour sélectionner l'utilisateur particulier avec l'adresse e-mail fournie
    $stmt = $pdo->query($sql); // Exécution de la requête SQL
    $user = $stmt->fetch(PDO::FETCH_ASSOC); // Récupération des résultats de la requête sous forme de tableau associatif

    if ($user) {
        // le compte existe
        if (password_verify($_POST['psw'], $user['psw'])) {
            session_start();
            // le mot de passe est correct
            $_SESSION["name"] = $user['first_name'] . " " . $user['last_name']; // Attribution du nom complet de l'utilisateur à la session
            $_SESSION["role"] = $user['role']; // Attribution du rôle de l'utilisateur à la session
            $_SESSION["token"] = bin2hex(random_bytes(16)); // Génération d'un jeton de sécurité et attribution à la session
            header('Location: ../home'); // Redirection vers la page d'accueil
        } else {
            sendMessage("Mots de passe incorrect", "failed", "login_particular"); // Redirection avec un message d'erreur si le mot de passe est incorrect
        }
    } else {
        // le compte n'existe pas
        sendMessage("le compte n'existe pas", "failed", "login_particular"); // Redirection avec un message d'erreur si le compte n'existe pas
    }
} else {
    // Si les champs de formulaire sont vides, vous pouvez activer la ligne suivante pour afficher un message d'erreur.
    //sendMessage("Veuillez remplir correctement le formulaire", "failed", "login_particular.php");
}
?>