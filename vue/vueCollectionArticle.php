<?php
    session_start();
?>
<?=VueHtmlUtils ::enTeteHTML5('Les News','UTF-8',Config::getStyleSheetsURL()['default'])?>

<title>Toutes les news</title>
<?php
	if(isset($_SESSION['login'])){
		echo "<section>";
		echo "<a href=\"?action=saisie-news\">ajouter une news</a>";
		echo "</section>";
	}
	foreach ($modele->getData() as $article) {
		echo"<section>";
		echo "<h2>".ArticleView::getHtmlCompact($article)."</h2>";
		echo "<p><a href=\"?action=get-news&id=".$article->getId()."\">Lire l'article ...</a></p>";
		if(isset($_SESSION['login'])){
			echo"<p><a href=\"?action=edit-news&id=".$article->getId()."\"> [ modifier ] </a></p>";
			echo"<p><a href=\"?action=delete-news&id=".$article->getId()."\"> [ supprimer ] </a></p>";
		}
		echo"</section>";

	}
?>

<?=VueHtmlUtils::finFichierHtml5();?>