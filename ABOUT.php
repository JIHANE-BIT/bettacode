<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos de Nous</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>À propos de nous</h1>
    </header>
    <section class="about">
        <h2>Qui sommes-nous ?</h2>
        <p>Entreprise publique stratégique née en 2007 de la volonté de l’État de créer à partir de la fusion d’établissements publics (ERAC-ANHI-SNEC-Attacharouk) un opérateur-aménageur pour la mise en œuvre de la politique de l’État en matière d’habitat et de développement urbain. 
Contributeur de premier ordre à l’effort national de production de logements et principalement ceux destinés aux populations les plus démunies, et particulièrement dans les zones et les segments en déficit. Il contribue ainsi à travers son positionnement social à renforcer l’offre d’habitats pour les couches sociales à faible revenu et classe moyenne et à améliorer leur cadre de vie.  
Opérateur privilégié de l’État et des collectivités territoriales dans la résorption de l’habitat insalubre et clandestin ainsi que dans la prévention de sa reconstitution.  
Aménageur de référence à l’échelle nationale qui accompagne la politique de développement des villes nouvelles et des grands projets urbains intégrés. 
Le Groupe assure ces différentes missions grâce à une présence sur l’ensemble du territoire national à travers ses 70 représentations (14 filiales et 56 agences). Il dispose aussi d’une représentation à Paris qui lui donne une présence et une visibilité à l’international. 
L’atteinte de ces objectifs se base sur un partenariat renforcé avec l’ensemble des acteurs centraux et locaux (élus et autorités locales), publics et privés, et sur un renforcement du positionnement du Groupe en tant qu’entreprise citoyenne, moderne et performante.
Des valeurs partagées
A travers sa mission fondamentalement SOCIALE, le Groupe AL OMRANE place le curseur sur le développement humain, à travers l’inclusion mais aussi la proximité et le dialogue permanent avec les différents acteurs et instances (institutions publiques, collectivités et autres….</p>
    </section>
    <section class="team">
        <h2>Notre Équipe</h2>
        <div id="team-members">
            <?php
                $team = [
                    ['name' => 'Alice Dupont', 'role' => 'Développeuse Web'],
                    ['name' => 'Jean Martin', 'role' => 'Designer UX/UI'],
                    ['name' => 'Sophie Leroy', 'role' => 'Chef de Projet']
                ];
                foreach ($team as $member) {
                    echo "<div class='member'><h3>{$member['name']}</h3><p>{$member['role']}</p></div>";
                }
            ?>
        </div>
    </section>
    <script src="script.js"></script>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');
</style>
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

.about, .team {
    max-width: 800px;
    margin: 50px auto;
    background-color: #111;
    padding: 30px;
    border: 2px solid #900;
    border-radius: 10px;
}


.member {
    background-color: #222;
    margin: 10px 0;
    padding: 15px;
    border: 1px solid #900;
    border-radius: 8px;
}

.member h3 {
    margin: 0;
    color: #ff4444;
}

.member p {
    margin: 5px 0 0;
    color: #ccc;
}

team-members {
    display: flex;
    flex-direction: column;
    align-items: center;
}
</style>
</body>
</html>
