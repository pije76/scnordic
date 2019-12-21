-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2019 at 02:29 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sc_nordic_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `b_id` int(11) NOT NULL,
  `b_title` text NOT NULL,
  `b_description` text NOT NULL,
  `b_featured_image` varchar(255) NOT NULL,
  `b_status` varchar(255) NOT NULL DEFAULT 'Published',
  `b_publish_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`b_id`, `b_title`, `b_description`, `b_featured_image`, `b_status`, `b_publish_date`) VALUES
(52, 'Top Reasons Why You Are Unhappy At Work', '<p>Do you often find yourself in a state of unhappiness at your workplace? Do you always feel like leaving work and run away to your home? Do you often feel uncomfortable at your workplace? If the answer is Yes, then you must think about the reasons behind your unhappiness and discomfort. The workplace is an important part of our lives and it can&rsquo;t be escaped if you want to work in the real world. It is the place where you spend more than of your time in a day and so it can&rsquo;t be just ignored. If you are unhappy, you must figure out Why!! There could be plenty of reasons behind this and you might blame it upon others sometimes. Here are the top reasons that generally cause unhappiness at the workplace. This article will suggest ways to deal with these problems smartly and move ahead in your life.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>People who have a strict and demanding boss often feel uncomfortable at their workplace. It is most common with young people as they feel scared of their bosses and find it hard to tackle the work pressure on them. But remember your boss is the one who controls your fate at the workplace. Your boss will define your job role, organize your work, and analyze it to evaluate your performance.</p>\r\n\r\n<p>If you have a strict Boss, try to handle the things with calm. Work hard and do your best. If you feel stuck at work, go and ask for support. Remember your boss is meant to support you and he/she will do that. Do not walk into the office feeling scared or committing to hate your boss. Try to be comfortable and you will make room for your growth.</p>\r\n', 'TCOZ1574513949.jpg', 'Published', '2019-11-23 00:00:00'),
(58, '7 Ways to Start Living a Healthy Lifestyle', '<p>Living a healthy lifestyle is extremely important for all of us to be in a good shape and sound mind. However, a lot of people neglect taking care of their health and prefer to stay unfit and lazy instead of working to become healthy. It is true that in today&rsquo;s world people are so occupied with their professional lives that they hardly get time to do exercises and physical activities to stay fit. But this carelessness has its consequences and this neglect can cost you severely. So you must realize the importance of being healthy and fit. Only minor changes in your diet and exercise routine can make you healthier and better. To help you in your journey to becoming healthier, we have a few suggestions that are very basic and gives positive results. You can try them easily by only changing your daily habits.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong>Blink your Eyes Often</strong></h2>\r\n\r\n<p>It is a fact that when a person is sitting in front of a screen, he/she blinks three times less than what he/she blinks normally. So because blinking eyes often is a good factor and helps in protecting your eyes, you must blink often while working. You can also try an eye activity that follows the 20-20-20 rule. In this activity, you have to stare at a certain point or thing which is at a distance of 20 feet after every 20 minutes for 20 seconds. This activity works well and is considered good for taking care of the eyes.</p>\r\n\r\n<h2><strong>Take small breaks</strong></h2>\r\n\r\n<p>After sitting constantly in the same position and at the same place for an hour, you must take a small break in which you can walk around your office to drink a cup of tea or coffee or for refilling your water bottle. This is essential to maintain a healthy routine and to make your body flexible. While if you stay constantly at the same place for long hours, you will potentially develop a back pain problem and your body will become stiff. Make sure you also take a break after having your lunch as it will help you to digest your food better and in turn will save you from weight gain problems.</p>\r\n', 'NQAH1574540229.jpg', 'Published', '2019-11-24 01:47:09'),
(62, 'How a shy Indian engineer Sundar Pichai became Googleâ€™s CEO', '<p>Spending the whole day which includes more than 9 hours in front of computer screens is not good for your health. But generally, corporate life forces you to sit before screens for long hours. This also leads to people developing bad posture habits and an unhealthy lifestyle which is hard to change. This unhealthy lifestyle should be changed before it becomes too late. Nowadays, the healthcare industry is constantly improving and working towards providing the best solutions to people as per their preferences. This will help you to adopt an active lifestyle and live a healthy life. Here are a few tips for people who sit long before a computer, these tips can greatly help you to avoid or lessen your&nbsp;<strong>health risks</strong>. Although, you need to give yourself time to see the results but in the long run they would prove to be beneficial for you and your health</p>\r\n\r\n<h2><strong>Drink Lots of Water</strong></h2>\r\n\r\n<p>If you do not hydrate yourself enough, then you are leading yourself towards severe health problems. As water is an essential element of our life, it includes several factors that are important for a healthy lifestyle. Dehydration can make you feel sleepy and tired and in turn, will affect your productivity at work. So try to drink more and more water when you are working at your office. It will keep you hydrated and active for the whole day. Also, it will reduce your hunger and eating capacity. This way you will consume fewer calories and would be able to remain fit and slim.</p>\r\n\r\n<h2><strong>Position your system in the right direction</strong></h2>\r\n\r\n<p>Positioning your computer system in the right direction is one of the most essential tips that should be followed. For this, you need to maintain a straight level between your eyes and the computer screen. If you keep your computer in the wrong direction whether downwards or upwards, you will either have to bend down or look upwards while working. This will lead you to develop problems such as back pain or neck pain. Also, you can develop the problem of having dry eyes. So place your system in the right direction and work with ease.</p>\r\n\r\n<h2><strong>Maintain a Good Posture</strong></h2>\r\n\r\n<p>Usually, people who spend long hours sitting before a computer develop unhealthy and bad posture. It creates the problem of back pain where people suffer badly. Professionals in this field suggest that the top of your computer screen should be at the same level as your eyes. This way you won&rsquo;t need looking downward or upward while working. You should always sit straight without bending your shoulders.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'HNDR1576095144.jpg', 'Published', '2019-12-12 01:42:24'),
(63, 'Infosys completes $76 million acquisition of Finlandâ€™s Fluido', '<p>However, he is having a fluctuating business journey where once he was bankrupt by his business partners who were actually his college friends. But he was not a man to give up easily and the biggest eureka came in 2010 in the form of One-97 when the idea of digital wallet came in his mind. It was the parent company of Paytm and he experimented with the three basics of the internet which are content, advertising, and commerce. This idea of payment eco-system was not accepted by the board. According to them, it was like betting a company&rsquo;s money on a non-existence market. He put his own $2 million at stake to launch his brand finally and rest we all know. He has another mantra of his success where he believes in doing what the people say you can&rsquo;t do. This is what he finds real fun and motivated him too.</p>\r\n\r\n<p>And with this belief Paytm came in India for making the people cashless with full safety. The demonetization of 2016 is another winning element to gave this digital wallet a momentum and became the wallet of nationwide.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>However, he is having a fluctuating business journey where once he was bankrupt by his business partners who were actually his college friends. But he was not a man to give up easily and the biggest eureka came in 2010 in the form of One-97 when the idea of digital wallet came in his mind. It was the parent company of Paytm and he experimented with the three basics of the internet which are content, advertising, and commerce. This idea of payment eco-system was not accepted by the board. According to them, it was like betting a company&rsquo;s money on a non-existence market. He put his own $2 million at stake to launch his brand finally and rest we all know. He has another mantra of his success where he believes in doing what the people say you can&rsquo;t do. This is what he finds real fun and motivated him too.</p>\r\n\r\n<p>And with this belief Paytm came in India for making the people cashless with full safety. The demonetization of 2016 is another winning element to gave this digital wallet a momentum and became the wallet of nationwide.</p>\r\n', 'HPYO1576095336.jpg', 'Published', '2019-12-12 01:45:36'),
(64, 'Meet the 13-year-Old Indian-origin Boy Hired By Google', '<p>However, he is having a fluctuating business journey where once he was bankrupt by his business partners who were actually his college friends. But he was not a man to give up easily and the biggest eureka came in 2010 in the form of One-97 when the idea of digital wallet came in his mind. It was the parent company of Paytm and he experimented with the three basics of the internet which are content, advertising, and commerce. This idea of payment eco-system was not accepted by the board. According to them, it was like betting a company&rsquo;s money on a non-existence market. He put his own $2 million at stake to launch his brand finally and rest we all know. He has another mantra of his success where he believes in doing what the people say you can&rsquo;t do. This is what he finds real fun and motivated him too.</p>\r\n\r\n<p><strong>you will be definitely surprised to know about an Indian 13-year </strong></p>\r\n\r\n<p>old Tanmay Bakshi. Because we all know that earning a Package of 1.25 Million is not a small thing. that too at the age of just 13.</p>\r\n\r\n<p>Tanmay Bakshi fell in love with computers when he was just 5 years old. He started coding when he was just five.</p>\r\n\r\n<p>He built his first app for iPhone called tTablets when he was just 9 years old.</p>\r\n\r\n<p>At 12, Bakshi became the world&rsquo;s youngest IBM Watson (IBM&rsquo;s artificial intelligence AI platform ) programmer.</p>\r\n\r\n<p><em>Tanmay Bakshi is also a TEDx speaker.</em></p>\r\n\r\n<p>He is the author of a book called &lsquo;Hello Swift&rsquo;.The book is about iOS programming techniques for kids &amp; also beginners.</p>\r\n\r\n<p>Tanmay also has a YouTube channel where he shares videos on computing.</p>\r\n\r\n<p>He can code in swift, C#, VB, Java and other languages.</p>\r\n\r\n<p>Tanmay Bakshi says when you do it with passion, age is no bar!</p>\r\n', 'VCJD1576095547.jpg', 'Published', '2019-12-12 01:49:07');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `c_id` bigint(20) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_image_name` varchar(255) NOT NULL,
  `c_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `c_id` bigint(20) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_phone` varchar(255) NOT NULL,
  `c_email` varchar(255) NOT NULL,
  `c_message` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_id`, `c_name`, `c_phone`, `c_email`, `c_message`, `created_date`) VALUES
(1, 'Rahul', '9234234234', 'rahul@gmail.com', 'hi, how are you ', '2019-12-12 11:58:08'),
(2, 'hhh', '2342423', 'k@gmail.com', 'aadf', '2019-12-12 11:58:08'),
(3, 'kundan', '929380480923', 'KUNDAN@GMAIIL.COM', 'asdsd', '2019-12-12 11:58:08'),
(4, '11111111', '11111111', '111@gmail.com', 'weewqe', '2019-12-12 11:58:08'),
(5, 'kundn', '666', '88@gmail.com', 'asdas', '2019-12-12 11:58:08'),
(6, 'kundan', '94818382313', 'KUNDAN@GMAIIL.COM', 'sdsadasd', '2019-12-12 11:58:08'),
(7, 'kundan', '94818382313', 'KUNDAN@GMAIIL.COM', 'sdsadasd', '2019-12-12 11:58:08'),
(8, 'kundan', '94818382313', 'KUNDAN@GMAIIL.COM', 'sdsadasd', '2019-12-12 11:58:08'),
(9, 'kundan', '94818382313', 'KUNDAN@GMAIIL.COM', 'sdsadasd', '2019-12-12 11:58:08'),
(10, 'asds', 'asdas', 'asdasd@gmail.com', 'asdas', '2019-12-12 11:58:08'),
(11, 'asds', 'asdas', 'asdasd@gmail.com', 'asdas', '2019-12-12 11:58:08'),
(12, 'hello', '09309324', 'hello@gmail.com', 'asdasd', '2019-12-12 11:58:08'),
(13, 'asds', 'asdas', '24322@dd', 'sss', '2019-12-12 11:58:08'),
(14, 'asds', 'asdas', '24322@dd', 'sss', '2019-12-12 11:58:08'),
(15, 'asdasd', '34534534545', 'KUNDAN@GMAIIL.COM', 'asdasdasd', '2019-12-12 11:58:08'),
(16, 'ASa', 'asA', 'assaS@GMAIL.COM', 'as', '2019-12-12 11:58:08'),
(23, '', '', '', '', '2019-12-12 12:07:32'),
(26, 'AA', 'AAA', 'AA@DS', 'SDSD', '2019-12-12 12:17:53');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `n_id` bigint(20) NOT NULL,
  `n_email` varchar(255) NOT NULL,
  `n_status` varchar(255) NOT NULL DEFAULT 'Active',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`n_id`, `n_email`, `n_status`, `created_date`) VALUES
(1, 'sasAS@GMAIL.COM', 'Active', '2019-12-12 12:24:12'),
(2, 'sasAS@GMAIL.COM', 'Active', '2019-12-12 12:24:13'),
(3, 'sasAS@GMAIL.COM', 'Active', '2019-12-12 12:24:14'),
(4, 'sasAS@GMAIL.COM', 'Active', '2019-12-12 12:24:14'),
(5, 'sasAS@GMAIL.COM', 'Active', '2019-12-12 12:24:14'),
(6, 'sasAS@GMAIL.COM', 'Active', '2019-12-12 12:24:15'),
(7, 'sasAS@GMAIL.COM', 'Active', '2019-12-12 12:24:20'),
(8, 'sasAS@GMAIL.COM', 'Active', '2019-12-12 12:24:20'),
(9, 'sasAS@GMAIL.COM', 'Active', '2019-12-12 12:24:21'),
(10, 'sasAS@GMAIL.COM', 'Active', '2019-12-12 12:24:21'),
(11, 'K@GMAIL.COM', 'Active', '2019-12-12 12:24:44'),
(12, 'K@GMAIL.COM', 'Active', '2019-12-12 12:24:51'),
(14, 'KUNSAS@GMAIL.COM', 'Active', '2019-12-12 12:26:21'),
(15, 'RAJU@GMAIL.COM', 'Active', '2019-12-12 12:27:10'),
(16, 'sasAS@GMAIL.COM', 'Active', '2019-12-12 12:28:31');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `status` enum('Active','In-Active') NOT NULL,
  `accesses` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `title`, `status`, `accesses`) VALUES
(1, 'Super Admin', 'Active', 'dashboard,administration');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `u_mob` varchar(255) DEFAULT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `user_registered_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='admin users';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `u_mob`, `email`, `password`, `user_registered_date`, `role_id`) VALUES
(173, 'Admin', '9573289983', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2019-09-17 06:41:33', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `c_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `c_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `n_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
