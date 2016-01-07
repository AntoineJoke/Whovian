<?php
    session_start();
?>
<?=VueHtmlUtils::enTeteHTML5('Edition Personnage','UTF-8',Config::getStyleSheetsURL()['default'])?>


<h1>Edition d'un personnage</h1>
<section>
    <?=PersonnageFormView::getFormErrorsHTMLEdition("?action=post",$modele->getData(),$modele->getError())?>
<a href="?action=get-all"> [ Revenir aux personnages ] </a>
</section>

<?=VueHtmlUtils::finFichierHTML5()?> 