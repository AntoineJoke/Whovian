<?=VueHtmlUtils::enTeteHTML5('Saisie Identifiant','UTF-8',Config::getStyleSheetsURL()['default'])?>

<h1>Saisie des identifiants</h1>
<section>
 <?=IdentifiantFormView::getDefaultFormHTML("?action=put")?>
</section>
<a href="?">Revenir à l'accueil</a>

<?=VueHtmlUtils::finFichierHTML5()?> 

