-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2023 at 11:55 AM
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
-- Database: `uiboinfo_matrimony`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `kattam` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `kattam`) VALUES
(1, 'Aswath', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', '');

-- --------------------------------------------------------

--
-- Table structure for table `intrest`
--

CREATE TABLE `intrest` (
  `id` int(11) NOT NULL,
  `my_id` text CHARACTER SET utf8 NOT NULL,
  `my_number` text CHARACTER SET utf8 NOT NULL,
  `my_name` text NOT NULL,
  `intrest_id` text CHARACTER SET utf8 NOT NULL,
  `status` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intrest`
--

INSERT INTO `intrest` (`id`, `my_id`, `my_number`, `my_name`, `intrest_id`, `status`) VALUES
(206, '45', '8838578134', 'Murugesh S', '9876543210', 'Verified'),
(209, '45', '8838578134', 'Murugesh', '8903083406', 'Verified'),
(212, '56', '8903083406', 'priya', '8610813887', 'Unverified'),
(217, '55', '8610813887', 'Aswath', '8903083406', 'Verified'),
(218, '45', '8838578134', 'Murugesh', '123', 'Verified'),
(219, '45', '8838578134', 'Murugesh', '321', 'Verified'),
(220, '55', '8610813887', 'Aswath', '321', 'Verified');

-- --------------------------------------------------------

--
-- Table structure for table `natchathira`
--

CREATE TABLE `natchathira` (
  `id` int(11) NOT NULL,
  `gender` text CHARACTER SET utf8 NOT NULL,
  `natchathira` text CHARACTER SET utf8 NOT NULL,
  `porutham` text CHARACTER SET utf8 NOT NULL,
  `porutham1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `natchathira`
--

INSERT INTO `natchathira` (`id`, `gender`, `natchathira`, `porutham`, `porutham1`) VALUES
(1, 'male', 'அஸ்வனி', 'பரணி', 'Parani'),
(2, 'male', 'அஸ்வனி', 'புனர்பூசம்', ''),
(3, 'male', 'அஸ்வனி', 'மிருகசீரிஷம்', ''),
(4, 'male', 'அஸ்வனி', 'பூரம்', ''),
(5, 'female', 'அஸ்வனி', 'பூசம்', ''),
(6, 'female', 'அஸ்வனி', 'பரணி', 'Parani'),
(7, 'female', 'அஸ்வனி', 'திருவாதிரை', ''),
(8, 'female', 'அஸ்வனி', 'பூராடம்', ''),
(9, 'female', 'அஸ்வனி', 'திருவோணம்', ''),
(10, 'female', 'அஸ்வனி', 'சதயம்', ''),
(11, 'male', 'பரணி', 'ரோகிணி', ''),
(12, 'male', 'பரணி', 'சுவாதி', ''),
(13, 'male', 'பரணி', 'உத்திராடம் 2', ''),
(14, 'male', 'பரணி', 'உத்திராடம் 3', ''),
(15, 'male', 'பரணி', 'உத்திராடம் 4', ''),
(16, 'male', 'பரணி', 'திருவோணம்', ''),
(17, 'male', 'பரணி', 'அஸ்வனி', 'Ashwani'),
(18, 'female', 'பரணி', 'புனர்பூசம்', ''),
(19, 'female', 'பரணி', 'உத்திராடம்', ''),
(20, 'female', 'பரணி', 'ரேவதி', ''),
(21, 'female', 'பரணி', 'அஸ்வனி', 'Ashwani'),
(22, 'male', 'கார்த்திகை 1 ம் பாதம்', 'சித்திரை 3', ''),
(23, 'male', 'கார்த்திகை 1 ம் பாதம்', 'சித்திரை 4', ''),
(24, 'male', 'கார்த்திகை 1 ம் பாதம்', 'அவிட்டம் 1', ''),
(25, 'male', 'கார்த்திகை 1 ம் பாதம்', 'அவிட்டம் 2', ''),
(26, 'female', 'கார்த்திகை 1 ம் பாதம்', 'சதயம்', ''),
(27, 'male', 'கார்த்திகை 2, 3, 4 ம் பாதங்கள்', 'அஸ்தம்', ''),
(28, 'male', 'கார்த்திகை 2, 3, 4 ம் பாதங்கள்', 'சித்திரை 1', ''),
(29, 'male', 'கார்த்திகை 2, 3, 4 ம் பாதங்கள்', 'சித்திரை 2', ''),
(30, 'male', 'கார்த்திகை 2, 3, 4 ம் பாதங்கள்', 'கேட்டை', ''),
(31, 'male', 'கார்த்திகை 2, 3, 4 ம் பாதங்கள்', 'அவிட்டம் 3', ''),
(32, 'male', 'கார்த்திகை 2, 3, 4 ம் பாதங்கள்', 'அவிட்டம் 4', ''),
(33, 'female', 'கார்த்திகை 2, 3, 4 ம் பாதங்கள்', 'சதயம்', ''),
(34, 'male', 'ரோகிணி', 'மிருகசீரிஷம் 1', ''),
(35, 'male', 'ரோகிணி', 'மிருகசீரிஷம் 2', ''),
(36, 'male', 'ரோகிணி', 'உத்திரம்', ''),
(37, 'male', 'ரோகிணி', 'அனுஷம்', ''),
(38, 'male', 'ரோகிணி', 'உத்திரட்டாதி', ''),
(39, 'female', 'ரோகிணி', 'மிருகசீரிஷம் 1', ''),
(40, 'female', 'ரோகிணி', 'மிருகசீரிஷம் 2', ''),
(41, 'female', 'ரோகிணி', 'புனர்பூசம் 4', ''),
(42, 'female', 'ரோகிணி', 'உத்திரம் 1', ''),
(43, 'female', 'ரோகிணி', 'பூரட்டாதி', ''),
(44, 'female', 'ரோகிணி', 'பரணி', ''),
(45, 'male', 'மிருகசீரிஷம் 1, 2 ம் பாதங்கள்', 'புனர்பூசம் 4', ''),
(46, 'male', 'மிருகசீரிஷம் 1, 2 ம் பாதங்கள்', 'அஸ்தம்', ''),
(47, 'male', 'மிருகசீரிஷம் 1, 2 ம் பாதங்கள்', 'பூரட்டாதி', ''),
(48, 'male', 'மிருகசீரிஷம் 1, 2 ம் பாதங்கள்', 'ரேவதி', ''),
(49, 'male', 'மிருகசீரிஷம் 1, 2 ம் பாதங்கள்', 'ரோகிணி', ''),
(50, 'female', 'மிருகசீரிஷம் 1, 2 ம் பாதங்கள்', 'உத்திரம் 1', ''),
(51, 'female', 'மிருகசீரிஷம் 1, 2 ம் பாதங்கள்', 'உத்திராடம் 2', ''),
(52, 'female', 'மிருகசீரிஷம் 1, 2 ம் பாதங்கள்', 'உத்திராடம் 3', ''),
(53, 'female', 'மிருகசீரிஷம் 1, 2 ம் பாதங்கள்', 'உத்திராடம் 4', ''),
(54, 'female', 'மிருகசீரிஷம் 1, 2 ம் பாதங்கள்', 'திருவோணம்', ''),
(55, 'female', 'மிருகசீரிஷம் 1, 2 ம் பாதங்கள்', 'சதயம்', ''),
(56, 'female', 'மிருகசீரிஷம் 1, 2 ம் பாதங்கள்', 'அஸ்வனி', ''),
(57, 'female', 'மிருகசீரிஷம் 1, 2 ம் பாதங்கள்', 'ரோகிணி', ''),
(58, 'male', 'மிருகசீரிஷம் 3, 4 ம் பாதங்கள்', 'திருவாதிரை', ''),
(59, 'male', 'மிருகசீரிஷம் 3, 4 ம் பாதங்கள்', 'புனர்பூசம்', ''),
(60, 'male', 'மிருகசீரிஷம் 3, 4 ம் பாதங்கள்', 'அஸ்தம்', ''),
(61, 'male', 'மிருகசீரிஷம் 3, 4 ம் பாதங்கள்', 'சுவாதி', ''),
(62, 'male', 'மிருகசீரிஷம் 3, 4 ம் பாதங்கள்', 'பூரட்டாதி 4', ''),
(63, 'male', 'மிருகசீரிஷம் 3, 4 ம் பாதங்கள்', 'ரேவதி', ''),
(64, 'female', 'மிருகசீரிஷம் 3, 4 ம் பாதங்கள்', 'திருவாதிரை', ''),
(65, 'female', 'மிருகசீரிஷம் 3, 4 ம் பாதங்கள்', 'உத்திரம்', ''),
(66, 'female', 'மிருகசீரிஷம் 3, 4 ம் பாதங்கள்', 'அஸ்தம்', ''),
(67, 'female', 'மிருகசீரிஷம் 3, 4 ம் பாதங்கள்', 'மூலம்', ''),
(68, 'female', 'மிருகசீரிஷம் 3, 4 ம் பாதங்கள்', 'உத்திராடம் 2', ''),
(69, 'female', 'மிருகசீரிஷம் 3, 4 ம் பாதங்கள்', 'உத்திராடம் 3', ''),
(70, 'female', 'மிருகசீரிஷம் 3, 4 ம் பாதங்கள்', 'உத்திராடம் 4', ''),
(71, 'female', 'மிருகசீரிஷம் 3, 4 ம் பாதங்கள்', 'சதயம்', ''),
(72, 'female', 'மிருகசீரிஷம் 3, 4 ம் பாதங்கள்', 'பரணி', ''),
(73, 'male', 'திருவாதிரை', 'பூசம்', ''),
(74, 'male', 'திருவாதிரை', 'உத்திராடம் 1', ''),
(75, 'male', 'திருவாதிரை', 'உத்திரட்டாதி', ''),
(76, 'male', 'திருவாதிரை', 'மிருகசீரிஷம் 3', ''),
(77, 'male', 'திருவாதிரை', 'மிருகசீரிஷம் 4', ''),
(78, 'female', 'திருவாதிரை', 'பூரம்', ''),
(79, 'female', 'திருவாதிரை', 'பூராடம்', ''),
(80, 'female', 'திருவாதிரை', 'பரணி', ''),
(81, 'female', 'திருவாதிரை', 'மிருகசீரிஷம் 3', ''),
(82, 'female', 'திருவாதிரை', 'மிருகசீரிஷம் 4', ''),
(83, 'male', 'புனர்பூசம் 1, 2, 3 ம் பாதங்கள்', 'பூசம்', ''),
(84, 'male', 'புனர்பூசம் 1, 2, 3 ம் பாதங்கள்', 'சுவாதி', ''),
(85, 'male', 'புனர்பூசம் 1, 2, 3 ம் பாதங்கள்', 'பூராடம்', ''),
(86, 'male', 'புனர்பூசம் 1, 2, 3 ம் பாதங்கள்', 'உத்திரட்டாதி', ''),
(87, 'male', 'புனர்பூசம் 1, 2, 3 ம் பாதங்கள்', 'ரேவதி', ''),
(88, 'female', 'புனர்பூசம் 1, 2, 3 ம் பாதங்கள்', 'அவிட்டம் 3', ''),
(89, 'female', 'புனர்பூசம் 1, 2, 3 ம் பாதங்கள்', 'அவிட்டம் 4', ''),
(90, 'female', 'புனர்பூசம் 1, 2, 3 ம் பாதங்கள்', 'உத்திரட்டாதி', ''),
(91, 'female', 'புனர்பூசம் 1, 2, 3 ம் பாதங்கள்', 'மிருகசீரிஷம் 3', ''),
(92, 'female', 'புனர்பூசம் 1, 2, 3 ம் பாதங்கள்', 'மிருகசீரிஷம் 4', ''),
(93, 'male', 'புனர்பூசம் 4 ம் பாதம்', 'பூசம்', ''),
(94, 'male', 'புனர்பூசம் 4 ம் பாதம்', 'அனுஷம்', ''),
(95, 'male', 'புனர்பூசம் 4 ம் பாதம்', 'பரணி', ''),
(96, 'male', 'புனர்பூசம் 4 ம் பாதம்', 'ரோகிணி', ''),
(97, 'female', 'புனர்பூசம் 4 ம் பாதம்', 'பூசம்', ''),
(98, 'female', 'புனர்பூசம் 4 ம் பாதம்', 'சுவாதி', ''),
(99, 'female', 'புனர்பூசம் 4 ம் பாதம்', 'அவிட்டம் 1', ''),
(100, 'female', 'புனர்பூசம் 4 ம் பாதம்', 'அவிட்டம் 2', ''),
(101, 'female', 'புனர்பூசம் 4 ம் பாதம்', 'உத்திரட்டாதி', ''),
(102, 'female', 'புனர்பூசம் 4 ம் பாதம்', 'மிருகசீரிஷம்', ''),
(103, 'male', 'பூசம்', 'உத்திரம்', ''),
(104, 'male', 'பூசம்', 'அஸ்வனி', ''),
(105, 'male', 'பூசம்', 'புனர்பூசம் 4', ''),
(106, 'female', 'பூசம்', 'ஆயில்யம்', ''),
(107, 'female', 'பூசம்', 'அஸ்தம்', ''),
(108, 'female', 'பூசம்', 'சுவாதி', ''),
(109, 'female', 'பூசம்', 'விசாகம் 1', ''),
(110, 'female', 'பூசம்', 'விசாகம் 2', ''),
(111, 'female', 'பூசம்', 'விசாகம் 3', ''),
(112, 'female', 'பூசம்', 'பூரட்டாதி 4', ''),
(113, 'female', 'பூசம்', 'ரேவதி', ''),
(114, 'female', 'பூசம்', 'திருவாதிரை', ''),
(115, 'female', 'பூசம்', 'புனர்பூசம்', ''),
(116, 'male', 'ஆயில்யம்', 'அஸ்தம்', ''),
(117, 'male', 'ஆயில்யம்', 'அனுஷம்', ''),
(118, 'male', 'ஆயில்யம்', 'பூசம்', ''),
(119, 'female', 'ஆயில்யம்', 'சித்திரை', ''),
(120, 'female', 'ஆயில்யம்', 'அவிட்டம் 1', ''),
(121, 'female', 'ஆயில்யம்', 'அவிட்டம் 2', ''),
(122, 'male', 'மகம்', 'சித்திரை', ''),
(123, 'male', 'மகம்', 'அவிட்டம் 3', ''),
(124, 'male', 'மகம்', 'அவிட்டம் 4', ''),
(125, 'female', 'மகம்', 'சதயம்', ''),
(126, 'male', 'பூரம்', 'உத்திரம்', ''),
(127, 'male', 'பூரம்', 'அஸ்தம்', ''),
(128, 'male', 'பூரம்', 'சுவாதி', ''),
(129, 'male', 'பூரம்', 'உத்திராடம் 1', ''),
(130, 'male', 'பூரம்', 'திருவோணம்', ''),
(131, 'female', 'பூரம்', 'உத்திரம் 1', ''),
(132, 'female', 'பூரம்', 'பூரட்டாதி 1', ''),
(133, 'female', 'பூரம்', 'பூரட்டாதி 2', ''),
(134, 'female', 'பூரம்', 'பூரட்டாதி 3', ''),
(135, 'female', 'பூரம்', 'அஸ்வனி', ''),
(136, 'male', 'உத்திரம் 1 ம் பாதம்', 'பூராடம்', ''),
(137, 'male', 'உத்திரம் 1 ம் பாதம்', 'ரோகிணி', ''),
(138, 'male', 'உத்திரம் 1 ம் பாதம்', 'மிருகசீரிஷம்', ''),
(139, 'male', 'உத்திரம் 1 ம் பாதம்', 'பூரம்', ''),
(140, 'female', 'உத்திரம் 1 ம் பாதம்', 'சுவாதி', ''),
(141, 'female', 'உத்திரம் 1 ம் பாதம்', 'அனுஷம்', ''),
(142, 'female', 'உத்திரம் 1 ம் பாதம்', 'பரணி', ''),
(143, 'female', 'உத்திரம் 1 ம் பாதம்', 'ரோகிணி', ''),
(144, 'female', 'உத்திரம் 1 ம் பாதம்', 'பூசம்', ''),
(145, 'female', 'உத்திரம் 1 ம் பாதம்', 'பூரம்', ''),
(146, 'male', 'உத்திரம் 2, 3, 4 ம் பாதங்கள்', 'பூராடம்', ''),
(147, 'male', 'உத்திரம் 2, 3, 4 ம் பாதங்கள்', 'திருவோணம்', ''),
(148, 'male', 'உத்திரம் 2, 3, 4 ம் பாதங்கள்', 'ரேவதி', ''),
(149, 'female', 'உத்திரம் 2, 3, 4 ம் பாதங்கள்', 'அனுஷம்', ''),
(150, 'female', 'உத்திரம் 2, 3, 4 ம் பாதங்கள்', 'பூராடம்', ''),
(151, 'female', 'உத்திரம் 2, 3, 4 ம் பாதங்கள்', 'ரோகிணி', ''),
(152, 'female', 'உத்திரம் 2, 3, 4 ம் பாதங்கள்', 'பூசம்', ''),
(153, 'female', 'உத்திரம் 2, 3, 4 ம் பாதங்கள்', 'பூரம்', ''),
(154, 'male', 'அஸ்தம்', 'உத்திராடம்', ''),
(155, 'male', 'அஸ்தம்', 'உத்திரட்டாதி', ''),
(156, 'male', 'அஸ்தம்', 'மிருகசீரிஷம் 3', ''),
(157, 'male', 'அஸ்தம்', 'மிருகசீரிஷம் 4', ''),
(158, 'female', 'அஸ்தம்', 'பூராடம்', ''),
(159, 'female', 'அஸ்தம்', 'உத்திராடம் 1', ''),
(160, 'female', 'அஸ்தம்', 'ரேவதி', ''),
(161, 'female', 'அஸ்தம்', 'மிருகசீரிஷம்', ''),
(162, 'female', 'அஸ்தம்', 'பூரம்', ''),
(163, 'female', 'அஸ்தம்', 'ஆயில்யம்', ''),
(164, 'female', 'அஸ்தம்', 'கார்த்திகை 2', ''),
(165, 'female', 'அஸ்தம்', 'கார்த்திகை 3', ''),
(166, 'female', 'அஸ்தம்', 'கார்த்திகை 4', ''),
(167, 'male', 'சித்திரை 1, 2 ம் பாதங்கள்', 'திருவோணம்', ''),
(168, 'male', 'சித்திரை 1, 2 ம் பாதங்கள்', 'ஆயில்யம்', ''),
(169, 'male', 'சித்திரை 1, 2 ம் பாதங்கள்', 'விசாகம் 4', ''),
(170, 'female', 'சித்திரை 1, 2 ம் பாதங்கள்', 'கார்த்திகை 2', ''),
(171, 'female', 'சித்திரை 1, 2 ம் பாதங்கள்', 'கார்த்திகை 3', ''),
(172, 'female', 'சித்திரை 1, 2 ம் பாதங்கள்', 'கார்த்திகை 4', ''),
(173, 'female', 'சித்திரை 1, 2 ம் பாதங்கள்', 'மகம்', ''),
(174, 'male', 'சித்திரை 3, 4 ம் பாதங்கள்', 'விசாகம்', ''),
(175, 'male', 'சித்திரை 3, 4 ம் பாதங்கள்', 'திருவோணம்', ''),
(176, 'male', 'சித்திரை 3, 4 ம் பாதங்கள்', 'சதயம்', ''),
(177, 'male', 'சித்திரை 3, 4 ம் பாதங்கள்', 'ஆயில்யம்', ''),
(178, 'female', 'சித்திரை 3, 4 ம் பாதங்கள்', 'கார்த்திகை 1', ''),
(179, 'female', 'சித்திரை 3, 4 ம் பாதங்கள்', 'மகம்', ''),
(180, 'male', 'சுவாதி', 'அனுஷம்', ''),
(181, 'male', 'சுவாதி', 'பூரட்டாதி 1', ''),
(182, 'male', 'சுவாதி', 'பூரட்டாதி 2', ''),
(183, 'male', 'சுவாதி', 'பூரட்டாதி 3', ''),
(184, 'male', 'சுவாதி', 'புனர்பூசம் 4', ''),
(185, 'male', 'சுவாதி', 'பூசம்', ''),
(186, 'female', 'சுவாதி', 'பூராடம்', ''),
(187, 'female', 'சுவாதி', 'அவிட்டம் 1', ''),
(188, 'female', 'சுவாதி', 'அவிட்டம் 2', ''),
(189, 'female', 'சுவாதி', 'பரணி', ''),
(190, 'female', 'சுவாதி', 'மிருகசீரிஷம் 3', ''),
(191, 'female', 'சுவாதி', 'மிருகசீரிஷம் 4', ''),
(192, 'female', 'சுவாதி', 'பூரம்', ''),
(193, 'female', 'சுவாதி', 'புனர்பூசம்', ''),
(194, 'male', 'விசாகம் 1, 2, 3 ம் பாதங்கள்', 'சதயம்', ''),
(195, 'male', 'விசாகம் 1, 2, 3 ம் பாதங்கள்', 'ஆயில்யம்', ''),
(196, 'female', 'விசாகம் 1, 2, 3 ம் பாதங்கள்', 'அவிட்டம் 1', ''),
(197, 'female', 'விசாகம் 1, 2, 3 ம் பாதங்கள்', 'அவிட்டம் 2', ''),
(198, 'female', 'விசாகம் 1, 2, 3 ம் பாதங்கள்', 'சித்திரை 3', ''),
(199, 'female', 'விசாகம் 1, 2, 3 ம் பாதங்கள்', 'சித்திரை 4', ''),
(200, 'male', 'விசாகம் 4 ம் பாதம்', 'சதயம்', ''),
(201, 'female', 'விசாகம் 4 ம் பாதம்', 'அவிட்டம்', ''),
(202, 'female', 'விசாகம் 4 ம் பாதம்', 'சதயம்', ''),
(203, 'female', 'விசாகம் 4 ம் பாதம்', 'சித்திரை', ''),
(204, 'male', 'அனுஷம்', 'உத்திராடம் 2', ''),
(205, 'male', 'அனுஷம்', 'உத்திராடம் 3', ''),
(206, 'male', 'அனுஷம்', 'உத்திராடம் 4', ''),
(207, 'male', 'அனுஷம்', 'பூரட்டாதி', ''),
(208, 'male', 'அனுஷம்', 'ரேவதி', ''),
(209, 'male', 'அனுஷம்', 'உத்திரம்', ''),
(210, 'female', 'அனுஷம்', 'கேட்டை', ''),
(211, 'female', 'அனுஷம்', 'சதயம்', ''),
(212, 'female', 'அனுஷம்', 'பூரட்டாதி 1', ''),
(213, 'female', 'அனுஷம்', 'பூரட்டாதி 2', ''),
(214, 'female', 'அனுஷம்', 'பூரட்டாதி 3', ''),
(215, 'female', 'அனுஷம்', 'ரோகிணி', ''),
(216, 'female', 'அனுஷம்', 'புனர்பூசம்', ''),
(217, 'female', 'அனுஷம்', 'ஆயில்யம்', ''),
(218, 'female', 'அனுஷம்', 'அஸ்தம்', ''),
(219, 'female', 'அனுஷம்', 'சுவாதி', ''),
(220, 'male', 'கேட்டை', 'திருவோணம்', ''),
(221, 'male', 'கேட்டை', 'அனுஷம்', ''),
(222, 'female', 'கேட்டை', 'கார்த்திகை 2', ''),
(223, 'female', 'கேட்டை', 'கார்த்திகை 3', ''),
(224, 'female', 'கேட்டை', 'கார்த்திகை 4', ''),
(225, 'male', 'மூலம்', 'அவிட்டம்', ''),
(226, 'male', 'மூலம்', 'கார்த்திகை 1', ''),
(227, 'male', 'மூலம்', 'மிருகசீரிஷம் 3', ''),
(228, 'male', 'மூலம்', 'மிருகசீரிஷம் 4', ''),
(229, 'female', 'மூலம்', 'உத்திரட்டாதி', ''),
(230, 'female', 'மூலம்', 'பூரம்', ''),
(231, 'female', 'மூலம்', 'சுவாதி', ''),
(232, 'female', 'மூலம்', 'பூராடம்', ''),
(233, 'male', 'பூராடம்', 'உத்திராடம்', ''),
(234, 'male', 'பூராடம்', 'திருவோணம்', ''),
(235, 'male', 'பூராடம்', 'அஸ்வனி', ''),
(236, 'male', 'பூராடம்', 'திருவாதிரை', ''),
(237, 'male', 'பூராடம்', 'சுவாதி', ''),
(238, 'male', 'பூராடம்', 'உத்திரம் 2', ''),
(239, 'male', 'பூராடம்', 'உத்திரம் 3', ''),
(240, 'male', 'பூராடம்', 'உத்திரம் 4', ''),
(241, 'male', 'பூராடம்', 'அஸ்தம்', ''),
(242, 'female', 'பூராடம்', 'பூரட்டாதி', ''),
(243, 'female', 'பூராடம்', 'புனர்பூசம் 1', ''),
(244, 'female', 'பூராடம்', 'புனர்பூசம் 2', ''),
(245, 'female', 'பூராடம்', 'புனர்பூசம் 3', ''),
(246, 'female', 'பூராடம்', 'உத்திரம்', ''),
(247, 'female', 'பூராடம்', 'ரேவதி', ''),
(248, 'male', 'உத்திராடம் 1 ம் பாதம்', 'பரணி', ''),
(249, 'male', 'உத்திராடம் 1 ம் பாதம்', 'மிருகசீரிஷம் 3', ''),
(250, 'male', 'உத்திராடம் 1 ம் பாதம்', 'மிருகசீரிஷம் 4', ''),
(251, 'male', 'உத்திராடம் 1 ம் பாதம்', 'அஸ்தம்', ''),
(252, 'male', 'உத்திராடம் 1 ம் பாதம்', 'பூராடம்', ''),
(253, 'female', 'உத்திராடம் 1 ம் பாதம்', 'உத்திரட்டாதி', ''),
(254, 'female', 'உத்திராடம் 1 ம் பாதம்', 'திருவாதிரை', ''),
(255, 'female', 'உத்திராடம் 1 ம் பாதம்', 'பூரம்', ''),
(256, 'female', 'உத்திராடம் 1 ம் பாதம்', 'பூராடம்', ''),
(257, 'female', 'உத்திராடம் 1 ம் பாதம்', 'அஸ்தம்', ''),
(258, 'female', 'உத்திராடம் 1 ம் பாதம்', 'சுவாதி', ''),
(259, 'male', 'உத்திராடம் 2, 3, 4 ம் பாதங்கள்', 'பரணி', ''),
(260, 'male', 'உத்திராடம் 2, 3, 4 ம் பாதங்கள்', 'மிருகசீரிஷம் 1', ''),
(261, 'male', 'உத்திராடம் 2, 3, 4 ம் பாதங்கள்', 'மிருகசீரிஷம் 2', ''),
(262, 'female', 'உத்திராடம் 2, 3, 4 ம் பாதங்கள்', 'உத்திரட்டாதி', ''),
(263, 'female', 'உத்திராடம் 2, 3, 4 ம் பாதங்கள்', 'பரணி', ''),
(264, 'female', 'உத்திராடம் 2, 3, 4 ம் பாதங்கள்', 'பூசம்', ''),
(265, 'female', 'உத்திராடம் 2, 3, 4 ம் பாதங்கள்', 'அஸ்தம்', ''),
(266, 'female', 'உத்திராடம் 2, 3, 4 ம் பாதங்கள்', 'அனுஷம்', ''),
(267, 'female', 'உத்திராடம் 2, 3, 4 ம் பாதங்கள்', 'பூராடம்', ''),
(268, 'male', 'திருவோணம்', 'உத்திரட்டாதி', ''),
(269, 'male', 'திருவோணம்', 'அஸ்வனி', ''),
(270, 'male', 'திருவோணம்', 'மிருகசீரிஷம் 1', ''),
(271, 'male', 'திருவோணம்', 'மிருகசீரிஷம் 2', ''),
(272, 'male', 'திருவோணம்', 'அனுஷம்', ''),
(273, 'female', 'திருவோணம்', 'அவிட்டம் 1', ''),
(274, 'female', 'திருவோணம்', 'அவிட்டம் 2', ''),
(275, 'female', 'திருவோணம்', 'பூரட்டாதி 4', ''),
(276, 'female', 'திருவோணம்', 'பரணி', ''),
(277, 'female', 'திருவோணம்', 'புனர்பூசம் 4', ''),
(278, 'female', 'திருவோணம்', 'உத்திரம் 2', ''),
(279, 'female', 'திருவோணம்', 'உத்திரம் 3', ''),
(280, 'female', 'திருவோணம்', 'உத்திரம் 4', ''),
(281, 'female', 'திருவோணம்', 'சித்திரை', ''),
(282, 'female', 'திருவோணம்', 'கேட்டை', ''),
(283, 'female', 'திருவோணம்', 'பூராடம்', ''),
(284, 'male', 'அவிட்டம் 1, 2 ம் பாதங்கள்', 'புனர்பூசம் 4', ''),
(285, 'male', 'அவிட்டம் 1, 2 ம் பாதங்கள்', 'ஆயில்யம்', ''),
(286, 'male', 'அவிட்டம் 1, 2 ம் பாதங்கள்', 'சுவாதி', ''),
(287, 'male', 'அவிட்டம் 1, 2 ம் பாதங்கள்', 'விசாகம்', ''),
(288, 'male', 'அவிட்டம் 1, 2 ம் பாதங்கள்', 'திருவோணம்', ''),
(289, 'female', 'அவிட்டம் 1, 2 ம் பாதங்கள்', 'கார்த்திகை 1', ''),
(290, 'female', 'அவிட்டம் 1, 2 ம் பாதங்கள்', 'மூலம்', ''),
(291, 'male', 'அவிட்டம் 3, 4 ம் பாதங்கள்', 'சதயம்', ''),
(292, 'male', 'அவிட்டம் 3, 4 ம் பாதங்கள்', 'புனர்பூசம் 1', ''),
(293, 'male', 'அவிட்டம் 3, 4 ம் பாதங்கள்', 'புனர்பூசம் 2', ''),
(294, 'male', 'அவிட்டம் 3, 4 ம் பாதங்கள்', 'புனர்பூசம் 3', ''),
(295, 'male', 'அவிட்டம் 3, 4 ம் பாதங்கள்', 'விசாகம் 4', ''),
(296, 'female', 'அவிட்டம் 3, 4 ம் பாதங்கள்', 'கார்த்திகை', ''),
(297, 'female', 'அவிட்டம் 3, 4 ம் பாதங்கள்', 'சதயம்', ''),
(298, 'female', 'அவிட்டம் 3, 4 ம் பாதங்கள்', 'மகம்', ''),
(299, 'female', 'அவிட்டம் 3, 4 ம் பாதங்கள்', 'மூலம்', ''),
(300, 'male', 'சதயம்', 'கார்த்திகை', ''),
(301, 'male', 'சதயம்', 'மிருகசீரிஷம்', ''),
(302, 'male', 'சதயம்', 'மகம்', ''),
(303, 'male', 'சதயம்', 'விசாகம் 4', ''),
(304, 'male', 'சதயம்', 'அனுஷம்', ''),
(305, 'male', 'சதயம்', 'அவிட்டம் 3', ''),
(306, 'male', 'சதயம்', 'அவிட்டம் 4', ''),
(307, 'female', 'சதயம்', 'சித்திரை 3', ''),
(308, 'female', 'சதயம்', 'சித்திரை 4', ''),
(309, 'female', 'சதயம்', 'விசாகம்', ''),
(310, 'female', 'சதயம்', 'அவிட்டம் 3', ''),
(311, 'female', 'சதயம்', 'அவிட்டம் 4', ''),
(312, 'male', 'பூரட்டாதி 1, 2, 3 ம் பாதங்கள்', 'உத்திரட்டாதி', ''),
(313, 'male', 'பூரட்டாதி 1, 2, 3 ம் பாதங்கள்', 'ரோகிணி', ''),
(314, 'male', 'பூரட்டாதி 1, 2, 3 ம் பாதங்கள்', 'பூரம்', ''),
(315, 'male', 'பூரட்டாதி 1, 2, 3 ம் பாதங்கள்', 'அனுஷம்', ''),
(316, 'male', 'பூரட்டாதி 1, 2, 3 ம் பாதங்கள்', 'பூராடம்', ''),
(317, 'female', 'பூரட்டாதி 1, 2, 3 ம் பாதங்கள்', 'மிருகசீரிஷம் 1', ''),
(318, 'female', 'பூரட்டாதி 1, 2, 3 ம் பாதங்கள்', 'மிருகசீரிஷம் 2', ''),
(319, 'female', 'பூரட்டாதி 1, 2, 3 ம் பாதங்கள்', 'சுவாதி', ''),
(320, 'female', 'பூரட்டாதி 1, 2, 3 ம் பாதங்கள்', 'அனுஷம்', ''),
(321, 'male', 'பூரட்டாதி 4 ம் பாதம்', 'உத்திரட்டாதி', ''),
(322, 'male', 'பூரட்டாதி 4 ம் பாதம்', 'பூராடம்', ''),
(323, 'male', 'பூரட்டாதி 4 ம் பாதம்', 'திருவோணம்', ''),
(324, 'male', 'பூரட்டாதி 4 ம் பாதம்', 'ரோகிணி', ''),
(325, 'male', 'பூரட்டாதி 4 ம் பாதம்', 'பூசம்', ''),
(326, 'female', 'பூரட்டாதி 4 ம் பாதம்', 'உத்திரட்டாதி', ''),
(327, 'female', 'பூரட்டாதி 4 ம் பாதம்', 'மிருகசீரிஷம்', ''),
(328, 'female', 'பூரட்டாதி 4 ம் பாதம்', 'அனுஷம்', ''),
(329, 'male', 'உத்திரட்டாதி', 'ரேவதி', ''),
(330, 'male', 'உத்திரட்டாதி', 'புனர்பூசம்', ''),
(331, 'male', 'உத்திரட்டாதி', 'உத்திரம் 2', ''),
(332, 'male', 'உத்திரட்டாதி', 'உத்திரம் 3', ''),
(333, 'male', 'உத்திரட்டாதி', 'உத்திரம் 4', ''),
(334, 'male', 'உத்திரட்டாதி', 'உத்திராடம்', ''),
(335, 'male', 'உத்திரட்டாதி', 'பூரட்டாதி 4', ''),
(336, 'female', 'உத்திரட்டாதி', 'ரேவதி', ''),
(337, 'female', 'உத்திரட்டாதி', 'திருவாதிரை', ''),
(338, 'female', 'உத்திரட்டாதி', 'ரோகிணி', ''),
(339, 'female', 'உத்திரட்டாதி', 'புனர்பூசம் 1', ''),
(340, 'female', 'உத்திரட்டாதி', 'புனர்பூசம் 2', ''),
(341, 'female', 'உத்திரட்டாதி', 'புனர்பூசம் 3', ''),
(342, 'female', 'உத்திரட்டாதி', 'அஸ்தம்', ''),
(343, 'female', 'உத்திரட்டாதி', 'திருவோணம்', ''),
(344, 'female', 'உத்திரட்டாதி', 'பூரட்டாதி', ''),
(345, 'male', 'ரேவதி', 'பரணி', ''),
(346, 'male', 'ரேவதி', 'பூசம்', ''),
(347, 'male', 'ரேவதி', 'அஸ்தம்', ''),
(348, 'male', 'ரேவதி', 'பூராடம்', ''),
(349, 'male', 'ரேவதி', 'உத்திரட்டாதி', ''),
(350, 'female', 'ரேவதி', 'மிருகசீரிஷம்', ''),
(351, 'female', 'ரேவதி', 'புனர்பூசம் 1', ''),
(352, 'female', 'ரேவதி', 'புனர்பூசம் 2', ''),
(353, 'female', 'ரேவதி', 'புனர்பூசம் 3', ''),
(354, 'female', 'ரேவதி', 'உத்திரம் 2', ''),
(355, 'female', 'ரேவதி', 'உத்திரம் 3', ''),
(356, 'female', 'ரேவதி', 'உத்திரம் 4', ''),
(357, 'female', 'ரேவதி', 'அனுஷம்', ''),
(358, 'female', 'ரேவதி', 'உத்திரட்டாதி', '');

-- --------------------------------------------------------

--
-- Table structure for table `rasi_natchathiram`
--

CREATE TABLE `rasi_natchathiram` (
  `id` int(11) NOT NULL,
  `rasi` text CHARACTER SET utf8 NOT NULL,
  `natchathiram` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rasi_natchathiram`
--

INSERT INTO `rasi_natchathiram` (`id`, `rasi`, `natchathiram`) VALUES
(1, 'மேசம் ', 'அஸ்விணி  '),
(2, 'மேசம் ', 'பரணி '),
(3, 'மேசம்\r\n', ' கிருத்திகை \r\n'),
(4, 'ரிசபம்', 'கிருத்திகை \r\n'),
(5, 'ரிசபம் \r\n', 'ரோகிணி '),
(6, 'ரிசபம் \r\n', 'மிருகசீரிசம் \r\n'),
(7, 'மிதுனம் \r\n\r\n', 'திருவாதிரை '),
(8, 'மிதுனம் \r\n\r\n', 'புணர்பூசம் \r\n'),
(9, 'கடகம் \r\n\r\n', ' புணர்பூசம்'),
(10, 'கடகம்\r\n', 'பூசம்'),
(11, 'கடகம் \r\n', 'ஆயில்யம்'),
(12, 'சிம்மம் \r\n', 'மகம்'),
(13, 'சிம்மம்\r\n', 'பூரம்'),
(14, 'சிம்மம் \r\n', 'உத்திரம்'),
(15, 'கன்னி\r\n', 'உத்திரம்'),
(16, 'கன்னி \r\n', 'அஸ்தம்'),
(17, 'கன்னி \r\n', 'சித்திரை'),
(18, 'துலாம் \r\n', 'சித்திரை'),
(19, 'துலாம் \r\n', 'சுவாதி'),
(20, 'துலாம்\r\n', 'விசாகம்'),
(21, 'விருச்சிகம்', 'விசாகம்'),
(22, 'விருச்சிகம்\r\n', 'கேட்டை'),
(23, 'தனுசு', 'மூலம்'),
(24, 'தனுசு', 'பூராடம்'),
(25, 'தனுசு', ' உத்திராடம்'),
(26, 'மகரம் \r\n', 'உத்திராடம்'),
(27, 'மகரம்', 'திருவோணம்'),
(28, 'மகரம் ', 'அவிட்டம்'),
(29, 'கும்பம் \r\n', 'அவிட்டம்'),
(30, 'கும்பம்', 'புரட்டாதி'),
(31, 'மீனம்', 'உத்திரட்டாதி'),
(32, 'மீனம்', 'ரேவதி'),
(33, 'மிதுனம் \r\n\r\n', 'மிருகசீரிசம்');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` text CHARACTER SET utf8 DEFAULT NULL,
  `profile` text CHARACTER SET utf8 DEFAULT NULL,
  `payment` text CHARACTER SET utf8 DEFAULT NULL,
  `aadhar` text CHARACTER SET utf8 DEFAULT NULL,
  `jathagam` text CHARACTER SET utf8 DEFAULT NULL,
  `father_name` text CHARACTER SET utf8 DEFAULT NULL,
  `dob` text CHARACTER SET utf8 DEFAULT NULL,
  `time` text CHARACTER SET utf8 DEFAULT NULL,
  `age` text CHARACTER SET utf8 DEFAULT NULL,
  `study` text CHARACTER SET utf8 DEFAULT NULL,
  `work` text CHARACTER SET utf8 DEFAULT NULL,
  `salary` text CHARACTER SET utf8 DEFAULT NULL,
  `color` text CHARACTER SET utf8 DEFAULT NULL,
  `height` text CHARACTER SET utf8 DEFAULT NULL,
  `rasi` text CHARACTER SET utf8 DEFAULT NULL,
  `lakunam` text CHARACTER SET utf8 DEFAULT NULL,
  `najathiram` text CHARACTER SET utf8 DEFAULT NULL,
  `father_work` text CHARACTER SET utf8 DEFAULT NULL,
  `assets` text CHARACTER SET utf8 DEFAULT NULL,
  `purvegam` text CHARACTER SET utf8 DEFAULT NULL,
  `kulatheivam` text CHARACTER SET utf8 DEFAULT NULL,
  `kuttam` text CHARACTER SET utf8 DEFAULT NULL,
  `like_status` text CHARACTER SET utf8 DEFAULT NULL,
  `mobile_no` text CHARACTER SET utf8 DEFAULT NULL,
  `alternate_no` text CHARACTER SET utf8 DEFAULT NULL,
  `area` text CHARACTER SET utf8 DEFAULT NULL,
  `pincode` text CHARACTER SET utf8 DEFAULT NULL,
  `taluka` text CHARACTER SET utf8 DEFAULT NULL,
  `door_no` text CHARACTER SET utf8 DEFAULT NULL,
  `state` text CHARACTER SET utf8 DEFAULT NULL,
  `district` text CHARACTER SET utf8 DEFAULT NULL,
  `thosam` text CHARACTER SET utf8 DEFAULT NULL,
  `password` text CHARACTER SET utf8 DEFAULT NULL,
  `reg_date` text CHARACTER SET utf8 DEFAULT NULL,
  `reg_time` text CHARACTER SET utf8 DEFAULT NULL,
  `gender` text CHARACTER SET utf8 DEFAULT NULL,
  `who` text CHARACTER SET utf8 DEFAULT NULL,
  `status` text CHARACTER SET utf8 DEFAULT NULL,
  `married_status` text CHARACTER SET utf8 DEFAULT NULL,
  `disability` text CHARACTER SET utf8 DEFAULT NULL,
  `kattam` text CHARACTER SET utf8 DEFAULT NULL,
  `kattam_amsam` text CHARACTER SET utf8 DEFAULT NULL,
  `expect_study` text CHARACTER SET utf8 DEFAULT NULL,
  `expect_color` text CHARACTER SET utf8 DEFAULT NULL,
  `expect_salary` text CHARACTER SET utf8 DEFAULT NULL,
  `expect_message` text CHARACTER SET utf8 DEFAULT NULL,
  `nachathira_eng` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `profile`, `payment`, `aadhar`, `jathagam`, `father_name`, `dob`, `time`, `age`, `study`, `work`, `salary`, `color`, `height`, `rasi`, `lakunam`, `najathiram`, `father_work`, `assets`, `purvegam`, `kulatheivam`, `kuttam`, `like_status`, `mobile_no`, `alternate_no`, `area`, `pincode`, `taluka`, `door_no`, `state`, `district`, `thosam`, `password`, `reg_date`, `reg_time`, `gender`, `who`, `status`, `married_status`, `disability`, `kattam`, `kattam_amsam`, `expect_study`, `expect_color`, `expect_salary`, `expect_message`, `nachathira_eng`) VALUES
(45, 'Murugesh', '8838578134.jpg', '8838578134.png', '8838578134.jpeg', '8838578134.jpeg', 'Selvaraj A', '', NULL, 'NaN', 'B.Com. Co-Operative Management', 'IT', '20000', 'மாநிறம்', '5ft 4in/ 152 cms', 'மேஷம்', 'சிம்மம்', 'பரணி ', 'Carpentor', '100000', 'Erode', 'Ayyanar', 'Visvagarma', NULL, '8838578134', '883857813412', 'Manickamplayam', '638003', 'Kodumudi', '20', '', 'ஈரோடு', 'செவ்வாய் ஜாதகம்', '9a86c9bfa0cc6628344ee732e7b0689f', '17-05-2023', '01:12', 'male', 'self', 'Verified', NULL, 'normal', '8838578134.webp', '8838578134.jpeg', 'B.A. Public Administration', 'சிவப்பு', '35444', '', NULL),
(46, 'Harini', '1234567890.jpg', '1234567890.png', '1234567890.jpeg', '1234567890.png', 'Manikandan', '', NULL, '22', 'B.A. Co-Operative Studies', 'IT', '20000', 'மாநிறம்', '5ft 3in/ 152 cms', 'மேஷம்', 'மேஷம்', 'அஸ்வனி', 'Proffesor', '', 'Namakkal', 'Ayyanar', 'Visvagarma', NULL, '1234567890', NULL, 'namakkal', '638000', 'namakkal', '20', '', 'நாமக்கல்', 'செவ்வாய் ஜாதகம்', '202cb962ac59075b964b07152d234b70', '17-05-2023', '01:31', 'male', 'self', 'Unverified', NULL, 'normal', '1234567890.webp', '1234567890.jpeg', 'B.A. Ancient Indian History and Archaeology', 'மாநிறம்', '35000', '', NULL),
(47, 'Ananya', NULL, NULL, NULL, NULL, 'kaviyarasu', '1999-07-28', NULL, '23', 'B.A. Business Economics', 'Proffessor', '300000', 'மாநிறம்', '5ft 1in/ 152 cms', 'மேஷம்', 'மேஷம்', 'அஸ்வனி', 'Proffesor', '10000000', 'Chennai', 'Munishwarar', 'Nadar', NULL, '9876543210', NULL, 'namakkal', '638000', 'Chennai', '20', 'தமிழ்நாடு', 'நாமக்கல்', 'சுத்த ஜாதகம்', '827ccb0eea8a706c4c34a16891f84e7b', '17-05-2023', '05:12', 'female', 'self', 'Verified', NULL, 'normal', NULL, NULL, 'B.A. Natya(Music, Dance and Theatre)', 'மாநிறம்', '75676', 'Testing', NULL),
(49, 'Ragul', '9383958524.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9383958524', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8e7991af8afa942dc572950e01177da5', '20-05-2023', '1684561880', 'male', 'self', 'Unverified', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 'Varun', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5432154321', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01cfcd4f6b8770febfb40cb906715822', '20-05-2023', '1684582183', 'male', 'self', 'Unverified', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 'Meena', NULL, NULL, NULL, NULL, '', '', NULL, 'NaN', '', '', '', '', '5ft 1in/ 152 cms', 'மேஷம்', '', 'அஸ்வனி', '', '', '', '', '', NULL, '9843798666', NULL, 'kadalur', '300041', 'kadalur', '', '', 'கடலூர்', '', '24fb7b7812aa3ba35a8816724e24ac3b', '22-05-2023', '', 'female', 'self', 'Verified', NULL, 'normal', NULL, NULL, '', '', '', '', NULL),
(52, 'Malathi', NULL, NULL, NULL, NULL, 'kaviyarasu', '2010-02-12', NULL, '13', 'B.A. Corporate Secretaryship', 'Proffessor', '300000', 'சிவப்பு', '5ft/ 152 cms', 'மேஷம்', 'மேஷம்', 'அஸ்வனி', 'Proffesor', '100000', 'Namakkal', 'Krishnan', 'Nadar', NULL, '321321', NULL, 'namakkal', '638000', 'namakkal', '20', '', 'நாமக்கல்', 'சுத்த ஜாதகம்', 'caf1a3dfb505ffed0d024130f58c5cfa', '23-05-2023', '01:58', 'female', 'self', 'Verified', NULL, 'normal', NULL, NULL, '', '', '', '', NULL),
(53, 'Munish', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9087608365', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '11e52db594a4612c4dc54a6feb5f5cce', '24-05-2023', '1684905970', 'male', 'self', 'Unverified', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 'Aswath', '8610813887.jpg', NULL, NULL, NULL, 'Seenivasan', '', NULL, 'NaN', 'B.E. Computer Science and Engineering', 'Business', '60,000', 'மாநிறம்', '5ft 7in/ 152 cms', 'மேஷம்', 'கன்னி', 'பரணி', 'Carpenter', '100000', 'Palani', 'Veerakammu Amman', 'Aasari', NULL, '8610813887', NULL, 'palani', '624617', 'Vellore', '10', 'தமிழ்நாடு', 'வேலூர்', 'ராகு கேது ஜாதகம்', '05964ca93aa2f121fa7cce2ecd6039e0', '25-05-2023', '11:07', 'male', 'self', 'Verified', 'never_married', 'normal', NULL, NULL, 'Any Degree', 'மாநிறம்', '20,000', '', 'Parani'),
(56, 'priya', '8903083406.jpg', NULL, NULL, NULL, 'selvaraj', '', NULL, '21', 'B.A. Comparative Literature', 'Ncr', '18000', 'மாநிறம்', '5ft 4in/ 152 cms', 'மேஷம்', 'தனுசு', 'அஸ்வனி', 'farmer', '20000', 'salem', 'ayyanar', 'Bc', NULL, '8903083406', NULL, 'salem', '636388', 'Salem', '22', 'தமிழ்நாடு', 'சேலம்', 'சுத்த ஜாதகம்', '0b1c8bc395a9588a79cd3c191c22a6b4', '25-05-2023', '02:35', 'female', 'self', 'Verified', 'never_married', 'normal', NULL, NULL, 'Any Degree', 'சிவப்பு', '40000', '', 'Ashwani'),
(57, 'Rani', NULL, NULL, NULL, NULL, '', '', NULL, 'NaN', '', '', '', '', '5ft 2in/ 152 cms', 'மேஷம்', '', 'அஸ்வனி', 'Carpenter', '100000', 'Erode', 'Ayyanar', 'Aasari', NULL, '123', NULL, 'palani', '638183', 'Nagapattinam', '22', 'தமிழ்நாடு', 'Nagapattinam', 'சுத்த ஜாதகம்', '202cb962ac59075b964b07152d234b70', '26-05-2023', '', 'female', 'self', 'Verified', '', 'normal', NULL, NULL, '', '', '', '', 'Ashwani'),
(58, 'Kaviya', NULL, NULL, NULL, NULL, '', '', NULL, 'NaN', '', '', '', '', '5ft 4in/ 152 cms', '', 'மேஷம்', 'அஸ்வனி', 'Carpenter', '100000', 'salem', 'Veerakammu Amman', 'Aasari', NULL, '321', NULL, 'palani', '638183', 'Mayiladuthurai', '', 'தமிழ்நாடு', 'Mayiladuthurai', 'சுத்த ஜாதகம்', 'caf1a3dfb505ffed0d024130f58c5cfa', '26-05-2023', '', 'female', 'self', 'Verified', '', 'normal', NULL, NULL, '', '', '', '', 'Ashwani');

-- --------------------------------------------------------

--
-- Table structure for table `taluga`
--

CREATE TABLE `taluga` (
  `id` int(11) NOT NULL,
  `district` text NOT NULL,
  `taluga` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taluga`
--

INSERT INTO `taluga` (`id`, `district`, `taluga`) VALUES
(1, 'chennai', 'chennai'),
(2, 'chennai', 'Velachery'),
(3, 'chennai', 'Tondiarpet'),
(4, 'chennai', 'Alandur'),
(5, 'chennai', 'Ambattur'),
(6, 'chennai', 'Aminjikarai'),
(7, 'chennai', 'Ayanavaram'),
(8, 'chennai', 'Egmore'),
(9, 'chennai', 'Guindy'),
(10, 'chennai', 'Madhavaram'),
(11, 'chennai', 'Maduravoyal'),
(12, 'chennai', 'Tiruvottiyur'),
(13, 'chennai', 'Sholinganallur'),
(14, 'chennai', 'Purasawalkam'),
(15, 'chennai', 'Perambur'),
(16, 'chennai', 'Mylapore'),
(17, 'chennai', 'Mambalam'),
(18, 'Kanchipuram', 'Kanchipuram'),
(19, 'Kanchipuram', 'Kunrathur'),
(20, 'Kanchipuram', 'Sriperumbudur'),
(21, 'Kanchipuram', 'Uthiramerur'),
(22, 'Kanchipuram', 'Walajabad'),
(23, 'Chengalpattu', 'Chengalpattu'),
(24, 'Chengalpattu', 'Cheyyur'),
(25, 'Chengalpattu', 'Madurantakam'),
(26, 'Chengalpattu', 'Pallavaram'),
(27, 'Chengalpattu', 'Tambaram'),
(28, 'Chengalpattu', 'Thiruporur'),
(29, 'Chengalpattu', 'Thirukazhukundram'),
(30, 'Chengalpattu', 'Vandalur'),
(31, 'Tiruvallur', 'Tiruvallur'),
(32, 'Tiruvallur', 'Uthukkottai'),
(33, 'Tiruvallur', 'Tiruttani'),
(34, 'Tiruvallur', 'RK Pet'),
(35, 'Tiruvallur', 'Poonamallee'),
(36, 'Tiruvallur', 'Ponneri'),
(37, 'Tiruvallur', 'Pallipattu'),
(38, 'Tiruvallur', 'Gummidipoondi'),
(39, 'Tiruvallur', 'Avadi'),
(40, 'Tiruvannamalai', 'Tiruvannamalai'),
(41, 'Tiruvannamalai', 'Polur'),
(42, 'Tiruvannamalai', 'Thandarampattu'),
(43, 'Tiruvannamalai', 'Vandavasi'),
(44, 'Tiruvannamalai', 'Vembakkam'),
(45, 'Tiruvannamalai', 'Kilpennathur'),
(46, 'Tiruvannamalai', 'Kalasapakkam'),
(47, 'Tiruvannamalai', 'Aarani'),
(48, 'Tiruvannamalai', 'Chengam'),
(49, 'Tiruvannamalai', 'Chetpet'),
(50, 'Tiruvannamalai', 'Cheyyar'),
(51, 'Tiruvannamalai', 'Jamunamarathur'),
(52, 'Vellore', 'Vellore'),
(53, 'Vellore', 'Kilvaithinankuppam'),
(54, 'Vellore', 'Katpadi'),
(55, 'Vellore', 'Pernambut'),
(56, 'Vellore', 'Gudiyatham'),
(57, 'Vellore', 'Anaicut'),
(58, 'Villupuram', 'Villupuram'),
(59, 'Villupuram', 'Vikravandi'),
(60, 'Villupuram', 'Vanur'),
(61, 'Villupuram', 'Thiruvennainallur'),
(62, 'Villupuram', 'Tindivanam'),
(63, 'Villupuram', 'Melmalaianur'),
(64, 'Villupuram', 'Marakkanam'),
(65, 'Villupuram', 'Kandachipuram'),
(66, 'Villupuram', 'Gingee'),
(67, 'Kallakkurichi', 'Kallakkurichi'),
(68, 'Kallakkurichi', 'Kalvarayan Hills'),
(69, 'Kallakkurichi', 'Ulundurpet'),
(70, 'Kallakkurichi', 'Thirukoilur'),
(71, 'Kallakkurichi', 'Sankarapuram'),
(72, 'Kallakkurichi', 'Chinnasalem'),
(73, 'Walajapet', 'Walajapet'),
(74, 'Walajapet', 'Sholingur'),
(75, 'Walajapet', 'Nemili'),
(76, 'Walajapet', 'Kalavai'),
(77, 'Walajapet', 'Arcot'),
(78, 'Walajapet', 'Arakkonam'),
(79, 'Ariyalur', 'Ariyalur'),
(80, 'Ariyalur', 'Andimadam'),
(81, 'Ariyalur', 'Udayarpalayam'),
(82, 'Ariyalur', 'Sendurai'),
(83, 'Cuddalore', 'Cuddalore'),
(84, 'Cuddalore', 'Kurinjipadi'),
(85, 'Cuddalore', 'Panruti'),
(86, 'Cuddalore', 'Srimushnam'),
(87, 'Cuddalore', 'Titakudi'),
(88, 'Cuddalore', 'Veppur'),
(89, 'Cuddalore', 'Vriddachalam'),
(90, 'Cuddalore', 'Kattumannarkoil'),
(91, 'Cuddalore', 'Chidambaram'),
(92, 'Cuddalore', 'Bhuvanagiri'),
(93, 'Mayiladuthurai', 'Mayiladuthurai'),
(94, 'Mayiladuthurai', 'Tharangambadi'),
(95, 'Mayiladuthurai', 'Sirkazhi'),
(96, 'Mayiladuthurai', 'Kuthalam'),
(97, 'Nagapattinam', 'Nagapattinam'),
(98, 'Nagapattinam', 'Vedaranyam'),
(99, 'Nagapattinam', 'Thirukkuvalai'),
(100, 'Nagapattinam', 'Kilvelur'),
(101, 'Perambalur', 'Veppanthattai'),
(102, 'Perambalur', 'Perambalur'),
(103, 'Perambalur', 'Kunnam'),
(104, 'Perambalur', 'Alathur'),
(105, 'Pudukkottai', 'Pudukkottai'),
(106, 'Pudukkottai', 'Viralimalai'),
(107, 'Pudukkottai', 'Thirumayam'),
(108, 'Pudukkottai', 'Ponnamaravathi'),
(109, 'Pudukkottai', 'Manamelkudi'),
(110, 'Pudukkottai', 'Kulathur'),
(111, 'Pudukkottai', 'Karambakkudi'),
(112, 'Pudukkottai', 'Alangudi'),
(113, 'Pudukkottai', 'Aranthangi'),
(114, 'Pudukkottai', 'Avadaiyarkoil'),
(115, 'Pudukkottai', 'Gandarvakottai'),
(116, 'Pudukkottai', 'Illuppur'),
(117, 'Thanjavur', 'Thanjavur'),
(118, 'Thanjavur', 'Thiruvidaimarudur'),
(119, 'Thanjavur', 'Thiruvaiyaru'),
(120, 'Thanjavur', 'Peravurani'),
(121, 'Thanjavur', 'Pattukkottai'),
(122, 'Thanjavur', 'Papanasam'),
(123, 'Thanjavur', 'Orathanadu'),
(124, 'Thanjavur', 'Kumbakonam'),
(125, 'Thanjavur', 'Budalur'),
(126, 'Tiruchirappalli', 'Tiruchirappalli East'),
(127, 'Tiruchirappalli', 'Thiruverumbur'),
(128, 'Tiruchirappalli', 'Thottiyam'),
(129, 'Tiruchirappalli', 'Thuraiyur'),
(130, 'Tiruchirappalli', 'Tiruchirappalli West'),
(131, 'Tiruchirappalli', 'Srirangam'),
(132, 'Tiruchirappalli', 'Musiri'),
(133, 'Tiruchirappalli', 'Marungapuri'),
(134, 'Tiruchirappalli', 'Manapparai'),
(135, 'Tiruchirappalli', 'Manachanallur'),
(136, 'Tiruchirappalli', 'Lalgudi'),
(137, 'Tiruvarur', 'Tiruvarur'),
(138, 'Tiruvarur', 'Valangaiman'),
(139, 'Tiruvarur', 'Thiruthiraipoondi'),
(140, 'Tiruvarur', 'Needamangalam'),
(141, 'Tiruvarur', 'Nannilam'),
(142, 'Tiruvarur', 'Mannargudi'),
(143, 'Tiruvarur', 'Kudavasal'),
(144, 'Tiruvarur', 'Koothanallur'),
(145, 'Dharmapuri', 'Dharmapuri'),
(146, 'Dharmapuri', 'Pennagaram'),
(147, 'Dharmapuri', 'Palacode'),
(148, 'Dharmapuri', 'Nallampalli'),
(149, 'Dharmapuri', 'Karimangalam'),
(150, 'Dharmapuri', 'Harur'),
(151, 'Dharmapuri', 'Pappireddipatti'),
(152, 'Dindigul', 'Vedasandur'),
(153, 'Dindigul', 'Palani'),
(154, 'Dindigul', 'Oddanchattiram'),
(155, 'Dindigul', 'Nilakottai'),
(156, 'Dindigul', 'Natham'),
(157, 'Dindigul', 'Kodaikanal'),
(158, 'Dindigul', 'Gujiliamparai'),
(159, 'Dindigul', 'Dindigul-East'),
(160, 'Dindigul', 'Dindigul-West'),
(161, 'Dindigul', 'Athoor'),
(162, 'Coimbatore', 'Valparai'),
(163, 'Coimbatore', 'Sulur'),
(164, 'Coimbatore', 'Pollachi'),
(165, 'Coimbatore', 'Perur'),
(166, 'Coimbatore', 'Mettupalayam'),
(167, 'Coimbatore', 'Madukkarai'),
(168, 'Coimbatore', 'Kinathukadavu'),
(169, 'Coimbatore', 'Coimbatore-South'),
(170, 'Coimbatore', 'Coimbatore-North'),
(171, 'Coimbatore', 'Annur'),
(172, 'Coimbatore', 'Anaimalai'),
(173, 'Karur', 'Karur'),
(174, 'Karur', 'Pugalur'),
(175, 'Karur', 'Manmangalam'),
(176, 'Karur', 'Kulithalai'),
(177, 'Karur', 'Krishnarayapuram'),
(178, 'Karur', 'Kadavur'),
(179, 'Karur', 'Aravakurichi'),
(180, 'Erode', 'Kodumudi'),
(181, 'Erode', 'Modakurichi'),
(182, 'Erode', 'Perundurai'),
(183, 'Erode', 'Sathyamangalam'),
(184, 'Erode', 'Nambiyur taluk'),
(185, 'Erode', 'Gobichettipalayam'),
(186, 'Erode', 'Erode'),
(187, 'Erode', 'Bhavani'),
(188, 'Erode', 'Anthiyur'),
(189, 'Krishnagiri', 'Krishnagiri'),
(190, 'Krishnagiri', 'Uthangarai'),
(191, 'Krishnagiri', 'Shoolagiri'),
(192, 'Krishnagiri', 'Pochampalli'),
(193, 'Krishnagiri', 'Hosur'),
(194, 'Krishnagiri', 'Denkanikottai'),
(195, 'Krishnagiri', 'Bargur'),
(196, 'Krishnagiri', 'Anchetty'),
(197, 'Namakkal', 'Namakkal'),
(198, 'Namakkal', 'Thiruchengode'),
(199, 'Namakkal', 'Sendamangalam'),
(200, 'Namakkal', 'Rasipuram'),
(201, 'Namakkal', 'Paramathi-Velur'),
(202, 'Namakkal', 'Mohanur'),
(203, 'Namakkal', 'Kumarapalayam'),
(204, 'Namakkal', 'Kollimalai'),
(205, 'Nilgiris', 'Udagamandalam'),
(206, 'Nilgiris', 'Pandalur'),
(207, 'Nilgiris', 'Kundah'),
(208, 'Nilgiris', 'Kotagiri'),
(209, 'Nilgiris', 'Gudalur'),
(210, 'Nilgiris', 'Coonoor'),
(211, 'Salem', 'Yercaud'),
(212, 'Salem', 'Salem'),
(213, 'Salem', 'Valapady'),
(214, 'Salem', 'Sankagiri'),
(215, 'Salem', 'Salem West'),
(216, 'Salem', 'Salem South'),
(217, 'Salem', 'Pethanaickenpalayam'),
(218, 'Salem', 'Omalur'),
(219, 'Salem', 'Attur'),
(220, 'Salem', 'Idappadi'),
(221, 'Salem', 'Gangavalli'),
(222, 'Salem', 'Kadyampatti'),
(223, 'Salem', 'Mettur'),
(224, 'Tiruppur', 'Uthukuli'),
(225, 'Tiruppur', 'Udumalaipettai'),
(226, 'Tiruppur', 'Tiruppur South'),
(227, 'Tiruppur', 'Tiruppur North'),
(228, 'Tiruppur', 'Palladam'),
(229, 'Tiruppur', 'Madathukulam'),
(230, 'Tiruppur', 'Kangeyam'),
(231, 'Tiruppur', 'Dharapuram'),
(232, 'Tiruppur', 'Avinashi'),
(233, 'Kanyakumari', 'Thovalai'),
(234, 'Kanyakumari', 'Thiruvattar'),
(235, 'Kanyakumari', 'Vilavancode'),
(236, 'Kanyakumari', 'Killiyur'),
(237, 'Kanyakumari', 'Kalkulam'),
(238, 'Kanyakumari', 'Agastheeswaram'),
(239, 'Madurai', 'Vadipatti'),
(240, 'Madurai', 'Usilampatti'),
(241, 'Madurai', 'Thirupparankundram'),
(242, 'Madurai', 'Thirumangalam'),
(243, 'Madurai', 'Peraiyur'),
(244, 'Madurai', 'Melur'),
(245, 'Madurai', 'Kallikudi'),
(246, 'Madurai', 'Madurai-West'),
(247, 'Madurai', 'Madurai-South'),
(248, 'Madurai', 'Madurai-North'),
(249, 'Madurai', 'Madurai-East'),
(250, 'Ramanathapuram', 'Ramanathapuram'),
(251, 'Ramanathapuram', 'Tiruvadanai'),
(252, 'Ramanathapuram', 'Rameswaram'),
(253, 'Ramanathapuram', 'R. S. Mangalam'),
(254, 'Ramanathapuram', 'Paramakudi'),
(255, 'Ramanathapuram', 'Mudukulathur'),
(256, 'Ramanathapuram', 'Kilakarai'),
(257, 'Ramanathapuram', 'Kamuthi'),
(258, 'Ramanathapuram', 'Kadaladi'),
(259, 'Sivaganga', 'Sivaganga'),
(260, 'Sivaganga', 'Tiruppuvanam'),
(261, 'Sivaganga', 'Tirupathur'),
(262, 'Sivaganga', 'Singampunari'),
(263, 'Sivaganga', 'Manamadurai'),
(264, 'Sivaganga', 'Karaikudi'),
(265, 'Sivaganga', 'Kalayarkoil'),
(266, 'Sivaganga', 'Ilayangudi'),
(267, 'Sivaganga', 'Devakottai'),
(268, 'Theni', 'Theni'),
(269, 'Theni', 'Uthamapalayam'),
(270, 'Theni', 'Periyakulam'),
(271, 'Theni', 'Bodniayakkanur'),
(272, 'Theni', 'Andipatti'),
(273, 'Thoothukudi', 'Thoothukudi'),
(274, 'Thoothukudi', 'Vilathikulam'),
(275, 'Thoothukudi', 'Tiruchendur'),
(276, 'Thoothukudi', 'Thiruvaikundam'),
(277, 'Thoothukudi', 'Sathankulam'),
(278, 'Thoothukudi', 'Ottapidaram'),
(279, 'Thoothukudi', 'Kovilpatti'),
(280, 'Thoothukudi', 'Kayatharu'),
(281, 'Thoothukudi', 'Ettayapuram'),
(282, 'Thoothukudi', 'Eral'),
(283, 'Tirunelveli', 'Tirunelveli'),
(284, 'Tirunelveli', 'Thisayanvilai'),
(285, 'Tirunelveli', 'Radhapuram'),
(286, 'Tirunelveli', 'Palayamkottai'),
(287, 'Tirunelveli', 'Nanguneri'),
(288, 'Tirunelveli', 'Manur'),
(289, 'Tirunelveli', 'Cheranmahadevi'),
(290, 'Tirunelveli', 'Ambasamudram'),
(291, 'Tenkasi', 'Tenkasi'),
(292, 'Tenkasi', 'Sivagiri'),
(293, 'Tenkasi', 'Veerakeralampudur'),
(294, 'Tenkasi', 'Thiruvengadam'),
(295, 'Tenkasi', 'Shenkottai'),
(296, 'Tenkasi', 'Sankarankoil'),
(297, 'Tenkasi', 'Kadayanallur'),
(298, 'Tenkasi', 'Alangulam'),
(299, 'Virudhunagar', 'Virudhunagar'),
(300, 'Virudhunagar', 'Watrap'),
(301, 'Virudhunagar', 'Tiruchuli'),
(302, 'Virudhunagar', 'Srivilliputhur'),
(303, 'Virudhunagar', 'Sivakasi'),
(304, 'Virudhunagar', 'Sattur'),
(305, 'Virudhunagar', 'Rajapalayam'),
(306, 'Virudhunagar', 'Kariapatti'),
(307, 'Virudhunagar', 'Aruppukkottai'),
(308, 'Virudhunagar', 'Vembakottai'),
(309, 'Tirupattur', 'Vaniyambadi'),
(310, 'Tirupattur', 'Tirupattur'),
(311, 'Tirupattur', 'Natrampalli'),
(312, 'Tirupattur', 'Ambur');

-- --------------------------------------------------------

--
-- Table structure for table `translate`
--

CREATE TABLE `translate` (
  `id` int(11) NOT NULL,
  `tamil` text NOT NULL,
  `english` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `translate`
--

INSERT INTO `translate` (`id`, `tamil`, `english`) VALUES
(1, 'அஸ்வனி', 'Ashwani'),
(2, 'பரணி', 'Parani');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `intrest`
--
ALTER TABLE `intrest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `natchathira`
--
ALTER TABLE `natchathira`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rasi_natchathiram`
--
ALTER TABLE `rasi_natchathiram`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taluga`
--
ALTER TABLE `taluga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translate`
--
ALTER TABLE `translate`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `intrest`
--
ALTER TABLE `intrest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221;

--
-- AUTO_INCREMENT for table `natchathira`
--
ALTER TABLE `natchathira`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=359;

--
-- AUTO_INCREMENT for table `rasi_natchathiram`
--
ALTER TABLE `rasi_natchathiram`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `taluga`
--
ALTER TABLE `taluga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=313;

--
-- AUTO_INCREMENT for table `translate`
--
ALTER TABLE `translate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
