 <?=VueHtmlUtils::enTeteHTML5('Collection Personnage','UTF-8',Config::getStyleSheetsURL()['default'])?>

<?php
	echo "<table><caption>Tous les Docteurs</caption><tbody>";
	foreach ($modele->getData() as $personnage) {
            
		echo"<tr>";
		echo"<td><a href=\"?action=delete&numDocteur=".$personnage->getId()."\">supprimer</a></td>";
		echo"<td><a href=\"?action=edit&numDocteur=".$personnage->getId()."\">modifier</a></td>";
		echo "<td><a>".PersonnageView::getHtmlCompact($personnage)."</a></td>";
		echo"<tr>";


	}
	echo"</tbody></table>";
?>
<?=VueHtmlUtils::finFichierHTML5()?>
