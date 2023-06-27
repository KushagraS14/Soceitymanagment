-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2023 at 12:09 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `this_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `name` varchar(50) NOT NULL,
  `rollno` int(20) NOT NULL,
  `userId` varchar(40) NOT NULL,
  `year` int(10) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `society` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `about_yourself` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`name`, `rollno`, `userId`, `year`, `branch`, `society`, `phone`, `about_yourself`) VALUES
('ritu bansal', 30, 'ritu@gmail.com', 2, 'csbs', 'Thapar Mathematical ', '1230417123', '  good'),
('Money Bansal', 100, 'mbansal_be19@thapar.edu', 2, 'csbs', 'Fine Arts and Phogra', '1230417123', '  very good.'),
('Ritu bansal', 101918004, 'mbansal_be19@thapar.edu', 2, 'csbs', 'Thapar Movie Club', '1230417876', '  good at watching movies.'),
('yogesh bansal', 24, 'yogesh@gmail.com', 2, 'CSBS', 'Entrepreneurship Dev', '9501230416', '  nice at doing work.'),
('kushagra Srivastaavaa', 101918051, 'kushagra@gmail.com', 4, 'COE', 'Entrepreneurship Dev', '1234567890', '  only hard word, no smart work.');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `sno` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `society` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `time` time NOT NULL,
  `place` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`sno`, `name`, `society`, `start_date`, `end_date`, `time`, `place`) VALUES
(18, 'adventure', 'Thapar Adventure club ', '2023-05-03', '2023-05-04', '09:45:00', 'library'),
(19, 'maths', 'Thapar Mathematical Society', '2023-05-01', '2023-05-01', '08:45:00', 'hostel-M'),
(21, 'movie-kgf3', 'Thapar Movie Club', '2023-05-19', '2023-05-19', '09:47:00', 'oat'),
(22, 'virsa_culture', 'Fine Arts and Phography Society', '2023-05-19', '2023-05-21', '09:48:00', 'juggy'),
(23, 'badminton_match', 'Thapar Adventure club ', '2023-05-18', '2023-05-18', '10:37:00', 'badminton_court'),
(24, 'Carry on jatta 3', 'Thapar Movie Club', '2023-05-11', '2023-05-19', '19:50:00', 'library');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `sno` int(20) NOT NULL,
  `rollno` int(15) NOT NULL,
  `name` varchar(40) NOT NULL,
  `userId` varchar(40) NOT NULL,
  `type` varchar(30) NOT NULL,
  `society` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`sno`, `rollno`, `name`, `userId`, `type`, `society`) VALUES
(14, 101918005, 'Money Bansal', 'mbansal_be19@thapar.edu', 'President', 'Thapar Adventure club '),
(16, 101918050, 'kabir watts', 'kwatts_be19@thapar.edu', 'Co-member', 'Entrepreneurship Development Cell (EDC)'),
(17, 101918001, 'shrey seth', 'shreyseth@gmail.com', 'Co-member', 'Thapar Mathematical Society'),
(19, 101918005, 'kabir watts', 'kwatts_be19@thapar.edu', 'President', 'TEdx Tiet'),
(21, 101918014, 'ritu bansal', 'ritu@gmail.com', 'Co-member', 'Fine Arts and Phography Society'),
(22, 101918050, 'kabir watts', 'person@thapar.edu', 'President', 'Fine Arts and Phography Society'),
(23, 101918090, 'money', 'mbansal_be19@thapar.edu', 'Mentor', 'Fine Arts and Phography Society'),
(24, 101918034, 'ritu bansal', 'ritu@gmail.com', 'President', 'Thapar Movie Club'),
(25, 344, 'yogesh bansal', 'yogesh@gmail.com', 'Co-member', 'Thapar Mathematical Society');

-- --------------------------------------------------------

--
-- Table structure for table `society`
--

CREATE TABLE `society` (
  `sno` int(20) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `about` varchar(1000) NOT NULL,
  `image` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `society`
--

INSERT INTO `society` (`sno`, `s_name`, `about`, `image`, `link`) VALUES
(4, 'Thapar Adventure club ', ' A forum for adventure enthusiasts, trekkers, climbers and armchair mountaineers in the student community.\r\n    It works to develop the spirit of adventure in Thaparians. While the stock activities are trekking, rock climbing and mountain cycling,\r\n    the adventure club has also organized sking\r\n    and river rafting sporadically.', 'images/adventure.png', 'https://adventureclubthapar.netlify.app/'),
(5, 'Thapar Mathematical Society', '  Thapar Mathematical Society promote mathematics and its applications among the young people and in society by providing them a platform for interaction through expert talks, events, activities and workshops.\r\n             \r\n              ', 'images/maths.jfif', ''),
(7, 'Fine Arts and Phography Society', '\r\n        FAPS is grooming the engineering and management graduates of TIET to converse through the medium of art. FAPS is a vibrant society having a tradition of mentoring the youngsters through workshops on Sketching, \r\n        Painting, Photography, Calligraphy and Photoshop.', 'images/faps.jfif', 'https://sites.google.com/thapar.edu/faps/'),
(9, 'CREATIVE COMPUTING SOCIETY', 'Creative Computing Society strives to encourage students to develop\r\n    an analytical temperament in the field of technology and innovation. \r\n    The society conducts workshops and coding competitions on a regular basis, \r\n    thus acting as a platform for students to showcase and nurture their technical skill \r\n    to discover their best lying potential. Over the years the society has had numerous pivotal\r\n    collaborations with organizations like Google Developers Group, Women Techmaker, Mo', 'images/ccs.png', 'https://sites.google.com/thapar.edu/ccs'),
(12, 'Thapar Movie Club', 'Thapar Movie Club aims to promote movie making on the academic, social and cultural subjects that impact the society. Inviting famous personalities related to movie making for interaction with TIET community is the other objective of the club.', 'images/movie.jfif', 'https://sites.google.com/thapar.edu/thaparmovieclub/home'),
(15, 'Entrepreneurship Development Cell (EDC)', ' EDC aims at developing the spirit of entrepreneurship among the students of Thapar Institute of Engineering and Technology. It not only ignites the minds but also nurtures the ideas of students .\r\n                                                     EDC is committed to build a strong platform for budding entrepreneurs as a career, as a path to success, as a journey of wisdom.\r\n                                                    ', 'images/edc.jpg', 'https://sites.google.com/thapar.edu/edctiet'),
(16, 'Thapar Amateur Astronomers Society (TAAS)', 'TAAS explores the cosmos with science and engineering with the objective of cultivating scientific temperament, nourishing inquisitive young minds and encouraging innovation in those who do not get a chance in the daily load of the engineering course. This society creates a platform for students who are interested in applying their knowledge and skills in the field of Astronomy\r\n                                                                         and opens up opportunities for students willing to work as professionals in the subject.', 'images/taas.png', 'https://sites.google.com/thapar.edu/taas/home'),
(17, 'Paryawaran Welfare Society', 'In the ongoing era, our fragile earth needs acute attention for its prevalence, PWS endures to maintain the biodiversity, conservation of water, air and energy resources.', 'images/plant.jfif', 'https://sites.google.com/thapar.edu/pwsthapar');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `password`, `dt`) VALUES
('arun@gmail.com', 'Mpar1234', '2023-05-15 23:34:16'),
('bansalmoney167@gmail.com', 'Mpar0108', '2023-05-12 11:52:08'),
('kwatts_be19@thapar.edu', 'Mpar0108@', '2023-05-12 12:14:10'),
('mbansal_be19@thapar.edu', 'Mpar0108@', '2023-05-16 16:58:03'),
('money@gmail.com', 'Mpar1234@', '2023-05-15 23:27:48'),
('ritu@gmail.com', 'mylifeisloveA7', '2023-05-16 17:07:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`,`password`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `society`
--
ALTER TABLE `society`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`,`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `sno` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `sno` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `society`
--
ALTER TABLE `society`
  MODIFY `sno` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
