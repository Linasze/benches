-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2018 m. Rgs 17 d. 12:46
-- Server version: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `benches`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_lithuanian_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_lithuanian_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_lithuanian_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8_lithuanian_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_lithuanian_ci NOT NULL,
  `zip` int(11) NOT NULL,
  `order_id` varchar(10) COLLATE utf8_lithuanian_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Sukurta duomenų kopija lentelei `orders`
--

INSERT INTO `orders` (`id`, `name`, `last_name`, `email`, `phone_number`, `address`, `zip`, `order_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Brad', 'Traversy', 'brad.traversy@gmail.com', '862485246', 'Berneliu g. 43-65, Kaunas', 45451, '180917BE63', 1, '2018-09-17 06:34:52', NULL),
(2, 'Elena', 'Brazauske', 'elena@gmail.com', '862314598', 'Raudondvario pl. 105, Kaunas', 82562, '18091743C4', 0, '2018-09-17 06:37:23', NULL),
(3, 'Jonas', 'Popas', 'jonas.pop@gmail.com', '862145835', 'Girstucio g. 109, Vilnius', 56524, '180917BC1E', 0, '2018-09-17 06:40:09', NULL),
(4, 'Bronius', 'Bradauskas', 'bronius.bra@gmail.com', '863254865', 'Kalno g 23 Utena', 56621, '1809173361', 0, '2018-09-17 06:41:14', NULL),
(5, 'Rasa', 'Doe', 'rasa.doe@gmail.com', '863548568', 'Malunininku g. 97-12, Klaipeda', 56891, '1809172343', 1, '2018-09-17 06:42:50', NULL),
(6, 'Aleksandras', 'Pabelenko', 'alex.pa@gmail.com', '862581456', 'Kareiviniu g. 9 , Kedainiai', 99892, '180917A4F0', 0, '2018-09-17 06:44:02', NULL),
(7, 'Deivydas', 'Tamo', 'deivis.ta@gmail.com', '862258966', 'Kalnakasiu pl. 55-20, Raseiniai', 22248, '1809174105', 0, '2018-09-17 06:45:40', NULL),
(8, 'Julius', 'Dabuls', 'julius.da@gmail.com', '865523845', 'Langu g. 20-99, Pasvalys', 77752, '18091763BC', 0, '2018-09-17 06:47:28', NULL),
(9, 'Audrone', 'Kripavi', 'audra.kri@gmail.com', '867597125', 'Pakruojo g, 21-55, Ukmerge', 96332, '1809171BA4', 0, '2018-09-17 06:48:56', NULL),
(10, 'Ramune', 'Velicka', 'ramune.veli@gmail.com', '862201478', 'Rambyno g. 66, Kazlu ruda', 663444, '180917F53E', 0, '2018-09-17 06:50:13', NULL),
(11, 'Rolandas', 'Svolkinas', 'rolandas.svo@gmail.com', '864496528', 'Panemunes g 23-108, Vilnius', 79264, '1809176C23', 0, '2018-09-17 06:51:42', NULL),
(12, 'Henrikas', 'Vaitiekunas', 'henris.veit@gmail.com', '8642594856', 'Betygalos g. 55 Kaunas 44646', 783131, '1809176450', 0, '2018-09-17 06:53:34', NULL),
(13, 'Anastasija', 'Zizas', 'ana.ziz@gmail.com', '863111212', 'Kalabybiskio g. 56 Radviliskis 55484', 62626, '180917F97B', 0, '2018-09-17 06:54:19', NULL),
(14, 'Vadimas', 'Zizas', 'vad.ziz@gmail.com', '869435856', 'Kauno g. 63 Vilnius 541822', 99652, '18091776B2', 0, '2018-09-17 06:55:01', NULL),
(15, 'Petras', 'Wiliams', 'petro.w@gmail.com', '863349652', 'Kalno g 23 Utena 86451', 26655, '180917F2E2', 0, '2018-09-17 06:55:45', NULL),
(16, 'Valentinas', 'Vozniakas', 'valius@gmail.com', '869435864', 'Vidurinioji g. 99-100, Radviliskis', 22355, '1809175C67', 0, '2018-09-17 06:57:23', NULL),
(17, 'Brad', 'Traversy', 'brad.traversy@gmail.com', '862485246', 'Berneliu g. 43-65, Kaunas', 45451, '180917BE63', 0, '2018-09-17 06:34:52', NULL),
(18, 'Elena', 'Brazauske', 'elena@gmail.com', '862314598', 'Raudondvario pl. 105, Kaunas', 82562, '18091743C4', 0, '2018-09-17 06:37:23', NULL),
(19, 'Jonas', 'Popas', 'jonas.pop@gmail.com', '862145835', 'Girstucio g. 109, Vilnius', 56524, '180917BC1E', 0, '2018-09-17 06:40:09', NULL),
(20, 'Bronius', 'Bradauskas', 'bronius.bra@gmail.com', '863254865', 'Kalno g 23 Utena', 56621, '1809173361', 0, '2018-09-17 06:41:14', NULL),
(21, 'Rasa', 'Doe', 'rasa.doe@gmail.com', '863548568', 'Malunininku g. 97-12, Klaipeda', 56891, '1809172343', 0, '2018-09-17 06:42:50', NULL),
(22, 'Aleksandras', 'Pabelenko', 'alex.pa@gmail.com', '862581456', 'Kareiviniu g. 9 , Kedainiai', 99892, '180917A4F0', 0, '2018-09-17 06:44:02', NULL),
(23, 'Deivydas', 'Tamo', 'deivis.ta@gmail.com', '862258966', 'Kalnakasiu pl. 55-20, Raseiniai', 22248, '1809174105', 0, '2018-09-17 06:45:40', NULL),
(24, 'Julius', 'Dabuls', 'julius.da@gmail.com', '865523845', 'Langu g. 20-99, Pasvalys', 77752, '18091763BC', 0, '2018-09-17 06:47:28', NULL),
(25, 'Audrone', 'Kripavi', 'audra.kri@gmail.com', '867597125', 'Pakruojo g, 21-55, Ukmerge', 96332, '1809171BA4', 0, '2018-09-17 06:48:56', NULL),
(26, 'Ramune', 'Velicka', 'ramune.veli@gmail.com', '862201478', 'Rambyno g. 66, Kazlu ruda', 663444, '180917F53E', 0, '2018-09-17 06:50:13', NULL),
(27, 'Rolandas', 'Svolkinas', 'rolandas.svo@gmail.com', '864496528', 'Panemunes g 23-108, Vilnius', 79264, '1809176C23', 0, '2018-09-17 06:51:42', NULL),
(28, 'Henrikas', 'Vaitiekunas', 'henris.veit@gmail.com', '8642594856', 'Betygalos g. 55 Kaunas 44646', 783131, '1809176450', 0, '2018-09-17 06:53:34', NULL),
(29, 'Anastasija', 'Zizas', 'ana.ziz@gmail.com', '863111212', 'Kalabybiskio g. 56 Radviliskis 55484', 62626, '180917F97B', 0, '2018-09-17 06:54:19', NULL),
(30, 'Vadimas', 'Zizas', 'vad.ziz@gmail.com', '869435856', 'Kauno g. 63 Vilnius 541822', 99652, '18091776B2', 0, '2018-09-17 06:55:01', NULL),
(31, 'Petras', 'Wiliams', 'petro.w@gmail.com', '863349652', 'Kalno g 23 Utena 86451', 26655, '180917F2E2', 0, '2018-09-17 06:55:45', NULL),
(32, 'Valentinas', 'Vozniakas', 'valius@gmail.com', '869435864', 'Vidurinioji g. 99-100, Radviliskis', 22355, '1809175C67', 0, '2018-09-17 06:57:23', NULL),
(33, 'Ramune', 'Velicka', 'ramune.veli@gmail.com', '862201478', 'Rambyno g. 66, Kazlu ruda', 663444, '180917F53E', 0, '2018-09-17 06:50:13', NULL),
(34, 'Rolandas', 'Svolkinas', 'rolandas.svo@gmail.com', '864496528', 'Panemunes g 23-108, Vilnius', 79264, '1809176C23', 0, '2018-09-17 06:51:42', NULL),
(35, 'Henrikas', 'Vaitiekunas', 'henris.veit@gmail.com', '8642594856', 'Betygalos g. 55 Kaunas 44646', 783131, '1809176450', 0, '2018-09-17 06:53:34', NULL),
(36, 'Anastasija', 'Zizas', 'ana.ziz@gmail.com', '863111212', 'Kalabybiskio g. 56 Radviliskis 55484', 62626, '180917F97B', 0, '2018-09-17 06:54:19', NULL),
(37, 'Vadimas', 'Zizas', 'vad.ziz@gmail.com', '869435856', 'Kauno g. 63 Vilnius 541822', 99652, '18091776B2', 0, '2018-09-17 06:55:01', NULL),
(38, 'Petras', 'Wiliams', 'petro.w@gmail.com', '863349652', 'Kalno g 23 Utena 86451', 26655, '180917F2E2', 1, '2018-09-17 06:55:45', NULL),
(39, 'Valentinas', 'Vozniakas', 'valius@gmail.com', '869435864', 'Vidurinioji g. 99-100, Radviliskis', 22355, '1809175C67', 1, '2018-09-17 06:57:23', NULL),
(40, 'Brad', 'Traversy', 'brad.traversy@gmail.com', '862485246', 'Berneliu g. 43-65, Kaunas', 45451, '180917BE63', 0, '2018-09-17 06:34:52', NULL),
(41, 'Elena', 'Brazauske', 'elena@gmail.com', '862314598', 'Raudondvario pl. 105, Kaunas', 82562, '18091743C4', 0, '2018-09-17 06:37:23', NULL),
(42, 'Jonas', 'Popas', 'jonas.pop@gmail.com', '862145835', 'Girstucio g. 109, Vilnius', 56524, '180917BC1E', 0, '2018-09-17 06:40:09', NULL),
(43, 'Bronius', 'Bradauskas', 'bronius.bra@gmail.com', '863254865', 'Kalno g 23 Utena', 56621, '1809173361', 0, '2018-09-17 06:41:14', NULL),
(44, 'Rasa', 'Doe', 'rasa.doe@gmail.com', '863548568', 'Malunininku g. 97-12, Klaipeda', 56891, '1809172343', 0, '2018-09-17 06:42:50', NULL),
(45, 'Aleksandras', 'Pabelenko', 'alex.pa@gmail.com', '862581456', 'Kareiviniu g. 9 , Kedainiai', 99892, '180917A4F0', 0, '2018-09-17 06:44:02', NULL),
(46, 'Deivydas', 'Tamo', 'deivis.ta@gmail.com', '862258966', 'Kalnakasiu pl. 55-20, Raseiniai', 22248, '1809174105', 0, '2018-09-17 06:45:40', NULL),
(47, 'Julius', 'Dabuls', 'julius.da@gmail.com', '865523845', 'Langu g. 20-99, Pasvalys', 77752, '18091763BC', 0, '2018-09-17 06:47:28', NULL),
(48, 'Audrone', 'Kripavi', 'audra.kri@gmail.com', '867597125', 'Pakruojo g, 21-55, Ukmerge', 96332, '1809171BA4', 0, '2018-09-17 06:48:56', NULL),
(49, 'Ramune', 'Velicka', 'ramune.veli@gmail.com', '862201478', 'Rambyno g. 66, Kazlu ruda', 663444, '180917F53E', 0, '2018-09-17 06:50:13', NULL),
(50, 'Brad', 'Traversy', 'brad.traversy@gmail.com', '862485246', 'Berneliu g. 43-65, Kaunas', 45451, '180917BE63', 0, '2018-09-17 06:34:52', NULL),
(51, 'Elena', 'Brazauske', 'elena@gmail.com', '862314598', 'Raudondvario pl. 105, Kaunas', 82562, '18091743C4', 0, '2018-09-17 06:37:23', NULL),
(52, 'Jonas', 'Popas', 'jonas.pop@gmail.com', '862145835', 'Girstucio g. 109, Vilnius', 56524, '180917BC1E', 0, '2018-09-17 06:40:09', NULL),
(53, 'Bronius', 'Bradauskas', 'bronius.bra@gmail.com', '863254865', 'Kalno g 23 Utena', 56621, '1809173361', 1, '2018-09-17 06:41:14', NULL),
(54, 'Rasa', 'Doe', 'rasa.doe@gmail.com', '863548568', 'Malunininku g. 97-12, Klaipeda', 56891, '1809172343', 1, '2018-09-17 06:42:50', NULL),
(55, 'Aleksandras', 'Pabelenko', 'alex.pa@gmail.com', '862581456', 'Kareiviniu g. 9 , Kedainiai', 99892, '180917A4F0', 1, '2018-09-17 06:44:02', NULL),
(56, 'Deivydas', 'Tamo', 'deivis.ta@gmail.com', '862258966', 'Kalnakasiu pl. 55-20, Raseiniai', 22248, '1809174105', 1, '2018-09-17 06:45:40', NULL),
(57, 'Julius', 'Dabuls', 'julius.da@gmail.com', '865523845', 'Langu g. 20-99, Pasvalys', 77752, '18091763BC', 0, '2018-09-17 06:47:28', NULL),
(58, 'Audrone', 'Kripavi', 'audra.kri@gmail.com', '867597125', 'Pakruojo g, 21-55, Ukmerge', 96332, '1809171BA4', 0, '2018-09-17 06:48:56', NULL),
(59, 'Ramune', 'Velicka', 'ramune.veli@gmail.com', '862201478', 'Rambyno g. 66, Kazlu ruda', 663444, '180917F53E', 0, '2018-09-17 06:50:13', NULL),
(60, 'Raimundas', 'Bingelis', 'raimis.bi@gmail.com', '863258954', 'Pasiles al. 69-12, Silale', 58994, '1809178BC9', 0, '2018-09-17 11:25:03', NULL),
(61, 'Justinas', 'Jankevicius', 'justis.jan@gmail.com', '864243116', 'Virsuliskiu g. 98, Kupiskis', 78596, '18091742F7', 1, '2018-09-17 11:29:02', NULL),
(62, 'Mantas', 'Katleris', 'mantas.kat@gmail.com', '865489624', 'Liepojos g. 5 Klaipeda', 59599, '1809174399', 0, '2018-09-17 11:33:48', NULL),
(63, 'Mantas', 'Stonkus', 'Mantas.st@gmail.com', '862458561', 'Betygalos g. 55 Kaunas', 24881, '18091700E5', 0, '2018-09-17 11:42:55', NULL),
(64, 'Antanas', 'Kavaliauskas', 'antanas.ka@gmail.com', '865495632', 'Kalnakasiu pl. 55-20, Raseiniai', 32266, '180917FDA1', 0, '2018-09-17 11:51:57', NULL),
(65, 'Jonas', 'Valanciunas', 'jonas.va@gmail.com', '860598756', 'Kurbarko g. 55, Utena', 22669, '18091752EF', 1, '2018-09-17 11:55:05', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
