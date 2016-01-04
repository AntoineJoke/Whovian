<?=VueHtmlUtils::enTeteHTML5('Edition Personnage','UTF-8',Config::getStyleSheetsURL()['default'])?>

<h1>Saisie d'une personnage</h1>
<section>
    <?=PersonnageFormView::getFormHTML("?action=post",$modele->getData())?>
</section>
<a href="?">Revenir à l'accueil</a>

<?=VueHtmlUtils::finFichierHTML5()?> 
