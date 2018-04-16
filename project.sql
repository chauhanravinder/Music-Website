-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2016 at 11:18 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `albumcatid` int(100) NOT NULL,
  `albumname` varchar(200) NOT NULL,
  `albumpic` varchar(200) NOT NULL,
  `albumid` int(10) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`albumcatid`, `albumname`, `albumpic`, `albumid`, `description`) VALUES
(4, 'Sardaar Ji', 'no.png', 1, ''),
(5, 'Rustom', 'no.png', 2, ''),
(5, 'Dishoom', 'no.png', 5, ''),
(5, 'ABCD 2', 'no.png', 6, '');

-- --------------------------------------------------------

--
-- Table structure for table `approve`
--

CREATE TABLE `approve` (
  `artistname` varchar(255) NOT NULL,
  `songtitle` varchar(255) DEFAULT NULL,
  `song` varchar(255) DEFAULT NULL,
  `songid` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `datetime` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approve`
--

INSERT INTO `approve` (`artistname`, `songtitle`, `song`, `songid`, `image`, `datetime`) VALUES
('singer4', 'song4', '1476473784Maid with the Flaxen Hair.mp3', 2, 'music.jpg', '$[5'),
('Singer 1', 'Song 1', '1468772052Kalimba.mp3', 7, 'music.jpg', '$[5'),
('Singer 2', 'Song 2', '1468772074Maid with the Flaxen Hair.mp3', 8, 'music.jpg', '$[5'),
('Singer 3', 'Song 3', '1468772095Sleep Away.mp3', 9, 'music.jpg', '$[5');

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `artistcatid` int(11) NOT NULL,
  `artistname` varchar(255) DEFAULT NULL,
  `artistpic` varchar(255) DEFAULT NULL,
  `artistid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`artistcatid`, `artistname`, `artistpic`, `artistid`) VALUES
(5, 'Arjit Singh', '1468745108a9.jpg', 13),
(5, 'Ankit Tiwari', '1468745319ankit.jpg', 14),
(4, 'Diljit Dosanjh', '1468754518di.jpg', 15),
(5, 'Mustafa_Zahid', 'no.png', 16),
(4, 'Happy Riakoti', 'no.png', 17),
(4, 'Ammy Virk', 'no.png', 18),
(4, 'Nooran Sisters', 'no.png', 20),
(4, 'Sippy  Gill', 'no.png', 21),
(4, 'Gurlej Akhtar', 'no.png', 22),
(4, 'Kamal Khan', 'no.png', 23),
(4, 'Amrit Maan', 'no.png', 24),
(4, 'Taaranum', 'no.png', 25),
(4, 'akhil', 'no.png', 26),
(5, 'Atif Aslam', 'no.png', 27),
(5, 'Sukriti kakar', 'no.png', 28),
(5, 'Jasraj Joshi', 'no.png', 29),
(5, 'Shreya Goshal', 'no.png', 30),
(5, 'Arko', 'no.png', 31),
(5, 'Raghav Sachar', 'no.png', 32),
(5, 'Abhijit Sawant', 'no.png', 33),
(5, 'Antara Mitra', 'no.png', 34),
(5, 'Jonita Gandhi', 'no.png', 35),
(5, 'Shahid Mallaya', 'no.png', 36),
(6, 'Sunanda', 'no.png', 37),
(6, 'A Kay', 'no.png', 38),
(6, 'Rahat Fateh Ali khan', 'no.png', 39),
(6, 'Maninder Butter', '147647739814763978082a1IFEZDTw4.jpg', 40);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category` varchar(255) NOT NULL,
  `catid` int(11) NOT NULL,
  `catimage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category`, `catid`, `catimage`) VALUES
('Punjabi', 4, 'punjabi.jpg'),
('Bollywood', 5, 'bollywood.jpg'),
('Single track', 6, 'single.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `name` varchar(200) NOT NULL,
  `mail` text NOT NULL,
  `phone` int(200) NOT NULL,
  `msg` text NOT NULL,
  `msgid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`name`, `mail`, `phone`, `msg`, `msgid`) VALUES
('hgfhg', 'jgjhgjhg', 465465465, 'mhjvjvhg', 7);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `aboutus` varchar(255) DEFAULT NULL,
  `aboutid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `phone`, `mail`, `aboutus`, `aboutid`) VALUES
('ravi', 'ravi@gmnbn.com', '44213218', 'hgfgfgdgfdgf', 4),
('ravi', 'ravi@gmnbn.com', '44213218', 'hgfgfgdgfdgf', 5),
('dgfdg', 'jgjhj', '46513213246', 'jhgvjhgvjhvj', 6),
('dgfdg', 'jgjhj', '46513213246', 'jhgvjhgvjhvj', 7),
('dgfdg', 'jgjhj', '46513213246', 'jhgvjhgvjhvj', 8),
('gjhvjhv', 'nvjhgjh', '4645328', 'jhvjbvnbv', 9),
('gjhvjhv', 'nvjhgjh', '4645328', 'jhvjbvnbv', 10),
('gjhvjhv', 'nvjhgjh', '4645328', 'jhvjbvnbv', 11),
('gjhvjhv', 'nvjhgjh', '4645328', 'jhvjbvnbv', 12);

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `catid` int(200) NOT NULL,
  `orignalname` text NOT NULL,
  `songname` text NOT NULL,
  `album` text NOT NULL,
  `artist` text NOT NULL,
  `image` text NOT NULL,
  `songid` int(11) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`catid`, `orignalname`, `songname`, `album`, `artist`, `image`, `songid`, `datetime`) VALUES
(4, '1476396195Pappleen-Diljit_Dosanjh-www.Mp3Mad.Com.mp3', 'Pappleen', '1', '15', 'music.jpg', 2, '2016-10-14 03:33:15'),
(4, '1476410765Rumaal-Diljit_Dosanjh-www.Mp3Mad.Com.mp3', 'Rumaal', '1', '15', 'music.jpg', 3, '2016-10-14 07:36:05'),
(5, '1476410965Tere Sang Yaara-Atif Aslam-www.Mp3Mad.Com.mp3', 'Tere Sang Yaara', '2', '27', 'music.jpg', 4, '2016-10-14 07:39:25'),
(5, '1476411031Tay Hai-Ankit Tiwari-www.Mp3Mad.Com.mp3', 'Tay hai', '2', '14', 'music.jpg', 5, '2016-10-14 07:40:31'),
(6, '1476411143Naa_Balliey_-_A_Kay_-_128Kbps_-_www.DjPunjab.Com.mp3', 'Naa Balliye', 'No artist available', '38', '14764111431468558825maa.jpg', 6, '2016-10-14 07:42:23'),
(6, '1476411249Billi_Akh_-_Sunanda_-_128Kbps_-_www.DjPunjab.Com.mp3', 'Billi Akh', 'No artist available', '37', '1476411249akh.jpg', 7, '2016-10-14 07:44:09'),
(5, '1476411453Sau Tarah Ke-Jonita Gandhi,Amit Mishra-www.Mp3Mad.Com.mp3', 'Sau Tarah Ke', '5', '35', '1476411453cover.jpg', 8, '2016-10-14 07:47:33'),
(5, '1476411495Toh Dishoom-Shahid Mallya,Raftaar-www.Mp3Mad.Com.mp3', 'Toh Dishoom', '5', '36', '1476411495cover.jpg', 9, '2016-10-14 07:48:15'),
(5, '1476411525Ishqa-Abhijeet Sawant,Antara Mitra-www.Mp3Mad.Com.mp3', 'Ishqa', '5', '33', '1476411525cover.jpg', 10, '2016-10-14 07:48:45'),
(6, '1476477439Viah-Maninder_Buttar-Bling_Singh-www.Mp3Mad.Com.mp3', 'Viah', 'No artist available', '40', 'music.jpg', 11, '2016-10-15 02:07:19');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `name` varchar(500) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `mobile`, `email`, `password`, `type`) VALUES
('Admin', '46546464', 'admin', '123', 'admin'),
('mandeep', '854215428', 'kaur@gmail.com', '789', 'admin'),
('raj', '8946546516', 'raj@gmail.com', '123', 'admin'),
('rani', '987542651544', 'rani@gmail.com', '123', 'normal'),
('ravi', '85468895221', 'ravi12@gmail.com', '123', 'normal'),
('ravi', '9875464121', 'ravi@gmail.com', '123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) NOT NULL,
  `pic` varchar(500) NOT NULL,
  `slidercatid` int(11) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `pic`, `slidercatid`, `datetime`) VALUES
(46, '147639751229063-sh.jpg', 4, '2016-10-14 03:55:12'),
(47, '14763978082a1IFEZDTw4.jpg', 4, '2016-10-14 04:00:08'),
(48, '1476397977munda-ambarsariya-happy-raikoti.jpg', 4, '2016-10-14 04:02:57'),
(49, '1476398054gani.jpg', 4, '2016-10-14 04:04:14'),
(50, '147639814414686290421468558704galliyan.jpg', 5, '2016-10-14 04:05:44'),
(51, '14763982171468629238dil.jpg', 6, '2016-10-14 04:06:57'),
(52, '14763982291468558825maa.jpg', 6, '2016-10-14 04:07:09'),
(53, '1476398287cover.jpg', 5, '2016-10-14 04:08:07'),
(54, '1476398479cover.jpg', 5, '2016-10-14 04:11:19'),
(55, '14764700221468628238d.jpg', 4, '2016-10-15 12:03:42'),
(56, '14764700661468629347gani.jpg', 4, '2016-10-15 12:04:26'),
(57, '14764701381468628225dil.jpg', 4, '2016-10-15 12:05:38'),
(58, '14764771212a1IFEZDTw4.jpg', 6, '2016-10-15 02:02:01'),
(59, '14764771831476411249akh.jpg', 6, '2016-10-15 02:03:03'),
(60, '14764771981476411249akh.jpg', 6, '2016-10-15 02:03:18');

-- --------------------------------------------------------

--
-- Table structure for table `usersongs`
--

CREATE TABLE `usersongs` (
  `artistname` varchar(255) NOT NULL,
  `songtitle` varchar(255) DEFAULT NULL,
  `song` varchar(255) DEFAULT NULL,
  `songid` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usersongs`
--

INSERT INTO `usersongs` (`artistname`, `songtitle`, `song`, `songid`, `image`, `datetime`) VALUES
('rahul', 'tere bin', '1476473753Sleep Away.mp3', 1, 'music.jpg', '2016-10-15 01:05:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`albumid`);

--
-- Indexes for table `approve`
--
ALTER TABLE `approve`
  ADD PRIMARY KEY (`songid`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`artistid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`msgid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`aboutid`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`songid`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`email`(300));

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usersongs`
--
ALTER TABLE `usersongs`
  ADD PRIMARY KEY (`songid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `albumid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `approve`
--
ALTER TABLE `approve`
  MODIFY `songid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `artistid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `msgid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `aboutid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `songid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `usersongs`
--
ALTER TABLE `usersongs`
  MODIFY `songid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
