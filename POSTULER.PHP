<?php
session_start();  // Démarre la session
if (!isset($_SESSION['user_id'])) {  // Vérifie si l'utilisateur est connecté
    header('Location: ytbphp.html');  // Redirige vers la page de connexion
    exit();  // Arrête l'exécution du script
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postuler</title>
</head>
<body>
    <div class="application-form">
        <h2>Postuler à un Poste</h2>
        <form action="submit-application.php" method="post">
            <input type="text" name="name" placeholder="Votre Nom" required>
            <input type="email" name="email" placeholder="Votre Email" required>
            <textarea name="cover-letter" placeholder="Lettre de Motivation" required></textarea>
            <input type="file" name="resume" required>
            <button type="submit">Soumettre la Candidature</button>
        </form>
    </div>
</body>
</html>
