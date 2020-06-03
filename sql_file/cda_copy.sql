-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 03, 2020 at 10:28 PM
-- Server version: 5.6.47-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cda_copy`
--

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `name`, `email`, `msg`) VALUES
(1, 'Guru', 'shubhammahajan02@gmail.com', 'Hello'),
(2, 'Guru', 'shubhammahajan02@gmail.com', 'Hello Admin'),
(3, 'Guru', 'shubhammahajan02@gmail.com', 'Hello Admin'),
(4, 'Guru', 'shubhammahajan02@gmail.com', 'Helllo ');

-- --------------------------------------------------------

--
-- Table structure for table `index_info`
--

CREATE TABLE `index_info` (
  `id` int(11) NOT NULL,
  `page_name` text NOT NULL,
  `ind` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `index_info`
--

INSERT INTO `index_info` (`id`, `page_name`, `ind`, `created_at`) VALUES
(1, 'index.php', 'yes', '2020-06-03 22:10:22'),
(2, 'contact.php', 'yes', '2020-06-03 21:50:23');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `page_name` varchar(100) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_name`, `meta_title`, `meta_desc`) VALUES
(1, 'index.php', 'viewport', 'width=device-width, initial-scale=1'),
(2, 'contact.php', 'viewport', 'width=device-width, initial-scale=1'),
(8, 'index.php', 'author', 'gagandeep');

-- --------------------------------------------------------

--
-- Table structure for table `page_content`
--

CREATE TABLE `page_content` (
  `id` int(11) NOT NULL,
  `page_name` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page_content`
--

INSERT INTO `page_content` (`id`, `page_name`, `title`, `content`, `created_at`) VALUES
(2, 'index.php', 'What is the purpose of the dental school interview?', '<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 16px; background-color: #ffffff;\">Regardless of the format of dental school interview (e.g. CDA structured interview, MMI, or Panel interview), the purpose of the interview is rather straightforward and remains constant across the board: to assess the personality and Non-Cognitive Skills (NCSs) of the candidate.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 16px; background-color: #ffffff; text-align: justify;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 16px; background-color: #ffffff;\">What are NCSs? By these we mean the following: Communication skills, interpersonal skills, ethical and moral decision making capacity, maturity, professionalism, sense of social responsibility, service to community, leadership, initiative, scholarship, ability to collaborate with others, conflict resolution skills, etc.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 16px; background-color: #ffffff;\">Research has shown that, although academic performance (i.e. GPA and DAT scores) is a great indicator of didactic abilities in the first and second years of dental school, it provides, however, a very poor predictive value when it comes to future clinical performance. In fact, research shows that, an effective interview process is the best indicator of future clinical performance in the upper years, as it gives insight into the characteristics of the candidate and whether or not there will be a likelihood of future behavioural problems (an issue that dental schools constantly encounter and struggle to overcome). For example, it has been shown that those candidates who are \"conscientious\" and \"open to new experiences\" perform more effectively in the third and fourth years of dental school studies, where the education takes place in a clinical setting for the most part.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 16px; background-color: #ffffff;\">Thus, dental schools, much like other professional schools, have over the past decade spent a lot of resources to devise the most effective interview process that will give them insight into the NCSs of their future candidates. And of course, for Canadian dental schools the answer has been the Canadian Dental Association\'s structured interview or CDA structured interviews.</p>', '2020-06-03 00:23:23'),
(6, 'index.php', 'History, rationale, and the structure of the CDA interview', '<p><span style=\"color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 16px; background-color: #ffffff;\">Recall from our discussion above that we said an effective interview process is the most reliable way to select candidates who perform well clinically. Well in an attempt to test this theory, in 2004, Smithers et al. conducted a study, which produced results that were so shocking, that it unequivocally reinforced the Canadian Dental Association\'s earlier decision to commission a \"new structured interview based on state-of-the-art contemporary interview techniques\" (i.e. CDA structured interview)</span></p>\r\n<p><span style=\"color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 16px; background-color: #ffffff;\">What were these shocking results you may ask? The evidence gathered by Smithers et al. (2004) simply reinforced earlier suspicions about the ineffectiveness of traditional interview processes. They showed that, \"a typical [traditional] admissions interview was in fact worse than neutral in that it was negatively associated with students\' performance in the first year of dental training, did not predict academic performance, and may have led to poor selection decisions.\" Thus, it should come as no surprise that the traditional panel interview has been replaced by most dental school with the CDA structured interview, which is a more reliable and valid future predictor of clinical performance.</span></p>\r\n<p><span style=\"color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 16px; background-color: #ffffff;\">The CDA interview was not only re-structured in its format of delivery, but it was also restructured in terms of the type of questions that would be ask, and how they would be rated or scored by the interviewers. Let us first talk about the type of questions that you may encounter on your CDA structured interview.</span></p>', '2020-06-03 00:31:24'),
(7, 'index.php', 'Types of Questions', '<p><span style=\"color: #373737; font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;\">The types of questions that you may be asked during your dental school interview can be divided into two categories: (1) Situational Interview (SI) questions and (2) Patterned Behaviour Descriptive Interview (PBDI) questions. SI questions are those in which the candidates is placed in a hypothetical situations (i.e. vignette) and is asked what they would react in that given situation. For example,</span></p>\r\n<p><span style=\"color: #373737; font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;\">\"You are babysitting your sister&rsquo;s young child, who is nervous and upset about his mother being away. You are trying to calm him down and offer him some ice cream. As you are dishing out the ice cream, the child bites down hard on your hand. How would you react?\"</span></p>\r\n<p><span style=\"color: #373737; font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;\">Conversely, PBDI type questions, ask the candidates \"about past behaviour with the assumption that past behaviour is the best predictor of future behaviour.\" An example of a PBDI type questions is:</span></p>\r\n<p><span style=\"color: #373737; font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;\">Many of us have had to deal with juggling busy schedules. Think of a time in the past when an important but unscheduled situation arose that required your attention, but you had a number of prior commitments on your agenda. What did you do? What was the outcome?</span></p>\r\n<p><br style=\"color: #373737; font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;\" /><span style=\"color: #373737; font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;\">Notice how SI questions are typically future-oriented, as opposed to PBDI questions, which are past-oriented. The specific and actual SI and PBDI questions are devised according to seven competencies, that the CDA has found to be reliable and valid indicators of future performance. In other words, every question that is asked during a dental school interview, regardless of being a SI or PBDI question, will address one or more than one of the seven competencies.</span></p>', '2020-06-03 00:42:07'),
(8, 'index.php', ' The Seven Competencies', '<p><span style=\"color: #373737; font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;\">1. Communication: does the applicant have excellent communication skills?</span><br style=\"color: #373737; font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;\" /><span style=\"color: #373737; font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;\">2. Conscientiousness: is the applicant thorough, careful to do tasks well?</span><br style=\"color: #373737; font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;\" /><span style=\"color: #373737; font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;\">3. Integrity : is the applicant honest with themselves and others?</span><br style=\"color: #373737; font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;\" /><span style=\"color: #373737; font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;\">4. Judgment and analysis: does the applicant have the capability to make sound judgments? Do they gather all the facts before making a decision?</span><br style=\"color: #373737; font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;\" /><span style=\"color: #373737; font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;\">5. self-control : Does the applicant remain calm and in control in difficult situations?</span><br style=\"color: #373737; font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;\" /><span style=\"color: #373737; font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;\">6. sensitivity to others : Does the applicant show empathy towards others? Do they take the feelings of others into consideration?</span><br style=\"color: #373737; font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;\" /><span style=\"color: #373737; font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;\">7. Tact and diplomacy : Does the applicant show sensitivity in dealing with difficult issues? Does the applicant possess the necessary skills to deal with others without causing negative feelings?</span><br style=\"color: #373737; font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;\" /><br style=\"color: #373737; font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;\" /><span style=\"color: #373737; font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;\">Notice in the above examples that the SI sample question is addressing the competencies of self-control, sensitivity to others, communication, while the PBDI question addresses the competencies of conscientiousness, Integrity, and judgement and analysis. In all of the questions that will be asked of you during your interview, the competency of communication is a constant that is continuously tested and retested. In order to be successful, however, you will have to be able to know which other competencies also apply to the question so that you can formulate an appropriate response, which touches on the key factors essential for the interviewers.</span></p>', '2020-06-03 21:43:15'),
(9, 'index.php', 'Structure of the CDA interview', '<p><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 16px; line-height: normal; font-family: Arial, Verdana, Helvetica, sans-serif; background: #ffffff; color: #373737; text-align: justify;\"><br />The CDA structured interview is comprised of seven questions, one for each of the seven competencies described above. Each question, which can either be a SI or a PBDI type, is scored on a 5-point scale for a total and a maximum of 35 points by two interviewers who are either a pair of dentists, or senior dental students. The interview usually takes about 20-30 minutes to be completed.<br /><br />Click&nbsp;</span><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 16px; line-height: normal; font-family: Arial, Verdana, Helvetica, sans-serif; background: #ffffff; color: #373737; text-align: justify;\"><a style=\"color: #ff6600; text-decoration-line: none; transition: all 450ms ease 0s;\" title=\"How To Prepare\" href=\"http://cdainterview.com/how-to-prepare-for-cda-interview.html\" rel=\"self\">here</a></span><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 16px; line-height: normal; font-family: Arial, Verdana, Helvetica, sans-serif; background: #ffffff; color: #373737; text-align: justify;\">&nbsp;to learn how to prepare for your CDA interview<br /><br />Click&nbsp;</span><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 16px; line-height: normal; font-family: Arial, Verdana, Helvetica, sans-serif; background: #ffffff; color: #373737; text-align: justify;\"><a style=\"color: #ff6600; text-decoration-line: none; transition: all 450ms ease 0s;\" title=\"CDA Interview Questions\" href=\"http://cdainterview.com/sample-cda-interview-questions.html\" rel=\"self\">here</a></span><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 16px; line-height: normal; font-family: Arial, Verdana, Helvetica, sans-serif; background: #ffffff; color: #373737; text-align: justify;\">&nbsp;to practice with our sample CDA interview questions<br /><br />Click&nbsp;</span><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 16px; line-height: normal; font-family: Arial, Verdana, Helvetica, sans-serif; background: #ffffff; color: #373737; text-align: justify;\"><a style=\"color: #ff6600; text-decoration-line: none; transition: all 450ms ease 0s;\" href=\"http://bemoacademicconsulting.com/Dental-School-Interview-Preparation.html\" target=\"_blank\" rel=\"external noopener\">here</a></span><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 16px; line-height: normal; font-family: Arial, Verdana, Helvetica, sans-serif; background: #ffffff; color: #373737; text-align: justify;\">&nbsp;to learn more about our money-back guarantee CDA interview preparation programs.</span></p>', '2020-06-03 22:06:50');

-- --------------------------------------------------------

--
-- Table structure for table `pics`
--

CREATE TABLE `pics` (
  `id` int(11) NOT NULL,
  `page_name` varchar(100) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pics`
--

INSERT INTO `pics` (`id`, `page_name`, `pic`, `created_at`) VALUES
(7, 'index.php', 'Optimized-cda-interview-guide.jpg', '2020-06-03 22:18:08'),
(8, 'contact.php', 'Optimized-contact-us.png', '2020-06-03 22:18:20');

-- --------------------------------------------------------

--
-- Table structure for table `site_info`
--

CREATE TABLE `site_info` (
  `id` int(11) NOT NULL,
  `page_name` varchar(100) NOT NULL,
  `tag_name` varchar(255) NOT NULL,
  `scripts` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site_info`
--

INSERT INTO `site_info` (`id`, `page_name`, `tag_name`, `scripts`) VALUES
(1, 'index.php', 'Facebook advertising pixel', '  <script>\r\n  !function(f,b,e,v,n,t,s)\r\n  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?\r\n  n.callMethod.apply(n,arguments):n.queue.push(arguments)};\r\n  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version=\'2.0\';\r\n  n.queue=[];t=b.createElement(e);t.async=!0;\r\n  t.src=v;s=b.getElementsByTagName(e)[0];\r\n  s.parentNode.insertBefore(t,s)}(window, document,\'script\',\r\n  \'https://connect.facebook.net/en_US/fbevents.js\');\r\n  fbq(\'init\', \'255568469027103\');\r\n  fbq(\'track\', \'PageView\');\r\n</script>\r\n<noscript><img height=\"1\" width=\"1\" style=\"display:none\"\r\n  src=\"https://www.facebook.com/tr?id=255568469027103&ev=PageView&noscript=1\"\r\n/></noscript>'),
(2, 'contact.php', 'Facebook advertising pixel', '\r\n<script>\r\n  !function(f,b,e,v,n,t,s)\r\n  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?\r\n  n.callMethod.apply(n,arguments):n.queue.push(arguments)};\r\n  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version=\'2.0\';\r\n  n.queue=[];t=b.createElement(e);t.async=!0;\r\n  t.src=v;s=b.getElementsByTagName(e)[0];\r\n  s.parentNode.insertBefore(t,s)}(window, document,\'script\',\r\n  \'https://connect.facebook.net/en_US/fbevents.js\');\r\n  fbq(\'init\', \'255568469027103\');\r\n  fbq(\'track\', \'PageView\');\r\n</script>\r\n<noscript><img height=\"1\" width=\"1\" style=\"display:none\"\r\n  src=\"https://www.facebook.com/tr?id=255568469027103&ev=PageView&noscript=1\"\r\n/></noscript>\r\n'),
(3, 'index.php', 'Google Analytics', '<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-168371292-1\"></script>\r\n<script>\r\n  window.dataLayer = window.dataLayer || [];\r\n  function gtag(){dataLayer.push(arguments);}\r\n  gtag(\'js\', new Date());\r\n\r\n  gtag(\'config\', \'UA-168371292-1\');\r\n</script>\r\n'),
(4, 'contact.php', 'Google Analytics', '<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-168371292-1\"></script>\r\n<script>\r\n  window.dataLayer = window.dataLayer || [];\r\n  function gtag(){dataLayer.push(arguments);}\r\n  gtag(\'js\', new Date());\r\n\r\n  gtag(\'config\', \'UA-168371292-1\');\r\n</script>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `username`, `pwd`, `created_at`) VALUES
(1, 'gagandeep95', '123456', '2020-06-02 20:28:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index_info`
--
ALTER TABLE `index_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_content`
--
ALTER TABLE `page_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pics`
--
ALTER TABLE `pics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_info`
--
ALTER TABLE `site_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `index_info`
--
ALTER TABLE `index_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `page_content`
--
ALTER TABLE `page_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pics`
--
ALTER TABLE `pics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `site_info`
--
ALTER TABLE `site_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
