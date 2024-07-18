-- LOGIBOX
-- phpMyAdmin SQL Dump
-- version 2.10.3deb1ubuntu0.1
-- http://www.phpmyadmin.net
-- 
-- Serveur: localhost
-- Généré le : Mer 23 Janvier 2008 à 05:55
-- Version du serveur: 5.0.45
-- Version de PHP: 5.2.3-1ubuntu6.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de données: `projet`
-- 

-- --------------------------------------------------------

-- 
-- Structure de la table `commentaires`
-- 

CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL auto_increment,
  `id_user` int(11) NOT NULL,
  `date` date NOT NULL,
  `paragraphe` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

-- 
-- Contenu de la table `commentaires`
-- 

INSERT INTO `commentaires` (`id`, `id_user`, `date`, `paragraphe`, `message`) VALUES 
(3, 140, '2007-03-25', 'evenements', '&quot;pour qu''il n''y ait pas une semaine sans évènement au foyer.&quot;<br />\r\n<br />\r\nJe ne comprends pas ce point, on tourne en général à un évènement par semaine minimum, et on atteint déjà souvent 2 ou 3 évènements.<br />\r\nPour moi la fréquentation du foyer n''est pas un problème lors des évènements, bien au contraire. Elle en est un justement lorsqu''il n''y a rien d''organisé.<br />\r\nComment comptez-vous améliorer ce point là ?'),
(2, 15, '2007-03-24', 'communication', 'Les forums pourraient peut-être être redynamisés par des questions d''actualités comme la réforme des études par exemple. Cela permettrait peut-être d''impliquer d''avantage de personnes.'),
(4, 140, '2007-03-25', 'rez', '&quot;Veillez à ce que la salle commune du batiment D le reste, quoi qu''il arrive.&quot;<br />\r\n<br />\r\n&quot;Faire un recensement de toutes les salles et de leurs utilisateurs afin de ne pas les perdre inutilement.&quot;<br />\r\n<br />\r\nPourriez vous expliciter ces points ? Personnellement je ne comprends pas de quoi vous voulez parler!'),
(5, 140, '2007-03-25', 'communication', 'Comment comptez vous inciter les gens à utiliser IRC ? <br />\r\nL''interface pourra en rebuter plus d''un, quant à l''utilité je pense qu''elle est limitée pour une grande majorité des Centraliens.'),
(6, 140, '2007-03-25', 'ecole', 'Le projet du CRI concerne-t-il uniquement l''école ou également la résidence ?'),
(7, 5, '2007-03-26', 'rez', 'En ce qui concerne la salle du batiment D, tu dois etre au courant que cette salle est disponible pour tout le monde a l''heure actuelle. Si nous sommes élus, nous nous assurerons qu''elle le reste et qu''aucune association ne puisse se l''aproprier comme ce fut le cas le mois dernier.<br />\r\nPour le recensement des salles, es tu aujourd''hui capable de me dire quelles associations ou clubs occupent chacune des salles de la résidence? Nous voulons pouvoir etre capable d''identifier chaque salle. Il me semble impossible de pouvoir gerer la vie a la rez si nous ne savons pas ce que sont la moitié des locaux communs.'),
(8, 5, '2007-03-26', 'communication', 'en faisant plus de comm'' tout simplement!<br />\r\nPour l''interface, tu n''es pas obligé d''utiliser LéoIRC si cela te deranges, xchat est tres bien aussi! <br />\r\nJe ne crois pas que la grande majorité des centraliens ne trouvet aucune utilité a IRC, ne serait ce que pour le projet, un chan et un FTP compensent largement groove. Enfin je ne m''avance pas trop en disans que la grande majorité des centraliens utilisent MSN or IRC c''est MSN mais en mieux. <br />\r\nPour l''utilité d''IRC, je peux te donner un exmple concret, lorsque nous avons fait notre petit dejeuner dimanche dernier, nous avons pu, grace a IRC prendre des commandes jusqu''a 13h et servir les gens dans les 5 minutes suivantes. En ayant un chan IRC, votre liste aurait pu faire de meme et ne pas laisser bon nombres de centraliens sur leur faim mardi car les inscriptions etaient closes.  '),
(9, 5, '2007-03-26', 'ecole', 'uniquement l''école '),
(10, 5, '2007-03-26', 'evenements', 'Je dois admettre que tu as raison sur le fait que c''est entre les evenements qu''il y a des problemes de frequentation au foyer.<br />\r\nQue comptons nous faire pour améliorer ces problemes de fréquentations?<br />\r\net bien rien du tout.<br />\r\n<br />\r\nNous estimons que ce probleme est a gérer par la foy''s team, et nous ne voulons pas que celle ci meurt. C''est pourquoi nous ne voulons pas nous approprier le foyer. Nous pensons qu''une équipe dévouée pour le foyer sera beaucoup plus a meme de s''occuper de se dernier que le BDE. '),
(11, 1, '2007-03-28', 'communication', 'Pour répondre à guillaume, il me semble intéressant d''exposer les sujets d''actualité sur les forums afin de les rendre un peu plus vivants mais nous comptons surtout les maintenir car ils constituent un premier centre d''information pour les futurs G1 désirant se renseigner sur l''école pendant les vacances d''été.  '),
(12, 165, '2007-03-29', 'ecole', 'Vous êtes sacrément ambitieux dites moi avec ce lourd programme concernant la vie à l''école!<br />\r\nPensez vous pouvoir tenir ces nombreux  engagements?'),
(13, 5, '2007-03-29', 'ecole', 'oui, nous pensons pouvoir tenir l''intégralité de nos engagements quelle que soit la rubrique, nous pensons qu''un programme se doit d''etre réaliste et c''est pourquoi nous ne le remplissons pas de promesses que nous ne tiendrons pas. De plus nous sommes prets a recevoir toutes propositions des élèves pour améliorer notre programme, si tu penses que nous devrions faire quelquechose de plus dit le nous, nous verrons si cela nous semble réalisable!'),
(14, 140, '2007-03-30', 'rez', 'Je ne connaissais même pas l''existance de cette salle à vrai dire. Le problème que vous soulevez existe donc effectivement.'),
(15, 15, '2007-03-30', 'integration', 'Que pensez-vous de l''idée de créer une commission WEI, qui se chargerait de l''organisation de celui-ci ?<br />\r\nCela existe dans de nombreuses autres écoles et permet à tous ceux qui le veulent de s''investir dans l''organisation de cet évènement important et fédérateur. Cela permettrait également d''alléger une part du travail du BDE pour la rentrée (même s''il conserverait bien sur une place importante dans le WEI), ce qui serait non négligeable dans l''hypothèse d''une ouverture du WEI aux G2 et G3. Et il n''y aurait plus de listeux uniquement motivé par le fait d''aller au WEI.'),
(17, 181, '2007-04-04', 'solidarite', 'Vous pensez que le respo solidarité va réussir à gérer tout ça ?');

-- --------------------------------------------------------

-- 
-- Structure de la table `d`
-- 

CREATE TABLE IF NOT EXISTS `d` (
  `id` int(10) NOT NULL auto_increment,
  `id_menu` varchar(255) character set latin1 NOT NULL,
  `nom` varchar(255) character set latin1 NOT NULL,
  `module` varchar(255) character set latin1 NOT NULL,
  `visibility` enum('anonymous','normal') collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

-- 
-- Contenu de la table `d`
-- 


-- --------------------------------------------------------

-- 
-- Structure de la table `menu`
-- 

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- 
-- Contenu de la table `menu`
-- 

INSERT INTO `menu` (`id`, `name`) VALUES 
(1, 'accueil'),
(2, 'trajets'),
(3, 'communaute'),
(4, 'pratique'),
(5, 'equipe'),
(0, '');

-- --------------------------------------------------------

-- 
-- Structure de la table `modules`
-- 

CREATE TABLE IF NOT EXISTS `modules` (
  `id` tinyint(5) unsigned NOT NULL auto_increment,
  `gid` tinyint(5) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `file` varchar(20) NOT NULL,
  `visibility` enum('anonymous','normal','admin') NOT NULL,
  `load` enum('start','call') NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- 
-- Contenu de la table `modules`
-- 

INSERT INTO `modules` (`id`, `gid`, `name`, `description`, `file`, `visibility`, `load`) VALUES 
(1, 1, 'Accueil', 'Module d''accueil', 'accueil', 'anonymous', 'call'),
(2, 5, 'EC-Lille', '', 'equipeEcole', 'anonymous', 'call'),
(3, 5, 'Equipe Logibox', '', 'equipeEleves', 'anonymous', 'call'),
(4, 5, 'Partenaire', '', 'equipePartenaire', 'anonymous', 'call'),
(5, 5, 'Encadrants', '', 'equipeEncadrants', 'anonymous', 'call'),
(6, 5, 'Activité projet', '', 'equipeProjet', 'anonymous', 'call'),
(7, 2, 'Voir la carte', '', 'googleMap', 'anonymous', 'call'),
(8, 0, 'Shoutbox', '', 'shoutbox', 'anonymous', 'start');

-- --------------------------------------------------------

-- 
-- Structure de la table `reponse`
-- 

CREATE TABLE IF NOT EXISTS `reponse` (
  `id` smallint(6) NOT NULL auto_increment,
  `pseudo` text NOT NULL,
  `mdp` text NOT NULL,
  `q1` text NOT NULL,
  `q2` text NOT NULL,
  `q31` text NOT NULL,
  `q32` text NOT NULL,
  `q33` text NOT NULL,
  `q34` text NOT NULL,
  `q4` text NOT NULL,
  `q5` text NOT NULL,
  `q6` text NOT NULL,
  `q7` text NOT NULL,
  `q8` text NOT NULL,
  `q9` text NOT NULL,
  `q101` text NOT NULL,
  `q102` text NOT NULL,
  `q103` text NOT NULL,
  `q104` text NOT NULL,
  `q105` text NOT NULL,
  `q106` text NOT NULL,
  `q11` text NOT NULL,
  `q12` text NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- 
-- Contenu de la table `reponse`
-- 

INSERT INTO `reponse` (`id`, `pseudo`, `mdp`, `q1`, `q2`, `q31`, `q32`, `q33`, `q34`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q101`, `q102`, `q103`, `q104`, `q105`, `q106`, `q11`, `q12`) VALUES 
(7, 'acer', 'cccc', 'oui', 'non', '', '', '', '', 'oui', 'non', 'oui', 'non', 'oui', 'trajet', '', '', '', '', '', '', 'non', 'femme'),
(6, 'tona', 'chouchou', 'oui', 'non', 'on', 'on', 'on', 'on', 'oui', 'non', 'oui', 'non', 'oui', 'trajet_regulier', 'on', 'on', 'on', 'on', 'on', 'coucou', 'oui', 'femme'),
(5, 'hello', 'hello', 'coucou', 'oui', '', '', '', '', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'on', '', '', '', '', '', 'oui', 'homme');

-- --------------------------------------------------------

-- 
-- Structure de la table `shoutbox`
-- 

CREATE TABLE IF NOT EXISTS `shoutbox` (
  `id` int(11) NOT NULL auto_increment,
  `pseudo` varchar(50) NOT NULL default '',
  `date` date NOT NULL,
  `titre` varchar(200) NOT NULL default '',
  `message` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

-- 
-- Contenu de la table `shoutbox`
-- 

INSERT INTO `shoutbox` (`id`, `pseudo`, `date`, `titre`, `message`) VALUES 
(22, 'Jean-Pierre', '2008-01-23', '[Recherche]Lille-Paris-12/06/08', 'Bonjour, Je recherche un covoiturage pour me rendre sur Paris le 12 Juin 2008. Je souhaite pouvoir partir assez tôt dans la matinée car je dois être à un rendez-vous prévu à 13h30. Merci.'),
(23, '', '0000-00-00', 'coucou', 'iop ipo ipo'),
(24, '', '0000-00-00', 'coucou', 'iop ipo ipo'),
(25, '', '0000-00-00', 'coucou', 'iop ipo ipo'),
(26, '', '0000-00-00', 'coucou', 'iop ipo ipo'),
(27, '', '0000-00-00', 'coucou', 'iop ipo ipo'),
(28, '', '0000-00-00', 'coucou', 'iop ipo ipo'),
(29, '', '0000-00-00', 'coucou', 'iop ipo ipo'),
(30, '', '0000-00-00', 'coucou', 'iop ipo ipo'),
(31, '', '0000-00-00', 'coucou', 'iop ipo ipo'),
(32, '', '0000-00-00', 'coucou', 'iop ipo ipo'),
(33, '', '0000-00-00', 'coucou', 'iop ipo ipo'),
(34, '', '0000-00-00', 'coucou', 'iop ipo ipo'),
(35, '', '0000-00-00', 'coucou', 'iop ipo ipo'),
(36, '', '0000-00-00', 'coucou', 'iop ipo ipo'),
(37, '', '0000-00-00', 'coucou', 'iop ipo ipo'),
(38, '', '0000-00-00', 'coucou', 'iop ipo ipo'),
(39, '', '0000-00-00', 'aaa', 'aaa');

-- --------------------------------------------------------

-- 
-- Structure de la table `utilisateurs`
-- 

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(10) NOT NULL auto_increment,
  `login` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `droits` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=199 ;

-- 
-- Contenu de la table `utilisateurs`
-- 

