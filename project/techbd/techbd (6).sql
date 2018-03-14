-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2018 at 06:04 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `b_id` int(10) NOT NULL,
  `b_name` varchar(10) NOT NULL,
  `img_name` varchar(50) NOT NULL,
  `img_path` varchar(50) NOT NULL,
  `img_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`b_id`, `b_name`, `img_name`, `img_path`, `img_type`) VALUES
(10, 'gegeg', 'banner-intro.jpg', 'prodimg/banner-intro.jpg', 'image/jpeg'),
(11, 'gegeghhh', 'Website-Inner-Ban.jpg', 'prodimg/Website-Inner-Ban.jpg', 'image/jpeg'),
(14, 'afssaf', 'techbd.jpg', 'prodimg/techbd.jpg', 'image/jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `cm_id` int(10) NOT NULL,
  `comment` varchar(2000) NOT NULL,
  `np_id` varchar(10) NOT NULL,
  `cu_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`cm_id`, `comment`, `np_id`, `cu_name`) VALUES
(13, 'product is so good\r\n', '30', 'Amrita'),
(14, 'sdf', '35', 'sd'),
(15, 'sdf', '35', 'sdfs'),
(16, '', '31', ''),
(17, 'This product is so good', '60', 'Amrita'),
(18, 'This Product is so good for users... \r\n', '62', 'Abul'),
(19, 'so good', '63', 'amrita'),
(20, 'Price is good enough ', '62', 'Roy');

-- --------------------------------------------------------

--
-- Table structure for table `eprodinfo`
--

CREATE TABLE `eprodinfo` (
  `ep_id` int(12) NOT NULL,
  `cu_id` varchar(12) NOT NULL,
  `ep_name` varchar(30) NOT NULL,
  `ep_condition` varchar(30) NOT NULL,
  `ep_brand` varchar(30) NOT NULL,
  `ep_model` varchar(30) NOT NULL,
  `ep_authentication` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `ep_want` varchar(30) NOT NULL,
  `img_name` varchar(50) NOT NULL,
  `img_path` varchar(100) NOT NULL,
  `img_type` varchar(30) NOT NULL,
  `ep_category` varchar(10) NOT NULL,
  `ep_desc` varchar(2000) NOT NULL,
  `p_image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eprodinfo`
--

INSERT INTO `eprodinfo` (`ep_id`, `cu_id`, `ep_name`, `ep_condition`, `ep_brand`, `ep_model`, `ep_authentication`, `contact`, `ep_want`, `img_name`, `img_path`, `img_type`, `ep_category`, `ep_desc`, `p_image`) VALUES
(15, '12', 'Tv', 'old', 'Samsung', 'Samsung J5008 ', 'Original', '45545', 'Mobile Samsung ', '', '', '', 'electronic', 'Vibrant color with better qualityWide Color Enhancer using advance level of picture quality impr', '836041.png'),
(16, '12', 'Tv', 'old', 'Samsung', 'Samsung J5008', 'Original', '545454', 'Mobile Samsung', '', '', '', 'other', 'Screen-Size 43 Inches Screen-Type LED Display-Resolution 1920 Ã— 1080 Speaker-Type 2CH(Dow', '784152.png'),
(17, '12', 'Mobile', 'old', 'Samsung', 'Samsung j2', 'Original', '4545454', 'tv', '', '', '', 'mobile', 'Technology GSM / HSPA / LTELaunch Announced 2018, JanuaryStatus Available. Released 2018,', '269255.jpg'),
(19, '19', 'Samsung core2', 'old', 'samsung', 'core2', 'Original', '12345', 'Samsung mobile', '', '', '', 'pc hardwar', 'Network Scope	2G, 3G\r\nBattery Type & Performance	Lithium-ion 2000 mAh\r\nBody & Weight	130.3 x 68 x 9.8 millimeter, 138 grams\r\nCamera Factors (Back)	2592 x 1944 pixels, autofocus, LED flash, auto face & smile recognition\r\nCamera Resolution (Back)	5 Megapixel\r\nCamera Resolution (Front)	0.3 Megapixel (VGA)\r\nColors Available	White, Black\r\nDisplay Size & Resolution	4.7 inches, WVGA 480 x 800 pixels (207 ppi)\r\nDisplay Type	TFT Touchscreen\r\nMemory Card Slot	MicroSD, up to 64 GB\r\nOperating System	Android KitKat v4.4.2\r\nProcessor	Quad-core, 1.2 GHz', '251451.jpg'),
(20, '19', 'Samsung Galaxy Y', 'old', 'samsung', 'Galaxy Y', 'Original', '12345', 'Samsung mobile', '', '', '', 'mobile', '2G Network	GSM 850 / 900 / 1800 / 1900 - SIM 1 & SIM 2\r\n3.5 mm Jack	Yes\r\n3G Network	HSDPA 900 / 2100 - GT-S6102 (SIM 1 & SIM 2)\r\nHSDPA 850 / 2100 - GT-S6102B (SIM 1 & SIM 2)\r\nAlert types	Vibration; MP3 ringtones\r\nBattery Performance	Stand-by: Up to 360 h\r\nTalk time: Up to 9 h\r\nBattery Type	Li-Ion 1300 mAh battery\r\nBluetooth	v3.0 with A2DP\r\nCamera Features	Geo-tagging\r\nCamera Pixel	2048 x 1536\r\nCamera Resolution	3.15 Megapixel', '559584.jpg'),
(21, '19', 'Samsung Galaxy S ', 'old', 'samsung', 'Galaxy S 2', 'Original', '3243242', 'Nokia Phone', '', '', '', 'mobile', '\r\n3.5mm Jack	Yes\r\n3G Network	HSDPA 900 / 2100 - SIM 1 & SIM 2\r\nAlert types	Vibration; MP3, WAV ringtones\r\nBattery Performance	Stand-by: Up to 445 h (2G) / Up to 330 h (3G)\r\nTalk time: Up to 13 h (2G) / Up to 7 h 25 min (3G)\r\nBattery Type	Li-Ion 1500 mAh battery\r\nBluetooth	v3.0 with A2DP\r\nCamera Features	autofocus, LED flash, Geo-tagging\r\nCamera Pixel	2592 x 1944 pixels\r\nCamera Resolution	5 Megapixel\r\nChipset	Qualcomm MSM7227A Snapdragon\r\nColors Available	White, Black, La Fleur\r\nData Speed	HSDPA, 7.2 Mb', '292791.jpg'),
(22, '19', 'Symphony V130', 'old', 'Symphony', 'V130', 'Original', '23423423', 'RAM', '', '', '', 'mobile', '\r\nStand-by: up to 220 hours\r\nTalk-time: up to 7 hours\r\nBody & Weight	147 x 70.8 x 9.25 millimeter, 154.5 grams\r\nCamera Factors (Back)	Flashlight, up to 4x zoom, Samsung sensor, f/2.2 aperture, fisheye mode, face beauty\r\nCamera Resolution (Back)	5 Megapixel\r\nCamera Resolution (Front)	5 Megapixel (Samsung sensor, f/2.2 aperture)\r\nColors Available	Gold, Dark Blue, Matte Black\r\nDisplay Size & Resolution	5.34 inches, FWVGA+ 854 x 480 pixels (201 ppi)\r\nDisplay Type	TN Touchscreen\r\nGraphic Processing Unit (GPU)	Mali 400 MP2\r\nMemory Card Slot	MicroSD, up to 32 GB\r\nOperating System	Android Nougat v7.0\r\nProcessor	Quad-Core, 1.3 GHz\r\nRAM', '133710.jpg'),
(23, '19', 'Symphony V75m', 'old', 'Symphony', 'V75m', 'Original', '12321', 'Nokia Phone', '', '', '', 'mobile', '\r\nStand-by: up to 340 hours\r\nTalk-time: up to 10 hours\r\nBody & Weight	143.75 x 71.5 x 9.2 millimeter, 163 grams\r\nCamera Factors (Back)	Flashlight, up to 4x zoom, GalaxyCore sensor, f/2.0 aperture\r\nCamera Resolution (Back)	5 Megapixel\r\nCamera Resolution (Front)	5 Megapixel (GalaxyCore sensor, f/2.2 aperture)\r\nColors Available	Black, Dark Blue / Black, Gold\r\nDisplay Size & Resolution	5.0 inches, FWVGA 854 x 480 pixels (196 ppi)\r\nDisplay Type	TN Touchscreen\r\nGraphic Processing Unit (GPU)	Mali 400\r\nMemory Card Slot	MicroSD, up to 32 GB\r\nOperating System	Android Nougat v7.0\r\nProcessor	Quad-Core, 1.3 GHz', '466537.jpg'),
(24, '19', 'HP 14-bw066AU', 'old', 'HP', '14-bw066AU', 'Original', '23342353', 'Samsung mobile', '', '', '', 'pc hardwar', 'Processor	AMD Dual-Core E2-9000e (1.5 GHz base frequency, up to 2 GHz burst frequency, 1 MB cache)\r\nMemory	4 GB DDR4-1866 SDRAM (1 x 4 GB)\r\nStorage	500 GB 5400 rpm SATA\r\nGraphics	AMD Radeonâ„¢ R2 Graphics\r\nDisplay	14" diagonal HD SVA BrightView WLED-backlit (1366 x 768)\r\nAudio	Dual speakers\r\nWeb Camera	HP TrueVision HD Camera with integrated digital microphone\r\nOptical Drive	SuperMulti DVD burner\r\nNetworking	Wireless connectivity IntelÂ® 802.11a/b/g/n/ac (1x1) Wi-FiÂ® and BluetoothÂ® 4.2 Combo Network interface Integrated 10/100/1000 GbE LAN 1 USB 2.0; 1 HDMI; 1 VGA; 1 RJ-45; 1 headphone/microphone combo; 2 USB 3.1 Gen 1 (Data transfer only)\r\nBattery	4-cell, 41 Wh Li-ion', '825005.jpg'),
(25, '19', 'HP 15-bs520tu ', 'old', 'HP', '15-bs520tu', 'Original', '342432', 'Samsung mobile', '', '', '', 'pc hardwar', 'Laptop & Notebook\r\nProcessor	IntelÂ® PentiumÂ® N3710 (1.6 GHz base frequency, up to 2.56 GHz burst frequency, 2 MB cache, 4 cores)\r\nMemory	4 GB DDR3L-1600 SDRAM (1 x 4 GB)\r\nStorage	500 GB 5400 rpm SATA\r\nGraphics	IntelÂ® HD Graphics 405\r\nDisplay	15.6" diagonal HD SVA BrightView WLED-backlit (1366 x 768)\r\nAudio	DTS Studio Soundâ„¢; Dual speakers\r\nWeb Camera	HP TrueVision HD Camera with integrated digital microphone\r\nOptical Drive	DVD-Writer\r\nNetworking	Integrated 10/100/1000 GbE LAN\r\nInterface	Integrated 10/100/1000 GbE LAN Expansion slots 1 multi-format SD media card reader External ports 2 USB 3.1 Gen 1 (Data transfer only); 1 USB 2.0; 1 HDMI; 1 RJ-45; 1 headphone/microphone combo; 1 VGA\r\nBattery	4-cell, 41 Wh Li-ion\r\nOperating system	FreeDOS 2.0\r\nManufacturer Warranty	01 Year international Warranty', '471141.jpg'),
(26, '19', 'Dell OptiPlex 3050', 'old', 'Dell', 'OptiPlex 3050', 'Original', '12413', 'Laptop', '', '', '', 'pc hardwar', 'Model 	OptiPlex 3050 MFF\r\nMicro Form factor\r\nType 	Desktop\r\nProcessor 	7th Generation Intel Core i3-7100T\r\nProcessor Speed 	3MB Cache, 3.40 GHz\r\nRAM 	4GB (1x4G) 2400MHz DDR4L Memory, 2 DIMM slots\r\nStorage 	500GB 7200 RPM 2.5" SATA Hard Drive\r\nMonitor 	Dell Monitor E1916H\r\nGraphics card 	Integrated Intel HD Graphics\r\nChipSet 	Intel B250 Chipset\r\nI/O Ports 	6 External USB: 4 x 3.1 (2 front/2 rear) and 4 x 2.0 (2 rear);\r\n1 RJ-45;1 Display Port 1.2; 1 UAJ, 1 Line-out; 1 HDMI 1.4;\r\nI/O Slots 	1 full height PCIe x16, 3 full height PCIe x1\r\nBays 	1 internal 3.5â€ 2 internal 2.5â€, 1 external 5.25â€\r\nKeyboard 	Dell KB216 Wired Black Business Keyboard (English)\r\nMouse 	Dell Optical Mouse-MS116 - Black\r\nPower Supply 	Standard 240W PSU\r\nOperating system 	DOS Factory Installed (English)', '845431.jpg'),
(27, '19', 'Dell Vostro', 'new', 'Dell', 'Vostro 3668', 'Original', '23423', 'Samsung mobile', '', '', '', 'pc hardwar', 'Dell vostro 3668 mini tower brand PC has Intel core i5 7400 processor, Intel H110 chipset, 4 GB DDR4L RAM, 1 TB hard drive, DVD+/-RW, Dell 18.5 inch wide screen monitor, Dell optical mouse and keyboard, Intel HD graphics 530, 2 USB 3.0, universal audio jack, 4 USB 2.0, RJ-45, HDMI, VGA, 3-stack audio jacks supporting 5.1 surround sound, 2 PCIe x 1, 1 PCIe x 16.', '297791.jpg'),
(28, '19', 'Dell Optiplex ', 'old', 'Dell', '3040MT', 'Original', '34234353', 'Laptop', '', '', '', 'pc hardwar', 'Dell optiplex 3040MT brand PC has Intel core i5 6th generation processor, 4GB desktop memory, 500GB hard disk, Intel HD graphics card, Intel chipset, 18.5 inch Dell monitor, DVD R/W, Dell USB optical mouse and keyboard.', '542450.jpg'),
(29, '19', ' 	Sony Bravia ', 'old', 'Sony', '3040MT', 'Original', '23324', 'Laptop', '', '', '', 'electronic', ' Screen Size\r\n	40 Inch\r\nPanel\r\n	Flat\r\nResolution\r\n	Full HD 1920 x 1080\r\nTechnology\r\n	Direct LED\r\n3D Technology\r\n	3D\r\nRefresh Rate\r\n	Motionflow XR 100 Hz\r\nContrast\r\n	Dynamic Contrast Enhancer\r\nBrightness\r\n	Live Color\r\nTV Tuner\r\n	Analog and Digital\r\nSound\r\n	5 W + 5 W Open Baffle Speaker, Dolby Digital\r\nConnectivity\r\n	USB, HDMI, RF, AVI\r\nRemote\r\n	Yes\r\nDimension\r\n	924 x 550 x 65 mm\r\nOther Features\r\n	FM Radio', '172124.jpg'),
(30, '19', 'Dell OptiPlex', 'old', 'Dell', '15-bs520tu', 'Original', '343432', 'Laptop', '', '', '', 'pc hardwar', ' Processor Type Intel Core i5-6500 Main Board Intel H110 Chipset Monitor Dell 18.5" LED RAM 4GB DDR3 1600MHz Hard Disk 500GB 7200 RPM Disk Type HDD Graphics Card Intel HD Graphics 530 Optical Drive DVD R/W Networking Integrated Realtek RTL8151GD, Ethernet LAN 10/100/1000 Keyboard Dell USB Keyboard Mouse Dell USB Optical Mouse Casing Dell Mid Tower', '953935.jpg'),
(31, '19', 'Dell OptiPlex', 'old', 'Dell', '3040MT', 'Original', '3242', 'mobile', '', '', '', 'electronic', 'Screen Size 40 Inch Panel Flat Resolution Full HD 1920 x 1080 Technology Direct LED 3D Technology 3D Refresh Rate Motionflow XR 100 Hz Contrast Dynamic Contrast Enhancer Brightness Live Color TV Tuner Analog and Digital Sound 5 W + 5 W Open Baffle Speaker, Dolby Digital Connectivity USB, HDMI, RF, AVI Remote Yes', '429587.jpg'),
(32, '19', 'power supplyer', 'old', 'boster', '3040MT', 'Original', '534534', 'RAM', '', '', '', 'electronic', 'rofitability. Strong suppliers can pressure buyers by raising prices, lowering product quality, and reducing product availability. All of these things represent costs to the buyer. Furthermore, a strong supplier can make an industry more competitive and decrease profit potential for the buyer. On the other hand, a weak supplier, one who is at the mercy of the buyer in terms of quality and price, makes an industry less ', '733513.jpg'),
(33, '19', 'Dell Optiplex', 'old', 'Dell', '14-bw066AU', 'Original', '12231', 'Mobile', '', '', '', 'other', 'â–ª Processor: 6th Generation IntelÂ® Coreâ„¢ i7-6500U Processor, 2.5GHz (up to 3.1GHz)\r\nâ–ª Graphics: Integrated IntelÂ® HD Graphics 520\r\nâ–ª RAM: 8 GB  DDR4, 1TB + 128GB SSD\r\nâ–ª Display:14" 16:9 FHD (1920x1080) Anti-glare\r\nâ–ª Warranty : 5 Years Full Warranty with Spare Parts', '753909.jpg'),
(34, '19', 'Symphony V75m', 'old', 'Symphony', 'V75m', 'Original', '3242342', 'RAM', '', '', '', 'other', 'Stand-by: up to 340 hours Talk-time: up to 10 hours Body & Weight 143.75 x 71.5 x 9.2 millimeter, 163 grams Camera Factors (Back) Flashlight, up to 4x zoom, GalaxyCore sensor, f/2.0 aperture Camera Resolution (Back) 5 Megapixel Camera Resolution (Front) 5 Megapixel (GalaxyCore sensor, f/2.2 aperture) Colors Available Black, Dark Blue / Black, Gold Display Size & Resolution 5.0 inches, FWVGA 854 x 480 pixels (196 ppi) Display Type TN Touchscreen Graphic Processing Unit (GPU) Mali 400 Memory Card Slot MicroSD, up to 32 GB Operating System Android Nougat v7.0 Processor Quad-Core, 1.3 GHz', '281267.jpg'),
(35, '19', 'Samsung Galaxy S', 'old', 'samsung', 'Galaxy S', 'Original', '34343545', 'mobile', '', '', '', 'other', 'Stand-by: up to 340 hours Talk-time: up to 10 hours Body & Weight 143.75 x 71.5 x 9.2 millimeter, 163 grams Camera Factors (Back) Flashlight, up to 4x zoom, GalaxyCore sensor, f/2.0 aperture Camera Resolution (Back) 5 Megapixel Camera Resolution (Front) 5 Megapixel (GalaxyCore sensor, f/2.2 aperture) Colors Available Black, Dark Blue / Black, Gold Display Size & Resolution 5.0 inches, FWVGA 854 x 480 pixels (196 ppi) Display Type TN Touchscreen Graphic Processing Unit (GPU) Mali 400 Memory Card Slot MicroSD, up to 32 GB Operating System Android Nougat v7.0 Processor Quad-Core, 1.3 GHz', '651259.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`) VALUES
(8, 'slider3.jpg'),
(9, 'slider1.jpg'),
(11, 'slider2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `msssage`
--

CREATE TABLE `msssage` (
  `mass_id` int(11) NOT NULL,
  `cu_id` varchar(10) NOT NULL,
  `massage` varchar(1000) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msssage`
--

INSERT INTO `msssage` (`mass_id`, `cu_id`, `massage`, `status`) VALUES
(1, '12', 'sfsdf', '1'),
(5, '', 'sdfsdfsdfsdfsdf', '1'),
(6, '', 'sdfsdfsdfsdfsdf', '1'),
(7, '', 'zxczxczxczxc', '1'),
(19, '12', 'wfsdf', '1'),
(20, '12', 'sdfsdf', '1'),
(40, '3', 'Thank you.Order complete:) . ', '1'),
(41, '3', 'Thank you.Order complete:) . ', '1'),
(42, '3', 'Thank you.Order complete:) . ', '1'),
(43, '3', 'Thank you.Order complete:) . ', '1'),
(44, '3', 'Thank you.Order complete:) . ', '1'),
(45, '3', 'Thank you.Order complete:) . ', '1'),
(46, '3', 'Thank you.Order complete:) . ', '1'),
(47, '3', 'Thank you.Order complete:) . ', '1'),
(48, '3', 'Thank you.Order complete:) . ', '1'),
(49, '3', 'Thank you.Order complete:) . ', '1'),
(50, '3', 'Thank you.Order complete:) . ', '1'),
(51, '3', 'Thank you.Order complete:) . ', '1'),
(52, '3', 'Thank you.Order complete:) . ', '1'),
(53, '3', 'Thank you.Order complete:) . ', '1'),
(54, '3', 'Thank you.Order complete:) . ', '1'),
(55, '3', 'Thank you.Order complete:) . ', '1'),
(56, '3', 'Thank you.Order complete:) . ', '1'),
(57, '3', 'Thank you.Order complete:) . ', '1'),
(58, '3', 'Thank you.Order complete:) . ', '1'),
(59, '3', 'Thank you.Order complete:) . ', '1'),
(60, '3', 'Thank you.Order complete:) . ', '1'),
(61, '13', 'Thank you.Order complete:) . ', '1'),
(62, '13', 'Thank you.Order complete:) . ', '1'),
(63, '3', 'Thank you.Order complete:) . ', '1'),
(64, '3', 'Thank you.Order complete:) . ', '1'),
(65, '13', 'Thank you.Order complete:) . ', ''),
(66, '3', 'Thank you.Order complete:) . ', '1'),
(67, '13', 'Thank you.Order complete:) . ', ''),
(68, '3', 'Thank you.Order complete:) . ', '1'),
(69, '13', 'Thank you.Order complete:) . ', ''),
(70, '3', 'Thank you.Order complete:) . ', '1'),
(71, '13', 'Thank you.Order complete:) . ', ''),
(72, '3', 'Thank you.Order complete:) . ', '1'),
(73, '13', 'Thank you.Order complete:) . ', ''),
(74, '13', 'Thank you.Order complete:) . ', ''),
(75, '3', 'Thank you.Order complete:) . ', '1'),
(76, '3', 'Thank you.Order complete:) . ', '1'),
(77, '3', 'Thank you.Order complete:) . ', '1'),
(78, '3', 'Thank you.Order complete:) . ', '1'),
(79, '3', 'Thank you.Order complete:) . ', '1'),
(80, '3', 'Thank you.Order complete:) . ', '1'),
(81, '3', 'Thank you.Order complete:) . ', '1'),
(82, '3', 'Thank you.Order complete:) . ', '1'),
(83, '19', 'Thank you.Order complete:) . ', '1'),
(84, '1', 'Thank you.Order complete:) . ', ''),
(85, '3', 'Thank you.Order complete:) . ', '1'),
(86, '3', 'Thank you.Order complete:) . ', '1'),
(87, '3', 'Thank you.Order complete:) . ', '1'),
(88, '', 'Thank you.Order complete:) . ', ''),
(89, '', 'Thank you.Order complete:) . ', ''),
(90, '', 'Thank you.Order complete:) . ', ''),
(91, '', 'Thank you.Order complete:) . ', ''),
(92, '', 'Thank you.Order complete:) . ', ''),
(93, '', 'Thank you.Order complete:) . ', ''),
(94, '', 'Thank you.Order complete:) . ', ''),
(95, '3', 'Thank you.Order complete:) . ', '1'),
(96, '3', 'Thank you.Order complete:) . ', '1'),
(97, '3', 'Thank you.Order complete:) . ', '1'),
(98, '', 'Thank you.Order complete:) . ', ''),
(99, '', 'Thank you.Order complete:) . ', ''),
(100, '', 'Thank you.Order complete:) . ', ''),
(101, '', 'Thank you.Order complete:) . ', ''),
(102, '', 'Thank you.Order complete:) . ', ''),
(103, '', 'Thank you.Order complete:) . ', ''),
(104, '', 'Thank you.Order complete:) . ', ''),
(105, '', 'Thank you.Order complete:) . ', ''),
(106, '', 'Thank you.Order complete:) . ', ''),
(107, '', 'Thank you.Order complete:) . ', ''),
(108, '', 'Thank you.Order complete:) . ', ''),
(109, '', 'Thank you.Order complete:) . ', ''),
(110, '3', 'Thank you.Order complete:) . ', '1'),
(111, '3', 'Thank you.Order complete:) . ', '1'),
(112, '3', 'Thank you.Order complete:) . ', '1'),
(113, '3', 'Thank you.Order complete:) . ', '1'),
(114, '3', 'Thank you.Order complete:) . ', '1'),
(115, '61', 'Thank you.Order complete:) . ', ''),
(116, '3', 'Thank you.Order complete:) . ', '1'),
(117, '3', 'Thank you.Order complete:) . ', '1'),
(118, '3', 'Thank you.Order complete:) . ', '1'),
(119, '3', 'Thank you.Order complete:) . ', '1'),
(120, '3', 'Thank you.Order complete:) . ', '1'),
(121, '3', 'Thank you.Order complete:) . ', '1'),
(122, '3', 'Thank you.Order complete:) . ', '1'),
(123, '3', 'Thank you.Order complete:) . ', '1'),
(124, '3', 'Thank you.Order complete:) . ', '1'),
(125, '3', 'Thank you.Order complete:) . ', '1'),
(126, '3', 'Thank you.Order complete:) . ', '1'),
(127, '3', 'Thank you.Order complete:) . ', '1'),
(128, '3', 'Thank you.Order complete:) . ', '1'),
(129, '3', 'Thank you.Order complete:) . ', '1'),
(130, '', 'Thank you.Order complete:) . ', ''),
(131, '3', 'Thank you.Order complete:) . ', '1'),
(132, '3', 'Thank you.Order complete:) . ', '1'),
(133, '3', 'Thank you.Order complete:) . ', '1'),
(134, '3', 'Thank you.Order complete:) . ', '1'),
(135, '3', 'Thank you.Order complete:) . ', '1'),
(136, '3', 'Thank you.Order complete:) . ', '1'),
(137, '3', 'Thank you.Order complete:) . ', '1');

-- --------------------------------------------------------

--
-- Table structure for table `nprodinfo`
--

CREATE TABLE `nprodinfo` (
  `np_id` int(12) NOT NULL,
  `np_name` varchar(30) NOT NULL,
  `np_brand` varchar(30) NOT NULL,
  `np_model` varchar(30) NOT NULL,
  `np_authentication` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `np_price` varchar(30) NOT NULL,
  `img_name` varchar(50) NOT NULL,
  `img_path` varchar(100) NOT NULL,
  `img_type` varchar(30) NOT NULL,
  `np_category` varchar(10) NOT NULL,
  `np_desc` varchar(2000) NOT NULL,
  `np_qt` varchar(10) NOT NULL,
  `p_image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nprodinfo`
--

INSERT INTO `nprodinfo` (`np_id`, `np_name`, `np_brand`, `np_model`, `np_authentication`, `contact`, `np_price`, `img_name`, `img_path`, `img_type`, `np_category`, `np_desc`, `np_qt`, `p_image`) VALUES
(32, 'Xiaomi Mi 5c', 'samsung', 'sdfsdf', 'Original', '656465', '32343242', '', '', '', 'other', '4354234243ssdsdsd', '8', '90510.jpg'),
(34, 'McAfee  Antivirus', 'McAfee ', 'McAfee 2018', 'Original', '01779218527', '1200', '', '', '', 'antivirus', 'Item : Antivirus & Security \r\n\r\nDescription\r\n\r\nMcAfee internet security 1 PC for 3 years, clear inte', '96', '921923.jpg'),
(35, 'Kaspersky Antivirus', 'Kaspersky', 'Kaspersky 2018', 'Original', '01779218527', '14000', '', '', '', 'antivirus', '\r\nDescription\r\n\r\nKaspersky Antivirus for MAC[1user] Kaspersky Anti-Virus for Mac has been developed ', '100', '892290.jpg'),
(36, 'Eset Smart Security ', 'Eset ', 'Eset Smart Security 2018', 'Original', '01779218527', '500', '', '', '', 'antivirus', 'Eset smart security 2017 edition antivirus for 1 user has antispyware, anti-theft, anti-phishing, pe', '20', '702934.png'),
(37, 'eScan Antivirus', 'eScan', 'eScan 2018', 'Original', '01779218527', '350', '', '', '', 'antivirus', 'eScan Total Security Suite anti-theft antivirus has cloud security, single user license, antivirus e', '8', '730129.jpg'),
(38, 'Panda Intenet Security', 'Panda', 'Panda 2018', 'Original', '01779218527', '470', '', '', '', 'antivirus', 'Panda internet security for 1 PC, web and email support, remote support 19 x 7 x 365, chat support 1', '4', '744061.jpg'),
(39, 'Photoshop CC', 'Adobe', 'Photoshop CC 2018', 'Original', '01779218527', '2000', '', '', '', 'adobe', 'Select the prominent objects in your images in just one click with the new Select Subject feature. T', '19', '924545.jpg'),
(40, 'Lightroom CC', 'Adobe', 'Lightroom CC 2018', 'Original', '01779218527', '3000', '', '', '', 'adobe', 'Create natural-looking or surreal images from extremely high-contrast scenes. Using HDR Merge, you c', '20', '940795.png'),
(41, 'Illustrator CC', 'Adobe', 'Illustrator CC 2018', 'Original', '01779218527', '1500', '', '', '', 'adobe', 'Work faster with access to all your controls in one place. The new and intelligent Properties panel ', '20', '511079.png'),
(42, 'Adobe Premiere Pro', 'Adobe', 'Adobe Premiere Pro 2018', 'Original', '01779218527', '3000', '', '', '', 'adobe', 'Adobe Premiere Pro allows you an incredible amount of control when it comes to editing your projects', '10', '484647.jpg'),
(43, 'Adobe XD', 'Adobe', 'Adobe XD 2018', 'Original', '01779218527', '2000', '', '', '', 'adobe', '\r\nVector graphics from CC Libraries\r\n\r\nView and drag linked and unlinked vector graphics from Creati', '94', '249164.jpg'),
(44, 'ATX Power Supply ', 'Value Top', 'Value Top TP-ATX23', 'Original', '01779218527', '950', '', '', '', 'pc_hdd', 'Model - Value Top TP-ATX23PSU Category - Non ModularMaximum Power - 200WT', '50', '766500.gif'),
(45, ' Power Supply ', 'Thermaltake', 'Thermaltake Litepower Black 35', 'Original', '01779218527', '2500', '', '', '', 'pc_hdd', 'Model - Thermaltake Litepower Black 350WType - ATX 12V V2.2PSU Category - Non ModularSeries - ', '49', '272731.jpg'),
(46, 'Graphics Card', 'Biostar', 'Biostar GT710', 'Original', '01779218527', '4500', '', '', '', 'pc_hdd', 'Chipset - NVIDIA GeForce\r\nGraphics Engine Model - Biostar GT710\r\nInterface Bus - PCI Express 2.0\r\nMe', '50', '385076.jpg'),
(47, 'ZOTAC Graphics Card ', 'ZOTAC', 'ZOTAC GeForce GTX 1050', 'Original', '01779218527', '12000', '', '', '', 'pc_hdd', 'Brand 	ZOTAC\r\nChipset 	GeForce GTX 1050\r\nGraphics Engine Model 	ZOTAC GeForce GTX 1050\r\ninterface_bu', '50', '189989.jpg'),
(48, 'SAPPHIRE Graphics Card ', 'Sapphire', 'SAPPHIRE PULSE RADEON RX 570', 'Original', '01779218527', '40500', '', '', '', 'pc_hdd', 'Brand 	Sapphire\r\nChipset 	AMD Radeon\r\nGraphics Engine Model 	Sapphire PLUSE Radeon RX 570\r\ninterface', '50', '41151.jpg'),
(49, 'Arduino Uno R3 (China)', 'China', ' ARD-00028', 'Original', '01779218527', '500', '', '', '', 'arduino ', 'Microcontroller 	ATmega328\r\nOperating Voltage 	5V\r\nInput Voltage (recommended) 	7-12V\r\nInput Voltage', '100', '945459.jpg'),
(50, 'Arduino Uno R3', 'China', 'ARD-00032', 'Original', '01779218527', '3200', '', '', '', 'arduino ', '\r\n\r\n    ATmega328 microcontroller\r\n    Input voltage - 7-12V\r\n    14 Digital I/O Pins (6 PWM outputs', '30', '254652.jpg'),
(51, 'Arduino Uno R3', 'China', ' ARD-000325', 'Original', '01779218527', '5000', '', '', '', 'arduino ', '    ATmega328 microcontroller    Input voltage - 7-12V    14 Digital I/O Pins (6 PWM outputs', '40', '53468.jpg'),
(52, ' Arduino Uno R3 ', 'Biostar', ' Model : ARD-00032', 'Original', '345345433', '3000', '', '', '', 'arduino ', '    ATmega328 microcontroller    Input voltage - 7-12V    14 Digital I/O Pins (6 PWM outputs', '23', '158039.png'),
(53, ' Arduino Uno R3 ', 'ARD', ' ARD-00032 ', 'Original', '01779218527', '2000', '', '', '', 'arduino ', '\r\n\r\n    ATmega328 microcontroller\r\n    Input voltage - 7-12V\r\n    14 Digital I/O Pins (6 PWM outputs', '24', '402332.jpg'),
(54, 'Motor  - 1.5V to 12V DC', 'jxul', 'Motor:12V DC', 'Copy', '01779218527', '100', '', '', '', 'motor', 'Use this motor for 1.5 to 12V DC solar projects. It has a low startup current (30 mA) and a max oper', '200', '978202.jpg'),
(55, 'DC Gear Motor', 'China', 'SGM37-3530', 'Original', '234234234', '1000', '', '', '', 'motor', '\r\n    Gearbox: Spur Gear\r\n    Rated Voltage: 12V (6 to 12V Range)\r\n    No-Load Current: 120mA\r\n    R', '100', '295932.jpg'),
(56, '12v DC Motor 2400RPM', 'China', 'EG-530AD-2B', 'Copy', '2323442342', '90', '', '', '', 'motor', 'Rated voltage: DC 12V\r\nDirection of rotation: CCW\r\nSpeed adjustment: 2400RPM\r\nMotor diameter: 32mm\r\n', '100', '650588.jpg'),
(57, 'Motor for Quadcopter', 'China', 'EG-530AD-2B', 'Original', '3252423432', '1000', '', '', '', 'motor', 'Rated voltage: DC 12V\r\nDirection of rotation: CCW\r\nSpeed adjustment: 2400RPM\r\nMotor diameter: 32mm\r\n', '100', '206604.jpg'),
(58, 'Kinmore brand 12v DC motor', 'Kinmore', 'RS-550SH-6529R', 'Copy', '234324', '200', '', '', '', 'motor', '\r\nPlace of Origin:\r\n    Guangdong, China (Mainland)\r\n\r\nBrand Name:\r\n    Kinmore\r\n\r\nModel Number:\r\n  ', '198', '435654.jpg'),
(59, 'Current Sensor', 'China', 'ACS712-30A', 'Original', '564656', '250', '', '', '', 'other', '1. Current sensor chip: ACS712ELC-30A. \r\n2. Pin 5V power supply, on-board power light. \r\n3. The modu', '8', '661167.jpg'),
(60, 'Liquid Level Sensor', 'China', 'Liquid Level Sensor', 'Original', '94645646', '500', '', '', '', 'sensor', '    Detection depth: 48mm    Power: 2.0V ~ 5.0V    Dimension: 19.0mm * 63.0mm    Mounting hole', '1', '813389.jpg'),
(61, 'Antivirus', 'Avast', 'Avast 2018', 'Original', '3434', '1200', '', '', '', 'antivirus', 'Description Avast  Antivirus for MAC[1user] AvastAnti-Virus for Mac has been developed ', '8', '899363.jpg'),
(62, 'Antivirus', 'avira', 'avira-antivirus-pro_148863445', 'Original', '32423', '1200', '', '', '', 'antivirus', 'avira smart security 2017 edition antivirus for 1 user has antispyware, anti-theft, anti-phishing, p', '16', '849516.png');

-- --------------------------------------------------------

--
-- Table structure for table `oprodinfo`
--

CREATE TABLE `oprodinfo` (
  `op_id` int(12) NOT NULL,
  `cu_id` varchar(12) NOT NULL,
  `op_name` varchar(30) NOT NULL,
  `op_condition` varchar(30) NOT NULL,
  `op_brand` varchar(30) NOT NULL,
  `op_model` varchar(30) NOT NULL,
  `op_authentication` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `op_price` varchar(30) NOT NULL,
  `img_name` varchar(50) NOT NULL,
  `img_path` varchar(100) NOT NULL,
  `img_type` varchar(30) NOT NULL,
  `op_category` varchar(10) NOT NULL,
  `op_desc` varchar(2000) NOT NULL,
  `p_image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oprodinfo`
--

INSERT INTO `oprodinfo` (`op_id`, `cu_id`, `op_name`, `op_condition`, `op_brand`, `op_model`, `op_authentication`, `contact`, `op_price`, `img_name`, `img_path`, `img_type`, `op_category`, `op_desc`, `p_image`) VALUES
(64, '12', 'power supplyer', 'nrel', 'Biostar', 'EG-530AD-2B', 'Original', '54544545', '2000', '17-139-147-10.jpg', 'prodimg/17-139-147-10.jpg', 'image/jpeg', 'pc hardwar', 'Motor efficiency: 50.6%Current at max efficiency: 80 mATorque at max efficiency: 11.6 g.cmMoto', '41822.jpg'),
(65, '12', 'Mobile', 'old', 'Samsung', 'Samsung j2', 'Original', '654565656', '4000', 'samsung-galaxy-j2-2018-sm-j250-.jpg', 'prodimg/samsung-galaxy-j2-2018-sm-j250-.jpg', 'image/jpeg', 'mobile', 'Technology 	GSM / HSPA / LTELaunch 	Announced 	2018, JanuaryStatus 	Available. Released 2018, ', '748604.jpg'),
(66, '12', 'Tv', 'old', 'Samsung', 'Samsung K55000', 'Original', '684545', '20000', '5694_menu_img.png', 'prodimg/5694_menu_img.png', 'image/png', 'electronic', 'Screen-Size 	43 Inches Screen-Type 	LED Display-Resolution 	1920 Ã— 1080 Speaker-Type 	2CH(Dow', '911557.png'),
(68, '19', 'Samsung core2', 'old', 'samsung', ' core2', 'Original', '12345', '7200', '', '', '', 'mobile', 'Network Scope	2G, 3G\r\nBattery Type & Performance	Lithium-ion 2000 mAh\r\nBody & Weight	130.3 x 68 x 9.8 millimeter, 138 grams\r\nCamera Factors (Back)	2592 x 1944 pixels, autofocus, LED flash, auto face & smile recognition\r\nCamera Resolution (Back)	5 Megapixel\r\nCamera Resolution (Front)	0.3 Megapixel (VGA)\r\nColors Available	White, Black\r\nDisplay Size & Resolution	4.7 inches, WVGA 480 x 800 pixels (207 ppi)\r\nDisplay Type	TFT Touchscreen\r\nMemory Card Slot	MicroSD, up to 64 GB\r\nOperating System	Android KitKat v4.4.2\r\nProcessor	Quad-core, 1.2 GHz', '848480.jpg'),
(69, '19', 'Samsung Galaxy Y', 'old', 'samsung', 'Galaxy Y', 'Original', '12345', '7000', '', '', '', 'mobile', '2G Network	GSM 850 / 900 / 1800 / 1900 - SIM 1 & SIM 2\r\n3.5 mm Jack	Yes\r\n3G Network	HSDPA 900 / 2100 - GT-S6102 (SIM 1 & SIM 2)\r\nHSDPA 850 / 2100 - GT-S6102B (SIM 1 & SIM 2)\r\nAlert types	Vibration; MP3 ringtones\r\nBattery Performance	Stand-by: Up to 360 h\r\nTalk time: Up to 9 h\r\nBattery Type	Li-Ion 1300 mAh battery\r\nBluetooth	v3.0 with A2DP\r\nCamera Features	Geo-tagging\r\nCamera Pixel	2048 x 1536\r\nCamera Resolution	3.15 Megapixel', '821377.jpg'),
(70, '19', 'Symphony V130 ', 'old', 'Symphony', 'V130 ', 'Original', '112345', '4000', '', '', '', 'mobile', '\r\nStand-by: up to 220 hours\r\nTalk-time: up to 7 hours\r\nBody & Weight	147 x 70.8 x 9.25 millimeter, 154.5 grams\r\nCamera Factors (Back)	Flashlight, up to 4x zoom, Samsung sensor, f/2.2 aperture, fisheye mode, face beauty\r\nCamera Resolution (Back)	5 Megapixel\r\nCamera Resolution (Front)	5 Megapixel (Samsung sensor, f/2.2 aperture)\r\nColors Available	Gold, Dark Blue, Matte Black\r\nDisplay Size & Resolution	5.34 inches, FWVGA+ 854 x 480 pixels (201 ppi)\r\nDisplay Type	TN Touchscreen\r\nGraphic Processing Unit (GPU)	Mali 400 MP2\r\nMemory Card Slot	MicroSD, up to 32 GB\r\nOperating System	Android Nougat v7.0\r\nProcessor	Quad-Core, 1.3 GHz\r\nRAM', '554401.jpg'),
(71, '19', 'Samsung Galaxy S', 'old', 'samsung', 'Galaxy S ', 'Original', '1312321', '3000', '', '', '', 'mobile', '3.5mm Jack Yes 3G Network HSDPA 900 / 2100 - SIM 1 & SIM 2 Alert types Vibration; MP3, WAV ringtones Battery Performance Stand-by: Up to 445 h (2G) / Up to 330 h (3G) Talk time: Up to 13 h (2G) / Up to 7 h 25 min (3G) Battery Type Li-Ion 1500 mAh battery Bluetooth v3.0 with A2DP Camera Features autofocus, LED flash, Geo-tagging Camera Pixel 2592 x 1944 pixels Camera Resolution 5 Megapixel Chipset Qualcomm MSM7227A Snapdragon Colors Available White, Black, La Fleur Data Speed HSDPA, 7.2 Mb', '582266.jpg'),
(72, '19', 'Symphony V75m ', 'old', 'Symphony', ' V75m ', 'Original', '1214324', '5000', '', '', '', 'mobile', '\r\nStand-by: up to 340 hours\r\nTalk-time: up to 10 hours\r\nBody & Weight	143.75 x 71.5 x 9.2 millimeter, 163 grams\r\nCamera Factors (Back)	Flashlight, up to 4x zoom, GalaxyCore sensor, f/2.0 aperture\r\nCamera Resolution (Back)	5 Megapixel\r\nCamera Resolution (Front)	5 Megapixel (GalaxyCore sensor, f/2.2 aperture)\r\nColors Available	Black, Dark Blue / Black, Gold\r\nDisplay Size & Resolution	5.0 inches, FWVGA 854 x 480 pixels (196 ppi)\r\nDisplay Type	TN Touchscreen\r\nGraphic Processing Unit (GPU)	Mali 400\r\nMemory Card Slot	MicroSD, up to 32 GB\r\nOperating System	Android Nougat v7.0\r\nProcessor	Quad-Core, 1.3 GHz', '142795.jpg'),
(73, '19', 'HP 14-bw066AU', 'old', 'HP', '14-bw066AU', 'Original', '12345', '15000', '', '', '', 'pc hardwar', 'Processor	AMD Dual-Core E2-9000e (1.5 GHz base frequency, up to 2 GHz burst frequency, 1 MB cache)\r\nMemory	4 GB DDR4-1866 SDRAM (1 x 4 GB)\r\nStorage	500 GB 5400 rpm SATA\r\nGraphics	AMD Radeonâ„¢ R2 Graphics\r\nDisplay	14" diagonal HD SVA BrightView WLED-backlit (1366 x 768)\r\nAudio	Dual speakers\r\nWeb Camera	HP TrueVision HD Camera with integrated digital microphone\r\nOptical Drive	SuperMulti DVD burner\r\nNetworking	Wireless connectivity IntelÂ® 802.11a/b/g/n/ac (1x1) Wi-FiÂ® and BluetoothÂ® 4.2 Combo Network interface Integrated 10/100/1000 GbE LAN 1 USB 2.0; 1 HDMI; 1 VGA; 1 RJ-45; 1 headphone/microphone combo; 2 USB 3.1 Gen 1 (Data transfer only)\r\nBattery	4-cell, 41 Wh Li-ion', '328035.jpg'),
(74, '19', 'HP 15-bs520tu', 'old', 'HP', '15-bs520tu', 'Original', '234234', '20000', '', '', '', 'pc hardwar', 'Laptop & Notebook\r\nProcessor	IntelÂ® PentiumÂ® N3710 (1.6 GHz base frequency, up to 2.56 GHz burst frequency, 2 MB cache, 4 cores)\r\nMemory	4 GB DDR3L-1600 SDRAM (1 x 4 GB)\r\nStorage	500 GB 5400 rpm SATA\r\nGraphics	IntelÂ® HD Graphics 405\r\nDisplay	15.6" diagonal HD SVA BrightView WLED-backlit (1366 x 768)\r\nAudio	DTS Studio Soundâ„¢; Dual speakers\r\nWeb Camera	HP TrueVision HD Camera with integrated digital microphone\r\nOptical Drive	DVD-Writer\r\nNetworking	Integrated 10/100/1000 GbE LAN\r\nInterface	Integrated 10/100/1000 GbE LAN Expansion slots 1 multi-format SD media card reader External ports 2 USB 3.1 Gen 1 (Data transfer only); 1 USB 2.0; 1 HDMI; 1 RJ-45; 1 headphone/microphone combo; 1 VGA\r\nBattery	4-cell, 41 Wh Li-ion\r\nOperating system	FreeDOS 2.0\r\nManufacturer Warranty	01 Year international Warranty', '51974.jpg'),
(75, '19', 'Dell OptiPlex 3050', 'old', 'Dell', 'OptiPlex 3050', 'Original', '34533', '15000', '', '', '', 'pc hardwar', 'Model 	OptiPlex 3050 MFF\r\nMicro Form factor\r\nType 	Desktop\r\nProcessor 	7th Generation Intel Core i3-7100T\r\nProcessor Speed 	3MB Cache, 3.40 GHz\r\nRAM 	4GB (1x4G) 2400MHz DDR4L Memory, 2 DIMM slots\r\nStorage 	500GB 7200 RPM 2.5" SATA Hard Drive\r\nMonitor 	Dell Monitor E1916H\r\nGraphics card 	Integrated Intel HD Graphics\r\nChipSet 	Intel B250 Chipset\r\nI/O Ports 	6 External USB: 4 x 3.1 (2 front/2 rear) and 4 x 2.0 (2 rear);\r\n1 RJ-45;1 Display Port 1.2; 1 UAJ, 1 Line-out; 1 HDMI 1.4;\r\nI/O Slots 	1 full height PCIe x16, 3 full height PCIe x1\r\nBays 	1 internal 3.5â€ 2 internal 2.5â€, 1 external 5.25â€\r\nKeyboard 	Dell KB216 Wired Black Business Keyboard (English)\r\nMouse 	Dell Optical Mouse-MS116 - Black\r\nPower Supply 	Standard 240W PSU\r\nOperating system 	DOS Factory Installed (English)', '813694.jpg'),
(76, '19', 'Dell Vostro', 'new', 'Dell', 'Vostro 3668', 'Original', '242342', '30000', '', '', '', 'pc hardwar', 'Dell vostro 3668 mini tower brand PC has Intel core i5 7400 processor, Intel H110 chipset, 4 GB DDR4L RAM, 1 TB hard drive, DVD+/-RW, Dell 18.5 inch wide screen monitor, Dell optical mouse and keyboard, Intel HD graphics 530, 2 USB 3.0, universal audio jack, 4 USB 2.0, RJ-45, HDMI, VGA, 3-stack audio jacks supporting 5.1 surround sound, 2 PCIe x 1, 1 PCIe x 16.', '159228.jpg'),
(77, '19', 'Dell OptiPlex ', 'old', 'Dell', '3040MT', 'Copy', '232323', '12000', '', '', '', 'pc hardwar', '\r\nProcessor Type\r\n	Intel Core i5-6500\r\nMain Board\r\n	Intel H110 Chipset\r\nMonitor\r\n	Dell 18.5" LED\r\nRAM\r\n	4GB DDR3 1600MHz\r\nHard Disk\r\n	500GB 7200 RPM\r\nDisk Type\r\n	HDD\r\nGraphics Card\r\n	Intel HD Graphics 530\r\nOptical Drive\r\n	DVD R/W\r\nNetworking\r\n	Integrated Realtek RTL8151GD, Ethernet LAN 10/100/1000\r\nKeyboard\r\n	Dell USB Keyboard\r\nMouse\r\n	Dell USB Optical Mouse\r\nCasing\r\n	Dell Mid Tower', '403063.jpg'),
(78, '19', 'Sony Bravia', 'old', 'Sony', 'KLV-R352E', 'Original', '22342', '30000', '', '', '', 'electronic', ' Screen Size\r\n	40 Inch\r\nPanel\r\n	Flat\r\nResolution\r\n	Full HD 1920 x 1080\r\nTechnology\r\n	Direct LED\r\n3D Technology\r\n	3D\r\nRefresh Rate\r\n	Motionflow XR 100 Hz\r\nContrast\r\n	Dynamic Contrast Enhancer\r\nBrightness\r\n	Live Color\r\nTV Tuner\r\n	Analog and Digital\r\nSound\r\n	5 W + 5 W Open Baffle Speaker, Dolby Digital\r\nConnectivity\r\n	USB, HDMI, RF, AVI\r\nRemote\r\n	Yes\r\nDimension\r\n	924 x 550 x 65 mm\r\nOther Features\r\n	FM Radio', '719153.jpg'),
(79, '19', 'Gold Star 4K ', 'old', ' Sony', ' 4K Ultra', 'Original', '242342', '20000', '', '', '', 'electronic', '\r\nPanel\r\n	Flat\r\nResolution\r\n	3840 x 2160\r\nTechnology\r\n	Smart LED\r\n3D Technology\r\n	2D\r\nResponse Time\r\n	5ms\r\nRefresh Rate\r\n	200 Hz\r\nContrast\r\n	Dynamic Mega Contrast Ratio\r\nBrightness\r\n	Live Color\r\nTV Tuner\r\n	Analog and Digital\r\nSound\r\n	10W+10W, Dolby Digital, Dolby Digital Plus, Dolby Pulse\r\nConnectivity\r\n	USB, HDMI, Wi-Fi, LAN, RF\r\nRemote\r\n	Yes', '980580.jpg'),
(80, '19', 'Dell OptiPlex 3050', 'old', 'Dell', '14-bw066AU', 'Original', '34343', '20000', '', '', '', 'electronic', ' Processor Type Intel Core i5-6500 Main Board Intel H110 Chipset Monitor Dell 18.5" LED RAM 4GB DDR3 1600MHz Hard Disk 500GB 7200 RPM Disk Type HDD Graphics Card Intel HD Graphics 530 Optical Drive DVD R/W Networking Integrated Realtek RTL8151GD, Ethernet LAN 10/100/1000 Keyboard Dell USB Keyboard Mouse Dell USB Optical Mouse Casing Dell Mid Tower', '470318.jpg'),
(81, '1919', 'HP 14-bw066AU', 'old', 'HP', '14-bw066AU', 'Original', '324343', '234434', '', '', '', 'pc hardwar', ' Screen Size\r\n	40 Inch\r\nPanel\r\n	Flat\r\nResolution\r\n	Full HD 1920 x 1080\r\nTechnology\r\n	Direct LED\r\n3D Technology\r\n	3D\r\nRefresh Rate\r\n	Motionflow XR 100 Hz\r\nContrast\r\n	Dynamic Contrast Enhancer\r\nBrightness\r\n	Live Color\r\nTV Tuner\r\n	Analog and Digital\r\nSound\r\n	5 W + 5 W Open Baffle Speaker, Dolby Digital\r\nConnectivity\r\n	USB, HDMI, RF, AVI\r\nRemote\r\n	Yes', '410258.jpg'),
(82, '19', 'Dell OptiPlex', 'old', 'Dell', '14-bw066AU', 'Original', '324324', '20000', '', '', '', 'other', ' Screen Size\r\n	40 Inch\r\nPanel\r\n	Flat\r\nResolution\r\n	Full HD 1920 x 1080\r\nTechnology\r\n	Direct LED\r\n3D Technology\r\n	3D\r\nRefresh Rate\r\n	Motionflow XR 100 Hz\r\nContrast\r\n	Dynamic Contrast Enhancer\r\nBrightness\r\n	Live Color\r\nTV Tuner\r\n	Analog and Digital\r\nSound\r\n	5 W + 5 W Open Baffle Speaker, Dolby Digital\r\nConnectivity\r\n	USB, HDMI, RF, AVI\r\nRemote\r\n	Yes', '86851.jpg'),
(83, '1919', 'Symphony V75m', 'old', 'Symphony', 'V75m', 'Original', '3343434', '4000', '', '', '', 'other', ' Stand-by: up to 340 hours Talk-time: up to 10 hours Body & Weight 143.75 x 71.5 x 9.2 millimeter, 163 grams Camera Factors (Back) Flashlight, up to 4x zoom, GalaxyCore sensor, f/2.0 aperture Camera Resolution (Back) 5 Megapixel Camera Resolution (Front) 5 Megapixel (GalaxyCore sensor, f/2.2 aperture) Colors Available Black, Dark Blue / Black, Gold Display Size & Resolution 5.0 inches, FWVGA 854 x 480 pixels (196 ppi) Display Type TN Touchscreen Graphic Processing Unit (GPU) Mali 400 Memory Card Slot MicroSD, up to 32 GB Operating System Android Nougat v7.0 Processor Quad-Core, 1.', '412667.jpg'),
(84, '19', 'Gold Star 4K', 'old', 'Sony', 'M343', 'Original', '23423424', '20000', '', '', '', 'other', 'Panel Flat Resolution 3840 x 2160 Technology Smart LED 3D Technology 2D Response Time 5ms Refresh Rate 200 Hz Contrast Dynamic Mega Contrast Ratio Brightness Live Color TV Tuner Analog and Digital Sound 10W+10W, Dolby Digital, Dolby Digital Plus, Dolby Pulse Connectivity USB, HDMI, Wi-Fi, LAN, RF Remote Yes', '744183.jpg'),
(85, '19', 'Sony Bravia', 'old', 'Sony', '3040MT', 'Original', '2332423', '32323', '', '', '', 'electronic', ' Screen Size\r\n	40 Inch\r\nPanel\r\n	Flat\r\nResolution\r\n	Full HD 1920 x 1080\r\nTechnology\r\n	Direct LED\r\n3D Technology\r\n	3D\r\nRefresh Rate\r\n	Motionflow XR 100 Hz\r\nContrast\r\n	Dynamic Contrast Enhancer\r\nBrightness\r\n	Live Color\r\nTV Tuner\r\n	Analog and Digital\r\nSound\r\n	5 W + 5 W Open Baffle Speaker, Dolby Digital\r\nConnectivity\r\n	USB, HDMI, RF, AVI\r\nRemote\r\n	Yes', '684276.png'),
(86, '19', 'HP 14-bw066AU', 'old', 'HP', '14-bw066AU', 'Copy', '32423', '2000', '', '', '', 'other', 'Screen Size 40 Inch Panel Flat Resolution Full HD 1920 x 1080 Technology Direct LED 3D Technology 3D Refresh Rate Motionflow XR 100 Hz Contrast Dynamic Contrast Enhancer Brightness Live Color TV Tuner Analog and Digital Sound 5 W + 5 W Open Baffle Speaker, Dolby Digital Connectivity USB, HDMI, RF, AVI Remote Yes', '241634.jpg'),
(87, '3', 'Dell OptiPlex', 'old', 'Dell', '3040MT', 'Copy', '2131', '12312', '', '', '', 'mobile', '12312313', '729336.jpg'),
(88, '3', 'Dell OptiPlex', 'old', 'HP', '3040MT', 'Copy', '12345', '11111', '', '', '', 'mobile', 'qweqe', '592205.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `o_id` int(10) NOT NULL,
  `cu_id` int(10) NOT NULL,
  `p_id` varchar(10) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `t_price` varchar(30) NOT NULL,
  `d_address` varchar(255) NOT NULL,
  `status` varchar(2) NOT NULL,
  `p_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`o_id`, `cu_id`, `p_id`, `p_name`, `quantity`, `t_price`, `d_address`, `status`, `p_status`) VALUES
(154, 3, '61', 'Antivirus', '1', '1200', '', '0', ''),
(155, 3, '62', 'Antivirus', '1', '1200', '', '0', ''),
(156, 3, '61', 'Antivirus', '2', '2400', '', '0', '11111111'),
(157, 3, '60', 'Liquid Level Sensor', '1', '500', '', '0', '11111111'),
(158, 3, '62', 'Antivirus', '1', '1200', '', '0', '111111'),
(159, 3, '61', 'Antivirus', '2', '2400', '', '0', '111111'),
(160, 3, '60', 'Liquid Level Sensor', '2', '1000', '', '0', ''),
(161, 3, '62', 'Antivirus', '2', '2400', '', '0', '2222222'),
(162, 3, '60', 'Liquid Level Sensor', '2', '1000', '', '0', '2222222'),
(163, 1, '62', 'Antivirus', '1', '1200', '', '1', ''),
(164, 3, '62', 'Antivirus', '1', '1200', '', '0', '33333333'),
(165, 3, '48', 'SAPPHIRE Graphics Card ', '1', '40500', '', '0', ''),
(166, 3, '60', 'Liquid Level Sensor', '2', '1000', '', '0', '33333333'),
(167, 3, '60', 'Liquid Level Sensor', '2', '1000', '', '0', '111111'),
(168, 3, '60', 'Liquid Level Sensor', '4', '2000', '', '0', '22222'),
(169, 3, '60', 'Liquid Level Sensor', '1', '500', '', '0', '111111111111'),
(170, 3, '61', 'Antivirus', '2', '2400', '', '0', '111111111111'),
(171, 3, '61', 'Antivirus', '4', '4800', '', '0', '1111111111'),
(172, 3, '60', 'Liquid Level Sensor', '1', '500', '', '0', '1111111111'),
(173, 3, '62', 'Antivirus', '1', '1200', '', '0', '1111111111'),
(174, 1, '39', 'Photoshop CC', '2', '4000', '', '1', ''),
(175, 1, '39', 'Photoshop CC', '2', '4000', '', '1', ''),
(176, 1, '39', 'Photoshop CC', '2', '4000', '', '1', ''),
(177, 1, '39', 'Photoshop CC', '1', '2000', '', '1', ''),
(178, 1, '39', 'Photoshop CC', '1', '2000', '', '1', ''),
(179, 1, '39', 'Photoshop CC', '3', '6000', '', '1', ''),
(180, 1, '39', 'Photoshop CC', '1', '2000', '', '1', ''),
(181, 1, '39', 'Photoshop CC', '1', '2000', '', '1', ''),
(182, 3, '61', 'Antivirus', '1', '1200', '', '0', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(10) NOT NULL,
  `cu_id` varchar(10) NOT NULL,
  `g_price` varchar(10) NOT NULL,
  `trxid` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `cu_id`, `g_price`, `trxid`, `status`) VALUES
(1, '3', '2900', '11111111', ''),
(3, '3', '3400', '2222222', '1'),
(4, '3', '2200', '33333333', ''),
(5, '3', '1000', '111111', ''),
(6, '3', '2000', '22222', ''),
(7, '3', '2900', '111111111111', ' 0');

-- --------------------------------------------------------

--
-- Table structure for table `uprodinfo`
--

CREATE TABLE `uprodinfo` (
  `up_id` int(12) NOT NULL,
  `up_name` varchar(30) NOT NULL,
  `up_brand` varchar(30) NOT NULL,
  `up_model` varchar(30) NOT NULL,
  `up_authentication` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `up_price` varchar(30) NOT NULL,
  `img_name` varchar(50) NOT NULL,
  `img_path` varchar(100) NOT NULL,
  `img_type` varchar(30) NOT NULL,
  `up_category` varchar(10) NOT NULL,
  `up_desc` varchar(100) NOT NULL,
  `p_image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uprodinfo`
--

INSERT INTO `uprodinfo` (`up_id`, `up_name`, `up_brand`, `up_model`, `up_authentication`, `contact`, `up_price`, `img_name`, `img_path`, `img_type`, `up_category`, `up_desc`, `p_image`) VALUES
(3, 'cosmetic', 'werwe', 'wewer', 'wserwer', '132434', '1212331', '', 'prodimg/', '', 'mobile', '23432423423434', ''),
(4, 'eww', 'werwe', 'wewer', 'wserwer', '132434', '1212331', 'slider4.jpg', 'prodimg/slider4.jpg', 'image/jpeg', 'mobile', '23432423423434', '');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `cu_id` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`cu_id`, `username`, `email`, `role`, `password`, `mobile`, `address`, `gender`, `status`) VALUES
(1, 'admin', 'amrita007arnoy@gmail.com', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '123456', '', '', '1'),
(2, 'romesh', 'amrita@gmail.com', 'user', '827ccb0eea8a706c4c34a16891f84e7b', '12345', 'asdasd', 'f', '1'),
(3, 'user', 'atik@gmail.com', 'user', '827ccb0eea8a706c4c34a16891f84e7b', '1234567', '82/kha indira road dhaka', '', ' 0'),
(16, 'babul', 'babul@gmail.com', 'user', '827ccb0eea8a706c4c34a16891f84e7b', '12345', '82/kha', 'f', '1'),
(17, 'moderator', 'moderator@gmail.com', 'moderator', '827ccb0eea8a706c4c34a16891f84e7b', '12345678', '82/kha', 'f', '1'),
(18, 'arnoy', 'arnoy@gmail.com', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', '12345', '82/kha', 'm', '1'),
(19, 'atik', 'atik1@gmail.com', 'user', '827ccb0eea8a706c4c34a16891f84e7b', '12345', '82/kha', 'm', '1'),
(20, 'durjoy', 'babul6od@yahoo.com', 'user', '289dff07669d7a23de0ef88d2f7129e7', '235', 'dhaka', 'm', '1');

-- --------------------------------------------------------

--
-- Table structure for table `userpass`
--

CREATE TABLE `userpass` (
  `user` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userpass`
--

INSERT INTO `userpass` (`user`, `pass`) VALUES
('amrita', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`cm_id`);

--
-- Indexes for table `eprodinfo`
--
ALTER TABLE `eprodinfo`
  ADD PRIMARY KEY (`ep_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msssage`
--
ALTER TABLE `msssage`
  ADD PRIMARY KEY (`mass_id`);

--
-- Indexes for table `nprodinfo`
--
ALTER TABLE `nprodinfo`
  ADD PRIMARY KEY (`np_id`);

--
-- Indexes for table `oprodinfo`
--
ALTER TABLE `oprodinfo`
  ADD PRIMARY KEY (`op_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `uprodinfo`
--
ALTER TABLE `uprodinfo`
  ADD PRIMARY KEY (`up_id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`cu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `b_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `cm_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `eprodinfo`
--
ALTER TABLE `eprodinfo`
  MODIFY `ep_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `msssage`
--
ALTER TABLE `msssage`
  MODIFY `mass_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;
--
-- AUTO_INCREMENT for table `nprodinfo`
--
ALTER TABLE `nprodinfo`
  MODIFY `np_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `oprodinfo`
--
ALTER TABLE `oprodinfo`
  MODIFY `op_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `o_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `uprodinfo`
--
ALTER TABLE `uprodinfo`
  MODIFY `up_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `cu_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
