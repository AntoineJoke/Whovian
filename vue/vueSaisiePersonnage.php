<?=VueHtmlUtils::enTeteHTML5('Saisie Personnage','UTF-8',Config::getStyleSheetsURL()['default'])?>

<h1>Saisie d'une personnage</h1>
<section>
 <?=PersonnageFormView::getDefaultFormHTML("?action=put")?>
</section>
<a href="?">Revenir à l'accueil</a>

<?=VueHtmlUtils::finFichierHTML5()?> 
