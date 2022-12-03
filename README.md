# Énoncé
Pour le TP2, on vous demande de créer une application Laravel, similaire à ce que le site web https://shft.cl (Shift-Click) propose, c'est à dire un site web où il est possible partager des images. (Ex: https://shft.cl/ui4goq7bb)

Le modèles de données et le suivant:
- Collection: name, slug
- Image: url, width, height, slug
- Couleur: codeHexa
- Visite: date, userAgent

Les relations entres les modèles sont:
- Une image possède 0, une ou plusieurs couleurs. Une couleur n'est reliée qu'à une seule image.
- Une image possède 0, une ou plusieurs visites. Une visite est relié à une seule image.
- Une collection possède 0, une ou plusieurs images. Une image est dans une seule collection.

Les 4 classes de modèles DOIVENT avoir les colonnes de timestamp (dateCreated, dateUpdated). Les classes DOIVENT aussi avoir les champs pour permettre les relations (clé primaire/étrangères). Tout ceci DOIT être configuré dans un ou des fichiers de migration.

Les 4 classes de modèles DOIVENT implémenter le trait HasFactory et le trait SoftDelete (Assurez-vous de générer les colonnes requises pour ceci).

Les 4 classes de modèles DOIVENT avoir une classe factory correspondante.

Le modèle Collection DOIT avoir un seeder qui utilise votre factory (Ne pas oublier d'ajouter votre classe dans le Seeder par défaut). On veut créer 10 collections avec le seeder.

Vous devez faire les routes suivantes:

- /: On affiche une liste de toutes les collections
- /{slug-de-la-collection}: On affiche tous les champs de la collection, ainsi que toutes les images en faisant partie (sous forme de texte)
- /{slug-de-la-collection}.json: On retourne un tableau json avec la liste de toutes les images faisant parti de cette collection.
- /image/{slug-de-l'image}: On affiche tous les champs de l'image en texte (incluant les date de création et de modification), l'image dans une balise image, ainsi que la liste des couleurs et des visites reliées à cette image. On génère aussi un lien vers la route d'édition de l'image et un formulaire avec bouton pour supprimer l'image. À chaque fois que cette route est exécutée, on crée une nouvelle entrée du modèle Visite avec la date courante ainsi que la valeur de l'entête http (http header) "User-Agent". (Voir $request->header())
- /image/new: On affiche un formulaire pour créer une nouvelle image. On utilise un element <select> pour la sélection de la collection.
- /image/create: Route POST pour gérer la validation et la création d'une image
- /image/edit/{id}: On affiche le même formulaire que pour la création, mais avec les champs remplis des valeurs de l'image existante. On affiche aussi un autre formulaire pour pouvoir ajouter une nouvelle couleur à l'image.
- /image/update/{id}: Route POST pour gérer la sauvegarde.
- /image/color/add/{id}: Route POST qui ajoute une nouvelle couleur à l'image.
- /image/destroy/{id}: Route POST pour gérer la suppression d'une image. Il faut supprimer les couleurs et visites associées.

Attention à l'ordre dans lequel vous enregistrez vos routes. On vous recommande de faire un controleur pour regrouper les méthodes des routes qui commence par /image.

Tous les formulaires et les routes POST doivent valider les données à l'aide de la méthode ->validate() de Laravel.  Tous les champs sont requis. Assurez-vous de valider que les champs width et height sont des nombres. Assurez-vous du format des codes hexa des couleurs. Assurez-vous que les slugs ne contiennent que les lettres, des chiffres ou des tirets (-) (pas d'autres caractères). Les messages d'erreurs doivent être visible par l'usager et placé proche du champs en question. (Ex, si le champ width contient des lettres, on veut voir le message d'erreur _proche_ du champs dans le formulaire). Finalement, les formulaires DOIVENT garder la saisie effectuée par l'usager lors d'erreur (via la fonction old()).
