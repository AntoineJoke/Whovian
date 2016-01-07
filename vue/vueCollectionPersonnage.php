<?php
    session_start();
?>
<?=VueHtmlUtils::enTeteHTML5('Collection Personnage','UTF-8',Config::getStyleSheetsURL()['default'])?>

<?php
	echo "<table><caption>Tous les Docteurs</caption><tbody>";
	foreach ($modele->getData() as $personnage) {
		echo"<tr>";
		echo"<td><a href=\"?action=get&id=".$personnage->getId()."\">".PersonnageView::getHtmlCompact($personnage)."</a></td>";
                if(isset($_SESSION['login'])){
                    echo"<td><a href=\"?action=edit&id=".$personnage->getId()."\">modifier</a></td>";
                    echo"<td><a href=\"?action=delete&id=".$personnage->getId()."\">supprimer</a></td>";
                }
		echo"<tr>";
	}
        if(isset($_SESSION['login']))
            echo"<td colspan=\"3\"><a href=\"?action=saisie\">ajouter un nouveau docteur</a></td>";
	echo"</tbody></table>";
?>
<?=VueHtmlUtils::finFichierHTML5()?>
