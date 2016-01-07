<<<<<<< HEAD
<?php
    session_start();
?>
<?=VueHtmlUtils::enTeteHTML5('Edition Article','UTF-8',Config::getStyleSheetsURL()['default'])?>


=======
<?=VueHtmlUtils::enTeteHTML5('Edition Article','UTF-8',Config::getStyleSheetsURL()['default'])?>

>>>>>>> origin/master
<h1>Edition d'une news</h1>
<section>
    <?=ArticleFormView::getFormErrorsHTMLEdition("?action=post-news",$modele->getData(),$modele->getError())?>
<a href="?action=get-all-news"> [ Revenir aux news ] </a>
</section>

<?=VueHtmlUtils::finFichierHTML5()?> 