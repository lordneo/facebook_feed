<?php
	
	//include Facebook PHP SDK
	require_once('php-sdk/facebook.php');
	$config = array();
	$config['appId'] = 'YOUR_APP_ID';
	$config['secret'] = 'YOUR_APP_SECRET';
	$config['fileUpload'] = false; // optionnel
	$facebook = new Facebook($config);
	$pageid = "YOUR_PAGE_ID";
	$pagefeed = $facebook->api("/" . $pageid . "/feed");
	echo "<div class=\"fb-feed\">";
	 
	// compteur à 0 car nous ne voulons afficher que 10 posts
	$i = 0;
	//boucle sur toutes les données de notre flux facebook
	foreach($pagefeed['data'] as $post) {
	// nous ne souhaitons afficher que les posts de type: statut, lien et photo
		if ($post['type'] == 'status' || $post['type'] == 'link' || $post['type'] == 'photo') {
			// open div fb-update
			echo "<div class=\"fb-update\">";
			//set date in French
			setlocale(LC_ALL, 'fr_FR');
		    // check if post type is a status
		    if ($post['type'] == 'status') {
		      	echo "<h2>Statut modifié le " . strftime("%e %B à %Hh%M", (strtotime($post['created_time']))) . "</h2>"; //strftime permet l'affichage des mois en français, suivant setlocale
				// Affiche les messages et les story s'ils existent
				if(isset($post['message'])){
					echo "<p>" . $post['message'] . "</p>";
				}
				if(isset($post['story'])){
					echo "<p>" . $post['story'] . "</p>";
				}
			}
		 
			// check if post type is a link
			if ($post['type'] == 'link') {
				echo "<h2>Posté le " . strftime("%e %B à %Hh%M", (strtotime($post['created_time']))) . "</h2>";
				//affichage du lien 
				echo "<p><a href=\"" . $post['link'] . "\" target=\"_blank\">" . $post['link'] . "</a></p>";
			}

			// check if post type is a photo
			if ($post['type'] == 'photo') {
				echo "<h2>Posté le " . strftime("%e %B à %Hh%M", (strtotime($post['created_time']))) . "</h2>";
				if (empty($post['story']) === false) {
					echo "<p>" . $post['story'] . "</p>";
				} elseif (empty($post['message']) === false) {
					echo "<p>" . $post['message'] . "</p>";
	      		}
	      		//lien vers la photo sur facebook
				echo "<p><a href=\"" . $post['link'] . "\" target=\"_blank\">View photo &rarr;</a></p>";
			}
	 
			echo "</div>"; // close fb-update div
	 
			$i++; // add 1 to the counter if our condition for $post['type'] is met
		}
	 
		//  stop la boucle quand on a atteint 10 posts - n'affiche que 10 posts
		if ($i == 10) {
			break;
		}
	} // end the foreach statement
	 
	echo "</div>";


?>