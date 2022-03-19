-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2022 at 05:05 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be15_cr10_sanjakostantinovic_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `be15_cr10_sanjakostantinovic_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `be15_cr10_sanjakostantinovic_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `media_id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `short_description` varchar(200) NOT NULL,
  `author_first_name` varchar(30) NOT NULL,
  `author_last_name` varchar(30) NOT NULL,
  `publisher_name` varchar(30) NOT NULL,
  `publisher_address` varchar(50) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `ISBN_code` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`media_id`, `title`, `type`, `image`, `short_description`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `ISBN_code`) VALUES
(1, 'Harry Potter and the Philosoph', 'book', 'harry-potter-4077473_960_720.webp', 'The first novel in the Harry Potter series and Rowling\'s debut novel, it follows Harry Potter', 'Joanne', 'K. Rowling', 'Bloomsbury', '31 Bedford Avenue, London', '1997-06-26', 1234567890),
(2, 'Harry Potter and the Prisoner ', 'book', 'harry-potter-3670411_960_720.webp', 'The book follows Harry Potter, a young wizard', 'Joanne', 'K. Rowling', 'Bloomsbury', '31 Bedford Avenue, London', '1999-07-08', 1234567891),
(3, 'Harry Potter and the Goblet of', 'book', 'book-2612702_960_720.webp', 'Harry Potter and the Goblet of Fire is a fantasy novel written by British author J. K. Rowling and the fourth novel in the Harry Potter series.', 'Joanne', 'K. Rowling', 'Bloomsbury', '31 Bedford Avenue, London', '2000-07-08', 1234567892),
(4, 'Eminem-The Slim Shady LP', 'CD', 'dvd-34919_960_720.png', 'The Slim Shady LP is the second studio album by American rapper Eminem.', 'Marshall', 'Bruce Mathers III', 'Dr. Dre', 'Los Angeles, USA', '1999-02-23', 1234567896),
(5, 'The Lord of the Rings', 'book', 'ring-4612457_960_720.jpg', 'The Lord of the Rings is an epic high-fantasy novel. Set in Middle-earth, intended to be Earth at some distant time in the past.', 'John', 'R. R. Tolkien', 'Allen & Unwin', 'Crows Nest, New South Wales, Australia', '1954-06-29', 1234567894),
(6, 'The Hobbit: An Unexpected Jour', 'DVD', 'house-6096471_960_720.jpg', 'It is the first instalment in a three-part film adaptation based on J. R. R. Tolkien’s 1937 nove', 'Peter', 'Jackson', 'WingNut Films', 'Stone Street, Wellington, New Zealand', '2012-11-28', 1234567899),
(7, 'Rihanna Loud', 'CD', 'plant-949111_960_720.jpg', 'Loud is the fifth studio album by Barbadian singer Rihanna. ', 'Robyn', 'Rihanna Fenty', 'Alex da Kid', 'Bristol, England', '2010-11-12', 1234567898),
(8, 'The Hobbit: The Desolation of ', 'DVD', 'gandalf-5170365_960_720.jpg', 'The Desolation of Smaug is a 2013 epic high-fantasy adventure film.\r\n', 'Peter', 'Jackson', 'WingNut Films', 'Stone Street, Wellington, New Zealand', '2013-12-02', 1234567809),
(9, 'The Hobbit: The Battle of the ', 'DVD', 'map-6339930_960_720.webp', 'The Hobbit: The Battle of the Five Armies is a 2014 epic high fantasy film.', 'Peter', 'Jackson', 'WingNut Films', 'Stone Street, Wellington, New Zealand', '2011-12-01', 1234567816),
(10, 'The Two Towers', 'book', 'elf-3725340_960_720.jpg', 'A party of large Orcs, Uruk-hai, sent by Saruman, and other Orcs sent by Sauron and led by Grishnákh, attack the Fellowship.', 'John', 'R. R. Tolkien', 'Allen & Unwin', 'Crows Nest, New South Wales, Australia', '1954-11-11', 1234567694),
(11, 'Hollly Bible', 'book', 'bible.jpg', 'The Bible (from Koine Greek τὰ βιβλία, tà biblía, \'the books\') is a collection of religious texts or scriptures sacred in Christianity, Judaism, Samaritanism, and many other faiths. ', 'anonym', 'anonym', 'anonym', 'London', '1999-12-09', 1234578777),
(13, 'Conclusion', 'DVD', 'media.png', 'Great movie', 'Milos', 'Pavic', 'adsfad', 'Cossmanngasse 20, Wien', '2022-03-02', 34567899);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`media_id`),
  ADD UNIQUE KEY `ISBN_code` (`ISBN_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
