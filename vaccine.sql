-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 29, 2021 at 02:41 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaccine`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_work_id` int(11) NOT NULL,
  `time_work_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `employee_id`, `date_work_id`, `time_work_id`) VALUES
(2, 'em1', 2, 3),
(4, 'em2', 2, 3),
(6, 'em3', 4, 17),
(7, 'em4', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `date_work`
--

CREATE TABLE `date_work` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `date_work`
--

INSERT INTO `date_work` (`id`, `date`) VALUES
(2, '2021-06-04'),
(4, '2021-06-05');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) DEFAULT NULL,
  `employee_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `time_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `employee_id`, `name`, `phone`, `email`, `time_update`) VALUES
(1, 'em1', 'Isaiah Delgado', '0844857195', 'Nulla.eu.neque@euelit.ca', '2021-05-29 05:01:36'),
(10, 'em10', 'Erasmus Chambers', '0847555245', 'nec@pharetraQuisque.net', '2021-05-29 05:01:36'),
(100, 'em100', 'Timothy Bush', '0873985447', 'posuere@sociisnatoquepenatibus.com', '2021-05-29 05:01:36'),
(11, 'em11', 'Hedley Sharp', '0857772688', 'Curabitur@Proinmi.org', '2021-05-29 05:01:36'),
(12, 'em12', 'Rooney Mullins', '0810635750', 'dolor.Donec.fringilla@pedenec.ca', '2021-05-29 05:01:36'),
(13, 'em13', 'Thaddeus David', '0873961523', 'rhoncus.id@Sedetlibero.net', '2021-05-29 05:01:36'),
(14, 'em14', 'Cole Pollard', '0829777859', 'imperdiet.ullamcorper@utpellentesqueeget.edu', '2021-05-29 05:01:36'),
(15, 'em15', 'Colton Bell', '0816583329', 'ullamcorper.nisl@intempus.edu', '2021-05-29 05:01:36'),
(16, 'em16', 'Samson Morton', '0835047811', 'sagittis.felis@malesuada.co.uk', '2021-05-29 05:01:36'),
(17, 'em17', 'Caleb Collier', '0885022391', 'lacus@miAliquam.org', '2021-05-29 05:01:36'),
(18, 'em18', 'Quentin Lewis', '0883011259', 'eget.massa.Suspendisse@pharetranibhAliquam.org', '2021-05-29 05:01:36'),
(19, 'em19', 'Hall Gates', '0818805451', 'pretium@Namac.net', '2021-05-29 05:01:36'),
(2, 'em2', 'Chester Skinner', '0845968962', 'Sed.neque@rutrumloremac.co.uk', '2021-05-29 05:01:36'),
(20, 'em20', 'Merritt Lloyd', '0846936387', 'tincidunt.aliquam@ad.com', '2021-05-29 05:01:36'),
(21, 'em21', 'Barrett Kirk', '0853599464', 'lectus@sedsapien.ca', '2021-05-29 05:01:36'),
(22, 'em22', 'Salvador Armstrong', '0890346356', 'ultrices@enimmitempor.com', '2021-05-29 05:01:36'),
(23, 'em23', 'Byron Douglas', '0895732433', 'gravida@nonegestas.org', '2021-05-29 05:01:36'),
(24, 'em24', 'Ignatius Fitzpatrick', '0864136766', 'faucibus.Morbi@blanditmattis.co.uk', '2021-05-29 05:01:36'),
(25, 'em25', 'Jermaine Harrison', '0825066891', 'est.arcu.ac@quis.org', '2021-05-29 05:01:36'),
(26, 'em26', 'Guy Lancaster', '0820312375', 'Sed@nibhDonecest.co.uk', '2021-05-29 05:01:36'),
(27, 'em27', 'Colby Ayers', '0873920694', 'quis@metusAliquamerat.co.uk', '2021-05-29 05:01:36'),
(28, 'em28', 'Thor Cox', '0836878062', 'cursus.Integer.mollis@penatibusetmagnis.ca', '2021-05-29 05:01:36'),
(29, 'em29', 'Zane Vazquez', '0812305047', 'volutpat.Nulla@aliquetdiamSed.net', '2021-05-29 05:01:36'),
(3, 'em3', 'Justin Blanchard', '0874864204', 'tellus.Suspendisse@lorem.net', '2021-05-29 05:01:36'),
(30, 'em30', 'Palmer Barnes', '0812059012', 'gravida@eget.ca', '2021-05-29 05:01:36'),
(31, 'em31', 'Brennan Doyle', '0826102790', 'neque.venenatis@liberonecligula.net', '2021-05-29 05:01:36'),
(32, 'em32', 'Jackson Sellers', '0869350976', 'Sed@ac.com', '2021-05-29 05:01:36'),
(33, 'em33', 'Upton Farley', '0868728031', 'molestie.Sed.id@Etiam.co.uk', '2021-05-29 05:01:36'),
(34, 'em34', 'Shad Fitzpatrick', '0848795245', 'Aliquam.auctor@Quisquelibero.co.uk', '2021-05-29 05:01:36'),
(35, 'em35', 'Joshua Ayala', '0860765735', 'tempor.est@ornare.org', '2021-05-29 05:01:36'),
(36, 'em36', 'Herman Tanner', '0846075399', 'arcu@pede.ca', '2021-05-29 05:01:36'),
(37, 'em37', 'Jason Howe', '0820098263', 'neque.vitae.semper@libero.org', '2021-05-29 05:01:36'),
(38, 'em38', 'Rafael Dillon', '0884434618', 'interdum.enim.non@pellentesque.com', '2021-05-29 05:01:36'),
(39, 'em39', 'Daniel Whitfield', '0835259430', 'Nunc@Integeraliquamadipiscing.ca', '2021-05-29 05:01:36'),
(4, 'em4', 'Francis Goff', '0850672439', 'mollis@nascetur.edu', '2021-05-29 05:01:36'),
(40, 'em40', 'Xavier Sampson', '0850390631', 'volutpat.nunc.sit@malesuadaaugue.ca', '2021-05-29 05:01:36'),
(41, 'em41', 'Ryan Reeves', '0836906838', 'interdum@pedesagittis.net', '2021-05-29 05:01:36'),
(42, 'em42', 'Armand Rodriguez', '0860171016', 'mattis.semper.dui@lacusUt.ca', '2021-05-29 05:01:36'),
(43, 'em43', 'Garrison Sullivan', '0884740094', 'nunc.interdum.feugiat@egestas.co.uk', '2021-05-29 05:01:36'),
(44, 'em44', 'Jason Mcmahon', '0872917577', 'Donec.sollicitudin@egestas.org', '2021-05-29 05:01:36'),
(45, 'em45', 'Wing Adams', '0832415954', 'tincidunt.adipiscing@arcu.net', '2021-05-29 05:01:36'),
(46, 'em46', 'Tad Lamb', '0850905548', 'blandit.at.nisi@Donectempuslorem.co.uk', '2021-05-29 05:01:36'),
(47, 'em47', 'Patrick Robertson', '0824084073', 'tempor@loremacrisus.com', '2021-05-29 05:01:36'),
(48, 'em48', 'Dexter Mann', '0889090436', 'Suspendisse@luctus.ca', '2021-05-29 05:01:36'),
(49, 'em49', 'Grady Hopkins', '0843219193', 'Vestibulum.accumsan@amet.edu', '2021-05-29 05:01:36'),
(5, 'em5', 'Oleg Perkins', '0866433792', 'sagittis.Duis.gravida@purusDuis.com', '2021-05-29 05:01:36'),
(50, 'em50', 'Amos Hall', '0873937518', 'Vivamus@maurisInteger.com', '2021-05-29 05:01:36'),
(51, 'em51', 'Jonas Sims', '0834994253', 'sapien@dictum.edu', '2021-05-29 05:01:36'),
(52, 'em52', 'Steven Blackburn', '0861428581', 'convallis.dolor.Quisque@duilectus.net', '2021-05-29 05:01:36'),
(53, 'em53', 'Keane Bush', '0802470232', 'lectus.sit.amet@consectetueradipiscing.co.uk', '2021-05-29 05:01:36'),
(54, 'em54', 'Curran Christian', '0868236137', 'metus.eu.erat@etlacinia.com', '2021-05-29 05:01:36'),
(55, 'em55', 'Nigel Chang', '0851914905', 'ipsum.leo@ipsum.net', '2021-05-29 05:01:36'),
(56, 'em56', 'Chaney Conway', '0890648004', 'faucibus@atortor.ca', '2021-05-29 05:01:36'),
(57, 'em57', 'Nissim Koch', '0838862263', 'Praesent.luctus@lectusasollicitudin.com', '2021-05-29 05:01:36'),
(58, 'em58', 'Jasper Carter', '0879128745', 'posuere.at@aliquetPhasellusfermentum.net', '2021-05-29 05:01:36'),
(59, 'em59', 'Andrew Bonner', '0807713259', 'eros.Nam@dolornonummyac.edu', '2021-05-29 05:01:36'),
(6, 'em6', 'Reece Yates', '0881957403', 'lorem@ornare.net', '2021-05-29 05:01:36'),
(60, 'em60', 'Hop Cobb', '0857898820', 'quis@est.co.uk', '2021-05-29 05:01:36'),
(61, 'em61', 'Wang Parrish', '0852519246', 'Proin.velit.Sed@magnisdisparturient.ca', '2021-05-29 05:01:36'),
(62, 'em62', 'Ezekiel Campbell', '0882225970', 'pellentesque.massa.lobortis@necenim.com', '2021-05-29 05:01:36'),
(63, 'em63', 'Dane Crane', '0864885050', 'nec.diam.Duis@ultricies.edu', '2021-05-29 05:01:36'),
(64, 'em64', 'Jelani Horton', '0827966471', 'Maecenas.iaculis.aliquet@Crasvulputatevelit.co.uk', '2021-05-29 05:01:36'),
(65, 'em65', 'Kieran Parker', '0897433434', 'ultrices@bibendum.edu', '2021-05-29 05:01:36'),
(66, 'em66', 'Barrett Murphy', '0821920954', 'vulputate@In.com', '2021-05-29 05:01:36'),
(67, 'em67', 'Octavius Levine', '0827756120', 'Quisque.ornare.tortor@arcuSed.net', '2021-05-29 05:01:36'),
(68, 'em68', 'Bert Kent', '0832709615', 'at.iaculis@Quisqueimperdiet.net', '2021-05-29 05:01:36'),
(69, 'em69', 'Palmer Pacheco', '0808904750', 'metus.urna@ornare.edu', '2021-05-29 05:01:36'),
(7, 'em7', 'Zeus Park', '0889646243', 'Curabitur@laoreet.ca', '2021-05-29 05:01:36'),
(70, 'em70', 'Dylan Dale', '0851096764', 'odio.sagittis.semper@iaculis.com', '2021-05-29 05:01:36'),
(71, 'em71', 'Raphael Cochran', '0848522652', 'pellentesque.a@tristiquepellentesquetellus.com', '2021-05-29 05:01:36'),
(72, 'em72', 'Thaddeus Miles', '0886006135', 'vel.arcu.eu@utlacus.ca', '2021-05-29 05:01:36'),
(73, 'em73', 'Brennan Barrett', '0895115181', 'varius.orci@euismodurnaNullam.edu', '2021-05-29 05:01:36'),
(74, 'em74', 'Zeph Robinson', '0828219330', 'elit@lobortis.co.uk', '2021-05-29 05:01:36'),
(75, 'em75', 'Dalton Castillo', '0826573575', 'tempor.lorem@adipiscinglobortisrisus.net', '2021-05-29 05:01:36'),
(76, 'em76', 'Rigel Lloyd', '0873616456', 'est@pretiumaliquet.ca', '2021-05-29 05:01:36'),
(77, 'em77', 'Seth Goff', '0874626929', 'risus@purussapien.ca', '2021-05-29 05:01:36'),
(78, 'em78', 'Nasim Reeves', '0835555555', 'massa.Mauris.vestibulum@sagittis.co.uk', '2021-05-29 05:01:36'),
(79, 'em79', 'Thaddeus Guerra', '0834117592', 'dictum@tellusfaucibus.org', '2021-05-29 05:01:36'),
(8, 'em8', 'Hamilton Savage', '0858490569', 'purus.Duis@cubiliaCuraeDonec.co.uk', '2021-05-29 05:01:36'),
(80, 'em80', 'Jakeem Rosales', '0800284555', 'vehicula.aliquet@sitamet.com', '2021-05-29 05:01:36'),
(81, 'em81', 'Wing Church', '0811535226', 'mattis.Cras.eget@sitamet.net', '2021-05-29 05:01:36'),
(82, 'em82', 'Colin Irwin', '0856368718', 'pretium.neque.Morbi@lobortisClass.net', '2021-05-29 05:01:36'),
(83, 'em83', 'Tate Mcleod', '0826276109', 'parturient.montes.nascetur@ornareelitelit.com', '2021-05-29 05:01:36'),
(84, 'em84', 'Ferris Tillman', '0869017919', 'ornare.egestas@egestasFuscealiquet.net', '2021-05-29 05:01:36'),
(85, 'em85', 'Magee Mercado', '0865431661', 'quis.diam.luctus@facilisis.ca', '2021-05-29 05:01:36'),
(86, 'em86', 'Troy Bowers', '0829823984', 'sapien.cursus.in@mi.co.uk', '2021-05-29 05:01:36'),
(87, 'em87', 'Rogan Moss', '0807717874', 'sollicitudin.orci@euismod.ca', '2021-05-29 05:01:36'),
(88, 'em88', 'Jared Peck', '0840467972', 'id@orci.edu', '2021-05-29 05:01:36'),
(89, 'em89', 'Kibo Stout', '0878074668', 'lorem.tristique@lorem.ca', '2021-05-29 05:01:36'),
(9, 'em9', 'Ciaran Cole', '0870760623', 'massa@elit.co.uk', '2021-05-29 05:01:36'),
(90, 'em90', 'Rajah Robles', '0823082899', 'felis.Nulla.tempor@urnaNullamlobortis.com', '2021-05-29 05:01:36'),
(91, 'em91', 'Wang Richardson', '0847584233', 'ultricies.ornare@fermentumvelmauris.co.uk', '2021-05-29 05:01:36'),
(92, 'em92', 'Reed Martin', '0828290445', 'dui.lectus@parturientmontes.com', '2021-05-29 05:01:36'),
(93, 'em93', 'Neville Sears', '0823398676', 'risus.odio.auctor@inhendrerit.ca', '2021-05-29 05:01:36'),
(94, 'em94', 'Marshall Mayo', '0816861908', 'Lorem.ipsum@pretiumet.org', '2021-05-29 05:01:36'),
(95, 'em95', 'Bradley Griffith', '0862029823', 'dictum.ultricies@luctusCurabituregestas.net', '2021-05-29 05:01:36'),
(96, 'em96', 'Mark Pittman', '0847197589', 'vel.arcu.eu@nuncac.ca', '2021-05-29 05:01:36'),
(97, 'em97', 'Henry Marsh', '0819554897', 'sit.amet.ornare@nisimagnased.net', '2021-05-29 05:01:36'),
(98, 'em98', 'Devin Bernard', '0815460541', 'amet@aliquam.ca', '2021-05-29 05:01:36'),
(99, 'em99', 'Murphy Keller', '0826315558', 'auctor.nunc.nulla@lacus.co.uk', '2021-05-29 05:01:36');

-- --------------------------------------------------------

--
-- Table structure for table `time_work`
--

CREATE TABLE `time_work` (
  `id` int(11) NOT NULL,
  `date_work_id` int(11) NOT NULL,
  `time_start` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `time_end` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `people` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `time_work`
--

INSERT INTO `time_work` (`id`, `date_work_id`, `time_start`, `time_end`, `people`) VALUES
(3, 2, '08:30', '09:30', 40),
(4, 2, '09:30', '10:30', 0),
(5, 2, '11:30', '12:30', 0),
(6, 2, '12:30', '13:30', 0),
(7, 2, '13:30', '14:30', 0),
(8, 2, '14:30', '15:30', 0),
(9, 2, '15:30', '16:30', 0),
(17, 4, '08:30', '09:30', 0),
(18, 4, '09:30', '10:30', 0),
(19, 4, '11:30', '12:30', 0),
(20, 4, '12:30', '13:30', 0),
(21, 4, '13:30', '14:30', 0),
(22, 4, '14:30', '15:30', 0),
(24, 4, '13:30', '14:30', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `relation2` (`employee_id`),
  ADD KEY `relation3` (`date_work_id`),
  ADD KEY `relation4` (`time_work_id`);

--
-- Indexes for table `date_work`
--
ALTER TABLE `date_work`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `time_work`
--
ALTER TABLE `time_work`
  ADD PRIMARY KEY (`id`),
  ADD KEY `relation1` (`date_work_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `date_work`
--
ALTER TABLE `date_work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `time_work`
--
ALTER TABLE `time_work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `relation2` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relation3` FOREIGN KEY (`date_work_id`) REFERENCES `date_work` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relation4` FOREIGN KEY (`time_work_id`) REFERENCES `time_work` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `time_work`
--
ALTER TABLE `time_work`
  ADD CONSTRAINT `relation1` FOREIGN KEY (`date_work_id`) REFERENCES `date_work` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
