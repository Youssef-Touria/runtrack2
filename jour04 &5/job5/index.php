<form method="post">
    <label>Nom d'utilisateur : <input type="text" name="username" required></label><br>
    <label>Mot de passe : <input type="password" name="password" required></label><br>
    <input type="submit" value="Se connecter">
</form>

<?php
if (!empty($_POST)) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'John' && $password === 'Rambo') {
        echo "C’est pas ma guerre";
    } else {
        echo "Votre pire cauchemar";
    }
}
?>
