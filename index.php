<?php
include ('inc/header.php');
?>
<!--          <div class="grid_2">
            <div class="box sidemenu">
                <div class="block" id="section-menu">
                    <ul class="section menu">
                        <li><a class="menuitem">Menu 1</a>
                            <ul class="submenu">
                                <li><a>Submenu 1</a> </li>
                                <li><a>Submenu 2</a> </li>
                              
                            </ul>
                        </li>
                        <li><a class="menuitem">Menu 2</a>
                            <ul class="submenu">
                                <li><a>Submenu 1</a> </li>
                                <li><a>Submenu 2</a> </li>
                                <li><a>Submenu 3</a> </li>
                                <li><a>Submenu 4</a> </li>
                                <li><a>Submenu 5</a> </li>
                            </ul>
                        </li>
                        <li><a class="menuitem">Menu 3</a>
                            <ul class="submenu">
                                <li><a>Submenu 1</a> </li>
                                <li><a>Submenu 2</a> </li>
                                <li><a>Submenu 3</a> </li>
                                <li><a>Submenu 4</a> </li>
                                <li><a>Submenu 5</a> </li>
                                <li><a>Submenu 1</a> </li>
                                <li><a>Submenu 2</a> </li>
                                <li><a>Submenu 3</a> </li>
                                <li><a>Submenu 4</a> </li>
                                <li><a>Submenu 5</a> </li>
                            </ul>
                        </li>
                        <li><a class="menuitem">Menu 4</a>
                            <ul class="submenu">
                                <li><a>Submenu 1</a> </li>
                                <li><a>Submenu 2</a> </li>
                                <li><a>Submenu 3</a> </li>
                                <li><a>Submenu 4</a> </li>
                                <li><a>Submenu 5</a> </li>
                                <li><a>Submenu 6</a> </li>
                                <li><a>Submenu 7</a> </li>
                                <li><a>Submenu 8</a> </li>
                                <li><a>Submenu 9</a> </li>
                                <li><a>Submenu 10</a> </li>
                    
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div> --> 

        <div class="grid_10">
        	<div class="box round">
        		<h2>Liste des Intervention en cours</h2>
        			<div class="block">
        				<table class="inter-index" width="100%" border="2">
        					<tr>
        						<th>Id</th>
        						<th>Nom client</th>
        						<th>Numéro de Téléphone 1</th>
        						<th>Numéro de Téléphone 2</th>
        						<th>Marque du Téléphone</th>
        						<th>Serie du Téléphone</th>
        						<th>Action</th>
        					</tr>
        					<tr>
        					<?php 
        						$query_inter2 = mysql_query("SELECT * FROM intervention, client WHERE etat=1");
        						while($donnees_inter2 = mysql_fetch_array($query_inter2)){
        					?>
        						<td><?php echo $donnees_inter2['idintervention']; ?></td>
        						<td><?php echo $donnees_inter2['nom']; ?> <?php echo $donnees_inter2['prenom']; ?></td>
        						<td><?php echo $donnees_inter2['telephone']; ?></td>
        						<td><?php echo $donnees_inter2['telephone2']; ?></td>
        						<td><?php echo $donnees_inter2['marque_telephone']; ?></td>
        						<td><?php echo $donnees_inter2['serie_telephone']; ?></td>
        						<td><a href="core/intervention/affiche_intervention.php?idintervention=<?php echo $donnees_inter2['idintervention']; ?>">Afficher l'intervention</a></td>
        					<?php } ?>
        					</tr>
        				</table>
        				<div class="clear"></div>
        			</div>
        		</div>
        	</div>
        <div class="clear">
        </div>
    </div>
    <div class="clear">
    </div>
    <div id="site_info">
        <p>
            Copyright &copy; 2013 GCO telephonique. Tous Droits Réservé
        </p>
    </div>
</body>
</html>
