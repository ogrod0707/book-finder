-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 17 Lis 2021, 08:54
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
(6, 'Dark Hollows', 'Steve Frech', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Praesent blandit quam id malesuada feugiat. Nunc auctor lorem ligula, a feugiat arcu ullamcorper quis. Phasellus quis erat vehicula neque tempor porttitor id in augue. Sed imperdiet, urna ac tri', 'thriller', 'dark.png'),
(7, 'Pani jeziora', 'Andrzej Sapkowski', 'Curabitur sodales auctor nisl non auctor. In mattis porta augue, ultricies mattis elit auctor quis. Sed sollicitudin purus malesuada purus varius, consectetur mollis nisi auctor. Etiam cursus justo at consectetur tristique. Maecenas a sagittis diam. ', 'Fantasy', 'panijeziora.png'),
(10, 'Metro 2033', 'Dmitry Gluchovsky', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut sapien nec magna gravida fermentum. Vivamus id commodo augue. Aliquam iaculis, enim et dapibus porta, nulla lectus tempor quam, fringilla accumsan felis metus ac nisl. Vivamus vehicul', 'Fantasy', 'metro2033.jpg'),
(13, 'Metro 2035', 'Dmitry Gluchovsky', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus rutrum, lacus sit amet efficitur sagittis, dolor odio efficitur tellus, sed sollicitudin metus sem vel nisl. Nam id pulvinar est, ac rutrum sem. Morbi vel quam at massa lacinia consecte', 'Fantasy', 'metro2035.jpg'),
(14, 'Zwiadowcy\r\n', 'John Flanagan', 'Vestibulum non rutrum felis. Suspendisse tincidunt molestie lectus a ornare. Duis erat massa, molestie non sodales vitae, maximus ac arcu. Morbi consectetur libero vitae cursus elementum. Ut venenatis lobortis lectus, eget elementum felis. Donec ac j', 'Fantasy', 'zwiadowcy1.jpg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users_com`
--

CREATE TABLE `users_com` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_com` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `users_com`
--

INSERT INTO `users_com` (`user_id`, `user_name`, `user_com`) VALUES
(2, 'Krystian', 'Hejka'),
(3, 'Patryk', 'Holy moly'),
(4, 'Peter', 'I need to write something more than only 2 words so im typingggg'),
(5, 'Peter', 'I need to write something more than only 2 words so im typingggg'),
(6, 'Peter', 'I need to write something more than only 2 words so im typingggg'),
(7, 'Peter', 'I need to write something more than only 2 words so im typingggg'),
(8, 'Peter', 'I need to write something more than only 2 words so im typingggg'),
(11, 'Peter', 'Something...'),
(12, 'CJ', 'Whats up'),
(13, 'MGK', 'nibh, nec volutpat diam neque euismod maur'),
(14, 'MGK', 'nibh, nec volutpat diam neque euismod maur'),
(15, 'MGK', 'nibh, nec volutpat diam neque euismod maur'),
(16, 'MGK', 'nibh, nec volutpat diam neque euismod maur'),
(17, 'MGK', 'nibh, nec volutpat diam neque euismod maur'),
(18, 'MGK', 'nibh, nec volutpat diam neque euismod maur'),
(19, 'MGK', 'nibh, nec volutpat diam neque euismod maur'),
(20, 'MGK', 'nibh, nec volutpat diam neque euismod maur'),
(21, 'MGK', 'nibh, nec volutpat diam neque euismod maur'),
(22, 'MGK', 'nibh, nec volutpat diam neque euismod maur'),
(23, 'MGK', 'nibh, nec volutpat diam neque euismod maur'),
(24, 'MGK', 'nibh, nec volutpat diam neque euismod maur'),
(25, 'Mario', 'kLorem ipsum'),
(26, 'Mario', 'kLorem ipsum'),
(27, 'Krystian', 'jdasndjnsadsa'),
(28, 'Krystian', 'jdasndjnsadsa'),
(29, 'Krystian', 'jdasndjnsadsa'),
(30, 'Krystian', 'jdasndjnsadsa'),
(31, 'Krystian', 'jdasndjnsadsa'),
(32, 'Krystian', 'jdasndjnsadsa'),
(33, 'Krystian', 'jdasndjnsadsa'),
(34, 'Pio', 'Hej'),
(35, 'pl', 'pl'),
(36, 'pl', 'pl'),
(37, 'Piter', '1234'),
(38, 'Piter', '1234'),
(39, 'Piter', '1234'),
(40, 'dziala', 'dzialaaa'),
(41, 'oakdasdo', 'oaskdoasd\r\n'),
(42, 'Artur', 'dupa');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users_com`
--
ALTER TABLE `users_com`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT dla tabeli `users_com`
--
ALTER TABLE `users_com`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
