<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Page du Contact</title>
        <meta name= "author" content= "Mzoughi Faouzi" />
        <meta name= "reply-to" content= "faouzimzoughui84@gmail.com" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="refresh" content="1500;" />
        <meta name="description" content="salon de coiffure, salon de café, Coiffure a Arras">
        <meta name="viewport" content="width=device-width, minimum-scale=0.5, initial-scale=1, maximum-scale=5.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="shortcut icon" type="image/gif" href="images/profil.jpg" />
        <link rel="stylesheet " type="text/css" href="Style/feuille.css"> 
        <script type="text/javascript" src="JScript/popup.js"></script>
        <script type="text/javascript" src="JScript/Script.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
   
    <body>
        <div id="en-tete" style="background-image:url(images/fond1.jpg);width: 100%; height: 180px; background-repeat:repeat-x;"> 
                 <div class="col-sm-1">
                    <div><img src="images/logo.jpg" class="img"></div> 
                 </div>
                 <div class="col-sm-7"> 
                    <div class="texte">Barber Coffee<br><span>Salon de the + Coiffure</span> </div>
                 </div> 
        </div>
        <div class="ligne">
            <div class="banniere">Tel :<span>09 54 74 48 29</span>  
                <a href="https://www.google.com/maps?ll=50.285319,2.775323&z=6&t=m&hl=fr&gl=US&mapclient=embed&q=38+Rue+Abel+Bergaigne+62000+Arras">
                    <span>Maps</span>
                </a> 
            </div>
            
            <div class="action"><a href="Page d'Inscription.html"><span>S'inscrire</span></a></div>
            
            <div class="action"><a href="Page de connexion.html"><span>Connecter</span></a></div>
            <div class="img-profil"><img src="images/profil.jpg" width="20" height="20"></div>
        </div>
        <div id="milieu-de-page">
            <div id="navigation">
                <div class="menu">
                    <a href="Page d'Acceuil.html"> <div class="ligne-menu">Acceuil </div></a>
                    <a href="Page du Cafe.php"> <div class="ligne-menu">Salon de Thé</div></a>
                    <a href="Page du Coiffure.php"> <div class="ligne-menu">Salon de Coiffure</div></a> 
                    <a href="Page de reservation.php"> <div class="ligne-menu">Réservation</div></a>
                    <a href="Page du contact.php"> <div class="ligne-menu">Contact</div> </a>
                </div>
                <form action="" enctype="multipart/form-data" method="POST">
                <div class="bloc-recherche">  
                    <div class="lib-texte">Recherche Rapide:</div>  
                    <div class="recherche">              
                        <input type="text" class="champ-saisie"placeholder="Rechercher">
                        <input type="submit" value="Ok"class="btn">
                    </div>
                </div>
            </form>
            </div>
            <div id="section">
                <div class="Partie-haut"></div>
                <div class="Partie-milieu">
                    <span class="partie-e1"></span>
                    <div class="partie-m">
                        <div class="partie-m-gauche-input">
                          <form action="" enctype="multipart/form-data" method="POST">
                            <div class="formulaire-inscription">
                                <span>Saisir vos coordonnées :</span> 
                            </div>
                            <div class="formulaire-inscription">
                                <div class="designation">Nom :</div>
                                <div class="zone-texte"><input type="text" name="nom" placeholder="Votre Nom" class="champ-saisie-formulaire"></div>
                            </div>
                            <div class="formulaire-inscription">
                                <div class="designation">E-mail :</div>
                                <div class="zone-texte"><input type="email" name="email" placeholder="Votre E-mail" class="champ-saisie-formulaire"></div>
                            </div>  
                            <div class="formulaire-inscription">
                                <div class="designation">Object :</div>
                                <div class="zone-texte"><input type="text" name="objet" placeholder="Objet du message" class="champ-saisie-formulaire"></div>
                            </div>
                            <div class="formulaire-inscription">
                                <div class="designation">Message :</div> 
                                <div class="zone-texte">
                                    <textarea    placeholder="Votre message" rows="10" cols="95"></textarea>
                                </div> 
                            </div>                         
                            <div class="formulaire-inscription">
                                <div class="designation-vide"></div>
                                <div class="zone-texte-btn">
                                    <input type="submit" class="btn-inscription" name="valier" value="Valider">
                                </div>
                            </div>
                          </form>
                        </div> 
                        </div>
                    <span class="partie-e2"></span>
                </div>
                <div class="Partie-bas"></div> 
            </div>

        </div>
        <div id="pied-de-page">
              <span>-1-</span>
        </div>
    
</body></html>