<?=VueHtmlUtils::enTeteHTML5('Collection Personnage','UTF-8',Config::getStyleSheetsURL()['default'])?>

<a href="?">Revenir à l'accueil</a>
<?php
	echo "<table><caption>Tous les Docteurs</caption><tbody>";
	foreach ($modele->getData() as $personnage) {
            
		echo"<tr>";
		echo"<td><a href=\"?action=delete&numDocteur=".$personnage->getNumDocteur()."\">supprimer</a></td>";
		echo"<td><a href=\"?action=edit&numDocteur=".$personnage->getNumDocteur()."\">modifier</a></td>";
		echo "<td><a>".PersonnageView::getHtmlCompact($personnage)."</a></td>";
		echo"<tr>";


	}
	echo"</tbody></table>";
?>
<?=VueHtmlUtils::finFichierHTML5()?>
