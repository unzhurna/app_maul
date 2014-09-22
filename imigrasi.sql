-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 14, 2014 at 09:43 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `imigrasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Administrator vv', 'admin', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `imigran`
--

CREATE TABLE IF NOT EXISTS `imigran` (
`id` int(11) NOT NULL,
  `no_paspor` varchar(30) NOT NULL,
  `nm_imigran` varchar(50) NOT NULL,
  `tmpt_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kelamin` enum('L','P') NOT NULL,
  `id_negara` int(11) NOT NULL,
  `id_sponsor` int(11) NOT NULL,
  `alamat` tinytext NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `imigran`
--

INSERT INTO `imigran` (`id`, `no_paspor`, `nm_imigran`, `tmpt_lahir`, `tgl_lahir`, `kelamin`, `id_negara`, `id_sponsor`, `alamat`) VALUES
(1, '0987654321', 'Raina Unzhurna', 'Newyork', '1986-09-10', 'L', 223, 1, 'Jl. Meranti X Blok L No. 27 Cirebon');

-- --------------------------------------------------------

--
-- Stand-in structure for view `imigran_view`
--
CREATE TABLE IF NOT EXISTS `imigran_view` (
`id` int(11)
,`no_paspor` varchar(30)
,`nm_imigran` varchar(50)
,`tmpt_lahir` varchar(50)
,`tgl_lahir` date
,`kelamin` enum('L','P')
,`kode_iso` varchar(3)
,`sponsor` varchar(50)
,`alamat` tinytext
);
-- --------------------------------------------------------

--
-- Table structure for table `kitas`
--

CREATE TABLE IF NOT EXISTS `kitas` (
  `no_reg` varchar(7) NOT NULL,
  `id_imigran` int(11) NOT NULL,
  `masa_berlaku` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kitas`
--

INSERT INTO `kitas` (`no_reg`, `id_imigran`, `masa_berlaku`) VALUES
('KIS0000', 1, '2014-09-03');

-- --------------------------------------------------------

--
-- Table structure for table `negara`
--

CREATE TABLE IF NOT EXISTS `negara` (
`id` int(11) NOT NULL,
  `nm_negara` varchar(128) COLLATE utf8_bin NOT NULL,
  `kode_iso` varchar(3) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=240 ;

--
-- Dumping data for table `negara`
--

INSERT INTO `negara` (`id`, `nm_negara`, `kode_iso`) VALUES
(1, 'Afghanistan', 'AFG'),
(2, 'Albania', 'ALB'),
(3, 'Algeria', 'DZA'),
(4, 'American Samoa', 'ASM'),
(5, 'Andorra', 'AND'),
(6, 'Angola', 'AGO'),
(7, 'Anguilla', 'AIA'),
(8, 'Antarctica', 'ATA'),
(9, 'Antigua and Barbuda', 'ATG'),
(10, 'Argentina', 'ARG'),
(11, 'Armenia', 'ARM'),
(12, 'Aruba', 'ABW'),
(13, 'Australia', 'AUS'),
(14, 'Austria', 'AUT'),
(15, 'Azerbaijan', 'AZE'),
(16, 'Bahamas', 'BHS'),
(17, 'Bahrain', 'BHR'),
(18, 'Bangladesh', 'BGD'),
(19, 'Barbados', 'BRB'),
(20, 'Belarus', 'BLR'),
(21, 'Belgium', 'BEL'),
(22, 'Belize', 'BLZ'),
(23, 'Benin', 'BEN'),
(24, 'Bermuda', 'BMU'),
(25, 'Bhutan', 'BTN'),
(26, 'Bolivia', 'BOL'),
(27, 'Bosnia and Herzegowina', 'BIH'),
(28, 'Botswana', 'BWA'),
(29, 'Bouvet Island', 'BVT'),
(30, 'Brazil', 'BRA'),
(31, 'British Indian Ocean Territory', 'IOT'),
(32, 'Brunei Darussalam', 'BRN'),
(33, 'Bulgaria', 'BGR'),
(34, 'Burkina Faso', 'BFA'),
(35, 'Burundi', 'BDI'),
(36, 'Cambodia', 'KHM'),
(37, 'Cameroon', 'CMR'),
(38, 'Canada', 'CAN'),
(39, 'Cape Verde', 'CPV'),
(40, 'Cayman Islands', 'CYM'),
(41, 'Central African Republic', 'CAF'),
(42, 'Chad', 'TCD'),
(43, 'Chile', 'CHL'),
(44, 'China', 'CHN'),
(45, 'Christmas Island', 'CXR'),
(46, 'Cocos (Keeling) Islands', 'CCK'),
(47, 'Colombia', 'COL'),
(48, 'Comoros', 'COM'),
(49, 'Congo', 'COG'),
(50, 'Cook Islands', 'COK'),
(51, 'Costa Rica', 'CRI'),
(52, 'Cote D''Ivoire', 'CIV'),
(53, 'Croatia', 'HRV'),
(54, 'Cuba', 'CUB'),
(55, 'Cyprus', 'CYP'),
(56, 'Czech Republic', 'CZE'),
(57, 'Denmark', 'DNK'),
(58, 'Djibouti', 'DJI'),
(59, 'Dominica', 'DMA'),
(60, 'Dominican Republic', 'DOM'),
(61, 'East Timor', 'TMP'),
(62, 'Ecuador', 'ECU'),
(63, 'Egypt', 'EGY'),
(64, 'El Salvador', 'SLV'),
(65, 'Equatorial Guinea', 'GNQ'),
(66, 'Eritrea', 'ERI'),
(67, 'Estonia', 'EST'),
(68, 'Ethiopia', 'ETH'),
(69, 'Falkland Islands (Malvinas)', 'FLK'),
(70, 'Faroe Islands', 'FRO'),
(71, 'Fiji', 'FJI'),
(72, 'Finland', 'FIN'),
(73, 'France', 'FRA'),
(74, 'France, Metropolitan', 'FXX'),
(75, 'French Guiana', 'GUF'),
(76, 'French Polynesia', 'PYF'),
(77, 'French Southern Territories', 'ATF'),
(78, 'Gabon', 'GAB'),
(79, 'Gambia', 'GMB'),
(80, 'Georgia', 'GEO'),
(81, 'Germany', 'DEU'),
(82, 'Ghana', 'GHA'),
(83, 'Gibraltar', 'GIB'),
(84, 'Greece', 'GRC'),
(85, 'Greenland', 'GRL'),
(86, 'Grenada', 'GRD'),
(87, 'Guadeloupe', 'GLP'),
(88, 'Guam', 'GUM'),
(89, 'Guatemala', 'GTM'),
(90, 'Guinea', 'GIN'),
(91, 'Guinea-bissau', 'GNB'),
(92, 'Guyana', 'GUY'),
(93, 'Haiti', 'HTI'),
(94, 'Heard and Mc Donald Islands', 'HMD'),
(95, 'Honduras', 'HND'),
(96, 'Hong Kong', 'HKG'),
(97, 'Hungary', 'HUN'),
(98, 'Iceland', 'ISL'),
(99, 'India', 'IND'),
(100, 'Indonesia', 'IDN'),
(101, 'Iran (Islamic Republic of)', 'IRN'),
(102, 'Iraq', 'IRQ'),
(103, 'Ireland', 'IRL'),
(104, 'Israel', 'ISR'),
(105, 'Italy', 'ITA'),
(106, 'Jamaica', 'JAM'),
(107, 'Japan', 'JPN'),
(108, 'Jordan', 'JOR'),
(109, 'Kazakhstan', 'KAZ'),
(110, 'Kenya', 'KEN'),
(111, 'Kiribati', 'KIR'),
(112, 'North Korea', 'PRK'),
(113, 'Korea, Republic of', 'KOR'),
(114, 'Kuwait', 'KWT'),
(115, 'Kyrgyzstan', 'KGZ'),
(116, 'Lao People''s Democratic Republic', 'LAO'),
(117, 'Latvia', 'LVA'),
(118, 'Lebanon', 'LBN'),
(119, 'Lesotho', 'LSO'),
(120, 'Liberia', 'LBR'),
(121, 'Libyan Arab Jamahiriya', 'LBY'),
(122, 'Liechtenstein', 'LIE'),
(123, 'Lithuania', 'LTU'),
(124, 'Luxembourg', 'LUX'),
(125, 'Macau', 'MAC'),
(126, 'Macedonia', 'MKD'),
(127, 'Madagascar', 'MDG'),
(128, 'Malawi', 'MWI'),
(129, 'Malaysia', 'MYS'),
(130, 'Maldives', 'MDV'),
(131, 'Mali', 'MLI'),
(132, 'Malta', 'MLT'),
(133, 'Marshall Islands', 'MHL'),
(134, 'Martinique', 'MTQ'),
(135, 'Mauritania', 'MRT'),
(136, 'Mauritius', 'MUS'),
(137, 'Mayotte', 'MYT'),
(138, 'Mexico', 'MEX'),
(139, 'Micronesia, Federated States of', 'FSM'),
(140, 'Moldova, Republic of', 'MDA'),
(141, 'Monaco', 'MCO'),
(142, 'Mongolia', 'MNG'),
(143, 'Montserrat', 'MSR'),
(144, 'Morocco', 'MAR'),
(145, 'Mozambique', 'MOZ'),
(146, 'Myanmar', 'MMR'),
(147, 'Namibia', 'NAM'),
(148, 'Nauru', 'NRU'),
(149, 'Nepal', 'NPL'),
(150, 'Netherlands', 'NLD'),
(151, 'Netherlands Antilles', 'ANT'),
(152, 'New Caledonia', 'NCL'),
(153, 'New Zealand', 'NZL'),
(154, 'Nicaragua', 'NIC'),
(155, 'Niger', 'NER'),
(156, 'Nigeria', 'NGA'),
(157, 'Niue', 'NIU'),
(158, 'Norfolk Island', 'NFK'),
(159, 'Northern Mariana Islands', 'MNP'),
(160, 'Norway', 'NOR'),
(161, 'Oman', 'OMN'),
(162, 'Pakistan', 'PAK'),
(163, 'Palau', 'PLW'),
(164, 'Panama', 'PAN'),
(165, 'Papua New Guinea', 'PNG'),
(166, 'Paraguay', 'PRY'),
(167, 'Peru', 'PER'),
(168, 'Philippines', 'PHL'),
(169, 'Pitcairn', 'PCN'),
(170, 'Poland', 'POL'),
(171, 'Portugal', 'PRT'),
(172, 'Puerto Rico', 'PRI'),
(173, 'Qatar', 'QAT'),
(174, 'Reunion', 'REU'),
(175, 'Romania', 'ROM'),
(176, 'Russian Federation', 'RUS'),
(177, 'Rwanda', 'RWA'),
(178, 'Saint Kitts and Nevis', 'KNA'),
(179, 'Saint Lucia', 'LCA'),
(180, 'Saint Vincent and the Grenadines', 'VCT'),
(181, 'Samoa', 'WSM'),
(182, 'San Marino', 'SMR'),
(183, 'Sao Tome and Principe', 'STP'),
(184, 'Saudi Arabia', 'SAU'),
(185, 'Senegal', 'SEN'),
(186, 'Seychelles', 'SYC'),
(187, 'Sierra Leone', 'SLE'),
(188, 'Singapore', 'SGP'),
(189, 'Slovak Republic', 'SVK'),
(190, 'Slovenia', 'SVN'),
(191, 'Solomon Islands', 'SLB'),
(192, 'Somalia', 'SOM'),
(193, 'South Africa', 'ZAF'),
(194, 'South Georgia &amp; South Sandwich Islands', 'SGS'),
(195, 'Spain', 'ESP'),
(196, 'Sri Lanka', 'LKA'),
(197, 'St. Helena', 'SHN'),
(198, 'St. Pierre and Miquelon', 'SPM'),
(199, 'Sudan', 'SDN'),
(200, 'Suriname', 'SUR'),
(201, 'Svalbard and Jan Mayen Islands', 'SJM'),
(202, 'Swaziland', 'SWZ'),
(203, 'Sweden', 'SWE'),
(204, 'Switzerland', 'CHE'),
(205, 'Syrian Arab Republic', 'SYR'),
(206, 'Taiwan', 'TWN'),
(207, 'Tajikistan', 'TJK'),
(208, 'Tanzania, United Republic of', 'TZA'),
(209, 'Thailand', 'THA'),
(210, 'Togo', 'TGO'),
(211, 'Tokelau', 'TKL'),
(212, 'Tonga', 'TON'),
(213, 'Trinidad and Tobago', 'TTO'),
(214, 'Tunisia', 'TUN'),
(215, 'Turkey', 'TUR'),
(216, 'Turkmenistan', 'TKM'),
(217, 'Turks and Caicos Islands', 'TCA'),
(218, 'Tuvalu', 'TUV'),
(219, 'Uganda', 'UGA'),
(220, 'Ukraine', 'UKR'),
(221, 'United Arab Emirates', 'ARE'),
(222, 'United Kingdom', 'GBR'),
(223, 'United States', 'USA'),
(224, 'United States Minor Outlying Islands', 'UMI'),
(225, 'Uruguay', 'URY'),
(226, 'Uzbekistan', 'UZB'),
(227, 'Vanuatu', 'VUT'),
(228, 'Vatican City State (Holy See)', 'VAT'),
(229, 'Venezuela', 'VEN'),
(230, 'Viet Nam', 'VNM'),
(231, 'Virgin Islands (British)', 'VGB'),
(232, 'Virgin Islands (U.S.)', 'VIR'),
(233, 'Wallis and Futuna Islands', 'WLF'),
(234, 'Western Sahara', 'ESH'),
(235, 'Yemen', 'YEM'),
(236, 'Yugoslavia', 'YUG'),
(237, 'Democratic Republic of Congo', 'COD'),
(238, 'Zambia', 'ZMB'),
(239, 'Zimbabwe', 'ZWE');

-- --------------------------------------------------------

--
-- Table structure for table `sponsor`
--

CREATE TABLE IF NOT EXISTS `sponsor` (
`id` int(11) NOT NULL,
  `nm_sponsor` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `alamat` tinytext NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sponsor`
--

INSERT INTO `sponsor` (`id`, `nm_sponsor`, `no_telp`, `email`, `website`, `alamat`) VALUES
(1, 'Transcosmos Inc.', '0215556667', 'info@transcosmos.com', 'www.transcosmos.com', 'Jl. Budikemulyaan Gd. Sarana jaya Lt. 5-6 Jakarta');

-- --------------------------------------------------------

--
-- Structure for view `imigran_view`
--
DROP TABLE IF EXISTS `imigran_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `imigran_view` AS select `imigran`.`id` AS `id`,`imigran`.`no_paspor` AS `no_paspor`,`imigran`.`nm_imigran` AS `nm_imigran`,`imigran`.`tmpt_lahir` AS `tmpt_lahir`,`imigran`.`tgl_lahir` AS `tgl_lahir`,`imigran`.`kelamin` AS `kelamin`,`negara`.`kode_iso` AS `kode_iso`,`sponsor`.`nm_sponsor` AS `sponsor`,`imigran`.`alamat` AS `alamat` from ((`imigran` left join `negara` on((`imigran`.`id_negara` = `negara`.`id`))) left join `sponsor` on((`imigran`.`id_sponsor` = `sponsor`.`id`)));

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imigran`
--
ALTER TABLE `imigran`
 ADD PRIMARY KEY (`id`), ADD KEY `id_negara` (`id_negara`,`id_sponsor`), ADD KEY `id_sponsor` (`id_sponsor`);

--
-- Indexes for table `negara`
--
ALTER TABLE `negara`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsor`
--
ALTER TABLE `sponsor`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `imigran`
--
ALTER TABLE `imigran`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `negara`
--
ALTER TABLE `negara`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=240;
--
-- AUTO_INCREMENT for table `sponsor`
--
ALTER TABLE `sponsor`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `imigran`
--
ALTER TABLE `imigran`
ADD CONSTRAINT `imigran_ibfk_1` FOREIGN KEY (`id_sponsor`) REFERENCES `sponsor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
