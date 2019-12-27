-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2019 at 07:23 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gecp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `college_info`
--

CREATE TABLE `college_info` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `code` int(5) NOT NULL,
  `telephone_no` varchar(25) NOT NULL,
  `mobile_no` varchar(25) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `address_line_1` varchar(100) NOT NULL,
  `address_line_2` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `pincode` int(10) DEFAULT NULL,
  `about` text NOT NULL,
  `vision` text NOT NULL,
  `mission` text DEFAULT NULL,
  `linkedin_link` varchar(255) DEFAULT NULL,
  `facebook_link` varchar(255) DEFAULT NULL,
  `instagram_link` varchar(255) DEFAULT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `hostel_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college_info`
--

INSERT INTO `college_info` (`id`, `name`, `code`, `telephone_no`, `mobile_no`, `email`, `address_line_1`, `address_line_2`, `city`, `pincode`, `about`, `vision`, `mission`, `linkedin_link`, `facebook_link`, `instagram_link`, `twitter_link`, `hostel_link`) VALUES
(1, 'Government Engineering College, Patan', 223, '+2766291560', NULL, 'principalgecpatan@gmail.com', 'GOVERNMENT ENGINEERING COLLEGE,AT. KATPUR, PATAN', 'At & Post. Katpur,', 'Patan.', 384265, 'Government Engineering College, Patan was established in April 2004 with three branches Computer Engineering, Electronics and Communication Engineering and  Mechanical Engineering each with intake of 60  totaling to 180.  The institute was initially functioning in  the premises of  the K. D. Polytechnic, Patan temporarily.  It was shifted to its own newly built up green premise in August 2008  at Katpur village on Chanasma- Patan road 8  kms before Patan.  Two more branches of  Electrical Engineering and  Civil Engineering each  with intake  of  60 were  introduced from June- 2009 and the  intake of all  three existing branches were increased to 120. Currently, institute functions with total intake of 480 in five different branches.', 'To prepare Human Resource with value based competency for technical advancements and growth of society.', 'To deliver technical programs and services to cater the current needs of society and industry.\r\n\r\nHelping industries in solving challenges by means of providing best technical human resources.\r\n\r\nTo contribute in sustainable growth of society.', NULL, NULL, NULL, NULL, 'http://hostelgecp.blogspot.com/');

-- --------------------------------------------------------

--
-- Table structure for table `commities`
--

CREATE TABLE `commities` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `objectives` text DEFAULT NULL,
  `pdf_path` varchar(255) DEFAULT NULL COMMENT '(path of pdf file associated with commitie)',
  `user_id` int(11) NOT NULL COMMENT '(Main Co-ordinator)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commities`
--

INSERT INTO `commities` (`id`, `name`, `description`, `objectives`, `pdf_path`, `user_id`) VALUES
(1, 'dfdf', 'df', 'dfdfdf', 'uploads/commities/Tree_plantation_GEC_PATAN.pdf', 1),
(2, 'fdf', 'dfdf', 'dfdfdf', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `about` text DEFAULT NULL,
  `vision` text DEFAULT NULL,
  `mission` text DEFAULT NULL,
  `peo` text DEFAULT NULL COMMENT '(PEO''s)',
  `pso` text DEFAULT NULL COMMENT '(PSO''s)',
  `photo_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `about`, `vision`, `mission`, `peo`, `pso`, `photo_path`) VALUES
(1, 'Centre Of Excellence', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Civil Engineering', 'The Department of Civil Engineering has been in existence since 2009 with intake of 60 seats. Civil Engineering is considered to be the oldest engineering field. It includes the planning, design, construction, maintenance and operation of the infrastructure that surrounds us. Our infrastructure includes roads, airports, railroads, buildings, bridges, water and waste water treatment plans, sewers, drainage, flood control, water supply and many other facilities. Most everything civil engineers do affect our daily lives in many ways.', 'To mould civil engineering students with an emphasis on value-based education through technological innovations, teamwork, and skills for the growth of society.', 'To develop well-equipped laboratories and infrastructure for conducive teaching-learning environment.\r\n\r\nTo prepare students with effective communication skills, professional ethics and leadership qualities.\r\n\r\nTo promote innovative practices in the field of Civil Engineering.         \r\n\r\nTo mentor students for innovative thinking with relevance to entrepreneurship.', 'The graduates shall be able to engage themselves to achieve expertise to solve real-world problems by modern Civil Engineering tools and techniques.\r\n\r\nThe graduates shall be able to develop leadership, resource management skills and exhibit good teamwork in multidisciplinary projects.\r\n\r\nTo produce Civil engineering graduates who can excel in their professional career and/or higher education by acquiring knowledge in basic engineering principles.  \r\n\r\nThe graduates shall be able to pursue Technological Innovations and Advancements.\r\n\r\nThe graduates shall be able to serve Industry with professional Ethics and society with moral responsibilities.', 'The Civil Engineering Graduate will be able to apply technical skills and modern engineering tools for civil engineering day to day practice.\r\n\r\nThe Civil Engineering Graduate will be able to use effective communication skills and shoulder accountability in a professional role as a Civil Engineer independently or as a team-member/team-leader in society.', NULL),
(7, 'Computer Sci. & Engineering', 'Computer Science & Engineering Department was established in year 2004 intake of 60 and from 2009 intake is increased to 120.  It runs under graduate course in Computer Science & Engineering. Primary objective of this programme is to develop Computer Engineers with knowledge of software and hardware, responsible for wide range of computer system design and development, built them as dedicated and competent professionals for challenging world of varying requirements of automation.\r\n\r\nComputer Engineering Laboratories are outfitted with high performance servers and computers with latest configurations. It includes C programming lab, Computer network lab, Database lab, and Advanced computing lab and Microprocessor lab. Entire campus is connected with high speed fiber network having large capacity Data Server and 100 Mbps Internet facility of 24×7 hrs.\r\n\r\nFaculty members are dedicated to import quality education in the field of Computer Engineering and active in research & development work to cope with current market trends. Students are imparted knowledge about technology through workshop and expert lectures in order to interact with academia, industries & professionals.\r\n\r\nThe Computer Science & Engineering curriculum provides students with a sufficient background in mathematics, computer science and engineering sciences to analyze and design complex software and hardware systems.', 'To achieve excellence by providing value-based education in Computer Science and Engineering through innovation, teamwork and ethical practices.', 'To produce graduates according to the need of industry, government, society and scientific community.\r\n\r\nTo develop partnership with industries, government agencies and R & D organizations for knowledge sharing and overall development of faculties and students.\r\n\r\nTo solve industrial, government agencies, societal and political issues by applying computing techniques.\r\n\r\nTo motivate students to be entrepreneurs.\r\n\r\nTo motivate students to participate in reputed conferences, workshops, symposiums, seminars and related technical activities.\r\n\r\nTo impart human and ethical values in our students for better serving of society.\r\n\r\nTo create awareness among students and inculcate affection for free and open source software.', 'Possess knowledge about core areas related to the field of computer engineering.\r\n\r\nAcquire good analytical, design, develop, implement and testing skills to formulate  simple computing solutions to meet customer business objectives.\r\n\r\nProvide requisite skills to pursue entrepreneurship, higher studies and imbibe high degree of professionalism in the fields of computing.\r\n\r\nEmbrace life-long learning by introducing principles of public policies,professional environment and societal context.', 'The ability to understand, analyzes, design and develop various computing solutions.\r\n\r\nThe ability to decide career path as an entrepreneur, competent professional and higher studies using engineering knowledge and modern programming skills.', 'uploads/departments/7.jpg'),
(9, 'Electrical Engineering', 'The Department of Electrical Engineering was established in the year 2009. It has academic programme with intake of 60 under graduate students. The department is equipped with the latest experimental and computational facilities. It runs to cater to the ever challenging needs of technical excellence in all areas of electrical engineering such as Power Systems, Electrical Machines,  Control & Automation, Integrated Electronics & circuits and Power Electronics.', 'To provide learning environment for electrical engineering having  high quality education and ethical values to meet the future global challenges.', 'Life-long learning to meet professional, intellectual and ethical tasks.\r\n\r\nBetter employ-ability, startups and entrepreneurship.\r\n\r\nIndustry and  managerial skills to be highly competent Electrical Engineers.', 'To create better learning environment to develop entrepreneurship capabilities in various areas of Electrical Engineering with superior efficiency, productivity, cost effectiveness and technological empowerment of human resource.\r\n\r\nTo inculcate research capabilities in different areas of Electrical Engineering to identify, comprehend and solve problems and adapt themselves in a world of constantly evolving technology.\r\n\r\nTo generate high standards of moral and ethical values among the graduates, this will help in transforming them as responsible citizen of the nation.', 'Graduates will possess the ability to interpret the fundamental concepts of Electrical Engineering and its applications.\r\n\r\nGraduates will be able to investigate and propose effective solutions to the problems of Power System, Electrical Machines and Electronics using contemporary tools & Mathematical approach.\r\n\r\nGraduates will possess skills and knowledge for design, operation and maintenance in the areas of Power System, Electrical machines and Electronic.\r\n\r\nGraduates will demonstrate lifelong learning attitude and societal responsibilities with high moral and ethical values.', NULL),
(11, 'Electronics & Communication Engineering', 'The Electronics and Communication Department of GEC, Patan provides technology, rich academic environment,  enabling the students to attend the highest levels of excellence as a professional in this area. It offers four year of under graduate course in Electronics and Communication Engineering.  The department has acquired excellent infrastructure, experienced faculty and  fast facility for research purpose, ensure student to polish their skills and output from their contemporaries. The Electonics and Communication Department established with the institute in 2004.  It is  the most popular branch content maximum number of seats in any states and generating maximum job opportunity.  Electronics and Communication Department comprises of  the subjects mainly AC analog Electronics,  Digital Electronics, Electrical machines, Analog and Digital communication, Fiber optic communication, Microwave and antenna engineering, Computer hardware and networking, Microprocessor and Microcon- troller, Advance and wireless communication, VLSI all above area includes with elective subjects. ', 'To prepare engineers with essential technical knowledge, value based professional skills for technical up gradation and societal growth.', 'To prepare the competent engineers with ability to solve industrial problems who can raise the living standards of the society.\r\n\r\nTo prepare engineers with effective communication skills, professional ethics and leadership qualities.', 'Accumulate sound technical knowledge that enables to pursue higher education and research.\r\n\r\nWork in multidisciplinary areas with a strong focus on innovation and entrepreneurship.\r\n\r\nTo inculcate effective communication skill, managerial skills as well as professional ethics for successful professional career.', 'An ability to apply knowledge of computer, mathematics, science and engineering fundamentals for solution of engineering problems.\r\n\r\nAn ability to identify problems and apply appropriate knowledge to rectify them.\r\n\r\nAn ability to design, simulate and troubleshoot the circuits.\r\n\r\nAn ability to design a system that meets the requirement of public safety and offers solutions to social and environmental concerns.\r\n\r\nAble to design and perform experiments and analyze, synthesize and interpret data.\r\n\r\nAn ability to use current techniques, resources and modern tools for engineering activities.\r\n\r\nAn ability to analyze local and global impact of Electronics and communication on individual, organization and society.\r\n\r\nAbility to perform effectively as a member or leader in multi disciplinary teams with professional ethics and responsibilities.', NULL),
(19, 'Mechanical Engineering', 'Our strong academic performance in high school enables you to pursue a range of educational opportunities. One avenue you\'ll want to explore is mechanical engineering. Studying mechanical enginee- ring at GEC, Patan will equip you with a broad education, preparing you for a variety of career paths graduation and  providing  a solid foundation for continuing education. Mechanical engineering enco- mpasses many areas.  In short,  anything that involves the design and  or manufacturing of  mechanical,  thermal or  electronic devices and  or processes falls entrepreneurs, chief engineers, astronauts, faculty, physicians and patent attorneys, among other occupations. The field includes activities such as designing, developing, manufacturing, managing, researching and controlling engineering systems and their components. ', 'To deliver total quality education in mechanical engineering through research in cutting edge technologies, human values, a culture of carrying trust and continuous learning to meet expectation of students, industries and society at large.', 'To educate the students in the field of Mechanical engineering, with the professional skills and ethical values through holistic teaching-learning process.\r\n\r\nTo develop Mechanical Engineering solutions to problems of industry, government and society.\r\n\r\nTo develop partnership with industrial and government agencies. \r\n\r\nTo ensure that every student participates at least in one conference and activities of professional societies. ', NULL, NULL, NULL),
(99, 'General Department', 'The department aims at and focuses on- the overall development of the learner by teaching the subjects of Mathematics, Communication Skills, Contributor personality development and Physics. The faculty members of the department are committed to impart the knowledge based on their vast experience in the field and bringing the best out of learners. With the development of the Language Lab and the Physics Lab in the recent past, learners can now practice and apply their acquired skills. The department is involved in a number of activities like conducting seminars, workshops and guest lectures by eminent personalities of other universities and R&D organizations.', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `degree` varchar(15) DEFAULT NULL COMMENT '(B.E, Phd, M.E)',
  `institute_name` varchar(255) NOT NULL,
  `joining_date` date DEFAULT NULL,
  `completion_date` date DEFAULT NULL,
  `specialization` varchar(50) DEFAULT NULL COMMENT '(Computer Engineering, Electrical Engineering etc)',
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `degree`, `institute_name`, `joining_date`, `completion_date`, `specialization`, `user_id`) VALUES
(1, 'B.E', 'Jayvantrai harrai desai polytechnic', '2017-05-24', '2014-05-26', 'Computer Engineering', 2);

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `institute_name` varchar(255) NOT NULL,
  `joining_date` date DEFAULT NULL,
  `leaving_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `designation`, `user_id`, `institute_name`, `joining_date`, `leaving_date`) VALUES
(1, 'Lecturer', 2, 'GEC Dahod', '2018-11-26', '2019-05-16');

-- --------------------------------------------------------

--
-- Table structure for table `labs`
--

CREATE TABLE `labs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `os` varchar(100) DEFAULT NULL,
  `ram` varchar(100) DEFAULT NULL,
  `hdd` varchar(100) DEFAULT NULL,
  `processor` varchar(100) DEFAULT NULL,
  `photo_path` varchar(255) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `labs`
--

INSERT INTO `labs` (`id`, `name`, `description`, `os`, `ram`, `hdd`, `processor`, `photo_path`, `department_id`) VALUES
(2, 'fesf', 'fsefse', 'fesf', 'ef', 'fefe', 'fefef', 'uploads/labs/5e05a3239ae47.jpg', 7);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date_of_creation` date NOT NULL,
  `path` varchar(255) DEFAULT NULL,
  `department_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `date_of_creation`, `path`, `department_id`, `user_id`) VALUES
(1, 'admin first news', '2019-12-26', 'uploads/news/5e05191cd7198.pdf', 7, 2);

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `date` date DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`id`, `name`, `description`, `date`, `user_id`) VALUES
(2, 'xyz', 'fehfhjsbfj', '2016-09-25', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL COMMENT '(user_name)',
  `password` varchar(255) DEFAULT NULL COMMENT '(user_password)',
  `account_type` varchar(25) NOT NULL COMMENT '(ADMIN,HOD,FACULTY))',
  `active` tinyint(1) NOT NULL DEFAULT 0 COMMENT '(user active status)',
  `pass_recover_req` tinyint(1) NOT NULL DEFAULT 0 COMMENT '(password recover request)',
  `prefix` varchar(10) DEFAULT NULL COMMENT '(MR.,MRS.)',
  `first_name` varchar(50) DEFAULT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `area_of_interest` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `department_id` int(11) NOT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `email` varchar(50) NOT NULL DEFAULT 'NULL',
  `dob` date DEFAULT NULL COMMENT '(d-m-Y)',
  `mobile_no` int(20) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL COMMENT '(male,female)',
  `address_line_1` varchar(50) DEFAULT NULL,
  `address_line_2` varchar(50) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `pincode` int(10) DEFAULT NULL,
  `profile_path` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `account_type`, `active`, `pass_recover_req`, `prefix`, `first_name`, `middle_name`, `last_name`, `area_of_interest`, `qualification`, `department_id`, `designation`, `email`, `dob`, `mobile_no`, `gender`, `address_line_1`, `address_line_2`, `city`, `pincode`, `profile_path`) VALUES
(1, 'root', '$2y$10$Tp/DSGhuyEfUaCVM0SX0oeudPgT4fkS0FoDcDH4C.E2Y01Ea2QxSi', 'HOD', 1, 0, 'Mr.', 'Rick', '', 'Grimes', 'Data Scientist', 'Phd', 7, 'Associative assistant', 'root@gmail.com', '1993-11-26', 0, NULL, '', '', '', 0, 'uploads/profile/1.jpg'),
(2, 'admin', '$2y$10$1doJkj3Vg3HtzyxkWocd0OjLSpcvD.uLSQq2YfFZaxJisHL1qs/xK', 'ADMIN', 1, 0, 'Mr.', 'Satyam ', 'A.', 'Agarwal', 'Big Data', 'BE', 7, 'Assistant Professor', 'admin@gecp.edu', '1998-12-03', 2147483647, NULL, 'G208 Nature Valley', 'kumbhariya gam, saroli', 'surat', 395010, 'uploads/profile/2.jpg'),
(3, 'demo', '$2y$10$HjugUVz2oe4OO1uJgyWwB.HxKiBXejJrhUriuG3FrugQdRwwrHA9.', 'FACULTY', 1, 0, 'Mr.', 'Daryl', '', 'Dixon', 'Robonotics', 'ME', 9, 'Lecturer', 'demo@gmail.com', '1992-02-29', 0, NULL, '', '', '', 0, 'uploads/profile/3.jpg'),
(4, 'test', '$2y$10$c47ukmbIkAu7ETJuljLJf.rut/76MV1AKLTSPmHKm8WEFwBontqMm', 'FACULTY', 0, 0, 'Mr.', 'Negan', '', '', 'Artificail Intelligence', 'PHD', 19, 'Associative assistant', 'negan@gmail.com', '1994-08-23', 0, NULL, '', '', '', 0, 'uploads/profile/4.jpg'),
(5, 'temp', '$2y$10$94cg5.qtGI7YwF65PD.iGuIFrPxZS4pRTICzP9BiToXPUtjz8W7pC', 'HOD', 1, 0, 'Mrs.', 'Carol', '', '', '', 'PHD', 9, 'Principal', 'temp@gmail.com', '1990-09-25', 0, NULL, 'dssds', '', '', 0, 'uploads/profile/5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college_info`
--
ALTER TABLE `college_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commities`
--
ALTER TABLE `commities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `labs`
--
ALTER TABLE `labs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `department_id` (`department_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college_info`
--
ALTER TABLE `college_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `commities`
--
ALTER TABLE `commities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `labs`
--
ALTER TABLE `labs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commities`
--
ALTER TABLE `commities`
  ADD CONSTRAINT `commities_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `experience`
--
ALTER TABLE `experience`
  ADD CONSTRAINT `experience_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `news_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `publications`
--
ALTER TABLE `publications`
  ADD CONSTRAINT `publications_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
