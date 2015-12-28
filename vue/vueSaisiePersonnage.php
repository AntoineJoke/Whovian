<?=VueHtmlUtils::enTeteHTML5('Saisie Personnage','UTF-8',Config::getStyleSheetsURL()['default'])?>

<h1>Saisie d'une personnage</h1>
<?=PersonnageFormView ::getFormHtml("?action=put",$modele->getData(),$modele->getError())?>

<a href="?">Revenir à l'accueil</a>

<?=VueHtmlUtils::finFichierHTML5()?> 
