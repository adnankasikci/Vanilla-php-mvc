-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 10 Oca 2024, 23:05:21
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `database`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `parola` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `parola`, `created_at`) VALUES
(1, 'AhmetYılmaz', 'ahmet.yilmaz@mail.com', 'ahm3t_y1lm@z_pass', '2024-01-09 23:04:40'),
(2, 'ElifKaya', 'elif.kaya@mail.com', 'elifk@ya_pass_2023', '2024-01-09 23:04:40'),
(3, 'MustafaDemir', 'mustafa.demir@mail.com', 'mdemir21_pass', '2024-01-09 23:04:40'),
(4, 'AyşeÇelik', 'ayse.celik@mail.com', 'a_celik2023@pass', '2024-01-09 23:04:40'),
(5, 'AliÖztürk', 'ali.ozturk@mail.com', 'ali_54ozturk_pass', '2024-01-09 23:04:40'),
(6, 'SedaAydın', 'seda.aydin@mail.com', 'sed@2023_aydin', '2024-01-09 23:04:40'),
(7, 'MehmetKoç', 'mehmet.koc@mail.com', 'mehmet@123koc_pass', '2024-01-09 23:04:40'),
(8, 'FatmaŞahin', 'fatma.sahin@mail.com', 'f@tmas@hin_pass_2023', '2024-01-09 23:04:40'),
(9, 'HüseyinArslan', 'huseyin.arslan@mail.com', 'arsl@n_94_pass', '2024-01-09 23:04:40'),
(10, 'ŞeymaYıldız', 'seyma.yildiz@mail.com', 'seyma_44yildiz@pass', '2024-01-09 23:04:40'),
(11, 'ÖmerTürk', 'omer.turk@mail.com', '0m3r_turk_pass', '2024-01-09 23:04:40'),
(12, 'CemileAkar', 'cemile.akar@mail.com', 'c3m1l3ak@r_pass', '2024-01-09 23:04:40'),
(13, 'HasanYıldırım', 'hasan.yildirim@mail.com', 'hasanyildirim@34_pass', '2024-01-09 23:04:40'),
(60, 'krosoft', 'krosoft@mail.com', 'kor123', '2024-01-10 20:28:18'),
(61, 'delevere', 'delevere@gmail.com', 'delevee123sd', '2024-01-10 20:28:59');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
