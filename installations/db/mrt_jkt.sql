-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2021 at 12:46 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mrt_jkt`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `no_manufacture` varchar(16) NOT NULL,
  `no_material` varchar(16) NOT NULL,
  `branch_plant` varchar(32) DEFAULT NULL,
  `plant` varchar(32) DEFAULT NULL,
  `dept` varchar(32) DEFAULT NULL,
  `no_rack` varchar(32) DEFAULT NULL,
  `no_bin` varchar(32) DEFAULT NULL,
  `uom` varchar(16) DEFAULT NULL,
  `store_loc` varchar(32) DEFAULT NULL,
  `stock` int(64) DEFAULT 0,
  `desc_1` longtext DEFAULT NULL,
  `desc_2` longtext DEFAULT NULL,
  `comment` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `no_manufacture`, `no_material`, `branch_plant`, `plant`, `dept`, `no_rack`, `no_bin`, `uom`, `store_loc`, `stock`, `desc_1`, `desc_2`, `comment`, `created_at`) VALUES
(1, 'IMF#000000', '2000000032', 'ASN', NULL, 'AFC', 'E009 B', NULL, 'EA', 'D10 STORE', 0, 'TVM @23', 'TVM MOBILE', NULL, '2021-02-03 17:00:00'),
(2, 'NJAK-S-P0114', '2000010281', 'BHI', NULL, 'PSD', 'R017 C', NULL, 'EA', 'D10 STORE', 10, 'UG (FULL)_DCU', 'PMFBJ-WAH-FULL (UNDER', 'D10', '2021-01-01 07:57:54'),
(3, 'NJAK-S-P0101', '2000010282', 'BLA', NULL, 'PSD', 'R017 C', NULL, 'EA', 'D10 STORE', 20, 'UG (FULL)_MOTOR', 'PMFBJ-WAH-FULL (UNDERGROUND)', 'D10', '2021-04-09 07:59:42'),
(4, 'NG29-S-A0104', '2000000283', 'BLM', NULL, 'AFC', 'TVM @23', 'TVM MOBILE', 'EA', 'E009 B', 0, 'D10 STORE', NULL, NULL, '2021-03-10 08:01:25'),
(5, 'NJAK-S-P0302', '2000000312', 'BNH', NULL, 'AFC', 'TVM @23', 'TVM MOBILE', 'EA', 'E009 B', 0, 'D10 STORE', NULL, NULL, '2021-03-10 08:01:25'),
(6, 'NJAK-S-P0108', '2000000313', 'CPR', NULL, 'AFC', 'TVM @23', 'TVM MOBILE', 'EA', 'E009 B', 0, 'D10 STORE', NULL, NULL, '2021-03-10 08:01:25'),
(7, 'FH8110A', '2000001050', 'DKA', NULL, 'AFC', 'TVM @23', 'TVM MOBILE', 'EA', 'E009 B', 0, 'D10 STORE', NULL, NULL, '2021-03-10 08:01:25'),
(8, 'FL4015A-290-1', '2000001071', 'FTM', NULL, 'AFC', 'TVM @23', 'TVM MOBILE', 'EA', 'E009 B', 678, 'D10 STORE', NULL, NULL, '2021-03-10 08:01:25'),
(9, 'IC60N/A9F74210', '2000001071', 'LBB', NULL, 'AFC', 'TVM @23', 'TVM MOBILE', 'EA', 'E009 B', 0, 'D10 STORE', NULL, NULL, '2021-03-10 08:01:25'),
(10, 'RC1752E', '2000001071', 'SNY', NULL, 'AFC', 'TVM @23', 'TVM MOBILE', 'EA', 'E009 B', 0, 'D10 STORE', NULL, NULL, '2021-03-10 08:01:25'),
(11, 'RC1752C', '2000001071', 'STB', NULL, 'AFC', 'TVM @23', 'TVM MOBILE', 'EA', 'E009 B', 0, 'D10 STORE', NULL, NULL, '2021-03-10 08:01:25'),
(12, 'IC60N/A9F74206', '2000001071', 'OTHER', NULL, 'AFC', 'TVM @23', 'TVM MOBILE', 'EA', 'E009 B', 0, 'D10 STORE', NULL, NULL, '2021-03-10 08:01:25'),
(13, 'IC60N/A9F74325', '2000001071', 'DEPO', NULL, 'AFC', 'TVM @23', 'TVM MOBILE', 'EA', 'E009 B', 0, 'D10 STORE', NULL, NULL, '2021-03-10 08:01:25'),
(14, 'IC60N/A9F99999', '2000001071', 'MHJN', NULL, 'AFC', 'TVM @23', 'TVM MOBILE', 'EA', 'E009 B', 0, 'D10 STORE', NULL, NULL, '2021-03-10 08:01:25');

-- --------------------------------------------------------

--
-- Table structure for table `trans_consign`
--

CREATE TABLE `trans_consign` (
  `t_id` int(11) NOT NULL,
  `t_doc_no` varchar(64) NOT NULL,
  `t_by` varchar(64) NOT NULL,
  `t_posting_by` varchar(64) DEFAULT NULL,
  `product_id` int(64) NOT NULL,
  `stock` int(128) NOT NULL DEFAULT 0,
  `t_detail` longtext DEFAULT NULL,
  `t_start` varchar(64) DEFAULT NULL,
  `t_end` varchar(64) DEFAULT NULL,
  `t_date` date NOT NULL,
  `t_notes` longtext DEFAULT NULL,
  `t_comment` longtext DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `trans_consign`
--
DELIMITER $$
CREATE TRIGGER `delete_stok_consign` BEFORE DELETE ON `trans_consign` FOR EACH ROW BEGIN

DECLARE stock1 INT;
DECLARE stock2 CURSOR FOR SELECT `stock` FROM `products` WHERE `products`.`product_id`= OLD.product_id;
OPEN stock2;
FETCH stock2 INTO stock1;

UPDATE `products` SET `products`.`stock` = stock1 + OLD.stock WHERE `products`.`product_id` = OLD.product_id;

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trans_consign` BEFORE INSERT ON `trans_consign` FOR EACH ROW BEGIN
DECLARE stock1 INT;
DECLARE stock2 CURSOR FOR SELECT `stock` FROM `products` WHERE `products`.`product_id`= new.product_id;
OPEN stock2;
FETCH stock2 INTO stock1;

IF (stock1 <= NEW.stock) THEN UPDATE `products` SET `products`.`stock` = 0 WHERE `products`.`product_id` = NEW.product_id;

ELSEIF (stock1 >= NEW.stock) THEN UPDATE `products` SET `products`.`stock` = `products`.`stock` - new.stock WHERE `products`.`product_id` = NEW.product_id;
END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_stok_consign` BEFORE UPDATE ON `trans_consign` FOR EACH ROW BEGIN
DECLARE stock1 INT;
DECLARE stock2 CURSOR FOR SELECT `stock` FROM `products` WHERE `products`.`product_id`= OLD.product_id;
OPEN stock2;
FETCH stock2 INTO stock1;

IF (NEW.stock >= (stock1 + OLD.stock)) THEN 
    UPDATE `products` SET `products`.`stock` = 0 WHERE `products`.`product_id` = OLD.product_id;
    
ELSEIF (NEW.stock <= (stock1 + OLD.stock)) THEN
UPDATE `products` SET `products`.`stock` = stock1 + OLD.stock - NEW.stock WHERE `products`.`product_id` = OLD.product_id;

END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `trans_in`
--

CREATE TABLE `trans_in` (
  `t_id` int(11) NOT NULL,
  `t_doc_no` varchar(64) NOT NULL,
  `t_by` varchar(64) NOT NULL,
  `t_posting_by` varchar(64) DEFAULT NULL,
  `product_id` int(64) NOT NULL,
  `stock` int(128) NOT NULL DEFAULT 0,
  `t_detail` longtext DEFAULT NULL,
  `t_start` varchar(64) DEFAULT NULL,
  `t_end` varchar(64) DEFAULT NULL,
  `t_date` date NOT NULL,
  `t_notes` longtext DEFAULT NULL,
  `t_comment` longtext DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trans_in`
--

INSERT INTO `trans_in` (`t_id`, `t_doc_no`, `t_by`, `t_posting_by`, `product_id`, `stock`, `t_detail`, `t_start`, `t_end`, `t_date`, `t_notes`, `t_comment`, `user_id`) VALUES
(1, '1', '111', '111', 1, 100, '', '', '', '2021-03-01', '', '', 1),
(2, '2', '222', '222', 2, 10, '', '', '', '2021-01-01', '', '', 1),
(3, '456', '456', '456', 1, 2, '', '', '', '2021-07-01', '', '', 1),
(4, '678', '456', '678', 8, 678, '', '', '', '2021-06-01', '', '', 1);

--
-- Triggers `trans_in`
--
DELIMITER $$
CREATE TRIGGER `delete_stok_in` BEFORE DELETE ON `trans_in` FOR EACH ROW BEGIN

DECLARE stock1 INT;
DECLARE stock2 CURSOR FOR SELECT `stock` FROM `products` WHERE `products`.`product_id`= OLD.product_id;
OPEN stock2;
FETCH stock2 INTO stock1;

IF (stock1 <= OLD.stock) THEN UPDATE `products` SET `products`.`stock` = 0 WHERE `products`.`product_id` = OLD.product_id;

ELSEIF (stock1 >= OLD.stock) THEN UPDATE `products` SET `products`.`stock` = `products`.`stock` - OLD.stock WHERE `products`.`product_id` = OLD.product_id;
END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trans_in` BEFORE INSERT ON `trans_in` FOR EACH ROW BEGIN
DECLARE stock1 INT;
DECLARE stock2 CURSOR FOR SELECT `stock` FROM `products` WHERE `products`.`product_id`= new.product_id;
OPEN stock2;
FETCH stock2 INTO stock1;

IF (stock1 <= 0) THEN UPDATE `products`  SET `products`.`stock` = new.stock WHERE `products`.`product_id` = NEW.product_id;

ELSEIF (stock1 >= 1) THEN UPDATE `products` SET `products`.`stock` = `products`.`stock` + new.stock WHERE `products`.`product_id` = NEW.product_id;
END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_stok_in` BEFORE UPDATE ON `trans_in` FOR EACH ROW BEGIN
DECLARE stock1 INT;
DECLARE stock2 CURSOR FOR SELECT `stock` FROM `products` WHERE `products`.`product_id`= OLD.product_id;
OPEN stock2;
FETCH stock2 INTO stock1;

UPDATE `products` SET `products`.`stock` = stock1 - OLD.stock + NEW.stock WHERE `products`.`product_id` = OLD.product_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `trans_open`
--

CREATE TABLE `trans_open` (
  `t_id` int(11) NOT NULL,
  `t_doc_no` varchar(64) NOT NULL,
  `t_by` varchar(64) NOT NULL,
  `t_posting_by` varchar(64) DEFAULT NULL,
  `product_id` int(64) NOT NULL,
  `stock` int(128) NOT NULL DEFAULT 0,
  `t_detail` longtext DEFAULT NULL,
  `t_start` varchar(64) DEFAULT NULL,
  `t_end` varchar(64) DEFAULT NULL,
  `t_date` date NOT NULL,
  `t_notes` longtext DEFAULT NULL,
  `t_comment` longtext DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trans_open`
--

INSERT INTO `trans_open` (`t_id`, `t_doc_no`, `t_by`, `t_posting_by`, `product_id`, `stock`, `t_detail`, `t_start`, `t_end`, `t_date`, `t_notes`, `t_comment`, `user_id`) VALUES
(1, '3', '333', '333', 3, 20, '', '', '', '2021-02-01', '', '', 1);

--
-- Triggers `trans_open`
--
DELIMITER $$
CREATE TRIGGER `delete_stok_open` BEFORE DELETE ON `trans_open` FOR EACH ROW BEGIN

DECLARE stock1 INT;
DECLARE stock2 CURSOR FOR SELECT `stock` FROM `products` WHERE `products`.`product_id`= OLD.product_id;
OPEN stock2;
FETCH stock2 INTO stock1;

IF (stock1 <= OLD.stock) THEN UPDATE `products` SET `products`.`stock` = 0 WHERE `products`.`product_id` = OLD.product_id;

ELSEIF (stock1 >= OLD.stock) THEN UPDATE `products` SET `products`.`stock` = `products`.`stock` - OLD.stock WHERE `products`.`product_id` = OLD.product_id;
END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trans_open` BEFORE INSERT ON `trans_open` FOR EACH ROW BEGIN
DECLARE stock1 INT;
DECLARE stock2 CURSOR FOR SELECT `stock` FROM `products` WHERE `products`.`product_id`= new.product_id;
OPEN stock2;
FETCH stock2 INTO stock1;

IF (stock1 <= 0) THEN UPDATE `products` SET `products`.`stock` = new.stock WHERE `products`.`product_id` = NEW.product_id;

ELSEIF (stock1 >= 1) THEN UPDATE `products` SET `products`.`stock` = `products`.`stock` + new.stock WHERE `products`.`product_id` = NEW.product_id;
END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_stok_open` BEFORE UPDATE ON `trans_open` FOR EACH ROW BEGIN
DECLARE stock1 INT;
DECLARE stock2 CURSOR FOR SELECT `stock` FROM `products` WHERE `products`.`product_id`= OLD.product_id;
OPEN stock2;
FETCH stock2 INTO stock1;

UPDATE `products` SET `products`.`stock` = stock1 - OLD.stock + NEW.stock WHERE `products`.`product_id` = OLD.product_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `trans_out`
--

CREATE TABLE `trans_out` (
  `t_id` int(11) NOT NULL,
  `t_doc_no` varchar(64) NOT NULL,
  `t_by` varchar(64) NOT NULL,
  `t_posting_by` varchar(64) DEFAULT NULL,
  `product_id` int(64) NOT NULL,
  `stock` int(128) NOT NULL DEFAULT 0,
  `t_detail` longtext DEFAULT NULL,
  `t_start` varchar(64) DEFAULT NULL,
  `t_end` varchar(64) DEFAULT NULL,
  `t_date` date NOT NULL,
  `t_notes` longtext DEFAULT NULL,
  `t_comment` longtext DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trans_out`
--

INSERT INTO `trans_out` (`t_id`, `t_doc_no`, `t_by`, `t_posting_by`, `product_id`, `stock`, `t_detail`, `t_start`, `t_end`, `t_date`, `t_notes`, `t_comment`, `user_id`) VALUES
(1, 'Kopi Ala', 'asd', '', 1, 300, '', '', '', '2021-07-01', '', '', 1);

--
-- Triggers `trans_out`
--
DELIMITER $$
CREATE TRIGGER `delete_stok_out` BEFORE DELETE ON `trans_out` FOR EACH ROW BEGIN

DECLARE stock1 INT;
DECLARE stock2 CURSOR FOR SELECT `stock` FROM `products` WHERE `products`.`product_id`= OLD.product_id;
OPEN stock2;
FETCH stock2 INTO stock1;

UPDATE `products` SET `products`.`stock` = stock1 + OLD.stock;

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trans_out` BEFORE INSERT ON `trans_out` FOR EACH ROW BEGIN
DECLARE stock1 INT;
DECLARE stock2 CURSOR FOR SELECT `stock` FROM `products` WHERE `products`.`product_id`= new.product_id;
OPEN stock2;
FETCH stock2 INTO stock1;

IF (stock1 <= NEW.stock) THEN UPDATE `products` SET `products`.`stock` = 0 WHERE `products`.`product_id` = NEW.product_id;

ELSEIF (stock1 >= NEW.stock) THEN UPDATE `products` SET `products`.`stock` = `products`.`stock` - new.stock WHERE `products`.`product_id` = NEW.product_id;
END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_stok_out` BEFORE UPDATE ON `trans_out` FOR EACH ROW BEGIN
DECLARE stock1 INT;
DECLARE stock2 CURSOR FOR SELECT `stock` FROM `products` WHERE `products`.`product_id`= OLD.product_id;
OPEN stock2;
FETCH stock2 INTO stock1;

IF (NEW.stock >= (stock1 + OLD.stock)) THEN 
    UPDATE `products` SET `products`.`stock` = 0 WHERE `products`.`product_id` = OLD.product_id;
    
ELSEIF (NEW.stock <= (stock1 + OLD.stock)) THEN
UPDATE `products` SET `products`.`stock` = stock1 + OLD.stock - NEW.stock WHERE `products`.`product_id` = OLD.product_id;

END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(128) NOT NULL,
  `name` varchar(32) NOT NULL,
  `jabatan` varchar(16) NOT NULL,
  `akses_level` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `name`, `jabatan`, `akses_level`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin', 'admin', 'admin'),
(2, 'User-1', '12dea96fec20593566ab75692c9949596833adc9', 'User', 'user', 'user'),
(4, 'Admin-2', '315f166c5aca63a157f7d41007675cb44a948b33', 'Kholid', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `trans_consign`
--
ALTER TABLE `trans_consign`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `trans_in`
--
ALTER TABLE `trans_in`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `trans_open`
--
ALTER TABLE `trans_open`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `trans_out`
--
ALTER TABLE `trans_out`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `trans_consign`
--
ALTER TABLE `trans_consign`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trans_in`
--
ALTER TABLE `trans_in`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `trans_open`
--
ALTER TABLE `trans_open`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trans_out`
--
ALTER TABLE `trans_out`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
