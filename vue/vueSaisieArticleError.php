<<<<<<< HEAD
<?php
    session_start();
?>
=======
>>>>>>> origin/master
<?=VueHtmlUtils::enTeteHTML5('Bienvenue sur notre site','UTF-8',Config::getStyleSheetsURL()['default'])?>

<h1>Erreur de saisie d'une news</h1>
<section>
<?=ArticleFormView::getFormErrorsHtml("?action=put-news",$modele->getData(),$modele->getError())?>
<<<<<<< HEAD
=======
<a href="?"> [ Revenir à l'accueil ] </a>
>>>>>>> origin/master
</section>

<?=VueHtmlUtils::finFichierHtml5();?>