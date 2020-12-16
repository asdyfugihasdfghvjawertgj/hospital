-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2020 at 03:45 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_donation`
--

CREATE TABLE `blood_donation` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `tob` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_donation`
--

INSERT INTO `blood_donation` (`id`, `name`, `email`, `phone`, `dob`, `tob`) VALUES
(2, 'Hsu Mon Kyaw', 'hkunpay7@gmail.com', '09262888722', '2020-11-01', 'O+'),
(3, 'Khun Chit Hlai', 'hkunpay7@gmail.com', '09262888722', '2020-11-01', 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `blood_register`
--

CREATE TABLE `blood_register` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bookingregister`
--

CREATE TABLE `bookingregister` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookingregister`
--

INSERT INTO `bookingregister` (`id`, `name`, `phone`, `email`, `password`) VALUES
(2, '', '', 'hsumonkyaw@gmail.com', '123'),
(3, '', '', 'hsumonkyaw@gmail.com', '123'),
(4, '', '', 'khunchithlai@gmail.com', '123'),
(5, '', '', 'hkunpay7@gmail.com', 'hsumonkyaw'),
(6, '', '', 'hsumonkyaw@gmail.com', '123456'),
(7, '', '', 'hkunpay7@gmail.com', '123456'),
(9, 'Khun Khun', '09785454222', 'hkunpay7@gmail.com', 'chithlai'),
(10, 'Ei Mon Kyaw', '09954168420', 'eimonkyaw@gmail.com', 'eimonkyaw'),
(11, 'Ma Aye Aye', '09757809756', 'maayeaye@gmail.com', 'ayeaye'),
(12, 'Khun Chit Hlai', '09262888722', 'hkun7@gmail.com', '123456'),
(13, 'Khun Chit Hlai', '09785454100', 'hkunpay7@gmail.com', '123456'),
(14, 'Khun Khun', '09785454100', 'hkunpay7@gmail.com', '12345'),
(15, 'khun chit', '09262888722', 'hsumonkyaw@gmail.com', '123'),
(16, 'Khun', '09954168420', 'Khun', '123'),
(17, 'Khun Chit Hlai', '09785454100', 'hkunpay7@gmail.com', '123'),
(18, 'Khun Khun', '09954168420', 'hkunpay7@gmail.com', '123456789'),
(19, 'Khun', '09954168420', 'hkunpay7@gmail.com', '1234'),
(20, 'Khun Chit Hlai', '09785454100', 'hkunpay7@gmail.com', '12345678'),
(21, 'Khun Chit Hlai', '09262478722', 'hsumonkyaw@gmail.com', '123'),
(22, 'Khun Chit Hlai', '09785454100', 'hkunpay7@gmail.com', '741852'),
(23, 'Khun Chit Hlai', '09785454100', 'hkunpay7@gmail.com', '147'),
(24, 'Khun Chit Hlai', '09785454100', 'hkunpay7@gmail.com', '11111'),
(25, 'Khun Chit Hlai', '09785454100', 'hkunpay7@gmail.com', '11111');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `patientid` varchar(255) NOT NULL,
  `doctorid` varchar(255) NOT NULL,
  `medicalconcern` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `userid`, `patientid`, `doctorid`, `medicalconcern`, `date`) VALUES
(1, '10', '2', '35', 'why throat is hurt', '2020-11-26 08:22:23'),
(2, '10', '2', '35', 'why throat is hurt', '2020-11-26 08:22:23'),
(3, '22', '2', '35', 'why throat is hurt', '2020-11-26 08:22:23'),
(4, '22', '2', '35', 'why throat is hurt', '2020-11-26 08:22:23'),
(5, '21', '2', '35', 'why throat is hurt', '2020-11-26 08:22:23'),
(6, '15', '2', '35', 'why throat is hurt', '2020-11-26 08:22:23'),
(7, '10', '2', '35', 'why throat is hurt', '2020-11-26 08:22:23'),
(8, '22', '2', '35', 'why throat is hurt', '2020-11-26 08:22:23'),
(9, '10', '2', '35', 'why throat is hurt', '2020-11-26 08:22:23'),
(10, '17', '2', '35', 'why throat is hurt', '2020-11-26 08:22:23'),
(11, '10', '2', '35', 'why throat is hurt', '2020-11-26 08:22:23'),
(12, '20', '2', '35', 'why throat is hurt', '2020-11-26 08:22:23'),
(13, '21', '2', '35', 'why throat is hurt', '2020-11-26 08:22:23'),
(14, '10', '2', '35', 'why throat is hurt', '2020-11-26 08:22:23'),
(15, '7', '8', '2', 'why throat is hurt', '2020-11-26 08:22:23'),
(16, '7', '9', '1', 'why throat is hurt', '2020-11-26 08:22:23'),
(17, '7', '10', '13', 'why throat is hurt', '2020-11-26 08:22:23'),
(18, '8', '9', '2', 'why throat is hurt', '2020-11-26 08:22:23'),
(19, '9', '11', '1', 'why throat is hurt', '2020-11-26 08:23:04'),
(20, '10', '12', '2', 'why throat is hurt', '2020-11-26 10:52:14'),
(21, '10', '13', '1', 'why throat is hurt', '2020-11-26 10:57:17'),
(22, '10', '14', '1', 'why throat is hurt', '2020-11-26 13:55:12'),
(23, '11', '15', '1', 'why throat is hurt', '2020-11-26 14:48:59'),
(24, '11', '16', '2', 'why throat is hurt', '2020-11-26 14:50:04'),
(25, '13', '17', '1', 'why throat is hurt', '2020-11-28 05:40:15'),
(26, '10', '20', '2', 'why throat is hurt', '2020-11-28 07:31:48'),
(27, '15', '20', '2', 'why throat is hurt', '2020-11-28 07:55:49'),
(28, '16', '21', '6', 'why throat is hurt', '2020-11-28 07:59:30'),
(29, '17', '22', '5', 'why throat is hurt', '2020-11-28 08:20:55'),
(30, '18', '23', '5', 'why throat is hurt', '2020-11-28 08:26:34'),
(31, '18', '24', '1', 'why throat is hurt', '2020-11-28 08:38:53'),
(32, '18', '25', '1', 'why throat is hurt', '2020-11-28 08:44:00'),
(33, '18', '26', '2', 'why throat is hurt', '2020-11-28 08:49:10'),
(34, '18', '27', '6', 'why throat is hurt', '2020-11-28 08:52:39'),
(35, '10', '28', '1', 'why throat is hurt', '2020-11-28 08:59:44'),
(36, '23', '29', '1', 'why throat is hurt', '2020-11-28 09:00:41'),
(37, '10', '30', '1', 'why throat is hurt', '2020-11-28 09:02:16'),
(38, '10', '12', '35', 'why throat is hurt', '2020-11-28 17:09:20');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `parent`) VALUES
(1, 'Throat', 'no parent'),
(2, 'Sore Throat', '1'),
(3, 'Throatwash', '1'),
(4, 'Bone', 'no parent'),
(5, 'Vitamin D deficiency', '4'),
(6, 'Bone Cancer', '4'),
(7, 'Bone Density', '4'),
(8, 'Bone Density', '4'),
(9, 'Eye', 'no parent'),
(10, 'Eye Pain', '9'),
(11, 'Dry Eye', '9'),
(12, 'Brain', 'no parent'),
(13, 'Sleepless', '12'),
(14, 'Weak Muscle', '12'),
(15, 'Tooth', 'no parent'),
(16, 'Broken teeth', '15'),
(17, 'Toothache', '15');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `image` longtext NOT NULL,
  `speciality` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `email`, `phone`, `address`, `degree`, `experience`, `image`, `speciality`) VALUES
(1, 'Dr.Hsu Mon Kyaw', 'hsumonkyaw@gmail.com', '09769977572', 'Ygn', 'M.B.,B.S (Degree)', '10 Month', 'photos/doctor1.jpg', 2),
(2, 'Dr . Aye Aye', 'ayeaye1990@gmail.com', '09769977572', 'Ygn', 'Ph.D ( Pathology)', '1 month', 'photos/doctor2.jpg', 2),
(3, 'Dr.Tun Win', 'dr.tunwin@gmail.com', '09262888722', 'Mdy', 'M.B.,B.S (Degree)', '1 year', 'photos/doctor11.jpg', 2),
(4, 'Dr.Moe Moe', 'moemoe121@gmail.com', '09785454100', 'Ygn', 'Dip. Med. Ed', '2 year', 'photos/doctor10.jpg', 2),
(5, 'Dr.Thet Oo San', 'thetoosan@gmail.com', '09262888722', 'Ygn', 'M.B.,B.S (Degree)', '1 year', 'photos/doctor5.jpg', 3),
(6, 'Dr.Khin Htike Kyaw', 'khinkhin@gmail.com', '09785454100', 'Rakhine', 'Dip. Med. Ed', '2 year', 'photos/doctor1.jpg', 3),
(7, 'Dr.Hsu Mon', 'hsumonkyaw@gmail.com', '09785454100', 'Kachin', '(Dip. Med. Ed )', '1 year', 'photos/doctor1.jpg', 5),
(8, 'Prof: Zaw Wai Soe', 'zawwaisoe@gmail.com', '09785454100', 'Ygn', 'M.B.,B.S (Degree)', '10 year', 'photos/bone5.jpg', 5),
(9, 'Prof: Khin Maung', 'khinmaunglay@gmail.com', '09785454100', 'Mdy', 'M.Med.Sc', '1 year', 'photos/bone2.jpg', 5),
(10, 'Prof: Win Win', 'dawwinwin@gmail.com', '09785454100', 'Ygn', ' M.Med.Sc', '1 year', 'photos/bone1.jpg', 7),
(11, 'Prof: Khin Hla Hla', 'khinhlahla@gmail.com', '09785454100', 'Ygn', 'Dip.Med.Ed', '1 year', 'photos/bone3.jpg', 6),
(12, 'Dr. Aung Kyaw Win', 'akweye@gmail.com', '09785454100', 'Ygn', 'M.B.B.S', '10 year', 'photos/eye1.jpg', 10),
(13, 'Dr.Aung Myat Soe', 'aungmyat@gmail.com', '09785454100', 'Ygn', 'M.Med.Sc ', '10 year', 'photos/eye2.jpg', 10),
(14, 'Dr.Aye Aye Khin', 'ayeayekhin@gmail.com', '09785454100', 'Mdy', 'M.B.,B.S ', '10 year', 'photos/eye3.jpg', 10),
(15, 'Dr.Aye Ko', 'ayekoko@gmail.com', '09785454100', 'Ygn', 'Dip. Med. Ed', '2 year', 'photos/eye4.jpg', 10),
(16, 'Dr.Aye Tun', 'koayetun@gmail.com', '09785454100', 'Mdy', 'M.B.,B.S', '2 year', 'photos/e5.jpg', 10),
(17, 'Dr.Aung Than ', 'aungthan@gmail.com', '09785454100', 'Mdy', 'M.B.,B.S', '1 year', 'photos/e6.jpg', 11),
(18, 'Dr.Aye Chan', 'ayechan@gmail.com', '09785454100', 'Ygn', 'M.B.,B.S', '2 year', 'photos/e7.jpg', 11),
(19, 'Dr.Moe Aye', 'moeaye@gmail.com', '09785454100', 'Ygn', 'M.B.,B.S', '10 year', 'photos/e8.jpg', 11),
(20, 'Dr.Thet Oo', 'thetoo@gmail.com', '09785454100', 'Mdy', 'M.B.,B.S', '1 year', 'photos/e9.jpg', 11),
(21, 'Dr.Aye Win', 'ayewinn@gmail.com', '09785454100', 'Ygn', 'M.B.,B.S', '10 Month', 'photos/e10.jpg', 11),
(22, 'Dr.Kyi Soe', 'kyisoe@gmail.com', '09785454100', 'Ygn', 'M.B.,B.S', '1 year', 'photos/b1.jpg', 13),
(23, 'Dr.Hsu Myat', 'hsumyat4@gmail.com', '09785454100', 'Mdy', 'Dip. Med. Ed', '1 year', 'photos/b2.jpg', 13),
(24, 'Dr.Soe Oo', 'soeoo3@gmail.com', '09785454100', 'Mdy', 'M.B.,B.S', '10 year', 'photos/b3.jpg', 13),
(25, 'Dr.Su Mon', 'sumonn@gmail.com', '09785454100', 'Mdy', 'Dip. Med. Ed', '1 year', 'photos/b4.jpg', 13),
(26, 'Dr.Htike Khin', 'htikekhin@gmail.com', '09262478722', 'Ygn', 'M.B.,B.S', '1 year', 'photos/b5.jpg', 13),
(27, 'Dr.Oo Ko Ko', 'kokoaoe@gmail.com', '09262888722', 'Ygn', 'Dip. Med. Ed', '10 year', 'photos/b6.jpg', 14),
(28, 'Dr.Ei Mon Kyaw', 'eimonkyaw@gmail.com', '09785454100', 'Mdy', 'M.B.,B.S', '1 year', 'photos/b2.jpg', 14),
(29, 'Dr.Aung Kyaw', 'aungkyaw@gmail.com', '09954168420', 'Ygn', 'M.B.,B.S (Degree)', '1 year', 'photos/b1.jpg', 14),
(30, 'Dr.Su Su', 'susu11@gmail.com', '09785454100', 'Ygn', 'M.B.,B.S', '1 year', 'photos/b2.jpg', 16),
(31, 'Dr.Thet Oo ', 'thetoo@gmail.com', '09785454100', 'Ygn', 'M.B.,B.S', '1 year', 'photos/b3.jpg', 16),
(32, 'Dr.Khin Oo', 'khinoo@gmail.com', '09785454100', 'Ygn', 'M.B.,B.S', '1 year', 'photos/b4.jpg', 16),
(33, 'Dr.Ei Thet Mon', 'eithetmon@gmail.com', '09785454100', 'Ygn', 'M.B.,B.S', '1 year', 'photos/eye3.jpg', 17),
(34, 'Dr.Myo Ko San', 'myokosan@gmail.com', '09954168420', 'Mdy', 'M.B.,B.S', '1 year', 'photos/e10.jpg', 17),
(35, 'Dr.Nay Toe Oo', 'naytoeoo@gmail.com', '09785454100', 'Ygn', 'M.B.,B.S', '10 year', 'photos/eye4.jpg', 17);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `firstname`, `lastname`, `dob`, `gender`, `email`) VALUES
(2, 'khun chith hlai', 'khun chit hlai', '2020-11-18', '', '09262888722'),
(3, 'khun chith hlai', 'khun chit hlai', '2020-11-18', 'male', '09262888722'),
(4, 'Hsu', 'Mon Kyaw', '2000-01-04', 'female', 'hsumonkyaw@gmail.com'),
(5, 'Hsu Mon', 'Kyaw', '2020-11-12', 'female', 'hsumonkyaw@gmail.com'),
(6, 'Hsu', 'Mon', '2000-01-04', 'female', 'hsumon@gmail.com'),
(7, 'Hsu', 'Mon', '2020-11-10', 'female', 'admin@gmail.com'),
(8, 'Hsu', 'Mon', '2001-01-04', 'female', 'admin@gmail.com'),
(9, 'Hsu Mon', 'Kyaw', '2020-11-27', 'female', 'hsumonkyaw@gmail.com'),
(10, 'Khun', 'chit hlai', '2020-11-10', 'male', 'hkunpay7@gmail.com'),
(11, 'Hsu Mon', 'Kyaw', '2020-11-01', 'female', 'hsumonkyaw@gmail.com'),
(12, 'Ei Mon', 'Kyaw', '2009-05-13', 'female', 'eimonkyaw11@gmail.com'),
(13, 'Hsu', 'Hsu', '2020-11-03', 'female', 'eimonkyaw12@gmail.com'),
(14, 'Ei', 'Hsu Mon', '2020-11-18', 'female', 'eimonkyaw13@gmail.com'),
(15, 'Aye ', 'Aye', '2020-11-15', 'female', 'aye@gmail.com'),
(16, 'Aye', 'Aye', '2020-11-24', 'female', 'aye@gmail.com'),
(17, 'khun', 'chit hlai', '1998-11-06', 'male', 'aaa@gmail.com'),
(18, 'Khun ', 'khun', '2009-06-28', 'male', 'aaa@gmail.com'),
(19, 'khun', 'khun', '1980-01-04', 'male', 'aaa@gmail.com'),
(20, 'khun chith hlai', 'dd', '2020-11-24', 'female', 'aaa@gmail.com'),
(21, 'khun chith hlai', 'kk', '2020-11-08', 'male', 'hsumonkyaw@gmail.com'),
(22, 'khun chith hlai', 'khun chit hlai', '2020-11-01', 'male', 'hsumonkyaw@gmail.com'),
(23, 'Ms Hsu', 'Mon Kyaw', '2000-01-04', 'female', 'hsumon@gmail.com'),
(24, 'khun chith hlai', 'khun chit hlai', '2020-11-01', 'male', 'admin@gmail.com'),
(25, 'khun chith hlai', 'khun chit hlai', '2020-11-29', 'male', '09262888722'),
(26, 'khun chith hlai', 'khun chit hlai', '2020-11-27', 'male', 'hsumonkyaw@gmail.com'),
(27, 'khun chith hlai', 'khun chit hlai', '2020-11-15', 'male', 'hsumonkyaw@gmail.com'),
(28, 'khun chith hlai', 'khun chit hlai', '2020-11-01', 'male', 'admin@gmail.com'),
(29, 'khun chith hlai', 'khun chit hlai', '2020-11-01', 'male', 'hsumonkyaw@gmail.com'),
(30, 'khun chith hlai', 'khun chit hlai', '2020-11-29', 'male', 'aaa@gmail.com'),
(31, 'khun chith hlai', 'khun chit hlai', '2020-11-01', 'male', '09262888722'),
(32, 'khun chith hlai', 'khun chit hlai', '2020-11-15', 'male', 'aaa@gmail.com'),
(33, 'khun chith ', 'hlai', '2020-11-13', 'male', 'aaa@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `firstname`, `lastname`, `gender`, `dob`, `email`, `password`) VALUES
(1, 'Hsu Mon', 'Kyaw', 'female', '2020-11-10', 'hsumonkyaw@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `email`, `password`) VALUES
(1, 'khunchithlai@gmail.com', '12345'),
(4, 'adf@', '111'),
(5, 'adf@', '111'),
(6, 'adf@', '222'),
(7, 'adf@', '111'),
(8, 'adf@', '111'),
(9, 'adf@', 'ggg'),
(10, 'adf@', 'ggg'),
(11, 'adf@', 'nnn'),
(12, 'aaa@gmail.com', '222');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(11) NOT NULL,
  `doctorid` varchar(255) NOT NULL,
  `dayname` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `doctorid`, `dayname`, `time`) VALUES
(2, '16', '3', '12am to 2am'),
(3, '1', '2', '8am to 10am'),
(4, '1', '1', '8am to 10am'),
(5, '33', '1', '8am to 10am');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_donation`
--
ALTER TABLE `blood_donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_register`
--
ALTER TABLE `blood_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookingregister`
--
ALTER TABLE `bookingregister`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_donation`
--
ALTER TABLE `blood_donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blood_register`
--
ALTER TABLE `blood_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bookingregister`
--
ALTER TABLE `bookingregister`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
