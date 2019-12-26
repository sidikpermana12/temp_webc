-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2019 at 11:55 AM
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
-- Database: `webc`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `glr_id` int(11) NOT NULL,
  `glr_imagesname` varchar(100) NOT NULL,
  `glr_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `glr_created_by` int(11) NOT NULL,
  `glr_edited_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `glr_edited_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`glr_id`, `glr_imagesname`, `glr_created_at`, `glr_created_by`, `glr_edited_at`, `glr_edited_by`) VALUES
(92, '163.jpg', '2019-09-10 06:59:52', 1, '0000-00-00 00:00:00', 0),
(93, '164.jpg', '2019-09-10 06:59:52', 1, '0000-00-00 00:00:00', 0),
(94, '165.jpg', '2019-09-10 06:59:52', 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `logo_brandlogo`
--

CREATE TABLE `logo_brandlogo` (
  `lbl_id` int(11) NOT NULL,
  `lbl_name` varchar(50) NOT NULL,
  `lbl_images` varchar(255) NOT NULL,
  `lbl_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lbl_created_by` int(11) NOT NULL,
  `lbl_edited_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lbl_edited_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logo_brandlogo`
--

INSERT INTO `logo_brandlogo` (`lbl_id`, `lbl_name`, `lbl_images`, `lbl_created_at`, `lbl_created_by`, `lbl_edited_at`, `lbl_edited_by`) VALUES
(1, 'WORLD', '88ee1b908b4cc6d8afaba7db5fd8ba0e.png', '2019-09-26 03:12:16', 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `logo_iconbar`
--

CREATE TABLE `logo_iconbar` (
  `lib_id` int(11) NOT NULL,
  `lib_images` varchar(255) NOT NULL,
  `lib_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lib_created_by` int(11) NOT NULL,
  `lib_edited_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lib_edited_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logo_iconbar`
--

INSERT INTO `logo_iconbar` (`lib_id`, `lib_images`, `lib_created_at`, `lib_created_by`, `lib_edited_at`, `lib_edited_by`) VALUES
(1, '6cfc82c6ec7ab91debf4683630eee402.png', '2019-09-26 07:13:27', 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `logo_slidehomepage`
--

CREATE TABLE `logo_slidehomepage` (
  `lsh_id` int(11) NOT NULL,
  `lsh_images` varchar(255) NOT NULL,
  `lsh_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lsh_created_by` int(11) NOT NULL,
  `lsh_edited_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lsh_edited_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logo_slidehomepage`
--

INSERT INTO `logo_slidehomepage` (`lsh_id`, `lsh_images`, `lsh_created_at`, `lsh_created_by`, `lsh_edited_at`, `lsh_edited_by`) VALUES
(1, '3a7dacb15f9c513b0038c9fe649dade9.jpg', '2019-09-26 06:38:20', 1, '0000-00-00 00:00:00', 0),
(6, 'cc183c927b0ca9602523890065da95e0.jpg', '2019-09-26 03:59:01', 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `multiple`
--

CREATE TABLE `multiple` (
  `mlt_id` int(11) NOT NULL,
  `mlt_filename` varchar(100) NOT NULL,
  `mlt_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `mlt_created_by` int(11) NOT NULL,
  `mlt_edited_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `mlt_edited_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `pgs_id` int(11) NOT NULL,
  `pgs_name` varchar(100) NOT NULL,
  `pgs_slug` varchar(100) NOT NULL,
  `pgs_images` varchar(50) NOT NULL,
  `pgs_body` text NOT NULL,
  `pgs_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pgs_created_by` int(11) NOT NULL,
  `pgs_edited_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `pgs_edited_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`pgs_id`, `pgs_name`, `pgs_slug`, `pgs_images`, `pgs_body`, `pgs_created_at`, `pgs_created_by`, `pgs_edited_at`, `pgs_edited_by`) VALUES
(1, 'About Us', 'about-us', '479b826b95b7be9d580b65b96c900fd6.png', '<p style=\"text-align:justify\"><strong>ABOUT US</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p style=\"text-align:justify\">Why do we use it?</p>\r\n\r\n<p style=\"text-align:justify\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Where does it come from?</p>\r\n\r\n<p style=\"text-align:justify\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p style=\"text-align:justify\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<p style=\"text-align:justify\">Where can I get some?</p>\r\n\r\n<p style=\"text-align:justify\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', '2019-09-01 01:40:34', 2, '2019-09-23 03:50:26', 1),
(2, 'Services', 'services', '042834772c96ee8d68d1db25b79b8d80.png', '<p style=\"text-align:justify\">SERVICES - What is Lorem Ipsum?</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p style=\"text-align:justify\">Why do we use it?</p>\r\n\r\n<p style=\"text-align:justify\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Where does it come from?</p>\r\n\r\n<p style=\"text-align:justify\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p style=\"text-align:justify\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<p style=\"text-align:justify\">Where can I get some?</p>\r\n\r\n<p style=\"text-align:justify\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', '2019-09-01 01:40:59', 2, '2019-09-23 03:50:21', 1),
(3, 'Blog', 'blog', '3b2b7bdf20c4b225820189e521e64e62.png', '<p style=\"text-align:justify\">BLOG - What is Lorem Ipsum?</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p style=\"text-align:justify\">Why do we use it?</p>\r\n\r\n<p style=\"text-align:justify\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Where does it come from?</p>\r\n\r\n<p style=\"text-align:justify\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p style=\"text-align:justify\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<p style=\"text-align:justify\">Where can I get some?</p>\r\n\r\n<p style=\"text-align:justify\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', '2019-09-01 01:42:08', 2, '2019-09-23 03:50:15', 1),
(4, 'Contact', 'contact', 'f515a6b161e718396b5dafcf23e15cf0.png', '<p style=\"text-align:justify\">CONTACT - What is Lorem Ipsum?</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p style=\"text-align:justify\">Why do we use it?</p>\r\n\r\n<p style=\"text-align:justify\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Where does it come from?</p>\r\n\r\n<p style=\"text-align:justify\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p style=\"text-align:justify\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<p style=\"text-align:justify\">Where can I get some?</p>\r\n\r\n<p style=\"text-align:justify\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', '2019-09-01 01:42:27', 2, '2019-09-23 03:50:11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages_sub`
--

CREATE TABLE `pages_sub` (
  `sub_pgs_id` int(11) NOT NULL,
  `sub_pgs_pages_id` int(11) NOT NULL,
  `sub_pgs_name` varchar(100) NOT NULL,
  `sub_pgs_slug` varchar(100) NOT NULL,
  `sub_pgs_images` varchar(50) NOT NULL,
  `sub_pgs_body` text NOT NULL,
  `sub_pgs_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sub_pgs_created_by` int(11) NOT NULL,
  `sub_pgs_edited_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `sub_pgs_edited_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages_sub`
--

INSERT INTO `pages_sub` (`sub_pgs_id`, `sub_pgs_pages_id`, `sub_pgs_name`, `sub_pgs_slug`, `sub_pgs_images`, `sub_pgs_body`, `sub_pgs_created_at`, `sub_pgs_created_by`, `sub_pgs_edited_at`, `sub_pgs_edited_by`) VALUES
(1, 1, 'Our Commitment', 'our-commitment', 'f0695ed78fa0dbe821946ddfd8745e24.png', '<p style=\"text-align:justify\">OUR COMMITMENT - What is Lorem Ipsum?</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p style=\"text-align:justify\">Why do we use it?</p>\r\n\r\n<p style=\"text-align:justify\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Where does it come from?</p>\r\n\r\n<p style=\"text-align:justify\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p style=\"text-align:justify\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<p style=\"text-align:justify\">Where can I get some?</p>\r\n\r\n<p style=\"text-align:justify\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', '2019-09-01 01:42:58', 2, '2019-09-23 03:50:46', 1),
(2, 1, 'Our Boards', 'our-boards', 'noimagesheader.jpg', '<p style=\"text-align:justify\">OUR BOARDS - What is Lorem Ipsum?</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p style=\"text-align:justify\">Why do we use it?</p>\r\n\r\n<p style=\"text-align:justify\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Where does it come from?</p>\r\n\r\n<p style=\"text-align:justify\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p style=\"text-align:justify\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<p style=\"text-align:justify\">Where can I get some?</p>\r\n\r\n<p style=\"text-align:justify\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', '2019-09-01 01:43:40', 2, '2019-09-23 03:50:42', 1),
(3, 2, 'Industrial Services', 'industrial-services', '58a31f606c470739c87159ab2ccea20f.png', '<p style=\"text-align:justify\">INDUSTRIAL SERVICES - What is Lorem Ipsum?</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p style=\"text-align:justify\">Why do we use it?</p>\r\n\r\n<p style=\"text-align:justify\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Where does it come from?</p>\r\n\r\n<p style=\"text-align:justify\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p style=\"text-align:justify\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<p style=\"text-align:justify\">Where can I get some?</p>\r\n\r\n<p style=\"text-align:justify\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', '2019-09-01 01:44:21', 2, '2019-09-23 03:50:38', 1),
(4, 2, 'Component Services', 'component-services', 'noimagesheader.jpg', '<p style=\"text-align:justify\">COMPONENT SERVICES - What is Lorem Ipsum?</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p style=\"text-align:justify\">Why do we use it?</p>\r\n\r\n<p style=\"text-align:justify\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Where does it come from?</p>\r\n\r\n<p style=\"text-align:justify\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p style=\"text-align:justify\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<p style=\"text-align:justify\">Where can I get some?</p>\r\n\r\n<p style=\"text-align:justify\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', '2019-09-01 01:44:53', 2, '2019-09-23 03:50:34', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `pst_id` int(11) NOT NULL,
  `pst_name` varchar(100) NOT NULL,
  `pst_slug` varchar(100) NOT NULL,
  `pst_categoriespost_id` int(100) NOT NULL,
  `pst_images` varchar(100) NOT NULL,
  `pst_link` varchar(255) NOT NULL,
  `pst_body` text NOT NULL,
  `pst_tags` varchar(255) NOT NULL,
  `pst_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pst_created_by` int(11) NOT NULL,
  `pst_edited_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `pst_edited_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`pst_id`, `pst_name`, `pst_slug`, `pst_categoriespost_id`, `pst_images`, `pst_link`, `pst_body`, `pst_tags`, `pst_created_at`, `pst_created_by`, `pst_edited_at`, `pst_edited_by`) VALUES
(3, 'Demam Berdarah Merajalela di Indonesia hebat', 'demam-berdarah-merajalela-di-indonesia-hebat', 1, '5ccc4900b1b4850f3190a360d20b7eec.jpeg', '', '<p style=\"text-align:justify\">What is Lorem Ipsum?</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p style=\"text-align:justify\">Why do we use it?</p>\r\n\r\n<p style=\"text-align:justify\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Image result for demam berdarah\" src=\"https://www.wowkeren.com/display/images/photo/2019/01/14/00239771.jpg\" /></p>\r\n\r\n<p style=\"text-align:justify\">Where does it come from?</p>\r\n\r\n<p style=\"text-align:justify\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p style=\"text-align:justify\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<p style=\"text-align:justify\">Where can I get some?</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"\" src=\"https://statik.tempo.co/data/2019/01/31/id_816167/816167_720.jpg\" style=\"height:405px; width:720px\" /></p>\r\n\r\n<p style=\"text-align:justify\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', 'dbd,demam berdarah,penyakit berbahaya,berantas dbd,nyamuk demam berdarah,nyamuk dbd,ligkungan dbd', '2019-09-01 06:10:50', 2, '2019-09-23 03:49:03', 1),
(4, 'Ekonomi Indonesia Melesat', 'ekonomi-indonesia-melesat', 3, '3730383c09f2cf395799357260eaf956.jpg', '', '<p style=\"text-align:left\">What is Lorem Ipsum?</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p style=\"text-align:left\">Why do we use it?</p>\r\n\r\n<p style=\"text-align:justify\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:left\">Where does it come from?</p>\r\n\r\n<p style=\"text-align:justify\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p style=\"text-align:justify\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<p style=\"text-align:left\">Where can I get some?</p>\r\n\r\n<p style=\"text-align:justify\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', 'ekonomi,ekonomi indonesia,bea dan cukai,keuangan,pendapatan,gaji,saham', '2019-09-01 06:14:15', 1, '2019-09-23 03:48:57', 1),
(5, 'Jurnal', 'jurnal', 2, '7c91da0ef8063877c2192ed547ea7ca3.jpg', '', '<p>Berikut ini tahapan-tahapan dalam membuat jurnal dengan benar. Cara dibawah ini dapat pembaca gunakan sebagai bahan untuk menulis jurnal. Langsung saja berikut ini tahapan mudah membuat jurnal.</p>\r\n\r\n<ol>\r\n	<li>Membuat Judul Jurnal\r\n	<p>Langkah pertama ialah membuat judul jurnal yang akan kita tulis. Tentu semua karya tulis ilmiah memiliki judul yang bagus dan jelas. Adanya judul akan memudahkan pembaca dalam mengetahui tema yang sedang akan dia baca.</p>\r\n\r\n	<p>Untuk pemilihan judul, buat sejelas mungkin dan semenarik mungkin. Semisal PERAN TASAWUF MODERN DALAM MENGHADAPI TANTANGAN ZAMAN. Bila orang lain membaca judul maka secara tidak langsung akan mengetahui isi sekilas tema tulisan.</p>\r\n	</li>\r\n	<li>Membuat Abstrak Jurnal\r\n	<p>Selanjutnya adalah membuat abstrak jurnal yang baik. Apa itu abstrak? Banyak mengira bagian ini adalah kesimpulan dari isi tulisan, namun itu kurang tepat. Abstrak sendiri berbeda dengan kesimpulan.</p>\r\n\r\n	<p>Sebab fungsi dari abstrak adalah untuk memberikan gambaran terhadap keseluruhan isi karya. Bukan penarikan kesimpulan dari keseluruhan isi jurnal.</p>\r\n\r\n	<p>Isi abstrak harus memiliki beberapa kriterian berikut ini yaitu ringkas, padat, jelas, dan obyektif. Selain itu, abstrak harus berdiri sendiri, Maksudnya didalamnya tidak boleh berisi kutipan ataupun catatan kaki.<br />\r\n	Untuk total kata abstrak minimal kurang lebih 250 kata. Dengan ketentuan isi sepeti tujuan jurnal, metode, hasil serta kesimpulan singkat dari isi karya tulis tersebut.</p>\r\n	</li>\r\n	<li>Pendahuluan Jurnal\r\n	<p>Langkah ketiga adalah membuat pendahuluan jurnal. Pada bagian ini berisi mengenai sekilas dari teman yang sedang diangkat. Selain itu, tujuannya adalah agar pembaca paham tentang tujuan serta metode penelitian.</p>\r\n\r\n	<p>Isi pendahuluan mencakup mengenai latar belakang masalah serta ulasan mengenai dari manfaat dari tulisan tersebut. Untuk pendahuluan sendiri umumnya ditulis sebanyak satu lembar dan bersambung dengan bagian selanjutnya.</p>\r\n	</li>\r\n	<li>Bahan dan Metode Penelitian\r\n	<p>Bagian bahan dan&nbsp;metode penelitian&nbsp;jurnal berisi tentang tahapan percobaan yang telah dilakukan penulis karya. Sedangkan pembahasannya mencakup metode penelitian, percobaan dan alat percobaan.<br />\r\n	Selain itu juga berisi, jenis metode pengumpulan data, tempat, dan tipe pengendalian masalah.</p>\r\n\r\n	<p>Pada bagian ini harus ditulis dan dijelaskan sedetail mungkin, jelas, dan mudah dipahami. Sehingga pembaca dapat memahaminya dengan baik. Bagian ini juga menjadi perhatian penting bagi setiap penulisan karya ilmiah.</p>\r\n	</li>\r\n	<li>Menulis Hasil Percobaan atau Penelitian\r\n	<p>Bagian hasil percobaan jurnal memberikan informasi tulisan yang cukup singkat. Dengan isi seperti penjelasan berbentuk teks, diagram atau tabel, serta gambar-gambar yang relevan.<br />\r\n	Data yang ditampilkan haruslah objektif, sehingga tidak boleh ada interprestasi dari siapapun. Oleh sebab itu, penulisan bagian ini juga menjadi bagian yang harus diperhatikan.</p>\r\n\r\n	<p>Untuk memudahkan pembaca memahaminya, data dapat disajikan dalam bentuk diagram batang, tabel dan gambar. Ditambah penjelasan deskripsi singkatnya.</p>\r\n	</li>\r\n	<li>Pembahasan Jurnal\r\n	<p>Langkah selanjutnya adalah menulis pembahasan jurnal. Pada bagian ini, penulis karya menjelaskan data yang ditampilkan tadi secara teks deskripsi.</p>\r\n\r\n	<p>Dalam menjelasakannya penulis merujuk juga dari kejadian ketika pengamatan yang dilakukannya. Semisal dari satu variabel dengan variabel lain memiliki hubungan atau korelasi atau tidak.</p>\r\n\r\n	<p>Dalam penyampaiannya bisa jadi akan sama dengan penelitian yang dilakukan sebelumnya oleh orang lain. Bisa juga memiliki hasil yang berbeda dengan peneliti lain. Hal tersebut sah-sah saja dan diperbolehkan.</p>\r\n\r\n	<p>Sehingga dalam penelitian, tidak harus sama dengan hasil terdahulu. Namun juga tidak harus berbeda. Hal yang terpenting adalah keobjektifan karya tulis jurnal ilmiah.</p>\r\n	</li>\r\n	<li>Kesimpulan Jurnal\r\n	<p>Setelah mengulas seluruh isi jurnal dengan baik dan jelas. Tahapan selanjutnya adalah membuat kesimpulan dari keseluruhan isi jurnal.</p>\r\n\r\n	<p>Didalam bagian ini, penulis memberikan kesimpulan mengenai percobaan yang telah dia lakukan. Sehingga pada kesimpulan ini berisi penarikan informasi penting hasil dari penelitian. Tentu tetap dengan merujuk pada data-data yang disampaikannya di atas.</p>\r\n	</li>\r\n	<li>Daftar Pustaka Jurnal\r\n	<p>Bagian&nbsp;daftar pustaka&nbsp;jurnal ditulis pada bagian belakang halaman. Pada bagian ini berisi data-data buku atau literatur yang kita gunakan sebagai bahan rujukan. Semisal kutipan, data penelitian terdahulu, statement para ahli.</p>\r\n\r\n	<p>Setiap karya ilmiah harus terdapat bagian ini. Dalam penulisannya juga harus sesuai dengan cara menulis daftar pustaka yang telah ditetapkan.</p>\r\n	</li>\r\n</ol>\r\n', 'jurnal, indonesia', '2019-09-05 02:32:55', 1, '2019-09-23 03:48:45', 1),
(6, 'Perekonomian Indonesia Mengalami Penaikan Disektor Kelautan', 'perekonomian-indonesia-mengalami-penaikan-disektor-kelautan', 3, 'f2b5a8ba4ed0f4a1977c05a8d9f8d8f9.jpg', '', '<p style=\"text-align:justify\">What is Lorem Ipsum?</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p style=\"text-align:justify\">Why do we use it?</p>\r\n\r\n<p style=\"text-align:justify\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Where does it come from?</p>\r\n\r\n<p style=\"text-align:justify\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p style=\"text-align:justify\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<p style=\"text-align:justify\">Where can I get some?</p>\r\n\r\n<p style=\"text-align:justify\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', 'ekonomi,ekonomi indonesia,bea dan cukai,keuangan,pendapatan,gaji,saham', '2019-09-12 09:20:17', 1, '2019-09-23 03:48:29', 1),
(7, 'Indonesia Terkanal Dengan Keragaman Suku dan Budayanya', 'indonesia-terkanal-dengan-keragaman-suku-dan-budayanya', 4, 'f5a8229db0260e7e753940fad2991a21.png', '', '<p style=\"text-align:justify\">What is Lorem Ipsum?</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p style=\"text-align:justify\">Why do we use it?</p>\r\n\r\n<p style=\"text-align:justify\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Where does it come from?</p>\r\n\r\n<p style=\"text-align:justify\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p style=\"text-align:justify\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<p style=\"text-align:justify\">Where can I get some?</p>\r\n\r\n<p style=\"text-align:justify\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', 'budaya indonesia, suku indonesia, beragam suku, beraga budaya', '2019-09-12 09:28:22', 1, '2019-09-23 03:48:18', 1),
(8, 'Budaya Indonesia Menjadi Yang Paling Beragam Di Dunia', 'budaya-indonesia-menjadi-yang-paling-beragam-di-dunia', 4, 'noimagesheader.jpg', '', '<p style=\"text-align:justify\">What is Lorem Ipsum?<br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p style=\"text-align:justify\">Why do we use it?<br />\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p style=\"text-align:justify\"><br />\r\nWhere does it come from?<br />\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p style=\"text-align:justify\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<p style=\"text-align:justify\">Where can I get some?<br />\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', 'budaya indonesia, beragam budaya indonesia, ragam indoenesia', '2019-09-19 01:45:09', 1, '2019-09-23 03:47:44', 1),
(9, 'Keragaman Budaya Indonesia', 'keragaman-budaya-indonesia', 5, '9304d7a817778f178fab3f0e6a10dee3.jpg', 'https://www.youtube.com/embed/cbD_yqfYx9g', '<p style=\"text-align:justify\">What is Lorem Ipsum?<br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p style=\"text-align:justify\">Why do we use it?<br />\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p style=\"text-align:justify\"><br />\r\nWhere does it come from?<br />\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p style=\"text-align:justify\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<p style=\"text-align:justify\">Where can I get some?<br />\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', 'dudaya indonesia, indonesia unik, indonesia kreatif, indoenesia mendunia, indonesian culture, indonesia beragam suku, indoensia merdeka, indonesia hebat', '2019-09-19 01:46:57', 1, '2019-09-23 03:46:56', 1),
(10, 'Kurangnya Air Bersih Menjadi Faktor Utama Timbulnya Demam Berdarah', 'kurangnya-air-bersih-menjadi-faktor-utama-timbulnya-demam-berdarah', 5, '81bf9e6f6b496bd7b1b5d53f0b96ccd1.jpg', 'https://www.youtube.com/embed/EKJk5Rjeaaw', '<p style=\"text-align:justify\">What is Lorem Ipsum?<br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p style=\"text-align:justify\">Why do we use it?<br />\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p style=\"text-align:justify\"><br />\r\nWhere does it come from?<br />\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p style=\"text-align:justify\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<p style=\"text-align:justify\">Where can I get some?<br />\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', 'dbd,demam berdarah,penyakit berbahaya,berantas dbd,nyamuk demam berdarah,nyamuk dbd,ligkungan dbd', '2019-09-19 01:48:40', 1, '2019-09-23 03:46:50', 1),
(11, 'Asian Games 2018', 'asian-games-2018', 5, '1797711423e7f936704c7efc01f67817.jpg', 'https://www.youtube.com/embed/W7QL7MBC2dM', '<p style=\"text-align:justify\">What is Lorem Ipsum?<br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p style=\"text-align:justify\">Why do we use it?<br />\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p style=\"text-align:justify\"><br />\r\nWhere does it come from?<br />\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p style=\"text-align:justify\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<p style=\"text-align:justify\">Where can I get some?<br />\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', 'asian games 2018, indonesia, tuan rumah asian games 2018, indonesia juara', '2019-09-19 01:54:14', 1, '2019-09-23 03:46:45', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts_categories`
--

CREATE TABLE `posts_categories` (
  `cat_pst_id` int(11) NOT NULL,
  `cat_pst_name` varchar(50) NOT NULL,
  `cat_pst_slug` varchar(50) NOT NULL,
  `cat_pst_body` text NOT NULL,
  `cat_pst_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cat_pst_created_by` int(11) NOT NULL,
  `cat_pst_edited_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `cat_pst_edited_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts_categories`
--

INSERT INTO `posts_categories` (`cat_pst_id`, `cat_pst_name`, `cat_pst_slug`, `cat_pst_body`, `cat_pst_created_at`, `cat_pst_created_by`, `cat_pst_edited_at`, `cat_pst_edited_by`) VALUES
(1, 'Health', 'health', 'Informasi seputar dunia kesehatan', '2019-09-01 03:49:46', 2, '2019-09-23 03:42:05', 1),
(2, 'Sports', 'sports', 'Informasi seputar dunia olah raga', '2019-09-01 03:50:16', 2, '2019-09-23 03:42:09', 1),
(3, 'Ekonomi', 'ekonomi', 'Informasi seputar dunia ekonomi', '2019-09-01 03:51:04', 2, '2019-09-23 03:42:13', 1),
(4, 'Culture', 'culture', 'Informasi seputar dunia budaya', '2019-09-01 03:51:20', 2, '2019-09-23 03:42:17', 1),
(5, 'Video', 'video', 'This category only for video posts', '2019-09-18 07:38:02', 1, '2019-09-23 03:42:21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usr_id` int(11) NOT NULL,
  `usr_group_id` int(11) NOT NULL,
  `usr_level_id` int(11) NOT NULL,
  `usr_email` varchar(50) NOT NULL,
  `usr_password` varchar(255) NOT NULL,
  `usr_fullname` varchar(50) NOT NULL,
  `usr_slug` varchar(50) NOT NULL,
  `usr_phone` varchar(20) NOT NULL,
  `usr_address` text NOT NULL,
  `usr_images` varchar(50) NOT NULL,
  `usr_status` int(11) NOT NULL,
  `usr_activity` varchar(100) NOT NULL,
  `usr_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usr_created_by` int(11) NOT NULL,
  `usr_edited_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `usr_edited_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usr_id`, `usr_group_id`, `usr_level_id`, `usr_email`, `usr_password`, `usr_fullname`, `usr_slug`, `usr_phone`, `usr_address`, `usr_images`, `usr_status`, `usr_activity`, `usr_created_at`, `usr_created_by`, `usr_edited_at`, `usr_edited_by`) VALUES
(1, 1, 1, 'superuser@gmail.com', '$argon2id$v=19$m=1024,t=2,p=2$TS5EdGo0TENZdVRkM2k3cQ$Yra/dx7prlfUSc4Yf9kZFkKuB3Tujvc3oG5fRdn7C8I', 'Super User Junior II', 'super-user-junior-ii', '085691791974', 'Komplek Ciledug Indah I, Jl. Pelangi Raya Blok B-14 No.176, Kec. Karang Tengah, Kel. Pedurenan Kota Tangerang - Banten 15145', '8724bd5e601c9baccba94a23e5c5642f.gif', 0, '', '2019-08-31 03:18:42', 0, '2019-09-25 06:02:21', 1),
(2, 1, 2, 'kamran@gmail.com', '$argon2id$v=19$m=1024,t=2,p=2$ZlIzTURwNXhSd2J0VjdsSg$kq8fXFP+hrvm/TVhpi3jCosHReKCII1CzCcPFG0WXDo', 'kamran admin - staff', 'kamran-admin-staff', '082112692011', 'Jakarta Raya Indonesia Merdeka 45', '1510nophoto.png', 0, '', '2019-08-31 06:26:46', 0, '2019-09-25 06:00:13', 1),
(10, 2, 2, 'indrabombom@gmail.com', '$argon2id$v=19$m=1024,t=2,p=2$VUZ6WDkxVm9teHl5UDFTaQ$KqrBe44QegmJjc+PeMbDbYbQI/DYEM8sdz5Zlyq3ijg', 'Indra Bom Bom', 'indra-bom-bom', '082112692011', 'Bonjer', '984c6ea1c3d6f4f9b5479dc63053f0d3.jpg', 0, '', '2019-09-25 07:54:37', 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `grp_id` int(11) NOT NULL,
  `grp_name` varchar(20) NOT NULL,
  `grp_slug` varchar(20) NOT NULL,
  `grp_description` varchar(50) NOT NULL,
  `grp_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `grp_created_by` int(11) NOT NULL,
  `grp_edited_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `grp_edited_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`grp_id`, `grp_name`, `grp_slug`, `grp_description`, `grp_created_at`, `grp_created_by`, `grp_edited_at`, `grp_edited_by`) VALUES
(1, 'Group Admin', 'Group-Admin', 'Create, Read, Update and Delete', '2019-08-31 04:35:43', 0, '2019-08-31 04:35:43', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_levels`
--

CREATE TABLE `users_levels` (
  `lvl_id` int(11) NOT NULL,
  `lvl_name` varchar(20) NOT NULL,
  `lvl_slug` varchar(20) NOT NULL,
  `lvl_description` varchar(50) NOT NULL,
  `lvl_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lvl_created_by` int(11) NOT NULL,
  `lvl_edited_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lvl_edited_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_levels`
--

INSERT INTO `users_levels` (`lvl_id`, `lvl_name`, `lvl_slug`, `lvl_description`, `lvl_created_at`, `lvl_created_by`, `lvl_edited_at`, `lvl_edited_by`) VALUES
(1, 'Level Admin', 'Level-Admin', 'Create, Read, Update and Delete', '2019-08-31 06:02:09', 0, '2019-08-31 06:02:09', 1),
(2, 'Level Staff', 'Level-Staff', 'Create, Read, and Update', '2019-08-31 06:02:23', 0, '2019-08-31 06:02:23', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`glr_id`);

--
-- Indexes for table `logo_brandlogo`
--
ALTER TABLE `logo_brandlogo`
  ADD PRIMARY KEY (`lbl_id`);

--
-- Indexes for table `logo_iconbar`
--
ALTER TABLE `logo_iconbar`
  ADD PRIMARY KEY (`lib_id`);

--
-- Indexes for table `logo_slidehomepage`
--
ALTER TABLE `logo_slidehomepage`
  ADD PRIMARY KEY (`lsh_id`);

--
-- Indexes for table `multiple`
--
ALTER TABLE `multiple`
  ADD PRIMARY KEY (`mlt_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`pgs_id`);

--
-- Indexes for table `pages_sub`
--
ALTER TABLE `pages_sub`
  ADD PRIMARY KEY (`sub_pgs_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`pst_id`);

--
-- Indexes for table `posts_categories`
--
ALTER TABLE `posts_categories`
  ADD PRIMARY KEY (`cat_pst_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usr_id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`grp_id`);

--
-- Indexes for table `users_levels`
--
ALTER TABLE `users_levels`
  ADD PRIMARY KEY (`lvl_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `glr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `logo_brandlogo`
--
ALTER TABLE `logo_brandlogo`
  MODIFY `lbl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logo_iconbar`
--
ALTER TABLE `logo_iconbar`
  MODIFY `lib_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logo_slidehomepage`
--
ALTER TABLE `logo_slidehomepage`
  MODIFY `lsh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `multiple`
--
ALTER TABLE `multiple`
  MODIFY `mlt_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `pgs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pages_sub`
--
ALTER TABLE `pages_sub`
  MODIFY `sub_pgs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `pst_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `posts_categories`
--
ALTER TABLE `posts_categories`
  MODIFY `cat_pst_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `grp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users_levels`
--
ALTER TABLE `users_levels`
  MODIFY `lvl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
