-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2023 at 09:50 AM
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
-- Database: `epro`
--

-- --------------------------------------------------------

--
-- Table structure for table `add`
--

CREATE TABLE `add` (
  `aid` int(20) NOT NULL,
  `company` varchar(255) NOT NULL,
  `name` varchar(252) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` int(111) NOT NULL,
  `city` varchar(255) NOT NULL,
  `astatus` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add`
--

INSERT INTO `add` (`aid`, `company`, `name`, `email`, `password`, `phone`, `city`, `astatus`) VALUES
(1, 'Tcs', 'hamza', 'hamza@gmail.com', '$2y$10$O3cpp.5Ds8/T4YrIxTNwiuvLYHkSJtoFFMEuuNdhRN0Vcvv3jNadW', 2147483647, 'Karachi', 1),
(2, 'Leopards', 'Subhan', 'subhan@gmail.com', '$2y$10$huh0QZyqvRt3Cq2BTnH9sODzl8jw4T3HWxkQGCybzDydjR9kF5FJC', 2147483647, 'Lahore', 1),
(3, 'Trax', 'Waqas', 'waqas@gmail.com', '$2y$10$Pnm/0aakKV8PbhhvjieBiueDyszksU9FceJj5TV37lnWI9uB02vsa', 2147483647, 'Islamabad', 1),
(4, 'Tcs', 'aqib', 'aqib@gmail.com', '$2y$10$l9y/szhWLTnCkzhppG6V9.XzvVBzT4uBIlIgGtcXwtOLlOfTg2v22', 925924866, 'Lahore', 1),
(5, 'Leopards', 'rohan', 'rohan@gmail.com', '$2y$10$xgWDf6z0ezU7YVMAGKtCduk.mUfBly5YhWPprYB26ET5p40QlqT/u', 2147483647, 'Karachi', 1),
(6, 'Trax', 'sufiyan', 'sufiyan@gmail.com', '$2y$10$aZp6XPfZvkab9zwK9zvdLuOj3grtTn8PpYIUcYTKNsooJWUSQmn8e', 923456909, 'Karachi', 1),
(7, 'Tcs', 'Naveed', 'naved@gmail.com', '$2y$10$T64.hiMttfl1fjxA7LwI9OL92SvCEhxS/1Ie8NKQzo78ShvPamQg2', 34545456, 'Islamabad', 1),
(8, 'Leopards', 'Ahmed', 'ahmed@gmail.com', '$2y$10$WDvut48GqmUMwO5KAZg5WesqIb1ob22wVVNY/VkOxTa/NFiXCcCuG', 986124866, 'Islamabad', 1),
(10, 'Trax', 'saqib', 'saqib0@gmail.com', '$2y$10$oSqv0PzRp9SznIrm6jIXaeUU9.X.kNurtvKh2jVYxEx0NqqS/RoOm', 9883647, 'Lahore', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(111) NOT NULL,
  `email` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(7, 'affan', 'siddiquiaffan701@gmail.com', '$2y$10$LLrWut1jqQjLAoKiddodZeyZPd3f.VD8Ff3eNXX0rgZQPoQWeJ7LK');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `fid` int(88) NOT NULL,
  `aid` int(22) NOT NULL,
  `id` int(29) NOT NULL,
  `price` varchar(200) NOT NULL,
  `bdate` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`fid`, `aid`, `id`, `price`, `bdate`, `status`) VALUES
(28, 4, 38, 'Total Price: 39600', '2023-12-02', 1),
(44, 7, 41, 'Total Price: 397200', '2023-11-07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `fid` int(111) NOT NULL,
  `scompany` varchar(167) NOT NULL,
  `fname` varchar(122) NOT NULL,
  `lname` varchar(321) NOT NULL,
  `femail` varchar(111) NOT NULL,
  `raddress` text NOT NULL,
  `saddress` text NOT NULL,
  `city` varchar(212) NOT NULL,
  `phone` int(111) NOT NULL,
  `ctype` varchar(122) NOT NULL,
  `weight` varchar(112) NOT NULL,
  `date` date NOT NULL,
  `orderNum` int(11) NOT NULL,
  `gender` varchar(222) NOT NULL,
  `status` varchar(88) NOT NULL DEFAULT 'In Progress'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`fid`, `scompany`, `fname`, `lname`, `femail`, `raddress`, `saddress`, `city`, `phone`, `ctype`, `weight`, `date`, `orderNum`, `gender`, `status`) VALUES
(28, 'Tcs', 'noor', 'male', 'sufiyan123siddiqui123@gmail.com', '2848 du Caminito Street, Los Angeles, LA 91214.', '2131 El Gulshan-iqbal Street, Karachi, LA 91213.', 'Lahore', 998855656, 'tissue box', '33', '2023-11-03', 84689, 'Male', 'deliver'),
(29, 'Tcs', 'david', 'khan', 'hamza@gmail.com', '2848 du Caminito Street, Los Angeles, LA 91214.', '2131 Eo Gulshan-iqbal Street, Karachi, LA 91214.', 'Lahore', 344576768, 'liquid', '9', '2023-11-08', 79351, 'Male', 'deliver'),
(30, 'Leopards', 'waleed', 'khan', 'waleed@gmail.com', 'D 2/5  Nazimabad no 2 Karachi near imtiaz', '2131 Eo Gulshan-iqbal Street, Karachi, LA 91214.', 'Karachi', 2147483647, 'tissue box', '2', '2023-12-01', 69047, 'Male', 'deliver'),
(31, 'Tcs', 'naveed', 'khan', 'naveed@gmail.com', '2848 du Caminito Street, Los Angeles, LA 91214.', '2131 El Gulshan-iqbal Street, Karachi, LA 91213.', 'Karachi', 398998111, 'tissue box', '31', '2023-11-06', 45295, 'Male', 'In Progress'),
(32, 'Tcs', 'arham', 'sheikh', 'arham@gmail.com', '2848 du Caminito Street, Los Angeles, LA 91214.', 'D 2/5  Nazimabad no 2 Karachi near imtiaz', 'Karachi', 332989891, 'documents', '12', '2023-10-29', 46928, 'Male', 'In Progress'),
(33, 'Leopards', 'maaz', 'masood', 'maaz@gmail.com', 'D 2/5  Nazimabad no 2 Karachi near imtiaz', '2131 Eo Gulshan-iqbal Street, Karachi, LA 91214.', 'Karachi', 315592486, 'documents', '54', '2023-11-04', 46697, 'Male', 'In Progress'),
(34, 'Leopards', 'aliza', 'khan', 'aliza@gmail.com', '2848 du Caminito Street, Los Angeles, LA 91214.', 'D 2/5  Nazimabad no 2 Karachi near imtiaz', 'Lahore', 315592486, 'dress', '22', '2023-11-04', 8767, 'Female', 'In Progress'),
(35, 'Leopards', 'areeb', 'siddiqui', 'areeb@gmail.com', '2848 du Caminito Street, Los Angeles, LA 91214.', '2131 El Gulshan-iqbal Street, Karachi, LA 91213.', 'Lahore', 315592418, 'documents', '11', '2023-10-30', 48856, 'Male', 'deliver'),
(36, 'Trax', 'saira', 'azam', 'saira@gmail.com', 'nazimabad', '2131 Eo Gulshan-iqbal Street, Karachi, LA 91214.', 'Lahore', 315687861, 'Parcel Monkey', '211', '2023-11-02', 44237, 'Female', 'deliver'),
(41, 'Trax', 'arbab', 'khan', 'arbab@gmail.com', '2848 du Caminito Street, Los Angeles, LA 91214.', '2131 El Gulshan-iqbal Street, Karachi, LA 91213.', 'Karachi', 315592486, 'tissue box', '19', '2023-11-01', 98788, 'Male', 'deliver'),
(42, 'Trax', 'ayan', 'khan', 'ayan@gmail.com', '2848 du Caminito Street, Los Angeles, LA 91214.', 'D 2/5  Nazimabad no 2 Karachi near imtiaz', 'Islamabad', 879898989, 'documents', '44', '2023-10-26', 47701, 'Male', 'deliver'),
(43, 'Leopards', 'subata', 'zubair', 'subata@gmail.com', '2848 du Caminito Street, Los Angeles, LA 91214.', 'D 2/5  Nazimabad no 2 Karachi near imtiaz', 'Islamabad', 351868111, 'parcel box', '64', '2023-10-25', 90437, 'Female', 'deliver'),
(44, 'Tcs', 'mujataba', 'khan', 'mujataba@gmail.com', 'sec2', 'North Karachi', 'Islamabad', 387872711, 'box', '331', '2023-11-02', 4088, 'Male', 'deliver');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(88) NOT NULL,
  `firstname` varchar(222) NOT NULL,
  `lastname` varchar(444) NOT NULL,
  `email` varchar(222) NOT NULL,
  `password` varchar(233) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `password`, `status`) VALUES
(8, 'Farees', 'khan', 'farees@gmail.com', '$2y$10$sBFzDlMqWaq1yDH89syxnO616fZmUWWybuSJx/6dxWXn1DOmsyyvy', 1),
(9, 'rohan', 'ali', 'rohan@gmail.com', '$2y$10$.Pg6Lztq1DrIk4Q.IS0Kmej1XwHdtPWgLm87pvVy0ScuTeOvz/iYO', 1),
(10, 'amir', 'ali', 'amir@gmail.com', '$2y$10$GCiFlO890WwxdiQ4cc9q9uIfDIkub9ps58hkqQNbnjJyp9W2FlC02', 1),
(11, 'nawaz', 'ayub', 'nawaz@gmail.com', '$2y$10$zv8hatBZ.awonHn4PfDyjeStKQb7/MAEUIKcWcZIlj8t8.3udhOqS', 1),
(12, 'huzaifa', 'ali', 'huzaifa@gmail.com', '$2y$10$YZaDOT4J9ky2kR5W18mLEuuJszKlNmaCHu5Ri15uAGXNA3TavGBj6', 1),
(13, 'haris', 'khan', 'haris@gmail.com', '$2y$10$Kz8tkoOoxp.8A9N/dhMfFepdaliTsvtHLIi5uK62L/0ZeGKZ5woze', 1),
(14, 'faizan', 'ali', 'siddiquifaizan154@gmail.com', '$2y$10$gV3RyCcRfOM/d4pE5EhZPO7x7SE2oaw3on.ptbeGDhbmV4PsBY7zi', 1),
(15, 'azeem', 'ali', 'aa@gmail.com', '$2y$10$pkbRefsqUwUvAv/oETiLCOsKXlQy.OJFyW/8WJwkxdCDOIT8WrLeS', 1),
(16, 'Affan', 'siddiqui', 'abc@gmail.com', '$2y$10$2aVivfuAefuB6SG3xWnnM.Jv7FBwSA65YOpioU4jb4/quE3dOeNZG', 1),
(17, 'amir', 'ali', 'pp@gmail.com', '$2y$10$FO56s.jYIdGJz0SR4IemT.gikRw2sAlYcMiHE5ZKpR.u5orhIDNom', 1),
(18, 'hama', 'siddiqui', 'subhan@gmail.com', '$2y$10$zdx8jniu86N0ecnnT1.70ut3519RYZMvj4/dpEJrK9b.jwaq5SMNe', 1),
(19, 'aa', 'aa', 'Affansiddiqui3@gmail.com', '$2y$10$wbdCimVLViUi/ZjACcZsROCNMuN./sEQQr6crDmsEpIIoTyWd3FYa', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add`
--
ALTER TABLE `add`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aid` (`aid`),
  ADD KEY `fid` (`fid`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add`
--
ALTER TABLE `add`
  MODIFY `aid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(29) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `fid` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(88) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`aid`) REFERENCES `add` (`aid`),
  ADD CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`fid`) REFERENCES `form` (`fid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
