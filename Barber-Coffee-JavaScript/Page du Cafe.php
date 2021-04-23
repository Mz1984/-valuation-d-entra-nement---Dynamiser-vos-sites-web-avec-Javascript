<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Page du Coiffure</title>
        <meta name= "author" content= "Mzoughi Faouzi" />
        <meta name= "reply-to" content= "Faouzimzoughui84@gmail.com" />
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
            
            <div class="action">
                <div id="ouvrir-popup" onclick="openmodal()"><span>Connecter</span></div>
                <div id="bloc-popup">  
                    <form action="" enctype="multipart/form-data"   >          
                     <div class="contenu-popup">
                         <div class="coté-haut-popup"></div>
                         <div class="partie-milieu-popup">
                             <div class="coté-milieu-externe"></div>
                             <div class="coté-milieu-interne">
                                <div class="coté-milieu-interne-titre">
                                    Saisir vos coordonnées :
                                </div>
                                <div class="coté-milieu-interne-ligne">
                                     <div class="span">E-mail :</div>
                                     <div class="input">
                                        <input type="email" name="email" required placeholder="mail@serveur.com" class="champ-saisie-formulaire">
                                     </div>  
                                </div>
                                <div class="coté-milieu-interne-ligne">
                                    <div class="span">Mot de passe :</div>
                                    <div class="input">
                                       <input type="password" name="mot-de-passe" required placeholder="Saisir votre mot de passe" class="champ-saisie-formulaire">
                                    </div>  
                               </div>
                               <div class="coté-milieu-interne-ligne"> 
                                   <div class="bloc-boutton">
                                       <input type="submit" value="Valider" id="boutton">
                                       <input type="reset" value="Annuler" id="boutton">
                                       <input type="button" id="boutton" value="Quitter" onclick="closemodal()">  
                                   </div>  
                              </div>
                             </div> 
                             <div class="coté-milieu-externe"></div>
                         </div>
                         <div class="coté-bas-popup"></div>
                     </div>
                    </form> 

                </div>
            </div>
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
                    <!--Article-->
                    <div class="partie-article">
                        <div class="partie-article-ligne">
                            <!-- 1 ligne : produit 1-->
                            <div class="partie-m-article">
                            <div class="partie-article-detail">
                                <div class="img-detail">
                                    <img class="photo" src="images/the.jpg">
                                </div>
                                <div class="texte-detail">
                                    <span>- Thé</span><br>
                                    <span>- 2 Euro</span>
                                </div>
                            </div>
                            <div class="partie-article-detail">
                                <div class="partie-article-avis">
                                  <a href="" onclick='document.getElementById("formulaire1").style.display="none";
                                  document.getElementById("partie1").style.display="flex";
                                  document.getElementById("partie2").style.display="none";
                                  document.getElementById("partie3").style.display="none";
                                 '>
                                    <img src="images/jaime.png" 
                                    onmouseover="this.src='images/jaime-select.png';" 
                                    onmouseout="this.src='images/jaime.png';" class="img-avis">
                                  </a>
                                </div>
                                <div class="partie-article-avis">
                                    <a href="" onclick='document.getElementById("formulaire1").style.display="none";
                                             document.getElementById("partie1").style.display="none";
                                             document.getElementById("partie2").style.display="flex";
                                             document.getElementById("partie3").style.display="none";
                                    '>
                                    <img src="images/jaime-pas.png"
                                    onmouseover="this.src='images/jaime-pas-select.png';" 
                                    onmouseout="this.src='images/jaime-pas.png';" class="img-avis">
                                </a>
                                </div>
                                <div class="partie-article-avis"> 
                                    <img src="images/commentaire.jpg"onclick='document.getElementById("formulaire1").style.display="flex";
                                             document.getElementById("partie1").style.display="flex";
                                             document.getElementById("partie2").style.display="flex";
                                             document.getElementById("partie3").style.display="flex";
                                            ' 
                                    onmouseover="this.src='images/commentaire-select.jpg';" 
                                    onmouseout="this.src='images/commentaire.jpg';" class="img-avis">
                                
                                </div> 
                            </div>
                            
                            <div class="partie-article-detail-affiche">
                                <div  class="partie-article-avis">
                                    <span id="partie1">1222 j'aime</span>
                                </div>
                                <div class="partie-article-avis">
                                    <span id="partie2">1222 je n'aime pas</span>
                                </div>
                                <div class="partie-article-avis">
                                    <span id="partie3">1222 commentaires</span>
                                </div> 
                            </div>
                            
                            <form action="" enctype="multipart/form-data" method="POST" id="formulaire1" style="display: none;">
                              <div class="partie-article-detail">
                                <input type="text" class="champ-saisie"placeholder="Commenter le produit">
                                <input type="submit" value="Ok"class="btn">
                            
                              </div>
                            </form>
                        </div>
                    </div>
                </div> 
                    <span class="partie-e2"></span>
                </div>
                <div class="Partie-bas"></div> 
                <div class="num-page-produit">
                    <a href=""><span>1</span></a>-
                    <a href=""><span>2</span></a>-
                    <a href=""><span>3</span></a>-
                    <a href=""><span>4</span></a>
                </div>
            </div>

        </div>
        <div id="pied-de-page">
              <span>-1-</span>
        </div>
    
</body></html>