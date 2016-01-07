<<<<<<< HEAD
<?php
    session_start();
?>
=======
>>>>>>> origin/master
<?=VueHtmlUtils::enTeteHTML5('Edition Article','UTF-8',Config::getStyleSheetsURL()['default'])?>

<h1>Saisie d'une news</h1>
<section>
    <?=ArticleFormView::getFormHTMLEdition("?action=post-news",$modele->getData())?>
<a href="?action=get-all-news"> [ Revenir aux news ] </a>
</section>

<?=VueHtmlUtils::finFichierHTML5()?> 
