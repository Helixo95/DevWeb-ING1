-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 17 mai 2024 à 14:54
-- Version du serveur : 8.0.28
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `exotik`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id_cat` int NOT NULL AUTO_INCREMENT,
  `nom_cat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_cat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `relation_user_id` int NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_4C62E638BE15C1E4` (`relation_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contact_form`
--

DROP TABLE IF EXISTS `contact_form`;
CREATE TABLE IF NOT EXISTS `contact_form` (
  `id_contact` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sujet` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20240505080244', '2024-05-06 19:15:46', 111),
('DoctrineMigrations\\Version20240505112001', '2024-05-06 19:15:46', 129),
('DoctrineMigrations\\Version20240505134747', '2024-05-06 19:15:46', 108);

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

DROP TABLE IF EXISTS `messenger_messages`;
CREATE TABLE IF NOT EXISTS `messenger_messages` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  KEY `IDX_75EA56E016BA31DB` (`delivered_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `id_panier` int NOT NULL AUTO_INCREMENT,
  `quantite` int DEFAULT NULL,
  PRIMARY KEY (`id_panier`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id_prod` int NOT NULL AUTO_INCREMENT,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `old_price` decimal(5,2) DEFAULT NULL,
  `current_price` decimal(5,2) DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `rating` int DEFAULT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `primary_image_url` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `secondary_image_url` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creation_date` date DEFAULT NULL,
  PRIMARY KEY (`id_prod`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id_prod`, `description`, `name`, `old_price`, `current_price`, `quantity`, `rating`, `category`, `primary_image_url`, `secondary_image_url`, `brand`, `status`, `creation_date`) VALUES
(1, 'Découvrez l\'essence intemporelle de la masculinité avec Jaguar Classic Black. Ce parfum captivant incarne l\'esprit audacieux et la sophistication élégante de la marque emblématique Jaguar. Les notes de tête fraîches de mandarine, de pomme verte et de bergamote évoquent une sensation de vitalité et d\'énergie dynamique.', 'Jaguar Classic Black', 60.00, 50.00, 50, 5, 'Men', 'base\\products\\Men\\1-1.png', 'base\\products\\Men\\1-1.png', 'Jaguar', 'out_of_stock', '2024-05-10'),
(2, 'Plongez dans l\'essence rafraîchissante de la nature avec Acqua Di Gio, une fragrance emblématique qui capture l\'esprit de l\'océan et de la Méditerranée. Inspiré par la fraîcheur et la liberté de la mer, ce parfum intemporel incarne l\'élégance décontractée et la virilité sophistiquée. Les notes de tête pétillantes de bergamote, de mandarine et de néroli évoquent un souffle vivifiant de fraîcheur marine, tandis que le cœur vibrant de jasmin, de romarin et de persil ajoute une touche de sensualité méditerranéenne.', 'Acqua Di Gio', 70.67, 65.99, 15, 5, 'Men', 'base\\products\\Men\\3-1.png', 'base\\products\\Men\\3-2.png', 'Armani', 'available', '2024-05-13'),
(3, 'Plongez dans l\'élégance intemporelle de la ville emblématique de Londres avec Dunhill London. Ce parfum captivant capture l\'esprit cosmopolite et raffiné de la capitale britannique, offrant une expérience olfactive incomparable pour l\'homme moderne. Les notes de tête dynamiques de pomme rouge, de bergamote et de verveine citronnée évoquent une sensation de fraîcheur et de vivacité dès le premier contact.', 'Dunhill London', 50.00, 45.00, 20, 3, 'Men', 'base\\products\\Men\\4-1.png', 'base\\products\\Men\\4-2.png', 'Elite', NULL, '2024-05-19'),
(4, 'Dominez le jeu avec Invictus, le parfum emblématique qui incarne la victoire et la puissance. Inspiré par l\'univers des compétitions sportives et le désir de réussite, Invictus célèbre l\'esprit invincible de l\'homme moderne. Les notes de tête fraîches de zestes de pamplemousse et de laurier captivent dès les premiers instants, évoquant un élan de fraîcheur dynamique.', 'Invictus de Paco Rabanne', 99.00, 89.00, 15, 5, 'Men', 'base\\products\\Men\\5-1.png', 'base\\products\\Men\\5-2.png', 'Paco Rabanne', NULL, '2024-05-20'),
(5, 'Découvrez la noblesse et la richesse de la tradition orientale avec Lataffa Ameer El Arab. Ce parfum captivant évoque l\'opulence et le raffinement des rois arabes, offrant une expérience olfactive luxueuse et envoûtante. Les notes de tête envoûtantes d\'agrumes frais et de safran évoquent un souffle d\'air frais dans les jardins orientaux, tandis que les notes de cœur de rose et de jasmin ajoutent une touche de sensualité florale. Enfin, les notes de fond riches d\'ambre, de musc et de bois de santal enveloppent la peau d\'une chaleur envoûtante et d\'une profondeur magnétique. Portez Lataffa Ameer El Arab pour vous imprégner de l\'aura majestueuse et du charisme indéniable des grands souverains arabes, laissant derrière vous une trace exquise partout où vous allez.', 'Eau de Parfum Ameer El Arab', 55.00, 45.00, 19, 4, 'Men', 'base\\products\\Men\\7-1.jpg', 'base\\products\\Men\\7-1.png', 'Lataffa', NULL, '2024-05-21'),
(6, 'Plongez dans un voyage sensoriel captivant avec Lataffa Musammam, un parfum qui évoque la richesse et la profondeur de la culture orientale. Inspiré par les traditions anciennes et les mystères envoûtants de l\'Orient, Musammam offre une expérience olfactive inoubliable. Les notes de tête exotiques de safran et de cardamome intriguent dès le premier contact, évoquant les souks animés et les épices enivrantes des marchés orientaux. Au cœur, des accords floraux de rose et de jasmin apportent une touche de féminité et de sensualité, tandis que les notes de fond riches de bois de santal, d\'ambre et de musc ajoutent une profondeur envoûtante et une longue tenue.', 'Eau de Parfum Lataffa Musammam', 65.95, 50.00, 10, 5, 'Men', 'base\\products\\Men\\10-1.jpg', 'base\\products\\Men\\10-2.jpg', 'Lataffa', NULL, '2024-05-05'),
(7, 'Découvrez le parfum bleu Mousuf, une création audacieuse et envoûtante qui réinvente l\'essence du mystère et de la sophistication. Plongez dans un océan de sensations avec ce parfum captivant qui capture l\'essence même de la fraîcheur et de l\'élégance. Les notes de tête pétillantes de bergamote et de baies de genièvre vous transportent vers des horizons infinis, tandis que les accords marins évoquent la brise salée d\'une mer lointaine. Au cœur, des notes florales délicates de jasmin et de néroli dansent sur la peau, ajoutant une touche de grâce et de féminité.', 'Parfum Bleu Mousuf', 55.00, 45.00, 20, 4, 'Women', 'base\\products\\Women\\11-1.webp', 'base\\products\\Women\\11-2.webp', 'Lataffa', NULL, '2024-05-26'),
(8, 'Découvrez la noblesse et la richesse de la tradition orientale avec Lataffa Ameer El Arab. Ce parfum captivant évoque l\'opulence et le raffinement des rois arabes, offrant une expérience olfactive luxueuse et envoûtante. Les notes de tête envoûtantes d\'agrumes frais et de safran évoquent un souffle d\'air frais dans les jardins orientaux, tandis que les notes de cœur de rose et de jasmin ajoutent une touche de sensualité florale. Enfin, les notes de fond riches d\'ambre, de musc et de bois de santal enveloppent la peau d\'une chaleur envoûtante et d\'une profondeur magnétique. Portez Lataffa Ameer El Arab pour vous imprégner de l\'aura majestueuse et du charisme indéniable des grands souverains arabes, laissant derrière vous une trace exquise partout où vous allez', 'Lataffa Ameer El Arab', 55.67, 45.00, 16, 5, 'Women', 'base\\products\\Women\\7-1.jpg', 'base\\products\\Women\\7-1.webp', 'Lataffa', NULL, '2024-05-16'),
(11, 'Découvrez la noblesse et la richesse de la tradition orientale avec Lataffa Ameer El Arab. Ce parfum captivant évoque l\'opulence et le raffinement des rois arabes, offrant une expérience olfactive luxueuse et envoûtante. Les notes de tête envoûtantes d\'agrumes frais et de safran évoquent un souffle d\'air frais dans les jardins orientaux, tandis que les notes de cœur de rose et de jasmin ajoutent une touche de sensualité florale. Enfin, les notes de fond riches d\'ambre, de musc et de bois de santal enveloppent la peau d\'une chaleur envoûtante et d\'une profondeur magnétique. Portez Lataffa Ameer El Arab pour vous imprégner de l\'aura majestueuse et du charisme indéniable des grands souverains arabes, laissant derrière vous une trace exquise partout où vous allez', 'Sauvage', 56.00, 84.00, 5, 4, 'Men', 'base\\products\\Men\\1-1.png', 'base\\products\\Men\\1-2.png', 'Dior', 'available', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roles` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'user',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenom` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `genre`, `address`, `phone_number`, `roles`, `password`, `created_at`, `picture`, `nom`, `prenom`, `status`) VALUES
(3, 'ahmed@gmail.com', 'homme', 'dzdzdz 654 8', '0684848484', '[\"admin\"]', '$2y$13$TqCUNiIg8YBraFei0FKGSOSMAf4q2HcvPfAzKgWZHwH86AkIXS7p2', '2024-05-14 21:56:49', NULL, 'Maaouia', 'Ahmed', 'active'),
(4, 'admin@gmail.com', 'homme', 'dzdzdz 654 8', '0754558484', '[\"admin\"]', '$2y$13$wOwMDyLNVENAykNQjIHvXOLM3mrOhMh60cjNDah4WkIABmVATFqwC', '2024-05-14 22:21:01', NULL, 'Yassine', 'Chahid', NULL),
(5, 'eric.ly@gmail.com', 'homme', 'dzdzdz 654 8', '0684848484', '[\"user\"]', '$2y$13$C4k0rNzIGTVC7iYrpKvew.NU8RLZGiYmCIaak0AW7IO7ZC6DoFCaK', '2024-05-14 22:52:22', NULL, 'Eric', 'Ly', 'active'),
(6, 'test4@gmail.com', 'homme', 'dzdzdz 654 8', '0684848484', '[\"user\"]', '$2y$13$uBoWWNbVCjBLnJK7dM7gEO4FW.FoAYnBO1va/y2XI4G869LdoM7kK', '2024-05-14 23:16:35', NULL, 'Tom', 'Cruise', 'inactive');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `FK_4C62E638BE15C1E4` FOREIGN KEY (`relation_user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
