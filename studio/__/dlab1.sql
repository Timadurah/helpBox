-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2023 at 04:59 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dlab1`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) UNSIGNED NOT NULL,
  `banner` varchar(1000) NOT NULL,
  `hero` varchar(1000) NOT NULL,
  `text` varchar(1000) NOT NULL,
  `registered_agent` varchar(1000) NOT NULL,
  `profesional_player` varchar(1000) NOT NULL,
  `global_office` varchar(1000) NOT NULL,
  `academy_player` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `analys`
--

CREATE TABLE `analys` (
  `id` int(11) UNSIGNED NOT NULL,
  `topic` text NOT NULL,
  `country` varchar(1000) NOT NULL,
  `country_code` varchar(1000) NOT NULL,
  `city` varchar(1000) NOT NULL,
  `region` varchar(1000) NOT NULL,
  `lat` varchar(1000) NOT NULL,
  `long` varchar(1000) NOT NULL,
  `continent_code` varchar(1000) NOT NULL,
  `continent` varchar(1000) NOT NULL,
  `timezone` varchar(1000) NOT NULL,
  `currency` varchar(1000) NOT NULL,
  `ip` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `anti`
--

CREATE TABLE `anti` (
  `user282200123` varchar(1000) NOT NULL,
  `password282200123` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `anti`
--

INSERT INTO `anti` (`user282200123`, `password282200123`) VALUES
('Dev@Scimail.com', '$2y$10$kdq8q13pElqQNsZm3Ujoxuldk9jhslRjIaAxa1c4vTsFZGfJ6tRzq');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) UNSIGNED NOT NULL,
  `banner` varchar(1000) NOT NULL,
  `hero` varchar(1000) NOT NULL,
  `text` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) UNSIGNED NOT NULL,
  `img1` varchar(1000) NOT NULL,
  `topic` varchar(1000) NOT NULL,
  `desc` text NOT NULL,
  `textbox` varchar(1000) NOT NULL,
  `category` varchar(1000) NOT NULL,
  `custom_url` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

CREATE TABLE `campaign` (
  `idn` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `cartsession`
--

CREATE TABLE `cartsession` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip` varchar(1000) NOT NULL,
  `cartid` varchar(1000) NOT NULL,
  `uid` varchar(1000) NOT NULL,
  `size` varchar(1000) NOT NULL,
  `amt` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_name` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_name`, `date`) VALUES
('texting', '2023-02-02 17:02:02');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) UNSIGNED NOT NULL,
  `topic_url` text NOT NULL,
  `comment` text NOT NULL,
  `country` varchar(1000) NOT NULL,
  `country_code` varchar(1000) NOT NULL,
  `city` varchar(1000) NOT NULL,
  `region` varchar(1000) NOT NULL,
  `lat` varchar(1000) NOT NULL,
  `long` varchar(1000) NOT NULL,
  `continent_code` varchar(1000) NOT NULL,
  `continent` varchar(1000) NOT NULL,
  `timezone` varchar(1000) NOT NULL,
  `currency` varchar(1000) NOT NULL,
  `ip` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `cuppon_store`
--

CREATE TABLE `cuppon_store` (
  `id` int(11) UNSIGNED NOT NULL,
  `price` varchar(1000) NOT NULL,
  `cuppon` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `draft`
--

CREATE TABLE `draft` (
  `id` int(11) UNSIGNED NOT NULL,
  `img1` varchar(1000) NOT NULL,
  `topic` varchar(1000) NOT NULL,
  `textbox` varchar(1000) NOT NULL,
  `category` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `dural_filemanager`
--

CREATE TABLE `dural_filemanager` (
  `id` int(11) UNSIGNED NOT NULL,
  `types` varchar(1000) NOT NULL,
  `file` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `dural_post`
--

CREATE TABLE `dural_post` (
  `id` int(11) UNSIGNED NOT NULL,
  `pro_topic` varchar(1000) NOT NULL,
  `pro_price` varchar(1000) NOT NULL,
  `pic1` varchar(1000) NOT NULL,
  `pic2` varchar(1000) NOT NULL,
  `pic3` varchar(1000) NOT NULL,
  `pic4` varchar(1000) NOT NULL,
  `decription` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `post_type` varchar(1000) NOT NULL,
  `idn` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) UNSIGNED NOT NULL,
  `gallery` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `hashed_cuppon`
--

CREATE TABLE `hashed_cuppon` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` varchar(1000) NOT NULL,
  `post_id` varchar(1000) NOT NULL,
  `cuppon` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `id` int(11) UNSIGNED NOT NULL,
  `img1` varchar(1000) NOT NULL,
  `img2` varchar(1000) NOT NULL,
  `img3` varchar(1000) NOT NULL,
  `img4` varchar(1000) NOT NULL,
  `topic` varchar(1000) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `textbox` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `our_footballer`
--

CREATE TABLE `our_footballer` (
  `id` int(11) UNSIGNED NOT NULL,
  `player_profile` varchar(1000) NOT NULL,
  `player_name` varchar(1000) NOT NULL,
  `player_weight` varchar(1000) NOT NULL,
  `player_height` varchar(1000) NOT NULL,
  `player_age` varchar(1000) NOT NULL,
  `player_value` varchar(1000) NOT NULL,
  `player_country` varchar(1000) NOT NULL,
  `player_position` varchar(1000) NOT NULL,
  `player_achievement` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `our_footballer`
--

INSERT INTO `our_footballer` (`id`, `player_profile`, `player_name`, `player_weight`, `player_height`, `player_age`, `player_value`, `player_country`, `player_position`, `player_achievement`, `date`) VALUES
(6, '@Space-package163963750713270474.jpg', 'Melo adin', '60kg', '180cm', '30year', '$1000', 'gana', 'striker', 'Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....', '2021-12-16 06:51:47'),
(7, '@Space-package1639637616273977490.jpg', 'leo nolanio', '80kg', '200cm', '22years', '$1500', 'egypt', 'keeper', 'Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....', '2021-12-16 06:53:36'),
(8, '@Space-package1639637617916082527.jpg', 'leo nolanio', '80kg', '200cm', '22years', '$1500', 'egypt', 'keeper', 'Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....', '2021-12-16 06:53:37'),
(9, '@Space-package16396376171426631951.jpg', 'leo nolanio', '80kg', '200cm', '22years', '$1500', 'egypt', 'keeper', 'Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....', '2021-12-16 06:53:37'),
(10, '@Space-package16396376171949745460.jpg', 'leo nolanio', '80kg', '200cm', '22years', '$1500', 'egypt', 'keeper', 'Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....', '2021-12-16 06:53:37'),
(11, '@Space-package16396376171225859872.jpg', 'leo nolanio', '80kg', '200cm', '22years', '$1500', 'egypt', 'keeper', 'Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....', '2021-12-16 06:53:37'),
(12, '@Space-package16396376171562837765.jpg', 'leo nolanio', '80kg', '200cm', '22years', '$1500', 'egypt', 'keeper', 'Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....', '2021-12-16 06:53:37'),
(13, '@Space-package1639637617498040814.jpg', 'leo nolanio', '80kg', '200cm', '22years', '$1500', 'egypt', 'keeper', 'Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....', '2021-12-16 06:53:37'),
(14, '@Space-package1639637618882985089.jpg', 'leo nolanio', '80kg', '200cm', '22years', '$1500', 'egypt', 'keeper', 'Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....', '2021-12-16 06:53:38'),
(15, '@Space-package16396376181813805457.jpg', 'leo nolanio', '80kg', '200cm', '22years', '$1500', 'egypt', 'keeper', 'Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....', '2021-12-16 06:53:38'),
(16, '@Space-package16396376181081984685.jpg', 'leo nolanio', '80kg', '200cm', '22years', '$1500', 'egypt', 'keeper', 'Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....', '2021-12-16 06:53:38'),
(17, '@Space-package16396376181190887760.jpg', 'leo nolanio', '80kg', '200cm', '22years', '$1500', 'egypt', 'keeper', 'Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....', '2021-12-16 06:53:38'),
(18, '@Space-package1639637619551412278.jpg', 'leo nolanio', '80kg', '200cm', '22years', '$1500', 'egypt', 'keeper', 'Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....', '2021-12-16 06:53:39'),
(19, '@Space-package1639637619243378762.jpg', 'leo nolanio', '80kg', '200cm', '22years', '$1500', 'egypt', 'keeper', 'Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....', '2021-12-16 06:53:39'),
(20, '@Space-package16396376191364528280.jpg', 'leo nolanio', '80kg', '200cm', '22years', '$1500', 'egypt', 'keeper', 'Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....', '2021-12-16 06:53:39'),
(21, '@Space-package16396376201765982974.jpg', 'leo nolanio', '80kg', '200cm', '22years', '$1500', 'egypt', 'keeper', 'Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....  Player Achievements....', '2021-12-16 06:53:40');

-- --------------------------------------------------------

--
-- Table structure for table `our_service`
--

CREATE TABLE `our_service` (
  `id` int(11) UNSIGNED NOT NULL,
  `banner` varchar(1000) NOT NULL,
  `hero` varchar(1000) NOT NULL,
  `text` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `reviewer`
--

CREATE TABLE `reviewer` (
  `id` int(11) UNSIGNED NOT NULL,
  `img1` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `textbox` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `soci`
--

CREATE TABLE `soci` (
  `wat` varchar(1000) NOT NULL,
  `fb` varchar(1000) NOT NULL,
  `inst` varchar(1000) NOT NULL,
  `Phone` varchar(1000) NOT NULL,
  `TWEETER` varchar(1000) NOT NULL,
  `linke` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `adress` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

CREATE TABLE `sponsors` (
  `id` int(11) UNSIGNED NOT NULL,
  `gallery` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `id` int(11) UNSIGNED NOT NULL,
  `topic_url` text NOT NULL,
  `mail` text NOT NULL,
  `country` varchar(1000) NOT NULL,
  `country_code` varchar(1000) NOT NULL,
  `city` varchar(1000) NOT NULL,
  `region` varchar(1000) NOT NULL,
  `lat` varchar(1000) NOT NULL,
  `long` varchar(1000) NOT NULL,
  `continent_code` varchar(1000) NOT NULL,
  `continent` varchar(1000) NOT NULL,
  `timezone` varchar(1000) NOT NULL,
  `currency` varchar(1000) NOT NULL,
  `ip` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `theme`
--

CREATE TABLE `theme` (
  `font_size` varchar(1000) NOT NULL,
  `font_family` varchar(1000) NOT NULL,
  `theme` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `theme`
--

INSERT INTO `theme` (`font_size`, `font_family`, `theme`, `date`) VALUES
('1', 'Default', 'Default', '2023-02-01 08:00:05');

-- --------------------------------------------------------

--
-- Table structure for table `track`
--

CREATE TABLE `track` (
  `id` int(11) UNSIGNED NOT NULL,
  `post_id` varchar(1000) NOT NULL,
  `user_ip` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `user_dural_282200123`
--

CREATE TABLE `user_dural_282200123` (
  `id` int(11) UNSIGNED NOT NULL,
  `fname` varchar(1000) NOT NULL,
  `lname` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `pass` varchar(10000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `user_dural_282200123`
--

INSERT INTO `user_dural_282200123` (`id`, `fname`, `lname`, `email`, `pass`, `date`) VALUES
(46, 'durallite', 'ademola', 'durallite@gmail.com', '$2y$10$dQnQ.BYPDJ6d8WNI3tK0k.N6cQ7igEmOkJk4xJscJT8tAzmSHud7q', '2021-11-23 20:33:12');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `ip`, `date`) VALUES
(1, 'DESKTOP-DDR1HLM', '2021-11-14 12:34:04');

-- --------------------------------------------------------

--
-- Table structure for table `webd`
--

CREATE TABLE `webd` (
  `id` int(11) UNSIGNED NOT NULL,
  `img1` varchar(1000) NOT NULL,
  `img2` varchar(1000) NOT NULL,
  `webname` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `analys`
--
ALTER TABLE `analys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cartsession`
--
ALTER TABLE `cartsession`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cuppon_store`
--
ALTER TABLE `cuppon_store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `draft`
--
ALTER TABLE `draft`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dural_filemanager`
--
ALTER TABLE `dural_filemanager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dural_post`
--
ALTER TABLE `dural_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hashed_cuppon`
--
ALTER TABLE `hashed_cuppon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_footballer`
--
ALTER TABLE `our_footballer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_service`
--
ALTER TABLE `our_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviewer`
--
ALTER TABLE `reviewer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `track`
--
ALTER TABLE `track`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_dural_282200123`
--
ALTER TABLE `user_dural_282200123`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webd`
--
ALTER TABLE `webd`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `analys`
--
ALTER TABLE `analys`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cartsession`
--
ALTER TABLE `cartsession`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cuppon_store`
--
ALTER TABLE `cuppon_store`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `draft`
--
ALTER TABLE `draft`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dural_filemanager`
--
ALTER TABLE `dural_filemanager`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dural_post`
--
ALTER TABLE `dural_post`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `hashed_cuppon`
--
ALTER TABLE `hashed_cuppon`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `our_footballer`
--
ALTER TABLE `our_footballer`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `our_service`
--
ALTER TABLE `our_service`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviewer`
--
ALTER TABLE `reviewer`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `track`
--
ALTER TABLE `track`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_dural_282200123`
--
ALTER TABLE `user_dural_282200123`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `webd`
--
ALTER TABLE `webd`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
