<div class="row">
    <div class="col-lg-12">
        <h2 class="titleRed">Formulaire de candidature</h2>
    </div>                       
</div>

<!-- Début du formulaire -->
<div class="row">
    <div class="col-lg-12 cadre_formulaire">

    <form action="./index.php?action=valider" method="POST">

    <!-- Début du slider contenant des formulaires avec des boutons "suivant" - "précédent" pour passer aux étapes d'inscriptions suivantes. -->

        <div class="row">
            <div class="slider">
                <ul>
                    <!-- première li -->
                    <li>
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="titleBlue">Campus</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                    <input type="radio" name="idSite" value=4>
                                    <label>Nantes</label>
                                    <input type="radio" name="idSite" value=1>
                                    <label>Angers</label>
                                    <input type="radio" name="idSite" value=5>
                                    <label>Rennes</label>
                                    <input type="radio" name="idSite" value=3>
                                    <label>Laval</label>
                                    <input type="radio" name="idSite" value=6>
                                    <label>Le Mans</label>
                                    <input type="radio" name="idSite" value=2>
                                    <label>Caen</label>                                   
                                    <input type="radio" name="idSite" value=7>
                                    <label>Paris</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="titleBlue">Informations</h2>
                            </div>
                        </div>
                            <div class="row">
                                <div class="col-lg-12 selectInfo1">
                                    <label>Nom : </label>
                                    <input type="text" name="nom">
                                    <label>Prenom : </label>
                                    <input type="text" name="prenom">
                                    <label>Date de naissance : </label>
                                    <input type="date" name="dateNaissance">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 selectInfo2">
                                    <label>Ville :</label>
                                    <input type="text" name="ville">
                                    <label>Téléphone : </label>
                                    <input type="text" name="tel">
                                    <label>Code postal : </label>
                                    <input type="text" name="cp">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 selectInfo3">
                                    <label>E-mail : </label>
                                    <input type="text" name="email">
                                </div>
                            </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <span class="suivant pull-right" style="margin-bottom: 120px;">Suivant</span>
                            </div>
                        </div>
                    </li>
                    <!-- deuxième li -->
                    <li>
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="titleBlue">Situation</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                    <input type="radio" name="idStatut" value=7 id="trigger">
                                    <label>En formation</label>                                    
                                    <input type="radio" name="idStatut" value=9>
                                    <label>Salarié</label>
                                    <input type="radio" name="idStatut" value=5>
                                    <label>Demandeur d'emploi</label>
                                    <div class="col-lg-12">
                                        <div id="hidden">
                                            <label>Dans quel etablissement</label>
                                            <input type="text" name="etabOrigine">
                                            <label>Dernier diplôme obtenu</label>
                                            <input type="text" name="diplomeObtenu">
                                        </div>
                                    </div>        
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="titleBlue">Réorientation</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                            </div>
                        </div>
                        <div class="row pad rowPad">
                            <div class="col-lg-12">
                                <span class="precedent pull-left">Précédent</span>
                                <span class="suivant pull-right">Suivant</span>
                            </div>
                        </div>
                    </li>
                    <!-- troisième li -->
                    <li>
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="formation titleBlue">Formation</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 formation1">
                                    <input type="radio" name="idFormation" value=10>
                                    <label>IT Start</label>
                                    <input type="radio" name="idFormation" value=9>
                                    <label>DIGISTART</label>
                                    <input type="radio" name="idFormation" value=8>
                                    <label>BTS SIO</label>
                                    <br>  
                                    <input type="radio" name="idFormation" value=12>
                                    <label>Developpeur logiciel</label>
                                    <input type="radio" name="idFormation" value=15>
                                    <label>Technicien supérieur en support informatique</label>
                                    <input type="radio" name="idFormation" value=13>
                                    <label>Responsable infrastructure système et réseaux</label>
                                    <input type="radio" name="idFormation" value=6>
                                    <label>WEB MASTER et DESIGNER</label>
                                    <br>  
                                    <input type="radio" name="idFormation" value=1>
                                    <label>Chef de projet en conception de système informatique</label> 
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="imie titleBlue">je connais l'imie</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 formation1">
                                        <label>comment ?</label>
                                        <input type="text" name="sourceInfo">
                                </div>
                            </div>
                            <div class="row" style="padding-top: 80px;">
                                <div class="col-lg-12">
                                    <span class="precedent pull-left">Précédent</span>
                                    <span class="terminer pull-right" style="margin-right: 5%;"><input type="submit" name="action" value="valider"></span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        </form>
    </div>
</div>



