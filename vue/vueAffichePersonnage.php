<?php
    session_start();
?> 
<?=VueHtmlUtils::enTeteHTML5('Affiche Personnage','UTF-8',Config::getStyleSheetsURL()['default'])?>

<h1><?=$modele->getTitle()?></h1>

<section>

	<?=PersonnageView::getHtmlDevelopped($modele->getData())?>

<a href="?action=get-all">[ Revenir à la liste des personnages ]</a>

</section>

<?=VueHtmlUtils::finFichierHTML5()?>
