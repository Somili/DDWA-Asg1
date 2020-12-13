-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 11, 2020 at 09:51 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chenshiyu_ddwa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `office` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `password`, `office`) VALUES
(1, 'Admin', 'admin', 'General Office');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Programming'),
(2, 'Music'),
(3, 'Art'),
(4, 'Film and Media');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `lecturer_id` int(11) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `date_joined` datetime NOT NULL,
  `office_location` varchar(200) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`lecturer_id`, `full_name`, `date_joined`, `office_location`, `contact_no`, `project_id`, `password`) VALUES
(1, 'Mary Tan', '2010-12-01 00:00:00', 'School of IT', 90908877, 1, 'abc123'),
(2, 'Katelyn Tan', '2010-12-01 00:00:00', 'School of Science', 98765432, 2, 'abc123'),
(3, 'Lexa Lim', '2014-08-09 00:00:00', 'School of Math', 90879065, 3, 'abc123'),
(4, 'Johanna Mason', '2010-12-01 00:00:00', 'School of Film and Media', 96948877, 4, 'abc123'),
(5, 'Clarke Chan', '2014-08-09 00:00:00', 'School of Math', 90534724, 5, 'abc123'),
(6, 'Jason Chen', '2014-08-09 00:00:00', 'School of IT', 90879065, 6, 'abc123'),
(7, 'Jane Lim', '2010-12-03 00:00:00', 'School of Film and Media', 90876467, 7, 'abc123'),
(8, 'Joyce Lim', '2010-12-03 00:00:00', 'School of Film and Media', 82173232, 7, 'abc123'),
(9, 'Katara Watt', '2010-12-03 00:00:00', 'School of Film and Media', 82774456, 2, 'abc123');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer_project`
--

CREATE TABLE `lecturer_project` (
  `lecturer_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `joinDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lecturer_project`
--

INSERT INTO `lecturer_project` (`lecturer_id`, `project_id`, `joinDate`) VALUES
(1, 1, '2020-11-18 07:00:00'),
(2, 2, '2020-11-26 07:00:00'),
(3, 3, '0020-11-22 07:00:00'),
(4, 4, '2020-11-13 07:00:00'),
(5, 5, '2020-11-19 07:00:00'),
(6, 6, '2020-11-26 07:00:00'),
(7, 7, '2020-11-19 07:00:00'),
(8, 7, '2020-11-19 07:00:00'),
(9, 2, '2020-11-26 07:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `notebook`
--

CREATE TABLE `notebook` (
  `serial_number` varchar(200) NOT NULL,
  `make` varchar(200) NOT NULL,
  `model` varchar(200) NOT NULL,
  `processor` varchar(200) NOT NULL,
  `hard_disk_capacity` int(11) NOT NULL,
  `amount_of_RAM` int(11) NOT NULL,
  `operating_system` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notebook`
--

INSERT INTO `notebook` (`serial_number`, `make`, `model`, `processor`, `hard_disk_capacity`, `amount_of_RAM`, `operating_system`) VALUES
('er3234e', 'Oliviu', 'ats_3234', 'Juno', 800, 12, 'Windows 10'),
('io8234i', 'Winwin', 'ano_8234', 'Dream', 500, 10, 'Windows 10'),
('op9234o', 'Pams', 'apu_9234', 'Aginsa', 600, 8, 'Windows 10'),
('qw1234q', 'Pavillion', 'aus_1234', 'Aluto', 500, 10, 'Windows 10'),
('rt4234r', 'Loona', 'ato_4234', 'Fourleaf', 1000, 15, 'Windows 10'),
('ty5234t', 'Orbit', 'ays_5234', 'FourSeasons', 1000, 15, 'Windows 10'),
('ui7234u', 'Aang', 'aey_7234', 'AgniKai', 1000, 12, 'Windows 10'),
('we2234w', 'Pamovion', 'aos_2234', 'Pluno', 300, 8, 'Windows 10'),
('yu6234y', 'Avatar', 'ang_6234', 'FireNation', 1000, 15, 'Windows 10');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `short_description` varchar(200) NOT NULL,
  `start_date` datetime NOT NULL,
  `completion_date` datetime NOT NULL,
  `budget` int(11) NOT NULL,
  `company_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `title`, `short_description`, `start_date`, `completion_date`, `budget`, `company_name`) VALUES
(1, '3D Modelling', 'Model an indoors and outdoors of the theme that you chose', '2020-11-18 07:00:00', '2020-12-18 23:00:00', 1000, 'Unite'),
(2, '3D Effects', 'Make 5 Game Effects', '2020-11-26 07:00:00', '2020-12-27 23:00:00', 100, 'Unite'),
(3, '3D Design', 'Design Concept Arts for your 3D modelling project', '2020-11-22 07:00:00', '2020-12-23 23:00:00', 50, 'Unite'),
(4, 'Event Managing', 'Managing the upcoming school events', '2020-11-13 07:00:00', '2020-12-26 23:00:00', 200, 'Unite'),
(5, 'Music Design', 'Write and produce music for the 3D game team', '2020-11-19 07:00:00', '2020-12-20 23:00:00', 200, 'Unite'),
(6, 'Script Management', 'Write and manage the script for the game', '2020-11-19 07:00:00', '2020-12-20 23:00:00', 100, 'Unite'),
(7, 'Advertising Team', 'Plan and advertise for the game', '2020-11-14 07:00:00', '2020-12-31 23:00:00', 2000, 'Unite');

-- --------------------------------------------------------

--
-- Table structure for table `software`
--

CREATE TABLE `software` (
  `ID` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `publisher` varchar(300) NOT NULL,
  `version` varchar(50) NOT NULL,
  `price_per_license` decimal(10,0) NOT NULL,
  `no_of_license` int(11) NOT NULL,
  `date_purchase` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `software`
--

INSERT INTO `software` (`ID`, `category_id`, `title`, `publisher`, `version`, `price_per_license`, `no_of_license`, `date_purchase`) VALUES
(1, 1, 'HTML Support', 'IBO', '1.1', '101', 1, '2020-12-01 00:00:00'),
(2, 3, 'Photoshop', 'Adobe', '1.12', '315', 2, '2020-12-25 00:00:00'),
(3, 4, 'After Effects', 'Adobe', '1.14', '200', 3, '2020-12-01 00:00:00'),
(4, 2, 'Audition', 'Adobe', '1.2', '200', 3, '2020-12-01 00:00:00'),
(5, 3, 'Illustrator', 'Adobe', '1.12', '315', 2, '2020-12-09 00:00:00'),
(6, 1, 'PHP Support', 'IBO', '1.16', '100', 1, '2020-12-25 00:00:00'),
(7, 3, 'Art support', 'Jinarino', '1.15', '50', 1, '2020-12-16 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `software_installed`
--

CREATE TABLE `software_installed` (
  `ID` int(11) NOT NULL,
  `serial_number` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `software_installed`
--

INSERT INTO `software_installed` (`ID`, `serial_number`) VALUES
(1, 'er3234e'),
(7, 'er3234e'),
(2, 'qw1234q'),
(6, 'rt4234r'),
(3, 'ui7234u'),
(5, 'we2234w'),
(4, 'yu6234y');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `school_name` varchar(200) NOT NULL,
  `year_enrolled` datetime NOT NULL,
  `serial_number` varchar(200) NOT NULL,
  `project_id` int(11) NOT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `full_name`, `contact_no`, `school_name`, `year_enrolled`, `serial_number`, `project_id`, `password`) VALUES
(1, 'Azula Ang', 91239234, 'Ngee Ann Polytechnic', '2017-04-12 07:00:00', 'we2234w', 1, 'abc123'),
(2, 'Joana Lim', 92374672, 'Ngee Ann Polytechnic', '2017-04-12 07:00:00', 'ty5234t', 7, 'abc123'),
(3, 'Kitty Chen', 92374672, 'Ngee Ann Polytechnic', '2017-04-12 07:00:00', 'yu6234y', 3, 'abc123'),
(4, 'Mina Tan', 98345333, 'Ngee Ann Polytechnic', '2017-04-29 07:00:00', 'ui7234u', 6, 'abc123'),
(5, 'Jane Tan', 97733845, 'Ngee Ann Polytechnic', '2017-04-28 07:00:00', 'er3234e', 2, 'abc123'),
(6, 'Jane Tan', 97733845, 'Ngee Ann Polytechnic', '2017-04-28 07:00:00', 'qw1234q', 4, 'abc123'),
(7, 'Lina Lim', 96235644, 'Ngee Ann Polytechnic', '2017-04-28 07:00:00', 'rt4234r', 5, 'abc123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`lecturer_id`),
  ADD KEY `fk_project_l_id` (`project_id`);

--
-- Indexes for table `lecturer_project`
--
ALTER TABLE `lecturer_project`
  ADD PRIMARY KEY (`lecturer_id`,`project_id`),
  ADD KEY `fk_lecturer_project_id` (`project_id`);

--
-- Indexes for table `notebook`
--
ALTER TABLE `notebook`
  ADD PRIMARY KEY (`serial_number`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_category_id` (`category_id`);

--
-- Indexes for table `software_installed`
--
ALTER TABLE `software_installed`
  ADD PRIMARY KEY (`ID`,`serial_number`),
  ADD KEY `fk_notebook_serial` (`serial_number`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `fk_serial_number` (`serial_number`),
  ADD KEY `fk_project_id` (`project_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lecturer`
--
ALTER TABLE `lecturer`
  MODIFY `lecturer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `software`
--
ALTER TABLE `software`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD CONSTRAINT `fk_project_l_id` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`);

--
-- Constraints for table `lecturer_project`
--
ALTER TABLE `lecturer_project`
  ADD CONSTRAINT `fk_lecturer_project_id` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`),
  ADD CONSTRAINT `fk_lecturer_project_lecturer_id` FOREIGN KEY (`lecturer_id`) REFERENCES `lecturer` (`lecturer_id`);

--
-- Constraints for table `software`
--
ALTER TABLE `software`
  ADD CONSTRAINT `fk_category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);

--
-- Constraints for table `software_installed`
--
ALTER TABLE `software_installed`
  ADD CONSTRAINT `fk_notebook_serial` FOREIGN KEY (`serial_number`) REFERENCES `notebook` (`serial_number`),
  ADD CONSTRAINT `fk_software_id` FOREIGN KEY (`ID`) REFERENCES `software` (`ID`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `fk_project_id` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`),
  ADD CONSTRAINT `fk_serial_number` FOREIGN KEY (`serial_number`) REFERENCES `notebook` (`serial_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
