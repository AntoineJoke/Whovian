<?=VueHtmlUtils::enTeteHTML5('Affiche Personnage','UTF-8',Config::getStyleSheetsURL()['default'])?>

<h1><?=$modele->getTitle()?></h1>
	<?=PersonnageView::getHtmlDevelopped($modele->getData())?>

<a href="?">Revenir à l'accueil</a>


<?=VueHtmlUtils::finFichierHTML5()?>
