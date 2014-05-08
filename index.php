<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="user-scalable=no, initial-scale = 1, minimum-scale = 1, maximum-scale = 1, width=device-width">
        <link rel="stylesheet" href="css/style4.css" />
        <link rel="stylesheet" media="screen and (max-width:768px)" href="css/ipad4.css" />
        <link rel="stylesheet" media="screen and (max-width:1024px)" href="css/ipadbis4.css" />
        <link rel="stylesheet" media="screen and (max-width:480px)" href="css/iphone.css" />

        <title>Internet/451°F</title>
        <link rel="icon" type="image/x-icon" href="favicon.ico" />
    </head>

    <body>
        <h6>
		01 Jan 2014</br>&darr;</br>
        <?php
        // affiche la date du jour au format français
        setlocale(LC_TIME, "fr_FR");
        echo strftime("%d %b %Y", strtotime(date('c')));
        ?>
       </h6>
       
<header><span style="color:blue">Internet / 451°F</span> </br> haut débit&thinsp;: <i>30 méga</i></br> modem wi&#64257; 100M*</header>

<nav> 
	<ul id="menu_horizontal">
		<li class="bouton_gauche"><a href="index.php">Présentation</a></li>
		<li class="bouton_gauche"><a href="liens.php">Liens</a></li> 
		<li class="bouton_gauche"><a href="apropos.php">Crédits</a></li>
    </ul>
</nav>
<section>

<p class="contenu">    
Ce site web a été pensé comme le complément d’un livre imprimé portant le même nom. L’intention de ce travail est de donner à voir au lecteur une série d’images trouvée sur internet et présentant divers dispositifs permettant d’avoir un accès à ce même réseau. Par ce biais, le souhait est de questionner et comparer les possibilités mais aussi les notions d’archive et de mémoire propres aux supports imprimé et écran. </br></br>
Alors que la version imprimée répertorie et sauvegarde les images sur le papier&thinsp;; la forme en réseau donne quant à elle ces images sous une forme hypertextuelle. Elle permet ainsi d’avoir accès au même catalogue d’images, mais aussi aux contenus de chacune des plateformes sur lesquelles elles sont présentées. En contre-partie d’un contenu augmenté, la pérennité des informations sur la version écran, n’est plus aussi stable qu’avec l’imprimé. Combien de temps ce site mis en ligne au début de l’année 2014 permettra d’avoir accès à la totalité de la banque d’image&thinsp;?</br></br>
</br></br>

</section>
<aside>
<img class="imagelivre" src="image/livre.jpg" alt="image livre édition des formes" title="image livre édition des formes"/>
</aside>
</br>
</br>

	<footer>
*Grâce à votre modem
jusqu’à <i> 100 Méga </i> 
vous profitez de la toute
puissance de l’Ultra
Haut Débit, dès maintenant&thinsp;!
	</footer>
	
    </body>
</html>
