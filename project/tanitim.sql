-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 10 Oca 2022, 13:39:56
-- Sunucu sürümü: 5.7.31
-- PHP Sürümü: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `tanitim`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `footer`
--

DROP TABLE IF EXISTS `footer`;
CREATE TABLE IF NOT EXISTS `footer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `footer`
--

INSERT INTO `footer` (`id`, `mail`) VALUES
(1, 'ySasin.eyissbil@gmail.com'),
(2, 'yasin.eyissbil@gmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

DROP TABLE IF EXISTS `iletisim`;
CREATE TABLE IF NOT EXISTS `iletisim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(255) NOT NULL,
  `soyad` varchar(255) NOT NULL,
  `eposta` varchar(255) NOT NULL,
  `mesaj` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`id`, `ad`, `soyad`, `eposta`, `mesaj`) VALUES
(1, 'Yasin', 'EYIBIL', 'yasin.eyibil@gmail.com', 'deneme');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tatolye`
--

DROP TABLE IF EXISTS `tatolye`;
CREATE TABLE IF NOT EXISTS `tatolye` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bold_txt` varchar(255) NOT NULL,
  `txt` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `tatolye`
--

INSERT INTO `tatolye` (`id`, `bold_txt`, `txt`) VALUES
(1, 'Çocuklar tertemiz ve örselenmemiş güçlü yaratıcılıkları ve zenginlikleriyle bizlere devam etme gücü versin.', 'Ranch’in ikinci katında bulunan bölümde gerçekleştirilen, özellikle çocuklara yönelik sanat atölyeleri ve sergiler; alt kattaki objelerle bir araya geldiğinde tezatın ötesine geçerek, geçmişle gelecek arasında bir köprü kuruyor. Bu atölyelerde çocukların ürettiği işler de, Ranch\'de sergilenerek, “yıllanmış” eşyalarla “genç” üretimlerin buluşmasını sağlıyor.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tatolye_img`
--

DROP TABLE IF EXISTS `tatolye_img`;
CREATE TABLE IF NOT EXISTS `tatolye_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `href_url` varchar(255) NOT NULL,
  `img_url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `tatolye_img`
--

INSERT INTO `tatolye_img` (`id`, `href_url`, `img_url`) VALUES
(1, 'atolye2.jpg.webp', 'atolye2.jpg.webp'),
(2, 'atolye9.webp', 'atolye9.webp'),
(3, 'atolye10.webp', 'atolye10.webp'),
(4, 'atolye12.jpg', 'atolye12.jpg'),
(5, 'atolye7.webp', 'atolye7.webp'),
(6, 'atolye1.jpg.webp', 'atolye1.jpg.webp'),
(7, 'atolye5.webp', 'atolye5.webp'),
(8, 'atolye11.jpeg', 'atolye11.jpeg'),
(9, 'atolye4.webp', 'atolye4.webp'),
(10, 'atolye3.webp', 'atolye3.webp'),
(11, 'atolye6.webp', 'atolye6.webp'),
(12, 'atolye8.webp', 'atolye8.webp');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tdepo`
--

DROP TABLE IF EXISTS `tdepo`;
CREATE TABLE IF NOT EXISTS `tdepo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bold_txt` varchar(255) NOT NULL,
  `txt` varchar(1000) NOT NULL,
  `bold_txt2` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `tdepo`
--

INSERT INTO `tdepo` (`id`, `bold_txt`, `txt`, `bold_txt2`) VALUES
(1, 'Tarihe yolculuk.', 'Ranch’in Kadıköy’de bulunan ve randevu ile ziyaret edilebilen deposu, özellikle antikacılığa gönül vermiş mimarlar, tasarımcılar ve sanatseverlerin ziyaretine açık. Antika arabalar, makineler, tartılar, mobilyalar gibi büyük parçaların görülebildiği ve satın alınabildiği bu alan, tarihe bir yolculuk yapmak ve geçmişin estetiğini günümüze, kendi evine veya projelerine taşımak isteyenler için özellikle tasarlandı. Depomuzu ziyaret etmek için lütfen', 'bize ulaşın');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tdepo_img`
--

DROP TABLE IF EXISTS `tdepo_img`;
CREATE TABLE IF NOT EXISTS `tdepo_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `href_url` varchar(255) NOT NULL,
  `img_url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `tdepo_img`
--

INSERT INTO `tdepo_img` (`id`, `href_url`, `img_url`) VALUES
(1, 'depo1.webp', 'depo1.webp'),
(2, 'depo16.webp', 'depo16.webp'),
(3, 'depo15.webp', 'depo15.webp'),
(4, 'depo5.webp', 'depo5.webp'),
(6, 'depo9.webp', 'depo9.webp'),
(7, 'depo8.webp', 'depo8.webp'),
(8, 'depo22.webp', 'depo22.webp'),
(9, 'depo3.webp', 'depo3.webp'),
(10, 'depo10.webp', 'depo10.webp'),
(11, 'depo17.webp', 'depo17.webp'),
(12, 'depo19.webp', 'depo19.webp'),
(13, 'depo18.webp', 'depo18.webp'),
(14, 'depo11.webp', 'depo11.webp'),
(15, 'depo20.webp', 'depo20.webp'),
(16, 'depo24.webp', 'depo24.webp'),
(17, 'depo21.webp', 'depo21.webp'),
(18, 'depo23.webp', 'depo23.webp'),
(20, 'depo25.webp', 'depo25.webp'),
(21, 'depo4.webp', 'depo4.webp'),
(22, 'depo13.webp', 'depo13.webp'),
(23, 'depo26.webp', 'depo26.webp'),
(24, 'depo7.webp', 'depo7.webp'),
(26, 'depo14.webp', 'depo14.webp'),
(31, 'depo2.jpg', 'depo2.jpg'),
(35, 'depo6.webp', 'depo6.webp');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `thakkinda`
--

DROP TABLE IF EXISTS `thakkinda`;
CREATE TABLE IF NOT EXISTS `thakkinda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bold_txt` varchar(1000) NOT NULL,
  `txt` varchar(1000) NOT NULL,
  `bold_txt2` varchar(1000) NOT NULL,
  `txt2` varchar(1000) NOT NULL,
  `bold_txt3` varchar(1000) NOT NULL,
  `txt3` varchar(1000) NOT NULL,
  `bold_txt4` varchar(1000) NOT NULL,
  `txt4` varchar(1000) NOT NULL,
  `bold_txt5` varchar(1000) NOT NULL,
  `txt5` varchar(1000) NOT NULL,
  `bold_txt6` varchar(1000) NOT NULL,
  `txt6` varchar(1000) NOT NULL,
  `txt7` varchar(1000) NOT NULL,
  `bold_txt7` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `thakkinda`
--

INSERT INTO `thakkinda` (`id`, `bold_txt`, `txt`, `bold_txt2`, `txt2`, `bold_txt3`, `txt3`, `bold_txt4`, `txt4`, `bold_txt5`, `txt5`, `bold_txt6`, `txt6`, `txt7`, `bold_txt7`) VALUES
(1, '1916 yılı.', 'Zürih. Dünya; Büyük Savaş’ın karanlığı, buhranı, şokuyla boğuşurken, bir grup sanatçı ortaya çıktı; “Sanat öldü, yaşasın sanat!” dedi. Alışılagelmiş kuralları, disiplinleri karşısına alan, var olan kalıpları ve teknikleri reddeden; Avrupa’nın bitmek bilmeyen savaşlar yaratan kültür ve uygarlık anlayışına büyük bir cesaretle karşı koyan protest bir hareketin ilk kıvılcımıydı bu cümle.', '1900’lü yılların başı.', 'Beylerbeyi. Yakın zamanda çalışmaya başlayan Şirket-i Hayriye vapurlarıyla Beylerbeyi ticaret hayatı canlanmakta. Dünyada süren savaşlara inat, Beylerbeyi\'nde benzeri az görülen bir hoşgörü hüküm sürmekte. Ermeni, Rum, Yahudi ve Türk aileler iç içe yaşıyor, birbirine kapı komşusu mabetlerinde ibadet ediyor. Bugünkü adıyla', 'Şemsi Efendi Sokak', '\'ta örneğin, Camcı Faruk Amca’nın dükkanının karşısında 5 numarada Benjamin Amca; yanında balıkçı Askoroz var.', 'Bizse bugün, ayrıksı gözüken bu iki öyküyü birleştiren bir mekândayız. Dadaistlerin çok kültürlü, çocuksu heyecanlardan beslenen anlayışı, yıllardır içinde yaşattığı çok kültürlü, barışçıl, uluslararası anlayışı hala koruyan Beylerbeyi bize yuva oldu. Antique Ranch, eskinin estetiğini ve zarafetini, nostaljik bir hüzünde kaybolmadan bugüne taşıyan, antik objelerin ruhuyla beslediği mekanında modern sanat projeleri geliştiren özgün bir dünya yaratmak üzere hayata geçti.', 'Beylerbeyi\'nde, işte tam o sözünü ettiğimiz Camcı Faruk Amca’nın dükkanında, yani', 'Şemsi Efendi Sokak No:6’dayız.', 'Antique Ranch\'in alt katındaki antika dükkanında Yasin Eyibil\'in seneler içinde dünyanın her yerinde o çocuksu heyecanla ve özenle topladığı antika objeler yeni evlerinde yeni hayatlarına başlamayı bekliyor. Üst katta bulunan bölümde gerçekleştirilen, özellikle çocuklara yönelik sanat atölyeleri ve sergiler; alt kattaki objelerle bir araya geldiğinde tezatın ötesine geçerek,', 'geçmişle gelecek arasında bir köprü', 'kuruyor.', 'Hayat, Antique Ranch\'te farklı bir hızda akıyor. Dış dünyanın kargaşası, kaosu, kapının ardında kalıyor; günün kavgalarından uzak, sanatla ve tarihle iç içe bir küçük evren, nefes almak isteyenleri bekliyor.', 'Gelin, uğrayın, bu deneyimi birlikte yaşayalım.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tiletisim`
--

DROP TABLE IF EXISTS `tiletisim`;
CREATE TABLE IF NOT EXISTS `tiletisim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bold_txt` varchar(255) NOT NULL,
  `text` varchar(1000) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `mail` varchar(150) NOT NULL,
  `mail_link` varchar(150) NOT NULL,
  `workingh` varchar(150) NOT NULL,
  `bold_day` varchar(150) NOT NULL,
  `day_hours` varchar(150) NOT NULL,
  `off_day` varchar(150) NOT NULL,
  `socialmedia` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `tiletisim`
--

INSERT INTO `tiletisim` (`id`, `bold_txt`, `text`, `adress`, `tel`, `mail`, `mail_link`, `workingh`, `bold_day`, `day_hours`, `off_day`, `socialmedia`) VALUES
(1, 'Bize ulaşın.', 'Sanat atölyelerimiz hakkında bilgi almak, Kadıköy’daki depomuzu ziyaret etmek ve her tür sorunuz & iş birliği öneriniz için bizimle iletişime geçebilirsiniz.', 'Şemsi Efendi Sokak. No:6 Beylerbeyi, Üsküdar, İstanbul.', '0545 423 71 05', 'yasin.eyibil@gmail.com', 'yasin.eyibil@gmail.com', 'Çalışma Saatleri:', 'Pzt-Cts:', '10:30-17:00', 'Pazar günleri kapalıyız.', 'Sosyal Medya:	');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tmagaza`
--

DROP TABLE IF EXISTS `tmagaza`;
CREATE TABLE IF NOT EXISTS `tmagaza` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bold_txt` varchar(2000) NOT NULL,
  `txt` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `tmagaza`
--

INSERT INTO `tmagaza` (`id`, `bold_txt`, `txt`) VALUES
(1, '6 senenin birikimi.', 'Yasin Eyibil’in 6 senedir topladığı antikalar, Ranch’in alt katında satışta. Mağazada, şehrin havasına göre her ay değişen konseptiyle Yasin Eyibil\'in zengin antika koleksiyonundan titiz bir kürasyonla seçilmiş parçalar sergileniyor. Kimi zaman eski şapka kalıpları, patronlar, modeller, dikiş makineleri; kimi zaman eski kuzineler, çaydanlıklar, sobalar çıkabilir karşınıza. Bir seçkide daktilolar, kitaplar, yazı masaları, bir seçkide sinema makineleri, eski sinema salonlarından çıkmış koltuklar ve afişler görebilirsiniz.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tmagaza_img`
--

DROP TABLE IF EXISTS `tmagaza_img`;
CREATE TABLE IF NOT EXISTS `tmagaza_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `href_url` varchar(256) NOT NULL,
  `img_url` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `tmagaza_img`
--

INSERT INTO `tmagaza_img` (`id`, `href_url`, `img_url`) VALUES
(1, 'magaza1.jpg.webp', 'magaza1.jpg.webp'),
(2, 'magaza24.jpg.webp', 'magaza24.jpg.webp'),
(3, 'magaza19.jpg.webp', 'magaza19.jpg.webp'),
(4, 'magaza33.jpg.webp', 'magaza33.jpg.webp'),
(6, 'magaza27.jpg.webp', 'magaza27.jpg.webp'),
(7, 'magaza22.jpg.webp', 'magaza22.jpg.webp'),
(8, 'magaza18.jpg.webp', 'magaza18.jpg.webp'),
(9, 'magaza15.jpg.webp', 'magaza15.jpg.webp'),
(11, 'magaza3.jpg.webp', 'magaza3.jpg.webp'),
(12, 'magaza34.jpg.webp', 'magaza34.jpg.webp'),
(13, 'magaza7.jpg.webp', 'magaza7.jpg.webp'),
(14, 'magaza30.jpg.webp', 'magaza30.jpg.webp'),
(15, 'magaza32.jpg.webp', 'magaza32.jpg.webp'),
(16, 'magaza28.jpg.webp', 'magaza28.jpg.webp'),
(17, 'magaza36.jpg', 'magaza36.jpg'),
(18, 'magaza21.jpg.webp', 'magaza21.jpg.webp'),
(19, 'magaza4.jpg.webp', 'magaza4.jpg.webp'),
(20, 'magaza26.jpg.webp', 'magaza26.jpg.webp'),
(21, 'magaza31.jpg.webp', 'magaza31.jpg.webp'),
(22, 'magaza35.jpg.webp', 'magaza35.jpg.webp'),
(23, 'magaza14.jpg.webp', 'magaza14.jpg.webp'),
(24, 'magaza13.jpg.webp', 'magaza13.jpg.webp'),
(25, 'magaza12.jpg.webp', 'magaza12.jpg.webp'),
(26, 'magaza8.jpg.webp', 'magaza8.jpg.webp'),
(28, 'magaza6.jpg.webp', 'magaza6.jpg.webp'),
(29, 'magaza25.jpg.webp', 'magaza25.jpg.webp'),
(30, 'magaza20.jpg.webp', 'magaza20.jpg.webp'),
(31, 'magaza23.jpg.webp', 'magaza23.jpg.webp'),
(32, 'magaza11.jpg.webp', 'magaza11.jpg.webp'),
(34, 'magaza29.jpg.webp', 'magaza29.jpg.webp'),
(35, 'magaza17.jpg.webp', 'magaza17.jpg.webp'),
(36, 'magaza9.jpg.webp', 'magaza9.jpg.webp');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
