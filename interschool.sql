-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 04, 2023 at 05:56 PM
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
-- Database: `interschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_data`
--

CREATE TABLE `info_data` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `image` text NOT NULL,
  `decription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info_data`
--

INSERT INTO `info_data` (`id`, `title`, `image`, `decription`) VALUES
(1, 'the final match the College appec remera rukoma ', 'logo.png', 'the match have been taken by college appec remera rukoma  tvet school \r\n\r\n\r\n'),
(2, 'The best player in match is ISHIMWE', 'portfolio-7.jpg', 'Consectetur adipisicingelit, sed do eiusmod tempor incididunt ut labore et.dolor sit amet '),
(3, 'The location of match is located in nothern', 'portfolio-7.jpg', 'Consectetur adipisicingelit, sed do eiusmod tempor incididunt ut labore et.dolor sit amet ');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(11) NOT NULL,
  `stadium_name` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `stadium_name`, `province`, `district`) VALUES
(1, 'Kigali region', 'kigali city', 'nyarugenge'),
(2, 'remera stadium', 'kigali city', 'kicukiro');

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `id` int(11) NOT NULL,
  `team_one` varchar(255) NOT NULL,
  `team_two` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`id`, `team_one`, `team_two`, `date`) VALUES
(1, 'Groupe Scolaire Remere Catholique', 'Group Scolaire Nyabagendwa', '2023-02-24'),
(2, 'Ecole Belge de kigali', 'Group Scolaire Nyabagendwa', '2023-02-24'),
(3, 'Ecole Belge de kigali', 'Groupe Scolaire Remere Catholique', '2023-02-24'),
(4, 'Lycee de Kigali', 'Group Scolaire Nyabagendwa', '2023-02-24'),
(5, 'Lycee de Kigali', 'Groupe Scolaire Remere Catholique', '2023-02-24'),
(6, 'Lycee de Kigali', 'Ecole Belge de kigali', '2023-02-24'),
(7, 'Ecole  scolaire de Nyundo 1', 'Group Scolaire Nyabagendwa', '2023-02-24'),
(8, 'Ecole  scolaire de Nyundo 1', 'Groupe Scolaire Remere Catholique', '2023-02-24'),
(9, 'Ecole  scolaire de Nyundo 1', 'Ecole Belge de kigali', '2023-02-24'),
(10, 'Ecole  scolaire de Nyundo 1', 'Lycee de Kigali', '2023-02-24'),
(11, 'Excel School', 'Group Scolaire Nyabagendwa', '2023-02-24'),
(12, 'Excel School', 'Groupe Scolaire Remere Catholique', '2023-02-24'),
(13, 'Excel School', 'Ecole Belge de kigali', '2023-02-24'),
(14, 'Excel School', 'Lycee de Kigali', '2023-02-24'),
(15, 'Excel School', 'Ecole  scolaire de Nyundo 1', '2023-02-24'),
(16, 'Ecole des sciences Byimana', 'Group Scolaire Nyabagendwa', '2023-02-24'),
(17, 'Ecole des sciences Byimana', 'Groupe Scolaire Remere Catholique', '2023-02-24'),
(18, 'Ecole des sciences Byimana', 'Ecole Belge de kigali', '2023-02-24'),
(19, 'Ecole des sciences Byimana', 'Lycee de Kigali', '2023-02-24'),
(20, 'Ecole des sciences Byimana', 'Ecole  scolaire de Nyundo 1', '2023-02-24'),
(21, 'Ecole des sciences Byimana', 'Excel School', '2023-02-24'),
(22, 'college appec', 'Group Scolaire Nyabagendwa', '2023-02-24'),
(23, 'college appec', 'Groupe Scolaire Remere Catholique', '2023-02-24'),
(24, 'college appec', 'Ecole Belge de kigali', '2023-02-24'),
(25, 'college appec', 'Lycee de Kigali', '2023-02-24'),
(26, 'college appec', 'Ecole  scolaire de Nyundo 1', '2023-02-24'),
(27, 'college appec', 'Excel School', '2023-02-24'),
(28, 'college appec', 'Ecole des sciences Byimana', '2023-02-24'),
(29, 'College de gisenyi Inyemeramihigo', 'Group Scolaire Nyabagendwa', '2023-02-24'),
(30, 'College de gisenyi Inyemeramihigo', 'Groupe Scolaire Remere Catholique', '2023-02-24'),
(31, 'College de gisenyi Inyemeramihigo', 'Ecole Belge de kigali', '2023-02-24'),
(32, 'College de gisenyi Inyemeramihigo', 'Lycee de Kigali', '2023-02-24'),
(33, 'College de gisenyi Inyemeramihigo', 'Ecole  scolaire de Nyundo 1', '2023-02-24'),
(34, 'College de gisenyi Inyemeramihigo', 'Excel School', '2023-02-24'),
(35, 'College de gisenyi Inyemeramihigo', 'Ecole des sciences Byimana', '2023-02-24'),
(36, 'College de gisenyi Inyemeramihigo', 'college appec', '2023-02-24'),
(37, 'Group Scolaire Remera rukoma', 'Group Scolaire Nyabagendwa', '2023-02-24'),
(38, 'Group Scolaire Remera rukoma', 'Groupe Scolaire Remere Catholique', '2023-02-24'),
(39, 'Group Scolaire Remera rukoma', 'Ecole Belge de kigali', '2023-02-24'),
(40, 'Group Scolaire Remera rukoma', 'Lycee de Kigali', '2023-02-24'),
(41, 'Group Scolaire Remera rukoma', 'Ecole  scolaire de Nyundo 1', '2023-02-24'),
(42, 'Group Scolaire Remera rukoma', 'Excel School', '2023-02-24'),
(43, 'Group Scolaire Remera rukoma', 'Ecole des sciences Byimana', '2023-02-24'),
(44, 'Group Scolaire Remera rukoma', 'college appec', '2023-02-24'),
(45, 'Group Scolaire Remera rukoma', 'College de gisenyi Inyemeramihigo', '2023-02-24'),
(46, 'college', 'Group Scolaire Nyabagendwa', '2023-02-24'),
(47, 'college', 'Groupe Scolaire Remere Catholique', '2023-02-24'),
(48, 'college', 'Ecole Belge de kigali', '2023-02-24'),
(49, 'college', 'Lycee de Kigali', '2023-02-24'),
(50, 'college', 'Ecole  scolaire de Nyundo 1', '2023-02-24'),
(51, 'college', 'Excel School', '2023-02-24'),
(52, 'college', 'Ecole des sciences Byimana', '2023-02-24'),
(53, 'college', 'college appec', '2023-02-24'),
(54, 'college', 'College de gisenyi Inyemeramihigo', '2023-02-24'),
(55, 'college', 'Group Scolaire Remera rukoma', '2023-02-24'),
(56, 'Ecole Runda TVET SCHOOL', 'Group Scolaire Nyabagendwa', '2023-02-24'),
(57, 'Ecole Runda TVET SCHOOL', 'Groupe Scolaire Remere Catholique', '2023-02-24'),
(58, 'Ecole Runda TVET SCHOOL', 'Ecole Belge de kigali', '2023-02-24'),
(59, 'Ecole Runda TVET SCHOOL', 'Lycee de Kigali', '2023-02-24'),
(60, 'Ecole Runda TVET SCHOOL', 'Ecole  scolaire de Nyundo 1', '2023-02-24'),
(61, 'Ecole Runda TVET SCHOOL', 'Excel School', '2023-02-24'),
(62, 'Ecole Runda TVET SCHOOL', 'Ecole des sciences Byimana', '2023-02-24'),
(63, 'Ecole Runda TVET SCHOOL', 'college appec', '2023-02-24'),
(64, 'Ecole Runda TVET SCHOOL', 'College de gisenyi Inyemeramihigo', '2023-02-24'),
(65, 'Ecole Runda TVET SCHOOL', 'Group Scolaire Remera rukoma', '2023-02-24'),
(66, 'Ecole Runda TVET SCHOOL', 'college', '2023-02-24'),
(67, ' kabuga Tvet school', 'Group Scolaire Nyabagendwa', '2023-02-24'),
(68, ' kabuga Tvet school', 'Groupe Scolaire Remere Catholique', '2023-02-24'),
(69, ' kabuga Tvet school', 'Ecole Belge de kigali', '2023-02-24'),
(70, ' kabuga Tvet school', 'Lycee de Kigali', '2023-02-24'),
(71, ' kabuga Tvet school', 'Ecole  scolaire de Nyundo 1', '2023-02-24'),
(72, ' kabuga Tvet school', 'Excel School', '2023-02-24'),
(73, ' kabuga Tvet school', 'Ecole des sciences Byimana', '2023-02-24'),
(74, ' kabuga Tvet school', 'college appec', '2023-02-24'),
(75, ' kabuga Tvet school', 'College de gisenyi Inyemeramihigo', '2023-02-24'),
(76, ' kabuga Tvet school', 'Group Scolaire Remera rukoma', '2023-02-24'),
(77, ' kabuga Tvet school', 'college', '2023-02-24'),
(78, ' kabuga Tvet school', 'Ecole Runda TVET SCHOOL', '2023-02-24'),
(79, 'Group Scolaire Remera rukoma', 'Group Scolaire Nyabagendwa', '2023-02-24'),
(80, 'Group Scolaire Remera rukoma', 'Groupe Scolaire Remere Catholique', '2023-02-24'),
(81, 'Group Scolaire Remera rukoma', 'Ecole Belge de kigali', '2023-02-24'),
(82, 'Group Scolaire Remera rukoma', 'Lycee de Kigali', '2023-02-24'),
(83, 'Group Scolaire Remera rukoma', 'Ecole  scolaire de Nyundo 1', '2023-02-24'),
(84, 'Group Scolaire Remera rukoma', 'Excel School', '2023-02-24'),
(85, 'Group Scolaire Remera rukoma', 'Ecole des sciences Byimana', '2023-02-24'),
(86, 'Group Scolaire Remera rukoma', 'college appec', '2023-02-24'),
(87, 'Group Scolaire Remera rukoma', 'College de gisenyi Inyemeramihigo', '2023-02-24'),
(88, 'Group Scolaire Remera rukoma', 'college', '2023-02-24'),
(89, 'Group Scolaire Remera rukoma', 'Ecole Runda TVET SCHOOL', '2023-02-24'),
(90, 'Group Scolaire Remera rukoma', ' kabuga Tvet school', '2023-02-24');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `player_id` int(11) NOT NULL,
  `player_name` varchar(255) NOT NULL,
  `school_id` int(11) NOT NULL,
  `competition_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`player_id`, `player_name`, `school_id`, `competition_type`) VALUES
(1, 'ISHIMWE JEAN', 24, 'volleyball'),
(2, 'MUNYANA ange', 5, 'basketball'),
(3, 'ishimwe pacifique', 24, 'football'),
(4, 'Muhire albert', 8, 'basketball'),
(5, 'Mutoni micky', 5, 'football');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `school_name_one` varchar(255) NOT NULL,
  `score_school_one` int(11) NOT NULL,
  `score_school_two` int(11) NOT NULL,
  `school_name_two` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `date_register` date NOT NULL,
  `district` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phonenumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school_data`
--

INSERT INTO `school_data` (`id`, `school_name`, `school_log_image`, `school_province`, `competition__type`, `date_register`, `district`, `email`, `password`, `phonenumber`) VALUES
(5, 'Group Scolaire Nyabagendwa', '1.png', 'eastern province', 'football', '2023-01-02', '', 'scolairenyabagerwa@gmail.com', 'nyabagerwa', 778539635),
(6, 'Groupe Scolaire Remere Catholique', 'brand-05.png', 'eastern province', 'football', '2023-01-02', '', 'scolaireremera@gmail.com', 'remera', 784489847),
(7, 'Ecole Belge de kigali', 'Ebk-logo-couleur-definitif.jpg', 'kigali city', 'football', '2023-01-01', 'nyarugenge', 'ecolebelge@gmail.com', 'belge', 354643636),
(8, 'Lycee de Kigali', 'images.jpeg', 'kigali city', 'football', '2023-01-05', 'Kicukiro', 'lyceekigali@gmail.com', 'kigali', 789365735),
(9, 'Ecole  scolaire de Nyundo 1', 'download.png', 'nothern province', 'football', '2023-01-10', 'gasabo', 'nyundo@gmail.com', 'nyundo', 785264753),
(10, 'Excel School', 'index.jpeg', 'northern province', 'football', '2023-01-09', '', 'excelschool@gmail.com', 'excelschool', 0),
(11, 'Ecole des sciences Byimana', 'logo.png', 'southern province', 'football', '2023-01-09', '', 'byimana@gmail.com', 'byimana', 0),
(12, 'college appec', 'logo.png', 'southern province', 'football', '2023-01-02', 'kamonyi', 'collegeappec@gmail.com', 'appec', 0),
(14, 'College de gisenyi Inyemeramihigo', 'download.jpep', 'western province', 'football', '2023-01-04', '', '', '', 0),
(23, 'Group Scolaire Remera rukoma', 'logo-symbol-dark.png', 'west', 'football', '2023-01-04', 'kamonyi', '', '', 0),
(24, 'college', 'brand-05.png', 'west', 'football', '2023-01-11', '', '', '', 0),
(25, 'Ecole Runda TVET SCHOOL', 'portfolio-8.jpg', 'west', 'volleyball', '2023-01-11', 'kamonyi', '', '', 0),
(26, ' kabuga Tvet school', 'download2.png', 'southern province', 'football', '2023-01-03', 'kamonyi', '', '', 0),
(27, 'Group Scolaire Remera rukoma', 'IMG_20220803_081038.jpg', 'west', 'football', '2023-01-10', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE `sms` (
  `id` int(11) NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `messange` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'Lycee de kigali', 'images.jpeg', 4, 2, 1, 1, 3, 1, 3, 7);

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
(1, 'IShimwe pacifique', 'ishimwepacifique0@gmail.com', 'ishimwepacifique0@gmail.com', 'pacifique', 'admin'),
(2, 'manzi', 'manzi', 'ishimwejean@gmail.com', '576858', 'user'),
(3, 'patrick', 'patrick', 'patrick@gmail.com', 'patrick', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_data`
--
ALTER TABLE `info_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`player_id`),
  ADD KEY `school_id` (`school_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_data`
--
ALTER TABLE `school_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms`
--
ALTER TABLE `sms`
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
-- AUTO_INCREMENT for table `info_data`
--
ALTER TABLE `info_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_data`
--
ALTER TABLE `school_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `sms`
--
ALTER TABLE `sms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table`
--
ALTER TABLE `table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `players`
--
ALTER TABLE `players`
  ADD CONSTRAINT `players_ibfk_1` FOREIGN KEY (`school_id`) REFERENCES `school_data` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
