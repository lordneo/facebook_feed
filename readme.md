# Flux Facebook Perso 
Script PHP qui permet d'afficher le flux personnalisé d'une page Facebook sur une page web, en utilisant facebook PHP SDK et l'API Graph de Facebook. 
Le script ne fonctionne que sur les pages Facebook et non sur les personnes.
(<http://callmenick.com/2013/03/14/displaying-a-custom-facebook-page-feed/>)

## Facebook developper
- Aller sur <https://developers.facebook.com>
- Log in ou créer un compte développeur
- Aller à Apps dans la bar de menu en haut 
- Créer une nouvelle application et lui donner un nom
- Repérer votre App ID et votre App secret, ils vont être utiles
- Changer votre App secret

## Afficher les posts d'une page Facebook
- Dans le fichier feed.php:
    + Vérifier que le fichier facebook.php est bien include et que le chemin est le bon
    + Remplacer "YOUR_APP_ID" et "YOUR_APP_SECRET" ```$config['appId'] = 'YOUR_APP_ID'; $config['secret'] = 'YOUR_APP_SECRET';```
    + Remplacer "YOUR_PAGE_ID" par l'id de votre page
        * Pour trouver l'ID de votre page: copier l'URL de votre page dans ce site: <http://findmyfacebookid.com/>
        * $pageid = "YOUR_PAGE_ID";
Bonus: 
Il est possible d'accéder directement à l'array de data du flux Facebook de sa page:
- Générer son access token à cette adresse en remplçant dans l'url "APP_ID" et "APP_SECRET": <https://graph.facebook.com/oauth/access_token?client_id=APP_ID&client_secret=APP_SECRET&grant_type=client_credentials>
- Aller à cette URL et remplacer dans l'url "PUT_YOUR_ACCESS_TOKEN_HERE" par l'access token trouvé juste avant <https://graph.facebook.com/91464739470/feed?access_token=PUT_YOUR_ACCESS_TOKEN_HERE>
