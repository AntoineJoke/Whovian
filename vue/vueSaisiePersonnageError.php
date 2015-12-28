<?=VueHtmlUtils::enTeteHTML5('Erreur Saisie Personnage','UTF-8',Config::getStyleSheetsURL()['default'])?>

<h1>Erreur de saisie d'une personnage</h1>
<?=PersonnageFormView ::getFormErrorsHtml("?action=put",$modele->getData(),$modele->getError())?>

<a href="?">Revenir à l'accueil</a>
<?=VueHtmlUtils::finFichierHTML5()?>
