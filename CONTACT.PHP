
<!DOCTYPE html>
<html lang="fr">
<head>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - AlOmrane Immobilier</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<header>
        <h1>Contactez-Nous</h1>
    </header>

    <div class="contact-container">
        
        <!-- Coordonnées de l'entreprise -->
        <div class="contact-info">
        <h3>Connectez-Vous avec:</h3>
                <div class="icons">
                    <a href="https://www.facebook.com/GroupeALOmraneGAO"><ion-icon name="logo-facebook"></ion-icon></a>
                    <a href="https://www.instagram.com/alomrane.mre?igsh=MWh5ZnQwZ2JkYnB0cA=="><ion-icon name="logo-instagram"></ion-icon></a>
                    <a href="https://x.com/groupealomrane"><ion-icon name="logo-twitter"></ion-icon></a>
                    <a href="https://www.alomrane.gov.ma"><ion-icon name="logo-google"></ion-icon></a>
                    <a href="mailto:contact@alomrane.ma"><ion-icon name="mail"></ion-icon></a>
                </div>
            <h3>Nos coordonnées</h3>
            <p><strong>Adresse :</strong>  AV Mohamed V, Ouarzazate, Maroc</p>
            <p><strong>Téléphone :</strong> <a class="btn-v2 btn-green-v2" href="tel:0801001516" title="0801001516" target="_self">0801001516</a></p>
           
           
        </div>

            <!-- Carte pour l'Agence Al Omrane à Ouarzazate -->
           <iframe 
           src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3375.7470249906095!2d-6.900104723717017!3d30.919715274953487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdaf7fcaacfb8aa7%3A0xf88b7ad1b7f0f888!2sAl%20Omrane%2C%20Av.%20Mohammed%20V%2C%20Ouarzazate%2C%20Maroc!5e0!3m2!1sfr!2sma!4v1711227890123"
           width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy">
           </iframe>


    <style>
        body {
         background-color: #000; /
         color: #fff; 
}

header {
    background-color: #900;
    text-align: center;
    padding: 20px 0;
}

h1 {
    margin: 0;
    font-size: 2.5rem;
    color: #fff; 
}
h3{  
    color:#900
}


        
         .icons a{
        text-decoration: none;
        color: #FFF;
        
    }
    .icons ion-icon{
        color: #FFF;
        font-size: 30px;
        padding-left: 14px;
        padding-top: 5px;
        transition: 0.3s ease;
        
    }
       .icons ion-icon:hover{
        color:rgb(224, 21, 21);
    }
        .contact-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #111; 
            border: 2px solid #900;
            color: #fff; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        .contact-info {
            margin-top: 10px;
            text-align: left;
            
        }
        .map {
            margin-top: 0px;
        }
    </style>

</body>
</html>
