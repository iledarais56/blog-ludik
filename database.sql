-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 01, 2021 at 06:38 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jeuxblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `content`) VALUES
(1, 'familiaux', 'Pour jouer en famille'),
(2, 'enfant', 'pour jouer avec les mômes'),
(3, 'd\'ambiance', 'pour un bon moment de rigolade'),
(4, 'expert', 'pour les experts');

-- --------------------------------------------------------

--
-- Table structure for table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `content` varchar(30) NOT NULL,
  `id_jeu` int(11) NOT NULL,
  `notepost` int(11) NOT NULL,
  `pseudo` varchar(30) NOT NULL,
  `totalContent` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `commentaires`
--

INSERT INTO `commentaires` (`id`, `content`, `id_jeu`, `notepost`, `pseudo`, `totalContent`) VALUES
(1, 'bof', 1, 12, 'babar', 'Il aurait pu être bon, mais... Préparation beaucoup trop longue, je dirais 25-30mn pour parfois (Quête 4) 10mn de jeu, c\'est abusé. Je viens de me chronométrer pour ranger, 13 longues minutes. Ce qui fait grosso modo 40-45 d\'installe etc pour 10mn de jeu, loin d\'être passionnantes. Certains diront que c\'est hyper millimétré et calculé mais en fait c\'est un plantage monumentale. Oui c\'est calculé à mort et tu réussiras la quête que si tu fais exactement ce qu\'il faut (et ça, c\'est plutôt une bonne chose) mais aussi que tu as une chance incroyable. En gros pour finir certaines quêtes, il faudra vraiment que toutes les étoiles soient alignées et c\'est assez insupportable de subir tout le temps et ça dès l\'installe (qui se fait aléatoirement sur plusieurs missions). Genre quand l\'objet que tu dois ramener en autre se trouve au bout de la map alors qu\'il aurait pu être sur tes couilles en début de partie. Je possède environ 100 refs de tous les styles et c\'est un des moins appréciés de ma collection et ça par toute la famille. '),
(2, 'oui !', 1, 15, 'bibi', 'Quelle immersion dans ce jeu! Le plateau touffu et la scénarisation poussée vous offrent un vrai souffle épique. Le jeu est tendu, les victoires se jouent à systématiquement 1 tour près, preuve d\'un équilibrage mûrement réfléchi. On pourra regretter pour chacune des quêtes de partir de zéro, au niveau des caractéristiques des personnages (pourquoi ne pas l\'avoir orienté \"legacy\"?). De même, certaines stratégies (donner tout l\'argent au nain pour faire monter son niveau au max) semblent \"ultimes\", réduisant ainsi le plaisir du renouvellement des quêtes.\r\n\r\nNe pas négliger le temps de mise en place / rangement.\r\n\r\nUn bon jeu coopératif toutefois, prenant.\r\n\r\nNombre de parties: 4'),
(3, 'super jeu', 1, 16, 'Pikachu', 'C\'est simple, c\'est notre jeu coopératif préféré.\r\n\r\nLes règles nous sont expliquées par le premier scénario introductif. Pas besoin de se farcir 10 pages de règles pour pouvoir commencer le jeu (pratique quand on joue avec de jeunes ados !!) nous rentrons tout de suite dans l\'histoire.\r\n\r\nChacune de nos parties est haletante, l\'impression de revenir aux livres-jeux avec des choix cornéliens à faire. Car oui, ça ne plaira sûrement pas à tout le monde, mais le but est de terminer le scénario, pas de se balader sur la map ou de s\'amuser à taper du mob, non non, car chaque monstre tué fait avancer le pion narrateur ... et si le pion arrive sur la dernière case, la partie est terminée. Il faut donc impérativement réfléchir aux implications de nos actions et de nos combats. \r\n\r\nJe ne trouve pas le jeu si difficile que cela, il faut juste avoir un peu de tactique et une bonne vision du jeu. Pour info, nous jouons à 2 adultes et 2 enfant/ado de 11 et 13 et ça se passe vraiment très bien (ce ne sont d\'ailleurs pas les derniers à proposer des tactiques, au contraire!).'),
(4, 'excellent', 1, 14, 'kiki', 'Très Bon Jeu, marrant entre amis et en plus difficile, j\'ai du refaire les missions 2 fois pour les finir, voir plus pour certain scénario! Beaucoup de matériel, et des scénario gratuit sur leur site, vraiment excellent!!'),
(5, 'bof', 1, 10, 'pedro', 'J\'aime les jeux d\'aventure. J\'aime les jeux dont on sent bien l\'ambiance. J\'ai acheté Andor. J\'ai été très déçu. D\'accord, l\'ambiance est plus ou moins là : on a un royaume, une menace, des héros, des quêtes à accomplir rapidement, donc pas le temps de poutrer tout ce qui bouge... sauf que chaque jet de dé de combat coûte du temps, donc un ou deux mauvais jets sur un combat indispensable et la quête est fichue, même si on n\'a pas perdu de temps pour le reste. Dans un jeu qui est pensé pour être du genre \"on calcule la moindre de nos actions pour boucler la journée comme il faut\", ça rend les dés infiniment trop importants. Dans les améritrash, au moins, il y a des mécanismes qui permettent de limiter la casse. Ici, non. L\'aventure, maintenant. Et bien, c\'est dit plus haut : c\'est du pur calcul mental. On se croirait en cours de math, comme l\'a écrit un autre joueur. Aventure n°3, celle qui est rejouable car on place les éléments grâce à des tuiles et des cartes tirées au hasard... la première fois qu\'on l\'a jouée, la mise en place nous a mis en situation de perdre alors qu\'on n\'avait même pas commencé à jouer ! Sans blague ! un troll juste à côté de fermiers qu\'un héros doit sauver ! Premier lever de soleil, le troll avance sur la case des fermiers et les boulotte alors que les héros n\'ont pas encore commencé à jouer ! GAME OVER !!! Aventure n°4, dans la caverne. Ce n\'est pas compliqué : il faut feinter l\'IA du jeu en laissant au-dehors un personnage avec un aigle sur l\'épaule. Sinon, c\'est un nombre énorme de jets de dés à effectuer pour dégager les éboulis, et donc autant de temps qui s\'écoule et conduit les héros à la défaite. Un jeu difficile, je veux bien : c\'est le principe des jeux coopératifs. Mais un jeu qu\'il faut feinter ou dont on DOIT profiter d\'un bug, non merci. Et un jeu où l\'on dépend des jets de dés, si j\'en veux un, je joue au 421.'),
(6, 'génial', 1, 17, 'bibi', 'Surement le meilleur jeu auquel je n\'ai jamais joué, un sublime mélange entre jeu de plateau complex et jeu de rôle avec des narrations assez présente ainsi qu\'une cooperation des joueurs qui nécessitera beaucoup de réflexions et une bonne anticipation, tout cela avec de merveilleuses illustrations. Incroyable jeu, très réfléchi ou finalement la chance n\'a que très peu d\'importance mais pimente tout de même le cours de la partie. Plus dirigé vers les Experts de jeux à mon goût. Très bon jeu en famille ou entre potes, où une fois rentré dedans compliqué de s\'arrêter. ( En plus le créateur à composé une bande son de 3h permettant de jouer avec un fond de music médiévale ! ) \r\n\r\nUne seule chose à retenir : Andor, c\'est plus qu\'un simple jeu'),
(7, 'bon jeu', 1, 16, 'toto', 'Cela faisait longtemps que je voulais y jouer et... quelle découverte ! Un jeu très immersif qui donne vraiment envie de jouer les scénarios les uns après les autres. Super jeux coopératif dans un univers médiéval-fantastique.'),
(8, 'bon jeu', 2, 13, 'mel', 'Points positifs : très beau jeu, le système de construction de dés est innovant et original.\r\n\r\nPoints négatifs, beaucoup trop court. on est trop limité dans nos actions.'),
(9, 'excellent', 2, 18, 'raoul', 'Merveilleux ! Juste... merveilleux !!!\r\n\r\nPrincipe génial. On améliore ses dés, on les tune, on les pique à la testostérone. \r\n\r\nCela reste une question de hasard, mais quand même, on améliore sa chance. Même si comme moi, bien souvent, on peut avoir des dés qui proposent la force de frappe de Stalone, et se retrouver avec un résultat digne de Mr Bean !\r\n\r\nJeu en deux phases successives :\r\n\r\n1- Booster ses dés (on privilégiera l\'accumulation d\'or)\r\n\r\n2- Acheter des cartes (là on préfèrera accumuler des ressources (feu/lune)) pour acquérir des points de victoire + Bonus\r\n\r\nJe ne suis pas tellement d\'accord avec les avis évoquant une lenteur si trop de joueurs autour de la table, car Dice Forge est à mon sens plutôt interactif. D\'abord grâce au fait qu\'à chaque début de tour de chaque joueur, tout le monde lance ses dés et en applique les effets. Ensuite grâce au placement du pion dans la zone cartes ; si un joueur se fait éjecter par un autre joueur dont c\'est le tour, ce premier peut alors lancer ses dés. Et enfin, certaines cartes \"appellent\" un lancer de dés de la part des autres joueurs.\r\n\r\nLe jeu est beau, fluide.\r\n\r\nDe base, la boîte propose ce qu\'on pourrait appeler une mini extension, avec des cartes bonus alternatives.\r\n\r\nJe terminerais en citant quelque chose qui a déjà été évoqué mais quand même, quel rangement pratique ! Que c\'est bien fichu ! C\'en est presque agréable de tout ranger à la fin d\'une partie.'),
(10, 'bon petit jeu', 4, 12, 'nanar', 'Un bon jeu simple à apprendre, amusant et originale, je le recommande pour des joueur qui veulent passer un bon moment sans se prendre la tête.'),
(11, 'indispensable', 3, 18, 'rrr', 'Rarement ai-je été autant impliqué dans un jeu, où la victoire ne tient qu\'à un fil, systématiquement. La difficulté progressive du jeu et les extensions lui confèrent une durée de vie considérable. Le jeu est immersif à souhait, la coopération réellement nécessaire pour venir à bout des nemesis, de difficultés variables. La mécanique d\'achat de 9 cartes toujours similaires (choisies parmi d\'autres au départ) permet de définir dès le départ des stratégies, suivant les pouvoirs initiaux de chaque joueur.\r\n\r\nLe deckbuilding non mélangé s\'avère une excellente idée pour affiner ses stratégies, tandis qu\'on appréciera également l\'ordre du tour aléatoire pour générer des phases de combat plus ou moins intenses. Bien que le jeu soit coopératif, chacun gère comme il le souhaite son deck, ce qui a le bon goût d\'éviter l\'effet \"leader\".\r\n\r\nLa montée en puissance de chaque camp nous maintient en haleine tout au long de la partie (60mn max à 2).\r\n\r\nQuelques bémols:\r\n\r\n- Le temps de mise en place / rangement, un peu long\r\n- Une certaine disparité dans la puissance des cartes du marché\r\n\r\nD\'ailleurs, j\'écarte maintenant les cartes les moins puissantes, je m\'arrange aussi pour disposer d\'un marché semi-aléatoire comportant: \"don de charge / stabilisation de brèche / don de vie / sort brutal / sort de soutien / purge / pioche\", plutôt que: \"3 aethers, 2 reliques & 4 sorts\" préconisés dans la règle. Côté mages, je répartis en 2 camps: \"agressif\" et \"soutien / défense\", et en sélectionne un de chaque camp à chaque partie (semi-aléatoire de nouveau).\r\n\r\nExcellent jeu!'),
(12, 'difficile', 3, 12, 'babar', 'Jeu très prenant, bonne rejouabilité mais les règles sont parfois difficiles à comprendre.'),
(13, 'wouah !', 3, 19, 'rex', 'Probablement le meilleur jeu du genre à ce jour.\r\n\r\nJ\'ai testé de nombreux jeux et c\'est le premier où je me suis dit :\r\n\r\n\" On voit que le créateur a testé son jeu. Il est bien équilibré et il n\'y a pas/peu de bogues. \"\r\n\r\nEn difficulté normale, même les premiers némésis apportent un peu de difficulté au jeu (moins après quelques parties).\r\n\r\nAu fil des divers extensions, la mécanique se renouvellent et la difficulté s\'accroit.\r\n\r\nIl devient alors nécessaire de choisir ses personnages et l\'offre (les cartes à l\'achat) avec attention.\r\n\r\nSi vous souhaitez découvrir le monde des jeux de construction de deck coopératif, c\'est le jeu que vous devriez acheter.'),
(14, 'excellent', 6, 18, 'babar', 'Le meilleur jeu expert jamais jouer ! \r\n\r\nUne pépite ! On ne voit pas passer les 2h voir 3h de parties, je n\'ai jamais vu ca ! \r\n\r\nEXCELLENT '),
(15, 'super', 6, 15, 'Pikachu', 'Un vrai coup de coeur pour ce jeu de stratégie totalement immersif, j\'aime beaucoup le côté à la fois collaboratif et aussi compétitif du jeu. On y joue pendant des heures sans s\'en rendre compte. Par contre, gros bémol sur la qualité du matériel, déçue qu\'il n\'y ait pas de rangement dans la boîte, pour un jeu à ce prix-là, on s\'attend à du matériel de meilleure qualité. '),
(16, 'bof', 6, 9, 'kiki', 'Je n\'ai pas accroché à ce jeu. Je trouve le déroulement terriblement ennuyeux, le démarrage est très lent et ensuite le tirage des cartes décide beaucoup la réussite du projet. Enfin, la qualité du matériel n\'est vraiment pas au standards actuels.'),
(17, 'trop simple', 7, 12, 'Pikachu', 'Très bon jeu pour enfants. Un peu simpliste pour les plus de 6ans.'),
(18, 'très bien', 7, 13, 'kiki', 'Très bon jeu. Mes enfants adorent Je recommande.'),
(19, 'bien', 8, 14, 'kiki', 'Super partie à 12 survivants sur l\'île au départ, terminée à 6 rescapés sur le radeau. Les tours vont vite au début et la partie se rallonge dès les premiers votes ! Et là l\'ambiance du jeu (et la durée réelle de la partie, pour nous 1h30 à 12 joueurs donc) vont dépendre de la tchatche et du bluff des joueurs de votre groupe. Le livret de règles est un peu long comparé à la simplicité de jouer au final.'),
(20, 'repetitif', 8, 11, 'Pikachu', 'Bon jeu d\'apéritif. Il faut cependant être nombreux pour en profiter (à partir de 5, c\'est vraiment fun).\r\n\r\nLa version de base peut être un peu répétitive, donc n\'hésitez pas à acheter l\'extension car elle donnera une vraie profondeur au jeu (cartes personnages permettant de différencier l\'impact des joueurs sur la partie, nouveaux objets et événements aléatoires). '),
(21, 'génial a plusieurs', 8, 18, 'bibi', 'Tres bon jeu coopératif surtout quand on cherche un jeu qui se joue à beaucoup, qui n’est pas compliqué et qui plait à tout le monde !\r\n\r\nle but etant d’essayer de maintenir son niveau d’eau et de nourriture afin de ne pas mourrir de faim ou de soiffe.\r\n\r\ntout en essayant petit a petit de construire un radeau suffisamment grand pour accueillir un maximum de personnes !\r\n\r\nMalheureusement il sera bien difficile d’arriver à faire les 3  et c’est la tout l’intérêt du jeu et ou on se marre !\r\n\r\nde plus le jeu n’est vraiment pas tres long ! Tout dépend à combien vous jouez.\r\n\r\nje vous recommande vivement se jeu pour des soirées entre amis !'),
(22, 'oui', 1, 13, 'coco', 'tres bon jeu'),
(28, 'hghgh', 1, 12, 'babar', 'hgfhgfhgfhgfhfghfgh'),
(30, 'très bon', 9, 16, 'babar', 'Cela fait maintenant près d\'un an que je m\'intéresse aux jeux de société modernes, essentiellement pour jouer avec mes bambins de 5 et 8 ans. J\'épluche les forums, les blogs, les avis et les vidéos en ligne pour ma faire ma liste de jeux \"à acheter\", et je n\'ai découvert que récemment l’existence Tokaido (en m\'intéressant à la liste des jeux crées par Antoine Bauza, qui est indiscutablement et rapidement devenu mon auteur de jeux de société préféré). Depuis ce jour, j\'étais obnubilé par l\'idée de l\'essayer.... c\'était il y a un mois et heureusement mon anniversaire est arrivé!\r\n\r\nClairement, la promesse est au rendez vous: mécanique de jeu simple et originale, thème immersif, durée des parties maitrisée, illustrations magnifiques et surtout, on découvre une mécanique de jeu compétitive qui n\'en est pas vraiment une: Tokaido est l\'exemple même du jeu ou \"le chemin compte plus que la destination\". Chaque joueur réalisera un voyage dans un Japon du temps ancien, et tous arriveront à destination. Alors certes, au cours du voyage, on va gagner des points, un des voyageur aura réussi à cumuler plus de point que les autres et gagnera la partie, car on considèrera qu\'il aura fait un plus beau voyage que les autres.... mais en fait, on s\'en fiche un peu, car tous les joueurs auront eux aussi réalisé un beau voyage et passé un bon moment. Il y a un gagnant mais pas vraiment de perdants. On est même tenté parfois de faire de choix contre productifs juste pour le plaisir. Ce jeu est pour moi un incontournable du jeu familial!\r\n\r\nBien entendu, il est techniquement possible de choisir à certains moment une stratégie plus agressive, visant à gêner un adversaire plutôt que de juste optimiser son propre voyage, mais ça serait d\'après moi tellement incongru, en contradiction totale avec l\'état d\'esprit de ce jeu... hardcore gamers et compétiteurs dans l\'âme, passez votre chemin... ou, pour une fois, faites une pause, car c\'est bien à cela qu\'invite Tokaido. Et si vous recherchez tout de même un jeu un peu plus stratégique (sans bouleverser pour autant la logique du jeu), 2 extensions sont disponibles pour pimenter les parties et complexifier un peu les règles.\r\n\r\nLe seul regret concerne la qualité du matériel: le papier du plateau de jeu semble bien fin et fragile, les pièces de monnaie ne payent pas de mine (il en existait je crois des métalliques en accessoires mais semble-t-il plus disponibles), et la taille très réduite des cartes ne met clairement pas suffisamment en valeur les magnifiques illustrations de Naiade. Cependant cette taille est probablement imposée par la mécanique du jeu: vu qu\'on passe son temps à étaler des cartes devant soi, de grandes cartes prendraient trop de place sur la table. Les pions de score sont minuscules et donc difficiles à manipuler, et on risque de les  perdre. Et pourtant les cases de la ligne de score trop petites aussi (impossible de placer correctement plusieurs pions sur la même case)... au point que je me demande si pour faciliter le jeu il ne serait pas plus simple de compter les points uniquement à l\'arrivée plutôt qu\'au fil de l\'eau (ce qui engendre des risques d\'oublis et d\'erreurs). Enfin, le blanc zen, épuré et immaculé, largement prédominant et qui participe à l\'ambiance du jeu, semble aussi bien salissant. Bref, le design du jeu aurait certainement pu être optimisé, surtout pour le prix (d\'où ma note de 4 et non 5).\r\n\r\nDernier petit défaut: Comme il y a pas mal de type de cartes différentes, avec en plus les cartes paysage à trier, la mise en place et le rangement sont un peu longs... un si beau voyage, ça se mérite! Mais vous ne le regretterez pas.'),
(31, 'oujpupû^àiù', 1, 2, 'jlkjolkjiujp', 'sxtdddddxydfuto igiygipygpim');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `id_jeux` int(11) NOT NULL,
  `img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `jeux`
--

CREATE TABLE `jeux` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `categorie` int(11) NOT NULL,
  `avis` longtext NOT NULL,
  `note` int(11) NOT NULL,
  `content` longtext NOT NULL,
  `img` varchar(50) NOT NULL,
  `videojeu` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jeux`
--

INSERT INTO `jeux` (`id`, `title`, `categorie`, `avis`, `note`, `content`, `img`, `videojeu`) VALUES
(1, 'Andor', 1, 'très bon jeu entre le jeu de rôle et le jeu de plateau', 14, 'Un jeu coopératif dans le monde fantastique d\'Andor. Incarnez des aventuriers et sauvez le royaume !', 'andor', '5zS0no7R8-k'),
(2, 'Dice forge', 1, 'très bon jeu le dice crafting est une idée innovante.', 15, 'Une place s’est libérée au Panthéon et les Dieux sont disposés à élever le plus prestigieux des héros à leur rang. Ça tombe bien, vous êtes un héros !', 'dice-forge', 'DsdMWgUPP0c'),
(3, 'Aeon\'s end', 4, 'Pour moi un des meilleurs jeux de deckbuilding !\r\nTout simplement indispensable.', 18, 'Protégez Gravehold des envahisseurs !', 'aeon-s-end', 'PjtwNft_iKo'),
(4, 'Mille Sabords', 2, 'Un petit jeu de lancer de dés parfait pour l\'apéro ou pour jouer en famille !', 13, 'Glissez-vous dans la peau d’un vieux loup de mer et organisez des parties de dés endiablées !', 'mille-sabords', 'UEK9QRKmSlM'),
(6, 'Terraforming mars', 4, 'Super jeu solo ou en multi', 16, 'Terraformez la planète mars !', 'terraforming-mars', 'r0EwRhyicyo'),
(7, 'Zombie kidz evolution', 2, 'Très bon jeu pour entrer dans l\'univers des legacy avec vos enfants.', 14, 'Zombie Kidz Évolution est un jeu coopératif dans lequel les joueurs ont pour objectif d\'éliminer les zombies qui ont envahi l\'école. Verrouillez les portes du bâtiment et gagnez ensemble la partie !', 'zombie-kidz-evolution', 'vTcNdM53wJA'),
(8, 'Galerapagos', 3, 'Super pour l\'ambiance Koh-lantha !', 15, 'Dans ce jeu semi-coopératif, les joueurs forment un groupe de rescapés sur une île déserte après le naufrage d\'un bateau. Afin de s\'en sortir, les survivants n\'ont d\'autre choix que de s\'unir dans la construction d\'un radeau.', 'galerapagos', 'ku2vW3uecA0'),
(9, 'Tokaido', 1, 'Un jeu magnifique avec une ambiance Zen mais pas dépourvu de stratégie!\r\nUne valeur sûre pour toute la famille.', 15, 'Les joueurs sont des voyageurs du Japon d’autrefois. Ils vont arpenter le prestigieux Tokaido, la route de la Mer de l’Est et tenter de faire de ce voyage une expérience des plus enrichissantes.', 'tokaido', 'CjThaihKvJU'),
(10, 'Blood-rage', 4, 'Un jeu avec du très beau materiel qui nous plonge \"joyeusement\" dans l\'univers vicking !\r\nun super jeu de figs. Dommage qu\'il n\'y ait pas de mode solo !', 14, 'Dans Blood Rage, les joueurs prennent le contrôle de puissants clans Vikings en quête de gloire avant que le monde ne touche à sa fin dans une ambiance d’apocalypse.', 'blood-rage', 'XqFJDnBv7S4');

-- --------------------------------------------------------

--
-- Table structure for table `mails`
--

CREATE TABLE `mails` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `sujet` varchar(50) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mails`
--

INSERT INTO `mails` (`id`, `firstname`, `lastname`, `mail`, `sujet`, `content`) VALUES
(1, 'olivier', 'bessuand', 'bessuand.o@gmail.com', 'coucou', '1er mail'),
(2, 'olivier', 'bessuand', 'bessuand.o@gmail.com', 're coucou', 'rezrzerzerzerzre');

-- --------------------------------------------------------

--
-- Table structure for table `tops`
--

CREATE TABLE `tops` (
  `id` int(11) NOT NULL,
  `id_jeu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tops`
--

INSERT INTO `tops` (`id`, `id_jeu`) VALUES
(3, 2),
(1, 3),
(2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `mdp` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `firstname`, `mail`, `mdp`) VALUES
(1, 'olivier', 'bessuand.o@gmail.com', '$2y$10$axqJ7.PCl60hnNftefSTAeIujSTUoOXXArbughaQ53HhQtBc/Ze8.'),
(2, 'olivier', 'bessuand.o@gmail.com', '$2y$10$JGKUiB6JjciwDGSxuSQEW.DIDBNrdg7LZMgpl7bAhJO7TkdlC7ZnW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jeu` (`id_jeu`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jeux`
--
ALTER TABLE `jeux`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorie` (`categorie`);

--
-- Indexes for table `mails`
--
ALTER TABLE `mails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tops`
--
ALTER TABLE `tops`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jeu` (`id_jeu`);

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jeux`
--
ALTER TABLE `jeux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mails`
--
ALTER TABLE `mails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tops`
--
ALTER TABLE `tops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaires_ibfk_1` FOREIGN KEY (`id_jeu`) REFERENCES `jeux` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jeux`
--
ALTER TABLE `jeux`
  ADD CONSTRAINT `jeux_ibfk_1` FOREIGN KEY (`categorie`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tops`
--
ALTER TABLE `tops`
  ADD CONSTRAINT `tops_ibfk_1` FOREIGN KEY (`id_jeu`) REFERENCES `jeux` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
