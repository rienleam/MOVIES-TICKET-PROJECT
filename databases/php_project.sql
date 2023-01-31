-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2023 at 01:58 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `card_id` int(11) NOT NULL,
  `card_name` varchar(25) NOT NULL,
  `card_number` int(11) NOT NULL,
  `CVV_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `list_shows`
--

CREATE TABLE `list_shows` (
  `show_id` int(11) NOT NULL,
  `show_name` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `cost` int(11) NOT NULL,
  `description` varchar(250) DEFAULT NULL,
  `time` varchar(55) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_shows`
--

INSERT INTO `list_shows` (`show_id`, `show_name`, `date`, `cost`, `description`, `time`, `image`) VALUES
(1, 'AVATAR', '2023-01-28', 30, 'A paraplegic Marine dispatched to the moon Pandora on a unique mission becomes torn between following his orders and protecting the world he feels is his home. When his brother is killed in a robbery,', '9h:00m PM - 11h:30m PM', './assets/images/avatar.jpg'),
(2, 'AVATAR', '0000-00-00', 30, 'A paraplegic Marine dispatched to the moon Pandora on a unique mission becomes torn between following his orders and protecting the world he feels is his home. When his brother is killed in a robbery,', '9h:00m PM - 11h:30m PM', './assets/images/avatar.jpg'),
(3, 'JOHN WICK', '0000-00-00', 30, 'John eventually became the top enforcer for the New York Russian crime syndicate, becoming a feared and ruthless hitman that people describe as \"a man of focus, commitment, and sheer will\".', '2h:00m PM - 4h:30m PM', './assets/images/John Wick.jpg'),
(4, 'SPIDER-MAN', '0000-00-00', 30, 'Superhuman strength, agility, endurance, and ability to stick to and climb walls and other surfaces, uses self-designed web shooters allowing him to fire and swing from sticky webs, special \"Spider-Se', '9h:00m PM - 11h:30m PM', './assets/images/spiderman.jpg'),
(5, 'DOCTOR STRANGE', '2023-01-28', 30, 'Doctor Strange serves as Sorcerer Supreme, the primary protector of Earth against magical and mystical threats. Strange was introduced during the Silver Age of Comic Books in an attempt to bring a dif', '9h:00m PM - 11h:30m PM', './assets/images/Doctor Strange.jpg'),
(6, 'Monster Hunter', '2023-03-23', 30, 'The player takes the role of a Hunter, slaying or trapping large monsters across various landscapes as part of quests given to them by locals, with some quests involving the gathering of a certain ite', '2h:00m PM - 4h:00m PM', './assets/images/Monster Hunter.jpeg'),
(7, 'STAR WARS', '2023-01-28', 40, 'A space opera set “a long time ago in a galaxy far, far away,” the film centers on Luke Skywalker (played by the then relatively unknown Mark Hamill), a young man who finds himself embroiled in an int', '9h:00m AM - 12h:00m AM', './assets/images/Star Wars.jpg'),
(8, 'Black Adam', '2023-02-22', 30, 'Black Adam appears as a featured character in DC\'s weekly 52 comic books. Depicted as the violent protector of the nation of Kahndaq, Adam kills several supervillains in public and on television to de', '12h:00m AM - 2h:1-25m PM', './assets/images/Black Adam.jpg'),
(9, 'Dune', '2023-02-25', 30, 'A mythic and emotionally charged hero\'s journey, \"Dune\" tells the story of Paul Atreides, a brilliant and gifted young man born into a great destiny beyond his understanding, who must travel to the mo', '7h:00m - 10h:00m', './assets/images/Dune.jpeg'),
(10, 'Kung Fu Panda', '2023-01-31', 30, 'This movie follows the story of Po (voice of Jack Black), a Panda who works in his father\'s noodle shop, but dreams of becoming a Kung Fu champion. When Po learns that the village is hosting a tournament to nominate a Dragon Warrior, he makes his way', NULL, './assets/images/Kung Fu Panda.jpg'),
(11, 'The Dack Knight', '2023-01-30', 30, 'The plot follows the vigilante Batman, police lieutenant James Gordon, and district attorney Harvey Dent, who form an alliance to dismantle organized crime in Gotham City. Their efforts are derailed by the Joker, an anarchistic mastermind who seeks t', '2h:00m PM - 4h:00m PM', './assets/images/Dack knight.jpg'),
(12, 'The Dead Dont Die', '2023-02-16', 30, 'The Dead Don\'t Die is a conventional zombie film with Jarmusch\'s touch. Director Jim Jarmusch is widely considered for his distinctive narrative style and character development. Extended and unhurried scenes with a deadpan comic execution are his con', '9h:00m AM - 12h:00m AM', './assets/images/The-Dead-Dont-Die.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `seller_id` int(11) NOT NULL,
  `image` blob NOT NULL,
  `description` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `slider_id` int(11) NOT NULL,
  `img_path` varchar(100) NOT NULL,
  `alt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`slider_id`, `img_path`, `alt`) VALUES
(1, '../../assets/images/avatar.jpg', 'First Slide'),
(2, '../../assets/images/spiderman.jpg', 'Secound Slide'),
(3, '../../assets/images/batman.jpg', 'Third Slide');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `ticket_id` int(11) NOT NULL,
  `show_id` int(11) NOT NULL,
  `ticket_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `First_name` varchar(15) NOT NULL,
  `Last_name` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`card_id`);

--
-- Indexes for table `list_shows`
--
ALTER TABLE `list_shows`
  ADD PRIMARY KEY (`show_id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`seller_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ticket_id`),
  ADD KEY `show_id` (`show_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `card_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `list_shows`
--
ALTER TABLE `list_shows`
  MODIFY `show_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `seller_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_ibfk_1` FOREIGN KEY (`show_id`) REFERENCES `list_shows` (`show_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
