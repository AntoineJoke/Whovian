<?php
    session_start();
?>
<?=VueHtmlUtils::enTeteHTML5('Edition Personnage','UTF-8',Config::getStyleSheetsURL()['default'])?>

<h1>Edition d'un personnage</h1>
<section>
<<<<<<< HEAD
    <?=PersonnageFormView::getFormHTMLEdition("?action=post",$modele->getData())?>
=======
    <?=PersonnageFormView::getFormHTML("?action=post",$modele->getData())?>
<a href="?action=get-all"> [ Revenir aux personnages ] </a>
>>>>>>> origin/master
</section>

<?=VueHtmlUtils::finFichierHTML5()?> 
