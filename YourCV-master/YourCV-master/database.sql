-- phpMyAdmin SQL Dump
-- version 4.2.2
-- http://www.phpmyadmin.net
--
-- Gostitelj: localhost
-- Čas nastanka: 08. maj 2015 ob 08.51
-- Različica strežnika: 5.1.65-log
-- Različica PHP: 5.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Zbirka podatkov: `qodv01_cv`
--

-- --------------------------------------------------------

--
-- Struktura tabele `country`
--

CREATE TABLE IF NOT EXISTS `country` (
`id_country` int(11) NOT NULL,
  `country_code` varchar(20) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `country_name` varchar(80) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `country_capital` varchar(80) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `nationality` varchar(50) COLLATE utf8_slovenian_ci DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=251 ;

--
-- Odloži podatke za tabelo `country`
--

INSERT INTO `country` (`id_country`, `country_code`, `country_name`, `country_capital`, `nationality`) VALUES
(1, 'AD', 'Andorra', 'Andorra la Vella', 'Andorran'),
(2, 'AE', 'United Arab Emirates', 'Abu Dhabi', 'Emirian'),
(3, 'AF', 'Afghanistan', 'Kabul', 'Afghan'),
(4, 'AG', 'Antigua and Barbuda', 'St. John''s', NULL),
(5, 'AI', 'Anguilla', 'The Valley', NULL),
(6, 'AL', 'Albania', 'Tirana', 'Albanian'),
(7, 'AM', 'Armenia', 'Yerevan', 'Armenian'),
(8, 'AO', 'Angola', 'Luanda', 'Angolan'),
(9, 'AQ', 'Antarctica', '', NULL),
(10, 'AR', 'Argentina', 'Buenos Aires', 'Argentinean'),
(11, 'AS', 'American Samoa', 'Pago Pago', NULL),
(12, 'AT', 'Austria', 'Vienna', 'Austrian'),
(13, 'AU', 'Australia', 'Canberra', 'Australian'),
(14, 'AW', 'Aruba', 'Oranjestad', NULL),
(15, 'AX', 'Åland', 'Mariehamn', NULL),
(16, 'AZ', 'Azerbaijan', 'Baku', 'Azerbaijani'),
(17, 'BA', 'Bosnia and Herzegovina', 'Sarajevo', 'Herzegovinian'),
(18, 'BB', 'Barbados', 'Bridgetown', 'Barbadian'),
(19, 'BD', 'Bangladesh', 'Dhaka', 'Bangladeshi'),
(20, 'BE', 'Belgium', 'Brussels', 'Belgian'),
(21, 'BF', 'Burkina Faso', 'Ouagadougou', 'Burkinabe'),
(22, 'BG', 'Bulgaria', 'Sofia', 'Bulgarian'),
(23, 'BH', 'Bahrain', 'Manama', 'Bahraini'),
(24, 'BI', 'Burundi', 'Bujumbura', 'Burundian'),
(25, 'BJ', 'Benin', 'Porto-Novo', 'Beninese'),
(26, 'BL', 'Saint Barthélemy', 'Gustavia', NULL),
(27, 'BM', 'Bermuda', 'Hamilton', NULL),
(28, 'BN', 'Brunei', 'Bandar Seri Begawan', 'Bruneian'),
(29, 'BO', 'Bolivia', 'Sucre', 'Bolivian'),
(30, 'BQ', 'Bonaire', '', NULL),
(31, 'BR', 'Brazil', 'Brasília', 'Brazilian'),
(32, 'BS', 'Bahamas', 'Nassau', 'Bahamian'),
(33, 'BT', 'Bhutan', 'Thimphu', 'Bhutanese'),
(34, 'BV', 'Bouvet Island', '', NULL),
(35, 'BW', 'Botswana', 'Gaborone', 'Motswana'),
(36, 'BY', 'Belarus', 'Minsk', 'Belarusian'),
(37, 'BZ', 'Belize', 'Belmopan', 'Belizean'),
(38, 'CA', 'Canada', 'Ottawa', 'Canadian'),
(39, 'CC', 'Cocos [Keeling] Islands', 'West Island', NULL),
(40, 'CD', 'Democratic Republic of the Congo', 'Kinshasa', 'Congolese'),
(41, 'CF', 'Central African Republic', 'Bangui', 'Central African'),
(42, 'CG', 'Republic of the Congo', 'Brazzaville', NULL),
(43, 'CH', 'Switzerland', 'Berne', 'Swiss'),
(44, 'CI', 'Ivory Coast', 'Yamoussoukro', NULL),
(45, 'CK', 'Cook Islands', 'Avarua', NULL),
(46, 'CL', 'Chile', 'Santiago', 'Chilean'),
(47, 'CM', 'Cameroon', 'Yaoundé', 'Cameroonian'),
(48, 'CN', 'China', 'Beijing', 'Chinese'),
(49, 'CO', 'Colombia', 'Bogotá', 'Colombian'),
(50, 'CR', 'Costa Rica', 'San José', 'Costa Rican'),
(51, 'CU', 'Cuba', 'Havana', 'Cuban'),
(52, 'CV', 'Cape Verde', 'Praia', 'Verdian'),
(53, 'CW', 'Curacao', 'Willemstad', NULL),
(54, 'CX', 'Christmas Island', 'The Settlement', NULL),
(55, 'CY', 'Cyprus', 'Nicosia', 'Cypriot'),
(56, 'CZ', 'Czech Republic', 'Prague', 'Czech'),
(57, 'DE', 'Germany', 'Berlin', 'German'),
(58, 'DJ', 'Djibouti', 'Djibouti', 'Djibouti'),
(59, 'DK', 'Denmark', 'Copenhagen', 'Danish'),
(60, 'DM', 'Dominica', 'Roseau', 'Dominican'),
(61, 'DO', 'Dominican Republic', 'Santo Domingo', 'Dominican'),
(62, 'DZ', 'Algeria', 'Algiers', 'Algerian'),
(63, 'EC', 'Ecuador', 'Quito', 'Ecuadorean'),
(64, 'EE', 'Estonia', 'Tallinn', 'Estonian'),
(65, 'EG', 'Egypt', 'Cairo', 'Egyptian'),
(66, 'EH', 'Western Sahara', 'El Aaiún', NULL),
(67, 'ER', 'Eritrea', 'Asmara', 'Eritrean'),
(68, 'ES', 'Spain', 'Madrid', 'Spanish'),
(69, 'ET', 'Ethiopia', 'Addis Ababa', 'Ethiopian'),
(70, 'FI', 'Finland', 'Helsinki', 'Finnish'),
(71, 'FJ', 'Fiji', 'Suva', 'Fijian'),
(72, 'FK', 'Falkland Islands', 'Stanley', NULL),
(73, 'FM', 'Micronesia', 'Palikir', 'Micronesian'),
(74, 'FO', 'Faroe Islands', 'Tórshavn', NULL),
(75, 'FR', 'France', 'Paris', 'French'),
(76, 'GA', 'Gabon', 'Libreville', 'Gabonese'),
(77, 'GB', 'United Kingdom', 'London', 'British'),
(78, 'GD', 'Grenada', 'St. George''s', NULL),
(79, 'GE', 'Georgia', 'Tbilisi', 'Georgian'),
(80, 'GF', 'French Guiana', 'Cayenne', NULL),
(81, 'GG', 'Guernsey', 'St Peter Port', NULL),
(82, 'GH', 'Ghana', 'Accra', 'Ghanaian'),
(83, 'GI', 'Gibraltar', 'Gibraltar', NULL),
(84, 'GL', 'Greenland', 'Nuuk', 'Grenadian'),
(85, 'GM', 'Gambia', 'Banjul', 'Gambian'),
(86, 'GN', 'Guinea', 'Conakry', 'Guinean'),
(87, 'GP', 'Guadeloupe', 'Basse-Terre', NULL),
(88, 'GQ', 'Equatorial Guinea', 'Malabo', 'Equatorial Guinean'),
(89, 'GR', 'Greece', 'Athens', 'Greek'),
(90, 'GS', 'South Georgia and the South Sandwich Islands', 'Grytviken', NULL),
(91, 'GT', 'Guatemala', 'Guatemala City', 'Guatemalan'),
(92, 'GU', 'Guam', 'Hagåtña', NULL),
(93, 'GW', 'Guinea-Bissau', 'Bissau', 'Guinea-Bissauan'),
(94, 'GY', 'Guyana', 'Georgetown', 'Guyanese'),
(95, 'HK', 'Hong Kong', 'Hong Kong', NULL),
(96, 'HM', 'Heard Island and McDonald Islands', '', NULL),
(97, 'HN', 'Honduras', 'Tegucigalpa', 'Honduran'),
(98, 'HR', 'Croatia', 'Zagreb', 'Croatian'),
(99, 'HT', 'Haiti', 'Port-au-Prince', 'Haitian'),
(100, 'HU', 'Hungary', 'Budapest', 'Hungarian'),
(101, 'ID', 'Indonesia', 'Jakarta', 'Indonesian'),
(102, 'IE', 'Ireland', 'Dublin', 'Irish'),
(103, 'IL', 'Israel', '', 'Israeli'),
(104, 'IM', 'Isle of Man', 'Douglas', NULL),
(105, 'IN', 'India', 'New Delhi', 'Indian'),
(106, 'IO', 'British Indian Ocean Territory', '', NULL),
(107, 'IQ', 'Iraq', 'Baghdad', 'Iraqi'),
(108, 'IR', 'Iran', 'Tehran', 'Iranian'),
(109, 'IS', 'Iceland', 'Reykjavik', 'Icelander'),
(110, 'IT', 'Italy', 'Rome', 'Italian'),
(111, 'JE', 'Jersey', 'Saint Helier', NULL),
(112, 'JM', 'Jamaica', 'Kingston', 'Jamaican'),
(113, 'JO', 'Jordan', 'Amman', 'Jordanian'),
(114, 'JP', 'Japan', 'Tokyo', 'Japanese'),
(115, 'KE', 'Kenya', 'Nairobi', 'Kenyan'),
(116, 'KG', 'Kyrgyzstan', 'Bishkek', 'Kirghiz'),
(117, 'KH', 'Cambodia', 'Phnom Penh', 'Cambodian'),
(118, 'KI', 'Kiribati', 'Tarawa', 'I-Kiribati'),
(119, 'KM', 'Comoros', 'Moroni', 'Comoran'),
(120, 'KN', 'Saint Kitts and Nevis', 'Basseterre', 'Kittian and Nevisian'),
(121, 'KP', 'North Korea', 'Pyongyang', 'North Korean'),
(122, 'KR', 'South Korea', 'Seoul', NULL),
(123, 'KW', 'Kuwait', 'Kuwait City', 'Kuwaiti'),
(124, 'KY', 'Cayman Islands', 'George Town', NULL),
(125, 'KZ', 'Kazakhstan', 'Astana', 'Kazakhstani'),
(126, 'LA', 'Laos', 'Vientiane', 'Laotian'),
(127, 'LB', 'Lebanon', 'Beirut', 'Lebanese'),
(128, 'LC', 'Saint Lucia', 'Castries', 'Saint Lucian'),
(129, 'LI', 'Liechtenstein', 'Vaduz', 'Liechtensteiner'),
(130, 'LK', 'Sri Lanka', 'Colombo', 'Sri Lankan'),
(131, 'LR', 'Liberia', 'Monrovia', 'Liberian'),
(132, 'LS', 'Lesotho', 'Maseru', 'Mosotho'),
(133, 'LT', 'Lithuania', 'Vilnius', 'Lithuanian'),
(134, 'LU', 'Luxembourg', 'Luxembourg', 'Luxembourger'),
(135, 'LV', 'Latvia', 'Riga', 'Latvian'),
(136, 'LY', 'Libya', 'Tripoli', 'Libyan'),
(137, 'MA', 'Morocco', 'Rabat', 'Moroccan'),
(138, 'MC', 'Monaco', 'Monaco', 'Monegasque'),
(139, 'MD', 'Moldova', 'Chişinău', 'Moldovan'),
(140, 'ME', 'Montenegro', 'Podgorica', NULL),
(141, 'MF', 'Saint Martin', 'Marigot', NULL),
(142, 'MG', 'Madagascar', 'Antananarivo', 'Malagasy'),
(143, 'MH', 'Marshall Islands', 'Majuro', 'Marshallese'),
(144, 'MK', 'Macedonia', 'Skopje', 'Macedonian'),
(145, 'ML', 'Mali', 'Bamako', 'Malian'),
(146, 'MM', 'Myanmar [Burma]', 'Nay Pyi Taw', 'Burmese'),
(147, 'MN', 'Mongolia', 'Ulan Bator', 'Mongolian'),
(148, 'MO', 'Macao', 'Macao', NULL),
(149, 'MP', 'Northern Mariana Islands', 'Saipan', NULL),
(150, 'MQ', 'Martinique', 'Fort-de-France', NULL),
(151, 'MR', 'Mauritania', 'Nouakchott', 'Mauritanian'),
(152, 'MS', 'Montserrat', 'Plymouth', NULL),
(153, 'MT', 'Malta', 'Valletta', 'Maltese'),
(154, 'MU', 'Mauritius', 'Port Louis', 'Mauritian'),
(155, 'MV', 'Maldives', 'Malé', 'Maldivan'),
(156, 'MW', 'Malawi', 'Lilongwe', 'Malawian'),
(157, 'MX', 'Mexico', 'Mexico City', 'Mexican'),
(158, 'MY', 'Malaysia', 'Kuala Lumpur', 'Malaysian'),
(159, 'MZ', 'Mozambique', 'Maputo', 'Mozambican'),
(160, 'NA', 'Namibia', 'Windhoek', 'Namibian'),
(161, 'NC', 'New Caledonia', 'Noumea', NULL),
(162, 'NE', 'Niger', 'Niamey', 'Nigerien'),
(163, 'NF', 'Norfolk Island', 'Kingston', NULL),
(164, 'NG', 'Nigeria', 'Abuja', 'Nigerian'),
(165, 'NI', 'Nicaragua', 'Managua', 'Nicaraguan'),
(166, 'NL', 'Netherlands', 'Amsterdam', 'Dutch'),
(167, 'NO', 'Norway', 'Oslo', 'Norwegian'),
(168, 'NP', 'Nepal', 'Kathmandu', 'Nepalese'),
(169, 'NR', 'Nauru', '', 'Nauruan'),
(170, 'NU', 'Niue', 'Alofi', NULL),
(171, 'NZ', 'New Zealand', 'Wellington', 'New Zealander'),
(172, 'OM', 'Oman', 'Muscat', 'Omani'),
(173, 'PA', 'Panama', 'Panama City', 'Panamanian'),
(174, 'PE', 'Peru', 'Lima', 'Peruvian'),
(175, 'PF', 'French Polynesia', 'Papeete', NULL),
(176, 'PG', 'Papua New Guinea', 'Port Moresby', 'Papua New Guinean'),
(177, 'PH', 'Philippines', 'Manila', 'Filipino'),
(178, 'PK', 'Pakistan', 'Islamabad', 'Pakistani'),
(179, 'PL', 'Poland', 'Warsaw', 'Polish'),
(180, 'PM', 'Saint Pierre and Miquelon', 'Saint-Pierre', NULL),
(181, 'PN', 'Pitcairn Islands', 'Adamstown', NULL),
(182, 'PR', 'Puerto Rico', 'San Juan', NULL),
(183, 'PS', 'Palestine', '', NULL),
(184, 'PT', 'Portugal', 'Lisbon', 'Portuguese'),
(185, 'PW', 'Palau', 'Melekeok - Palau State Capital', 'Palauan'),
(186, 'PY', 'Paraguay', 'Asunción', 'Paraguayan'),
(187, 'QA', 'Qatar', 'Doha', 'Qatari'),
(188, 'RE', 'Réunion', 'Saint-Denis', NULL),
(189, 'RO', 'Romania', 'Bucharest', 'Romanian'),
(190, 'RS', 'Serbia', 'Belgrade', 'Serbian'),
(191, 'RU', 'Russia', 'Moscow', 'Russian'),
(192, 'RW', 'Rwanda', 'Kigali', 'Rwandan'),
(193, 'SA', 'Saudi Arabia', 'Riyadh', 'Saudi Arabian'),
(194, 'SB', 'Solomon Islands', 'Honiara', 'Solomon Islander'),
(195, 'SC', 'Seychelles', 'Victoria', 'Seychellois'),
(196, 'SD', 'Sudan', 'Khartoum', 'Sudanese'),
(197, 'SE', 'Sweden', 'Stockholm', 'Swedish'),
(198, 'SG', 'Singapore', 'Singapore', 'Singaporean'),
(199, 'SH', 'Saint Helena', 'Jamestown', NULL),
(200, 'SI', 'Slovenia', 'Ljubljana', 'Slovene'),
(201, 'SJ', 'Svalbard and Jan Mayen', 'Longyearbyen', NULL),
(202, 'SK', 'Slovakia', 'Bratislava', 'Slovak'),
(203, 'SL', 'Sierra Leone', 'Freetown', 'Sierra Leonean'),
(204, 'SM', 'San Marino', 'San Marino', 'Sammarinese'),
(205, 'SN', 'Senegal', 'Dakar', 'Senegalese'),
(206, 'SO', 'Somalia', 'Mogadishu', 'Somali'),
(207, 'SR', 'Suriname', 'Paramaribo', 'Surinamer'),
(208, 'SS', 'South Sudan', 'Juba', NULL),
(209, 'ST', 'São Tomé and Príncipe', 'São Tomé', 'Sao Tomean'),
(210, 'SV', 'El Salvador', 'San Salvador', 'Salvadoran'),
(211, 'SX', 'Sint Maarten', 'Philipsburg', NULL),
(212, 'SY', 'Syria', 'Damascus', 'Syrian'),
(213, 'SZ', 'Swaziland', 'Mbabane', 'Swazi'),
(214, 'TC', 'Turks and Caicos Islands', 'Cockburn Town', NULL),
(215, 'TD', 'Chad', 'N''Djamena', 'Chadian'),
(216, 'TF', 'French Southern Territories', 'Port-aux-Français', NULL),
(217, 'TG', 'Togo', 'Lomé', 'Togolese'),
(218, 'TH', 'Thailand', 'Bangkok', 'Thai'),
(219, 'TJ', 'Tajikistan', 'Dushanbe', 'Tadzhik'),
(220, 'TK', 'Tokelau', '', NULL),
(221, 'TL', 'East Timor', 'Dili', 'East Timorese'),
(222, 'TM', 'Turkmenistan', 'Ashgabat', 'Turkmen'),
(223, 'TN', 'Tunisia', 'Tunis', 'Tunisian'),
(224, 'TO', 'Tonga', 'Nuku''alofa', 'Tongan'),
(225, 'TR', 'Turkey', 'Ankara', 'Turkish'),
(226, 'TT', 'Trinidad and Tobago', 'Port of Spain', 'Trinidadian'),
(227, 'TV', 'Tuvalu', 'Funafuti', 'Tuvaluan'),
(228, 'TW', 'Taiwan', 'Taipei', 'Taiwanese'),
(229, 'TZ', 'Tanzania', 'Dodoma', 'Tanzanian'),
(230, 'UA', 'Ukraine', 'Kyiv', 'Ukrainian'),
(231, 'UG', 'Uganda', 'Kampala', 'Ugandan'),
(232, 'UM', 'U.S. Minor Outlying Islands', '', NULL),
(233, 'US', 'United States', 'Washington', 'American'),
(234, 'UY', 'Uruguay', 'Montevideo', 'Uruguayan'),
(235, 'UZ', 'Uzbekistan', 'Tashkent', 'Uzbekistani'),
(236, 'VA', 'Vatican City', 'Vatican', NULL),
(237, 'VC', 'Saint Vincent and the Grenadines', 'Kingstown', NULL),
(238, 'VE', 'Venezuela', 'Caracas', 'Venezuelan'),
(239, 'VG', 'British Virgin Islands', 'Road Town', NULL),
(240, 'VI', 'U.S. Virgin Islands', 'Charlotte Amalie', NULL),
(241, 'VN', 'Vietnam', 'Hanoi', 'Vietnamese'),
(242, 'VU', 'Vanuatu', 'Port Vila', 'Ni-Vanuatu'),
(243, 'WF', 'Wallis and Futuna', 'Mata-Utu', NULL),
(244, 'WS', 'Samoa', 'Apia', 'Samoan'),
(245, 'XK', 'Kosovo', 'Pristina', NULL),
(246, 'YE', 'Yemen', 'Sanaa', 'Yemeni'),
(247, 'YT', 'Mayotte', 'Mamoutzou', NULL),
(248, 'ZA', 'South Africa', 'Pretoria', 'South African'),
(249, 'ZM', 'Zambia', 'Lusaka', 'Zambian'),
(250, 'ZW', 'Zimbabwe', 'Harare', 'Zimbabwean');

-- --------------------------------------------------------

--
-- Struktura tabele `cv`
--

CREATE TABLE IF NOT EXISTS `cv` (
`id_cv` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` varchar(30) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_cv_type` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=9 ;

--
-- Odloži podatke za tabelo `cv`
--

INSERT INTO `cv` (`id_cv`, `name`, `date`, `time`, `id_user`, `id_cv_type`) VALUES
(1, 'Moj prvi CV', '2008-05-20', '05:46:47', 2, 2),
(2, '123', '2008-05-20', '05:57:42', 2, 1),
(6, '123', '2008-05-20', '08:17:30', 2, 2),
(7, '123', '2008-05-20', '08:20:20', 2, 2),
(8, 'Moj2', '2008-05-20', '08:32:01', 2, 2);

-- --------------------------------------------------------

--
-- Struktura tabele `cv_answers`
--

CREATE TABLE IF NOT EXISTS `cv_answers` (
`id_cv_answer` int(11) NOT NULL,
  `cv_answer` varchar(300) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `id_cv_question` int(11) DEFAULT NULL,
  `id_cv` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=222 ;

--
-- Odloži podatke za tabelo `cv_answers`
--

INSERT INTO `cv_answers` (`id_cv_answer`, `cv_answer`, `id_cv_question`, `id_cv`) VALUES
(157, '1231231', 23, 4),
(158, '1231231', 24, 4),
(159, '23', 25, 4),
(160, '1231231', 26, 4),
(161, '213@gmail.com', 27, 4),
(162, 'Male', 28, 4),
(163, '123', 29, 4),
(164, '123123', 30, 4),
(165, '13', 31, 4),
(166, '123', 1, 5),
(167, '1231123', 2, 5),
(168, '123', 3, 5),
(169, '123123', 4, 5),
(170, '132@gmai.com', 5, 5),
(171, 'Male', 6, 5),
(172, '2015-05-13', 7, 5),
(173, '132', 8, 5),
(174, '123', 9, 5),
(175, '123', 11, 5),
(177, '123', 13, 5),
(178, '213', 14, 5),
(179, '213', 15, 5),
(180, '213', 16, 5),
(181, '123', 17, 5),
(182, '123', 18, 5),
(183, '12312', 1, 6),
(184, '1231', 2, 6),
(185, '213', 3, 6),
(186, '213', 4, 6),
(187, '123123@asd.com', 5, 6),
(188, 'Male', 6, 6),
(189, '2015-05-04', 7, 6),
(190, '12312', 8, 6),
(191, '312', 9, 6),
(192, '12312', 1, 7),
(193, '1231', 2, 7),
(194, '213', 3, 7),
(195, '213', 4, 7),
(196, '123123@asd.com', 5, 7),
(197, 'Male', 6, 7),
(198, '2015-05-04', 7, 7),
(199, '12312', 8, 7),
(200, '312', 9, 7),
(201, NULL, 13, 7),
(202, NULL, 14, 7),
(203, NULL, 15, 7),
(204, NULL, 16, 7),
(205, NULL, 17, 7),
(206, NULL, 18, 7),
(207, 'Klemen', 1, 8),
(208, 'Bordej', 2, 8),
(209, 'Goriška 9', 3, 8),
(210, '070875419', 4, 8),
(211, 'klemen.brodej1@gmail.com', 5, 8),
(212, 'Male', 6, 8),
(213, '1996-07-25', 7, 8),
(214, 'Slovenian', 8, 8),
(215, 'IT technologist', 9, 8),
(216, NULL, 13, 8),
(217, NULL, 14, 8),
(218, 'MS Office, PHP, JS', 15, 8),
(219, 'Car', 16, 8),
(220, NULL, 17, 8),
(221, NULL, 18, 8);

-- --------------------------------------------------------

--
-- Struktura tabele `cv_answer_languages`
--

CREATE TABLE IF NOT EXISTS `cv_answer_languages` (
`id_cv_language` int(11) NOT NULL,
  `id_cv_language_levels` int(11) DEFAULT NULL,
  `id_cv` int(11) DEFAULT NULL,
  `id_language` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=12 ;

--
-- Odloži podatke za tabelo `cv_answer_languages`
--

INSERT INTO `cv_answer_languages` (`id_cv_language`, `id_cv_language_levels`, `id_cv`, `id_language`) VALUES
(1, 8, 1, 84),
(2, 11, 2, 84),
(3, 13, 2, 84),
(4, 14, 3, 1),
(5, 15, 4, 84),
(6, 16, 5, 84),
(7, 17, 5, 84),
(8, 18, 6, 84),
(9, 19, 7, 1),
(10, 20, 8, 1),
(11, 21, 8, 39);

-- --------------------------------------------------------

--
-- Struktura tabele `cv_education`
--

CREATE TABLE IF NOT EXISTS `cv_education` (
`cv_id_education` int(11) NOT NULL,
  `course` varchar(150) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `institution_name` varchar(150) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `qualification_awarded` varchar(150) COLLATE utf8_slovenian_ci NOT NULL,
  `start_date` varchar(50) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `end_date` varchar(50) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `id_cv` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=3 ;

--
-- Odloži podatke za tabelo `cv_education`
--

INSERT INTO `cv_education` (`cv_id_education`, `course`, `institution_name`, `qualification_awarded`, `start_date`, `end_date`, `id_cv`) VALUES
(1, 'ers', '12321', '213', '2015-05-07', 'Present', 5),
(2, 'Computer technician', 'ERŠ', 'Poklicna Matura', '2011-09-01', 'Present', 8);

-- --------------------------------------------------------

--
-- Struktura tabele `cv_languages_levels`
--

CREATE TABLE IF NOT EXISTS `cv_languages_levels` (
`id_cv_language_levels` int(11) NOT NULL,
  `listening` varchar(20) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `reading` varchar(20) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `spoken_interaction` varchar(20) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `spoken_production` varchar(20) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `writing` varchar(20) COLLATE utf8_slovenian_ci DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=22 ;

--
-- Odloži podatke za tabelo `cv_languages_levels`
--

INSERT INTO `cv_languages_levels` (`id_cv_language_levels`, `listening`, `reading`, `spoken_interaction`, `spoken_production`, `writing`) VALUES
(1, 'a1', 'a1', 'a1', 'a1', 'a1'),
(2, 'a1', 'a1', 'a1', 'a1', 'a1'),
(3, 'a1', 'a1', 'a1', 'a1', 'a1'),
(4, 'a1', 'a1', 'a1', 'a1', 'a1'),
(5, 'a1', 'a1', 'a1', 'a1', 'a1'),
(6, 'a1', 'a1', 'a1', 'a1', 'a1'),
(7, 'a1', 'a1', 'a1', 'a1', 'a1'),
(8, 'a1', 'a1', 'a1', 'a1', 'a1'),
(9, 'a1', 'a1', 'a1', 'a1', 'a1'),
(10, 'a1', 'a1', 'a1', 'a1', 'a1'),
(11, 'a1', 'a1', 'a1', 'a1', 'a1'),
(12, 'a1', 'a1', 'a1', 'a1', 'a1'),
(13, 'a1', 'a1', 'a1', 'a1', 'a1'),
(14, 'c1', 'c1', 'c1', 'c1', 'c1'),
(15, 'a1', 'a1', 'a1', 'a1', 'a1'),
(16, 'a1', 'a1', 'a1', 'a1', 'a1'),
(17, 'a1', 'a1', 'a1', 'a1', 'a1'),
(18, 'a1', 'a1', 'a1', 'a1', 'a1'),
(19, 'a1', 'a1', 'a1', 'a1', 'a1'),
(20, 'c1', 'c1', 'c1', 'c1', 'b2'),
(21, 'c2', 'c2', 'c2', 'c2', 'c1');

-- --------------------------------------------------------

--
-- Struktura tabele `cv_questions`
--

CREATE TABLE IF NOT EXISTS `cv_questions` (
`id_cv_questions` int(11) NOT NULL,
  `cv_question` varchar(150) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `id_cv_type` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=43 ;

--
-- Odloži podatke za tabelo `cv_questions`
--

INSERT INTO `cv_questions` (`id_cv_questions`, `cv_question`, `id_cv_type`) VALUES
(1, 'name', 2),
(2, 'surname', 2),
(3, 'adress', 2),
(4, 'phone', 2),
(5, 'email', 2),
(6, 'gender', 2),
(7, 'birth date', 2),
(8, 'nationality', 2),
(9, 'job applied', 2),
(11, 'mother tounge', 2),
(13, 'communication skills', 2),
(14, 'managerial skills', 2),
(15, 'computer skills', 2),
(16, 'other skills', 2),
(17, 'driving license', 2),
(18, 'publications', 2),
(19, 'presentations', 2),
(21, 'lanugages', 1),
(22, 'lanugages', 2),
(23, 'name', 1),
(24, 'surname', 1),
(25, 'adress', 1),
(26, 'phone', 1),
(27, 'email', 1),
(28, 'gender', 1),
(29, 'birth date', 1),
(30, 'nationality', 1),
(31, 'job applied', 1),
(32, 'mother tounge', 1),
(34, 'communication skills', 1),
(35, 'managerial skills', 1),
(36, 'computer skills', 1),
(37, 'other skills', 1),
(38, 'driving license', 1),
(39, 'publications', 1),
(40, 'presentations', 1),
(41, 'projects', 1),
(42, 'conferences', 1);

-- --------------------------------------------------------

--
-- Struktura tabele `cv_type`
--

CREATE TABLE IF NOT EXISTS `cv_type` (
`id_cv_type` int(11) NOT NULL,
  `cv_type` varchar(20) COLLATE utf8_slovenian_ci DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=3 ;

--
-- Odloži podatke za tabelo `cv_type`
--

INSERT INTO `cv_type` (`id_cv_type`, `cv_type`) VALUES
(1, 'employed'),
(2, 'student');

-- --------------------------------------------------------

--
-- Struktura tabele `cv_work_experience`
--

CREATE TABLE IF NOT EXISTS `cv_work_experience` (
`id_cv_work_experience` int(11) NOT NULL,
  `job_title` varchar(150) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `company_name` varchar(150) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `start_date` varchar(50) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `end_date` varchar(50) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `id_cv` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=3 ;

--
-- Odloži podatke za tabelo `cv_work_experience`
--

INSERT INTO `cv_work_experience` (`id_cv_work_experience`, `job_title`, `company_name`, `start_date`, `end_date`, `id_cv`) VALUES
(1, '123', 'Gorenje', '2015-05-05', 'Present', 5),
(2, '123', 'Gorenje', '2015-05-19', 'Present', 5);

-- --------------------------------------------------------

--
-- Struktura tabele `gender`
--

CREATE TABLE IF NOT EXISTS `gender` (
`id_gender` int(11) NOT NULL,
  `gender_type` varchar(15) COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=3 ;

--
-- Odloži podatke za tabelo `gender`
--

INSERT INTO `gender` (`id_gender`, `gender_type`) VALUES
(1, 'Male'),
(2, 'Female');

-- --------------------------------------------------------

--
-- Struktura tabele `languages`
--

CREATE TABLE IF NOT EXISTS `languages` (
`id_language` int(11) NOT NULL,
  `language` varchar(45) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `short` varchar(15) COLLATE utf8_slovenian_ci DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=108 ;

--
-- Odloži podatke za tabelo `languages`
--

INSERT INTO `languages` (`id_language`, `language`, `short`) VALUES
(1, 'English', 'en'),
(2, 'German', 'de'),
(3, 'French', 'fr'),
(4, 'Dutch', 'nl'),
(5, 'Italian', 'it'),
(6, 'Spanish', 'es'),
(7, 'Polish', 'pl'),
(8, 'Russian', 'ru'),
(9, 'Japanese', 'ja'),
(10, 'Portuguese', 'pt'),
(11, 'Swedish', 'sv'),
(12, 'Chinese', 'zh'),
(13, 'Catalan', 'ca'),
(14, 'Ukrainian', 'uk'),
(15, 'Norwegian ', 'no'),
(16, 'Finnish', 'fi'),
(17, 'Vietnamese', 'vi'),
(18, 'Czech', 'cs'),
(19, 'Hungarian', 'hu'),
(20, 'Korean', 'ko'),
(21, 'Indonesian', 'id'),
(22, 'Turkish', 'tr'),
(23, 'Romanian', 'ro'),
(24, 'Persian', 'fa'),
(25, 'Arabic', 'ar'),
(26, 'Danish', 'da'),
(27, 'Esperanto', 'eo'),
(28, 'Serbian', 'sr'),
(29, 'Lithuanian', 'lt'),
(30, 'Slovak', 'sk'),
(31, 'Malay', 'ms'),
(32, 'Hebrew', 'he'),
(33, 'Bulgarian', 'bg'),
(34, 'Slovenian', 'sl'),
(35, 'Volapuk', 'vo'),
(36, 'Kazakh', 'kk'),
(37, 'Waray-Waray', 'war'),
(38, 'Basque', 'eu'),
(39, 'Croatian', 'hr'),
(40, 'Hindi', 'hi'),
(41, 'Estonian', 'et'),
(42, 'Azerbaijani', 'az'),
(43, 'Galician', 'gl'),
(44, 'Simple English', 'simple'),
(45, 'Norwegian (Nynorsk)', 'nn'),
(46, 'Thai', 'th'),
(47, 'Newar / Nepal Bhasa', 'new'),
(48, 'Greek', 'el'),
(49, 'Aromanian', 'roa-rup'),
(50, 'Latin', 'la'),
(51, 'Occitan', 'oc'),
(52, 'Tagalog', 'tl'),
(53, 'Haitian', 'ht'),
(54, 'Macedonian', 'mk'),
(55, 'Georgian', 'ka'),
(56, 'Serbo-Croatian', 'sh'),
(57, 'Telugu', 'te'),
(58, 'Piedmontese', 'pms'),
(59, 'Cebuano', 'ceb'),
(60, 'Tamil', 'ta'),
(61, 'Belarusian', 'be-x-old'),
(62, 'Breton', 'br'),
(63, 'Latvian', 'lv'),
(64, 'Javanese', 'jv'),
(65, 'Albanian', 'sq'),
(66, 'Belarusian', 'be'),
(67, 'Marathi', 'mr'),
(68, 'Welsh', 'cy'),
(69, 'Luxembourgish', 'lb'),
(70, 'Icelandic', 'is'),
(71, 'Bosnian', 'bs'),
(72, 'Yoruba', 'yo'),
(73, 'Malagasy', 'mg'),
(74, 'Aragonese', 'an'),
(75, 'Bishnupriya Manipuri', 'bpy'),
(76, 'Lombard', 'lmo'),
(77, 'West Frisian', 'fy'),
(78, 'Bengali', 'bn'),
(79, 'Ido', 'io'),
(80, 'Swahili', 'sw'),
(81, 'Gujarati', 'gu'),
(82, 'Malayalam', 'ml'),
(83, 'Western Panjabi', 'pnb'),
(84, 'Afrikaans', 'af'),
(85, 'Low Saxon', 'nds'),
(86, 'Sicilian', 'scn'),
(87, 'Urdu', 'ur'),
(88, 'Kurdish', 'ku'),
(89, 'Cantonese', 'zh-yue'),
(90, 'Armenian', 'hy'),
(91, 'Quechua', 'qu'),
(92, 'Sundanese', 'su'),
(93, 'Nepali', 'ne'),
(94, 'Zazaki', 'diq'),
(95, 'Asturian', 'ast'),
(96, 'Tatar', 'tt'),
(97, 'Neapolitan', 'nap'),
(98, 'Irish', 'ga'),
(99, 'Chuvash', 'cv'),
(100, 'Samogitian', 'bat-smg'),
(101, 'Walloon', 'wa'),
(102, 'Amharic', 'am'),
(103, 'Kannada', 'kn'),
(104, 'Alemannic', 'als'),
(105, 'Buginese', 'bug'),
(106, 'Burmese', 'my'),
(107, 'Interlingua', 'ia');

-- --------------------------------------------------------

--
-- Struktura tabele `security_answer`
--

CREATE TABLE IF NOT EXISTS `security_answer` (
`id_sec_answer` int(11) NOT NULL,
  `sec_answer` varchar(150) COLLATE utf8_slovenian_ci NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_security_question` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=3 ;

--
-- Odloži podatke za tabelo `security_answer`
--

INSERT INTO `security_answer` (`id_sec_answer`, `sec_answer`, `id_user`, `id_security_question`) VALUES
(1, 'ers', 1, 6),
(2, 'ers', 1, 6);

-- --------------------------------------------------------

--
-- Struktura tabele `security_question`
--

CREATE TABLE IF NOT EXISTS `security_question` (
`id_security_question` int(11) NOT NULL,
  `sec_question` varchar(300) COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=10 ;

--
-- Odloži podatke za tabelo `security_question`
--

INSERT INTO `security_question` (`id_security_question`, `sec_question`) VALUES
(1, 'Your mothers middle name?'),
(2, 'Where were your born?'),
(3, 'Name of first pet?'),
(4, 'Where was your father born?'),
(5, 'Where did your parents meet?'),
(6, 'Where did you go to high school?'),
(7, 'What was your favorite sport in high school?'),
(8, 'In what town was your first job?'),
(9, 'What was the last name of your third grade teacher?');

-- --------------------------------------------------------

--
-- Struktura tabele `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(11) NOT NULL,
  `email` varchar(150) COLLATE utf8_slovenian_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_slovenian_ci NOT NULL,
  `active` varchar(2) COLLATE utf8_slovenian_ci NOT NULL,
  `name` varchar(20) COLLATE utf8_slovenian_ci NOT NULL,
  `surname` varchar(20) COLLATE utf8_slovenian_ci NOT NULL,
  `birth_day` date NOT NULL,
  `guid` varchar(36) COLLATE utf8_slovenian_ci NOT NULL,
  `fb_id` varchar(100) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `twitter_id` varchar(100) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `google_id` varchar(100) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `id_country` int(11) DEFAULT NULL,
  `id_gender` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=3 ;

--
-- Odloži podatke za tabelo `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`, `active`, `name`, `surname`, `birth_day`, `guid`, `fb_id`, `twitter_id`, `google_id`, `id_country`, `id_gender`) VALUES
(2, 'blue.angel.770@gmail.com', 'e65cf99ae53e2c447ef50aba6fceb3d4d468bbfea19a4a43c2c3b1a4cb2af355c18b71c6b0a4aeef90609cee03b6a13baf562dfb56eeb25d26e5252377ab64ca', '1', 'klemen', 'brodej', '1996-07-25', 'DFBB3447-B811-CD1E-0896-F4F3A00C04DC', NULL, NULL, NULL, 200, 1);

-- --------------------------------------------------------

--
-- Struktura tabele `user_logs`
--

CREATE TABLE IF NOT EXISTS `user_logs` (
  `id_log` int(11) NOT NULL,
  `page` varchar(250) COLLATE utf8_slovenian_ci NOT NULL,
  `date` date NOT NULL,
  `time` varchar(25) COLLATE utf8_slovenian_ci NOT NULL,
  `ip` varchar(64) COLLATE utf8_slovenian_ci NOT NULL,
  `Attribute4` char(20) COLLATE utf8_slovenian_ci NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Odloži podatke za tabelo `user_logs`
--

INSERT INTO `user_logs` (`id_log`, `page`, `date`, `time`, `ip`, `Attribute4`, `id_user`) VALUES
(0, '/cvLocal/main.php', '2015-05-08', '05:44:19', '::1', '', 2),
(0, '/cvLocal/main.php', '2015-05-08', '05:44:41', '::1', '', 2),
(0, '/cvLocal/cv_addMoreLanugagesPickCv.php', '2015-05-08', '05:44:46', '::1', '', 2),
(0, '/cvLocal/cv_type.php', '2015-05-08', '05:44:49', '::1', '', 2),
(0, '/cvLocal/cv_FirstPart.php?cv_name=Moj+prvi+CV&type=2', '2015-05-08', '05:44:52', '::1', '', 2),
(0, '/cvLocal/main.php', '2015-05-08', '05:46:44', '::1', '', 2),
(0, '/cvLocal/cv_Mid.php', '2015-05-08', '05:46:48', '::1', '', 2),
(0, '/cvLocal/cv_Language.php?cv_name=Moj%20prvi%20CV&part=fp&type=2', '2015-05-08', '05:46:49', '::1', '', 2),
(0, '/cvLocal/cv_Language.php?cv_name=Moj%20prvi%20CV&part=fp&type=2', '2015-05-08', '05:46:55', '::1', '', 2),
(0, '/cvLocal/cv_Language.php?cv_name=Moj%20prvi%20CV&part=fp&type=2', '2015-05-08', '05:47:46', '::1', '', 2),
(0, '/cvLocal/cv_Language.php?cv_name=Moj%20prvi%20CV&part=fp&type=2', '2015-05-08', '05:54:21', '::1', '', 2),
(0, '/cvLocal/main.php', '2015-05-08', '05:54:23', '::1', '', 2),
(0, '/cvLocal/main.php', '2015-05-08', '05:54:25', '::1', '', 2),
(0, '/cvLocal/main.php', '2015-05-08', '05:54:26', '::1', '', 2),
(0, '/cvLocal/main.php', '2015-05-08', '05:55:43', '::1', '', 2),
(0, '/cvLocal/main.php', '2015-05-08', '05:55:54', '::1', '', 2),
(0, '/cvLocal/main.php', '2015-05-08', '05:56:14', '::1', '', 2),
(0, '/cvLocal/cv_addMoreLanugagesPickCv.php', '2015-05-08', '05:56:18', '::1', '', 2),
(0, '/cvLocal/cv_addMoreLanguages.php?additional=1&id_cv2=1', '2015-05-08', '05:56:19', '::1', '', 2),
(0, '/cvLocal/cv_menu.php', '2015-05-08', '05:56:43', '::1', '', 2),
(0, '/cvLocal/main.php', '2015-05-08', '05:57:17', '::1', '', 2),
(0, '/cvLocal/main.php', '2015-05-08', '05:57:28', '::1', '', 2),
(0, '/cvLocal/cv_type.php', '2015-05-08', '05:57:30', '::1', '', 2),
(0, '/cvLocal/cv_FirstPart.php?cv_name=123&type=1', '2015-05-08', '05:57:32', '::1', '', 2),
(0, '/cvLocal/cv_Mid.php', '2015-05-08', '05:57:43', '::1', '', 2),
(0, '/cvLocal/cv_Language.php?cv_name=123&part=fp&type=1', '2015-05-08', '05:57:44', '::1', '', 2),
(0, '/cvLocal/main.php', '2015-05-08', '06:00:30', '192.168.1.7', '', 2),
(0, '/cvLocal/cv_addMoreLanugagesPickCv.php', '2015-05-08', '06:00:38', '192.168.1.7', '', 2),
(0, '/cvLocal/cv_addMoreLanguages.php?additional=1&id_cv2=2', '2015-05-08', '06:00:41', '192.168.1.7', '', 2),
(0, '/cvLocal/cv_menu.php', '2015-05-08', '06:00:42', '192.168.1.7', '', 2),
(0, '/cvLocal/cv_type.php', '2015-05-08', '06:02:16', '192.168.1.7', '', 2),
(0, '/cvLocal/cv_FirstPart.php?cv_name=265&type=2', '2015-05-08', '06:02:21', '192.168.1.7', '', 2),
(0, '/cvLocal/cv_Mid.php?part=lang', '2015-05-08', '06:09:48', '::1', '', 2),
(0, '/cvLocal/cv_ThirdPart.php?cv_name=123&part=lang&type=1', '2015-05-08', '06:09:50', '::1', '', 2),
(0, '/cvLocal/cv_ThirdPart.php?cv_name=123&part=lang&type=1', '2015-05-08', '06:10:01', '::1', '', 2),
(0, '/cvLocal/cv_menu.php?last_cv_name=123&last_cv_id=2', '2015-05-08', '06:16:51', '::1', '', 2),
(0, '/cvLocal/main.php', '2015-05-08', '06:17:01', '::1', '', 2),
(0, '/cvLocal/main.php', '2015-05-08', '06:17:10', '::1', '', 2),
(0, '/index.php', '2015-05-08', '06:23:11', '188.230.194.99', '', 1),
(0, '/main.php', '2015-05-08', '06:23:16', '188.230.194.99', '', 1),
(0, '/cv_type.php', '2015-05-08', '06:23:18', '188.230.194.99', '', 1),
(0, '/cv_FirstPart.php?cv_name=Moj+prvi+CV&type=2', '2015-05-08', '06:23:22', '188.230.194.99', '', 1),
(0, '/cv_Mid.php', '2015-05-08', '06:23:37', '188.230.194.99', '', 1),
(0, '/cv_Language.php?cv_name=Moj%20prvi%20CV&part=fp&type=2', '2015-05-08', '06:23:38', '188.230.194.99', '', 1),
(0, '/cv_Mid.php', '2015-05-08', '06:23:44', '188.230.194.99', '', 1),
(0, '/cv_ThirdPart.php?cv_name=Moj%20prvi%20CV&part=lang&type=2', '2015-05-08', '06:23:45', '188.230.194.99', '', 1),
(0, '/cv_menu.php?last_cv_name=Moj%20prvi%20CV&last_cv_id=3', '2015-05-08', '06:27:47', '188.230.194.99', '', 1),
(0, '/cv_ThirdPart.php?cv_name=Moj%20prvi%20CV&part=lang&type=2', '2015-05-08', '06:28:20', '188.230.194.99', '', 1),
(0, '/cv_ThirdPart.php?cv_name=Moj%20prvi%20CV&part=lang&type=2', '2015-05-08', '06:29:03', '188.230.194.99', '', 1),
(0, '/cv_menu.php?last_cv_name=Moj%20prvi%20CV&last_cv_id=3', '2015-05-08', '06:29:19', '188.230.194.99', '', 1),
(0, '/cv_ThirdPart.php?cv_name=Moj%20prvi%20CV&part=lang&type=2', '2015-05-08', '06:29:30', '188.230.194.99', '', 1),
(0, '/index.php', '2015-05-08', '06:36:40', '188.230.194.99', '', 1),
(0, '/cv_type.php', '2015-05-08', '06:36:42', '188.230.194.99', '', 1),
(0, '/cv_FirstPart.php?cv_name=123&type=1', '2015-05-08', '06:36:44', '188.230.194.99', '', 1),
(0, '/cv_Mid.php', '2015-05-08', '06:36:57', '188.230.194.99', '', 1),
(0, '/cv_Language.php?cv_name=123&part=fp&type=1', '2015-05-08', '06:36:59', '188.230.194.99', '', 1),
(0, '/cv_Mid.php?part=lang', '2015-05-08', '06:37:00', '188.230.194.99', '', 1),
(0, '/cv_ThirdPart.php?cv_name=123&part=lang&type=1', '2015-05-08', '06:37:01', '188.230.194.99', '', 1),
(0, '/cv_type.php', '2015-05-08', '06:37:15', '188.230.194.99', '', 1),
(0, '/cv_FirstPart.php?cv_name=123123&type=2', '2015-05-08', '06:37:17', '188.230.194.99', '', 1),
(0, '/cv_FirstPart.php?cv_name=123123&type=2', '2015-05-08', '06:37:43', '188.230.194.99', '', 1),
(0, '/cv_Mid.php', '2015-05-08', '06:38:00', '188.230.194.99', '', 1),
(0, '/cv_Language.php?cv_name=123123&part=fp&type=2', '2015-05-08', '06:38:02', '188.230.194.99', '', 1),
(0, '/cv_Mid.php', '2015-05-08', '06:38:03', '188.230.194.99', '', 1),
(0, '/cv_ThirdPart.php?cv_name=123123&part=lang&type=2', '2015-05-08', '06:38:04', '188.230.194.99', '', 1),
(0, '/cv_ThirdPart.php?cv_name=123123&part=lang&type=2', '2015-05-08', '06:38:22', '188.230.194.99', '', 1),
(0, '/cv_ThirdPart.php?cv_name=123123&part=lang&type=2', '2015-05-08', '06:38:42', '188.230.194.99', '', 1),
(0, '/cv_menu.php?last_cv_name=123123&last_cv_id=5', '2015-05-08', '06:39:15', '188.230.194.99', '', 1),
(0, '/cv_AddtoWhich.php?choice=work', '2015-05-08', '06:39:33', '188.230.194.99', '', 1),
(0, '/cv_WorkExp.php', '2015-05-08', '06:39:35', '188.230.194.99', '', 1),
(0, '/cv_menu.php', '2015-05-08', '06:39:41', '188.230.194.99', '', 1),
(0, '/cv_AddtoWhich.php?choice=edu', '2015-05-08', '06:39:43', '188.230.194.99', '', 1),
(0, '/cv_EduTraining.php', '2015-05-08', '06:39:44', '188.230.194.99', '', 1),
(0, '/cv_menu.php', '2015-05-08', '06:42:01', '188.230.194.99', '', 1),
(0, '/cv_addMoreLanugagesPickCv.php', '2015-05-08', '06:42:04', '188.230.194.99', '', 1),
(0, '/cv_addMoreLanguages.php?additional=1&id_cv2=5', '2015-05-08', '06:42:05', '188.230.194.99', '', 1),
(0, '/cv_menu.php', '2015-05-08', '06:42:06', '188.230.194.99', '', 1),
(0, '/main.php', '2015-05-08', '06:42:08', '188.230.194.99', '', 1),
(0, '/main.php', '2015-05-08', '06:42:31', '188.230.194.99', '', 1),
(0, '/cv_AddtoWhich.php?choice=work', '2015-05-08', '06:42:34', '188.230.194.99', '', 1),
(0, '/cv_WorkExp.php', '2015-05-08', '06:42:35', '188.230.194.99', '', 1),
(0, '/cv_menu.php', '2015-05-08', '06:42:47', '188.230.194.99', '', 1),
(0, '/main.php', '2015-05-08', '06:42:50', '188.230.194.99', '', 1),
(0, '/main.php', '2015-05-08', '06:44:43', '188.230.194.99', '', 1),
(0, '/main.php', '2015-05-08', '06:44:44', '188.230.194.99', '', 1),
(0, '/cv_AddtoWhich.php?choice=work', '2015-05-08', '07:43:00', '188.230.194.99', '', 1),
(0, '/cv_WorkExp.php', '2015-05-08', '07:43:02', '188.230.194.99', '', 1),
(0, '/main.php', '2015-05-08', '07:45:08', '188.230.194.99', '', 1),
(0, '/main.php', '2015-05-08', '07:56:29', '188.230.194.99', '', 1),
(0, '/cv_menu.php', '2015-05-08', '07:56:45', '188.230.194.99', '', 1),
(0, '/main.php', '2015-05-08', '07:56:52', '188.230.194.99', '', 1),
(0, '/main.php', '2015-05-08', '08:16:48', '188.230.194.99', '', 2),
(0, '/cv_type.php', '2015-05-08', '08:17:09', '188.230.194.99', '', 2),
(0, '/cv_FirstPart.php?cv_name=123&type=2', '2015-05-08', '08:17:12', '188.230.194.99', '', 2),
(0, '/cv_Mid.php', '2015-05-08', '08:17:30', '188.230.194.99', '', 2),
(0, '/cv_Language.php?cv_name=123&part=fp&type=2', '2015-05-08', '08:17:31', '188.230.194.99', '', 2),
(0, '/cv_Mid.php', '2015-05-08', '08:17:33', '188.230.194.99', '', 2),
(0, '/cv_ThirdPart.php?cv_name=123&part=lang&type=2', '2015-05-08', '08:17:34', '188.230.194.99', '', 2),
(0, '/cv_Mid.php', '2015-05-08', '08:18:37', '188.230.194.99', '', 2),
(0, '/cv_Language.php?cv_name=123&part=fp&type=2', '2015-05-08', '08:18:37', '188.230.194.99', '', 2),
(0, '/cv_Mid.php', '2015-05-08', '08:18:39', '188.230.194.99', '', 2),
(0, '/cv_FirstPart.php?cv_name=123&type=2', '2015-05-08', '08:18:40', '188.230.194.99', '', 2),
(0, '/cv_Mid.php', '2015-05-08', '08:20:20', '188.230.194.99', '', 2),
(0, '/cv_Language.php?cv_name=123&part=fp&type=2', '2015-05-08', '08:23:12', '188.230.194.99', '', 2),
(0, '/cv_Mid.php', '2015-05-08', '08:24:43', '188.230.194.99', '', 2),
(0, '/cv_ThirdPart.php?cv_name=123&part=lang&type=2', '2015-05-08', '08:24:44', '188.230.194.99', '', 2),
(0, '/cv_menu.php?last_cv_name=123&last_cv_id=7', '2015-05-08', '08:24:47', '188.230.194.99', '', 2),
(0, '/cv_AddtoWhich.php?choice=work', '2015-05-08', '08:28:08', '188.230.194.99', '', 2),
(0, '/main.php', '2015-05-08', '08:30:15', '188.230.194.99', '', 2),
(0, '/main.php', '2015-05-08', '08:31:01', '188.230.194.99', '', 2),
(0, '/main.php', '2015-05-08', '08:31:05', '188.230.194.99', '', 2),
(0, '/main.php', '2015-05-08', '08:31:07', '188.230.194.99', '', 2),
(0, '/main.php', '2015-05-08', '08:31:10', '188.230.194.99', '', 2),
(0, '/main.php', '2015-05-08', '08:31:16', '188.230.194.99', '', 2),
(0, '/error.php', '2015-05-08', '08:31:22', '188.230.194.99', '', 2),
(0, '/login.php', '2015-05-08', '08:31:25', '188.230.194.99', '', 2),
(0, '/main.php', '2015-05-08', '08:31:28', '188.230.194.99', '', 2),
(0, '/main.php', '2015-05-08', '08:31:29', '188.230.194.99', '', 2),
(0, '/cv_type.php', '2015-05-08', '08:31:31', '188.230.194.99', '', 2),
(0, '/cv_FirstPart.php?cv_name=Moj2&type=2', '2015-05-08', '08:31:36', '188.230.194.99', '', 2),
(0, '/cv_Mid.php', '2015-05-08', '08:32:01', '188.230.194.99', '', 2),
(0, '/cv_Language.php?cv_name=Moj2&part=fp&type=2', '2015-05-08', '08:32:03', '188.230.194.99', '', 2),
(0, '/cv_Mid.php', '2015-05-08', '08:32:14', '188.230.194.99', '', 2),
(0, '/cv_ThirdPart.php?cv_name=Moj2&part=lang&type=2', '2015-05-08', '08:32:15', '188.230.194.99', '', 2),
(0, '/cv_menu.php?last_cv_name=Moj2&last_cv_id=8', '2015-05-08', '08:32:35', '188.230.194.99', '', 2),
(0, '/cv_addMoreLanugagesPickCv.php', '2015-05-08', '08:32:39', '188.230.194.99', '', 2),
(0, '/cv_addMoreLanguages.php?additional=1&id_cv2=8', '2015-05-08', '08:32:41', '188.230.194.99', '', 2),
(0, '/cv_menu.php', '2015-05-08', '08:32:56', '188.230.194.99', '', 2),
(0, '/cv_AddtoWhich.php?choice=work', '2015-05-08', '08:32:58', '188.230.194.99', '', 2),
(0, '/cv_menu.php', '2015-05-08', '08:32:59', '188.230.194.99', '', 2),
(0, '/cv_AddtoWhich.php?choice=edu', '2015-05-08', '08:33:00', '188.230.194.99', '', 2),
(0, '/cv_EduTraining.php', '2015-05-08', '08:33:02', '188.230.194.99', '', 2),
(0, '/cv_menu.php', '2015-05-08', '08:33:58', '188.230.194.99', '', 2),
(0, '/main.php', '2015-05-08', '08:34:00', '188.230.194.99', '', 2);

--
-- Indeksi zavrženih tabel
--

--
-- Indeksi tabele `country`
--
ALTER TABLE `country`
 ADD PRIMARY KEY (`id_country`);

--
-- Indeksi tabele `cv`
--
ALTER TABLE `cv`
 ADD PRIMARY KEY (`id_cv`), ADD KEY `IX_Relationship14` (`id_user`), ADD KEY `IX_Relationship23` (`id_cv_type`);

--
-- Indeksi tabele `cv_answers`
--
ALTER TABLE `cv_answers`
 ADD PRIMARY KEY (`id_cv_answer`), ADD KEY `IX_Relationship8` (`id_cv_question`), ADD KEY `IX_Relationship15` (`id_cv`);

--
-- Indeksi tabele `cv_answer_languages`
--
ALTER TABLE `cv_answer_languages`
 ADD PRIMARY KEY (`id_cv_language`), ADD KEY `IX_Relationship10` (`id_cv_language_levels`), ADD KEY `IX_Relationship19` (`id_cv`), ADD KEY `IX_Relationship20` (`id_language`);

--
-- Indeksi tabele `cv_education`
--
ALTER TABLE `cv_education`
 ADD PRIMARY KEY (`cv_id_education`), ADD KEY `IX_Relationship21` (`id_cv`);

--
-- Indeksi tabele `cv_languages_levels`
--
ALTER TABLE `cv_languages_levels`
 ADD PRIMARY KEY (`id_cv_language_levels`);

--
-- Indeksi tabele `cv_questions`
--
ALTER TABLE `cv_questions`
 ADD PRIMARY KEY (`id_cv_questions`), ADD KEY `IX_Relationship7` (`id_cv_type`);

--
-- Indeksi tabele `cv_type`
--
ALTER TABLE `cv_type`
 ADD PRIMARY KEY (`id_cv_type`);

--
-- Indeksi tabele `cv_work_experience`
--
ALTER TABLE `cv_work_experience`
 ADD PRIMARY KEY (`id_cv_work_experience`), ADD KEY `IX_Relationship22` (`id_cv`);

--
-- Indeksi tabele `gender`
--
ALTER TABLE `gender`
 ADD PRIMARY KEY (`id_gender`);

--
-- Indeksi tabele `languages`
--
ALTER TABLE `languages`
 ADD PRIMARY KEY (`id_language`);

--
-- Indeksi tabele `security_answer`
--
ALTER TABLE `security_answer`
 ADD PRIMARY KEY (`id_sec_answer`), ADD KEY `IX_Relationship2` (`id_user`), ADD KEY `IX_Relationship3` (`id_security_question`);

--
-- Indeksi tabele `security_question`
--
ALTER TABLE `security_question`
 ADD PRIMARY KEY (`id_security_question`);

--
-- Indeksi tabele `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`), ADD KEY `IX_Relationship4` (`id_country`), ADD KEY `IX_Relationship5` (`id_gender`);

--
-- AUTO_INCREMENT zavrženih tabel
--

--
-- AUTO_INCREMENT tabele `country`
--
ALTER TABLE `country`
MODIFY `id_country` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=251;
--
-- AUTO_INCREMENT tabele `cv`
--
ALTER TABLE `cv`
MODIFY `id_cv` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT tabele `cv_answers`
--
ALTER TABLE `cv_answers`
MODIFY `id_cv_answer` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=222;
--
-- AUTO_INCREMENT tabele `cv_answer_languages`
--
ALTER TABLE `cv_answer_languages`
MODIFY `id_cv_language` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT tabele `cv_education`
--
ALTER TABLE `cv_education`
MODIFY `cv_id_education` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT tabele `cv_languages_levels`
--
ALTER TABLE `cv_languages_levels`
MODIFY `id_cv_language_levels` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT tabele `cv_questions`
--
ALTER TABLE `cv_questions`
MODIFY `id_cv_questions` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT tabele `cv_type`
--
ALTER TABLE `cv_type`
MODIFY `id_cv_type` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT tabele `cv_work_experience`
--
ALTER TABLE `cv_work_experience`
MODIFY `id_cv_work_experience` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT tabele `gender`
--
ALTER TABLE `gender`
MODIFY `id_gender` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT tabele `languages`
--
ALTER TABLE `languages`
MODIFY `id_language` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=108;
--
-- AUTO_INCREMENT tabele `security_answer`
--
ALTER TABLE `security_answer`
MODIFY `id_sec_answer` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT tabele `security_question`
--
ALTER TABLE `security_question`
MODIFY `id_security_question` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT tabele `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Omejitve tabel za povzetek stanja
--

--
-- Omejitve za tabelo `cv`
--
ALTER TABLE `cv`
ADD CONSTRAINT `Relationship14` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `Relationship23` FOREIGN KEY (`id_cv_type`) REFERENCES `cv_type` (`id_cv_type`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Omejitve za tabelo `cv_answers`
--
ALTER TABLE `cv_answers`
ADD CONSTRAINT `Relationship15` FOREIGN KEY (`id_cv`) REFERENCES `cv` (`id_cv`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `Relationship8` FOREIGN KEY (`id_cv_question`) REFERENCES `cv_questions` (`id_cv_questions`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Omejitve za tabelo `cv_answer_languages`
--
ALTER TABLE `cv_answer_languages`
ADD CONSTRAINT `Relationship10` FOREIGN KEY (`id_cv_language_levels`) REFERENCES `cv_languages_levels` (`id_cv_language_levels`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `Relationship19` FOREIGN KEY (`id_cv`) REFERENCES `cv` (`id_cv`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `Relationship20` FOREIGN KEY (`id_language`) REFERENCES `languages` (`id_language`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Omejitve za tabelo `cv_education`
--
ALTER TABLE `cv_education`
ADD CONSTRAINT `Relationship21` FOREIGN KEY (`id_cv`) REFERENCES `cv` (`id_cv`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Omejitve za tabelo `cv_questions`
--
ALTER TABLE `cv_questions`
ADD CONSTRAINT `Relationship7` FOREIGN KEY (`id_cv_type`) REFERENCES `cv_type` (`id_cv_type`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Omejitve za tabelo `cv_work_experience`
--
ALTER TABLE `cv_work_experience`
ADD CONSTRAINT `Relationship22` FOREIGN KEY (`id_cv`) REFERENCES `cv` (`id_cv`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Omejitve za tabelo `security_answer`
--
ALTER TABLE `security_answer`
ADD CONSTRAINT `Relationship2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `Relationship3` FOREIGN KEY (`id_security_question`) REFERENCES `security_question` (`id_security_question`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Omejitve za tabelo `user`
--
ALTER TABLE `user`
ADD CONSTRAINT `Relationship4` FOREIGN KEY (`id_country`) REFERENCES `country` (`id_country`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `Relationship5` FOREIGN KEY (`id_gender`) REFERENCES `gender` (`id_gender`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
