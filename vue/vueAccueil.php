<?php
    session_start();
?>
<?=VueHtmlUtils::enTeteHTML5('Accueil','UTF-8',Config::getStyleSheetsURL()['default'])?>

<section>
	<h2>Bienvenu sur Whovian</h2>
	<p>Ce site, créé par la grande communauté Whovienne, est dédié à l'univers du Docteur, ce personnage énigmatique et formidable.<p>
	<p>Vous trouverez ici des articles résumant tout ce qu'il y a à savoir sur l'actualité du show. Mais ce n'est pas tou !
		Vous trouverez aussi des fiches réccâpitulative de chaque docteur de la série (pratique pour les deux du fond qui n'ont pas suivi ou ceux qui souhaiterait prendre le show en cours, tout est possible après tout)
		Il y as même les fiches de tout les anciens docteurs ! (au grand bonheur de tous !)</p>
	<p>Passez un agréable moment sur WHOVIAN.COM ! Et longue vie au Docteur !</p>
</section>

<?=VueHtmlUtils::finFichierHTML5()?>

