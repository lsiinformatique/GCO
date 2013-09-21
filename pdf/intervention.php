<?php
mysql_connect("localhost", "root", "");
mysql_select_db("gco");

$idintervention = $_GET['idintervention'];
$query = "SELECT * FROM intervention, client, agence WHERE idintervention=".$idintervention;
$query_inter = mysql_query($query);
$donnees_inter = mysql_fetch_array($query_inter);

?>

<link rel="stylesheet" type="text/css" href="intervention.css">

<page id="intervention">
<div id="entete-left">
	<b><?php echo $donnees_inter['raison_social']; ?></b><br>
	<?php echo $donnees_inter['adresse1']; ?><br>
	<?php echo $donnees_inter['adresse2']; ?><br>
	<?php echo $donnees_inter['cp']; ?> <?php echo $donnees_inter['ville']; ?><br>
	Tel: <?php echo $donnees_inter['telephone']; ?>
</div>
<div id="entete-right">
Date: <?php echo $donnees_inter['date']; ?><br>

<div class="titre_doc">FICHE D'INTERVENTION N°<?php echo $donnees_inter['idintervention']; ?></div>
</div>

<div id="bloc_client">
	<div class="bloc_client_left">
		<table>
			<tr>
				<td class="gras">Nom:</td>
				<td><?php echo $donnees_inter['nom']; ?></td>
			</tr>
			<tr>
				<td class="gras">Prenom:</td>
				<td><?php echo $donnees_inter['prenom']; ?></td>
			</tr>
			<tr>
				<td class="gras">Adresse:</td>
				<td><?php echo $donnees_inter['adresse1']; ?></td>
			</tr>
			<tr>
				<td class="gras">Complément d'adresse:</td>
				<td><?php echo $donnees_inter['adresse2']; ?></td>
			</tr>
			<tr>
				<td class="gras">Code Postal:</td>
				<td><?php echo $donnees_inter['cp']; ?></td>
			</tr>
			<tr>
				<td class="gras">Ville:</td>
				<td><?php echo $donnees_inter['ville']; ?></td>
			</tr>
			<tr>
				<td class="gras">Téléphone:</td>
				<td><?php echo $donnees_inter['telephone']; ?></td>
			</tr>
		</table>
	</div>

	<div class="bloc_client_right">
		<table>
			<tr>
				<td class="gras">Agence</td>
				<td><?php echo $donnees_inter['raison_social']; ?></td>
			</tr>
			<tr>
				<td class="gras">Statut</td>
				<td><?php echo $donnees_inter['etat']; ?></td>
			</tr>
		</table>
	</div>
</div>
<div id="bloc_telephone">
	<div class="bloc_telephone_left">
		<table>
			<tr>
				<td>Marque du Téléphone</td>
				<td><?php echo $donnees_inter['marque_telephone']; ?></td>
			</tr>
			<tr>
				<td>Série du Téléphone</td>
				<td><?php echo $donnees_inter['serie_telephone']; ?></td>
			</tr>
			<tr>
				<td>N° IMEI</td>
				<td><?php echo $donnees_inter['imei']; ?></td>
			</tr>
			<tr>
				<td>Code PIN SIM</td>
				<td><?php echo $donnees_inter['code_sim']; ?></td>
			</tr>
			<tr>
				<td>Code Utilisateur</td>
				<td><?php echo $donnees_inter['code_util']; ?></td>
			</tr>
		</table>
	</div>

	<div class="bloc_telephone_right">
		<table>
			<tr>
				<td>Batterie Fournis</td>
				<td>
					<?php if($donnees_inter['batterie']==0){echo "NON";}else{echo "OUI";} ?>
				</td>
			</tr>
			<tr>
				<td>Carte SIM fournis</td>
				<td><?php if($donnees_inter['carte_sim']==0){echo "NON";}else{echo "OUI";} ?></td>
			</tr>
			<tr>
				<td>Chargeur Fournis</td>
				<td><?php if($donnees_inter['chargeur']==0){echo "NON";}else{echo "OUI";} ?></td>
			</tr>
			<tr>
				<td>Le téléphone demarre ?</td>
				<td><?php if($donnees_inter['tel_demarre']==0){echo "NON";}else{echo "OUI";} ?></td>
			</tr>
		</table>
	</div>
</div>
<div id="bloc_probleme">
	Travail à effectuer:
</div>
<div id="bloc_solution">
	Solution apporter:
</div>

<div id="condition">
	<h2>Extrait des Conditions Générales de Service Téléphonique</h2>
	<p>Le client certifie que le matériel ci-dessus indiqué n'a pas été ouvert ou modifié par du personnel non qualifié, et que ce matériel n'a subit aucun dommage pouvant annuler une garantie
constructeur. Au cas où le matériel serait sous garantie, gérable par <?php echo $donnees_inter['raison_social']; ?>, le client s'engage à fournir une copie de sa facture d'achat et accepte, s'il ne peut pas la fournir, que ce matériel
ne soit pas traité sous garantie. Le client s'engage à fournir tout logiciel original, documentation, connectique, et accessoires, codes et mots de passes permettant à la société <?php echo $donnees_inter['raison_social']; ?>de
remettre son matériel en état de fonctionnement. La société <?php echo $donnees_inter['raison_social']; ?>ne saurait être tenue pour responsable de retard en cas de manque ou d'erreur dans les éléments sus-cités ou, dans le
cas d'un changement de pièce, d'un retard de livraison ou d'une rupture de stock d'un de ses fournisseurs. <?php echo $donnees_inter['raison_social']; ?> ne saurait être tenue pour responsable des éventuelles pertes de données
durant la réparation. En cas de réparation atelier, dès que le client a été prévenu, il s'engage à récupérer ou a demander la remise en place de son matériel dans les 6 jours ouvrés suivant la date où il aura été prévenu. Passé ce délai,
<?php echo $donnees_inter['raison_social']; ?> se réserve le droit de facturer des frais de garde et d'assurance. 
Toutes les prestations seront effectuées aux tarifs en vigueur, dont le client reconnait avoir pris connaissance. Toute intervention n'ayant pu s'effectuer du fait du client ou dont l'annulation n'a pas
été signalée au moins 3 jours ouvrés à l'avance se verra facturée au forfait minimum en vigueur sur la zone de déplacement du client. Si, suite à un devis de réparation refusé, le client ne souhaite pas récupérer son matériel, ou s'il ne souhaite pas, en cas de réparation effectuée, conserver ses anciennes pièces,
<?php echo $donnees_inter['raison_social']; ?>se réserve le droit de facturer des frais de recherche et/ou des frais de destruction du matériel ou des pièces. <b>Le client accepte ces conditions sans réserve.</b></p>
</div>

<div id="signature">
Signature du client:
</div>

<div id="bloc_footer">
Société <?php echo $donnees_inter['raison_social']; ?> sous l'identification <?php echo $donnees_inter['siret']; ?>
</div>


</page>














<?php
$content = ob_get_clean();

    // convert in PDF
    require_once(dirname(__FILE__).'/html2pdf.class.php');
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'fr');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output('exemple01.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
    ?>