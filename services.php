<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services Al Omrane</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Nos Services</h1>
    </header>
    <section class="services">
        <div id="services-list">
            <?php
                $services = [
                    ['title' => 'Logement Social', 'description' => 'Construction et promotion de logements accessibles.'],
                    ['title' => 'Réhabilitation Urbaine', 'description' => 'Amélioration des infrastructures urbaines et quartiers sous-équipés.'],
                    ['title' => 'Aménagement Urbain', 'description' => 'Planification et aménagement des espaces publics et zones résidentielles.']
                ];
                foreach ($services as $service) {
                    echo "<div class='service'><h3>{$service['title']}</h3><p>{$service['description']}</p></div>";
                }
            ?>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const services = document.querySelectorAll('.service');
            services.forEach(service => {
                service.addEventListener('click', () => {
                    alert(`Vous avez sélectionné : ${service.querySelector('h3').textContent}`);
                });
            });
        });
    </script>
    <style>
        
body {
    background-color: #000;
    color: #fff;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #900;
    text-align: center;
    padding: 20px 0;
}

h1 {
    margin: 0;
    font-size: 2.5rem;
}

.services {
    max-width: 800px;
    margin: 50px auto;
    background-color: #111;
    padding: 30px;
    border: 2px solid #900;
    border-radius: 10px;
}

.service {
    background-color: #222;
    margin: 10px 0;
    padding: 15px;
    border: 1px solid #900;
    border-radius: 8px;
    cursor: pointer;
}

.service h3 {
    margin: 0;
    color: #ff4444;
}

.service p {
    margin: 5px 0 0;
    color: #ccc;
}
</style>
</body>
</html>
