Ce projet consiste à faire un clonage de Facebook dont il permet les fonctionnalités suivantes:
        1- S'autantifier ou S'inscrire.
        2- rechercher d'autres comptes.
        3- envoyer une invitation.
        4- accepter ou refuser une invitation.
        5- lister les amis.
        6- envoyer et recevoir des messages.

Pour se faire j'ai créer un projet qui contient:
        1- Dossier des actions.
        2- Dossier des images.
        3- Dossier des utilisateurs qui ont un compte.
        4- Dossier des liens qui existent dans la barre des menus.
        5- fichier index.php qui est la prémiére page qui sera affiché qui permet l'autentification et l'inscription.


On commence donc comme on a déja dit, par la page index qui contient un formulaire d'authentification et un lien d'inscription.

Le formulaire contient 2 input (email & password) et un bouton de validation qui va nous diriger vers un fichier nomée login.php qui va valider les données entrées, si sont valide il va passer à la page d'acceuil en stockant dans une session l'id et la photo de l'utilisateur, sinon il va rester dans la meme page.

Le lien d'inscription va nous diriger vers une page qui contient un formulaire, lorsque on le rempli on valide ce qui va nous diriger vers un fichier nomée ajout.php qui va ajouter ce nouvau utilisateur à la base de données et il va passer à la page d'acceuil en stockant dans une session l'id et la photo de l'utilisateur.


Les pages suivantes vont avoir le meme layout qui est constitué de 4 parties:
      1- Header : contient le logo facebook, la photo de profil, un lien de deconnexion qui va nous diriger vers le fichier logout.php.
      2- Left Menu : contient des liens de tous les 3 pages.
      3- Content : différent pour chaque page.
      4- Footer : un div avec un background noir.

On explique au debut comment on se deconnecte, on se fait par detruire la session et de retourner à la page d'index.

On passe maintenant à la page accueil.php qui va etre la page qui sera affiché aprés l'inscription ou l'authentification correcte, cette page contient dans le header un formulaire (textbox & button) qui va nous aider à recherche les autres comptes en utilisant leur nom ou prenom, les données du formulaire vont etre envoyés à la meme page (contenu du textbox), que je vais utilisé pour exeuter une requete de recherche, si cette requete renvoie aucune ligne, on affiche aucun resultat, sinon on affiche les photo de profil et les nom complet des utilisateur trouvés et un lien d'envoi d'invitation qu'on va lui passer l'id de la personne qui envoie et qui va recevoir l'invitation.

Invitation.php va lire les données recus et va faire une recherche si ces 2 id ont déjà une invitation commun, si c'est le cas on affiche on retourne à la page d'accueil en passant un paramétre d'erreur egale à yes, sinon on ajoute une nouvel invittaion à la BD et on retourne à la page d'accueil en passant un paramétre d'erreur egale à no.

On passe maintenant à la page des invitations qui va afficher les invitations, dont on commence par executer une requete qui retourne l'id des utilisateur qui ont avec moi une invitation et l'etat est 'en attente', et pour chaqu'un on va executer une requete qui retourne la photo de profil et le nom et prenom qui seront affichés et aussi un lien d'accepter ou de refuser l'invitation qui contient comme paramétre mon id et son id, si je clicke sur refuser on va etre dirigé vers le fichier refuseinvitation.php qui va supprimer l'invitation, si on clicke sur accepter on va etre dirigé vers le fichier acceptinvitation.php qui va créer un nouveau ami en utilisant nos ids et modifier l'etat pour que cette invitation ne s'affiche pas dans la liste des invitations.

On passe à la page des amis qui va faire le meme principe des invitations mais cette fois pour la table amis, dont on execute une requete qui retourne l'id des utilisateur qui sont mes amis, et pour chaqu'un on va executer une requete qui retourne la photo de profil et le nom et prenom qui seront affichés et aussi un lien pour envoyer un message qui contient comme paramétre son id, ce lien va nous deriger vers une autre page nomé newmessage.php.

Cette page va nous aider à envoyer un message en utilisant une carte qui est constitué de 3 parties:
       1- Card-Header : qui contient la photo de profil et le nom complet de l'ami.
       2- Card-Content : qui va executer une requete qui retourne tous les messages que je fait parti, et on ensuite pour chaque message lui affiché mais on lui donnant un id selon je suis l'emetteur ou le recepteur.
       3- formulaire : qui contient 3 textbox (message, mon id, id ami) et un bouton de submit qui va nous diriger vers la page addmessage.php

cette page va ajouter à la table message une nouvel occurence en utilisant les données recus, et va nous rediriger vers la page nomé newmessage.php en passant l'id de l'ami.





