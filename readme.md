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
