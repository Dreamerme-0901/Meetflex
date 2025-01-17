-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2025-01-08 08:26:38
-- 伺服器版本： 10.4.32-MariaDB
-- PHP 版本： 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `meetflex`
--

-- --------------------------------------------------------

--
-- 資料表結構 `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `account` varchar(24) DEFAULT NULL,
  `password` varchar(24) DEFAULT NULL,
  `createTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `admin`
--

INSERT INTO `admin` (`id`, `account`, `password`, `createTime`) VALUES
(1, 'admin01', '2024122601', '2024-12-26 01:27:38'),
(2, 'admin02', '2024122602', '2024-12-26 01:27:38'),
(3, 'admin03', '2024122603', '2024-12-26 01:27:38'),
(4, 'admin04', '2024122604', '2024-12-26 01:27:38'),
(5, 'admin05', '2024122605', '2024-12-26 01:27:38');

-- --------------------------------------------------------

--
-- 資料表結構 `classification`
--

CREATE TABLE `classification` (
  `id` int(11) NOT NULL,
  `nu` int(11) DEFAULT NULL,
  `genres` varchar(30) DEFAULT NULL,
  `createTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `classification`
--

INSERT INTO `classification` (`id`, `nu`, `genres`, `createTime`) VALUES
(1, 1, '喜劇', '2024-12-18 05:45:32'),
(3, 3, '驚悚', '2024-12-18 05:45:32'),
(4, 4, '歌舞', '2024-12-18 05:45:32'),
(5, 5, '史詩', '2024-12-18 05:45:32'),
(7, 7, '紀錄', '2024-12-18 05:45:32'),
(8, 8, '科幻', '2024-12-18 05:46:44'),
(9, 9, '動作', '2024-12-18 05:46:44'),
(10, 10, '懸疑', '2024-12-18 05:46:44'),
(11, 11, '愛情', '2024-12-18 05:46:44'),
(12, 12, '犯罪', '2024-12-18 05:46:44'),
(13, 13, '推理', '2024-12-18 05:46:44'),
(14, 14, '動畫', '2024-12-18 05:46:44'),
(15, 15, '冒險', '2024-12-18 05:46:44'),
(16, 16, '恐怖', '2024-12-18 05:46:44'),
(17, 17, '奇幻', '2024-12-18 05:46:44'),
(18, 18, '歷史', '2024-12-18 05:47:56'),
(21, 21, '功夫', '2024-12-18 05:48:31');

-- --------------------------------------------------------

--
-- 資料表結構 `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `createTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `history`
--

INSERT INTO `history` (`id`, `user_id`, `movie_id`, `createTime`) VALUES
(1, 1, 1, '2025-01-06 05:22:17'),
(2, 2, 2, '2025-01-08 05:47:14');

-- --------------------------------------------------------

--
-- 資料表結構 `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2025_01_08_045140_create_sessions_table', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `movie`
--

CREATE TABLE `movie` (
  `id` int(11) NOT NULL,
  `image` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `release_date` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `genres` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `caeateTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `movie`
--

INSERT INTO `movie` (`id`, `image`, `release_date`, `title`, `description`, `genres`, `caeateTime`) VALUES
(1, 'c9XxwwhPHdaImA2f1WEfEsbhaFB.jpg', '2018-06-06', 'Jurassic World: Fallen Kingdom', 'Several years after the demise of Jurassic World, a volcanic eruption threatens the remaining dinosaurs on the island of Isla Nublar. Claire Dearing, the former park manager and founder of the Dinosaur Protection Group, recruits Owen Grady to help prevent the extinction of the dinosaurs once again.', '1', '2024-12-18 05:27:09'),
(2, 'rv1AWImgx386ULjcf62VYaW8zSt.jpg', '2018-07-04', 'Ant-Man and the Wasp', 'As Scott Lang awaits expiration of his term of house detention, Hope van Dyne and Dr. Hank Pym involve him in a scheme to rescue Mrs. van Dyne from the micro-universe into which she has fallen, while two groups of schemers converge on them with intentions of stealing Dr. Pym\'s inventions.', '2', '2024-12-18 05:27:09'),
(3, 'rzRwTcFvttcN1ZpX2xv4j3tSdJu.jpg', '2017-10-25', 'Thor: Ragnarok', 'Thor is on the other side of the universe and finds himself in a race against time to get back to Asgard to stop Ragnarok, the prophecy of destruction to his homeworld and the end of Asgardian civilization, at the hands of an all-powerful new threat, the ruthless Hela.', '4', '2024-12-18 05:27:09'),
(4, '7WsyChQLEftFiDOVTGkv3hFpyyt.jpg', '2018-04-25', 'Avengers: Infinity War', 'As the Avengers and their allies have continued to protect the world from threats too large for any one hero to handle, a new danger has emerged from the cosmic shadows: Thanos. A despot of intergalactic infamy, his goal is to collect all six Infinity Stones, artifacts of unimaginable power, and use them to inflict his twisted will on all of reality. Everything the Avengers have fought for has led up to this moment - the fate of Earth and existence itself has never been more uncertain.', '15', '2024-12-18 05:27:09'),
(5, '80PWnSTkygi3QWWmJ3hrAwqvLnO.jpg', '2018-07-25', 'Mission: Impossible - Fallout', 'When an IMF mission ends badly, the world is faced with dire consequences. As Ethan Hunt takes it upon himself to fulfil his original briefing, the CIA begin to question his loyalty and his motives. The IMF team find themselves in a race against time, hunted by assassins while trying to prevent a global catastrophe.', '17', '2024-12-18 05:27:09'),
(6, 'x1txcDXkcM65gl7w20PwYSxAYah.jpg', '2018-06-14', 'Incredibles 2', 'Elastigirl springs into action to save the day, while Mr. Incredible faces his greatest challenge yet – taking care of the problems of his three children.', '8', '2024-12-18 05:27:09'),
(7, 'jjPJ4s3DWZZvI4vw8Xfi4Vqa1Q8.jpg', '2018-01-17', 'Fifty Shades Freed', 'Believing they have left behind shadowy figures from their past, newlyweds Christian and Ana fully embrace an inextricable connection and shared life of luxury. But just as she steps into her role as Mrs. Grey and he relaxes into an unfamiliar stability, new threats could jeopardize their happy ending before it even begins.', '7', '2024-12-18 05:27:09'),
(8, '2slvblTroiT1lY9bYLK7Amigo1k.jpg', '2018-07-04', 'The First Purge', 'To push the crime rate below one percent for the rest of the year, the New Founding Fathers of America test a sociological theory that vents aggression for one night in one isolated community. But when the violence of oppressors meets the rage of the others, the contagion will explode from the trial-city borders and spread across the nation.', '17', '2024-12-18 05:27:09'),
(9, 'pU1ULUq8D3iRxl1fdX2lZIzdHuI.jpg', '2018-03-28', 'Ready Player One', 'When the creator of a popular video game system dies, a virtual contest is created to compete for his fortune.', '9', '2024-12-18 05:27:09'),
(10, '3gIO6mCd4Q4PF1tuwcyI3sjFrtI.jpg', '2018-04-12', 'Rampage', 'Primatologist Davis Okoye shares an unshakable bond with George, the extraordinarily intelligent, silverback gorilla who has been in his care since birth.  But a rogue genetic experiment gone awry mutates this gentle ape into a raging creature of enormous size.  To make matters worse, it’s soon discovered there are other similarly altered animals.  As these newly created alpha predators tear across North America, destroying everything in their path, Okoye teams with a discredited genetic engineer to secure an antidote, fighting his way through an ever-changing battlefield, not only to halt a global catastrophe but to save the fearsome creature that was once his friend.', '15', '2024-12-18 05:27:09'),
(11, 'l1DRl40x2OWUoPP42v8fjKdS1Z3.jpg', '2014-07-17', 'The Purge: Anarchy', 'One night per year, the government sanctions a 12-hour period in which citizens can commit any crime they wish -- including murder -- without fear of punishment or imprisonment. Leo, a sergeant who lost his son, plans a vigilante mission of revenge during the mayhem. However, instead of a death-dealing avenger, he becomes the unexpected protector of four innocent strangers who desperately need his help if they are to survive the night.', '11', '2024-12-18 05:27:09'),
(12, 'vmj2PzTLC6xJvshpq8SlaYE3gbd.jpg', '1996-05-22', 'Mission: Impossible', 'When Ethan Hunt, the leader of a crack espionage team whose perilous operation has gone awry with no explanation, discovers that a mole has penetrated the CIA, he\'s surprised to learn that he\'s the No. 1 suspect. To clear his name, Hunt now must ferret out the real double agent and, in the process, even the score.', '17', '2024-12-18 05:27:09');

-- --------------------------------------------------------

--
-- 資料表結構 `qa`
--

CREATE TABLE `qa` (
  `id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `caeateTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `qa`
--

INSERT INTO `qa` (`id`, `title`, `content`, `caeateTime`) VALUES
(1, 'Q1.How to change the language on MeetFlex', 'Meetflex only use ENGLISH.', '2025-01-06 03:46:19'),
(2, 'Q2.How to use PlayList', 'To add to PlayList:\r\nEach movie description has a heart button in the bottom right corner that allows you to add the movie to your list.', '2025-01-06 03:46:19');

-- --------------------------------------------------------

--
-- 資料表結構 `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('bOv79bl0Uhs37SspeyNmUAPPVgHCxqrc0qsJUEx2', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR2hIUmR4dmVpbFJZSGU4OTZ6Tm54a2FpQUZMQk1jWGFiN1FWcWswcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9ob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1736321141);

-- --------------------------------------------------------

--
-- 資料表結構 `subscriptionqa`
--

CREATE TABLE `subscriptionqa` (
  `id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `caeateTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `subscriptionqa`
--

INSERT INTO `subscriptionqa` (`id`, `title`, `content`, `caeateTime`) VALUES
(1, 'Q1', 'aaaaaaaaaaaaaaaaaaaaaaa', '2025-01-06 03:46:41'),
(2, 'Q2', 'Vvvvvvvvvvvvvvvvvvvvv', '2025-01-06 03:46:41');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `account` varchar(21) DEFAULT NULL,
  `password` varchar(21) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `createTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`id`, `email`, `account`, `password`, `country`, `state`, `createTime`) VALUES
(1, 'admin@meetflex.vip', 'admin', '0000', 'null', 'null', '2024-12-25 05:21:25'),
(2, 'test01@meetflex.vip', 'test01', '0000', 'null', 'null', '2024-12-25 05:21:25'),
(32, 'aaasd@123123.com', 'admin000005', 'a*A1234567890', '台中', '西屯', '2024-12-25 06:37:41'),
(3, 'test02@meetflex.vip', 'test02', '1234', 'null', 'null', '2024-12-25 05:22:59'),
(4, 'test03@meetflex.vip', 'test03', '1234', 'null', 'null', '2024-12-25 05:22:59'),
(33, '123@gmail.com', 'aaaaaajjjgfds', 'a*A1234567890', '台中', '西屯', '2024-12-25 06:42:44'),
(6, 'test05@meetflex.vip', 'test05', '1000', 'null', 'null', '2024-12-25 05:25:48'),
(5, 'test04@meetflex.vip', 'test04', '1000', 'null', 'null', '2024-12-25 05:25:48'),
(27, 'aa@123.com', 'admin00080', 'a*A1234567890', '台中', '西屯', '2024-12-25 01:58:45'),
(28, 'aaasd@123asd.aaaa', 'admin000001', 'a*A1234567890', '台中', '西屯', '2024-12-25 02:00:30'),
(29, 'aaasd@a.a', 'admin000002', 'a*A1234567890', '台中', '西屯', '2024-12-25 02:00:46'),
(30, 'aaasd@123asd.com', 'admin000004', 'a*A1234567890', '台中', '西屯', '2024-12-25 02:54:54'),
(31, '29487@gamil.com', 'lei891216', 'Josh.123456', '台中', '西屯', '2024-12-25 02:56:26');

-- --------------------------------------------------------

--
-- 資料表結構 `userlike`
--

CREATE TABLE `userlike` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `createTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `userlike`
--

INSERT INTO `userlike` (`id`, `user_id`, `movie_id`, `createTime`) VALUES
(1, 1, 1, '2025-01-08 06:40:41'),
(2, 2, 2, '2025-01-08 06:40:41');

-- --------------------------------------------------------

--
-- 資料表結構 `userqa`
--

CREATE TABLE `userqa` (
  `id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `createTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `userqa`
--

INSERT INTO `userqa` (`id`, `title`, `content`, `createTime`) VALUES
(1, 'Q1.How to change your plan', 'We do not offer replacement options.', '2025-01-08 04:35:50'),
(2, 'Q2.How to cancel Meetflix', 'We do not offer fee-based cancellations.', '2025-01-08 04:36:19');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `classification`
--
ALTER TABLE `classification`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `qa`
--
ALTER TABLE `qa`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- 資料表索引 `subscriptionqa`
--
ALTER TABLE `subscriptionqa`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `userlike`
--
ALTER TABLE `userlike`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `userqa`
--
ALTER TABLE `userqa`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `classification`
--
ALTER TABLE `classification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `qa`
--
ALTER TABLE `qa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `subscriptionqa`
--
ALTER TABLE `subscriptionqa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `userlike`
--
ALTER TABLE `userlike`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `userqa`
--
ALTER TABLE `userqa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
