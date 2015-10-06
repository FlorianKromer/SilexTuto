# SilexTuto
## Installation
* Cloner (ou télécharger) le projet dans le repertoire www de wamp/lamp
* Créer une base de donnée 
```sql
--
-- Structure de la table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `author` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `date`, `author`, `content`) VALUES
(1, 'mon premier article', '2015-10-05', 'Toto', 'lorem ipsum dolor'),
(2, 'deuuuuz', '2015-10-06', 'Moi', 'kikoooooo');
```
* remplir les parametres dans web/config/setting.yml.dist puis le renommer en setting.yml
* faire  ```composer install``` à la racine du projet pour installer les vendors
* se rendre http://localhost/silexTuto/web/
