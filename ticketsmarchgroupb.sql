-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2019 at 09:10 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticketsmarchgroupb`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(50) NOT NULL,
  `ename` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `elocation` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `eplace` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ecategory` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pfrom` smallint(6) NOT NULL,
  `pto` smallint(6) NOT NULL,
  `dfrom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dto` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `imgs` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `ename`, `elocation`, `eplace`, `ecategory`, `pfrom`, `pto`, `dfrom`, `dto`, `img`, `imgs`) VALUES
(1, 'CIRQUE DU SOLEIL - BAZZAR', 'New Cairo', 'Hyde Park', 'CIRCUS', 650, 3700, '1 - October - 2019', '6 - October - 2019', 'Cirqueslidersepoct.jpg', 'cdsthumbhtr.jpg'),
(2, 'Elli Alehom El Ein', 'New Cairo', 'Cairo Festival City', 'ART & THEATER', 100, 350, '3-October-2019', '4-October-2019', 'bahgagaaaaplayslider.jpg', 'Bahgagaplaythumb12.jpg'),
(3, 'Theater Misr - Ashraf Abdel Baky', 'Cairo', 'GRAND NILE TOWER', 'COMEDY', 225, 400, '3-October-2019', '5-October-2019', 'TheaterM2017-1140.jpg', 'Theater-Misr-Logo-370x260.jpg'),
(4, 'King Lear', 'New Cairo', 'Cairo Festival City', 'ART & THEATER', 150, 750, '3-October-2019', '4-October-2020', 'SliderKingSeptoct.jpg', 'thumbkingoct.jpg'),
(5, 'Pacha Ibiza On Tour', 'Hurghada', 'Steigenberger ALDAU Resort', 'FESTIVALS', 500, 1000, '5-October-2019', '5-October-2019', 'SliderPachaIbizaa2019.jpg', 'PachaThumb1.jpg'),
(6, 'Cairo Jazz Festival', 'CAIRO', 'AUC Tahrir CAMPUS', 'JAZZ & BLUES', 200, 675, '10-October-2019', '12-October-2019', 'CJF2019Slider.jpg', 'CJF2019Thumb.jpg'),
(7, 'Cloture de lamour', 'Cairo', 'VENUE AUC Falaki Theater', 'ART & THEATER', 50, 50, '9-October-2019', '13-October-2019', 'SliderNehytel7ob.jpg', 'ThumbNehytEl7ob.jpg'),
(8, 'Garima Fi El Maadi', 'Cairo', 'Nagib El Rihany Theater', 'ART & THEATER', 100, 200, '10-October-2019', '10-October-2019', 'GarimaSlider.jpg', 'Garima thumb12.jpg'),
(9, 'Omar Khairat', 'New Cairo', 'New Open-Air Theater-Cairo Festival City', 'CLASSICS', 110, 110, '12-October-2019', '12-October-2019', 'khairat-new-marq-slider.jpg', 'khairatnewmarq.jpg'),
(10, 'The Metropolitan OPERA Live : Turandot', 'New Cairo', 'AUC NEW CAMPUS', 'BALLET/OPERA', 110, 110, '12-October-2019', '12-October-2019', 'TurandotSlider.jpg', 'TurandotThumb.jpg'),
(11, 'Mohamed Mounir', 'El Shorouk City', 'Heliopolis Sporting Club - El Shorouk City', 'ARABIC EGYPTIAN', 250, 250, '18-October-2019', '18-October-2019', 'SliderMounirOct2019.jpg', 'ThumbMounirOct2019.jpg'),
(12, 'BiznEX19 -The International Business and Investment Expo - Egypt', 'Cairo', 'Hall 1 - Cairo International Convention Centre', 'SEMINARS & FAIRS', 250, 450, '7-November-2019', '7-November-2019', 'BiznexxxSlider.jpg', 'BiznexxxxThumb12.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
