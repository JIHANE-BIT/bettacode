<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        /* Style général */
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(to right,rgb(6, 1, 0),rgb(6, 1, 0)); /* Dégradé de couleur */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Formulaire */
        .form-container {
            background-color: rgba(1, 0, 0, 0); /* Fond sombre et transparent */
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.4);
            width: 100%;
            max-width: 600px;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        h1 {
            font-size: 36px;
            font-weight: bold;
            color: #e50914;
            text-align: center;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .circle-text {
            width: 200px;
            height: 200px;
            shape-outside: circle(50%);
            float: left;
            background-color: #111;
            padding: 70px;
            margin: 100px;
            border-radius: 50%;
            position: relative;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        .circle-text h1 {
            font-size: 40px;
            color:rgb(224, 48, 4);
            text-align: center;
            margin: 10;
        }

        form {
            padding: 0px;
            border-radius: 10px;
            background-color: #000;
            box-shadow: 0px 4px 10px rgba(9, 0, 0, 0.2);
            margin-top: 170px;
        }
            ::placeholder{
            color: #fff;
            font-family: Arial;
    }
    

        fieldset {
            border: none;
            margin-bottom: 20px;
        }

       

        label {
            font-size: 1.2em;
            margin-bottom: 5px;
            display: block;
            color: #fff;
        }

        input[type="text"], input[type="email"], input[type="password"], input[type="file"], select {
            width: 240px;
            height: 35px;
            background: transparent;
            border-bottom: 1px solid #008000;
            border-top: none;
            border-right: none;
            border-left: none;
            color: #fff;
            font-size: 15px;
            letter-spacing: 1px;
            margin-top: 30px;
            font-family: sans-serif;
        }

        input[type="text"]:focus, input[type="email"]:focus, input[type="password"]:focus, select:focus {
            border-color: #e50914;
            outline: none;
        }

        .password-toggle {
            position: relative;
            display: inline-block;
        }

        .password-toggle input[type="password"] {
            padding-right: 40px;
        }

        .toggle-btn {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 1.2em;
            color: #e50914;
            transition: color 0.3s ease;
        }

        .toggle-btn:hover {
            color: #ff0a16;
        }

        button {
            background-color: #e50914;
            color: white;
            padding: 12px 30px;
            font-size: 1.2em;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            width: 100%;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #ff0a16;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 1em;
            color: #fff;
        }

        .footer a {
            color: #e50914;
            text-decoration: none;
        }

        .error-message {
            color: red;
            font-size: 1.2em;
        }

        .success-message {
            color: green;
            font-size: 1.2em;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .circle-text {
                display: none;
            }

            .form-container {
                width: 90%;
                padding: 20px;
            }

            h1 {
                font-size: 30px;
            }

            button {
                width: 100%;
            }
        }
         .file-upload {
         display: flex;
         align-items:center;
         gap: 10px;
         background-color: #000;
         padding: 12px;
         border-radius: 25px;
         box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
         width: 100%;
         cursor: pointer;
}

         .file-upload input[type="file"] {
          display: none;
         
}

.file-label {
    background-color:rgb(4, 0, 0);
    color: white;
    padding: 10px 20px;
    border-radius: 20px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    font-weight: bold;
    width: 240px;
            height: 35px;
            background: transparent;
            border-bottom: 1px solid #008000;
            border-top: none;
            border-right: 10px;
            border-left:10px;
            color: #fff;
            font-size: 15px;
            letter-spacing: 1px;
            margin-top: 30px;
            font-family: sans-serif;
}

.file-label:hover {
    background-color: #ff0a16;
}

#file-name {
    color: #fff;
    font-size: 1em;
}

    </style>
</head>
<body>
<div class="circle-text">
    <h1><span class="inscription-text">
    <h1>
        <span style="color:#008000;">bienvenue!</span>  
        <span style="color:rgb(248, 251, 248);font-size: 30px;">chez</span>  
        <span style="color:rgb(184, 7, 7);">AlOmrane...</span>
    </h1> 
  </div>
        <form action="traitement_inscription.php" method="post" enctype="multipart/form-data">
        <fieldset>
        <input type="text" id="nom prénom" name="nom prénom" placeholder="Entrer votre nom et prénom..."><br><br>
        
        <input type="text" id="numero_telephone" name="numero_telephone" placeholder="Entrer votre numéro..."><br><br>
        <input type="text" id="datepicker" name="date_naissance" placeholder="(jj/mm/aaaa)"><br><br>
        <select id="sexe" name="sexe">
        <option value="homme">sexe</option>
            <option value="homme">Homme</option>
            <option value="femme">Femme</option>
        </select><br><br>
        <div class="file-upload">
        <input type="file" id="cv" name="cv" accept=".pdf, .doc, .docx" onchange="updateFileName()">
        <label for="cv" class="file-label">📂 Choisir un fichier</label>
        <span id="file-name">Aucun fichier sélectionné</span>
        </div>
        <input type="email" id="email" name="email" placeholder="exemple@gmail.com"><br><br>
        <div class="password-toggle">
            <input type="password" id="password" name="mot_de_passe" placeholder="Entrer votre mot de passe...">
            <span class="toggle-btn" onclick="togglePasswordVisibility()"></span>
        </div><br><br>
        <input type="password" id="confirm_mot_de_passe" name="confirm_mot_de_passe" placeholder="Confirmer votre mot de passe"><br><br>
       
        <button type="submit">S'inscrire</button>
    </fieldset>
    <div class="footer">
            <p>Déjà inscrit ? <a href="connexion.html">Se connecter</a></p>
        </div>
  </form>

<script>
    function togglePasswordVisibility() {
        var passwordField = document.getElementById("password");
        var confirmPasswordField = document.getElementById("confirm_mot_de_passe");
        if (passwordField.type === "password" && confirmPasswordField.type === "password") {
            passwordField.type = "text";
            confirmPasswordField.type = "text";
        } else {
            passwordField.type = "password";
            confirmPasswordField.type = "password";
        }
    }
    function updateFileName() {
        var input = document.getElementById("cv");
        var fileName = document.getElementById("file-name");
        fileName.textContent = input.files.length > 0 ? input.files[0].name : "Aucun fichier sélectionné";
    }
</script>

</body>
</html>