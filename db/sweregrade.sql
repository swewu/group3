-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2019 at 06:15 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sweregrade`
--
CREATE DATABASE IF NOT EXISTS `sweregrade` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `sweregrade`;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE `course` (
  `courseid` varchar(20) NOT NULL,
  `coursename` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseid`, `coursename`) VALUES
('DIM60-101', 'การเรู้สารสนเทศ'),
('GEN61-001', 'ภาษาไทยพื้นฐาน*'),
('GEN61-002', 'ภาษาอังกฤษพื้นฐาน*'),
('GEN61-113', 'ภาษาไทยเพื่อการสื่อสารร่วมสมัย'),
('GEN61-121', 'ทักษะการสื่อสารภาษาอังกฤษในชีวิตประจำวัน'),
('GEN61-122', 'การฟังและการพูดเชิงวิชาการ'),
('GEN61-123', 'การอ่านและการเขียนเชิงวิชาการ'),
('GEN61-124', 'ภาษาอังกฤษเพื่อการสอสารเชิงวิชาการ'),
('GEN61-127', 'ภาษาอังกฤษเพื่อการนำเสนองานทางวิทยาศาสตร์และเทคโนโลยี'),
('GEN61-129', 'ภาษาอังกฤษสําหรับสื่อและการสื่อสาร'),
('GEN61-141', 'ความเป็นไทยและพลเมือง'),
('GEN61-142', 'ปรัชญา จริยศาสตร์์'),
('GEN61-151', 'การแสวงหาความรู้และระเบียบวิจัย'),
('GEN61-152', 'การอนุรักษณ์สิ่งแวดล้อม'),
('GEN61-161', 'นวัตกรรมและผู้ประกอบการ'),
('GEN61-171', 'เทคโนโลยีสารสนเทศในยุคดิจิทัล*'),
('ICT60-111', 'การจัดการงานเอกสารและการประมวลผลข้อมูล'),
('MAT61-001', 'คณิตศาสตร์พื้นฐาน*'),
('MAT61-111', 'สถิติประยุกต์ '),
('MTA61-101', 'การออกแบบกราฟิกเพื่อการนำเสนอ'),
('SWE60-101', 'การแก้ไขปัญหาด้วยขั้นจอนวิธี'),
('SWE60-102', 'การพัฒนาโปรแกรมคอมพิวเตอร์'),
('SWE60-103', 'ออกแบบและพัฒนาเว็บ'),
('SWE60-121', 'คณิตศาสตร์ดิสครีต1'),
('SWE60-123', 'พีชคณิตเชิงเส้นสำหรับวิศวกรรมซอฟต์แวร์'),
('SWE60-124', 'กฏหมายและจริยธรรมด้านเทคโนโลยี'),
('SWE60-204', 'โครงสร้างข้อมูล'),
('SWE60-205', 'การวเคราะห์และออกแบบขั้นตอนวิธี'),
('SWE60-206', 'การเขียนโปรแกรมเชิงวัตถุ'),
('SWE60-207', 'การโปรแกรมบนเว็บ**'),
('SWE60-211', 'องค์ประกอบและสถาปัตยกรรมคอมพิวเตอร์'),
('SWE60-212', 'การสื่อสารข้อมูลและเครือข่ายคอมพิวเตอร์'),
('SWE60-213', 'ระบบปฏิบัติการ'),
('SWE60-214', 'ระบบฐานข้อมูล'),
('SWE60-222', 'คณิตศาสตร์ดิสครีต 2'),
('SWE60-231', 'ระบบสารสนเทศทางธุรกิจ'),
('SWE60-232', 'การวิเคราะห์และออกแบบเชิงวัตถุ'),
('SWE60-233', 'พื้นฐานวิศวกรรมความต้องการซอฟตแวร'),
('SWE60-242', 'การปฏิสัมพันธ์ระหว่างมนุษย์และคอมพิวเตอร'),
('SWE60-271', 'การจัดการโครงแบบซอฟต์แวร์'),
('SWE60-281', 'การออกแบบและพัฒนาฐานข้อมูลขั้นสูง'),
('SWE60-325', 'ฝึกปฏิบัติทางวิศวกรรมซอฟต์แวร์'),
('SWE60-341', 'ความมั่นคงซอฟต์แวร์'),
('SWE60-343', 'สถาปัตยกรรมและการออกแบบซอฟต์แวร์'),
('SWE60-351', 'การทดสอบซอฟต์แวร์'),
('SWE60-352', 'กระบวนการซอต์แวร์และการปรับปรุงกระบวนการ'),
('SWE60-361', 'มาตรวัดและการประกันคุณภาพซอฟต์แวร์'),
('SWE60-362', 'วิวัฒนาการซอฟต์แวร์และการบำรุงรักษา'),
('SWE60-372', 'การจัดการโครงการซอฟต์แวร์'),
('SWE60-382', 'การพัฒนาโปรแกรมประยุกต์สำหรับอุปกรณ์ไร้สาย**'),
('SWE60-390', 'เตรียมสหกิจศึกษา'),
('SWE60-393', 'สัมมนาทางวิศวกรรมซอฟต์แวร์'),
('SWE60-396', 'ทักษะสนับสนุนวิศวกรซอฟต์แวร์มืออาชีพ**'),
('SWE60-491', 'สหกิจศึกษา'),
('SWE60-494', 'โครงงานทางวิศวกรรมซอฟต์แวร์1'),
('SWE60-495', 'โครงงานทางวิศวกรรมซอฟต์แวร์2');

-- --------------------------------------------------------

--
-- Table structure for table `historygrade`
--

DROP TABLE IF EXISTS `historygrade`;
CREATE TABLE `historygrade` (
  `historyid` int(10) NOT NULL,
  `term` int(3) NOT NULL,
  `year` int(5) NOT NULL,
  `grade` varchar(3) NOT NULL,
  `studentid` int(10) NOT NULL,
  `courseid` varchar(20) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `coursename` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `regrade`
--

DROP TABLE IF EXISTS `regrade`;
CREATE TABLE `regrade` (
  `gradeid` int(10) NOT NULL,
  `term` int(3) NOT NULL,
  `year` int(5) NOT NULL,
  `grade` varchar(3) NOT NULL,
  `studentid` int(10) NOT NULL,
  `courseid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `studentid` int(10) NOT NULL,
  `studentname` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentid`, `studentname`) VALUES
(58111410, 'นายโกเมศ รักชุม'),
(58112418, 'นายฉลองราช ประสิทธิวงศ์'),
(58112970, 'นางสาวชิดชนก ยีสมัน'),
(58113341, 'นางสาวฏอฮีเราะฮ์ ฮูซัยนี'),
(58117656, 'นายพรชัย กลิ่นมาลา'),
(58120379, 'นายวุฒิชัย เพ็ชร์ทอง'),
(58121435, 'นายสิทธิชัย เขียวเข็ม'),
(58121856, 'นางสาวสุทสา จันหอม'),
(58122516, 'นายหฤษฎ์ คงทอง'),
(58140500, 'นายกิตปกรณ์ ทองเงิน'),
(58141623, 'นายทัศวัฒน์ รัตนพันธ์'),
(58142753, 'นางสาวประภาพร มั่งมี'),
(58143033, 'นายพงศธร จันด้วง'),
(58143900, 'นายมูฮัมหมัดมะฮ์ดี ราโอ๊ะ'),
(58144239, 'นายลิขสิทธิ์ สุขชาญ'),
(58144924, 'นายศุภณัฐ คุ้มปิยะผล'),
(58145236, 'นางสาวสุดารัตน์ ผิวอ่อน'),
(58147406, 'นายธนากร ลิ้มสกุล'),
(58148602, 'นางสาวสิริพร พุทธวิริยะ'),
(58149840, 'นายอลีฟ รักไทรทอง'),
(58162660, 'นายสมศักดิ์ หมั่นถนอม'),
(58162694, 'นายสหรัฐ รักดำ'),
(59112557, 'นายชัยสิทธิ์ คุณาปกรณ์การ'),
(59113423, 'นายณัฐดนัย จารย์โพธิ์'),
(59113589, 'นายณัฐพล บุญสุวรรณ์'),
(59114462, 'นายธนวัฒน์ อุไรรัตน์'),
(59114819, 'นางสาวธิดารัตน์ สุรัตวดี'),
(59119438, 'นายวณัฐพงค์ ปริตรศิรประภา'),
(59119941, 'นางสาววิชุตา หมาดอะดำ'),
(59120535, 'นางสาวศิริกัญญา หัตถการ'),
(59121368, 'นางสาวสิดารัศมิ์ ขาวบาง'),
(59121970, 'นางสาวสุภาวดี โพธิ์แป้น'),
(59123570, 'นายอารีฟีน กุลดี'),
(59141242, 'นางสาวณกรตา เปียทอง'),
(59142901, 'นายพัฒนะศักดิ์ พิเศษศิลป์'),
(59147918, 'นายณัฐวุฒิ ชูบัวทอง'),
(60110673, 'นายพงศธร รักทอง'),
(60110863, 'นายธีนพัฒน์ รัตนวงศ์'),
(60111465, 'นางสาวเสาวรัตน์ ชวนดี'),
(60112869, 'นางสาวเก็จมณี ทองใบ'),
(60113008, 'นางสาวปัญญพัฒน์ เจือบุญ'),
(60113479, 'นางสาวอะวาฏิฟ ยูโซ๊ะ'),
(60113834, 'นายชลธาร แก้วเจริญ'),
(60114105, 'นายนฤเบศ รีวรรณ'),
(60118296, 'นางสาวศิริรัตน์ วิชิตแย้ม'),
(60120623, 'นายชัชวาล สุคนธปฏิภาค'),
(60140183, 'นางสาวจุตติมาศ มาลัย'),
(60140365, 'นายบุรินทร์ พันธ์ชาติ'),
(60140852, 'นางสาวธัญวรัตน์ จินดา'),
(60141900, 'นายคุณัชญ์ ทองมี'),
(60144235, 'นายสุทธิพงษ์ จินตาแก้ว'),
(60144730, 'นายศิริศักดิ์ ใหม่สุดใจ'),
(60144961, 'นางสาวศิริวรรณ กองกุล'),
(60146313, 'นายกิตติพงษ์ ทูรย์ภานุประพันธ์'),
(60191053, 'นายกฤตภาส พุ่มแก้ว'),
(61101192, 'นางสาวจริยาวดี เนียมนาค'),
(61101242, 'นายจักรพงษ์ กระต่ายทอง'),
(61101655, 'นางสาวจุฑาภรณ์ พุ่มมณี'),
(61102299, 'นายโชติวิชช์ วรเดช'),
(61103776, 'นายธิติพงศ์ ปุรินสุวรรณ'),
(61104139, 'นายนลธวัช แก้วจีน'),
(61105482, 'นายปานเทพ ศรีสมโภชน์'),
(61105631, 'นางสาวปิยมินทร์ ใจมา'),
(61105888, 'นายพนมกร มหาสวัสดิ์'),
(61107686, 'นายวรเมธ ขวัญนิมิตร'),
(61108262, 'นางสาวศรินญา คงเส้ง'),
(61108718, 'นางสาวสจีหัสสา อินทรวิมล'),
(61111191, 'นางสาวจิราวรรณ ช่วยแก้ว'),
(61111415, 'นางสาวชุติมา อนันตกูล'),
(61113239, 'นายวิทวัส ช่วยพนัง'),
(61113403, 'นายศิวกร หนักแน่น'),
(61113619, 'นายสิทธินนท์ เดิมหลิ่ม'),
(61113858, 'นายสุวิจักขณ์ พิศสุพรรณ'),
(61115184, 'นายก่อกฤษฎิ์ อินทิศ'),
(61115267, 'นางสาวชนิกานต์ พจมานพงศ์'),
(61116141, 'นายณธกร จิระอรรคพงษ์'),
(61118717, 'นายรัตธนาตย์ รัตนพันธุ์'),
(61120531, 'นายชุมพร แก้วพิทักษ์'),
(61122685, 'นางสาวสัณห์สินี รักเนียม');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `userid` int(10) UNSIGNED ZEROFILL NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `role`) VALUES
(0000000001, 'admin', 'root', 'Admin'),
(0000000002, 'lecture', 'l1234', 'Lecture'),
(0000000003, 'student', 's1234', 'Student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`courseid`);

--
-- Indexes for table `historygrade`
--
ALTER TABLE `historygrade`
  ADD PRIMARY KEY (`historyid`),
  ADD KEY `fk_historygrade_student_idx` (`studentid`),
  ADD KEY `fk_historygrade_course1_idx` (`courseid`);

--
-- Indexes for table `regrade`
--
ALTER TABLE `regrade`
  ADD PRIMARY KEY (`gradeid`),
  ADD KEY `fk_regrade_student1_idx` (`studentid`),
  ADD KEY `fk_regrade_course1_idx` (`courseid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `historygrade`
--
ALTER TABLE `historygrade`
  MODIFY `historyid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `regrade`
--
ALTER TABLE `regrade`
  MODIFY `gradeid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `studentid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61122686;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `historygrade`
--
ALTER TABLE `historygrade`
  ADD CONSTRAINT `fk_historygrade_course1` FOREIGN KEY (`courseid`) REFERENCES `course` (`courseid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_historygrade_student` FOREIGN KEY (`studentid`) REFERENCES `student` (`studentid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `regrade`
--
ALTER TABLE `regrade`
  ADD CONSTRAINT `fk_regrade_course1` FOREIGN KEY (`courseid`) REFERENCES `course` (`courseid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_regrade_student1` FOREIGN KEY (`studentid`) REFERENCES `student` (`studentid`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
