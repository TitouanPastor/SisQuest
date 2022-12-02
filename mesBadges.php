<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes badges</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Vos badges </h1>
    <?php
        require_once('badges.php');
        $badges = new Badge();
        $badges->addBadges('10_Cadeaux.png');
        $badges->addBadges('ALL_Badges.png');
        $badges->addBadges('Attention.png');
        $badges->addBadges('Barrel_Roll.png');
        $badges->addBadges('Champignon.png');
        $badges->addBadges('ChapeauNoel.png');
        $badges->addBadges('CinfC++.png');
        $badges->addBadges('Combo.png');
        $badges->addBadges('Consentement.png');
        $badges->addBadges('Contraception.png');
        $badges->addBadges('Dépistage.png');
        $badges->addBadges('Faits_Insolites.png');
        $badges->addBadges('FANTIN.png');
        $badges->addBadges('Grossesse.png');
        $badges->addBadges('Konami_Code.png');
        $badges->addBadges('LoveYou3000.png');
        $badges->addBadges('MST.png');
        $badges->addBadges('Regle.png');
        $badges->addBadges('RickRoll.png');
        $badges->addBadges('Sex_Education.png');
        $badges->addBadges('sexe.png');
        $badges->addBadges('SIDA.png');
        $badges->addBadges('Vaccin.png');
        $badges->addBadges('VIH.png');
        $badges->printBadges();


        
    ?>
</body>
</html>