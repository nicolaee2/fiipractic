-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2020 at 06:33 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anunt`
--

-- --------------------------------------------------------

--
-- Table structure for table `anunt`
--

CREATE TABLE `anunt` (
  `id` int(11) NOT NULL,
  `titlu` varchar(255) NOT NULL,
  `descriere` text NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `pret` int(11) NOT NULL,
  `telefon` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `schimb` tinyint(4) NOT NULL DEFAULT 0,
  `negociabil` tinyint(4) NOT NULL DEFAULT 0,
  `judet` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anunt`
--

INSERT INTO `anunt` (`id`, `titlu`, `descriere`, `categorie`, `pret`, `telefon`, `img`, `schimb`, `negociabil`, `judet`, `user_id`, `created_at`) VALUES
(3, 'Vând peugeot 407 coupe', 'vând peugeot 407coupe\r\nATENTIE baie motor spartă\r\nacte bulgaria\r\npentru reparat sau dezmembrat\r\npentru o comanda de piese mai mare se poate si dezmembra0\r\nPREȚ FIXXX', 'Auto,moto si ambarcatiuni', 4978, '0744233098', '5eb02fec4998b1.98541920.png', 0, 1, 'Suceava', 2, '2020-05-04 15:06:55'),
(4, 'Casa de vanzare Visani IASI', 'Va propunem spre vanzare case la cheie situate in Visan.\r\nPret de pornire de la 84900 Euro cu TVA inclus.\r\n\r\nFiecare vilă are curte proprie, privată, cu suprafaţa de 700 mp, delimitată cu gard;\r\nDimensiunea locuinţei este de 148 mp suprafaţă desfaşurată + terasele si balcoanele aferente şi 110 mp utili + Pod util de cca 50 mp.\r\n\r\nLocuintele dispun de toate utilitatile;\r\nFinisajele de cea mai buna calitate;\r\nCT prin condensare,\r\nCalorifere din aluminiu / incalzire pardoseala;\r\nTamplarie 5cam cu trei foi de sticla termoizolante,\r\nGlafuri pentru geamuri din granit,\r\nTermosistem de 10 cm eps 80\r\nOferim buget consistent pentru alegerea obiectelor sanitare cat si pentru parchet, gresie, faianta, usi interioare, etc.\r\nLambriu din lemn masiv.\r\nTerasa acoperita cu acces direct din bucatarie.\r\n\r\nParter:\r\nHol + Casa scarii, baie, bucatarie, living si terasa;\r\n\r\nEtaj:\r\nHol, baie, 3 dormitoare si doua balcoane.\r\n\r\nPod Util 60 mp.\r\n\r\nPROPRIETAR, fara comision sau alte costuri suplimentare.', 'Imobiliare', 350000, '0744233098', '5eb0305b3fc949.73460519.png', 0, 1, 'Suceava', 2, '2020-05-04 15:10:19'),
(5, 'Huawei P Smart Z, Dual SIM, 64GB, 4G, Sapphire Blue sigilat', 'Tip telefon Smartphone\r\nSloturi SIM Dual SIM\r\nTip SIM Nano SIM\r\nSistem de operare Android\r\nVersiune sistem operare Android 9\r\nNumar nuclee 8\r\nModel procesor HiSilicon Kirin 710F\r\nFrecventa procesor 2.2 GHz\r\n1.7 GHz\r\nTehnologii 2G\r\n3G\r\n4G\r\nConectivitate Wi-Fi\r\nBluetooth\r\nNFC\r\nGPS\r\nSenzori Accelerometru\r\nGiroscop\r\nAmprenta\r\nBusola\r\nSenzor de proximitate', 'Electronice si electrocasnice', 700, '0744233098', '5eb030a9c3a495.63536695.png', 1, 1, 'Suceava', 2, '2020-05-04 15:11:37'),
(6, 'Presa Canario calitate la pret mic', 'Pui Presa Canario cu pedigree de Maxima Calitate! Fizic si Caracter! Din 5 Cuiburi separate! Garantam Tipicitatea rasei! Atitudine specifica rasei si Sanatatea! Doar pt cunoscatori! Linie de Lucru! Seven Sharky Dinasty Kennel, primul importator si crescator din tara, cea mai importanta canisa!, noi selectam si imperechem doar cainii f mari si cu caracter! astfel ii selectam genetic spre o linie tipica rasei de Lucru si paza! Puii vor avea toate vaccinele, deparazitarile, microcip, pasaport, pedigree fci si garantie, parintii puilor sunt la noi, se pot vedea! Se accepta probe de lucru si teste pt displazie! Pirate reganados, Fedra vinciguerra, Guanche Rucaden, Chia Reganados, Don Vinciguerra (Pacha), Fedra de los Cardones, Pirate x Luna Vinciguerra, Mad-Max &amp; Artemis Vinciguerra, Zen x Ucanca Baldios, Junior x Blacky', 'Animale de companie', 3000, '0744233098', '5eb031099778e3.58573816.png', 1, 1, 'Suceava', 2, '2020-05-04 15:13:13'),
(7, 'Atv Nou 3 viteze + marsalier semiautomat', 'ATV nou 3 viteze +marsalier semiautomat 125 cm3 OFERTA - Cadou Casca + Accesorii\r\nBonus in valoare : Casca, Ulei, Scule\r\nFIRMA DIN ROMANIA CARE LIVREAZA ATV- UL GATA MONTAT, LA CHEIE CU FACTURA!\r\nLA ACHIZITONARE,ATV-UL ESTE LIVRAT MONTAT SI GRESAT\r\n\r\nATV NOU PENTRU ADULTI SI COPII, IMPORT GERMANIA !\r\nATV-ul este nou cu garantie 1 an, roti de 8&quot;, pornire la cheie si telecomanda, senzor de impact, portabagaj fata/spate, suporta 120kg. Viteza limitata la 50km/h, capacitate rezervor 3,5L, consum de 1%.\r\n\r\nLivram oriunde in TARA prin curier rapid in 24/48 de ore !', 'Sport, timp liber, arta', 2500, '0744233098', '5eb032461595d1.69613514.png', 0, 1, 'Bistrita-Nasaud', 3, '2020-05-04 15:18:30'),
(8, 'Donez bichon maltez mini toy', 'Donez bichon maltez mini toy in varsta de 4 ani', 'Animale de companie', 0, '0744233098', '5eb033403607b3.89156620.png', 0, 0, 'Bistrita-Nasaud', 3, '2020-05-04 15:22:40'),
(9, 'Iveco Dayli 50c15/35c15/3,5T Mascott sprinter Fiat renault', 'Iveco daily recent adus Acte valabile Motor de 3.0 150 cp \r\n3.5 t din fabrica se conduce cu categoria B\r\nMasina arata ca in poze fara defect!\r\nMotorul merge foarte bine in parametri normali nu scoate fum, nu are sunete ciudate functioneaza inpecabil din toate punctele de vedere!!!\r\nVopsea originala 100%\r\nPrelate pe role in ambele părți\r\nDimensiuni spațiu de încărcare\r\nLungime  5.20m\r\nLatime 2.25m\r\nInaltime 2.25m\r\nDotari:\r\n-Geamuri electrice\r\n-Oglinzi electrice\r\n-Scaun pe perna de aer\r\n-Abs\r\n-Clima\r\n-Radio cd\r\nMai multe detali la telefon', 'Auto,moto si ambarcatiuni', 30000, '0744233098', '5eb0338b679305.19412358.png', 0, 1, 'Bistrita-Nasaud', 3, '2020-05-04 15:23:55'),
(10, 'Apple Pencil gen2 ca nou', 'Produs original Apple\r\nPencil seria 2\r\nCompatibil cu IPad pro 11” 12.9” gen3 si cele apărute anul acesta\r\nFolosit rareori\r\nProdusul este impecabil ca nou fără nici un defect\r\nTrimit și in țara prin curier cu verificare colet', 'Electronice si electrocasnice', 600, '0744233098', '5eb033f69c6ca5.34916824.png', 1, 1, 'Bistrita-Nasaud', 3, '2020-05-04 15:25:42'),
(11, 'Angajez sofer comunitate 3,5 T', 'Firma de transporturi, angajez sofer pe comunitate. Pachet salarial atractiv. Pentru detalii sunati la tel.: 730', 'Locuri de munca', 0, '0744233098', '', 0, 0, 'Caras-Severin', 4, '2020-05-04 15:29:15'),
(12, 'Inginer constructor', 'Angajam part time sau full time Inginer constructor.', 'Locuri de munca', 10000, '0744233098', '', 0, 0, 'Caras-Severin', 4, '2020-05-04 15:29:54'),
(13, 'Seif casa de bani', 'Seif-greutate- 450kg\r\nInaltime:100cm\r\nLatime:60cm\r\nAdancime:60cm\r\nIncuietoare electronica Sargent&amp;Greenleaf\r\nCifru mecanic La Gard\r\nCaseta interioara cu doua chei\r\nDoua polite', 'Casa si gradina', 7000, '0744233098', '5eb035470c2ce8.14044159.png', 0, 1, 'Caras-Severin', 4, '2020-05-04 15:31:19'),
(14, 'Masa de sufragerie', 'Masa de sufragerie din stejar\r\nLucrat manual', 'Casa si gradina', 700, '0744233098', '5eb035852934e8.40427871.png', 0, 0, 'Caras-Severin', 4, '2020-05-04 15:32:21'),
(15, 'Mese Biliard Bristol Dinning Wenghe.', 'Masa biliard Bristol Dinning(capacele superioare sunt dotare suplimentara),postav rosu,verde,albastru si rosu burgund.\r\nLivrare in toata Europa(contracost combustibilul masinii)\r\nStoc actualizat in permanenta.', 'Sport, timp liber, arta', 2000, '0744233098', '5eb0364751bf10.38823637.png', 0, 1, 'Iasi', 5, '2020-05-04 15:35:35'),
(16, 'Suport sac de box cu bară de tracțiuni', 'Suport sac de box cu bară de tracțiuni\r\nDimensiuni: H = 2100mm (reglabil până la 2300mm), talpa 1200mm/1200mm\r\nConfecţionat din rectangulară de 60mm/60mm şi 50mm/50mm, grosime 3mm,\r\nProdus din 2 bucăţi şi montaj ușor.\r\nSacul este pentru prezentare!\r\nCuloarea la alegere (alb, negru, gri si argintiu).\r\nGreutate suportată fara balans până la 100 kg fara contra greutati\r\nCu contra greutati rezista pana la 350\r\nGreutate totala suport sac : 50 kg.\r\nConfecționăm la comandă și alte aparate.\r\nPret 630 RON\r\nPret transport 100 lei in toata tara', 'Sport, timp liber, arta', 600, '0744233098', '5eb037c62e3622.51001779.png', 0, 1, 'Iasi', 5, '2020-05-04 15:41:58'),
(17, 'Bratara cu Simbol Masonic - Rock Style / Echer si Compas / Litera G', 'magazinmasoniconline.com va propune o selectie de bratari pentru frati si colectionari.\r\n\r\nBratarile sunt realizate din materiale de calitate si cu finisaj detaliat.\r\n\r\nPentru mai multe produse vizitati: http://www.magazinmasoniconline.com/38-bratari-', 'Moda si frumusete', 60, '0744233098', '5eb03a5407dc72.71674469.png', 0, 0, 'Alba', 6, '2020-05-04 15:52:52'),
(18, 'Vand ceas GUCCI YA125513 Rose Gold', 'Vand ceas lux Gucci nou cu factura si certificat grantie.\r\nEste placat cu aur si are trei diamante, geam safir glass\r\nA fost achizitionat cu 829 US$ + taxe vamale 450lei', 'Moda si frumusete', 3000, '0744233098', '5eb03aa5448483.18591139.png', 0, 1, 'Alba', 6, '2020-05-04 15:54:13'),
(19, 'Nike Outburst SE', 'Nike Outburst SE\r\nMasuri: 37.5\r\nProdus nou, cu eticheta si cutie.', 'Moda si frumusete', 400, '0744233098', '5eb03af5028ae5.71490496.png', 0, 0, 'Alba', 6, '2020-05-04 15:55:33'),
(20, 'topogan', 'Topoganul', 'Casa si gradina', 100, '0744233098', '5eb03b321ce234.12088340.png', 0, 0, 'Alba', 6, '2020-05-04 15:56:34'),
(21, '90.000km/2007', 'UNIC PROPRIETAR DE NOUA\r\n\r\nStare buna de functionare\r\nRadio Cd Blaupunkt\r\nCauciucuri de iarna\r\nKm absolut reali\r\nToate actele la zi.\r\nConsum 5-6%\r\nIdeala pentru oras sau naveta\r\nCosturi de intretinere minime\r\n\r\nMai multe detalii la telefon', 'Auto,moto si ambarcatiuni', 3000, '0744233098', '5eb03b6b6dea47.38377394.png', 0, 1, 'Alba', 6, '2020-05-04 15:57:31'),
(22, 'Rochie Elsa Rochita printesa Frozen de 4-5- 6, 7 ani, Model NOU 2020', 'Mai multe poze gasiti pe www.vreauieftin.ro\r\n\r\nMaterial de calitate, nu ca cele foarte ieftine ce pot zgaria / irita pielea.\r\n\r\nRochie ELSA din desenul animat Frozen:\r\nMaterial: Cotton+Tulle+Satin\r\nManeca lunga\r\nMarime (cf. producatorului):\r\n\r\nAm DOAR marimile de mai jos.\r\n\r\nMODEL 2020:\r\n- 4-5 ani;\r\n- 6 ani.\r\n- 7 ani.\r\n\r\nOPTIONAL CORONITA: +10 lei', 'Mama si copilul', 155, '0744233098', '5eb041fb6df1d2.76372025.png', 0, 0, 'Alba', 6, '2020-05-04 15:58:23');

-- --------------------------------------------------------

--
-- Table structure for table `mesaje`
--

CREATE TABLE `mesaje` (
  `id` int(11) NOT NULL,
  `postare` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mesaje`
--

INSERT INTO `mesaje` (`id`, `postare`, `user_id`, `post_id`, `created_at`) VALUES
(4, 'Din ce an ii?', 4, 9, '2020-05-04 15:28:01'),
(5, 'Cumparati cat ii cald!', 4, 14, '2020-05-04 15:33:08'),
(6, 'care-i salariul?', 5, 11, '2020-05-04 15:34:15'),
(7, 'frumos caine!', 5, 6, '2020-05-04 15:43:02'),
(8, 'Lasi la 500?', 6, 10, '2020-05-04 16:00:36'),
(9, 'Multumesc', 2, 6, '2020-05-04 16:01:28'),
(10, 'cat de uzat este?', 2, 16, '2020-05-04 16:03:02'),
(11, 'frumos', 6, 22, '2020-05-04 16:25:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `judet` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `judet`, `password`) VALUES
(2, 'Nicolae', 'Martinescu', 'martinescunicolaee3@gmail.com', 'Suceava', '$2y$10$OPO8VD9fjkrZ8SdBEnhwFOeDDfQ2VdA8HRvjTqcSwvoDuIInE8NOS'),
(3, 'Gabriel', 'Lazar', 'lazar@gmail.com', 'Bistrita-Nasaud', '$2y$10$8Jme7GJ9WAqWoYFkjfkVXe/Ehuq5tLuTF4bYUmAno2dzwhDVx4FJa'),
(4, 'Ionel', 'Banilean', 'banilean@gmail.com', 'Caras-Severin', '$2y$10$MXMJl.Z4YdOhs1j/DkogyOfdoUVHrGnj4HrHmVvMBoop6AFiV12y.'),
(5, 'Vlad', 'Sfarnaciuc', 'sfarnaciuc@gmail.com', 'Iasi', '$2y$10$9.VhydgKF/CIVRMwF8vgheMzCmuEAEhLwrScTTG02fS5FvixWBTWG'),
(6, 'Maria', 'Derevlean', 'derevlean@gmail.com', 'Alba', '$2y$10$W2WG/6fG/qsNItr/Olv6qeE7N81.GgdBXQ3RUftVhham8RsUk9aua'),
(7, 'Costel', 'Joltea', 'joltea@gmail.com', 'Cluj', '$2y$10$uzToGXl6ugEWaeNgQ4TCNOlZhSA43y/Fxs1bRM//LBrYWI/vmMspO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anunt`
--
ALTER TABLE `anunt`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `mesaje`
--
ALTER TABLE `mesaje`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anunt`
--
ALTER TABLE `anunt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `mesaje`
--
ALTER TABLE `mesaje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anunt`
--
ALTER TABLE `anunt`
  ADD CONSTRAINT `anunt_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mesaje`
--
ALTER TABLE `mesaje`
  ADD CONSTRAINT `mesaje_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `anunt` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mesaje_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
