-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2024 at 06:11 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elmisite`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `menu` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `text` text NOT NULL,
  `image` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `menu`, `title`, `text`, `image`) VALUES
(1, 6, 'Bizimlə əlaqə', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48624.83283648071!2d49.820307400000004!3d40.385538950000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d6e776f0db9%3A0x651c38c5ad8b8933!2sBaku%20Zoological%20Park!5e0!3m2!1sen!2saz!4v1713853010570!5m2!1sen!2saz\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>\r\n<ul>\r\n    <li>Ünvan</li>\r\n    <li>Whatsapp</li>\r\n    <li>Telefon</li>\r\n    <li>E-mail</li>\r\n</ul> ', ''),
(2, 1, 'Haqqımızda', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/qyEtjU_dJTI?si=3eU0TiB4yPUPGZBJ\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>\r\n<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque culpa quisquam adipisci ex. Voluptate id eius, quo quibusdam distinctio harum rerum, dolore tempora iste blanditiis temporibus, necessitatibus nesciunt pariatur animi quasi sint autem. Facilis sint iure numquam nesciunt, voluptates, nihil voluptas tenetur harum ut quisquam sunt iusto nulla blanditiis accusamus aspernatur amet laudantium quasi rerum? Rem, molestias dolorum molestiae dolor illum impedit ducimus similique doloremque nihil minus laboriosam culpa libero minima eveniet non voluptatum deserunt! Accusamus, ea doloribus? Vel eligendi officiis commodi non nemo repellendus fuga, explicabo recusandae maxime quia!</p>                </section>\r\n', ''),
(3, 2, 'Saytımıza xoş gəlmisiniz!', '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis molestias impedit assumenda tempora illo maiores unde enim soluta deleniti cum, odit odio consectetur accusantium cumque autem, ut ea rem. Fuga quis nisi sit quas consequuntur dicta at error molestiae architecto fugiat, accusamus ad assumenda odio possimus rem culpa itaque, quos quod iste, quaerat et alias consequatur? Vero eius beatae repellat veniam fuga iure vitae ipsam in quaerat sint corrupti autem consequatur, quasi totam temporibus. Quia repudiandae ipsum ipsa! Explicabo deserunt corrupti numquam commodi ducimus eum!</p>\r\n<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis molestias impedit assumenda tempora illo maiores unde enim soluta deleniti cum, odit odio consectetur accusantium cumque autem, ut ea rem. Fuga quis nisi sit quas consequuntur dicta at error molestiae architecto fugiat, accusamus ad assumenda odio possimus rem culpa itaque, quos quod iste, quaerat et alias consequatur? Vero eius beatae repellat veniam fuga iure vitae ipsam in quaerat sint corrupti autem consequatur, quasi totam temporibus. Quia repudiandae ipsum ipsa! Explicabo deserunt corrupti numquam commodi ducimus eum!</p>\r\n<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis molestias impedit assumenda tempora illo maiores unde enim soluta deleniti cum, odit odio consectetur accusantium cumque autem, ut ea rem. Fuga quis nisi sit quas consequuntur dicta at error molestiae architecto fugiat, accusamus ad assumenda odio possimus rem culpa itaque, quos quod iste, quaerat et alias consequatur? Vero eius beatae repellat veniam fuga iure vitae ipsam in quaerat sint corrupti autem consequatur, quasi totam temporibus. Quia repudiandae ipsum ipsa! Explicabo deserunt corrupti numquam commodi ducimus eum!</p>\r\n<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis molestias impedit assumenda tempora illo maiores unde enim soluta deleniti cum, odit odio consectetur accusantium cumque autem, ut ea rem. Fuga quis nisi sit quas consequuntur dicta at error molestiae architecto fugiat, accusamus ad assumenda odio possimus rem culpa itaque, quos quod iste, quaerat et alias consequatur? Vero eius beatae repellat veniam fuga iure vitae ipsam in quaerat sint corrupti autem consequatur, quasi totam temporibus. Quia repudiandae ipsum ipsa! Explicabo deserunt corrupti numquam commodi ducimus eum!</p>\r\n<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis molestias impedit assumenda tempora illo maiores unde enim soluta deleniti cum, odit odio consectetur accusantium cumque autem, ut ea rem. Fuga quis nisi sit quas consequuntur dicta at error molestiae architecto fugiat, accusamus ad assumenda odio possimus rem culpa itaque, quos quod iste, quaerat et alias consequatur? Vero eius beatae repellat veniam fuga iure vitae ipsam in quaerat sint corrupti autem consequatur, quasi totam temporibus. Quia repudiandae ipsum ipsa! Explicabo deserunt corrupti numquam commodi ducimus eum!</p>', '../img/6656bfe20b246.jpg'),
(9, 20, 'footers', '<p>This is a footer.</p>', '../img/6654017cb6d05.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id` int(11) NOT NULL,
  `short` char(2) NOT NULL,
  `full` varchar(16) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `short`, `full`, `status`) VALUES
(2, 'en', 'English', 1),
(3, 'az', 'Azərbaycan', 1),
(4, 'ru', 'Russian', 0),
(8, 'fr', 'French', 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `lang` int(11) NOT NULL,
  `name` varchar(128) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `lang`, `name`, `order`, `status`) VALUES
(1, 3, 'Haqqımızda', 2, 1),
(2, 3, 'Ana səhifə', 1, 1),
(3, 2, 'Main Page', 1, 1),
(4, 2, 'About Us', 2, 1),
(5, 2, 'Contact Us', 4, 1),
(6, 3, 'Bizimlə əlaqə', 4, 1),
(7, 3, 'Xidmətlərimiz', 3, 1),
(8, 2, 'Our Services', 3, 1),
(15, 3, 'sdfsdf', 5, 1),
(16, 3, 'sdfsdf', 6, 1),
(17, 3, 'Second', 7, 1),
(20, 2, 'Footer Webpage', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(4) NOT NULL,
  `pass` varchar(64) NOT NULL,
  `role` varchar(32) DEFAULT NULL,
  `status` int(1) NOT NULL,
  `user` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `pass`, `role`, `status`, `user`) VALUES
(1, '0192023a7bbd73250516f069df18b500', 'admin', 1, 'admin1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu` (`menu`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lang` (`lang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `content`
--
ALTER TABLE `content`
  ADD CONSTRAINT `content_ibfk_1` FOREIGN KEY (`menu`) REFERENCES `menu` (`id`) ON UPDATE NO ACTION;

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`lang`) REFERENCES `language` (`id`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
