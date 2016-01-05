<?=VueHtmlUtils::enTeteHTML5('Edition Personnage','UTF-8',Config::getStyleSheetsURL()['default'])?>

<h1>Saisie d'une personnage</h1>
<section>
    <?=PersonnageFormView::getFormHTML("?action=post",$modele->getData())?>
<a href="?action=get-all"> [ Revenir aux personnages ] </a>
</section>

<?=VueHtmlUtils::finFichierHTML5()?> 
