<?php

require_once 'connexion.php';
$resultat=isset($_GET['resultat'])? $_GET['resultat'] : '';


?>

        <div></div>
        <div class="container">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <form method="post" action="ajouterEtudiant.php">

                    <?php

                    switch ($resultat){
                        case 1:
                            echo "<div class='error'>Enregistrement Echouer Tout le champs ne sont pas Remplir Veuillez Remplir le Champs Obligatoir:</div>";
                            break;
                        case 2:
                            echo "<div class='success'><h3>Enregistrement Effectuer...</h3></div>";
                            break;

                    }
                    ?>

                    <input type="text"name="nom" class="form-control" placeholder="Nom"/><br>
                    <input type="text"name="postnom" placeholder="Post-Nom"class="form-control" /><br>
                    <input type="text"name="prenom" placeholder="Prenom"class="form-control" /><br>
                    <select type="text"name="sexe" placeholder="Sexe"class="form-control">
                        <option>Masculin</option>
                        <option>Femimin</option>
                        <option>Autre</option>
                    </select><br>
                    <label>Date de Naissance</label>
                    <input type="date"name="datenaissance" placeholder="date de naissance"class="form-control"  /><br>
                    <input type="text"name="lieuNaissance" placeholder="Lieu de Naissance"class="form-control" /><br>
                    <input type="text"name="nomdupere" placeholder="Nom du Pere"class="form-control" /><br>
                    <input type="text"name="nomdelamere" placeholder="Nom de la Mere"class="form-control" /><br>
                    <input type="text"name="nationalite" placeholder="nationalite"class="form-control" /><br>
                    <input type="text"name="codeEtudiant" placeholder="Code Etudiant"class="form-control" /><br>
                    <input type="text"name="promotion" placeholder="Promotion"class="form-control" /><br><h>
                        <input type="submit" value="valider" class="btn btn-primary">
                        <input type="reset" value="annuler" class="btn btn-warning"></h>
                </form>
            </div>

            <div class="col-lg-7 col-md-7 col-sm-7">
                <div class="table-responsive">

                    <table class="table table-bordered">
                        <thead>
                        <th>Nom</th><th>Post-nom</th><th>Prenom</th><th>Sexe</th><th>Date Naissance</th>
                        <th>Lieu Naissance</th><th>Nom pere</th><th>Nom Mere</th>
                        <th>Nationalite</th><th>Code Etudiant</th><th>Promotion</th>
                        </thead>
                        <tbody>
                        <?php
                        $reponse = $sql->query('SELECT * FROM etudiant');

                        while ($donnees = $reponse->fetch())
                        {?>


                            <tr>
                                <td><?php  echo $donnees['nom'] ;?></td>
                                <td><?php  echo $donnees['postnom'] ;?></td>
                                <td><?php  echo $donnees['prenom'] ;?></td>
                                <td><?php  echo $donnees['sexe'] ;?></td>
                                <td><?php  echo $donnees['dateNaiss'];?></td>
                                <td><?php  echo $donnees['lieuNaiss'] ;?></td>
                                <td><?php  echo $donnees['nompere'] ;?></td>
                                <td><?php  echo $donnees['nomMere'] ;?></td>
                                <td><?php  echo $donnees['nationalite'] ;?></td>
                                <td><?php  echo $donnees['codeEtudiant'] ;?></td>
                                <td><?php  echo $donnees['promotion'] ;?></td>
                                <?php echo "<td><a href=\"modifierEtudiant.php?idEtu=".$donnees['idEtu']
                                    ."&nom=".$donnees["nom"]."&postnom=".$donnees['postnom']
                                    ."&prenom=".$donnees['prenom']."&sexe=".$donnees['sexe']
                                    ."&dateNaiss=".$donnees['dateNaiss']."&lieuNaiss=". $donnees['lieuNaiss']
                                    ."&nompere=".$donnees['nompere']."&nomMere=". $donnees['nomMere']
                                    ."&nationalite=".$donnees['nationalite']."&codeEtudiant=".$donnees['codeEtudiant']
                                    ."&promotion=".$donnees['promotion']."\"><img src='images/edit.png' alt='Modifier'>Modif</a></td>";?>

                                <?php echo "<td><a href=\"supprimerEtudiant.php?idEtu=".$donnees['idEtu']."\">
                            <img src='images/delete.png' alt='supprimer'>Suppr</a></td>"?>

                            </tr>

                            <?php
                        }?>
                        </tbody>
                    </table>
                    <?php

                    $reponse->closeCursor();


                    ?>

                </div>
            </div>


        </div>



        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="js/jquery-3.2.1.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
        <script src="js/holder.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="js/ie10-viewport-bug-workaround.js"></script>
    </body
    </html>
<?php
