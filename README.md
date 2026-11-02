# Jiri

<p align="center">
  <a href="https://wakatime.com/badge/user/996f0f7d-c952-4cd0-a2d6-e00eb364028d/project/94f025ed-120d-473f-abb4-e910809897b2"><img src="https://wakatime.com/badge/user/996f0f7d-c952-4cd0-a2d6-e00eb364028d/project/94f025ed-120d-473f-abb4-e910809897b2.svg" alt="wakatime"></a>
  <a href="https://www.figma.com/design/W5y6ZDuLZKvNHZbXURcLwc/Jiri?node-id=0-1&t=iTr85uEcB2JM1C96-1" target="_blank">
    <img src="https://img.shields.io/badge/Figma-Design-F24E1E?logo=figma" alt="badge Figma">
  </a>
  <img src="https://img.shields.io/badge/Status-Projet%20acad%C3%A9mique-green" alt="badge Status">
</p>

---

Dans le bachelier en Infographie orientation Web, les cours de _Design Web_ du B2 et de _Projets Web_ du B3 se concluent par des jurys lors desquels les travaux des étudiants sont évalués par des externes et des professeurs.

Les professeurs de ces deux cours vous passent commande d’une application Web qui leur permettra d'organiser ces jurys plus efficacement et remplacera la gestion actuelle qui impose d’utiliser plusieurs outils.

## Le contexte

Chaque année, des intervenants externes sont invités par l'équipe pédagogique à venir rencontrer les étudiants des cours de _Design Web_ et de _Projets Web_, et à leur donner par la même occasion un feedback oral sur leurs réalisations ainsi qu’une cote destinée au professeur afin de procéder, en fin de jury, à une délibération. 

La procédure habituelle consiste à donner aux membres du jury des feuilles de papier reprenant chacune le nom d’un étudiant, éventuellement son heure de passage, le nom de l’évaluateur et la liste des réalisations de l’étudiant (avec tous les liens utiles), et à leur demander de noter, pour chaque réalisation, une cote et des commentaires.

Les évaluateurs notent également sur ces feuilles un commentaire global concernant le profil et le niveau de compétences de l’étudiant évalué. 

À la fin de la journée, à l’aide de ces notes recopiées dans un document Excel, les membres du jury délibèrent pour obtenir un consensus sur les qualités des travaux de chaque étudiant et en tirer une cote finale.

Afin de faciliter le processus d’encodage et de délibération de fin d’épreuve, nous passons commande d’une application utilisable le jour de l’examen par les membres du jury et par le professeur qui organise l’épreuve.

## Les rôles

Deux rôles sont à considérer dans l’utilisation de l’application : membre du jury classique (évaluateur) et professeur responsable de l’épreuve. Voici les scénarios types que nous imaginons pour l’utilisation de l’application selon ces deux rôles.

### Le membre du jury classique

Au début de la journée d'évaluation, le membre du jury s’installe derrière son ordinateur. Il a normalement reçu un email contenant un lien. Ce lien lui permet d’accéder à l’application, identifié (mais sans qu’il doive s’authentifier) et de voir la liste des étudiants qui sont à évaluer. Il rencontre les étudiants les uns après les autres et visite les différents projets de chacun.

Lorsqu’il est connecté, le membre du jury voit la liste des étudiants qui présentent leurs travaux. Quand un étudiant vient le voir pour lui présenter son travail, le membre du jury le choisit dans la liste. Il découvre alors la liste des travaux de l’étudiant. Après avoir choisi et regardé un travail, il peut remplir un formulaire constitué d’un champ pour la cote (peut contenir une décimale, min. 0 et max. 20) et un champ de texte pour le commentaire. Le lien vers le travail et vers le repo du travail sont également affichés et utilisables pour visiter le travail ou son repo. En plus de mettre une cote pour chaque travail, le professeur est aussi invité à donner une appréciation globale de l’étudiant, basée sur l’impression générale que lui a laissée sa rencontre avec ce dernier.

Le membre du jury n’est pas obligé de remplir les deux champs en même temps, ce qui signifie que s’il réaffiche plus tard la page correspondant à un travail particulier d’un étudiant, il doit retrouver un formulaire pré-rempli avec ce qu’il y a déjà saisi.

### Le professeur responsable

Le professeur prépare le jury et acte sa délibération lorsqu’il est fini. Pendant le jury, il peut agir comme un membre du jury classique. L’interface lui propose donc les fonctions disponibles pour le membre du jury classique plus quelques autres. Par défaut, par contre, son interface lui affiche l’état actuel du jury (les cotes déjà attribuées par les membres du jury aux étudiants qu’ils ont vu), ce qui lui permet de monitorer l’avancement du jury.

Lorsqu’il prépare un jury, le professeur doit tout d’abord créer une nouvelle épreuve. Identifier l’épreuve permettra à plusieurs professeurs de créer différentes épreuves au fil des années. Une épreuve se caractérise au minimum par un nom et ses informations temporelles (date, durée).

Quand il construit l’épreuve, le professeur doit ajouter des étudiants (avec une photo éventuelle) à celle-ci. L’ajout des étudiants doit être facilité par une auto-complétion si l’étudiant est déjà dans la base de données ou créer un nouvel étudiant si ce n’est pas le cas. 

Le professeur doit aussi ajouter des membres du jury à l’épreuve (nom, email, infos pour la connection, photo éventuelle), et cette création est assistée, comme pour les étudiants, par une auto-complétion si le membre du jury a déjà été ajouté lors d’une épreuve précédente, car certains membres du jury reviennent plusieurs années de suite. Il arrive également que des étudiants deviennent, quelques années plus tard, des évaluateurs. Il faut donc penser ces deux ensembles de personnes comme un seul ensemble et faire la distinction du rôle au niveau de la participation elle-même à un jury.

Quand des étudiants ont quitté l’école ou que certains membres de jury ne souhaitent plus participer à l’avenir, il serait peu pratique que la fonction d’auto-complétion continue de les proposer. Mais il serait aussi dommage de perdre la trace des épreuves passées. On gèrera donc un système d’archivage et aussi un système de consolidation de l'épreuve, ce qui signifie qu’une fois une épreuve finie, un document récapitulatif complet de celle-ci, figé, devra être produit. 

Le professeur doit aussi ajouter à l’épreuve les projets que doivent réaliser les étudiants avec une courte explication. Par défaut, tous les projets sont associés à tous les étudiants, mais le professeur peut en supprimer du programme d’un étudiant si un étudiant a une dispense partielle. S’il a les les urls du site et du repo, il les encode ainsi que la pondération éventuellement différente de la pondération par défaut, que peut avoir un travail particulier pour un étudiant particulier. 

#### Note pour le calcul de la cote finale d’un étudiant

Pour un étudiant donné, chaque évaluateur encode une cote pour chaque travail qu’il a examiné ainsi qu’une cote d’évaluation globale pour l’étudiant. 

Les différents travaux peuvent _peser_ différemment dans le calcul de la cote finale d’un étudiant. Quand il ajoute un travail à une épreuve, le professeur doit donc pouvoir ajouter une pondération (`0.05` équivaut par exemple à un vingtième de la cote). Il n’encode pas explicitement la pondération de la cote d’évaluation globale, elle se calcule après avoir fait la somme des pondérations des autres projets. Attention, tous les étudiants ne sont pas concernés par les mêmes travaux. Il est donc possible, comme dit plus tôt, de mettre en relation pondération-étudiant-travail lors d’une session d’examen.

La cote finale de l’étudiant se calcule en deux étapes :

1. Pour chaque travail de l’étudiant, on fait la moyenne des cotes des évaluateurs qui ont évalué ce travail. Idem pour l’évaluation globale. On obtient donc une cote moyenne pour le travail 1 (ex. __CV__), une cote moyenne pour le travail 2 (ex. __CSSZG__), etc. et une cote  moyenne pour l’évaluation globale (__EG__). Par exemple, s'il y a cinq travaux, __CV__, CSS Zen Garden (__CSSZG__), Artiste (__ART__), Portfolio (__PF__) et site pour client réel (__CR__), on aura :

    - __CV__ = (__CV__ du jury1 + __CV__ du jury3 + __CV__ du jury7) / 3
    - __CSSZG__ = (__CSSZG__ du jury1 + __CSSZG__ du jury2) / 2
    - __ART__ = (__ART__ du jury2 + __ART__ du jury3 + __ART__ du jury5 + __ART__ du jury6) / 4
    - __PF__ = (__PF__ du jury2 + __PF__ du jury3 + __PF__ du jury4 + __PF__ du jury6 + __PF__ du jury7) / 5
    - __CR__ =(__CR__ du jury1 + __CR__ du jury2 + __CR__ du jury4 + __CR__ du jury5 + __CR__ du jury6 + __CR__   du jury7) / 6
    - __EG__ = (__EG__ du jury1 + __EG__ du jury2 + __EG__ du jury3 + __EG__ du jury4 + __EG__ du jury5 + __EG__ du jury6 + __EG__ du jury7 ) / 7

2. La cote finale est la moyenne pondérée des cotes moyennes pour chaque travail. Par exemple, si on a décidé que le __CV__, __CSSZG__, __ART__ valaient chacun pour 2/20 des points, __PF__ pour 4/20 des points, __CR__ pour 6/20 des points, il reste 4/20 des points __EG__ et la cote finale sera calculée comme suit :
   
    - __COTE__ = 0.1 * __CV__ + 0.1 * __CSSZG__ + 0.1 * __ART__ + 0.2 * __PF__ + 0.3 * __CR__ + 0.2 * __EG__

La cote finale calculée automatiquement n’est pas forcément la cote finale qui se trouvera dans le bulletin de l’étudiant. En effet, si après le calcul par l’application, les évaluateurs s’accordent oralement pour dire que celui-ci a créé une cote artificiellement élevée ou basse par rapport à l’estimation globale qu’ils ont des compétences de l’étudiant, il doit être possible d’encoder une cote finale manuellement. Par défaut, c’est la cote calculée qui est utilisée, mais on peut en ajouter une manuellement qui sera prise en compte à la place de la cote calculée. Naturellement, le professeur doit pouvoir voir tant le résultat du calcul que la cote mise manuellement.

#### En plus

À tout moment, le professeur doit pouvoir monitorer ce qui se passe. Un dashboard dans l’application reprendra donc une vue d’ensemble des cotes déjà encodées. Le but est de permettre au professeur de savoir où on en est dans l’avancement de l’épreuve. Cette vue est à réaliser impérativement, c’est la plus utile.

Différentes vues supplémentaires sont possibles en plus de la vue générale décrite au paragraphe précédent. Le professeur peut choisir un étudiant dans l’interface et voir : sa cote finale calculée par l’application ; le détail du calcul ; un résumé des cotes des différents jurys pour un travail particulier ; un résumé des cotes mises par un membre du jury à un étudiant particulier ; une vue d’ensemble des cotes mises par un membre du jury à tous les étudiants qu’il a rencontré ; les commentaires associés à chaque cote et éventuellement, recliquer sur le lien d’un travail d’un étudiant pour le remontrer aux jurys. On peut encore imaginer d’autres vues, mais ce sont sans doute les plus utiles. 

### Aides
Je liste ici les principales entités et relations que j'imagine être utiles pour la réalisation de cette application. Veuillez noter que j'ai pris le parti de créer un vocabulaire signifiant. Laravel est construit de manière à vous permettre de diminuer la part des configurations si vous utilisez ses conventions. Mais celles-ci ne sont pas toujours propres à créer un vocabulaire signifiant. Ainsi, pour exprimer la relation `many to many` entre un `contact` et un `jiri`, vous devriez prévoir une table `contact_jiri` si vous respectiez les conventions prévues. Cependant, il peut être plus parlant de travailler avec le concept de `attendance`, qui signifie `participation` en anglais. De même la relation entre un `project` et un `jiri` devrait être `jiri_project`, mais il est plus intéressant de la nommer `homework`, ce qui signifie `devoir`. La liste qui suit détaille les entités et les relations que j'imagine donc, avec le vocabulaire que je crois pertinent. Les noms sont ceux des modèles et non des tables, qui sont juste les versions pluralisées des modèles.

- `jiri` liste les événements de type jury. Par exemple, _le jury de Design Web de 2e en juin pour 2016 - 2017_ ou _le jury de Projets Web de 3e en septembre pour 2016 - 2017._ ;
- `user` liste les utilisateurs du système, donc les profs, qui ont l'autorisation de gérer les jurys ;
- `contact` liste les contacts du professeur. Lors de leur participation à un jury, ils reçoivent le rôle de `evaluated` ou d’`evaluator`;
- `attendance` sert à mettre en relation des contacts avec des jury. Au final à sert à dire si une personne participe à un jury, avec quel rôle, et si ce dernier est `evaluator`, avec quel token de connexion ;
- `project` liste tous les projets réalisables à l’occasion d’un jury ;
- `homework` est le concept qui lie un project et un jiri. C'est l'idée d'un devoir à réaliser. Il peut être caractérisé par des liens et des tâches ;
- `implementation` liste les réalisations, par les étudiants, des homeworks prévus pour un jiri donné. Si un jury compte 6 projets et 10 étudiants, ça fait un maximum de 60 implémentations pour ce jury. Chaque implémentation est associée à ses urls ;
- `score` contient les scores mis par un membre du jury à une implémentation. Un commentaire est également possible en plus de la cote (qui peut contenir deux décimales) ;
- `performance` stocke les cotes finales obtenues par un étudiant lors d’un événement. Il y a deux cotes, la cote calculée mathématiquement, et la cote ajustée suite la délibération ;
- `impression` stocke les notes d’évaluation générale qu’un membre du jury met à un étudiant.

Bon travail !
