-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 10 Oca 2022, 13:40:12
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
-- Veritabanı: `magaza`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `anasayfa`
--

DROP TABLE IF EXISTS `anasayfa`;
CREATE TABLE IF NOT EXISTS `anasayfa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_url` varchar(255) NOT NULL,
  `btn_txt` varchar(255) NOT NULL,
  `btn_url` varchar(255) NOT NULL,
  `urun_img` varchar(255) NOT NULL,
  `urun_baslik` varchar(255) NOT NULL,
  `urun_fiyat` varchar(255) NOT NULL,
  `urun_link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `anasayfa`
--

INSERT INTO `anasayfa` (`id`, `img_url`, `btn_txt`, `btn_url`, `urun_img`, `urun_baslik`, `urun_fiyat`, `urun_link`) VALUES
(1, 'index-img-1.jpg', 'mutfak', 'mutfak.php', 'index-img-1-11.webp', 'Sıcak Çikolata Cezvesi', '3750', 'sicak-cikolata-cezve.php'),
(2, 'index-img-3.webp', 'obje', 'obje.php', 'index-img-1-12.webp', 'Ahşap Sebze Tartısı', '3000', 'ahsap-sebze-tartisi.php'),
(3, 'index-img-ipek1.jpg', 'ipek', 'ipek.php', 'index-img-1-1.webp.jpg', 'Kısa Kollu İpek Gömlek', '1350', 'kisa-kollu-ipek-gomlek.php'),
(4, 'index-img-1.webp', 'keten', 'keten.php', 'index-img-1-1.webp', 'Kandıra Keteni “Seyyah” Yastık 38x40cm', '275', 'seyyah-yastik38x40.php');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

DROP TABLE IF EXISTS `iletisim`;
CREATE TABLE IF NOT EXISTS `iletisim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) NOT NULL,
  `ust_txt` varchar(255) NOT NULL,
  `txt` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`id`, `baslik`, `ust_txt`, `txt`, `tel`, `email`, `email_url`) VALUES
(1, 'Bize Ulasın', 'Siparişlerinizle ilgili sorularınız veya aradığınız antika ürünlerle ilgili olarak bize ulaşabilirsiniz.', 'Şemsi Efendi Sokak. No:6 Beylerbeyi, Üsküdar, İstanbul.', '0545 423 71 05', 'yasin.eyibil@gmail.com', 'yasin.eyibil@gmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ipek`
--

DROP TABLE IF EXISTS `ipek`;
CREATE TABLE IF NOT EXISTS `ipek` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `detail` varchar(1000) NOT NULL,
  `price` varchar(255) NOT NULL,
  `img_url` varchar(255) NOT NULL,
  `link_url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ipek`
--

INSERT INTO `ipek` (`id`, `product_name`, `detail`, `price`, `img_url`, `link_url`) VALUES
(1, 'Ipek Kemer', 'Antakya’da 100 senedir aktif olarak kullanılan dokuma tezgahlarında üretilen saf ipeklerden dikiyoruz bu gömlekleri. Biz tasarlıyoruz, kumaşlar geçmişin izini de alıp geliyor, ortaya işte bu narin ürünler çıkıyor.', '400', 'ipek1.webp', 'ipek-kemer.php'),
(2, 'Kısa Kollu Ipek Gömlek', 'Antakya’da 100 senedir aktif olarak kullanılan dokuma tezgahlarında üretilen saf ipeklerden dikiyoruz bu gömlekleri. Biz tasarlıyoruz, kumaşlar geçmişin izini de alıp geliyor, ortaya işte bu narin ürünler çıkıyor.', '1350', 'ipek2.webp', 'kisa-kollu-ipek-gomlek.php'),
(3, 'Uzun Kollu Ipek Bluz', 'Antakya’da 100 senedir aktif olarak kullanılan dokuma tezgahlarında üretilen saf ipeklerden dikiyoruz bu gömlekleri. Biz tasarlıyoruz, kumaşlar geçmişin izini de alıp geliyor, ortaya işte bu narin ürünler çıkıyor.', '1450', 'ipek3.webp', 'uzun-kollu-ipek-bluz.php'),
(4, 'Ipek Elbise', 'Antakya’da 100 senedir aktif olarak kullanılan dokuma tezgahlarında üretilen saf ipeklerden dikiyoruz bu gömlekleri. Biz tasarlıyoruz, kumaşlar geçmişin izini de alıp geliyor, ortaya işte bu narin ürünler çıkıyor.', '2500', 'ipek4.webp', 'ipek-elbise.php'),
(5, 'Ipek Genis Kemer', 'Antakya’da 100 senedir aktif olarak kullanılan dokuma tezgahlarında üretilen saf ipeklerden dikiyoruz bu gömlekleri. Biz tasarlıyoruz, kumaşlar geçmişin izini de alıp geliyor, ortaya işte bu narin ürünler çıkıyor.', '450', 'ipek5.webp', 'ipek-genis-kemer.php'),
(6, 'Ipek Kimono', 'Antakya’da 100 senedir aktif olarak kullanılan dokuma tezgahlarında üretilen saf ipeklerden dikiyoruz bu gömlekleri. Biz tasarlıyoruz, kumaşlar geçmişin izini de alıp geliyor, ortaya işte bu narin ürünler çıkıyor.', '3500', 'ipek6.webp', 'ipek-kimono.php'),
(7, 'Ipek Kimono', 'Antakya’da 100 senedir aktif olarak kullanılan dokuma tezgahlarında üretilen saf ipeklerden dikiyoruz bu gömlekleri. Biz tasarlıyoruz, kumaşlar geçmişin izini de alıp geliyor, ortaya işte bu narin ürünler çıkıyor.', '4500', 'ipek7.webp', 'ipek-kimono-2.php');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `keten`
--

DROP TABLE IF EXISTS `keten`;
CREATE TABLE IF NOT EXISTS `keten` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `detail` varchar(1000) NOT NULL,
  `price` varchar(255) NOT NULL,
  `img_url` varchar(255) NOT NULL,
  `link_url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `keten`
--

INSERT INTO `keten` (`id`, `product_name`, `detail`, `price`, `img_url`, `link_url`) VALUES
(1, 'Kandıra Keteni “Seyyah” Yastık 38x40cm', 'Seyahat, edemediğimiz pandemi günlerinde, gidemediğiniz yerlere uzanalım istedik. El dokuması Kandıra bezi kumaşlara, kartlar tasarlayıp otel öyküleri anlattık; ortaya sınırlı sayıda üretilen “Seyyah” koleksiyonu çıktı.', '275', 'keten1.webp', 'seyyah-yastik38x40.php'),
(2, 'Kandıra Keteni “Seyyah” Yastık 80x40cm', 'Seyahat, edemediğimiz pandemi günlerinde, gidemediğiniz yerlere uzanalım istedik. El dokuması Kandıra bezi kumaşlara, kartlar tasarlayıp otel öyküleri anlattık; ortaya sınırlı sayıda üretilen “Seyyah” koleksiyonu çıktı.', '350', 'keten2.webp', 'seyyah-yastik80x40.php'),
(9, 'Kandıra Keten Yastık', 'Seyahat, edemediğimiz pandemi günlerinde, gidemediğiniz yerlere uzanalım istedik. El dokuması Kandıra bezi kumaşlara, kartlar tasarlayıp otel öyküleri anlattık; ortaya sınırlı sayıda üretilen “Seyyah” koleksiyonu çıktı.', '195', 'keten.jpg', 'kandira-keten.php');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

DROP TABLE IF EXISTS `kullanici`;
CREATE TABLE IF NOT EXISTS `kullanici` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(255) NOT NULL,
  `soyad` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `yetki` int(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`id`, `ad`, `soyad`, `mail`, `password`, `yetki`) VALUES
(1, 'Yasin', 'EYIBIL', 'yasin.eyibil@gmail.com', 'denemes', 1),
(2, 'burak', 'eyibil', 'burak.eyibil1@gmail.com', 'deneme', 1),
(22, 'admin', 'admin', 'admin@gmail.com', 'admin123', 1),
(20, 'kerem', 'gürsoy', 'kerem@gmail.com', 'kerem123', 0),
(21, 'Yasin', 'Eyibil', 'yasin@gmail.com', '123', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `magazailetisim`
--

DROP TABLE IF EXISTS `magazailetisim`;
CREATE TABLE IF NOT EXISTS `magazailetisim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isim` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `mesaj` varchar(360) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `magazailetisim`
--

INSERT INTO `magazailetisim` (`id`, `isim`, `mail`, `mesaj`) VALUES
(1, 'Yasin EYIBIL', 'yasin.eyibil@gmail.com', 'test'),
(11, 'kerem gürsoy', 'keremg@gmail.com', 'selamlar selamlar selamlar selamlar '),
(12, 'kerem gürsoy', 'keremg@gmail.com', 'selamlar selamlar selamlar selamlar '),
(10, 'kerem gürsoy', 'keremg@gmail.com', 'selamlar selamlar selamlar selamlar '),
(9, 'kerem gürsoy', 'keremg@gmail.com', 'selamlar selamlar selamlar selamlar '),
(13, 'burak', 'burake@gmail.com', 'sadmsodas'),
(14, 'burak', 'burake@gmail.com', 'sadmsodas'),
(15, 'burak', 'burake@gmail.com', 'sadmsodas'),
(16, 'burak', 'burake@gmail.com', 'sadmsodas'),
(17, 'burak', 'burake@gmail.com', 'sadmsodas'),
(18, 'Yasin EYIBIL', 'yasin.eyibil@gmail.com', 'test'),
(19, 'Yasin EYIBIL', 'yasin.eyibil@gmail.com', 'test'),
(20, 'kemal', 'kemal@gmail.com', 'denemes'),
(24, 'Yasin EYIBIL', 'yasin.eyibil@gmail.com', 'ASDSADSAD');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mutfakk`
--

DROP TABLE IF EXISTS `mutfakk`;
CREATE TABLE IF NOT EXISTS `mutfakk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `detail` varchar(1000) NOT NULL,
  `price` varchar(255) NOT NULL,
  `img_url` varchar(255) NOT NULL,
  `link_url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `mutfakk`
--

INSERT INTO `mutfakk` (`id`, `product_name`, `detail`, `price`, `img_url`, `link_url`) VALUES
(1, 'Christofle Balık Servis Tabağı', 'Christofle markalı, gümüş kaplama balık servis tabağı.', '2200', 'mutfak1.webp', 'christofle-balik.php'),
(2, 'Gümüş Kaplama Yumurta Servisi', 'Victoria döneminden kalma, gerçek bir zarafet timsali bir parça. İşçiliği, malzemesi, detaylarıyla enfes.', '5000', 'mutfak2.webp', 'gumus-yumurta-servis.php'),
(3, 'Kristal & Gümüş Kaplama Servis Seti', 'Özellikle kahvaltı servisine uygun, 4lü kristal set & gümüş kaplama tepsi takımı.', '4500', 'mutfak3.jpg', 'kristal-servis-set.php'),
(4, 'Sıcak Çikolata Cezvesi', 'Avrupa’da vaktiyle kullanılan meşhur sıcak çikolata pişirme cezvelerinden biri. Bir otelden çıkma. Gümüş kaplama, pek asil.', '3750', 'img1-1-900x1200.webp', 'sicak-cikolata-cezve.php'),
(5, 'Üçlü Gümüş Kaplama Servis Takımı', 'Renaud & J. Clermont Genève markalı Fransız servis takımı. Bir dönem özellikle lüks otellere ürettikleri özel parçalarla tanınan markadan günümüze kalan rüya gibi nadir parçalardan biri. Takım 2 tabak ve 1 sosluktan oluşmaktadır.', '7000', 'mutfak5.webp', 'uclu-gumus-servis-takim.php'),
(6, 'Gümüş Kaplama Çörek Isıtıcısı', 'Bir zamanların sofra adabını anımsatan zarif bir parça. İngiliz, yaklaşık 60 yaşlarında. Kahvaltı sofrasına koyup, içine çöreğinizi, ekmeğinizi koyup sıcak kalmalarını sağlayabilirsiniz. Dilerseniz açık şekilde servis tabağı olarak da kullanabilirsiniz.', '2500', 'mutfak6.webp', 'gumus-corek-isitici.php'),
(7, 'Gümüş Kaplama Servis Tabağı', 'Avrupa’da bir otelden çıktığını düşündüğümüz, 1950’li yıllardan üç katlı zarif meyve servisi tabağı.', '4200', 'mutfak7.jpg', 'gumus-servis-tabagi.php'),
(8, '12’li Keten Peçete Takım', 'Fransa’dan bir peçete takımı. Fransız mutfağının o bol soslu yemekleriyle kurulan kim bilir kaç sofrada kurtarıcı olmuş. Üzerindeki antika nakıştaki logonun zarafetini çok, çok seviyoruz.', '2500', 'mutfak8.webp', 'keten-pecete-12li.php'),
(9, '5’li Likör Kadehi Takımı', 'Kırmızı desenleri, zarif işlemeleriyle en yalın sofrayı bile bir şölen masasına çevirebilecek bir nadide kadeh seti. Fransız üretimi.', '500', 'mutfak9.webp', 'besli-likor-kadeh.php'),
(10, '5’li Şampanya Kadehi Takımı', 'Kırmızı desenleri, zarif işlemeleriyle en yalın sofrayı bile bir şölen masasına çevirebilecek bir nadide kadeh seti. Fransız üretimi.', '500', 'mutfak10.webp', 'besli-sampanya-kadeh.php'),
(11, '5’li Şarap Kadehi Takımı', 'Kırmızı desenleri, zarif işlemeleriyle en yalın sofrayı bile bir şölen masasına çevirebilecek bir nadide kadeh seti. Fransız üretimi.', '500', 'mutfak11.webp', 'besli-sarap-kadeh.php'),
(12, 'Baget Kesici', 'Bagetin anavatanından, Fransa’dan bir baget ekmek kesici; her şeyin henüz mekanikleşmediği bir çağdan, 40’lı yıllardan. Savaş görmüş, yılmamış, bugüne gelmiş. Hala kullanılabilir durumda, hala sapasağlam.', '3400', 'mutfak12.webp', 'baget-kesici.php');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `obje`
--

DROP TABLE IF EXISTS `obje`;
CREATE TABLE IF NOT EXISTS `obje` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `detail` varchar(1000) NOT NULL,
  `price` varchar(255) NOT NULL,
  `img_url` varchar(255) NOT NULL,
  `link_url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `obje`
--

INSERT INTO `obje` (`id`, `product_name`, `detail`, `price`, `img_url`, `link_url`) VALUES
(1, 'Ahşap Sebze Tartısı', 'Yaklaşık 100 yaşında, Fransız ahşap sebze tartısı.', '300', 'obje1.webp', 'ahsap-sebze-tartisi.php'),
(2, '10’lu Opera Dürbünü Seti', 'Bir zamanlar operalarda seyircilerin sahneyi daha iyi görmesi için kiralanan opera dürbünleri. Fransız ve Rus menşeili. Kadife perdeler, kabarık etekler, beyaz eldivenlerle dolu salonları hayal etmek için.', '8000', 'obje2.webp', 'onlu-opera-durbunu.php'),
(3, 'Ahşap Ayaklı Ayna', '“Aynadaki aksim, gölgem, bir de ben.” Aklımızda bu Cahit Sıtkı Tarancı dizeleri, bu aynanın güzelliğine saygı duruyoruz. Thonet tarzı, 1930lardan kalma, ayaklı bir konsol aynası. Güzel yaşamış, bizce çok da güzel yaşlanmış.', '1500', 'obje3.webp', 'ahsap-ayaklı-ayna.php'),
(4, 'Asansörlü Kısa Pirinç Şamdan', 'Bir dönem klasiği. Pirinç kaplama, asansörlü, nazik bir şamdan. Evinde bir romantik esinti arayanlara.', '450', 'obje4.webp', 'asansorlu-kisa-pirinc.php'),
(5, 'Asansörlü Uzun Pirinç Şamdan', 'Bir dönem klasiği. Pirinç kaplama, asansörlü, nazik bir şamdan. Evinde bir romantik esinti arayanlara.', '850', 'obje5.jpg', 'asansorlu-uzun-pirinc.php'),
(6, 'Baccarat Kristal İsimlik', 'Baccarat kristalinden 2 adet isimlik. Davet sofrasının zarif tamamlayıcısı; kişiye, kişiliğe gösterilen özenin ispatlayıcısı.', '1000', 'obje6.webp', 'baccarat-kristal-isimlik.php'),
(7, 'Christofle Kase', '1830’da Paris’te kurulmuş ünlü Christofle markalı kase. Gümüş kaplamanın mucidi sayılan bu prestijli markanın en özel ürünlerinden biri. Çok zarif, çok nadide.', '1600', 'obje7.webp', 'christofle-kase.php'),
(8, 'Christofle Şamdan', 'Christofle marka gümüş kaplama antika şamdan. 19.yy sonunda Avrupa’nın en sevilen markalarından biri olan Christofle’ın klasiklerinden, bir özel Fransız.', '1100', 'obje8.webp', 'christofle-samdan.php'),
(9, 'Christofle Tutacaklı Samdan', 'Christofle marka, gümüş kaplama, tutacaklı ve çıkarılabilir mum söndürücüsüyle benzerlerinden ayrışan özel bir tasarıma sahip, güzeller güzeli bir antika şamdan.', '2500', 'obje9.jpg', 'christofle-tutacakli-samdan.php'),
(10, 'Döküm Un Ölçü Küregi', '1950lerde, uçsuz bucaksız Amerika kırsalında yer alan binlerce çiftlikten hangisine girseniz karşılaşacağınız bir kült obje. Özellikle un ölçmek için kullanılan döküm kürek.', '900', 'obje10.webp', 'dokum-un-olcu-kuregi.php'),
(11, 'Fairbanks Döküm Terazi', 'Missouri’de 1824 ’te kurulan ve hala dünyanın en büyük terazi üreticilerinden biri olan Fairbanks marka antika terazinin bugüne dek kaç kilo meyve tarttığını bilmiyoruz. Ama hayal etmeyi seviyoruz.', '3000', 'obje11.webp', 'fairbanks-dokum-terazi.php'),
(12, 'Gümüs Kaplama Kase', 'Zarif kulpları, bakır içi, kibar formuyla 1900’lerin başından günümüze dek yaşamış, yaşamaya devam eden; hem şık, hem çok kullanışlı, asil bir Avrupalı.', '1200', 'obje12.webp', 'gumus-kaplama-kase.php');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `satinal`
--

DROP TABLE IF EXISTS `satinal`;
CREATE TABLE IF NOT EXISTS `satinal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `il` varchar(255) NOT NULL,
  `ilce` varchar(255) NOT NULL,
  `zcode` varchar(255) NOT NULL,
  `cardrdo` varchar(255) NOT NULL,
  `cardname` varchar(255) NOT NULL,
  `cardnumber` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `cvv` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `satinal`
--

INSERT INTO `satinal` (`id`, `name`, `sname`, `mail`, `address`, `il`, `ilce`, `zcode`, `cardrdo`, `cardname`, `cardnumber`, `month`, `year`, `cvv`) VALUES
(60, 'Burak', 'EYIBIL', 'kerem@gmail.com', 'deneme2', 'Çerkezköy3', 'Tekirdağ4', '59500', 'Banka Kartı', 'UMUT', '4564564654654654', '6', '2026', '156');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
