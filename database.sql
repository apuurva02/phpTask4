--
-- MySQL 5.6.17
-- Mon, 22 Jun 2015 04:42:57 +0000
--

CREATE DATABASE `nitt` DEFAULT CHARSET latin1;

USE `nitt`;

CREATE TABLE `student` (
   `rollno` int(9) not null,
   `name` varchar(20) not null,
   `department` varchar(50) not null,
   `year` varchar(20) not null,
   `email` varchar(100) not null,
   `password` varchar(20) not null,
   `profilepath` varchar(50) not null,
   `uniqueno` varchar(100) not null
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `student` (`rollno`, `name`, `department`, `year`, `email`, `password`, `profilepath`, `uniqueno`) VALUES 
('110110110', 'Aditi', 'Electronics and Communication Engineering', '3rd Year', 'adit07@gmail.com', '655a2c5c0ee40e35af43', 'uploads/picture_3.jpg', '6922949125'),
('112345678', 'Quetsia', 'Civil Engineering', '2nd Year', 'qwe@gmail.com', '1fae3ce0905862435d03', 'uploads/picture_4.jpg', '2669974210'),
('145432678', 'laxmi', 'Architecture', '2nd Year', 'lakshmi@gmail.com', '8443146b6b648b223461', 'uploads/picture_6.jpg', '8877641954'),
('142356987', 'Lisbon', 'Instrumentation and Control Engineering', '3rd Year', 'lisbon@mail.com', 'e1ba4be3359617a84267', 'uploads/picture_2.jpg', '2400338725'),
('107253698', 'Sathy', 'Metallurgical and Materials Engineering', '3rd Year', 'sathy2011@gmail.com', 'c5f03a59447d5bfca78b', 'uploads/picture_9.jpg', '5217980092'),
('192192192', 'Ram', 'Computer Science and Engineering', '2nd Year', 'ram@gmail.com', '93ea7312f2dbe017e533', 'uploads/picture_7.jpg', '6361062182'),
('156156156', 'Uma', 'Electrical and Electronics Engineering', '3rd Year', 'uma@outlook.in', 'f56b5573b46d9f3f9002', 'uploads/picture_8.jpg', '6736737625'),
('102113001', 'Helen', 'Instrumentation and Control Engineering', '2nd Year', 'helen@ymail.com', 'ddd29f0e5ac90b49f34d', 'uploads/picture_5.jpg', '9884589319'),
('174328976', 'Sita', 'Chemical Engineering ', '4th Year', 'sita97@gmail.com', '4d26a5bafd3ae19da1c6', 'uploads/picture_10.jpg', '5412859075');