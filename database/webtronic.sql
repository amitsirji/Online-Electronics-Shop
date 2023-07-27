-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 16, 2014 at 10:12 AM
-- Server version: 5.1.33
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `webtronic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_user` varchar(30) NOT NULL DEFAULT '',
  `admin_pass` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`admin_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_user`, `admin_pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `admin_order_history`
--

CREATE TABLE `admin_order_history` (
  `no` int(8) NOT NULL AUTO_INCREMENT,
  `user` varchar(30) NOT NULL DEFAULT '',
  `product_table_name` varchar(20) NOT NULL DEFAULT '',
  `product_id` varchar(20) NOT NULL DEFAULT '',
  `qnt` char(2) NOT NULL DEFAULT '',
  `delivery_address` varchar(150) NOT NULL DEFAULT '',
  `delivery_country` varchar(30) NOT NULL DEFAULT '',
  `delivery_state` varchar(30) NOT NULL DEFAULT '',
  `delivery_city` varchar(30) NOT NULL DEFAULT '',
  `payment_mode` varchar(20) NOT NULL DEFAULT '',
  `card_name` varchar(15) NOT NULL DEFAULT '',
  `card_number` varchar(25) NOT NULL DEFAULT '',
  `card_ver_code` char(3) NOT NULL DEFAULT '',
  `bank_name` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=200 ;

--
-- Dumping data for table `admin_order_history`
--

INSERT INTO `admin_order_history` (`no`, `user`, `product_table_name`, `product_id`, `qnt`, `delivery_address`, `delivery_country`, `delivery_state`, `delivery_city`, `payment_mode`, `card_name`, `card_number`, `card_ver_code`, `bank_name`) VALUES
(194, 'tushar', 'vc_split_ac', 'vcsplitac001', '2', 'Kuber Nagar,\r\nNavlakhi Road,\r\nMorbi - 363641.', 'india', 'gujarat', 'morbi', 'address_billing', '', '', '', ''),
(195, 'ankit', 'lg_home_th', 'lghometh004', '2', 'Jivan Jayot soc., vavdi road,Morbi-363641', 'India', 'gujarat', 'morbi', 'credit_card', 'master_card', '1234567890123121', '123', 'BOI'),
(196, 'dhaval', 'vc_split_ac', 'vcsplitac005', '1', 'rajkot', 'India', 'gujarat', 'rajkot', 'address_billing', '', '', '', ''),
(197, 'dhaval', 'lg_rf', 'lgrf010', '1', 'rajkot', 'India', 'gujarat', 'rajkot', 'address_billing', '', '', '', ''),
(198, 'dhaval', 'lg_home_th', 'lghometh007', '1', 'rajkot', 'India', 'gujarat', 'rajkot', 'address_billing', '', '', '', ''),
(199, 'tushar', 'lg_home_th', 'lghometh007', '1', 'Kuber Nagar,\r\nNavlakhi Road,\r\nMorbi ? 363641.', 'india', 'gujarat', 'morbi', 'credit_card', 'visa_card', '1234567891234567', '456', 'state bank of india');

-- --------------------------------------------------------

--
-- Table structure for table `admin_user_order`
--

CREATE TABLE `admin_user_order` (
  `no` int(8) NOT NULL AUTO_INCREMENT,
  `user` varchar(30) NOT NULL DEFAULT '',
  `product_table_name` varchar(20) NOT NULL DEFAULT '',
  `product_id` varchar(20) NOT NULL DEFAULT '',
  `qnt` char(2) NOT NULL DEFAULT '',
  `delivery_address` varchar(150) NOT NULL DEFAULT '',
  `delivery_country` varchar(30) NOT NULL DEFAULT '',
  `delivery_state` varchar(30) NOT NULL DEFAULT '',
  `delivery_city` varchar(30) NOT NULL DEFAULT '',
  `payment_mode` varchar(20) NOT NULL DEFAULT '',
  `card_name` varchar(15) NOT NULL DEFAULT '',
  `card_number` varchar(25) NOT NULL DEFAULT '',
  `card_ver_code` char(3) NOT NULL DEFAULT '',
  `bank_name` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=200 ;

--
-- Dumping data for table `admin_user_order`
--

INSERT INTO `admin_user_order` (`no`, `user`, `product_table_name`, `product_id`, `qnt`, `delivery_address`, `delivery_country`, `delivery_state`, `delivery_city`, `payment_mode`, `card_name`, `card_number`, `card_ver_code`, `bank_name`) VALUES
(194, 'tushar', 'vc_split_ac', 'vcsplitac001', '2', 'Kuber Nagar,\r\nNavlakhi Road,\r\nMorbi - 363641.', 'india', 'gujarat', 'morbi', 'address_billing', '', '', '', ''),
(195, 'ankit', 'lg_home_th', 'lghometh004', '2', 'Jivan Jayot soc., vavdi road,Morbi-363641', 'India', 'gujarat', 'morbi', 'credit_card', 'master_card', '1234567890123121', '123', 'BOI'),
(196, 'dhaval', 'vc_split_ac', 'vcsplitac005', '1', 'rajkot', 'India', 'gujarat', 'rajkot', 'address_billing', '', '', '', ''),
(197, 'dhaval', 'lg_rf', 'lgrf010', '1', 'rajkot', 'India', 'gujarat', 'rajkot', 'address_billing', '', '', '', ''),
(198, 'dhaval', 'lg_home_th', 'lghometh007', '1', 'rajkot', 'India', 'gujarat', 'rajkot', 'address_billing', '', '', '', ''),
(199, 'tushar', 'lg_home_th', 'lghometh007', '1', 'Kuber Nagar,\r\nNavlakhi Road,\r\nMorbi ? 363641.', 'india', 'gujarat', 'morbi', 'credit_card', 'visa_card', '1234567891234567', '456', 'state bank of india');

-- --------------------------------------------------------

--
-- Table structure for table `lg_color_tv`
--

CREATE TABLE `lg_color_tv` (
  `id` varchar(20) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '',
  `img_path` varchar(50) NOT NULL DEFAULT '',
  `size` varchar(4) NOT NULL DEFAULT '',
  `type` varchar(20) NOT NULL DEFAULT '',
  `cabinet_finish` varchar(20) NOT NULL DEFAULT '',
  `sound_output` varchar(4) NOT NULL DEFAULT '',
  `woofer` varchar(25) NOT NULL DEFAULT '',
  `sound_system` varchar(20) NOT NULL DEFAULT '',
  `mrp` varchar(10) NOT NULL DEFAULT '',
  `new_mrp` varchar(10) NOT NULL DEFAULT '',
  `main_mrp` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lg_color_tv`
--

INSERT INTO `lg_color_tv` (`id`, `name`, `img_path`, `size`, `type`, `cabinet_finish`, `sound_output`, `woofer`, `sound_system`, `mrp`, `new_mrp`, `main_mrp`) VALUES
('lgcolortv001', '21SB3RG4', 'product_img/lg_color_tv/lgcolortv001.jpg', '21', 'Ultraslim', 'Spray', '350W', 'Woofer Enabled', 'AV Stereo', '9,000.00', '8,490.00', 8490),
('lgcolortv009', '15FA2RGE', 'product_img/lg_color_tv/lgcolortv009.jpg', '15', 'Flatron', 'Spray', '140W', 'Yes', 'AV Stereo', '5,390.00', '5,790.00', 5790),
('lgcolortv008', '15FA2RB', 'product_img/lg_color_tv/lgcolortv008.jpg', '15', 'Flatron', 'Spray', '70W', 'Yes', 'Mono', '6,090.00', '5,490.00', 5490),
('lgcolortv007', '14SB2RB', 'product_img/lg_color_tv/lgcolortv007.jpg', '14', 'Ultraslim', 'Glossy', '70W', 'Yes', 'Mono', '7,990.00', '7,250.00', 7250),
('lgcolortv006', '21FU4RGE3', 'product_img/lg_color_tv/lgcolortv006.jpg', '21', 'Ultraslim', 'Spray', '300W', 'Yes', 'AV Stereo', '8,990.00', '8,290.00', 8290),
('lgcolortv005', '21FA2RG4', 'product_img/lg_color_tv/lgcolortv005.jpg', '21', 'Flatron', 'Spray', '200W', 'Yes', 'Stero System', '8,390.00', '7,490.00', 7490),
('lgcolortv004', '14SA2RB', 'product_img/lg_color_tv/lgcolortv004.jpg', '14', 'Ultraslim', 'Spray', '70W', 'Woofer Enabled', 'Mono', '5,990.00', '5,390.00', 5390),
('lgcolortv002', '21SB5RGE4', 'product_img/lg_color_tv/lgcolortv002.jpg', '21', 'Ultraslim', 'Spray', '350W', 'Woofer Enabled', 'AV Stereo', '87,550.00', '86,990.00', 8690),
('lgcolortv003', '21FJ8RG3', 'product_img/lg_color_tv/lgcolortv003.jpg', '21', 'Ultraslim', 'Spray', '200W', 'Woofer Enabled', 'Stereo', '78,990.00', '77,990.00', 7990),
('lgcolortv010', '21FA2VGE', 'product_img/lg_color_tv/lgcolortv010.jpg', '21', 'Flatron', 'Spray', '400W', 'Yes', 'AV Stereo', '8,990.00', '7,990.00', 7990),
('lgcolortv011', '21FA2VGE', 'product_img/lg_color_tv/lgcolortv011.jpg', '21', 'Flatron', 'Spray', '400', 'Yes', 'AV Stereo', '8,500.00', '7,390.00', 7390),
('lgcolortv012', '21FD5RGE4', 'product_img/lg_color_tv/lgcolortv012.jpg', '21', 'Flatron', 'Spray', '350W', 'NO', 'AV Stereo', '9,500.00', '8,490.00', 8490),
('lgcolortv013', '21FD5WGE', 'product_img/lg_color_tv/lgcolortv013.jpg', '21', 'Flatron', 'Spray', '1200', 'Yes', 'AV Stereo', '11,990.00', '10,490.00', 10490),
('lgcolortv014', '21FE3BG4', 'product_img/lg_color_tv/lgcolortv014.jpg', '21', 'Flatron', 'Spray', '200', 'NO', 'AV Stereo', '9,000.00', '7,590.00', 7590),
('lgcolortv015', '21FG6RGE4', 'product_img/lg_color_tv/lgcolortv015.jpg', '21', 'Flatron', 'Spray', '300', 'NO', 'AV Stereo', '8,500.00', '7,590.00', 7590),
('lgcolortv016', '21FJ6AB5', 'product_img/lg_color_tv/lgcolortv016.jpg', '21', 'Flatron', 'Spray', '150', 'NO', 'Mono', '8,000.00', '6,990.00', 6990);

-- --------------------------------------------------------

--
-- Table structure for table `lg_front_load_wm`
--

CREATE TABLE `lg_front_load_wm` (
  `id` varchar(20) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '',
  `img_path` varchar(50) NOT NULL DEFAULT '',
  `capacity` varchar(4) NOT NULL DEFAULT '',
  `color` varchar(20) NOT NULL DEFAULT '',
  `temperature_range` varchar(40) NOT NULL DEFAULT '',
  `mrp` varchar(10) NOT NULL DEFAULT '',
  `new_mrp` varchar(10) NOT NULL DEFAULT '',
  `main_mrp` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lg_front_load_wm`
--

INSERT INTO `lg_front_load_wm` (`id`, `name`, `img_path`, `capacity`, `color`, `temperature_range`, `mrp`, `new_mrp`, `main_mrp`) VALUES
('lgfrontloadwm001', 'F8068NDP', 'product_img/lg_front_load_wm/lgfrontloadwm001.jpg', '5.2', 'Blue White', 'Cold~95ºC', '12,000.00', '11,490.00', 11490),
('lgfrontloadwm005', 'F1403TD25', 'product_img/lg_front_load_wm/lgfrontloadwm005.jpg', '8.0', 'Luxury Silver', 'Cold~95ºC', '39,990.00', '38,490.00', 38490),
('lgfrontloadwm004', 'F1068LDP', 'product_img/lg_front_load_wm/lgfrontloadwm004.jpg', '5.5', 'Blue White', 'Cold~95ºC', '23,950.00', '22,990.00', 22990),
('lgfrontloadwm002', 'F1256NDP5', 'product_img/lg_front_load_wm/lgfrontloadwm002.jpg', '6', 'Luxury Silver', 'Cold~95ºC', '33,390.00', '32,390.00', 32390),
('lgfrontloadwm003', 'F1256QDP5', 'product_img/lg_front_load_wm/lgfrontloadwm003.jpg', '7', 'Luxury Silver', 'Cold~95ºC', '36,000.00', '35,390.00', 35390),
('lgfrontloadwm006', 'F8068LDP', 'product_img/lg_front_load_wm/lgfrontloadwm006.jpg', '5.0', 'Luxury Silver', 'Cold~95ºC', '21,590.00', '20,990.00', 20990),
('lgfrontloadwm007', 'F1056LDP', 'product_img/lg_front_load_wm/lgfrontloadwm007.jpg', '5.5', 'Blue White', 'Cold,30,40,60,95 c', '25,590.00', '24,990.00', 24990),
('lgfrontloadwm008', 'F1256NDP', 'product_img/lg_front_load_wm/lgfrontloadwm008.jpg', '6', 'Blue White', 'Cold,30,40,60,95 c', '31,990.00', '31,390.00', 31390),
('lgfrontloadwm009', 'F1256QDP', 'product_img/lg_front_load_wm/lgfrontloadwm009.jpg', '7', 'Blue White', 'Cold,30,40,60,95 c', '35,090', '34,390.00', 34390);

-- --------------------------------------------------------

--
-- Table structure for table `lg_home_th`
--

CREATE TABLE `lg_home_th` (
  `id` varchar(20) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '',
  `img_path` varchar(50) NOT NULL DEFAULT '',
  `sound_output` varchar(4) NOT NULL DEFAULT '',
  `speaker_type` varchar(40) NOT NULL DEFAULT '',
  `woffer_output` varchar(40) NOT NULL DEFAULT '',
  `amplifier` varchar(40) NOT NULL DEFAULT '',
  `audio_line` varchar(20) NOT NULL DEFAULT '',
  `mrp` varchar(10) NOT NULL DEFAULT '',
  `new_mrp` varchar(10) NOT NULL DEFAULT '',
  `main_mrp` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lg_home_th`
--

INSERT INTO `lg_home_th` (`id`, `name`, `img_path`, `sound_output`, `speaker_type`, `woffer_output`, `amplifier`, `audio_line`, `mrp`, `new_mrp`, `main_mrp`) VALUES
('lghometh001', 'AT904TA', 'product_img/lg_home_th/lghometh001.jpg', '1000', 'Tower', '1000W RMS(155W*5+225W)', 'Dolby Digital Pro-Logic II', 'Analog / Digital', '28,000.00', '27,230.00', 27230),
('lghometh008', 'HT964TZ', 'product_img/lg_home_th/lghometh008.jpg', '1000', 'Champagne Tall Boy (Pink shade)', '1000W RMS(155W*5+225W)', 'Dolby Digital Pro-Logic II', 'Analog / Digital', '37,990.00', '35,990.00', 35990),
('lghometh007', 'HB954TB', 'product_img/lg_home_th/lghometh007.jpg', '1000', 'Champagne Tall Boy (Blue shade', '1000W RMS(155W*5+225W)', 'Dolby Digital Pro-Logic II', 'Analog / Digital', '56,990.00', '53,990.00', 53990),
('lghometh006', 'HT303SU', 'product_img/lg_home_th/lghometh006.jpg', '300', 'Satellite', '300 w rms (45w x 5 + 75w)', 'Dolby Digital Pro-Logic II', 'Analog / Digital', '12,000.00', '10,990.00', 10990),
('lghometh005', 'HT924SF', 'product_img/lg_home_th/lghometh005.jpg', '1200', 'Satellite', '1200 w rms (175w x 5 + 325w)', 'Class D Full Digital Amplifier', 'Analog / Digital', '20,990.00', '18,990.00', 18990),
('lghometh004', 'HT855PC', 'product_img/lg_home_th/lghometh004.jpg', '850', 'TV Matching 2 Semi Tall Boy', '850W RMS (136W x 5 + 170W)', 'Class D Full', 'Analog / Digital', '20,000.00', '18,990.00', 18990),
('lghometh002', 'HT604', 'product_img/lg_home_th/lghometh002.jpg', '600', 'Satellite', '600 w rms (85w x 5 + 175w)', 'Class D Full Digital Amplifier', 'Analog / Digital', '14,000.00', '13,090.00', 13090),
('lghometh003', 'HT302SD', 'product_img/lg_home_th/lghometh003.jpg', '300', 'Satellite', '300 w rms (45w x 5 + 75w)', 'Class D Full Digital Amplifier', 'Analog', '10,000.00', '9,390.00', 9390);

-- --------------------------------------------------------

--
-- Table structure for table `lg_lcd_tv`
--

CREATE TABLE `lg_lcd_tv` (
  `id` varchar(20) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '',
  `img_path` varchar(50) NOT NULL DEFAULT '',
  `size` varchar(4) NOT NULL DEFAULT '',
  `resolution` varchar(20) NOT NULL DEFAULT '',
  `brightness` varchar(5) NOT NULL DEFAULT '',
  `contrast_ratio` varchar(10) NOT NULL DEFAULT '',
  `audio_output` varchar(15) NOT NULL DEFAULT '',
  `speaker` char(2) NOT NULL DEFAULT '',
  `mrp` varchar(10) NOT NULL DEFAULT '',
  `new_mrp` varchar(10) NOT NULL DEFAULT '',
  `main_mrp` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lg_lcd_tv`
--

INSERT INTO `lg_lcd_tv` (`id`, `name`, `img_path`, `size`, `resolution`, `brightness`, `contrast_ratio`, `audio_output`, `speaker`, `mrp`, `new_mrp`, `main_mrp`) VALUES
('lglcdtv001', '32LD460', 'product_img/lg_lcd_tv/lglcdtv001.jpg', '32', '1920 x 1080px', '500', '100000:1', '15W + 15W', '2', '30,900.00', '30,000.00', 30000),
('lglcdtv006', '32LD550', 'product_img/lg_lcd_tv/lglcdtv006.jpg', '32', '1920 x 1080px', '500', '150000:1', '10W+10W', '5', '42,950.00', '41,990.00', 41990),
('lglcdtv005', '55LD650', 'product_img/lg_lcd_tv/lglcdtv005.jpg', '55', '1920 x 1080px', '500', '2,00,000:1', '10W+10W', '2', '1,38,100', '1,34,990', 134990),
('lglcdtv004', '32LD340', 'product_img/lg_lcd_tv/lglcdtv004.jpg', '32', '1366 x 768px', '500', '100000:1', '10W+10W', '2', '35,550.00', '34,990.00', 34990),
('lglcdtv002', '42LD460', 'product_img/lg_lcd_tv/lglcdtv002.jpg', '42', '1920 x 1080px', '500', '100000:1', '15W + 15W', '2', '58,550.00', '57,990.00', 57990),
('lglcdtv003', '47LD460', 'product_img/lg_lcd_tv/lglcdtv003.jpg', '47', '1920 x 1080px', '500', '100000:1', '15W + 15W', '7', '85,850.00', '84,990.00', 84990),
('lglcdtv007', '32LD650', 'product_img/lg_lcd_tv/lglcdtv007.jpg', '32', '1920 x 1080px', '500', '2,00,000:1', '10W+10W', '2', '41,590.00', '39,990.00', 39990),
('lglcdtv008', '42LD650', 'product_img/lg_lcd_tv/lglcdtv008.jpg', '42', '1920 x 1080px', '500', '150000:1', '10W+10W', '4', '74,990.00', '73,990.00', 73990),
('lglcdtv009', '47LD650', 'product_img/lg_lcd_tv/lglcdtv009.jpg', '47', '1920 x 1080px', '500', '2,00,000:1', '10W+10W', '4', '91,250.00', '89,990.00', 89990),
('lglcdtv010', '19LD340', 'product_img/lg_lcd_tv/lglcdtv010.jpg', '19', '1366 x 768px', '500', '50000:1', '5W+5W', '2', '12,900.00', '11,990.00', 11990),
('lglcdtv011', '22LD310', 'product_img/lg_lcd_tv/lglcdtv011.jpg', '22', '1366 x 768px', '500', '30000:1', '5W+5W', '2', '15,590.00', '14,500.00', 14500);

-- --------------------------------------------------------

--
-- Table structure for table `lg_plasma_tv`
--

CREATE TABLE `lg_plasma_tv` (
  `id` varchar(20) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '',
  `img_path` varchar(50) NOT NULL DEFAULT '',
  `size` varchar(4) NOT NULL DEFAULT '',
  `resolution` varchar(20) NOT NULL DEFAULT '',
  `brightnaess` varchar(5) NOT NULL DEFAULT '',
  `contrast_ratio` varchar(20) NOT NULL DEFAULT '',
  `audio_output` varchar(15) NOT NULL DEFAULT '',
  `speaker` char(1) NOT NULL DEFAULT '',
  `mrp` varchar(12) NOT NULL DEFAULT '',
  `new_mrp` varchar(12) NOT NULL DEFAULT '',
  `main_mrp` int(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lg_plasma_tv`
--

INSERT INTO `lg_plasma_tv` (`id`, `name`, `img_path`, `size`, `resolution`, `brightnaess`, `contrast_ratio`, `audio_output`, `speaker`, `mrp`, `new_mrp`, `main_mrp`) VALUES
('lgplasmatv001', '60PK550', 'product_img/lg_plasma_tv/lgplasmatv001.jpg', '60', '1920 x 1080px', '1500', '3,000,000:1', '10W+10W', '2', '1,55,000.00', '1,49,990.00', 149990),
('lgplasmatv008', '50PK550', 'product_img/lg_plasma_tv/lgplasmatv008.jpg', '50', '1920 x 1080px', '1500', '3,000,000:1', '10W+10W', '2', '80,550.00', '78,990.00', 78990),
('lgplasmatv007', '50PJ560', 'product_img/lg_plasma_tv/lgplasmatv007.jpg', '50', '1024 x 768px', '1500', '3,000,000:1', ' 25W + 25W', '2', '72,950.00', '71,990.00', 71990),
('lgplasmatv006', '50PJ350', 'product_img/lg_plasma_tv/lgplasmatv006.jpg', '50', '1365 x 768px', '1500', '3,000,000:1', '10W+10W', '2', '66,990.00', '65,990.00', 65990),
('lgplasmatv005', '42PJ560', 'product_img/lg_plasma_tv/lgplasmatv005.jpg', '42', '1024 x 768px', '1500', '3,000,000:1', '25W + 25W', '9', '51,150.00', '49,990.00', 49990),
('lgplasmatv004', '42PJ350', 'product_img/lg_plasma_tv/lgplasmatv004.jpg', '42', '1024 x 768px', '1500', '3,000,000:1', '10W+10W', '2', '47,990.00', '46,990.00', 46990),
('lgplasmatv002', '42PJ650', 'product_img/lg_plasma_tv/lgplasmatv002.jpg', '42', '1365 x 768px', '1500', '3,000,000:1', '10W+10W', '2', '51,000.00', '49,990.00', 49990),
('lgplasmatv003', '50PJ650', 'product_img/lg_plasma_tv/lgplasmatv003.jpg', '50', '1365 x 768px', '1500', '3,000,000:1', '10W+10W', '2', '72,750.00', '70,990.00', 70990);

-- --------------------------------------------------------

--
-- Table structure for table `lg_rf`
--

CREATE TABLE `lg_rf` (
  `id` varchar(20) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '',
  `img_path` varchar(50) NOT NULL DEFAULT '',
  `capacity` varchar(4) NOT NULL DEFAULT '',
  `Cooling` varchar(40) NOT NULL DEFAULT '',
  `temperature_control` varchar(30) NOT NULL DEFAULT '',
  `door_finish` varchar(30) NOT NULL DEFAULT '',
  `door_type` varchar(30) NOT NULL DEFAULT '',
  `color` varchar(40) NOT NULL DEFAULT '',
  `shelf_type` varchar(40) NOT NULL DEFAULT '',
  `mrp` varchar(10) NOT NULL DEFAULT '',
  `new_mrp` varchar(10) NOT NULL DEFAULT '',
  `main_mrp` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lg_rf`
--

INSERT INTO `lg_rf` (`id`, `name`, `img_path`, `capacity`, `Cooling`, `temperature_control`, `door_finish`, `door_type`, `color`, `shelf_type`, `mrp`, `new_mrp`, `main_mrp`) VALUES
('lgrf001', 'GL - 254VM5', 'product_img/lg_rf/lgrf001.jpg', '390', 'Green Ion Door Cooling', 'Internal Micom', 'VCM', 'Flat Door', 'Titanium', 'Toughened Glass', '15,500.00', '14,800.00', 14800),
('lgrf005', 'GL-335VM5', 'product_img/lg_rf/lgrf005.jpg', '320', 'Door Cooling', 'Manual', 'Metallic', 'Vogue', 'Light Inox,Mid Night Dazzle', 'Toughened Glass', '23,550.00', '22,600.00', 22600),
('lgrf004', 'GL-335VV5', 'product_img/lg_rf/lgrf004.jpg', '320', 'Door Cooling', 'Mechanical', 'VCM', 'Chamfered', 'Silver Ultima / Black Knight', 'Toughened Glass', '24,850.00', '23,700.00', 23700),
('lgrf002', 'LG-405YMQG4', 'product_img/lg_rf/lgrf002.jpg', '390', 'Door Cooling', 'Internal Micom', 'Metallic', 'Flat Door', 'Light Inox', 'Toughened Glass', '30,590.00', '29,850.00', 29850),
('lgrf003', 'GL-338VT5', 'product_img/lg_rf/lgrf003.jpg', '320', 'Green Ion Door Cooling', 'Mechanical', 'Tango Metallic', 'Chamfered', 'Wooden Tango,Pink Tango', 'Toughened Glass', '25,990.00', '24,100.00', 24100),
('lgrf006', 'GL-308VT5', 'product_img/lg_rf/lgrf006.jpg', '290', 'Green Ion Door Cooling', 'Mechanical', 'Tango Metallic', 'Chamfered', 'Wooden Tango, Pink Tango', 'Toughened Glass', '22,200.00', '21,300.00', 21300),
('lgrf007', 'GL-305VV5', 'product_img/lg_rf/lgrf007.jpg', '290', 'Door Cooling', 'Mechanical', 'VCM', 'Chamfered', 'Silver Ultima / Black Knight', 'Toughened Glass', '21,400.00', '19,700.00', 19700),
('lgrf008', 'GL-305VM5', 'product_img/lg_rf/lgrf008.jpg', '290', 'Door Cooling', 'Manual', 'Metallic', 'Chamfered', 'Light Inox, Mid Night Dazzle', 'Toughened Glass', '20,000.00', '19,500.00', 19500),
('lgrf010', 'GL-255VM5', 'product_img/lg_rf/lgrf010.jpg', '240', 'Door Cooling', 'Manual', 'Metallic', 'Chamfered', 'Light Inox,Mid Night Dazzle,Fantasy Blue', 'Toughened Glass', '17,390.00', '16,200.00', 16200),
('lgrf009', 'GL-338VE5', 'product_img/lg_rf/lgrf009.jpg', '320', 'Green Ion Door Cooling', 'Mechanical', 'VCM (Blossom)', 'Chamfered', 'Coral Blossom(Pink Blossom),Silk Blossom', 'Toughened Glass', '25,990.00', '24,800.00', 24800),
('lgrf011', 'GL-335VA5', 'product_img/lg_rf/lgrf011.jpg', '320', 'Door Cooling', 'Mechanical', 'ART PCM', 'Chamfered', 'Crimson Modern', 'Toughened Glass', '24,690.00', '23,900.00', 23900),
('lgrf012', 'GL-254VM5', 'product_img/lg_rf/lgrf012.jpg', '240', '4-Way Cooling', 'Mechanical', 'Metallic', 'Chamfered', 'Cosmic Inox', 'Wire Shelves', '15,200.00', '14,800.00', 14800),
('lgrf013', 'GL-528YSX4', 'product_img/lg_rf/lgrf013.jpg', '466', 'Green Ion Door Cooling', 'External Micom', 'VCM', 'Flat', 'Stainless Steel', 'Toughened Glass', '48,490.00', '47,000.00', 47000);

-- --------------------------------------------------------

--
-- Table structure for table `lg_split_ac`
--

CREATE TABLE `lg_split_ac` (
  `id` varchar(20) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '',
  `img_path` varchar(50) NOT NULL DEFAULT '',
  `ton` varchar(4) NOT NULL DEFAULT '',
  `colling` varchar(4) NOT NULL DEFAULT '',
  `power_input` varchar(15) NOT NULL DEFAULT '',
  `eer` varchar(15) NOT NULL DEFAULT '',
  `air_circulation` varchar(15) NOT NULL DEFAULT '',
  `noise_level` varchar(4) NOT NULL DEFAULT '',
  `mrp` varchar(10) NOT NULL DEFAULT '',
  `new_mrp` varchar(10) NOT NULL DEFAULT '',
  `main_mrp` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lg_split_ac`
--

INSERT INTO `lg_split_ac` (`id`, `name`, `img_path`, `ton`, `colling`, `power_input`, `eer`, `air_circulation`, `noise_level`, `mrp`, `new_mrp`, `main_mrp`) VALUES
('lgsplitac004', 'LSA5AW3VT6', 'product_img/lg_split_ac/lgsplitac004.jpg', '1.5', '5275', '1830', '2.88', '565/1550', '40', '31.000.00', '28,590.00', 28590),
('lgsplitac002', 'LSA24CGAFH1', 'product_img/lg_split_ac/lgsplitac002.jpg', '2.0', '6300', '2450 / 2480', '2.57 / 2.6', '530/1600', '42', '34,990.00', '32,790.00', 32790),
('lgsplitac003', 'LSA5RW5CB1', 'product_img/lg_split_ac/lgsplitac003.jpg', '1.5', '5450', '1620', '3.36', '565/1600', '40', '39,000.00', '37,990.00', 37990),
('lgsplitac005', 'LSA5AW5VT', 'product_img/lg_split_ac/lgsplitac005.jpg', '1.5', '5275', '1660', '3.17', '565/1600', '40', '33,000.00', '32,090.00', 32090),
('lgsplitac006', 'LSA5NF3VF6', 'product_img/lg_split_ac/lgsplitac006.jpg', '1.5', '5125', '1830', '2.88', '500/1485', '40', '30,000.00', '28,090.00', 28090),
('lgsplitac007', 'LSA6AW2VT1', 'product_img/lg_split_ac/lgsplitac007.jpg', '2.0', '6450', '2428', '2.6', '585/1600', '42', '33,000.00', '31,290.00', 31290),
('lgsplitac008', 'LSA6AW3VT1', 'product_img/lg_split_ac/lgsplitac008.jpg', '2.0', '6300', '2250', ' 2.8', '585/1600', '42', '35,590.00', '34,590.00', 34590),
('lgsplitac009', 'LSA3AW2VT1', 'product_img/lg_split_ac/lgsplitac009.jpg', '1.0', '3516', '1310', '2.68', '390/1485', '38', '23,000.00', '22,090.00', 22090),
('lgsplitac010', 'LSA3AW3VT1', 'product_img/lg_split_ac/lgsplitac010.jpg', '1.0', '3516', '1240', '2.84', '390/1485', '38', '23,990.00', '23,090.00', 23090),
('lgsplitac001', 'LSA18CGAFH1', 'product_img/lg_split_ac/lgsplitac001.jpg', '1.5', '5040', '1800 / 1800', '2.8/2.8', '500/1600', '40', '35,000.00', '32,790.00', 32790);

-- --------------------------------------------------------

--
-- Table structure for table `lg_top_load_wm`
--

CREATE TABLE `lg_top_load_wm` (
  `id` varchar(20) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '',
  `img_path` varchar(50) NOT NULL DEFAULT '',
  `capacity` varchar(4) NOT NULL DEFAULT '',
  `color` varchar(40) NOT NULL DEFAULT '',
  `pulsator` varchar(20) NOT NULL DEFAULT '',
  `mrp` varchar(10) NOT NULL DEFAULT '',
  `new_mrp` varchar(10) NOT NULL DEFAULT '',
  `main_mrp` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lg_top_load_wm`
--

INSERT INTO `lg_top_load_wm` (`id`, `name`, `img_path`, `capacity`, `color`, `pulsator`, `mrp`, `new_mrp`, `main_mrp`) VALUES
('lgtoploadwm001', 'T8503TEET3', 'product_img/lg_top_load_wm/lgtoploadwm001.jpg', '9.0', 'Dark Red', 'Punch+3', '25,500.00', '24,990.00', 24990),
('lgtoploadwm008', 'WF-T7239KS', 'product_img/lg_top_load_wm/lgtoploadwm008.jpg', '6', 'Free Silver', 'Punch + 3', '23,000.00', '21,950.00', 21950),
('lgtoploadwm007', 'WF-N7069NP', 'product_img/lg_top_load_wm/lgtoploadwm007.jpg', '6', 'Lotus Pink/Cool Grey', 'Punch+3', '21,590.00', '19,990.00', 19990),
('lgtoploadwm006', 'N7039NP', 'product_img/lg_top_load_wm/lgtoploadwm006.jpg', '6', 'Lotus Pink/Cool Grey', 'Punch+3', '20,790.00', '20,000.00', 20000),
('lgtoploadwm005', 'WF-N6866DN', 'product_img/lg_top_load_wm/lgtoploadwm005.jpg', '5.8', 'Cool Grey', 'Punch+3', '12,000.00', '11,240.00', 11240),
('lgtoploadwm004', 'T7519PV', 'product_img/lg_top_load_wm/lgtoploadwm004.jpg', '6.5', 'Dark Red /Dark Red Pattern', 'Punch + 3', '24,000.00', '23,390.00', 23390),
('lgtoploadwm002', 'T8503TEET3', 'product_img/lg_top_load_wm/lgtoploadwm002.jpg', '9.0', 'Dark Red', 'Punch+3', '25,490.00', '24,990.00', 24990),
('lgtoploadwm003', 'T7519PR', 'product_img/lg_top_load_wm/lgtoploadwm004.jpg', '6.5', 'Mystic Red/Free Silver', 'Punch + 3', '21,590.00', '20,990.00', 20990),
('lgtoploadwm009', 'WF-T7239PR', 'product_img/lg_top_load_wm/lgtoploadwm009.jpg', '6', 'Mystic Red/Free Silver', 'Punch + 3', '15,490.00', '14,790.00', 14790),
('lgtoploadwm010', 'WF-T7239UL', 'product_img/lg_top_load_wm/lgtoploadwm010.jpg', '6.2', 'Marine Blue/Cool Grey', 'Punch + 3', '14,590.00', '13,690.00', 13690),
('lgtoploadwm011', 'WF-T7519QL', 'product_img/lg_top_load_wm/lgtoploadwm011.jpg', '6.5', 'Marine Blue/Cool Grey', 'Punch + 3', '16,000.00', '15,190.00', 15190),
('lgtoploadwm012', 'WF-T7549UP', 'product_img/lg_top_load_wm/lgtoploadwm012.jpg', '6.5', 'Silky Pink/Cool Grey', 'Punch + 3', '15,590.00', '14,690.00', 14690);

-- --------------------------------------------------------

--
-- Table structure for table `lg_window_ac`
--

CREATE TABLE `lg_window_ac` (
  `id` varchar(20) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '',
  `img_path` varchar(50) NOT NULL DEFAULT '',
  `ton` varchar(4) NOT NULL DEFAULT '',
  `cooling` varchar(4) NOT NULL DEFAULT '',
  `eer` varchar(4) NOT NULL DEFAULT '',
  `air_circulation` varchar(4) NOT NULL DEFAULT '',
  `noise_level` varchar(4) NOT NULL DEFAULT '',
  `power_input` varchar(4) NOT NULL DEFAULT '',
  `running_current` varchar(4) NOT NULL DEFAULT '',
  `mrp` varchar(10) NOT NULL DEFAULT '',
  `new_mrp` varchar(10) NOT NULL DEFAULT '',
  `main_mrp` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lg_window_ac`
--

INSERT INTO `lg_window_ac` (`id`, `name`, `img_path`, `ton`, `cooling`, `eer`, `air_circulation`, `noise_level`, `power_input`, `running_current`, `mrp`, `new_mrp`, `main_mrp`) VALUES
('lgwindowac001', 'LWA6HW1DD1', 'product_img/lg_window_ac/lgwindowac001.jpg', '2', '6450', '2.5', '550', '56', '2600', '11.9', '23,000.00', '22,390.00', 22390),
('lgwindowac005', 'LWA2DW1AF1', 'product_img/lg_window_ac/lgwindowac005.jpg', '0.75', '2490', '2.49', '210', '45', '1000', '4.6', '12,000.00', '10,990.00', 10990),
('lgwindowac004', 'LWA18GWAFH1', 'product_img/lg_window_ac/lgwindowac004.jpg', '1.5', '1750', '2.5', '480', '52', '1850', '8.9', '23,000.00', '21,790.00', 21790),
('lgwindowac002', 'LWA5AW4AF1', 'product_img/lg_window_ac/lgwindowac002.jpg', '1.5', '5050', '2.9', '500', '55', '1685', '7.6', '26,000.00', '24,690.00', 24690),
('lgwindowac003', 'LWA5FW1DF1', 'product_img/lg_window_ac/lgwindowac003.jpg', '1.5', '5050', '2.5', '500', '52', '2075', '9.5', '20,500.00', '19,190.00', 19190),
('lgwindowac006', 'LWA3EW1DF1', 'product_img/lg_window_ac/lgwindowac006.jpg', '1', '3370', '2.5', '350', '48', '1355', '6', '20,000.00', '19,090.00', 19090),
('lgwindowac007', 'LWA3EW2DD1', 'product_img/lg_window_ac/lgwindowac007.jpg', '1', '3370', '2.6', '350', '48', '1280', '5.9', '18.000.00', '16.890.00', 16890),
('lgwindowac008', 'LWA5EW1DF1', 'product_img/lg_window_ac/lgwindowac008.jpg', '1.5', '5050', '2.4', '500', '52', '2075', '9.5', '21,000.00', '20,000.00', 20000),
('lgwindowac009', 'LWA5FW2DF1', 'product_img/lg_window_ac/lgwindowac009.jpg', '1.5', '5050', '2.6', '500', '52', '1940', '8.9', '12,000.00', '10,990.00', 10990),
('lgwindowac010', 'LWA5HW2DD1', 'product_img/lg_window_ac/lgwindowac010.jpg', '1.5', '5050', '2.6', '500', '52', '1940', '8.9', '21,000.00', '19,790.00', 19790),
('lgwindowac011', 'LWA5HW3DD1', 'product_img/lg_window_ac/lgwindowac011.jpg', '1.5', '5275', '2.8', '500', '52', '1885', '8.5', '23,000.00', '21,790.00', 21790);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `user` varchar(30) NOT NULL DEFAULT '',
  `pass` varchar(30) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '',
  `last_name` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `gender` char(1) NOT NULL DEFAULT '',
  `address` varchar(150) NOT NULL DEFAULT '',
  `country` varchar(30) NOT NULL DEFAULT '',
  `state` varchar(30) NOT NULL DEFAULT '',
  `city` varchar(30) NOT NULL DEFAULT '',
  `mobile_no` varchar(20) NOT NULL DEFAULT '',
  `delivery_address` varchar(150) NOT NULL DEFAULT '',
  `delivery_country` varchar(30) NOT NULL DEFAULT '',
  `delivery_state` varchar(30) NOT NULL DEFAULT '',
  `delivery_city` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`user`, `pass`, `name`, `last_name`, `email`, `gender`, `address`, `country`, `state`, `city`, `mobile_no`, `delivery_address`, `delivery_country`, `delivery_state`, `delivery_city`) VALUES
('tushar', 'tushar', 'tushar', 'sabapara', 'tusharsabapara@gmail.com', 'm', 'Kuber Nagar,\r\nNavlakhi Road,\r\nMorbi ? 363641.', 'india', 'gujarat', 'morbi', '+918866304056', 'Kuber Nagar,\r\nNavlakhi Road,\r\nMorbi ? 363641.', 'india', 'gujarat', 'morbi'),
('ankit', 'ankit', 'ankit', 'chaniyara', 'ankitchaniyara2135@gmail.com', 'm', 'Jivan Jayot soc., vavdi road,Morbi-363641', 'India', 'gujarat', 'morbi', '9687000243', 'Jivan Jayot soc., vavdi road,Morbi-363641', 'India', 'gujarat', 'morbi'),
('dhaval', 'dhaval', 'dhaval', 'dave', 'dave.dhaval92@gmail.com', 'm', 'rajkot', 'India', 'gujarat', 'rajkot', '7405241650', 'rajkot', 'India', 'gujarat', 'rajkot');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `no` int(8) NOT NULL AUTO_INCREMENT,
  `user_temp` varchar(30) NOT NULL DEFAULT '',
  `Product_table_name` varchar(20) NOT NULL DEFAULT '',
  `product_id` varchar(20) NOT NULL DEFAULT '',
  `qnt` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=448 ;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`no`, `user_temp`, `Product_table_name`, `product_id`, `qnt`) VALUES
(438, 'ttt', 'vc_satellite_tv', 'vcsattv008', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vc_lcd_tv`
--

CREATE TABLE `vc_lcd_tv` (
  `id` varchar(20) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '',
  `img_path` varchar(50) NOT NULL DEFAULT '',
  `size` varchar(4) NOT NULL DEFAULT '',
  `resolution` varchar(20) NOT NULL DEFAULT '',
  `audio_type` varchar(30) NOT NULL DEFAULT '',
  `color` varchar(15) NOT NULL DEFAULT '',
  `contrast` varchar(40) NOT NULL DEFAULT '',
  `brightness` varchar(40) NOT NULL DEFAULT '',
  `screen_size_range` varchar(30) NOT NULL DEFAULT '',
  `num_of_spaker` int(1) NOT NULL DEFAULT '0',
  `mrp` varchar(10) NOT NULL DEFAULT '0',
  `new_mrp` varchar(10) NOT NULL DEFAULT '0',
  `main_mrp` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vc_lcd_tv`
--

INSERT INTO `vc_lcd_tv` (`id`, `name`, `img_path`, `size`, `resolution`, `audio_type`, `color`, `contrast`, `brightness`, `screen_size_range`, `num_of_spaker`, `mrp`, `new_mrp`, `main_mrp`) VALUES
('vclcdtv001', 'Videocon LCD - 42Inches - Full HD -VCL42FBT', 'product_img/vc_lcd_tv/vclcdtv001.jpg', '42', '1920 X 1080px', '6 sound mode', '16.7 Billion', '50000:1', '500 cd/m2', '38 to 46 inches', 6, '54,990.00', '44,990.00', 44990),
('vclcdtv010', 'Videocon LCD TV - 19Inches - HD Ready - VBL19SBH', 'product_img/vc_lcd_tv/vclcdtv010.jpg', '19', '1366x768 Px', '4 sound mode', '16.2 million', '10000:1', '500cd/m2', '18 to 26 inches', 2, '10,990.00', '9,990.00', 9990),
('vclcdtv009', 'Videocon LCD TV - 19Inches - Hd Ready VLL19SBH', 'product_img/vc_lcd_tv/vclcdtv009.jpg', '19', '1440 x 900 Pixels', '2 sound mode', '16.7 Million', '15000:1', '300 Cd/m2', '17 to 21 inches', 2, '11,290.00', '10,990.00', 10990),
('vclcdtv008', 'Videocon LCD TV - 22Inches - HD Ready - VLL22SBH', 'product_img/vc_lcd_tv/vclcdtv008.jpg', '22', '1366 x 768 Pixels', '4 sound mode', '16.7 Million', '30000:1', '350 Cd/m2', '22 to 29 inches', 2, '15,990.00', '14,990.00', 14990),
('vclcdtv007', 'Videocon LCD TV - 22Inches - HD Ready - VIL22SBH', 'product_img/vc_lcd_tv/vclcdtv007.jpg', '22', '1366 x 768 Pixels', '4 Sound Mode', '16.7 Million', '30000:1', '350 Cd/m2', '22 to 29 inches', 4, '16,990.00', '15,990.00', 15990),
('vclcdtv006', 'Videocon LCD TV - 26Inches - HD Ready - VBL26HBA', 'product_img/vc_lcd_tv/vclcdtv006.jpg', '26', '1366x768px', '4 Soud Mode', '16.2 million', '20000:1', '500cd/m2', '24 to 26 inches', 4, '22,990.00', '19,990.00', 19990),
('vclcdtv002', 'Videocon LCD TV - 32Inches - Full HD - VIL32FBA', 'product_img/vc_lcd_tv/vclcdtv002.jpg', '32', '1920 x 1080px', '2 sound mode', '16.7 Million', '100000:1', '450 Cd/m2', '30 to 37 inches', 2, '34,990.00', '30,990.00', 30990),
('vclcdtv003', 'Videocon LCD TV - 32 Inches - Full HD - VLL32FBA', 'product_img/vc_lcd_tv/vclcdtv003.jpg', '32', '1920 x1080 px', '4 Sound Mode', '1.06 Billion', '100000:1', '450 Cd/m2', '30 to 37 inches', 2, '33,990.00', '29,990.00', 29990),
('vclcdtv004', 'Videocon LCD TV - 32Inches - HD Ready VIL32WBA', 'product_img/vc_lcd_tv/vclcdtv004.jpg', '32', '1366 x 768 Pixels', '2 sound mode', '16.7 Million', '75000:1', '450 Cd/m2', '30 to 37 inches', 2, '32,990.00', '28,990.00', 28990),
('vclcdtv005', 'VIDEOCON VLL32HBA', 'product_img/vc_lcd_tv/vclcdtv005.jpg', '32', '1366 x 768 Pixels', '2 Sound Mode', '16.7 Million', '75000:1', '350 Cd/m2', '30 to 37 inches', 2, '29,990.00', '27,990.00', 27990);

-- --------------------------------------------------------

--
-- Table structure for table `vc_ref`
--

CREATE TABLE `vc_ref` (
  `id` varchar(20) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '',
  `img_path` varchar(50) NOT NULL DEFAULT '',
  `litres` int(3) NOT NULL DEFAULT '0',
  `mix_info` text NOT NULL,
  `mrp` varchar(10) NOT NULL DEFAULT '',
  `new_mrp` varchar(10) NOT NULL DEFAULT '',
  `main_mrp` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vc_ref`
--

INSERT INTO `vc_ref` (`id`, `name`, `img_path`, `litres`, `mix_info`, `mrp`, `new_mrp`, `main_mrp`) VALUES
('vcref003', 'VIDEOCON Refrigerator 190Litres 3 Star', 'product_img/vc_ref/vcref003.jpg', 190, '3 Star BEE Rating\r\nInsitu foaming\r\nAttractive ORNATE Door Handle\r\nCentrally embossed door\r\nRemovable Gasket\r\nTransparent door accessories\r\nDoor Lock\r\nEnergy Efficient Compressor\r\n1+4 yrs warranty\r\nStabilizer free', '8,990.00', '7,900.00', 7900),
('vcref002', 'VIDEOCON Refrigerator 230Litres 3 Star', 'product_img/vc_ref/vcref002.jpg', 230, '3 Star BEE rating\r\nPCM Door for luxurious Fit & Feel\r\nE – Fresh (Ionizer)\r\nDeodriser\r\nInsitu foaming\r\nTwist Ice Tray\r\nToughened Glass Shelves\r\nCentral Lock Facility\r\nHumidity Control\r\nTransparent interiors\r\nCrisp', '13,490.00', '12,000.00', 12000),
('vcref001', 'VIDEOCON Refrigerator 300Litres 3 Star', 'product_img/vc_ref/vcref001.jpg', 300, '3 Star BEE Rating\r\nPCM Door for luxurious Fit & Feel\r\nE – Fresh (Ionizer)\r\nDeodriser\r\nInsitu foaming\r\nTwist Ice Tray\r\nTransparent interiors\r\nToughened glass shelves\r\nCenter Lock facility\r\nHumidity control\r\nWarra', '14,990.00', '14,900.00', 14900),
('vcref004', 'VIDEOCON Refrigerator 170Litres 3 Star', 'product_img/vc_ref/vcref004.jpg', 170, '3 Star BEE rating\r\nInsitu Foaming\r\nAttractive Door Handle\r\nCentrally Embossed Door\r\nOpaque Accessories\r\nAuto Defrosting\r\nDoor Lock\r\nEnergy Efficient Compressor\r\n1+4 yrs warranty\r\nStabilizer free operation', '8,490.00', '7,800.00', 7800),
('vcref005', 'VIDEOCON Refrigerator 80Litres', 'product_img/vc_ref/vcref005.jpg', 80, 'PCM Door for luxurious Fit & Feel\r\nRound Door with recessed Handle\r\nAdjustable shelf\r\nAuto Defrost\r\n1+4 yrs warranty\r\nCapacity 80 Liters', '7,090.00', '6,350.00', 6350),
('vcref006', 'VIDEOCON Refrigerator 50Litres', 'product_img/vc_ref/vcref006.jpg', 50, 'PCM Door for luxurious Fit & Feel\r\nCurved Door with recessed Handle\r\nSemiautomatic Defrosting\r\nExtruded Bottle Supporter\r\nInbuilt Door Shelves\r\n1+4 yrs warranty\r\nCapacity 50 Liters', '6,490.00', '5,800.00', 5800);

-- --------------------------------------------------------

--
-- Table structure for table `vc_satellite_tv`
--

CREATE TABLE `vc_satellite_tv` (
  `id` varchar(20) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '',
  `img_path` varchar(50) NOT NULL DEFAULT '',
  `resolution` varchar(20) NOT NULL DEFAULT '',
  `color` varchar(15) NOT NULL DEFAULT '',
  `Contrast Ratio` varchar(15) NOT NULL DEFAULT '',
  `Contrast Ratio Range` varchar(20) NOT NULL DEFAULT '',
  `Other Info` varchar(60) NOT NULL DEFAULT '',
  `mrp` varchar(10) NOT NULL DEFAULT '',
  `new_mrp` varchar(10) NOT NULL DEFAULT '',
  `main_mrp` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vc_satellite_tv`
--

INSERT INTO `vc_satellite_tv` (`id`, `name`, `img_path`, `resolution`, `color`, `Contrast Ratio`, `Contrast Ratio Range`, `Other Info`, `mrp`, `new_mrp`, `main_mrp`) VALUES
('vcsattv001', 'VIDEOCON V4208FD', 'product_img/vc_sat_tv/vcsattv001.jpg', '1920 X 1080px', '1.06 Billion', '200000:1', 'Above 50000', 'Energy meter, TOUCH CONTROLS, CAPTURE Logo', '70,000.00', '62,490.00', 62490),
('vcsattv008', 'VIDEOCON V2406HE', 'product_img/vc_sat_tv/vcsattv008.jpg', '1366x768 Pixels', '16.7 Million', '40000:1', '20001 to 50000', 'Multi Functional Monitor, DCDI, ENERGY METER', '21,390.00', '20,490.00', 20490),
('vcsattv007', 'VIDEOCON V3203HB', 'product_img/vc_sat_tv/vcsattv007.jpg', '1366x768 Pixels', '16.7 Million', '200000:1', 'Above 50000', '3D NOISE REDUCTION, DNR, INBUILT D2H', '25,550.00', '26990', 26990),
('vcsattv006', 'VIDEOCON V3204HB', 'product_img/vc_sat_tv/vcsattv006.jpg', '1366x768 Pixels', '16.7 Million', '200000:1', 'Above 50000', 'INBUILT D2H, DNR, ECO VISION, 3D NOISE REDUCTION', '33,750.00', '32,990.00', 32990),
('vcsattv005', 'VIDEOCON V3206HB', 'product_img/vc_sat_tv/vcsattv005.jpg', '1366x768 Pixels', '16.7 Million', '200000:1', 'Above 50000', 'INBUILT D2H, ECO VISION, 3D NOISE REDUCTION, DNR', '35,590.00', '34,990.00', 34990),
('vcsattv002', 'VIDEOCON V3206FB', 'product_img/vc_sat_tv/vcsattv002.jpg', '1920x1080 Pixels', '16.7 Million', '200000:1', 'Above 50000', 'ECO VISION, 3D NOISE REDUCTION, DNR', '39,990.00', '38,990.00', 38990),
('vcsattv003', 'VIDEOCON V3205FB', 'product_img/vc_sat_tv/vcsattv001.jpg', '1920x1080 Pixels', '16.7 Million', '200000:1', 'Above 50000', '	 3D NOISE REDUCTION, DNR, INBUILT D2H, ECO VISION', '38,990.00', '37,990.00', 37990),
('vcsattv004', 'VIDEOCON V3204FB', 'product_img/vc_sat_tv/vcsattv004.jpg', '1920x1080 Pixels', '16.7 Million', '200000:1', 'Above 50000', '	 INBUILT D2H, DNR, ECO VISION, 3D NOISE REDUCTION', '37,790.00', '36,990.00', 36990),
('vcsattv009', 'VIDEOCON V2405F', 'product_img/vc_sat_tv/vcsattv009.jpg', '1920x1080 Pixels', '16.7 Million', '40000:1', '20001 to 50000', 'INBUILT D2H, DCDI, ENERGY METER', '19,990.00', '18,550.00', 18550),
('vcsattv010', 'VIDEOCON V2205SH', 'product_img/vc_sat_tv/vcsattv010.jpg', '1366x768 Pixels', '16.7 Million', '30000:1', '20001 to 50000', 'INBUILT D2H, DNR, DCDI', '18,590.00', '17,990.00', 17990),
('vcsattv011', 'VIDEOCON V2204SC', 'product_img/vc_sat_tv/vcsattv011.jpg', '1366x768 Pixels', '16.7 Million', '30000:1', '20001 to 50000', 'INBUILT D2H, DNR, DCDI', '16,690.00', '15,990.00', 15990);

-- --------------------------------------------------------

--
-- Table structure for table `vc_split_ac`
--

CREATE TABLE `vc_split_ac` (
  `id` varchar(20) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '',
  `img_path` varchar(50) NOT NULL DEFAULT '',
  `ton` varchar(10) NOT NULL DEFAULT '',
  `usp` varchar(25) NOT NULL DEFAULT '',
  `cooling_mode` varchar(30) NOT NULL DEFAULT '',
  `colling_capacity` varchar(5) NOT NULL DEFAULT '',
  `power_input` varchar(5) NOT NULL DEFAULT '',
  `eer` varchar(5) NOT NULL DEFAULT '',
  `mrp` varchar(10) NOT NULL DEFAULT '',
  `new_mrp` varchar(10) NOT NULL DEFAULT '',
  `main_mrp` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vc_split_ac`
--

INSERT INTO `vc_split_ac` (`id`, `name`, `img_path`, `ton`, `usp`, `cooling_mode`, `colling_capacity`, `power_input`, `eer`, `mrp`, `new_mrp`, `main_mrp`) VALUES
('vcsplitac001', 'Videocon Split AC 2Ton - DC Inverter VIS67', 'product_img/vc_split_ac/vcsplitac001.jpg', '2', 'Ionizer', 'Hot & Cold', '6480', '1830', '3.54', '55,990.00', '53,490.00', 53490),
('vcsplitac002', 'Videocon Split AC 1.5Ton - DC Inverter VIS57', 'product_img/vc_split_ac/vcsplitac002.jpg', '1.5', 'Ionizer', 'Hot & Cold', '5275', '1570', '3.36', '47,990.00', '45,490.00', 45490),
('vcsplitac003', 'Videocon Split AC 2Ton - 3Star Rated VPS63', 'product_img/vc_split_ac/vcsplitac003.jpg', '2', 'Louver Step Adjust', 'Powerful Cooling Mode', '6450', '2230', '2.89', '32,990.00', '30,790.00', 30790),
('vcsplitac004', 'Videocon Split AC 1.5Ton - 3Star Rated VPS53', 'product_img/vc_split_ac/vcsplitac003.jpg', '1.5', 'Louver Step Adjust', 'Powerful Cooling Mode', '5300', '1900', '2.79', '24,790.00', '23,190.00', 23190),
('vcsplitac005', 'Videocon Split AC 1Ton - 3Star Rated VPS33', 'product_img/vc_split_ac/vcsplitac005.jpg', '1', 'Louver Step Adjust', 'Powerful Cooling Mode', '3600', '1275', '2.82', '20,290.00', '18,890.00', 18890);

-- --------------------------------------------------------

--
-- Table structure for table `vc_standard_tv`
--

CREATE TABLE `vc_standard_tv` (
  `id` varchar(20) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '',
  `img_path` varchar(50) NOT NULL DEFAULT '',
  `size` varchar(4) NOT NULL DEFAULT '',
  `screen_size_range` varchar(20) NOT NULL DEFAULT '',
  `screen_type` varchar(20) NOT NULL DEFAULT '',
  `audio_type` varchar(30) NOT NULL DEFAULT '',
  `audio_output` varchar(15) NOT NULL DEFAULT '',
  `audio_output_range` varchar(25) NOT NULL DEFAULT '',
  `sound_leveler` varchar(40) NOT NULL DEFAULT '',
  `other` varchar(70) NOT NULL DEFAULT '',
  `mrp` varchar(10) NOT NULL DEFAULT '',
  `new_mrp` varchar(10) NOT NULL DEFAULT '',
  `main_mrp` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vc_standard_tv`
--

INSERT INTO `vc_standard_tv` (`id`, `name`, `img_path`, `size`, `screen_size_range`, `screen_type`, `audio_type`, `audio_output`, `audio_output_range`, `sound_leveler`, `other`, `mrp`, `new_mrp`, `main_mrp`) VALUES
('vcsatntv001', 'VIDEOCON 29Inches Flat TV', 'product_img/vc_standard_tv/vcstantv001.jpg', '29', '22 to 29 inches', 'Flat Screen', 'AV Stereo', '1200 Watts', 'Above 600 Watts', '7-Band Graphic Equalizer', '200 Channels', '13,590.00', '12,850.00', 12850),
('vcstantv009', 'VIDEOCON 21 Inches Falt TV', 'product_img/vc_standard_tv/vcstantv009.jpg', '21', '17 to 21 inches', 'Flat Screen', 'Stereo Sound', '1000 Watts', 'Above 600 Watts', '7-Band Graphic Equalizer', '4 SELECTABLE SOUND MODES,GAME,SENSI EYE', '9,090.00', '8,725.00', 8725),
('vcstantv008', 'VIDEOCON 21 Inches Flat TV', 'product_img/vc_standard_tv/vcstantv008.jpg', '21', '17 to 21 inch', 'Flat Screen', 'AV Stereo', '1200 Watts', 'Above 600 Watts', '3-Band Graphic Equalizer', ' 200 Programme Memory,4 Sound Modes,Double Woofers technology,05 Pictu', '9,590.00', '9,125.00', 9125),
('vcstantv007', 'VIDEOCON 21 Inches Flat TV', 'product_img/vc_standard_tv/vcstantv007.jpg', '21', '17 to 21 inches', 'Flat Screen', 'AV Stereo', '1500 Watts', 'Above 600 Watts', '3-Band Graphic Equalizer', '	 200 Channels,05 Picture Modes,4 Sound Modes', '9,790.00', '9,325.00', 9325),
('vcstantv006', 'VIDEOCON VDF29SSJ', 'product_img/vc_standard_tv/vcstantv006.jpg', '29', '22 to 29 inches', 'Flat Screen', 'AV Stereo', '600 Watts', '401 to 600 Watts', 'Sound Equilizer', '200 Channels,Picture Improvement,Noise Filter,Music Mode,Child Lock,Ho', '10,990.00', '9,440.00', 9440),
('vcstantv005', 'VIDEOCON 29Inches Flat TV', 'product_img/vc_standard_tv/vcstantv005.jpg', '29', '22 to 29 inches', 'Flat Screen', 'AV Stereo', '400 Watts', '201 to 400 Watts', '7-Band Graphic Equalizer', '200 Channels,SVMC Technology,Picture Improvement Technology,Digital Se', '10,790.00', '10,425.00', 10425),
('vcstantv002', 'VIDEOCON 29inches Ultra Slim Flat TV', 'product_img/vc_standard_tv/vcstantv002.jpg', '29', '22 to 29 inches', 'Slim Flat Screen', 'AV Stereo', '400 Watts', '201 to 400 Watts', '5-Band Graphic Equalizer', '200 Channels', '13,090.00', '11,950.00', 11950),
('vcstantv003', 'VIDEOCON 29 inches TV 5 star', 'product_img/vc_standard_tv/vcstantv003.jpg', '29', '22 to 29 inches', 'Flat Screen', 'Stereo Sound', '700 Watts', 'Above 600 Watts', '7-Band Graphic Equalizer', '220 programmes', '12,090.00', '11,150.00', 11150),
('vcstantv004', 'VIDEOCON VAF29SDJ', 'product_img/vc_standard_tv/vcstantv004.jpg', '29', '22 to 29 inches', 'Flat Screen', 'AV Stereo', '700 Watts', 'Above 600 Watts', '7-Band Graphic Equalizer', '200 Channels,SVMC Technology,DDPi Technology,Digital Noise Filter', '11,190.00', '10,790.00', 10790),
('vcstantv010', 'VIDEOCON 21 inches TV 5 star', 'product_img/vc_standard_tv/vcstantv010.jpg', '21', '17 to 21 inches', 'Flat Screen', 'Stereo Sound', '700 Watts', 'Above 600 Watts', '5-Band Graphic Equalizer', '200 programs', '8,590.00', '8,100.00', 8100),
('vcstantv011', 'VIDEOCON 21 Inches Flat TV', 'product_img/vc_standard_tv/vcstantv011.jpg', '21', '17 to 21 inches', 'Flat Screen', 'AV Stereo', '700 Watts', 'Above 600 Watts', '3-Band Graphic Equalizer', '200 Channels,Digital Sensi Eye,5-Mode Selectable Picture,Built-in Game', '7,990.00', '7,600.00', 7600),
('vcstantv012', 'VIDEOCON 21 Inches Ultra Slim Flat TV', 'product_img/vc_standard_tv/vcstantv012.jpg', '21', '17 to 21 inches', 'Flat Screen', 'AV Stereo', '1200 Watts', 'Above 600 Watts', '3-Band Graphic Equalizer', '100 Channels', '7,890.00', '7,600.00', 7600),
('vcstantv013', 'VIDEOCON 21 Inches Ultra Slim Flat TV', 'product_img/vc_standard_tv/vcstantv013.jpg', '21', '17 to 21 inches', 'Flat Screen', 'AV Stereo', '700 Watts', 'Above 300 Watts', '3-Band Graphic Equalizer', '199 Channels', '8,090.00', '7,600.00', 7600),
('vcstantv014', 'VIDEOCON 21 Inches Ultra Slim Flat TV', 'product_img/vc_standard_tv/vcstantv014.jpg', '21', '17 to 21 inches', 'Flat Screen', 'Stereo Playback', '200 Watts', '1 to 200 Watts', '7-Band Graphic Equalizer', '44% Slimmer,200 Programme Memory, 05 Mode Selectable Picture, 04 mode', '8,490.00', '7,600.00', 7600),
('vcstantv015', 'VIDEOCON 21 Inches Ultra Slim Flat TV', 'product_img/vc_standard_tv/vcstantv001.jpg', '21', '17 to 21 inches', 'Slim Flat Screen', 'AV Stereo', '200 Watts', '1 to 200 Watts', '3-Band Graphic Equalizer', '200 Programme.4- Mode Selectable Sound, 5 Mode Selectable Picture,Pict', '8,190.00', '7,500.00', 7500),
('vcstantv016', 'VIDEOCON 21 Inches Ultra Slim Flat TV', 'product_img/vc_standard_tv/vcstantv016.jpg', '21', '17 to 21 inches', 'Flat Screen', 'AV Stereo', '1000 Watts', 'Above 300 Watts', '5-Band Graphic Equalizer', '200 Channels', '7,990.00', '7,390.00', 7390),
('vcstantv017', 'VIDEOCON VDF21SSV', 'product_img/vc_standard_tv/vcstantv017.jpg', '21', '17 to 21 inches', 'Flat Screen', 'AV Stereo', '350 Watts', '201 to 400 Watts', '3-Band Graphic Equalizer', '	 200 Channels,Music Mode,4 Sound Mode,5 Picture Mode,Child Lock', '7,690.00', '7,390.00', 7390),
('vcstantv018', 'VIDEOCON 21 Inches Ultra Slim Flat TV', 'product_img/vc_standard_tv/vcstantv018.jpg', '21', '17 to 21 inches', 'Flat Screen', 'Stereo Sound', '1500 Watts', 'Above 600 Watts', '5-Band Graphic Equalizer', '4 SELECTABLE SOUND MODES,GAME', '7,790.00', '7,290.00', 7290),
('vcstantv019', 'VIDEOCON 21 Inches Flat TV', 'product_img/vc_standard_tv/vcstantv019.jpg', '21', '17 to 21 inches', 'Flat Screen', 'Stereo Sound', '250 Watts', '201 to 400 Watts', 'With Auto Sound Leveller', '200 Programme Memory', '7,290.00', '6,890.00', 6890),
('vcstantv020', 'VIDEOCON VGF21SSV', 'product_img/vc_standard_tv/vcstantv020.jpg', '21', '17 to 21 inches', 'Flat Screen', 'AV Stereo', '500 Watts', '401 to 600 Watts', '5-Band Graphic Equalizer', '200 Channels ,5 Picture Mode,4 Sound Mode,Noise Reducer,Music Mode,Chi', '8,490.00', '6,687.00', 6687);

-- --------------------------------------------------------

--
-- Table structure for table `vc_window_ac`
--

CREATE TABLE `vc_window_ac` (
  `id` varchar(20) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '',
  `img_path` varchar(50) NOT NULL DEFAULT '',
  `ton` varchar(10) NOT NULL DEFAULT '',
  `colling_capacity` varchar(5) NOT NULL DEFAULT '',
  `power_input` varchar(5) NOT NULL DEFAULT '',
  `eer` varchar(5) NOT NULL DEFAULT '',
  `mrp` varchar(10) NOT NULL DEFAULT '',
  `new_mrp` varchar(10) NOT NULL DEFAULT '',
  `main_mrp` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vc_window_ac`
--

INSERT INTO `vc_window_ac` (`id`, `name`, `img_path`, `ton`, `colling_capacity`, `power_input`, `eer`, `mrp`, `new_mrp`, `main_mrp`) VALUES
('vcwindowac001', 'Videocon Window AC 2Ton - 1Star Rated VEW61', 'product_img/vc_window_ac/vcwindowac001.jpg', '2', '6450', '2600', '2.48', '22,290.00', '21,490.00', 21490),
('vcwindowac002', 'Videocon Window AC 1.5Ton - 2Star Rated VPW52', 'product_img/vc_window_ac/vcwindowac002.jpg', '1.5', '3500', '2050', '2.59', '18,990.00', '17,790.00', 17790),
('vcwindowac003', 'Videocon Window AC 1.5Ton - 1Star Rated VEW51', 'product_img/vc_window_ac/vcwindowac003.jpg', '1.5', '5050', '2075', '2.43', '16,490.00', '15,990.00', 15990),
('vcwindowac004', 'Videocon Window AC 1Ton - 2Star Rated VPW32', 'product_img/vc_window_ac/vcwindowac004.jpg', '1', '3500', '1310', '2.67', '16,490.00', '15,790.00', 15790),
('vcwindowac005', 'Videocon Window AC 1Ton - 1Star Rated VEW31', 'product_img/vc_window_ac/vcwindowac005.jpg', '1', '3370', '1355', '2.49', '15,290.00', '14,790.00', 14790);
