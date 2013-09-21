<?php
include('/../../inc/header.php');

?>
        <div class="grid_10">
            <div class="box round first">
                <h2>
                    Affiche de l'intervention </h2>
                <div class="block">
                    <?php
                    $idintervention = $_GET['idintervention'];
                        $query_inter = mysql_query("SELECT * FROM intervention, client WHERE idintervention=".$idintervention);
                        $donnees_inter = mysql_fetch_array($query_inter);
                        ?>

                        <table>
                        	<tr>
                        		<td>ID Intervention</td>
                        		<td><?php echo $donnees_inter['idintervention']; ?></td>
                        	</tr>
                        	
                        	<tr>
                        		<td>Nom</td>
                        		<td><?php echo $donnees_inter['nom']; ?></td>
                        	</tr>
                        	<tr>
                        		<td>Prenom</td>
                        		<td> <?php echo $donnees_inter['prenom']; ?></td>
                        	</tr>
                        	<tr>
                        		<td>Adresse</td>
                        		<td><?php echo $donnees_inter['adresse1']; ?></td>
                        	</tr>
                        	<tr>
                        		<td>Complément d'adresse</td>
                        		<td><?php echo $donnees_inter['adresse2']; ?></td>
                        	</tr>
                        	<tr>
                        		<td>Code postal</td>
                        		<td><?php echo $donnees_inter['cp']; ?></td>
                        	</tr>
                        	<tr>
                        		<td>Ville</td>
                        		<td><?php echo $donnees_inter['ville']; ?></td>
                        	</tr>
                        	<tr>
                        		<td>Telephone</td>
                        		<td><?php echo $donnees_inter['telephone']; ?></td>
                        	</tr>
                        	
                        	<tr>
                        		<td>Etat de l'intervention</td>
                        		<td>
                        			<?php
                        				if($donnees_inter['etat']==1){echo "<font color=red><u><b>Intervention en cours</b></u></font>";}
                        				if($donnees_inter['etat']==2){echo "<font color=green><u><b>Intervention termine</b></u></font>";}
                        			?>
                        		</td>
                        	</tr>
                        	<tr>
                        		<td>Date</td>
                        		<td><?php echo $donnees_inter['date']; ?></td>
                        	</tr>
                        	<tr>
                        		<td>Marque du téléphone</td>
                        		<td><?php echo $donnees_inter['marque_telephone']; ?></td>
                        	</tr>
                        	<tr>
                        		<td>Série du téléphone</td>
                        		<td><?php echo $donnees_inter['serie_telephone']; ?></td>
                        	</tr>
                        	<tr>
                        		<td>IMEI</td>
                        		<td><?php echo $donnees_inter['imei']; ?></td>
                        	</tr>
                        	<tr>
                        		<td>Batterie Fournis</td>
                        		<td>
                        			<?php
                        				if($donnees_inter['batterie']==0){echo "NON";}
                        				if($donnees_inter['batterie']==1){echo "OUI";}
                        			?>
                        		</td>
                        	</tr>
                        	<tr>
                        		<td>Carte Sim fournis</td>
                        		<td>
                        			<?php
                        				if($donnees_inter['carte_sim']==0){echo "NON";}
                        				if($donnees_inter['carte_sim']==1){echo "OUI";}
                        			?>
                        		</td>
                        	</tr>
                        	<tr>
                        		<td>Chargeur Fournis</td>
                        		<td>
                        			<?php
                        				if($donnees_inter['chargeur']==0){echo "NON";}
                        				if($donnees_inter['chargeur']==1){echo "OUI";}
                        			?>
                        		</td>
                        	</tr>
                        	<tr>
                        		<td>Le Téléphone Démarre ?</td>
                        		<td>
                        			<?php
                        				if($donnees_inter['tel_demarre']==0){echo "NON";}
                        				if($donnees_inter['tel_demarre']==1){echo "OUI";}
                        			?>
                        		</td>
                        	</tr>
                        	<tr>
                        		<td>Code PIN SIM</td>
                        		<td><?php echo $donnees_inter['code_sim']; ?></td>
                        	</tr>
                        	<tr>
                        		<td>Code Utilisateur (si demander)</td>
                        		<td><?php echo $donnees_inter['code_util']; ?></td>
                        	</tr>
                        </table>
                        <a href="../../pdf/intervention.php?idintervention=<?php echo $donnees_inter['idintervention']; ?>"><button class="btn btn-small">Imprimer Intervention</button></a>




                    
                </div>
            </div>
        </div>
        
        <div class="clear">
        </div>
    </div>
    <div class="clear">
    </div>

</body>
</html>
