<?=VueHtmlUtils ::enTeteHTML5('Saisie Identifiant','UTF-8',Config::getStyleSheetsURL()['default'])?>

<h1>Erreur de saisie d'un identifiant</h1>
<section>
 <?=IdentifiantFormView::getFormErrorsHtml("?action=get-co",$modele->getData(),$modele->getError())?>
</section>

<?=VueHtmlUtils::finFichierHtml5();?>