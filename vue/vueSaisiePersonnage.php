<?php
    session_start();
?>
<?=VueHtmlUtils::enTeteHTML5('Saisie Personnage','UTF-8',Config::getStyleSheetsURL()['default'])?>
<h1>Saisie d'un personnage</h1>
<section>
 <?=PersonnageFormView::getDefaultFormHTML("?action=put")?>
<a href="?"> [ Revenir à l'accueil ] </a>
</section>

<?=VueHtmlUtils::finFichierHTML5()?>
