-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2020 at 10:20 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `subcount`
--

-- --------------------------------------------------------

--
-- Table structure for table `adm_m_login`
--

CREATE TABLE `adm_m_login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `computer_name` varchar(50) NOT NULL,
  `data_time` datetime NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adm_m_login`
--

INSERT INTO `adm_m_login` (`id`, `username`, `ip_address`, `computer_name`, `data_time`, `status`) VALUES
(12, 'dhea', '::1', 'DESKTOP-3NGLII0', '2019-12-20 05:20:10', 'Success'),
(13, 'deha', '::1', 'DESKTOP-3NGLII0', '2019-12-20 05:20:19', 'Failed'),
(14, 'deha', '::1', 'DESKTOP-3NGLII0', '2019-12-20 05:22:18', 'Failed'),
(15, 'dhea', '::1', 'DESKTOP-3NGLII0', '2019-12-20 05:22:31', 'Success'),
(16, 'dhea', '::1', 'DESKTOP-3NGLII0', '2020-01-13 04:33:10', 'Success'),
(17, 'dhea', '::1', 'DESKTOP-3NGLII0', '2020-01-13 07:17:30', 'Success'),
(18, 'dhea', '::1', 'DESKTOP-3NGLII0', '2020-01-13 07:18:53', 'Failed'),
(19, 'lele', '::1', 'DESKTOP-3NGLII0', '2020-01-13 07:19:12', 'Failed'),
(20, 'dada', '::1', 'DESKTOP-3NGLII0', '2020-01-13 07:20:56', 'Failed'),
(21, 'dhea', '::1', 'DESKTOP-3NGLII0', '2020-01-13 08:40:27', 'Success'),
(22, 'dhea', '::1', 'DESKTOP-3NGLII0', '2020-01-14 07:54:00', 'Success'),
(23, 'dhea', '::1', 'DESKTOP-3NGLII0', '2020-01-14 09:27:25', 'Success');

-- --------------------------------------------------------

--
-- Table structure for table `adm_m_menu`
--

CREATE TABLE `adm_m_menu` (
  `id` int(11) NOT NULL,
  `id_menu` varchar(20) NOT NULL,
  `parent_menu` varchar(50) NOT NULL,
  `menu_name` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  `order_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adm_m_menu`
--

INSERT INTO `adm_m_menu` (`id`, `id_menu`, `parent_menu`, `menu_name`, `link`, `order_number`) VALUES
(1, '10002', '', 'Administrator', '-', 0),
(2, '10001', '', 'Dashboard', 'Welcome/link_dashboard', 0),
(3, '10003', '', 'Create Label Batch', 'Welcome/create_label_batch', 0),
(4, '10004', '', 'Delivery Note', 'Welcome/delivery_note', 0),
(5, '10005', 'Administrator', 'Setting Menu', 'Welcome/adm_setting_menu', 1),
(6, '10006', 'Administrator', 'Setting User', 'Welcome/adm_setting_user', 2);

-- --------------------------------------------------------

--
-- Table structure for table `adm_m_setuser`
--

CREATE TABLE `adm_m_setuser` (
  `id` int(11) NOT NULL,
  `id_menu` varchar(20) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adm_m_setuser`
--

INSERT INTO `adm_m_setuser` (`id`, `id_menu`, `nik`, `status`) VALUES
(1, '10001', '32014589623510002', 'true'),
(2, '10002', '32014589623510002', 'true'),
(3, '10003', '32014589623510002', 'true'),
(4, '10004', '32014589623510002', 'false'),
(5, '10005', '32014589623510002', 'true'),
(6, '10006', '32014589623510002', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `adm_m_user`
--

CREATE TABLE `adm_m_user` (
  `id` int(11) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `position` varchar(50) NOT NULL,
  `group` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adm_m_user`
--

INSERT INTO `adm_m_user` (`id`, `nik`, `fullname`, `username`, `password`, `position`, `group`, `status`) VALUES
(6, '3205124302960002', 'Anggita Febriany', 'anggitafeb', '956a20aca38ebf8180c9fe376f3b0a9e', 'administrator', 'indoseiki', 'aktif'),
(7, '3205121104950001', 'Hilman Fadhilah', 'hilman11', '57b71d05fd44ca93771ea6cb242a596e', 'spv', 'subcount', 'aktif'),
(20, '3205120403940002', 'Firdaus Salam Adirachman', 'firdaus77', 'f7da6674cea27cd772ad0d933ae93103', 'administrator', 'indoseiki', 'aktif'),
(22, '32024805481540', 'Evie Sri Rahayu', 'eviui', '037816fb1ad669fb390392afff3a55d7', 'administrator', 'indoseiki', 'aktif'),
(25, '32014589623510002', 'Dhea', 'dhea', 'd585b80abca3e02bae79fef9a17fe5c3', 'administrator', 'indoseiki', 'aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm_m_login`
--
ALTER TABLE `adm_m_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adm_m_menu`
--
ALTER TABLE `adm_m_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adm_m_setuser`
--
ALTER TABLE `adm_m_setuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adm_m_user`
--
ALTER TABLE `adm_m_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adm_m_login`
--
ALTER TABLE `adm_m_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `adm_m_menu`
--
ALTER TABLE `adm_m_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `adm_m_setuser`
--
ALTER TABLE `adm_m_setuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `adm_m_user`
--
ALTER TABLE `adm_m_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
