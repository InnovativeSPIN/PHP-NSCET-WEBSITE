-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 06, 2024 at 01:00 AM
-- Server version: 5.7.44
-- PHP Version: 8.1.25

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
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_page`
--

INSERT INTO `home_page` (`id`, `sectionName`, `content`) VALUES
(1, 'marquee', '{\"content\":\"Celebrating Excellence! 5 Teams from Our College Shortlisted for Smart India Hackathon Finals. Two Teams from Our College Emerge Victorious at Smart India Hackathon Finals!\"}'),
(2, 'heroSection', '[{\"subHeading\":\"Team Tech Creed Winner of AI BASED HYDRO POWER PLANT DESIGN\",\"heading\":\"SMART INDIA HACKATHON \'23\",\"paragraph\":\"Breaking barriers at the 36-hour hackathon in Guwahati, Assam, Team Tech Creed venue at Royal Global University achieves an extraordinary KNOCKOUT WIN at Smart India Hackathon 2023!\",\"btn\":\"WIN\",\"image\":\".\\/media\\/heroSection\\/IMG-20231231-WA0187.jpg\",\"url\":\"nscet.org\"},{\"subHeading\":\"Team Tech Creed Winner of ENIRONMENTAL NUDGES MONITOR SOFTWARE\",\"heading\":\"SMART INDIA HACKATHON \'23\",\"paragraph\":\"Breaking barriers at the 36-hour hackathon in Guwahati, Assam, Team Tech Titans achieves an extraordinary WIN at Smart India Hackathon 2023!\",\"btn\":\"WIN\",\"image\":\".\\/media\\/heroSection\\/IMG-20231229-WA0009.jpg\",\"url\":\"nscet.org\"},{\"subHeading\":\"Tamil Nadu Student Innovator Competation conducted by State Government of Tamil Nadu.\",\"heading\":\"TNSI - Young Innovator\",\"paragraph\":\"This success exemplifies the excellence and creativity nurtured within our college. Congratulations to the winner for this outstanding achievement with 1lak seed fund !\",\"btn\":\"WIN\",\"image\":\".\\/media\\/heroSection\\/IMG_8154.jpg\",\"url\":\"#\"},{\"subHeading\":\"NSCET Boys Extradinory Dance Performance\",\"heading\":\"NSCET Annual Day \' 23\",\"paragraph\":\".\",\"btn\":\"DANCE\",\"image\":\".\\/media\\/heroSection\\/AD23_3.jpeg\",\"url\":\"#\"},{\"subHeading\":\" Zonal Level match. Our students won a medal in the basketball tournment\",\"heading\":\"Excellence in a Basketball Tournment\",\"paragraph\":\".\",\"btn\":\"WIN\",\"image\":\".\\/media\\/heroSection\\/Basketball.jpeg\",\"url\":\"#\"},{\"subHeading\":\".\",\"heading\":\".\",\"paragraph\":\".\",\"btn\":\"Victory\",\"image\":\".\\/media\\/heroSection\\/SD23_2.jpeg\",\"url\":\"#\"}]'),
(3, 'timerSection', '[{\"title\":\"ICAMS 2K24\",\"time\":\"HYBRID MODE\",\"countdown\":\"2024\\/03\\/05\"}]'),
(4, 'newsSection', '[{\"title\":\"SIH WINNER CELEBRATION\",\"date\":\"January 3, 2024\",\"tags\":\"SIH\",\"imgUrl\":\".\\/media\\/newsSection\\/86345590-bca9-4ce1-b409-1f06048d893f.jpeg\",\"url\":\"google.com\"},{\"title\":\"Product Expo\'23\",\"date\":\"October 14, 2023\",\"tags\":\"Project Expo | Experiment\",\"imgUrl\":\".\\/media\\/newsSection\\/SBD_0196.jpg\",\"url\":\"nscet.org\"},{\"title\":\"Kalam Awards\",\"date\":\"September 29, 2023\",\"tags\":\"Project | Innovation\",\"imgUrl\":\".\\/media\\/newsSection\\/SBD_0074.jpg\",\"url\":\"#\"},{\"title\":\"Bureau of Indian Standards\",\"date\":\"October 26, 2023\",\"tags\":\"Awareness | Compettaion\",\"imgUrl\":\".\\/media\\/newsSection\\/BIS.jpeg\",\"url\":\"#\"},{\"title\":\"HR Talk\",\"date\":\"September 23, 2023\",\"tags\":\"Placement\",\"imgUrl\":\".\\/media\\/newsSection\\/MSU_0050.jpg\",\"url\":\"#\"},{\"title\":\"Elumeen Awardee\",\"date\":\"September 20, 2023\",\"tags\":\"Function\",\"imgUrl\":\".\\/media\\/newsSection\\/SDS_0088.jpg\",\"url\":\"#\"},{\"title\":\"Interaction with Prime Minister\",\"date\":\"December 19, 2023\",\"tags\":\"SIH\",\"imgUrl\":\".\\/media\\/newsSection\\/ModiJi.png\",\"url\":\"#\"}]'),
(5, 'videoSection', '[\"https:\\/\\/www.youtube.com\\/embed\\/x1Fzp_Xx7qw?si=2j2s7Z7CNOJCL_xm\",\"https:\\/\\/www.youtube.com\\/embed\\/qfN2MmAUs7U?si=UGIKSzZYSs2HgLq3\"]'),
(6, 'imgSection', '[\".\\/media\\/imageSection\\/sih-day.jpeg\",\".\\/media\\/imageSection\\/website - TECH CREED.jpg\",\".\\/media\\/imageSection\\/website - CYBER TORTOISE.jpg\",\".\\/media\\/imageSection\\/website - INNOVATION SQUAD.jpg\",\".\\/media\\/imageSection\\/website - TECH TITANS3.jpg\",\".\\/media\\/imageSection\\/website - TECHATSUKI.jpg\"]'),
(7, 'principalDesk', '{\"name\":\"Dr.C.Mathalai Sundaram M.E.,MBA.,Ph.D., Principal, NSCET\",\"content\":\"As a 21st century organization, NSCET desires to set an approach to learning that incorporates inquiry, research, analytical thinking and an ethical approach that becomes a lifetime habit. I strongly believe that education is a collaborative effort that involves professional administrators, committed teachers and motivated students. We dedicate ourselves as professional administrators in creating a dynamic education programme empowering the students in a global perspective. We are a group of diverse experiences and outlooks, committed to excellence in preparing learners for enriched opportunities worldwide. In short, learning at NSCET is a wholesome package of attitude, challenge and opportunity.\",\"image\":\".\\/media\\/principalSection\\/Principal-photo.jpg\",\"bgUrl\":\"https:\\/\\/nscet.org\\/Home_Assets\\/img\\/dummy\\/about-us.jpg\"}'),
(8, 'ugCourses', '[{\"subHeading\":\"-\",\"name\":\"B.E - Computer Science & Engineering\",\"imgUrl\":\".\\/media\\/ugCoursesSection\\/CSE.jpg\",\"date\":\"January 4, 2024\"},{\"subHeading\":\"-\",\"name\":\"B.E - Civil Engineering\",\"imgUrl\":\".\\/media\\/ugCoursesSection\\/CIVIL.jpg\",\"date\":\"January 4, 2024\"},{\"subHeading\":\"-\",\"name\":\"B.E - Electrical & Electronics Engineering\",\"imgUrl\":\".\\/media\\/ugCoursesSection\\/EEE.jpg\",\"date\":\"January 4, 2024\"},{\"subHeading\":\"-\",\"name\":\"B.E - Electronics & Communication Engineering\",\"imgUrl\":\".\\/media\\/ugCoursesSection\\/ECE.jpg\",\"date\":\"January 4, 2024\"},{\"subHeading\":\"-\",\"name\":\"B.E - Mechanical Engineering\",\"imgUrl\":\".\\/media\\/ugCoursesSection\\/MECH.jpeg\",\"date\":\"January 4, 2024\"},{\"subHeading\":\"-\",\"name\":\"B.E - Artificial Intelligence And Data Science\",\"imgUrl\":\".\\/media\\/ugCoursesSection\\/AIDS.jpg\",\"date\":\"January 4, 2024\"},{\"subHeading\":\"-\",\"name\":\"B.Tech - Information Technology\",\"imgUrl\":\".\\/media\\/ugCoursesSection\\/IT.jpg\",\"date\":\"January 4, 2024\"}]'),
(9, 'pgCourses', '[{\"subHeading\":\"-\",\"name\":\"M.E - Manufacturing Engineering\",\"imgUrl\":\".\\/media\\/pgCoursesSection\\/MANUFACTURE.jpg\",\"date\":\"January 4, 2024\"},{\"subHeading\":\"-\",\"name\":\"M.E - Structural Engineering \",\"imgUrl\":\".\\/media\\/pgCoursesSection\\/STRUCTURAL.jpg\",\"date\":\"January 4, 2024\"}]'),
(10, 'counterSection', '[]'),
(11, 'requiterSection', '[\".\\/media\\/requiterSection\\/client11.png\",\".\\/media\\/requiterSection\\/client12.jpg\",\".\\/media\\/requiterSection\\/client12.png\",\".\\/media\\/requiterSection\\/client13.png\",\".\\/media\\/requiterSection\\/client14.png\",\".\\/media\\/requiterSection\\/client15.png\",\".\\/media\\/requiterSection\\/client16.png\"]'),
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
