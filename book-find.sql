-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 01 Lis 2021, 07:48
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `book-find`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `short_desc` varchar(250) NOT NULL,
  `genre` varchar(25) NOT NULL,
  `image` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `books`
--

INSERT INTO `books` (`id`, `book_name`, `author`, `short_desc`, `genre`, `image`) VALUES
(1, 'Chrzest Ognia', 'Andrzej Sapkowki', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Praesent blandit quam id malesuada feugiat. Nunc auctor lorem ligula, a feugiat arcu ullamcorper quis. Phasellus quis erat vehicula neque tempor porttitor id in augue.', 'fantasy', 'chrzestognia.png'),
(2, 'Ogien i krew', 'George R. R. Martin', 'Vivamus vitae magna nulla. Vivamus vel accumsan justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nam eleifend, odio lacinia tempus efficitur, libero eros egestas nibh, nec volutpat diam neque euismod maur', 'fantasy', 'ogienikrew.png'),
(3, 'Pustynna Wlocznia', 'Petter V. Brett', 'Donec imperdiet iaculis neque, in consectetur eros luctus non. Donec cursus, dolor at consequat porta, lectus ligula ultricies magna, in consectetur ligula lorem ac massa. Sed in viverra sapien, vel vulputate dolor. Aliquam erat volutpat. Donec eu ne', 'fantasy', 'pustynna.png'),
(4, 'Silent Patient', 'Alex Michaelides', 'Donec id aliquet magna, eget maximus sapien. Maecenas faucibus, magna ac vestibulum placerat, eros tellus viverra augue, et rhoncus arcu sapien a justo. Aenean non erat nec libero iaculis faucibus id eu tellus. Sed et lacus elementum, sollicitudin te', 'Thriller', 'silent.png'),
(5, 'The Hidden Girls', 'Rebecca Whitney', 'Ut accumsan nulla nunc, et hendrerit purus laoreet a. Vivamus et pharetra metus.Ut accumsan nulla nunc, et hendrerit purus laoreet a. Vivamus et pharetra metus.', 'Thriller', 'girls.png'),
(6, 'Dark Hollows', 'Steve Frech', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Praesent blandit quam id malesuada feugiat. Nunc auctor lorem ligula, a feugiat arcu ullamcorper quis. Phasellus quis erat vehicula neque tempor porttitor id in augue. Sed imperdiet, urna ac tri', 'thriller', 'dark.png');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
