-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2018 at 11:07 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wincademy`
--

-- --------------------------------------------------------

--
-- Table structure for table `kursevi`
--

CREATE TABLE `kursevi` (
  `idKursa` int(11) NOT NULL,
  `nazivKursa` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kursevi`
--

INSERT INTO `kursevi` (`idKursa`, `nazivKursa`) VALUES
(1, 'HTML5/CSS3'),
(2, 'JavaScript'),
(3, 'PHP'),
(4, 'MySQL'),
(5, 'Excel');

-- --------------------------------------------------------

--
-- Table structure for table `primeri`
--

CREATE TABLE `primeri` (
  `idPrimer` int(11) NOT NULL,
  `naslov` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tekst` text COLLATE utf8_unicode_ci NOT NULL,
  `kod` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fajl` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idVezbe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `primeri`
--

INSERT INTO `primeri` (`idPrimer`, `naslov`, `tekst`, `kod`, `fajl`, `idVezbe`) VALUES
(1, 'HTML Primer 1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'htmlcss', '', 1),
(2, 'HTML Primer 2', 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'htmlcss', '', 1),
(3, 'HTML/CSS Primer 1', ' It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'htmlcss', 'https://vincaskola.rs', 2),
(4, 'HTML/CSS Primer 2', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', 'htmlcss', 'https://vincaskola.rs', 2),
(5, 'JS Primer 1', 'Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.', 'js', 'https://vincaskola.rs', 3),
(6, 'JS Primer 2', 'Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. ', 'js', 'https://vincaskola.rs', 3),
(7, 'JavaScript Primer 1', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'js', NULL, 4),
(8, 'JavaScript Primer 2', 't is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', 'js', NULL, 4),
(9, 'PHP Primer 1', 'Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'php', NULL, 5),
(10, 'PHP Primer 2', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', 'php', NULL, 5),
(11, 'OOP PHP Primer 1', 'If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. ', 'php', NULL, 6),
(12, 'OOP PHP Primer 2', 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.', 'php', NULL, 6),
(13, 'MySQL Primer 1', 'The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 'sql', NULL, 7),
(14, 'MySQL Primer 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 'sql', NULL, 7),
(15, 'SQL Primer 1', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'sql', NULL, 8),
(16, 'SQL Primer 2', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. ', 'sql', NULL, 8),
(17, 'Excel Primer 1', 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. ', 'excel', NULL, 9),
(18, 'Excel Primer 2', 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.', 'excel', NULL, 9),
(19, 'MS Excel Primer 1', 'Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 'excel', NULL, 10),
(20, 'MS Excel Primer 1', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.', 'excel', NULL, 10),
(22, 'werwe', 'wer', 'Choose...', 'https://vincaskola.rs', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vezbe`
--

CREATE TABLE `vezbe` (
  `idVezbe` int(11) NOT NULL,
  `nazivVezbe` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tekst` text COLLATE utf8_unicode_ci NOT NULL,
  `idKursa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vezbe`
--

INSERT INTO `vezbe` (`idVezbe`, `nazivVezbe`, `tekst`, `idKursa`) VALUES
(1, 'HTML Vezba 1', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium', 1),
(2, 'HTML Vezba 2', 'voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident', 1),
(3, 'JS Vezba 1', 'similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio', 2),
(4, 'JS Vezba 2', 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus', 2),
(5, 'PHP Vezba 1', 'omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus', 3),
(6, 'PHP Vezba 2', 'saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente', 3),
(7, 'MySQL Vezba 1', 'electus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat', 4),
(8, 'MySQL Vezba 2', 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms', 4),
(9, 'Excel Vezba 1', 'pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame ', 5),
(10, 'Excel Vezba 2', 'belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain', 5),
(11, 'Sdsgdgf', 'Ssfsfasf', 2),
(12, 'asdf', 'asdfsdf', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kursevi`
--
ALTER TABLE `kursevi`
  ADD PRIMARY KEY (`idKursa`);

--
-- Indexes for table `primeri`
--
ALTER TABLE `primeri`
  ADD PRIMARY KEY (`idPrimer`);

--
-- Indexes for table `vezbe`
--
ALTER TABLE `vezbe`
  ADD PRIMARY KEY (`idVezbe`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kursevi`
--
ALTER TABLE `kursevi`
  MODIFY `idKursa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `primeri`
--
ALTER TABLE `primeri`
  MODIFY `idPrimer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `vezbe`
--
ALTER TABLE `vezbe`
  MODIFY `idVezbe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
