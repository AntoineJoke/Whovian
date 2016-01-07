<?php
    session_start();
?>
<?=VueHtmlUtils::enTeteHTML5('Erreur Saisie Personnage','UTF-8',Config::getStyleSheetsURL()['default'])?>

<h1>Erreur de saisie d'une personnage</h1>
<section>
<?=PersonnageFormView ::getFormErrorsHtml("?action=put",$modele->getData(),$modele->getError())?>
</section>
<?=VueHtmlUtils::finFichierHTML5()?>
