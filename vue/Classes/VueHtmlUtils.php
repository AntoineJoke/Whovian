<?php
class VueHtmlUtils{

	static function enTeteHTML5($title, $charset, $css_sheet){
		echo "<!--doctype html-->\n";
		echo "<html lang=\"fr\">\n";
		echo "<head>\n";
		echo "<meta charset=\"";
		echo $charset;
		echo "\"/>\n";
		echo "<link type=\"text/css\" rel=\"stylesheet\" href=\"";
		echo $css_sheet; 
		echo "\"/>\n";
		echo "<title>".$title."</title>\n";
		echo "</head>\n<body>\n";
		echo '<div id="wrap">';
		echo '<header>';
		echo '<h1>Whovians</h1>';
		echo '<nav>';
		echo '<ul>';
		echo '<li class="menu"><a href="index.php">Accueil</a></li>';
		echo '<li class="menu"><a href="'.Config::getVues()["afficheCollectionPersonnage"].'">News</a></li>';
		echo '<li class="menu"><a href="?action=get-all">Biographies</a></li>';
		echo '<li class="menu"><a href="'.Config::getVues()["afficheCollectionPersonnage"].'">Connexion</a></li>';
		echo '</ul>';
		echo '</nav>';
		echo '</header>';
	}



	static function finFichierHTML5(){

			echo '<p>-</p>';
			echo '<p>-</p>';

			echo '<footer>';
      		echo 'Richard Quentin et Bassot Antoine groupe 1';
      		echo '</footer>';
    		echo '</div>';
		echo "</body>\n</html>\n";
	}


}

?>