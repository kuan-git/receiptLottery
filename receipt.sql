-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019-11-13 16:24:21
-- 伺服器版本： 10.4.6-MariaDB
-- PHP 版本： 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `receiptlott`
--

-- --------------------------------------------------------

--
-- 資料表結構 `receipt`
--

CREATE TABLE `receipt` (
  `id` int(10) UNSIGNED NOT NULL,
  `year` int(4) NOT NULL,
  `month` int(2) NOT NULL,
  `num` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `money` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `receipt`
--

INSERT INTO `receipt` (`id`, `year`, `month`, `num`, `money`) VALUES
(1, 2019, 9, '12345678', 56),
(2, 2019, 9, '23456789', 78),
(3, 2019, 9, '34567890', 180),
(4, 2019, 9, '12345789', 102),
(5, 2019, 10, '98765432', 450),
(6, 2019, 10, '87654321', 55),
(7, 2019, 10, '87965412', 100),
(8, 2019, 10, '23654789', 102),
(9, 2019, 11, '49617127', 315),
(10, 2019, 11, '69921553', 312),
(11, 2019, 11, '17671725', 744),
(12, 2019, 11, '50168354', 766),
(13, 2019, 11, '16794204', 154),
(14, 2019, 9, '99691436', 244),
(15, 2019, 9, '90585825', 344),
(16, 2019, 9, '61812034', 384),
(17, 2019, 9, '37589003', 156),
(18, 2019, 9, '84751504', 442),
(19, 2019, 9, '17195447', 47),
(20, 2019, 10, '48357113', 292),
(21, 2019, 10, '95155140', 27),
(22, 2019, 10, '33250824', 367),
(23, 2019, 10, '36750953', 45),
(24, 2019, 10, '90727866', 294),
(25, 2019, 10, '50367107', 19);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `receipt`
--
ALTER TABLE `receipt`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
