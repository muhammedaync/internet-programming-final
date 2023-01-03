-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 03 Oca 2023, 19:28:18
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ses`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sesveresimdeğiştirmek`
--

CREATE TABLE `sesveresimdeğiştirmek` (
  `ses_id` int(11) NOT NULL,
  `sesİSİM` varchar(50) NOT NULL,
  `sesBağlantıAdres` varchar(5000) NOT NULL,
  `resim` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Tablo döküm verisi `sesveresimdeğiştirmek`
--

INSERT INTO `sesveresimdeğiştirmek` (`ses_id`, `sesİSİM`, `sesBağlantıAdres`, `resim`) VALUES
(9, 'merhaba', 'https://playerservices.streamtheworld.com/api/livestream-redirect/SUPER_FM_SC?/;stream.mp3', 'upload/1672670531.png'),
(10, 'SERDAR', 'https://playerservices.streamtheworld.com/api/livestream-redirect/SUPER_FM_SC?/;stream.mp3', 'upload/1672670570.png'),
(11, 'a?k', 'https://radyo.radiosonline.net/files?uri=yayin.asymedya.com:8020/;&tkn=0JXtmZEhG29FG_BWBmcl9A&tms=1672710191', 'upload/1672670621.png'),
(12, 'MAHMUT', 'https://live.powerapp.com.tr/powerfm/mpeg/icecast.audio?/;stream.mp3', 'upload/1672670669.png'),
(13, 'POWER', 'https://live.powerapp.com.tr/powerfm/mpeg/icecast.audio?/;stream.mp3', 'upload/1672670802.jpg');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `sesveresimdeğiştirmek`
--
ALTER TABLE `sesveresimdeğiştirmek`
  ADD PRIMARY KEY (`ses_id`),
  ADD UNIQUE KEY `ses_id` (`ses_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `sesveresimdeğiştirmek`
--
ALTER TABLE `sesveresimdeğiştirmek`
  MODIFY `ses_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
