-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 03, 2023 at 11:54 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interschool_sport`
--

-- --------------------------------------------------------

--
-- Table structure for table `Fixture_result`
--

CREATE TABLE `Fixture_result` (
  `id` int(11) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `school_name_2` varchar(255) NOT NULL,
  `competition_type` varchar(255) NOT NULL,
  `school_log_image` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `location_province` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Fixture_result`
--

INSERT INTO `Fixture_result` (`id`, `school_name`, `school_name_2`, `competition_type`, `school_log_image`, `date`, `location_province`) VALUES
(1, 'Lycee de kigali', 'Ecole belge de kigali', 'football', 'image', '2023-01-10', 'kigali city'),
(2, 'Excel school', 'ecole scolaire de Nyundo 1', 'football', 'image', '2023-01-04', 'northern province');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `school_name_1` varchar(255) NOT NULL,
  `school_name_2` varchar(255) NOT NULL,
  `school_log_2` text NOT NULL,
  `school_log_1` text NOT NULL,
  `date` date NOT NULL,
  `score` int(11) NOT NULL,
  `who_score` varchar(255) NOT NULL,
  `competition` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `school_name_1`, `school_name_2`, `school_log_2`, `school_log_1`, `date`, `score`, `who_score`, `competition`) VALUES
(1, 'Lycee de Kigali', 'ecole de belge de kigali', 'image', 'image', '2023-01-05', 3, 'lycee de kigali', 'football');

-- --------------------------------------------------------

--
-- Table structure for table `school_data`
--

CREATE TABLE `school_data` (
  `id` int(11) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `school_log_image` text NOT NULL,
  `school_province` varchar(255) NOT NULL,
  `competition__type` varchar(255) NOT NULL,
  `date_register` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school_data`
--

INSERT INTO `school_data` (`id`, `school_name`, `school_log_image`, `school_province`, `competition__type`, `date_register`) VALUES
(5, 'Group Scolaire Nyabagendwa', '1image', 'eastern province', 'football', '2023-01-02'),
(6, 'Groupe Scolaire Remere Catholique', 'image', 'eastern province', 'football', '2023-01-02'),
(7, 'Ecole Belge de kigali', 'image', 'kigali city', 'football', '2023-01-01'),
(8, 'Lycee de Kigali', 'image', 'kigali city', 'football', '2023-01-05'),
(9, 'Ecole  scolaire de de Nyundo 1', 'image', 'nothern province', 'football', '2023-01-10'),
(10, 'Excel School', 'image', 'northern province', 'football', '2023-01-09'),
(11, 'Ecole des sciences Byimana', 'image', 'southern province', 'football', '2023-01-09'),
(12, 'college appec', 'image', 'southern province', 'football', '2023-01-02'),
(13, 'Eto mibirizi', 'image', 'western province', 'football', '2023-01-20'),
(14, 'College de gisenyi Inyemeramihigo', 'image', 'western province', 'football', '2023-01-04');

-- --------------------------------------------------------

--
-- Table structure for table `table`
--

CREATE TABLE `table` (
  `id` int(11) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `school_log_image` text NOT NULL,
  `played` int(11) NOT NULL,
  `won` int(11) NOT NULL,
  `drawn` int(11) NOT NULL,
  `lost` int(11) NOT NULL,
  `gf` int(11) NOT NULL,
  `ga` int(11) NOT NULL,
  `gd` int(11) NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table`
--

INSERT INTO `table` (`id`, `school_name`, `school_log_image`, `played`, `won`, `drawn`, `lost`, `gf`, `ga`, `gd`, `points`) VALUES
(1, 'Lycee de kigali', 'image', 4, 2, 1, 1, 3, 1, 3, 7);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `names` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `names`, `username`, `email`, `password`, `type_user`) VALUES
(1, 'IShimwe pacifique', 'ishimwepacifique0@gmail.com', 'ishimwepacifique0@gmail.com', 'pacifique', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Fixture_result`
--
ALTER TABLE `Fixture_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_data`
--
ALTER TABLE `school_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table`
--
ALTER TABLE `table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Fixture_result`
--
ALTER TABLE `Fixture_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `school_data`
--
ALTER TABLE `school_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `table`
--
ALTER TABLE `table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
