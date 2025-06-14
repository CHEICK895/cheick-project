-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 13, 2025 at 02:21 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `archeo_it`
--

-- --------------------------------------------------------

--
-- Table structure for table `actualites`
--

CREATE TABLE `actualites` (
  `id` int NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `contenu` text,
  `image_path` varchar(255) DEFAULT NULL,
  `date_pub` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `actualites`
--

INSERT INTO `actualites` (`id`, `titre`, `contenu`, `image_path`, `date_pub`) VALUES
(1, 'BORDEAU', 'DSHTSESD', 'images/A.jpg', '2025-06-02 12:34:44'),
(2, 'Archéologie sous marine du débarquement ', 'pour en apprendre d\'avantage veuillez accéder au lien : https://archeologie.culture.gouv.fr/epaves-debarquement/fr', 'images/B.jpg', '2025-06-02 14:25:09'),
(4, 'les abris sculpté de la prehistoire', 'Pour en découvrir d\'avantage veuillez accéder aux liens suivants : https://archeologie.culture.gouv.fr/france/fr/larcheologie-francaise', 'images/meaulte_imgp2114.jpg', '2025-06-02 14:27:22'),
(5, 'les salines', 'Pour en découvrir d\'avantage veuillez accéder aux liens suivants :https://archeologie.culture.gouv.fr/marsal/fr', 'images/grotte-cosquer-marseille-bouches-du-rhone17.jpg', '2025-06-02 14:28:14'),
(6, 'l\'art de la prehistoire', 'Decouvrez sur notre page , la prehistoire', 'images/E (1).jpg', '2025-06-07 11:27:15'),
(7, 'l\'archeologie nouvelle', 'Decouvrez sur notre page , l\'archeologie nouvelle', 'images/C.jpg', '2025-06-07 11:29:05');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `nom` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `email`, `mot_de_passe`, `nom`) VALUES
(1, 'idzac66@gmail.com', '$2y$10$sBDLlszKTW1kCm18oLACEu1zG0GeOXeJqi4ZusZcfC9nHIkKqe9Jq', 'BAMBA'),
(3, 'isaaccheick470@gmail.com', '$2y$10$y0oQgUtOKJnnH1XDVq5pGeR09ExYQB4gMLOQ1x0Z8PDcZEJ87cXfi', 'Cheick'),
(5, 'amy547519@gmail.com', '$2y$10$O2jcmS0vHbK.OKqdWyUU4OLNtRe3fZaW4yyJJ/wLhFE.2lsLzonVO', 'angie'),
(9, 'amy54719@gmail.com', '$2y$10$Scb7m.nj1vUR6wdzssLSNu/g5m/GgNkgvgZiD8HSaLkdPygMJ5Mky', 'angie'),
(11, '108849@ecole-it.com', '$2y$10$bnS6P0si9cnqP2XOuOQUIejKaPx/DA7uexj8uegXW7M7Fw/SEl4cm', 'h'),
(12, 'au@gmail.com', '$2y$10$49f6xoakshswMVa/QZxyPOFyeug.RwgHPGg9DC8./We6I808bu/zu', 'h'),
(14, 'aaa@gmail.COM', '$2y$10$ZtdCEYIbwLe1avEYb9esUutrBCGhXZn/26zM36b1F5plyFtHefh/O', 'POL'),
(16, 'i@gmail.com', '$2y$10$sB0WLyeWiF00dNqCIhd0vOJIfunxLqp9n9pJ.YGL4mFXYgsTZOSBG', 'Cheick'),
(18, 'ze@gmail.com', '$2y$10$lW/5rKLBAqVVdhAUPMKp4uru/XJjJ7/vJAqT1viUFLtMOx9MVRTRK', 'CHEICK ABDEL-KADER YACOUB BAMBA'),
(19, 'abu@gmail.com', '$2y$10$56ocxEXg2D2yGRmFcj0hVu8oL9BQEKNUoFPaP2nzqHE5P2bYv.b2y', 'BAMBA'),
(20, 'retr@gmail.com', '$2y$10$X1DPaMFm4/VcxbeRfpYOSuItBCeHNHpAJbKv3j6QrsVUjToEG.0nC', 'Cheick'),
(22, 'gcffg@gmail.com', '$2y$10$8C/0g1y7glkZpVFAEXRdvuekjUTHFN37XV.DJVZk8dxuYQgf6LqGe', 'k'),
(23, 'gecffg@gmail.com', '$2y$10$tQpN2yEDNumUpQHr..gIdeqUu7CJ6Lw4b3qc8PTHsXgBExH044nai', 'k'),
(24, 'gecfftg@gmail.com', '$2y$10$4T78eWdHYhPgBhwR.0roo.LzUrHNlrBUv0Dgx4UaS1uF/evKfq7Pm', 'k'),
(25, 'jji@gmail.com', '$2y$10$sU/5EST5SlJPItGgTerVt.Yy3r/7Jl6QC75Kx3x8s3JIA1AM8nlS.', 'ytu'),
(26, 'fjp@gmail.com', '$2y$10$UGglqLUekufp6PjGvcM7ce2XV2tQ60NDq95FJvHQhJoe.azJDnggu', 'rr'),
(27, 'fjp5@gmail.com', '$2y$10$W.SycHvYwlMQgjP/f7B7yOzECvm/NsaWfuKI1Ucclju4zLiuVtCEu', 'rr'),
(28, '77fjp@gmail.com', '$2y$10$9hWxQSDNB3w.3Lx3l8ZMdewwI2gzbAUOyLeQuHh03VJSiqo.F/.4m', NULL),
(29, 'i23@gmail.com', '$2y$10$pV7/WicoDv/NWxbhnTZHOeg2OMfGux0fdQVXvha9yokZecqlTVbZq', 'EFD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actualites`
--
ALTER TABLE `actualites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actualites`
--
ALTER TABLE `actualites`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
