-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2022 at 05:48 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cware_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `ingredient`
--

CREATE TABLE `ingredient` (
  `id_ingredient` int(11) NOT NULL,
  `name_ingredient` varchar(45) DEFAULT NULL,
  `photo_ingredient` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ingredient`
--

INSERT INTO `ingredient` (`id_ingredient`, `name_ingredient`, `photo_ingredient`) VALUES
(1, 'Pork (Cerdo)', 'Pork.jpg'),
(2, 'Crab Meat (Cangrejo)', 'crab_meat.jpg'),
(3, 'Shrimp (Camarones)', 'Shrimp.jpg'),
(4, 'Rice (Arroz)', 'rice.jpg'),
(5, 'Onion (Cebolla)', 'onion.jpg'),
(6, 'Noodles (Espaguetis)', 'noodles.jpg'),
(7, 'Chicken (Pollo)', 'chicken.jpg'),
(8, 'Duck (Pato)', 'duck.jpg'),
(9, 'Green Vegetables (Vegetales Verdes)', 'vegetables.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `name_menu` varchar(45) DEFAULT NULL,
  `day_menu` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `name_menu`, `day_menu`) VALUES
(1, 'The Entrace Menu', '2022-09-14'),
(2, 'For Dinner Menu', '2022-09-17');

-- --------------------------------------------------------

--
-- Table structure for table `menu_details`
--

CREATE TABLE `menu_details` (
  `id_menu_detail` int(11) NOT NULL,
  `id_menu` int(11) DEFAULT NULL,
  `id_plate` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_details`
--

INSERT INTO `menu_details` (`id_menu_detail`, `id_menu`, `id_plate`) VALUES
(1, 1, 5),
(3, 2, 2),
(4, 2, 3),
(5, 2, 4),
(6, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `plate`
--

CREATE TABLE `plate` (
  `id_plate` int(11) NOT NULL,
  `name_plate` varchar(45) DEFAULT NULL,
  `photo_plate` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plate`
--

INSERT INTO `plate` (`id_plate`, `name_plate`, `photo_plate`) VALUES
(1, 'Peking Roasted Duck', 'Peking_Roasted_Duck.png'),
(2, 'Kung Pao Chicken', 'Kung_Pao_Chicken.png'),
(3, 'Sweet and Sour Pork', 'Sweet_and_Sour Pork.png'),
(4, 'Fried Rice', 'Fried_Rice.png'),
(5, 'Xiaolongbao', 'Xiaolongbao.png');

-- --------------------------------------------------------

--
-- Table structure for table `use_ingredients`
--

CREATE TABLE `use_ingredients` (
  `id_useingredients` int(11) NOT NULL,
  `id_plate` int(11) DEFAULT NULL,
  `id_ingredient` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `use_ingredients`
--

INSERT INTO `use_ingredients` (`id_useingredients`, `id_plate`, `id_ingredient`) VALUES
(1, 1, 8),
(2, 1, 5),
(3, 1, 9),
(4, 2, 7),
(5, 2, 9),
(6, 3, 1),
(7, 3, 9),
(8, 4, 4),
(9, 4, 1),
(10, 4, 7),
(11, 4, 3),
(12, 4, 9),
(13, 4, 2),
(14, 5, 2),
(15, 5, 6),
(16, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ingredient`
--
ALTER TABLE `ingredient`
  ADD PRIMARY KEY (`id_ingredient`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `menu_details`
--
ALTER TABLE `menu_details`
  ADD PRIMARY KEY (`id_menu_detail`);

--
-- Indexes for table `plate`
--
ALTER TABLE `plate`
  ADD PRIMARY KEY (`id_plate`);

--
-- Indexes for table `use_ingredients`
--
ALTER TABLE `use_ingredients`
  ADD PRIMARY KEY (`id_useingredients`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ingredient`
--
ALTER TABLE `ingredient`
  MODIFY `id_ingredient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu_details`
--
ALTER TABLE `menu_details`
  MODIFY `id_menu_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `plate`
--
ALTER TABLE `plate`
  MODIFY `id_plate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `use_ingredients`
--
ALTER TABLE `use_ingredients`
  MODIFY `id_useingredients` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
