<<<<<<< HEAD
<?php
    session_start();
?>
=======
>>>>>>> origin/master
<?=VueHtmlUtils::enTeteHTML5('Saisie News','UTF-8',Config::getStyleSheetsURL()['default'])?>

<h1>Saisie d'une news</h1>
<section>

	<?=ArticleFormView::getDefaultFormHTML("?action=put-news")?>

<a href="?"> [ Revenir à l'accueil ] </a>
</section>

<?=VueHtmlUtils::finFichierHTML5()?> 
