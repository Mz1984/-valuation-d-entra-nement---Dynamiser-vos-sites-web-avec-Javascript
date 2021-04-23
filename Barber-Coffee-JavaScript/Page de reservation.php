<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Page du Réservation</title>
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
                    <div class="partie-h">   
                        <div class="plage-date2">
                            <div class="plage-date2-partie1">Réservez votre Rendez-vous :</div>
                            <form action="" enctype="multipart/form-data" method="POST">           
                            <div class="plage-date2-partie2">  
                                <div class="bl-dat">                        
                                    <div class="texte">Jour :</div>
                                    <div class="zone-saisie">
                                        <select name="Jour"  class="champ-saisie-formulaire-date">
                                            <option disabled>--------------</option>
                                            <optgroup label="Selectioner ">
                                                <option value="0"></option>
                                            <option value="01">1</option>
                                            <option value="02">2</option> 
                                            <option value="03">3</option>
                                            <option value="04">4</option> 
                                            <option value="05">5</option>
                                            <option value="06">6</option>
                                            <option value="07">7</option> 
                                            <option value="08">8</option>
                                            <option value="09">9</option> 
                                            <option value="10">10</option>
                                            <option value="11">11</option> 
                                            <option value="12">12</option> 
                                            <option value="13">13</option>
                                            <option value="14">14</option> 
                                            <option value="15">15</option>
                                            <option value="16">16</option> 
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option> 
                                            <option value="20">20</option>
                                            <option value="21">21</option> 
                                            <option value="22">22</option>
                                            <option value="23">23</option> 
                                            <option value="24">24</option> 
                                            <option value="25">25</option>
                                            <option value="26">26</option> 
                                            <option value="27">27</option>
                                            <option value="28">28</option> 
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>  
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="bl-dat"> 
                                    <div class="texte">Mois :</div>
                                    <div class="zone-saisie">
                                        <select name="Mois"  class="champ-saisie-formulaire-date">
                                            <option disabled>--------------</option>
                                            <optgroup label="Selectioner ">
                                                <option value="0"></option>
                                            <option value="01">Janvier</option>
                                            <option value="02">Fevrier</option> 
                                            <option value="03">Mars</option>
                                            <option value="04">Avril</option> 
                                            <option value="05">Mai</option>
                                            <option value="06">Juin</option>
                                            <option value="07">Juillet</option> 
                                            <option value="08">Aout</option>
                                            <option value="09">Septembre</option> 
                                            <option value="10">Octobre</option>
                                            <option value="11">Novombre</option> 
                                            <option value="12">Decembre</option> 
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="bl-dat"> 
                                    <div class="texte">Année :</div>
                                    <div class="zone-saisie">                            
                                    <select name="Annee"  class="champ-saisie-formulaire-date">
                                        <option disabled>--------------</option>
                                        <optgroup label="Selectioner ">
                                        <option>2020</option>
                                        <option selected>2021</option> 
                                        <option>2022</option>
                                        <option>2023</option> 
                                        <option>2024</option>
                                        <option>2025</option>
                                        <option>2026</option>   
                                        </optgroup>
                                    </select>    
                                    </div>
                                </div> 
                                <div class="zone-saisie"><input type="submit" value="Valider"class="btn"></div>                    
                            </div>
                        </form>
                        </div>
                                                       
                        <div class="bloc">
                            <div class="partie-reservation">
                                <a href="?0910=oui">
                                 <div class="bloc-reservation" <?php if(isset($_GET['0910'])) {echo"style='background-color: red;'";}?>>Réserver</div>
                                </a>
                            </div> 
                           <div class="partie-horaire">  
                                <span>09</span>
                                <div class="bloc-horaire" ></div> 
                                <span>10</span>
                           </div>
                        </div>                        
                        <div class="bloc">
                            <div class="partie-reservation">
                                <a href="?1011=oui">
                                 <div class="bloc-reservation" <?php if(isset($_GET['1011'])) {echo"style='background-color: red;'";}?>>Réserver</div>
                                </a>
                            </div> 
                            <div class="partie-horaire"> 
                                <span>10</span>
                                 <div class="bloc-horaire" ></div> 
                                 <span>11</span>
                            </div>
                         </div>
                         
                        <div class="bloc">
                            <div class="partie-reservation">
                                <a href="?1112=oui">
                                 <div class="bloc-reservation" <?php if(isset($_GET['1112'])) {echo"style='background-color: red;'";}?>>Réserver</div>
                                </a>
                            </div> 
                            <div class="partie-horaire"> 
                                <span>11</span>
                                 <div class="bloc-horaire" ></div> 
                                 <span>12</span>
                            </div>
                         </div>
                         
                         <div class="bloc">
                            <div class="partie-reservation">
                                <a href="?1213=oui">
                                 <div class="bloc-reservation" <?php if(isset($_GET['1213'])) {echo"style='background-color: red;'";}?>>Réserver</div>
                                </a>
                            </div> 
                             <div class="partie-horaire"> 
                                 <span>12</span>
                                  <div class="bloc-horaire" ></div> 
                                  <span>13</span>
                             </div>
                          </div>
                         
                          <div class="bloc">
                            <div class="partie-reservation">
                                <a href="?1314=oui">
                                 <div class="bloc-reservation" <?php if(isset($_GET['1314'])) {echo"style='background-color: red;'";}?>>Réserver</div>
                                </a>
                            </div> 
                              <div class="partie-horaire"> 
                                  <span>13</span>
                                   <div class="bloc-horaire" ></div> 
                                   <span>14</span>
                              </div>
                           </div>
                         
                           <div class="bloc">
                            <div class="partie-reservation">
                                <a href="?1415=oui">
                                 <div class="bloc-reservation" <?php if(isset($_GET['1415'])) {echo"style='background-color: red;'";}?>>Réserver</div>
                                </a>
                            </div> 
                               <div class="partie-horaire"> 
                                   <span>14</span>
                                    <div class="bloc-horaire" ></div> 
                                    <span>15</span>
                               </div>
                            </div>
                            <div class="plage-horaire">- Horaire du matin -</div>
                         <!--Horaire après midi-->
                            <div class="bloc">
                            <div class="partie-reservation">
                                <a href="?1516=oui">
                                 <div class="bloc-reservation" <?php if(isset($_GET['1516'])) {echo"style='background-color: red;'";}?>>Réserver</div>
                                </a>
                            </div> 
                                <div class="partie-horaire"> 
                                    <span>15</span>
                                     <div class="bloc-horaire" ></div> 
                                     <span>16</span>
                                </div>
                             </div>
                             <div class="bloc">
                            <div class="partie-reservation">
                                <a href="?1617=oui">
                                 <div class="bloc-reservation" <?php if(isset($_GET['1617'])) {echo"style='background-color: red;'";}?>>Réserver</div>
                                </a>
                            </div> 
                                 <div class="partie-horaire"> 
                                     <span>16</span>
                                      <div class="bloc-horaire" ></div> 
                                      <span>17</span>
                                 </div>
                              </div>
                              <div class="bloc">
                            <div class="partie-reservation">
                                <a href="?1718=oui">
                                 <div class="bloc-reservation" <?php if(isset($_GET['1718'])) {echo"style='background-color: red;'";}?>>Réserver</div>
                                </a>
                            </div> 
                                  <div class="partie-horaire"> 
                                      <span>17</span>
                                       <div class="bloc-horaire" ></div> 
                                       <span>18</span>
                                  </div>
                               </div>
                               <div class="bloc">
                            <div class="partie-reservation">
                                <a href="?1819=oui">
                                 <div class="bloc-reservation" <?php if(isset($_GET['1819'])) {echo"style='background-color: red;'";}?>>Réserver</div>
                                </a>
                            </div> 
                                   <div class="partie-horaire"> 
                                       <span>18</span>
                                        <div class="bloc-horaire" ></div> 
                                        <span>19</span>
                                   </div>
                                </div>
                                <div class="bloc">
                            <div class="partie-reservation">
                                <a href="?1920=oui">
                                 <div class="bloc-reservation" <?php if(isset($_GET['1920'])) {echo"style='background-color: red;'";}?>>Réserver</div>
                                </a>
                            </div> 
                                    <div class="partie-horaire"> 
                                        <span>19</span>
                                         <div class="bloc-horaire" ></div> 
                                         <span>20</span>
                                    </div>
                                 </div>
                                 <div class="bloc">
                            <div class="partie-reservation">
                                <a href="?2021=oui">
                                 <div class="bloc-reservation" <?php if(isset($_GET['2021'])) {echo"style='background-color: red;'";}?>>Réserver</div>
                                </a>
                            </div> 
                                     <div class="partie-horaire"> 
                                         <span>20</span>
                                          <div class="bloc-horaire" ></div> 
                                          <span>21</span>
                                     </div>
                                  </div>
                             <div class="plage-horaire">- Horaire du Soir -</div>

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