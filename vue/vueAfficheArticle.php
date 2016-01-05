<?=VueHtmlUtils ::enTeteHTML5('Bienvenue sur notre site','UTF-8',Config::getStyleSheetsURL()['default'])?>

<section>
	<?=ArticleView::getHtmlDevelopped($modele->getData())?>
<a href="?action=get-all-news">[ Revenir à la liste des personnages ]</a>
</section>

<?=VueHtmlUtils::finFichierHtml5();?>