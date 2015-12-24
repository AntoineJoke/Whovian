<?=VueHtmlUtils::enTeteHTML5('Accueil','UTF-8',Config::getStyleSheetsURL()['default'])?>


<h1>Toutes les adresses</h1>
/*<a href="?">Revenir à l'accueil</a>
<?php
	echo "<table><tbody>";
	foreach ($modele->getData() as $personnage) {
		echo"<tr>";
		echo"<td><a href=\"?action=delete&numDocteur".$personnage->getNumDocteur()."\">supprimer</a></td>";
		echo"<td><a href=\"?action=edit&numDocteur".$personnage->getNumDocteur()."\">modifier</a></td>";
		echo "<td>".PersonnageView::getHtmlCompact($personnage)."</td>";
		echo"<tr>";


	}
	echo"</tbody></table>";
?>*/
<?=VueHtmlUtils::finFichierHTML5()?>
