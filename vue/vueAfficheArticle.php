<?php
    session_start();
?>
<?=VueHtmlUtils ::enTeteHTML5('Bienvenue sur notre site','UTF-8',Config::getStyleSheetsURL()['default'])?>
<div id="images-box">
<section>
    <?=ArticleView::getHtmlDevelopped($modele->getData())?>
    <a href="?action=get-all-news">[ Revenir à la liste des news ]</a>
</section>
</div>
<?php   
    echo "<section>";
    echo "<h2> Commentaires: </h2>";
    foreach ($listCom->getData() as $commentaire) {
            echo"--------------------------------------------------------------------------------------------";
            echo  CommentaireView::getHtmlDevelopped($commentaire);
            if(isset($_SESSION['login'])){
                    echo"<p><a href=\"?action=delete-com&idCom=".$commentaire->getIdCom()."&idArticle=".$modele->getData()->getId()."\"> [ supprimer ] </a></p>";
            }


    }
    echo "</section>";
 ?> 
<section>
    <?=CommentaireFormView::getDefaultFormHTML("?action=put-com",$idArticle)?>
</section>


<?=VueHtmlUtils::finFichierHtml5()?>