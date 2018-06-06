-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 06, 2018 at 04:47 PM
-- Server version: 10.0.34-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tetatort_svadbaapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `checklist`
--

CREATE TABLE `checklist` (
  `ID` int(11) NOT NULL,
  `TITLE` varchar(256) NOT NULL,
  `DESCRIPTION` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `checklist`
--

INSERT INTO `checklist` (`ID`, `TITLE`, `DESCRIPTION`) VALUES
(1, 'Pozivnice i zahvalnice', 'Prilikom organizacije vjenčanja važno je da na vrijeme počnete misliti i na goste te pozivnice koje im morate uručiti. Prilikom biranja dizajna imate nebrojene mogućnosti. Možete odabrati neku od već predloženih pozivnica koje nude tvrtke koje su specijalizirane za to, ali možete i razmišljati izvan standardnih okvira i odabrati nešto što će svim uzvanicima zauvijek ostati u sjecanju. Pozivnice za vjenčanje gostima najavljuju kakvo će biti vjenčanje na koje ste ih pozvali pa to svakako uzmite u obzir prije negoli naručite finalnu verziju pozivnica.  Primjerice, ako organizirate vjenčanje na plaži kraj mora, neka i pozivnice budu u morskom tonu – ukrašene motivima valova i morskih školjaka, a tekst može biti ispisan plavom bojom.\r\n\r\nSavjetujemo Vam da pozivnice osobno uručite svojim gostima, no ako pozivate goste iz drugih zemalja slanje poštom logičan je odabir.\r\n\r\nNišta manje bitne nisu ni zahvalnice kojima ćete zaokružiti priču vjenčanja. Neki ih mladenci već unaprijed tiskaju zajedno s pozivnicama, no ako želite da one budu osobnije, pozabavite se njima nakon svadbe pa svakome ponaosob zahvalite.'),
(2, 'Vjenčanica', 'Odabir vjenčanice najljepši je dio priprema za gotovo svaku mladenku. Kad birate haljinu, imajte na umu i lokaciju te atmosferu vjenčanja. Primjerice, ako se udajete samo kod matičara nakon čaga organizirate samo jednostavnu večeru, nema potrebe za blještavim i slojevitim krinolinama. Ako pak imate na umu raskošno vjenčanje u crkvi te slavlje u restoranu ili hotelu, odabir haljine neka slobodno bude u skladu s time. '),
(3, 'Šminka i frizura', 'Svoju šminku i frizuru svakako odaberite nekoliko tjedana prije vjenčanja, a nekoliko dana prije imate i pokusno šminkanje, odnosno pokusnu izradu frizure. Mnogi saloni u paketu za mladenke već imaju uključenu i cijenu izrade pokusne šminke i frizure. Ako sa svojom stilisticom i vizažisticom ranije dogovorite sve detalje, uštedjet ćete si puno nervoze i živaca na sam dan vjenčanja.'),
(4, 'Vjenčano prstenje', 'Zaručnički ste prsten vjerojatno dobili na dan kada Vas je budući suprug zaprosio, no prije sudbonosnog da potrebno je odabrati i vjenčano prstenje. To je prstenje koje ćete nositi vjerojatno cijeloga života pa se u njega isplati uložiti. S partnerom se dogovorite o odabiru bijelog ili žutog zlata ili pak srebra. U današnje je vrijeme najčešći odabir budućih mladenaca bijelo zlato, no imate li nedoumice oko odabira, obratite se našem stručnom timu koji ima već dugogodišnje iskustvo u radu s mladencima.'),
(5, 'Zaručnički tečaj', 'Ako ste se odlučili za vjenčanje u crkvi, morat ćete odraditi zaručnički tečaj. Prilikom rezervacije termina u crkvi svakako upitajte svećenika o svemu što je potrebno za pohađanje tečaja, a njegove termine uskladite sa svojima kako ne biste dolazili u neugodne situacije zbog nemogućnosti dolaska na tečaj.'),
(6, 'Tečaj plesa', 'Osim zaručničkog tečaja, mnogi mladenci odlučuju se i za tečaj plesa zbog nekoliko razloga. Na prvom je mjestu svakako nedovoljno plesačko umijeće, ali sve češći razlog zbog kojeg mladenci uzimaju sate plesa je i taj što za svoj prvi ples žele uvježbati posebnu koreografiju. Idealno vrijeme za pohađanje tečaja je 4-6 tjedana prije samog vjenčanja. Krenete li ranije, postoje velike šanse da do svadbe zaboravite korake.'),
(7, 'Odabir pjesme za prvi ples', 'Na gotovo svim vjenčanjima običaj je da novopečeni supružnici otvore plesni podij svojim prvim plesom, a da bi to bilo moguće, potrebno je s angažiranim glazbenicima dogovoriti glazbenu podlogu. Birajte plesne pjesme, pjesme koje opisuju upravo vas kao par, uvježbajte koreografiju, ali pripazite i na cipele te vjenčanicu. Naime, teške i duge vjenčanice onemogućavat će Vam slobodnije kretnje pa svakako instruktoru plesa spomenite kakvu vjenčanicu imate.'),
(8, 'Odabir glazbenika', 'Mladenci najčešće biraju bendove ili pak nešto rijeđe DJ-a, a prije bilo kakve odluke postavite glazbenicima nekoliko pitanja kako biste znali jesu li oni pravi odabir. Pitajte ih na koliko su vjenčanja do sada svirali, koliko pjesama imaju u svojem repertoaru,  primaju li glazbene želje uzvanika tijekom večere, koju vrstu glazbe sviraju, na koji način vode program svadbene večere,  puštaju li glazbenu podlogu za vrijeme pauze te mogu li odsvirati određene pjesme na vaš zahtjev.'),
(9, 'Odabir lokacije', 'Odabir lokacije za vjenčanje jedan je od najbitnijih zadataka jer se upravo na tome mjestu i odvija cijela priča. Razmislite o tome kakvu svadbu želite pa u skladu s njome i birajte lokacije. Rustikalni prostori bit će izvrsna kulisa za ljetna, opuštena vjenčanja, dok će skupocjeni hoteli biti jedno s elegantnim  i raskošnim vjenčanjima. Prije konačne odluke o najmu, svakako pogledajte različite lokacije te se raspitajte o mogućim dodatnim troškovima.'),
(10, 'Dekoracija', 'Dekoraciju pokušajte uskladiti s temom vjenčanja pa i godišnjim dobom u kojem se održava vaša svadba. Ako želite proći što jeftinije, ne morate angažirati dekoratera, nego se odvažite na samostalni projekt. Pogledajte što se u određenom godišnjem dobu nalazi oko Vas u prirodi i neka Vam posluži kao nadahnuće.'),
(11, 'Hrana', 'Ako ste svoje vjenčanje odlučili upriličiti u restoranu, raspitajte se hoće li vas hranom opskrbiti sam restoran ili pak vanjski materinog. Dobro je i probati hranu kako biste znali što ćete ponuditi svojim gostima pa s vlasnicima restorana dogovorite degustaciju. Dakako, ne zaboravite i na svadbenu tortu. Uvjerite se da će biti na sigurnom i hladnom mjestu prije posluživanja, posebno ako imate ljetno vjenčanje s visokim temperaturama.'),
(12, 'Fotograf', 'Tijekom godina ćete se zasigurno uvijek rado sjećati dana svog vjenčanja pa se pobrinite i da fotografije budu uistinu ono što želite. Ako imate prijateljicu ili poznanika kojem odlično ide fotografiranje, razmislite o tome da ih angažirate jer biste mogli uštedjeti poprilične svote novca. Namjeravate li angažirati profesionalnog fotografa, upitajte ih kakav paket snimanja i fotografiranja nude, koji je njihov uobičajeni slijed fotografiranja, imaju li spremne ideje za slučaj kiše, u kojim tehnikama rade, koliko se dugo bave ovim poslom, a svakako tražite i da vam pokažu svoje dosadašnje radove.');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `TITLE` varchar(50) NOT NULL,
  `PRICE` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`ID`, `USER_ID`, `TITLE`, `PRICE`) VALUES
(2, 1, 'daj', '500.00'),
(3, 2, 'kravata', '500.00'),
(4, 1, 'kravata', '120.99'),
(6, 2, 'Plavo', '1220.00'),
(7, 6, 'Sve', '5500.00'),
(9, 3, 'Nešto ', '5550.00'),
(10, 4, 'Prstenje', '4500.00'),
(12, 7, 'Zdravo', '488.95'),
(13, 1, 'autek', '3000.00');

-- --------------------------------------------------------

--
-- Table structure for table `family_side`
--

CREATE TABLE `family_side` (
  `ID` int(11) NOT NULL,
  `TITLE` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `family_side`
--

INSERT INTO `family_side` (`ID`, `TITLE`) VALUES
(1, 'Mladenka'),
(2, 'Mladoženja');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `ID` int(11) NOT NULL,
  `TITLE` varchar(10) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`ID`, `TITLE`) VALUES
(1, 'Mladenka'),
(2, 'Mladoženja');

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE `guests` (
  `ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `GUEST_FIRSTNAME` varchar(256) NOT NULL,
  `GUEST_LASTNAME` varchar(256) NOT NULL,
  `FAMILY_SIDE_ID` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `guests`
--

INSERT INTO `guests` (`ID`, `USER_ID`, `GUEST_FIRSTNAME`, `GUEST_LASTNAME`, `FAMILY_SIDE_ID`) VALUES
(1, 1, 'Marinko', 'Marić', 1),
(2, 1, 'Domagoj', 'Domagić', 1),
(3, 1, 'Ivo', 'Ivić', 1),
(4, 1, 'Pero', 'Perić', 2),
(5, 1, 'Vlatko', 'Vlatkić', 1),
(6, 1, 'Jura', 'Jurić', 2),
(7, 1, 'Petar', 'Marić', 1),
(8, 1, 'Ana', 'Marić', 1);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `ID` int(11) NOT NULL,
  `CHECKLIST_ID` int(11) NOT NULL,
  `PROVIDERS_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`ID`, `CHECKLIST_ID`, `PROVIDERS_ID`) VALUES
(1, 11, 1),
(2, 11, 2),
(4, 1, 3),
(5, 2, 4),
(6, 2, 5),
(7, 3, 6),
(8, 4, 7),
(9, 5, 8),
(10, 6, 9),
(11, 7, 10),
(12, 7, 11),
(13, 8, 12),
(14, 9, 13),
(15, 9, 14),
(16, 10, 15),
(17, 12, 16),
(18, 9, 17);

-- --------------------------------------------------------

--
-- Table structure for table `providers`
--

CREATE TABLE `providers` (
  `ID` int(11) NOT NULL,
  `TITLE` varchar(50) NOT NULL,
  `DESCRIPTION` text NOT NULL,
  `LINK` varchar(512) NOT NULL,
  `LOGO` varchar(512) DEFAULT 'img/providers/'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `providers`
--

INSERT INTO `providers` (`ID`, `TITLE`, `DESCRIPTION`, `LINK`, `LOGO`) VALUES
(1, 'Teta Tortuša', 'Teta Tortuša radi najukusnije torte i napravit će Vam tortu okusa i izgleda kakvog god želite za bilo koju Vašu priliku i događaj.', 'http://tetatortusa.com/', 'img/providers/teta-tortusa.png'),
(2, 'Mala kuća kolača', 'Mala Kuća Kolača vam nudi veliki izbor torti za svadbe.', 'http://www.malakucakolaca.com/torte-svadbe.html', 'img/providers/mala-kuca-kolaca.png'),
(3, 'Angelus Art', 'Sve za jedno posebno vjenčanje, pozivnice, zahvalnice, kutije za kolače, kitice, reveri, pozivnice u boci, pozivnice u epruveti, ekskluzivne pozivnice...', 'http://www.angelus-art.net/', 'img/providers/angelus-art.png'),
(4, 'Penelope', 'Ukoliko ste u potrazi za veličanstvenom vjenčanom haljinom posjetite naše salone Penelope vjenčanice.', 'http://www.penelope-vjencanice.hr/vjencanice/', 'img/providers/penelope.png'),
(5, 'Lipoto moja', 'Salon vjencanica Split Lipoto moja + Najam vjencanica', 'http://www.vjencanice-lipotomoja.hr/kolekcija.html', 'img/providers/lipoto-moja.png'),
(6, 'Nefertiti', 'Jednostavan, a opet glamurozan, svijetao i prozračan prostor, u Vama će pobuditi želju da budete baš poput Nefertiti ... Savršena!', 'http://www.nefertiti.hr/frizure-za-vjencanja/', 'img/providers/nefertiti.png'),
(7, 'ZAKS', 'Zlatno vjenčano prstenje u ZAKS prodajnim mjestima za ljubitelje vrhunskog zlatnog nakita. Burme za sva vremena.', 'http://www.zaks.hr/zlatarna/vjencano-prstenje', 'img/providers/zaks.png'),
(8, 'Pastoral obitelji', 'Prijava na zaručnički tečaj. Prijave na zaručnički tečaj do daljnjega se vrše kod župnika župe u kojoj se održava tečaj na kojem planirate sudjelovati.', 'http://obitelj.zg-nadbiskupija.hr/prijavnica', 'img/providers/pastoral.png'),
(9, 'Royale by Kruno', 'U ugodnoj  dvorani napravite svoje prve plesne korake, upoznajte zarazan plesni ritam, oraspoložite se i postanite pravim plesnim virtuozom.', 'https://www.royale-dance.eu/', 'img/providers/royale.png'),
(10, 'Udajem se', 'Savjeti za domaće pjesme za prvi ples', 'https://udajemse.hr/savjeti/prvi-ples/c69', 'img/providers/udajem-se.png'),
(11, 'The Knot', 'Savjeti za strane pjesme za prvi ples', 'https://www.theknot.com/content/classic-first-dance-songs', 'img/providers/the-knot.png'),
(12, 'Casino Royale', 'Djelujemo već 23 godine. Iza nas su mnogi nastupi na svadbama, gažama, zabavama i ostalim svećanostima, kako na struju tako i tamburaški.', 'https://www.casinobandzagreb.com/', 'img/providers/casino-royale-band.png'),
(13, 'Vilinske jame', 'Restoran \"Vilinske jame\" nudi Vam veliku zimsku akciju svadbenih menua uz vrhunsku uslugu našeg educiranog i ljubaznog osoblja koje Vam je na usluzi.', 'http://www.vilinske-jame.hr/', 'img/providers/vilinske-jame.png'),
(14, 'Divlje vode', 'U idiličnoj atmosferi netaknute prirode, na obroncima Samoborskog gorja, udaljeni od gradske vreve i buke, okruženi šumom, vodom i ugodnom klimom Vaš dan vjenčanja pamtit ćete zauvijek.', 'http://www.vjencanja-divljevode.com/', 'img/providers/divlje-vode.png'),
(15, 'Frezija', 'Cvječarka za svadbe - buketi, reveri, dekoracije sale, auta, crkve...', 'https://www.facebook.com/cvjecarna.frezija', 'img/providers/frezija.png'),
(16, 'Katerina Photography', 'Kao grafički dizajner fotografiju doživljavam i na jedan drugi način, uvijek u potrazi za onom pravom, koja dočarava i prikazuje baš ono što je klijent zamislio.', 'https://katerina.photography/', 'img/providers/katerina.png'),
(17, 'Marijin dvor, Lužnica', 'Kod nas možete organizirati svoje programe, nudimo mogućnost smještaja, korištenja prostorija dvorca, opreme i još mnogo toga.', 'http://www.luznica.com/', 'img/providers/luznica.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `FIRST_NAME` varchar(50) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `LAST_NAME` varchar(50) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `GENDER_ID` int(1) DEFAULT NULL,
  `EMAIL` varchar(50) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `PASSWORD` varchar(256) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `DATE_JOINED` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `WEDDING_DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `FIRST_NAME`, `LAST_NAME`, `GENDER_ID`, `EMAIL`, `PASSWORD`, `DATE_JOINED`, `WEDDING_DATE`) VALUES
(1, 'test', 'test', 1, 'test@test.com', '$2y$10$BpUDbGCOrRwXIGnBGDT4h.thGlxsEb./6m65.hfO3Uw6ANpnYkXBO', '2018-06-02 12:58:10', '2019-05-05'),
(2, 'Igor', 'Šolaja', 2, 'ramoneiggy@gmail.com', '$2y$10$pIj591qUy5qBtr29Jh5Xz.7enNCuJfLpijkGt740oG2Qpfc5qHaCm', '2018-06-02 21:49:59', '2018-04-28'),
(3, 'Ruža', 'Kalaica', 1, 'novitest@mail.com', '$2y$10$FFbcxoU548HSLtLuLUVNf.MVGq5oyT9ITHxha1g7j.o.bNp/up7pG', '2018-06-02 22:19:24', '2020-05-15'),
(4, 'test2', 'test2', 2, 'test2@test.com', '$2y$10$DkzHy9302Ur.2PIrrDC.Keyc3ZCJna9VQxYVuSZ9EIvATo4VxPsrO', '2018-06-05 23:57:17', '2019-12-12'),
(5, 'test1', 'test1', 1, 'test1@test.com', '$2y$10$1z07DVbyMnEwwXvSGtkR.ulUZXWpBrjdefS6b7xE/GakRM21OnqXK', '2018-06-06 00:51:41', '2018-06-18'),
(6, 'Toni', 'Štambuk ', 2, 'toni.stambuk@yahoo.com', '$2y$10$Abq2/ys3Wq0BmnvPIijPd.eW..0CjyM9ET32yBxaw3Nt65KCOA9Xu', '2018-06-06 07:28:56', '2018-06-30'),
(7, 'Test4', 'Test4', 1, 'test4@test.com', '$2y$10$P4tQaAmPFGplGHbpavwareLZ0.FbCGRfgcCIa.Hxgu62LcNkQTusW', '2018-06-06 14:02:36', '2018-06-29');

-- --------------------------------------------------------

--
-- Table structure for table `user_choice`
--

CREATE TABLE `user_choice` (
  `ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `CHECKLIST_ID` int(11) NOT NULL,
  `INFO` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_choice`
--

INSERT INTO `user_choice` (`ID`, `USER_ID`, `CHECKLIST_ID`, `INFO`) VALUES
(1, 1, 1, 'radi?bdbdn'),
(2, 1, 5, 'crkva 2'),
(3, 2, 1, 'i to radi? Affiliate '),
(4, 1, 2, 'a ovo?'),
(5, 2, 12, 'To? '),
(6, 4, 1, 'Pozivnica'),
(7, 6, 5, 'Crkva'),
(8, 4, 9, 'Zategnute looks '),
(9, 7, 4, 'Radi li sad? '),
(10, 1, 11, 'njam'),
(11, 1, 9, 'radi i to');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checklist`
--
ALTER TABLE `checklist`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `USER_ID` (`USER_ID`);

--
-- Indexes for table `family_side`
--
ALTER TABLE `family_side`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FAMILY_SIDE_ID` (`FAMILY_SIDE_ID`),
  ADD KEY `USER_ID` (`USER_ID`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CHECKLIST_ID` (`CHECKLIST_ID`),
  ADD KEY `PROVIDERS_ID` (`PROVIDERS_ID`);

--
-- Indexes for table `providers`
--
ALTER TABLE `providers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `GENDER` (`GENDER_ID`);

--
-- Indexes for table `user_choice`
--
ALTER TABLE `user_choice`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CHECKLIST_ID` (`CHECKLIST_ID`),
  ADD KEY `USER_ID` (`USER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checklist`
--
ALTER TABLE `checklist`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `family_side`
--
ALTER TABLE `family_side`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `guests`
--
ALTER TABLE `guests`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `providers`
--
ALTER TABLE `providers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user_choice`
--
ALTER TABLE `user_choice`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `expense`
--
ALTER TABLE `expense`
  ADD CONSTRAINT `expense_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `user` (`ID`);

--
-- Constraints for table `guests`
--
ALTER TABLE `guests`
  ADD CONSTRAINT `guests_ibfk_1` FOREIGN KEY (`FAMILY_SIDE_ID`) REFERENCES `family_side` (`ID`),
  ADD CONSTRAINT `guests_ibfk_2` FOREIGN KEY (`USER_ID`) REFERENCES `user` (`ID`);

--
-- Constraints for table `offers`
--
ALTER TABLE `offers`
  ADD CONSTRAINT `offers_ibfk_1` FOREIGN KEY (`CHECKLIST_ID`) REFERENCES `checklist` (`ID`),
  ADD CONSTRAINT `offers_ibfk_2` FOREIGN KEY (`PROVIDERS_ID`) REFERENCES `providers` (`ID`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`GENDER_ID`) REFERENCES `gender` (`ID`);

--
-- Constraints for table `user_choice`
--
ALTER TABLE `user_choice`
  ADD CONSTRAINT `user_choice_ibfk_1` FOREIGN KEY (`CHECKLIST_ID`) REFERENCES `checklist` (`ID`),
  ADD CONSTRAINT `user_choice_ibfk_2` FOREIGN KEY (`USER_ID`) REFERENCES `user` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
