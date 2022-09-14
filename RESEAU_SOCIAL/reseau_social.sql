-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 31 déc. 2021 à 17:02
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `reseau_social`
--

-- --------------------------------------------------------

--
-- Structure de la table `friends`
--

CREATE TABLE `friends` (
  `user_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `friend_name` varchar(255) NOT NULL,
  `friend_Password` varchar(255) NOT NULL,
  `friend_sexe` varchar(255) NOT NULL,
  `friend_phone_number` varchar(255) NOT NULL,
  `friend_Age` int(11) NOT NULL,
  `friend_email` varchar(255) NOT NULL,
  `friend_user_picture` varchar(255) NOT NULL,
  `user_picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `friends`
--

INSERT INTO `friends` (`user_id`, `friend_id`, `user_name`, `friend_name`, `friend_Password`, `friend_sexe`, `friend_phone_number`, `friend_Age`, `friend_email`, `friend_user_picture`, `user_picture`) VALUES
(70, 68, 'yan', 'majoie', 'mjw9', 'Homme', '96329943', 18, 'majoiefaya@gmail.com', 'User_img_Profilmajoie.jpg', 'User_img_Profilyan.jpg'),
(67, 70, 'dora', 'yan', 'yan', 'femme', '90128888', 18, 'anna@gmail.com', 'User_img_Profilyan.jpg', 'User_img_Profildora.png'),
(67, 68, 'dora', 'majoie', 'mjw9', 'Homme', '96329943', 18, 'majoiefaya@gmail.com', 'User_img_Profilmajoie.jpg', 'User_img_Profildora.png'),
(70, 67, 'yan', 'dora', 'dorakog', 'femme', '98839775', 19, 'barbie2barbie02@gmail.com', 'User_img_Profildora.png', 'User_img_Profilyan.jpg'),
(68, 67, 'majoie', 'dora', 'dorakog', 'femme', '98839775', 19, 'barbie2barbie02@gmail.com', 'User_img_Profildora.png', 'User_img_Profilmajoie.jpg'),
(72, 68, 'ggko', 'majoie', 'mjw9', 'Homme', '96329943', 18, 'majoiefaya@gmail.com', 'User_img_Profilmajoie.jpg', NULL),
(72, 67, 'ggko', 'dora', 'dorakog', 'femme', '98839775', 19, 'barbie2barbie02@gmail.com', 'User_img_Profildora.png', NULL),
(68, 70, 'majoie', 'yan', 'yan', 'femme', '90128888', 18, 'anna@gmail.com', 'User_img_Profilyan.jpg', 'User_img_Profilmajoie.jpg'),
(68, 69, 'majoie', 'BAGNA', 'BAGNA', 'femme', '96329943', 20, 'bagna@gmail.com', 'User_img_ProfilBAGNA.jpg', 'User_img_Profilmajoie.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `notifications`
--

CREATE TABLE `notifications` (
  `id_noti` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `sujet` varchar(255) NOT NULL,
  `noti_content` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `user_picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `notifications`
--

INSERT INTO `notifications` (`id_noti`, `user_name`, `sujet`, `noti_content`, `status`, `user_picture`) VALUES
(1, 'majoie', 'Message', 'Message FromSakia', 0, NULL),
(2, 'majoie', 'Message', 'Message FromSakia', 0, NULL),
(3, 'majoie', 'Message', 'Message FromSakia', 0, NULL),
(4, 'Sakia', 'Message', 'Message Frommajoie', 0, NULL),
(5, 'Sakia', 'Message', 'Message Frommajoie', 0, NULL),
(6, 'Sakia', 'Message', 'Message Frommajoie', 0, NULL),
(7, 'Sakia', 'Message', 'Message Frommajoie', 0, NULL),
(8, 'Sakia', 'Message', 'Message Frommajoie', 0, NULL),
(9, 'Sakia', 'Message', 'Message Frommajoie', 0, NULL),
(10, 'majoie', 'Message', 'Message FromAspros', 0, NULL),
(11, 'majoie', 'Message', 'Message FromAspros', 0, NULL),
(12, 'Sakia', 'Message', 'Message FromAspros', 0, NULL),
(13, 'Sakia', 'Message', 'Message Frommajoie', 0, NULL),
(14, 'Sakia', 'Message', 'Message Frommajoie', 0, NULL),
(15, 'Sakia', 'Message', 'Message Frommajoie', 0, NULL),
(16, 'Sakia', 'Message', 'Message Frommajoie', 0, NULL),
(17, 'Sakia', 'Message', 'Message Frommajoie', 0, NULL),
(18, 'Sakia', 'Message', 'Message Frommajoie', 0, NULL),
(19, 'Sakia', 'Message', 'Message Frommajoie', 0, NULL),
(20, 'majoie', 'Message', 'Message Fromdora', 0, NULL),
(21, 'dora', 'Message', 'Message Frommajoie', 0, NULL),
(22, 'majoie', 'Message', 'Message Fromdora', 0, NULL),
(23, 'majoie', 'Message', 'Message Fromdora', 0, NULL),
(24, 'dora', 'Message', 'Message Frommajoie', 0, NULL),
(25, 'majoie', 'Message', 'Message Fromdora', 0, NULL),
(26, 'dora', 'Message', 'Message Frommajoie', 0, NULL),
(27, 'Sakia', 'Message', 'Message Frommajoie', 0, NULL),
(28, 'Sakia', 'Message', 'Message Frommajoie', 0, NULL),
(29, 'Sakia', 'Message', 'Message Frommajoie', 0, NULL),
(30, 'dora', 'Message', 'Message Fromyan', 0, NULL),
(31, 'BAGNA', 'Message', 'Message Fromjojo', 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `publications`
--

CREATE TABLE `publications` (
  `id_publication` int(11) NOT NULL,
  `titre_publication` varchar(255) NOT NULL,
  `Auteur_publication` varchar(255) NOT NULL,
  `user_picture` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `heure` varchar(255) DEFAULT NULL,
  `image_publication` varchar(255) DEFAULT NULL,
  `video_publication` varchar(255) DEFAULT NULL,
  `music_publication` varchar(255) DEFAULT NULL,
  `file_publication` varchar(255) DEFAULT NULL,
  `text_publication` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `publications`
--

INSERT INTO `publications` (`id_publication`, `titre_publication`, `Auteur_publication`, `user_picture`, `date`, `heure`, `image_publication`, `video_publication`, `music_publication`, `file_publication`, `text_publication`) VALUES
(272, '', 'yan', 'User_img_Profilyan.jpg', 'Wednesday 29 December 2021', '13:38:36', 'User_Publicationyan.jpg', NULL, NULL, NULL, NULL),
(273, '', 'yan', 'User_img_Profilyan.jpg', 'Wednesday 29 December 2021', '13:42:42', NULL, 'User_Publicationyan.mp4', NULL, NULL, NULL),
(274, '', 'yan', 'User_img_Profilyan.jpg', 'Wednesday 29 December 2021', '13:54:11', NULL, 'User_Publicationyan.mp4', NULL, NULL, NULL),
(275, '', 'yan', 'User_img_Profilyan.jpg', 'Wednesday 29 December 2021', '13:54:42', 'User_Publicationyan.jpg', NULL, NULL, NULL, NULL),
(276, '', 'ggko', NULL, 'Wednesday 29 December 2021', '17:58:55', NULL, 'User_Publicationggko.mp4', NULL, NULL, NULL),
(277, '', 'majoie', 'User_img_Profilmajoie.jpg', 'Wednesday 29 December 2021', '18:06:16', 'User_Publicationmajoie.jpeg', NULL, NULL, NULL, NULL),
(278, '', 'majoie', 'User_img_Profilmajoie.jpg', 'Wednesday 29 December 2021', '23:58:12', 'User_Publicationmajoie.jpg', NULL, NULL, NULL, NULL),
(279, '', 'majoie', 'User_img_Profilmajoie.jpg', 'Friday 31 December 2021', '04:37:33', 'User_Publicationmajoie.jpg', NULL, NULL, NULL, NULL),
(280, '', 'majoie', 'User_img_Profilmajoie.jpg', 'Friday 31 December 2021', '06:50:36', 'User_Publicationmajoie.png', NULL, NULL, NULL, NULL),
(281, '', 'Akar', NULL, 'Friday 31 December 2021', '13:54:05', 'User_PublicationAkar.jpg', NULL, NULL, NULL, NULL),
(282, '', 'Akar', NULL, 'Friday 31 December 2021', '15:23:16', NULL, NULL, 'User_PublicationAkar.m4a', NULL, NULL),
(283, '', 'majoie', 'User_img_Profilmajoie.jpg', 'Friday 31 December 2021', '16:08:56', NULL, NULL, NULL, 'User_Publicationmajoie.pdf', NULL),
(284, '', 'majoie', 'User_img_Profilmajoie.jpg', 'Friday 31 December 2021', '16:53:57', NULL, NULL, NULL, NULL, 'dssffsfs'),
(285, '', 'majoie', 'User_img_Profilmajoie.jpg', 'Friday 31 December 2021', '16:54:07', NULL, NULL, NULL, NULL, 'dssffsfs'),
(286, '', 'majoie', 'User_img_Profilmajoie.jpg', 'Friday 31 December 2021', '16:56:59', NULL, NULL, NULL, NULL, 'dssffsfs'),
(287, '', 'majoie', 'User_img_Profilmajoie.jpg', 'Friday 31 December 2021', '16:58:01', NULL, NULL, NULL, NULL, 'dssffsfs'),
(288, '', 'majoie', 'User_img_Profilmajoie.jpg', 'Friday 31 December 2021', '16:58:15', NULL, NULL, NULL, NULL, 'dssffsfs'),
(289, '', 'majoie', 'User_img_Profilmajoie.jpg', 'Friday 31 December 2021', '16:59:05', NULL, NULL, NULL, NULL, 'dssffsfs'),
(290, '', 'majoie', 'User_img_Profilmajoie.jpg', 'Friday 31 December 2021', '17:00:13', NULL, NULL, NULL, NULL, 'Salut bb');

-- --------------------------------------------------------

--
-- Structure de la table `publi_video`
--

CREATE TABLE `publi_video` (
  `video_id` int(11) NOT NULL,
  `id_publication` int(11) NOT NULL,
  `video_name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `Auteur_publication` varchar(255) NOT NULL,
  `user_picture` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `heure` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `usermsg`
--

CREATE TABLE `usermsg` (
  `id_msg` int(11) NOT NULL,
  `sender_name` varchar(255) NOT NULL,
  `receiver_name` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `msg_other_content` varchar(255) DEFAULT NULL,
  `datemsg` varchar(255) NOT NULL,
  `heuremsg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `usermsg`
--

INSERT INTO `usermsg` (`id_msg`, `sender_name`, `receiver_name`, `message`, `msg_other_content`, `datemsg`, `heuremsg`) VALUES
(263, 'majoie', 'Sakia', 'maman', NULL, 'Wednesday 22 December 2021', '10:28:34 Europe de l?Ouest'),
(264, 'majoie', 'Sakia', 'hello', NULL, 'Wednesday 22 December 2021', '10:28:41 Europe de l?Ouest'),
(265, 'majoie', 'Sakia', 'hello', NULL, 'Wednesday 22 December 2021', '10:29:15 Europe de l?Ouest'),
(266, 'dora', 'majoie', 'cc\r\n', NULL, 'Wednesday 22 December 2021', '11:03:54 Europe de l?Ouest'),
(267, 'majoie', 'dora', 'hello', NULL, 'Wednesday 22 December 2021', '11:04:28 Europe de l?Ouest'),
(268, 'dora', 'majoie', 'cc\r\n', NULL, 'Wednesday 22 December 2021', '11:05:02 Europe de l?Ouest'),
(269, 'dora', 'majoie', 'comment vas tu?\r\n', NULL, 'Wednesday 22 December 2021', '11:05:42 Europe de l?Ouest'),
(270, 'majoie', 'dora', 'hayi', NULL, 'Wednesday 22 December 2021', '11:06:08 Europe de l?Ouest'),
(271, 'dora', 'majoie', 'comment vas tu?\r\n', NULL, 'Wednesday 22 December 2021', '11:06:18 Europe de l?Ouest'),
(272, 'majoie', 'dora', 'hayi', NULL, 'Wednesday 22 December 2021', '11:06:20 Europe de l?Ouest'),
(273, 'majoie', 'Sakia', 'ESQAA', NULL, 'Thursday 23 December 2021', '14:51:20 Europe de l?Ouest'),
(274, 'majoie', 'Sakia', 'CDEETEHS', NULL, 'Thursday 23 December 2021', '14:54:27 Europe de l?Ouest'),
(275, 'majoie', 'Sakia', 'salut', NULL, 'Monday 27 December 2021', '12:27:49 Europe de l?Ouest'),
(276, 'yan', 'dora', 'cc\r\n', NULL, 'Monday 27 December 2021', '22:11:58 Europe de l?Ouest'),
(277, 'jojo', 'BAGNA', 'cc', NULL, 'Tuesday 28 December 2021', '20:10:37 Europe de l?Ouest');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_Password` varchar(10) NOT NULL,
  `sexe` varchar(10) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `Age` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_Password`, `sexe`, `phone_number`, `Age`, `email`, `user_picture`) VALUES
(67, 'dora', 'dorakog', 'femme', '98839775', 19, 'barbie2barbie02@gmail.com', 'User_img_Profildora.png'),
(68, 'majoie', 'mjw9', 'Homme', '96329943', 18, 'majoiefaya@gmail.com', 'User_img_Profilmajoie.jpg'),
(69, 'BAGNA', 'BAGNA', 'femme', '96329943', 20, 'bagna@gmail.com', 'User_img_ProfilBAGNA.jpg'),
(70, 'yan', 'yan', 'femme', '90128888', 18, 'anna@gmail.com', 'User_img_Profilyan.jpg'),
(71, 'jojo', 'mjwk', 'on', '96329943', 19, 'majoiefaya@gmail.com', NULL),
(72, 'ggko', 'KOKOLOLO', 'on', '90126888', 12, 'danielgogo42@gmail.com', NULL),
(73, 'Akar', '19', 'on', '946464646', 14, 'Yzhzyzyzh', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user_coment`
--

CREATE TABLE `user_coment` (
  `id_coment` int(11) NOT NULL,
  `id_publication` int(11) NOT NULL,
  `Auteur_coment` varchar(255) NOT NULL,
  `Auteur_picture` varchar(255) NOT NULL,
  `coment_content` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `heure` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user_coment`
--

INSERT INTO `user_coment` (`id_coment`, `id_publication`, `Auteur_coment`, `Auteur_picture`, `coment_content`, `date`, `heure`) VALUES
(12, 238, 'yan', 'User_img_Profilyan.jpg', 'cc majoie', 'Tuesday 28 December 2021', '23:56:41'),
(13, 240, 'yan', 'User_img_Profilyan.jpg', 'hello', 'Wednesday 29 December 2021', '10:24:53'),
(14, 243, 'yan', 'User_img_Profilyan.jpg', 'cc\r\n', 'Wednesday 29 December 2021', '10:48:53'),
(15, 243, 'yan', 'User_img_Profilyan.jpg', 'on dit quoi', 'Wednesday 29 December 2021', '10:49:12'),
(16, 244, 'yan', 'User_img_Profilyan.jpg', 'majoie', 'Wednesday 29 December 2021', '10:50:14'),
(17, 252, 'yan', 'User_img_Profilyan.jpg', '\r\nCC', 'Wednesday 29 December 2021', '11:10:18'),
(18, 272, 'yan', 'User_img_Profilyan.jpg', 'SALUT', 'Wednesday 29 December 2021', '13:53:05'),
(19, 273, 'yan', 'User_img_Profilyan.jpg', 'yo yoyo', 'Wednesday 29 December 2021', '13:53:17'),
(20, 272, 'majoie', 'User_img_Profilmajoie.jpg', 'Tt', 'Wednesday 29 December 2021', '17:37:39'),
(21, 272, 'ggko', '', 'salut majoie', 'Wednesday 29 December 2021', '17:48:58'),
(22, 276, 'majoie', 'User_img_Profilmajoie.jpg', 'Salut bg daniel', 'Wednesday 29 December 2021', '18:00:05'),
(23, 272, 'majoie', 'User_img_Profilmajoie.jpg', 'vhvhk', 'Wednesday 29 December 2021', '23:18:29'),
(24, 277, 'majoie', 'User_img_Profilmajoie.jpg', 'connard', 'Thursday 30 December 2021', '01:16:30'),
(25, 272, 'majoie', 'User_img_Profilmajoie.jpg', 'Mdr', 'Friday 31 December 2021', '06:43:00'),
(26, 281, 'majoie', 'User_img_Profilmajoie.jpg', 'Naz', 'Friday 31 December 2021', '15:21:05'),
(27, 277, 'majoie', 'User_img_Profilmajoie.jpg', 'salut', 'Friday 31 December 2021', '16:01:22');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id_noti`);

--
-- Index pour la table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id_publication`);

--
-- Index pour la table `publi_video`
--
ALTER TABLE `publi_video`
  ADD PRIMARY KEY (`video_id`);

--
-- Index pour la table `usermsg`
--
ALTER TABLE `usermsg`
  ADD PRIMARY KEY (`id_msg`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Index pour la table `user_coment`
--
ALTER TABLE `user_coment`
  ADD PRIMARY KEY (`id_coment`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id_noti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `publications`
--
ALTER TABLE `publications`
  MODIFY `id_publication` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=291;

--
-- AUTO_INCREMENT pour la table `publi_video`
--
ALTER TABLE `publi_video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `usermsg`
--
ALTER TABLE `usermsg`
  MODIFY `id_msg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=278;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT pour la table `user_coment`
--
ALTER TABLE `user_coment`
  MODIFY `id_coment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
