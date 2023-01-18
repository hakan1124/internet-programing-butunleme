-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 16 Oca 2023, 09:19:21
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `adminpanel`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `aboutus`
--

CREATE TABLE `aboutus` (
  `aboutus_id` int(11) NOT NULL,
  `aboutus_img` varchar(100) NOT NULL,
  `aboutus_header` varchar(100) DEFAULT NULL,
  `aboutus_text` varchar(200) DEFAULT NULL,
  `aboutus_muted` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `aboutus`
--

INSERT INTO `aboutus` (`aboutus_id`, `aboutus_img`, `aboutus_header`, `aboutus_text`, `aboutus_muted`) VALUES
(1, 'assets/about/about1.png', 'GEZ GÖR ÖĞREN AİLESİ', 'aaaaa', ' '),
(2, 'assets/about/about2.png', '', 'Dil gönlü yüzdüren gemidir, toplumun da gönlü var; toplumun gönlünün adı da kültürdür.', '-Sigmund Freud'),
(3, 'assets/about/about3.png', '', 'Kültürün temel direği; bilmek, öğrenmek arzusu ve merakı değil; bu yolda sarf edilen büyük gayretlerdir.', '-İskender Pala');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `banner_img` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `banner`
--

INSERT INTO `banner` (`banner_id`, `banner_img`) VALUES
(1, 'assets/main/gezgorogren.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `banner_buttons`
--

CREATE TABLE `banner_buttons` (
  `button_id` int(11) NOT NULL,
  `button_text` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `banner_buttons`
--

INSERT INTO `banner_buttons` (`button_id`, `button_text`) VALUES
(1, 'YAKLAŞAN ETKİNLİKLERİMİZE GÖZ ATIN'),
(2, 'GEÇMİŞ ETKİNLİKLERİMİZE GÖZ ATIN');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `copyright`
--

CREATE TABLE `copyright` (
  `copyright_id` int(11) NOT NULL,
  `copyright_text` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `copyright`
--

INSERT INTO `copyright` (`copyright_id`, `copyright_text`) VALUES
(1, '© 2023 Copyright: elzemeth');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `footer`
--

CREATE TABLE `footer` (
  `footer_id` int(11) NOT NULL,
  `footer_header` varchar(45) NOT NULL,
  `footer_text` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `footer`
--

INSERT INTO `footer` (`footer_id`, `footer_header`, `footer_text`) VALUES
(1, 'GEZ GÖR ÖĞREN', 'Gez Gör Öğren Ailesi İle Birlikte Birçok Kültüre Tanıklık Edebilir,Tarihi Daha Kolay Öğrenebilirsiniz.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `footer_menu`
--

CREATE TABLE `footer_menu` (
  `footer_menu_id` int(11) NOT NULL,
  `footer_menu_header` varchar(100) NOT NULL,
  `footer_menu_first` varchar(100) NOT NULL,
  `footer_menu_second` varchar(100) NOT NULL,
  `footer_menu_third` varchar(100) NOT NULL,
  `footer_menu_fourth` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `footer_menu`
--

INSERT INTO `footer_menu` (`footer_menu_id`, `footer_menu_header`, `footer_menu_first`, `footer_menu_second`, `footer_menu_third`, `footer_menu_fourth`) VALUES
(1, 'SOSYAL MEDYA', ' Github', ' Instagram', ' Twitter', ' Facebook'),
(2, 'KISA YOLLAR', ' Ana Sayfa', ' Hakkımızda', ' Yaklaşan Etkinlikler', ' Geçmiş Etkinlikler'),
(3, 'İLETİŞİM', ' TÜRKİYE', ' elzemeth@github.com', ' +90 (xxx) xxx xx xx', ' +90 (xxx) xxx xx xx');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `kadi` char(50) NOT NULL,
  `parola` char(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `kadi`, `parola`) VALUES
(1, 'admin', '105a9a2d46f64e147097c986076d2164'),
(11, 'ali', '279ea13f5766743be7053dfef11c618e'),
(10, 'mahmut', '279ea13f5766743be7053dfef11c618e'),
(9, 'veli', '105a9a2d46f64e147097c986076d2164');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `nav_buttons`
--

CREATE TABLE `nav_buttons` (
  `button_id` int(11) NOT NULL,
  `button_text` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `nav_buttons`
--

INSERT INTO `nav_buttons` (`button_id`, `button_text`) VALUES
(1, 'Ana Sayfa'),
(2, 'Hakkımızda'),
(3, 'Etkinlikler'),
(4, 'Yaklaşan Etkinlikler'),
(5, 'Geçmiş Etkinlikler'),
(6, 'assets/insblack.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `newevent`
--

CREATE TABLE `newevent` (
  `newevent_id` int(11) NOT NULL,
  `newevent_photo` varchar(200) NOT NULL,
  `newevent_header` varchar(45) NOT NULL,
  `newevent_information` varchar(1000) NOT NULL,
  `newevent_date` varchar(100) NOT NULL,
  `newevent_plan` varchar(1000) NOT NULL,
  `newevent_travel` varchar(1000) NOT NULL,
  `newevent_contact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `newevent`
--

INSERT INTO `newevent` (`newevent_id`, `newevent_photo`, `newevent_header`, `newevent_information`, `newevent_date`, `newevent_plan`, `newevent_travel`, `newevent_contact`) VALUES
(1, 'assets/events/adventure.png', 'SAFARİ MACERASI ', 'BİLGİ', 'TARİH:11.04.2023', 'İstanbulda Sabah Kahvaltısı', '09.30 İstanbul 03.30 Kenya', '+90 (xxx) xxx xx xx');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `oldevent`
--

CREATE TABLE `oldevent` (
  `oldevent_id` int(11) NOT NULL,
  `oldevent_img` varchar(45) DEFAULT NULL,
  `oldevent_header` varchar(45) DEFAULT NULL,
  `oldevent_text` varchar(100) DEFAULT NULL,
  `oldevent_date` varchar(45) DEFAULT NULL,
  `oldevent_first_item` varchar(100) DEFAULT NULL,
  `oldevent_second_item` varchar(100) DEFAULT NULL,
  `oldevent_third_item` varchar(100) DEFAULT NULL,
  `oldevent_link` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `oldevent`
--

INSERT INTO `oldevent` (`oldevent_id`, `oldevent_img`, `oldevent_header`, `oldevent_text`, `oldevent_date`, `oldevent_first_item`, `oldevent_second_item`, `oldevent_third_item`, `oldevent_link`) VALUES
(1, 'assets/events/old/1.jpg', 'MISIR', 'Gezimiz', '19.07.2022', 'Kahire', 'İskenderiye', 'Gize', 'YORUMLAR'),
(2, 'assets/events/old/2.jpg', 'PARİS', 'Gezimiz', '11.07.2022', 'Eyfel Kulesi', 'Louvre Müzesi', 'Lüksemburg Bahçeleri', 'YORUMLAR'),
(3, 'assets/events/old/3.jpg', 'NORVEÇ', 'Gezimiz', '23.06.2022', 'Vigeland Park', 'Akershus Kalesi', 'Vigeland Müzesi', 'YORUMLAR');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personnels`
--

CREATE TABLE `personnels` (
  `personnels_id` int(11) NOT NULL,
  `personnels_img` varchar(250) NOT NULL,
  `personnels_header` varchar(45) NOT NULL,
  `personnels_age` varchar(45) NOT NULL,
  `personnels_hometown` varchar(45) NOT NULL,
  `personnels_text` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `personnels`
--

INSERT INTO `personnels` (`personnels_id`, `personnels_img`, `personnels_header`, `personnels_age`, `personnels_hometown`, `personnels_text`) VALUES
(1, 'assets/humans/1.jpg', 'Vanessa', '24', 'U.S.A', 'Hi! I\'m Vanessa. I\'m 24. I love the travel. That\'s my dreams job.'),
(2, 'assets/humans/2.jpg', 'Violet', '26', 'U.S.A', 'Helloo! I\'m Violet. I\'m 26. I love to learn different culture.'),
(3, 'assets/humans/3.jpg', 'Barry', '22', 'Deutschland', 'What\'s up guys. I\'m Barry. I\'m taveler and i love the travel.'),
(4, 'assets/humans/4.jpg', 'Soleil', '29', 'French', 'Bonjour. Je suis Soleil. C\'était mon rêve d\'être un voyageur et je vis mon rêve.'),
(5, 'assets/humans/5.jpg', 'Benjamin', '28', 'Greece', 'Geia. Eímai o Soleil. Ítan óneiró mou na gíno taxidiótis kai zo to óneiró mou.'),
(6, 'assets/humans/6.jpg', 'Millie', '27', 'Şili', 'Hola. Soy Millie. Estoy haciendo el trabajo de mis sueños. soy un viajero'),
(7, 'assets/humans/7.jpg', 'David', '22', 'U.S.A', 'Hello guys!. I\'m David. I\'m doing what i love at a young age.'),
(8, 'assets/humans/8.jpg', 'Maya', '29', 'Greece', 'Geia. Eímai i Mágia. Eímai taxidiotikós odigós. Agapó ti douleiá mou.'),
(9, 'assets/humans/9.jpg', 'Andri', '21', 'Indonesia', 'Halo. Saya andrew. Saya seorang pemandu wisata. Saya mencintai pekerjaan saya.'),
(10, 'assets/humans/10.jpg', 'Kaylee', '20', 'Ireland', 'Dia dhuit. Is mise Kaylee. Is treoraí taistil mé. Is breá liom mo phost.'),
(11, 'assets/humans/11.jpg', 'Pınar', '20', 'Turkey', 'Merhabalar. Ben Pınar. 20 yaşımda sevdiğim iş ile ilgileniyorum. Gezgin olmak çok güzel.'),
(12, 'assets/humans/12.jpg', 'Sebastian', '23', 'Norway', 'Hallo. Jeg er Sebastian. Jeg er en reiseguide. Jeg elsker jobben min.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personnels_show`
--

CREATE TABLE `personnels_show` (
  `personnels_text_id` int(11) NOT NULL,
  `personnels_text_header` varchar(45) NOT NULL,
  `personnels_text_text` varchar(100) NOT NULL,
  `personnels_text_slogan` varchar(100) NOT NULL,
  `personnels_text_tooltip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `personnels_show`
--

INSERT INTO `personnels_show` (`personnels_text_id`, `personnels_text_header`, `personnels_text_text`, `personnels_text_slogan`, `personnels_text_tooltip`) VALUES
(1, 'KADROMUZ', 'Tüm Kültürleri Kapsayan Rehberlerimiz', ' Bu Dünya Hepimizin!', ' Rehberlerimiz Hakkında Bilgi Almak İçin Fotoğrafların Üzerine Tıklayabilirsiniz!');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `search`
--

CREATE TABLE `search` (
  `search_id` int(11) NOT NULL,
  `search_button` varchar(45) NOT NULL,
  `search_text` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `search`
--

INSERT INTO `search` (`search_id`, `search_button`, `search_text`) VALUES
(1, 'ARA', 'ANAHTAR KELİME');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slide`
--

CREATE TABLE `slide` (
  `slide_id` int(11) NOT NULL,
  `slide_first_img` varchar(45) NOT NULL,
  `slide_first_header` varchar(45) DEFAULT NULL,
  `slide_first_text` varchar(45) DEFAULT NULL,
  `slide_first_link` varchar(45) DEFAULT NULL,
  `slide_second_img` varchar(45) NOT NULL,
  `slide_second_header` varchar(45) DEFAULT NULL,
  `slide_second_text` varchar(45) DEFAULT NULL,
  `slide_second_link` varchar(45) DEFAULT NULL,
  `slide_third_img` varchar(45) NOT NULL,
  `slide_third_header` varchar(45) DEFAULT NULL,
  `slide_third_text` varchar(45) DEFAULT NULL,
  `slide_third_link` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `slide`
--

INSERT INTO `slide` (`slide_id`, `slide_first_img`, `slide_first_header`, `slide_first_text`, `slide_first_link`, `slide_second_img`, `slide_second_header`, `slide_second_text`, `slide_second_link`, `slide_third_img`, `slide_third_header`, `slide_third_text`, `slide_third_link`) VALUES
(1, 'assets/events/elephant.jpg', 'SAFARİ', 'Harika Bir Atmosfer', 'ERKEN KAYIT İÇİN TIKLAYIN', 'assets/events/cheetah.jpg', 'SAFARİ', 'Birbirinden Farklı Tür', 'ERKEN KAYIT İÇİN TIKLAYIN', 'assets/events/tiger.jpg', 'SAFARİ', 'Güvenli Gözlem', 'ERKEN KAYIT İÇİN TIKLAYIN');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `whyus`
--

CREATE TABLE `whyus` (
  `whyus_id` int(11) NOT NULL,
  `whyus_header` varchar(45) NOT NULL,
  `whyus_text` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `whyus`
--

INSERT INTO `whyus` (`whyus_id`, `whyus_header`, `whyus_text`) VALUES
(1, 'CEBİNİZ İÇİN UYGUN', 'Uygun fiyatlarımız ile daha çok kültüre tanık olun!'),
(2, 'ÇEŞİTLİLİĞİMİZ', 'Farklı müzeler farklı rehberler ile size uygun olan turu bulun!'),
(3, 'DETAYLAR ÖNEMLİDİR', 'Tecrübeli rehberlerimiz ile daha ayrıntılı bilgi edinin!');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`aboutus_id`);

--
-- Tablo için indeksler `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Tablo için indeksler `banner_buttons`
--
ALTER TABLE `banner_buttons`
  ADD PRIMARY KEY (`button_id`);

--
-- Tablo için indeksler `copyright`
--
ALTER TABLE `copyright`
  ADD PRIMARY KEY (`copyright_id`);

--
-- Tablo için indeksler `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`footer_id`);

--
-- Tablo için indeksler `footer_menu`
--
ALTER TABLE `footer_menu`
  ADD PRIMARY KEY (`footer_menu_id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `nav_buttons`
--
ALTER TABLE `nav_buttons`
  ADD PRIMARY KEY (`button_id`);

--
-- Tablo için indeksler `newevent`
--
ALTER TABLE `newevent`
  ADD PRIMARY KEY (`newevent_id`);

--
-- Tablo için indeksler `oldevent`
--
ALTER TABLE `oldevent`
  ADD PRIMARY KEY (`oldevent_id`);

--
-- Tablo için indeksler `personnels`
--
ALTER TABLE `personnels`
  ADD PRIMARY KEY (`personnels_id`);

--
-- Tablo için indeksler `personnels_show`
--
ALTER TABLE `personnels_show`
  ADD PRIMARY KEY (`personnels_text_id`);

--
-- Tablo için indeksler `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`search_id`);

--
-- Tablo için indeksler `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`slide_id`);

--
-- Tablo için indeksler `whyus`
--
ALTER TABLE `whyus`
  ADD PRIMARY KEY (`whyus_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `aboutus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `banner_buttons`
--
ALTER TABLE `banner_buttons`
  MODIFY `button_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `copyright`
--
ALTER TABLE `copyright`
  MODIFY `copyright_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `footer`
--
ALTER TABLE `footer`
  MODIFY `footer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `footer_menu`
--
ALTER TABLE `footer_menu`
  MODIFY `footer_menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `nav_buttons`
--
ALTER TABLE `nav_buttons`
  MODIFY `button_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `newevent`
--
ALTER TABLE `newevent`
  MODIFY `newevent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `oldevent`
--
ALTER TABLE `oldevent`
  MODIFY `oldevent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `personnels`
--
ALTER TABLE `personnels`
  MODIFY `personnels_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `personnels_show`
--
ALTER TABLE `personnels_show`
  MODIFY `personnels_text_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `search`
--
ALTER TABLE `search`
  MODIFY `search_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `slide`
--
ALTER TABLE `slide`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `whyus`
--
ALTER TABLE `whyus`
  MODIFY `whyus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
