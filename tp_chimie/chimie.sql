-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 21 juin 2021 à 20:03
-- Version du serveur :  5.7.24
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `chimie`
--

-- --------------------------------------------------------

--
-- Structure de la table `atome`
--

DROP TABLE IF EXISTS `atome`;
CREATE TABLE IF NOT EXISTS `atome` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(13) DEFAULT NULL,
  `slug` varchar(13) DEFAULT NULL,
  `numero` int(10) UNSIGNED DEFAULT NULL,
  `symbole` varchar(6) NOT NULL,
  `info_groupe` varchar(10) NOT NULL,
  `masse_atomique` varchar(255) NOT NULL,
  `decouverte_annee` varchar(255) NOT NULL,
  `decouverte_noms` varchar(255) NOT NULL,
  `decouverte_pays` varchar(255) NOT NULL,
  `is_radioactif` tinyint(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `atome`
--

INSERT INTO `atome` (`id`, `nom`, `slug`, `numero`, `symbole`, `info_groupe`, `masse_atomique`, `decouverte_annee`, `decouverte_noms`, `decouverte_pays`, `is_radioactif`) VALUES
(1, 'Hydrogène', 'hydrogene', 1, 'H', '1', '1,00794', '1766', 'Henry Cavendish', 'Grande-Bretagne', 0),
(2, 'Hélium', 'helium', 2, 'He', '18', '4,002602', '1895', 'Jules Janssen, Joseph Norman Lockyer', 'Grande-Bretagne', 0),
(3, 'Lithium', 'lithium', 3, 'Li', '1', '6,941', '1817', 'Johan August Arfwedson', 'Suède', 0),
(4, 'Béryllium', 'beryllium', 4, 'Be', '2 (IIA)', '9,012182', '1798', 'Louis-Nicolas Vauquelin', 'France', 0),
(5, 'Bore', 'bore', 5, 'B', '13 (IIIA)', '10,811', '1808', 'Louis Joseph Gay-Lussac, Louis Jacques Thénard, Humphry Davy', 'France et Grande-Bretagne', 0),
(6, 'Carbone', 'carbone', 6, 'C', '14', '12,0107', 'Antiquité', '', '', 0),
(7, 'Azote', 'azote', 7, 'N', '15 (VA)', '14,0067', '1772', 'Daniel Rutherford', 'Écosse', 0),
(8, 'Oxygène', 'oxygene', 8, 'O', '16', '15,9994', '1774', 'Carl Wilhelm Scheele, Joseph Priestley', 'Grande-Bretagne et Suède', 0),
(9, 'Fluor', 'fluor', 9, 'F', '17 (VII)', '18,9984032', '1886', 'Henri Moissan', 'France', 0),
(10, 'Néon', 'neon', 10, 'Ne', '18 (VIIIA)', '20,1797', '1898', 'Morris William Travers, William Ramsay', 'Grande-Bretagne', 0),
(11, 'Sodium', 'sodium', 11, 'Na', '1', '22,98976928', '1807', 'Humphry Davy', 'Grande-Bretagne', 0),
(12, 'Magnésium', 'magnesium', 12, 'Mg', '2 (IIA)', '24,3050', '1775', 'Joseph Black', 'Écosse', 0),
(13, 'Aluminium', 'aluminium', 13, 'Al', '13 (IIIA)', '26,9815386', '1827', 'Hans Christian Ørsted', 'Danemark', 0),
(14, 'Silicium', 'silicium', 14, 'Si', '14', '28,0855', '1824', 'Jöns Jacob Berzelius', 'Suède', 0),
(15, 'Phosphore', 'phosphore', 15, 'P', '15 (VA)', '30,973762', '1669', 'Hennig Brandt', 'Allemagne', 0),
(16, 'Soufre', 'soufre', 16, 'S', '16 (VIA)', '32,065', 'Antiquité', '', '', 0),
(17, 'Chlore', 'chlore', 17, 'Cl', '17 (VII)', '35,453', '1774', 'Carl Wilhelm Scheele', 'Suède', 0),
(18, 'Argon', 'argon', 18, 'Ar', '18 (VIIIA)', '39,948', '1894', 'William Ramsay, John William Strutt Rayleigh', '', 0),
(19, 'Potassium', 'potassium', 19, 'K', '1 (IA)', '39,0983', '1807', 'Humphry Davy', 'Grande-Bretagne', 0),
(20, 'Calcium', 'calcium', 20, 'Ca', '2 (IIA)', '40,078', '1808', 'Humphry Davy', 'Grande-Bretagne', 0),
(21, 'Scandium', 'scandium', 21, 'Sc', '3', '44,955912', '1879', 'Lars Fredrik Nilson', 'Suède', 0),
(22, 'Titane', 'titane', 22, 'Ti', '4', '47,867', '1791', 'William Gregor', 'Grande-Bretagne', 0),
(23, 'Vanadium', 'vanadium', 23, 'V', '5', '50,9415', '1901', 'Andrés Manuel del Río', 'Suède', 0),
(24, 'Chrome', 'chrome', 24, 'Cr', '6', '51,9961', '1797', 'Louis-Nicolas Vauquelin', 'France', 0),
(25, 'Manganèse', 'manganese', 25, 'Mn', '7', '54,938045', '1774', 'Ignatius Gottfried Kaim, Johan Gottlieb Gahn', 'Suède', 0),
(26, 'Fer', 'fer', 26, 'Fe', '8', '55,845', 'Antiquité', '', '', 0),
(27, 'Cobalt', 'cobalt', 27, 'Co', '9', '58,933195', '1735', 'Georg Brandt', 'Suède', 0),
(28, 'Nickel', 'nickel', 28, 'Ni', '10', '58,6934', '1751', 'Axel Frederik Cronstedt', 'Suède', 0),
(29, 'Cuivre', 'cuivre', 29, 'Cu', '11', '63,546', 'Antiquité', '', '', 0),
(30, 'Zinc', 'zinc', 30, 'Zn', '12', '65,409', 'Antiquité', '', '', 0),
(31, 'Gallium', 'gallium', 31, 'Ga', '13 (IIIA)', '69,723', '1875', 'Paul-Émile Lecoq de Boisbaudran', 'France', 0),
(32, 'Germanium', 'germanium', 32, 'Ge', '14', '72,64', '1886', 'Clemens Winkler', 'Allemagne', 0),
(33, 'Arsenic', 'arsenic', 33, 'As', '15', '74,92160', '~1250', 'Albert le Grand', '', 0),
(34, 'Sélénium', 'selenium', 34, 'Se', '16 (VIA)', '78,96', '1817', 'Johan Gottlieb Gahn, Jöns Jacob Berzelius', 'Suède', 0),
(35, 'Brome', 'brome', 35, 'Br', '17 (VII)', '79,904', '1826', 'Leopold Gmelin, Antoine-Jérôme Balard', 'France', 0),
(36, 'Krypton', 'krypton', 36, 'Kr', '18 (VIIIA)', '83,798', '1898', 'Morris William Travers, William Ramsay', 'Grande-Bretagne', 0),
(37, 'Rubidium', 'rubidium', 37, 'Rb', '1 (IA)', '85,4678', '1861', '', 'Allemagne', 0),
(38, 'Strontium', 'strontium', 38, 'Sr', '2 (IIA)', '87,62', '1790', 'William Cruickshank', 'Écosse', 0),
(39, 'Yttrium', 'yttrium', 39, 'Y', '3', '88,90585', '1794', 'Johan Gadolin', 'Finlande', 0),
(40, 'Zirconium', 'zirconium', 40, 'Zr', '4', '91,224', '1789', 'Martin Heinrich Klaproth', 'Allemagne', 0),
(41, 'Niobium', 'niobium', 41, 'Nb', '5', '92,90638', '1801', 'Charles Hatchett', 'Grande-Bretagne', 0),
(42, 'Molybdène', 'molybdene', 42, 'Mo', '6', '95,94', '1778', 'Carl Wilhelm Scheele', 'Suède', 0),
(43, 'Technétium', 'technetium', 43, 'Tc', '7', '98', '1937', '', 'Italie', 1),
(44, 'Ruthénium', 'ruthenium', 44, 'Ru', '8', '101,07', '1844', 'Jędrzej Śniadecki', 'Russie', 0),
(45, 'Rhodium', 'rhodium', 45, 'Rh', '9', '102,90550', '1803', 'William Hyde Wollaston', 'Grande-Bretagne', 0),
(46, 'Palladium', 'palladium', 46, 'Pd', '10', '106,42', '1803', 'William Hyde Wollaston', 'Grande-Bretagne', 0),
(47, 'Argent', 'argent', 47, 'Ag', '11', '107,8682', 'Antiquité', '', '', 0),
(48, 'Cadmium', 'cadmium', 48, 'Cd', '12', '112,411', '1817', 'Karl Samuel Leberecht Hermann, Friedrich Stromeyer', 'Allemagne', 0),
(49, 'Indium', 'indium', 49, 'In', '13 (IIIA)', '114,818', '1863', '', 'Allemagne', 0),
(50, 'Étain', 'etain', 50, 'Sn', '14', '118,710', 'Antiquité', '', '', 0),
(51, 'Antimoine', 'antimoine', 51, 'Sb', '15', '121,760', '~1000', 'Jabir Ibn Hayyan', '', 0),
(52, 'Tellure', 'tellure', 52, 'Te', '16', '127,60', '1783', '', 'Roumanie', 0),
(53, 'Iode', 'iode', 53, 'I', '17 (VII)', '126,90447', '1811', 'Bernard Courtois', 'France', 0),
(54, 'Xénon', 'xenon', 54, 'Xe', '18 (VIIIA)', '131,293', '1898', '', 'Grande-Bretagne', 0),
(55, 'Césium', 'cesium', 55, 'Cs', '1 (IA)', '132,9054519', '1860', '', 'Allemagne', 0),
(56, 'Baryum', 'baryum', 56, 'Ba', '2 (IIA)', '137,327', '1808', 'Carl Wilhelm Scheele', 'Grande-Bretagne', 0),
(57, 'Lanthane', 'lanthane', 57, 'La', '3', '138,90547', '1839', 'Carl Gustaf Mosander', 'Suède', 0),
(58, 'Cérium', 'cerium', 58, 'Ce', 'L/A', '140,116', '1803', '', 'Suède', 0),
(59, 'Praséodyme', 'praseodyme', 59, 'Pr', 'L/A', '140,90765', '1885', '', 'Autruche', 0),
(60, 'Néodyme', 'neodyme', 60, 'Nd', 'L/A', '144,242', '1885', '', 'Autruche', 0),
(61, 'Prométhium', 'promethium', 61, 'Pm', 'L/A', '145', '1985', '', 'États-Unis', 1),
(62, 'Samarium', 'samarium', 62, 'Sm', 'L/A', '150,36', '1879', '', 'France', 0),
(63, 'Europium', 'europium', 63, 'Eu', 'L/A', '151,964', '1901', '', 'France', 0),
(64, 'Gadolinium', 'gadolinium', 64, 'Gd', 'L/A', '157,25', '1880', '', 'Suisse', 0),
(65, 'Terbium', 'terbium', 65, 'Tb', 'L/A', '158,92534', '1843', '', 'Suède', 0),
(66, 'Dysprosium', 'dysprosium', 66, 'Dy', 'L/A', '160,500', '1886', '', 'France', 0),
(67, 'Holmium', 'holmium', 67, 'Ho', 'L/A', '164,93032', '1878', 'Per Teodor Cleve, Jacques-Louis Soret, Marc Delafontaine', 'Suède, Suisse', 0),
(68, 'Erbium', 'erbium', 68, 'Er', 'L/A', '167,259', '1842', '', 'Suède', 0),
(69, 'Thulium', 'thulium', 69, 'Tm', 'L/A', '168,93421', '1879', '', 'Suède', 0),
(70, 'Ytterbium', 'ytterbium', 70, 'Yb', 'L/A', '173,04', '1878', '', 'Suisse', 0),
(71, 'Lutécium', 'lutecium', 71, 'Lu', 'L/A', '174,967', '1907', '', 'France et Allemagne', 0),
(72, 'Hafnium', 'hafnium', 72, 'Hf', '4 (IVB)', '178,49', '1923', 'George de Hevesy, Dirk Coster', 'Danemark', 0),
(73, 'Tantale', 'tantale', 73, 'Ta', '5 (VB)', '180,94788', '1802', '', 'Suède', 0),
(74, 'Tungstène', 'tungstene', 74, 'W', '6', '183,84', '1783', '', 'Espagne', 0),
(75, 'Rhénium', 'rhenium', 75, 'Re', '7 (VIIB)', '186,207', '1925', '', 'Allemagne', 0),
(76, 'Osmium', 'osmium', 76, 'Os', '8 (VIIIB)', '190,23', '1803', '', 'Grande-Bretagne', 0),
(77, 'Iridium', 'iridium', 77, 'Ir', '9', '192,217', '1803', '', 'Grande-Bretagne et France', 0),
(78, 'Platine', 'platine', 78, 'Pt', '10', '195,084', '1735', 'Antonio de Ulloa', 'Italie', 0),
(79, 'Or', 'or', 79, 'Au', '11', '196,966569', 'Antiquité', '', '', 0),
(80, 'Mercure', 'mercure', 80, 'Hg', '12', '200,59', 'Antiquité', '', '', 0),
(81, 'Thallium', 'thallium', 81, 'Tl', '13 (IIIA)', '204,3833', '1861', '', 'Grande-Bretagne', 0),
(82, 'Plomb', 'plomb', 82, 'Pb', '14', '207,2', 'Antiquité', '', '', 0),
(83, 'Bismuth', 'bismuth', 83, 'Bi', '15', '208,98040', '1753', 'Jabir Ibn Hayyan', 'France', 1),
(84, 'Polonium', 'polonium', 84, 'Po', '', '(209)', '1898', 'Marie Curie, Pierre Curie', 'France', 1),
(85, 'Astate', 'astate', 85, 'At', '17 (VIIA)', '210', '1940', '', 'États-Unis', 1),
(86, 'Radon', 'radon', 86, 'Rn', '18 (VIIIA)', '(222)', '1900', '', 'Allemagne', 1),
(87, 'Francium', 'francium', 87, 'Fr', '1 (IA)', '(223)', '1939', '', 'France', 1),
(88, 'Radium', 'radium', 88, 'Ra', '2 (IIA)', '226,0254', '1898', 'Pierre Curie, Marie Curie', 'France', 1),
(89, 'Actinium', 'actinium', 89, 'Ac', '3', '227', '1899', '', 'France', 1),
(90, 'Thorium', 'thorium', 90, 'Th', 'L/A', '232,03806', '1828', '', 'Suède', 1),
(91, 'Protactinium', 'protactinium', 91, 'Pa', 'L/A', '231,03588', '1913', '', 'Grande-Bretagne', 1),
(92, 'Uranium', 'uranium', 92, 'U', 'L/A', '238,02891', '1789', '', 'Grande-Bretagne', 1),
(93, 'Neptunium', 'neptunium', 93, 'Np', 'L/A', '237', '1940', '', 'États-Unis', 1),
(94, 'Plutonium', 'plutonium', 94, 'Pu', 'L/A', '244,06', '1940', 'Arthur Wahl, Edwin McMillan, Glenn Theodore Seaborg, Joseph W. Kennedy', 'États-Unis', 1),
(95, 'Américium', 'americium', 95, 'Am', 'L/A', '241,06', '1944', '', 'États-Unis', 1),
(96, 'Curium', 'curium', 96, 'Cm', 'L/A', '247', '1944', '', 'États-Unis', 1),
(97, 'Berkélium', 'berkelium', 97, 'Bk', 'L/A', '247', '1949', '', 'États-Unis', 1),
(98, 'Californium', 'californium', 98, 'Cf', 'L/A', '251', '1950', 'Albert Ghiorso, Glenn Theodore Seaborg', 'États-Unis', 1),
(99, 'Einsteinium', 'einsteinium', 99, 'Es', 'L/A', '252', '1952', 'Albert Ghiorso', 'États-Unis', 1),
(100, 'Fermium', 'fermium', 100, 'Fm', 'L/A', '257', '1952', '', 'États-Unis', 1),
(101, 'Mendélévium', 'mendelevium', 101, 'Md', 'L/A', '258', '1955', '', 'États-Unis', 1),
(102, 'Nobélium', 'nobelium', 102, 'No', 'L/A', '259', '1958', '', 'Suède et États-Unis', 1),
(103, 'Lawrencium', 'lawrencium', 103, 'Lr', 'L/A', '(262)', '1961', '', 'États-Unis', 1),
(104, 'Rutherfordium', 'rutherfordium', 104, 'Rf', '4', '261', '1964', '', 'Russie et États-Unis', 1),
(105, 'Dubnium', 'dubnium', 105, 'Db', '5', '262', '1967', '', 'Russie et États-Unis', 1),
(106, 'Seaborgium', 'seaborgium', 106, 'Sg', '6', '266', '1974', '', 'Russie et États-Unis', 1),
(107, 'Bohrium', 'bohrium', 107, 'Bh', '7', '264', '1981', '', 'Allemagne', 1),
(108, 'Hassium', 'hassium', 108, 'Hs', '8', '269', '1984', '', 'Allemagne', 1),
(109, 'Meitnérium', 'meitnerium', 109, 'Mt', '9', '268', '1982', '', 'Allemagne', 1),
(110, 'Darmstadtium', 'darmstadtium', 110, 'Ds', '10', '281', '1994', '', 'Allemagne', 1),
(111, 'Roentgenium', 'roentgenium', 111, 'Rg', '11', '280', '1994', '', 'Allemagne', 1),
(112, 'Copernicium', 'copernicium', 112, 'Cn', '12', '285', '1996', '', 'Allemagne', 1),
(113, 'Ununtrium', 'ununtrium', 113, 'Uut', '13', '(284)', '', '', '', 1),
(114, 'Flérovium', 'flerovium', 114, 'Fl', '14', '(289)', '1998', '', '', 1),
(115, 'Ununpentium', 'ununpentium', 115, 'Uup', '15', '(288)', '2004', '', '', 1),
(116, 'Livermorium', 'livermorium', 116, 'Lv', '16', '(293)', '2000', '', '', 1),
(117, 'Ununseptium', 'ununseptium', 117, 'Uus', '17', '(291)', '2010', '', '', 1),
(118, 'Ununoctium', 'ununoctium', 118, 'Uuo', '18', '294', '', '', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `atome_molecule`
--

DROP TABLE IF EXISTS `atome_molecule`;
CREATE TABLE IF NOT EXISTS `atome_molecule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_atome` int(11) NOT NULL,
  `id_molecule` int(11) NOT NULL,
  `qtte_atome` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_molecule` (`id_molecule`),
  KEY `id_atome` (`id_atome`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `atome_molecule`
--

INSERT INTO `atome_molecule` (`id`, `id_atome`, `id_molecule`, `qtte_atome`) VALUES
(1, 1, 1, 2),
(2, 8, 1, 1),
(3, 11, 2, 1),
(4, 17, 2, 1),
(5, 6, 3, 1),
(6, 8, 3, 2),
(7, 6, 4, 1),
(8, 1, 4, 4),
(9, 7, 5, 1),
(10, 1, 5, 3),
(11, 6, 6, 6),
(12, 1, 6, 12),
(13, 8, 6, 6),
(14, 6, 7, 1),
(15, 1, 7, 3),
(16, 6, 7, 1),
(17, 8, 7, 1),
(18, 8, 7, 1),
(19, 1, 7, 1);

-- --------------------------------------------------------

--
-- Structure de la table `molecule`
--

DROP TABLE IF EXISTS `molecule`;
CREATE TABLE IF NOT EXISTS `molecule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `formule` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `molecule`
--

INSERT INTO `molecule` (`id`, `nom`, `formule`) VALUES
(1, 'Eau', 'H2O'),
(2, 'Chlorure de sodium', 'NaCl'),
(3, 'Dioxyde de Carbone', 'CO2'),
(4, 'Méthane', 'CH4'),
(5, 'Ammoniac', 'NH3'),
(6, 'Glucose', 'C6H12O6'),
(7, 'Acide acétique', 'CH3COOH');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `atome_molecule`
--
ALTER TABLE `atome_molecule`
  ADD CONSTRAINT `atome_molecule_ibfk_1` FOREIGN KEY (`id_molecule`) REFERENCES `molecule` (`id`),
  ADD CONSTRAINT `atome_molecule_ibfk_2` FOREIGN KEY (`id_atome`) REFERENCES `atome` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
