<?=VueHtmlUtils::enTeteHTML5('Edition Article','UTF-8',Config::getStyleSheetsURL()['default'])?>

<h1>Saisie d'une news</h1>
<section>
    <?=ArticleFormView::getFormErrorsHTMLEdition("?action=post-news",$modele->getData(),$modele->getError())?>
<a href="?action=get-all-news"> [ Revenir aux news ] </a>
</section>

<?=VueHtmlUtils::finFichierHTML5()?> 