-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2023 at 07:59 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nscet_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `home_page`
--

CREATE TABLE `home_page` (
  `id` int(11) NOT NULL,
  `sectionName` varchar(255) NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`content`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_page`
--

INSERT INTO `home_page` (`id`, `sectionName`, `content`) VALUES
(1, 'marquee', '{\"content\":\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. welcome to all.\"}'),
(2, 'heroSection', '[{\"subHeading\":\"AWARD WINNING UNIVERSITY\",\"heading\":\"AN INVESTMENT IN KNOWLEDGE PAYS THE BEST INTEREST.\",\"paragraph\":\"Education is not just about going to school and getting a degree. It\'s about widening your knowledge and absorbing the truth about life. Knowledge is power.\",\"btn\":\"GET STARTED\",\"image\":\"https://picsum.photos/280/256\",\"url\":\"https://nscet.org/\"},{\"subHeading\":\"AWARD WINNING UNIVERSITY\",\"heading\":\"AN INVESTMENT IN KNOWLEDGE PAYS THE BEST INTEREST.\",\"paragraph\":\"Education is not just about going to school and getting a degree. It\'s about widening your knowledge and absorbing the truth about life. Knowledge is power.\",\"btn\":\"GET STARTED\",\"image\":\"https://picsum.photos/280/256\",\"url\":\"https://nscet.org/\"}]'),
(3, 'timerSection', '[{\"title\":\"NEXT COUSRE: SALES & MARKETING ALIGNMENT\",\"time\":\"07:00 PM - 09:00 PM\",\"countdown\":\"2023/11/23\"}]'),
(4, 'newsSection', '[{\"url\":\"news-single.html\",\"imgUrl\":\"https://picsum.photos/400/250\",\"date\":\"June 6, 2019\",\"tags\":\"Admission\",\"title\":\"Campus Camping and Learning Session\"}]'),
(5, 'videoSection', '[\"https://youtu.be/EngW7tLk6R8?si=i8tOs0WFo7qPdkZE\",\"https://youtu.be/EngW7tLk6R8?si=i8tOs0WFo7qPdkZE\"]'),
(6, 'imgSection', '[\"https://picsum.photos/280/256\",\"https://picsum.photos/380/480?random=1\"]'),
(7, 'principalDesk', '{\"image\":\"https://picsum.photos/280/256\",\"bgUrl\":\"https://nscet.org/Home_Assets/img/dummy/about-us.jpg\",\"content\":\"As a 21st century organization, NSCET desires to set an approach to learning that incorporates inquiry, research, analytical thinking and an ethical approach that becomes a lifetime habit. I strongly believe that education is a collaborative effort that involves professional administrators, committed teachers and motivated students. We dedicate ourselves as professional administrators in creating a dynamic education programme empowering the students in a global perspective. We are a group of diverse experiences and outlooks, committed to excellence in preparing learners for enriched opportunities worldwide. In short, learning at NSCET is a wholesome package of attitude, challenge and opportunity.\",\"name\":\"Dr.C.Mathalai Sundaram M.E.,MBA.,Ph.D., Principal, NSCET\"}'),
(8, 'ugCourses', '[{\"name\":\"Computer Science and Engineering\",\"imgUrl\":\"https://picsum.photos/280/256\",\"date\":\"22 Mar 2018\",\"subHeading\":\"Certificate Course in Writing for a Global Market\"},{\"name\":\"Computer Science and Engineering\",\"imgUrl\":\"https://picsum.photos/280/256\",\"date\":\"22 Mar 2018\",\"subHeading\":\"Certificate Course in Writing for a Global Market\"}]'),
(9, 'pgCourses', '[{\"name\":\"Computer Science and Engineering\",\"imgUrl\":\"https://picsum.photos/280/256\",\"date\":\"22 Mar 2018\",\"subHeading\":\"Certificate Course in Writing for a Global Market\"}]'),
(10, 'counterSection', '[{\"name\":\"YEARS\",\"count\":50},{\"name\":\"TEACHERS\",\"count\":80}]'),
(11, 'requiterSection', '[\"https://picsum.photos/280/256\",\"https://picsum.photos/280/256\"]'),
(12, 'modelSection', '{\"title\":\"I\'m a Modal\",\"content\":\"To showcase the Important Event and Festivel. Click anywhere to close\"}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home_page`
--
ALTER TABLE `home_page`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home_page`
--
ALTER TABLE `home_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
