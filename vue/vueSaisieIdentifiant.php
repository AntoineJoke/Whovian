<?=VueHtmlUtils::enTeteHTML5('Saisie Identifiant','UTF-8',Config::getStyleSheetsURL()['default'])?>

<h1>Saisie des identifiants</h1>
<section>
 <?=IdentifiantFormView::getDefaultFormHTML("?action=get-co")?>
</section>

<?=VueHtmlUtils::finFichierHTML5()?> 

