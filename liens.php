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
       
        <header>
            <span style="color:blue">Internet / 451°F</span> </br> haut débit&thinsp;: <i>30 méga</i></br> modem wi&#64257; 100M*
        </header>

        <nav> 
        	<ul id="menu_horizontal">
        		<li class="bouton_gauche"><a href="index.php">Présentation</a></li>
        		<li class="bouton_gauche"><a href="liens.php">Liens</a></li>
        		<li class="bouton_gauche"><a href="apropos.php">Crédits</a></li>
            </ul>
        </nav>
        
        <section>    
        <p class="liens">
        	<ol id="liste_liens">
        	<?php

            $adresses[] = 'http://fr.wikipedia.org/wiki/Prise_de_t%C3%A9l%C3%A9phone';
            $adresses[] = 'http://www.felinewave.com/wordpress/2009/05/31/utiliser-les-prises-telephoniques-pour-le-reseau-ethernet/';
            $adresses[] = 'http://www.telephonie-pratique.com/accueil/telephonie-fixe/nettoyez-votre-prise-telephonique';
            $adresses[] = 'http://fr.wikipedia.org/wiki/WiMAX';
            $adresses[] = 'http://www.www.blog.lgtel.fr';
            $adresses[] = 'http://www.internetparsatellite.net/index.php/t/15/n/349/satellite-ka-sat.html';
            $adresses[] = 'http://www.123savoie.com/photo-55040-antennes-wimax.html';
            $adresses[] = 'http://www.etoileinformatique.com/adaptateur-/736-prise-telephone-gigogne-rj11-.html';
            $adresses[] = 'http://www.semageek.com/veille/google-considere-deployer-la-fibre-optique-en-europe/';
            $adresses[] = 'http://phototheque.in2p3.fr/main.php?g2_itemId=2136';
            $adresses[] = 'http://assistance.orange.fr/connecter-la-playstation-3-a-la-livebox-en-ethernet-2791.php#';
            $adresses[] = 'http://tpetelephone.blogspot.fr/p/ii-les-ondes-utilisees-pour-les.html';
            $adresses[] = 'http://www.vosgesmatin.fr/actualite/2013/10/08/debits- internet-vers-la-fin-du-flou';
            $adresses[] = 'http://www.materiel.net/cable-reseau/cable-gb-ethernet-1m-vert-50294.html';
            $adresses[] = 'http://cyberbase-compiegne.over-blog.com';
            $adresses[] = 'http://ondelio.wordpress.com';
            $adresses[] = 'http://fr.wikipedia.org/wiki/Routeur';
            $adresses[] = 'http://www.francebleu.fr/infos/internet/offres-internet-trompeuses-bercy-rappelle-les-fournisseurs-l-ordre-908592';
            $adresses[] = 'http://mycoolpizza.blogspot.fr/2013/07/raspberry-pi-connecter-directement-sur.html';
            $adresses[] = 'http://www.bienchoisirmonelectromenager.com/routeur-tp-link-tl-wdr4900-n900-double-bande-surfer-intensement-internet';
            $adresses[] = 'http://www.ejayremy.fr/t1393-cable-ethernet#.Up9OgGTuJCc';
            $adresses[] = 'http://www.francois-brottes.com/_v1/index5.html';
            $adresses[] = 'http://www.cdiscount.com/informatique/materiel-reseau-wifi-internet-bluetooth/routeur-wifi-pro-modem-3-5g/f-107155321-auc3548383083403.html';
            $adresses[] = 'http://tegralis.fr/serveur-informatique-datacenter-infrastructure-virtualisation-revendeur-ibm-nantes-bladecenter-lames.html';
            $adresses[] = 'http://www.franceinfo.fr/environnement/multiplier-le-nombre-d-antennes-relais-pour-etre-moins-expose-aux-ondes-1121023-2013-08-26';
            $adresses[] = 'http://www.sur-la-toile.com/discussion-128601-1-cle-WEP-routeur-sa-veut-dire-quoi-.html';
            $adresses[] = 'http://blog.mavideosurveillance.com/FR/20110616/antenne-wifi-yagi-exterieure/';
            $adresses[] = 'http://didoune.fr/blog/2009/03/28/stocker-et-partager-ses-donnees-gratuitement-sur-internet/';
            $adresses[] = 'http://www.enjoyspace.com/fr/news/un-satellite-europeen-surpuissant-sur-orbite';
            $adresses[] = 'http://www.1and1.fr/serveur/';
            $adresses[] = 'http://www-igm.univ-mlv.fr/~dr/XPOSE2010/inernetsatellite/application.html';
            $adresses[] = 'http://french.wifiusbadapters.com/china-external_antenna_wifi_adapter_gwf_3c1t-100323.html';
            $adresses[] = 'http://www.ariase.com/fr/guides/nra-noeud-raccordement.html';
            $adresses[] = 'http://www.sourcewire.com/news/54847/astrium-s-uk-facility-completes-communications-module-for-eutelsat-s';
            $adresses[] = 'http://www.cdiscount.com/informatique/cle-usb/cle-belkin-wifi-n300-antenne/f-1072253-bel0722868844595.html';
            $adresses[] = 'http://www.journaldunet.com/ebusiness/telecoms-fai/photo/070614-reportage-installation-fibre-optique-orange/4.shtml';
            $adresses[] = 'http://www.freenews.fr/spip.php?article5698';
            $adresses[] = 'http://www.jpfidistribution.com/antenne-tplink-wifi-externe-grille-parabolique-gain-24db-xml-6837_6859_7159-15685.html';
            $adresses[] = 'https://lafibre.info/orange-les-news-sur-la-fibre/reseau-orange';
            $adresses[] = 'http://www.champs-electro-magnetiques.com/ondes/wimax-worldwide-interoperability-for-18.html';


            foreach($adresses as $url){ ?>
            <li class="liens2"><a class="" href="<?php	echo $url; ?>" target=_"blank"><?php echo $url; ?></a></li>
            <?php } ?>
        	</ol> 
        </p>
        </section>
        </br>
        </br>

        <footer>
        *Grâce à votre modem
        jusqu’à <i> 100 Méga </i> 
        vous profitez de la toute
        puissance de l’Ultra
        Haut Débit, dès maintenant&thinsp;!
    	</footer>
	
        <script src="script/jquery-1.11.0.min.js"></script>
        <script type="text/javascript">

        $(document).ready(function(){
            console.log('ok');

            $("#liste_liens li a").each(function(){

                console.log($(this).attr('href'));

                $.get( "checkURL.php", { url: $(this).attr('href') }, function( data ) {
                    //console.log(data);

                    if(data.exist == false){
                        $("#liste_liens li a[href='"+data.url+"']").addClass('notexist');
                        console.log(data.url + ' notexist');
                    }

                },'json');

            })
        })

        </script>
    </body>
</html>
