-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 23, 2020 at 10:42 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php2dz3`
--

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `src` varchar(255) NOT NULL,
  `srcBig` varchar(255) NOT NULL,
  `descriptionShort` text NOT NULL,
  `descriptionFull` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`id`, `name`, `src`, `srcBig`, `descriptionShort`, `descriptionFull`, `price`) VALUES
(1, 'Сat1', 'images/1.jpeg', 'images/big/1.jpeg', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, dolorem, consequatur. Laboriosam quidem beatae incidunt cumque magni recusandae neque obcaecati quasi maxime numquam. Magni eaque saepe voluptatem, vel dignissimos quaerat.', 2000),
(2, 'Сat2', 'images/2.jpeg', 'images/big/2.jpeg', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, dolorem, consequatur. Laboriosam quidem beatae incidunt cumque magni recusandae neque obcaecati quasi maxime numquam. Magni eaque saepe voluptatem, vel dignissimos quaerat.', 1800),
(3, 'Сat3', 'images/3.jpeg', 'images/big/3.jpeg', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, dolorem, consequatur. Laboriosam quidem beatae incidunt cumque magni recusandae neque obcaecati quasi maxime numquam. Magni eaque saepe voluptatem, vel dignissimos quaerat.', 1900),
(4, 'Сat4', 'images/4.jpeg', 'images/big/4.jpeg', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, dolorem, consequatur. Laboriosam quidem beatae incidunt cumque magni recusandae neque obcaecati quasi maxime numquam. Magni eaque saepe voluptatem, vel dignissimos quaerat.', 1850),
(5, 'Сat5', 'images/5.jpeg', 'images/big/5.jpeg', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, dolorem, consequatur. Laboriosam quidem beatae incidunt cumque magni recusandae neque obcaecati quasi maxime numquam. Magni eaque saepe voluptatem, vel dignissimos quaerat.', 2000),
(6, 'Сat6', 'images/6.jpeg', 'images/big/6.jpeg', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, dolorem, consequatur. Laboriosam quidem beatae incidunt cumque magni recusandae neque obcaecati quasi maxime numquam. Magni eaque saepe voluptatem, vel dignissimos quaerat.', 1800),
(7, 'Сat7', 'images/7.jpeg', 'images/big/7.jpeg', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, dolorem, consequatur. Laboriosam quidem beatae incidunt cumque magni recusandae neque obcaecati quasi maxime numquam. Magni eaque saepe voluptatem, vel dignissimos quaerat.', 1900),
(8, 'Сat8', 'images/8.jpeg', 'images/big/8.jpeg', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, dolorem, consequatur. Laboriosam quidem beatae incidunt cumque magni recusandae neque obcaecati quasi maxime numquam. Magni eaque saepe voluptatem, vel dignissimos quaerat.', 1850),
(9, 'Сat9', 'images/1.jpeg', 'images/big/1.jpeg', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, dolorem, consequatur. Laboriosam quidem beatae incidunt cumque magni recusandae neque obcaecati quasi maxime numquam. Magni eaque saepe voluptatem, vel dignissimos quaerat.', 2000),
(10, 'Сat10', 'images/2.jpeg', 'images/big/2.jpeg', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, dolorem, consequatur. Laboriosam quidem beatae incidunt cumque magni recusandae neque obcaecati quasi maxime numquam. Magni eaque saepe voluptatem, vel dignissimos quaerat.', 1800),
(11, 'Сat11', 'images/3.jpeg', 'images/big/3.jpeg', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, dolorem, consequatur. Laboriosam quidem beatae incidunt cumque magni recusandae neque obcaecati quasi maxime numquam. Magni eaque saepe voluptatem, vel dignissimos quaerat.', 1900),
(12, 'Сat12', 'images/4.jpeg', 'images/big/4.jpeg', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, dolorem, consequatur. Laboriosam quidem beatae incidunt cumque magni recusandae neque obcaecati quasi maxime numquam. Magni eaque saepe voluptatem, vel dignissimos quaerat.', 1850),
(13, 'Сat13', 'images/5.jpeg', 'images/big/5.jpeg', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, dolorem, consequatur. Laboriosam quidem beatae incidunt cumque magni recusandae neque obcaecati quasi maxime numquam. Magni eaque saepe voluptatem, vel dignissimos quaerat.', 2000),
(14, 'Сat14', 'images/6.jpeg', 'images/big/6.jpeg', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, dolorem, consequatur. Laboriosam quidem beatae incidunt cumque magni recusandae neque obcaecati quasi maxime numquam. Magni eaque saepe voluptatem, vel dignissimos quaerat.', 1800),
(15, 'Сat15', 'images/7.jpeg', 'images/big/7.jpeg', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, dolorem, consequatur. Laboriosam quidem beatae incidunt cumque magni recusandae neque obcaecati quasi maxime numquam. Magni eaque saepe voluptatem, vel dignissimos quaerat.', 1900),
(16, 'Сat16', 'images/8.jpeg', 'images/big/8.jpeg', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, dolorem, consequatur. Laboriosam quidem beatae incidunt cumque magni recusandae neque obcaecati quasi maxime numquam. Magni eaque saepe voluptatem, vel dignissimos quaerat.', 1850),
(17, 'Сat17', 'images/1.jpeg', 'images/big/1.jpeg', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, dolorem, consequatur. Laboriosam quidem beatae incidunt cumque magni recusandae neque obcaecati quasi maxime numquam. Magni eaque saepe voluptatem, vel dignissimos quaerat.', 2000),
(18, 'Сat18', 'images/2.jpeg', 'images/big/2.jpeg', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, dolorem, consequatur. Laboriosam quidem beatae incidunt cumque magni recusandae neque obcaecati quasi maxime numquam. Magni eaque saepe voluptatem, vel dignissimos quaerat.', 1800),
(19, 'Сat19', 'images/3.jpeg', 'images/big/3.jpeg', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, dolorem, consequatur. Laboriosam quidem beatae incidunt cumque magni recusandae neque obcaecati quasi maxime numquam. Magni eaque saepe voluptatem, vel dignissimos quaerat.', 1900),
(20, 'Сat20', 'images/4.jpeg', 'images/big/4.jpeg', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, dolorem, consequatur. Laboriosam quidem beatae incidunt cumque magni recusandae neque obcaecati quasi maxime numquam. Magni eaque saepe voluptatem, vel dignissimos quaerat.', 1850),
(21, 'Сat21', 'images/5.jpeg', 'images/big/5.jpeg', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, dolorem, consequatur. Laboriosam quidem beatae incidunt cumque magni recusandae neque obcaecati quasi maxime numquam. Magni eaque saepe voluptatem, vel dignissimos quaerat.', 2000),
(22, 'Сat22', 'images/6.jpeg', 'images/big/6.jpeg', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, dolorem, consequatur. Laboriosam quidem beatae incidunt cumque magni recusandae neque obcaecati quasi maxime numquam. Magni eaque saepe voluptatem, vel dignissimos quaerat.', 1800),
(23, 'Сat23', 'images/7.jpeg', 'images/big/7.jpeg', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, dolorem, consequatur. Laboriosam quidem beatae incidunt cumque magni recusandae neque obcaecati quasi maxime numquam. Magni eaque saepe voluptatem, vel dignissimos quaerat.', 1900),
(24, 'Сat24', 'images/8.jpeg', 'images/big/8.jpeg', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, dolorem, consequatur. Laboriosam quidem beatae incidunt cumque magni recusandae neque obcaecati quasi maxime numquam. Magni eaque saepe voluptatem, vel dignissimos quaerat.', 1850),
(25, 'Сat25', 'images/1.jpeg', 'images/big/1.jpeg', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, dolorem, consequatur. Laboriosam quidem beatae incidunt cumque magni recusandae neque obcaecati quasi maxime numquam. Magni eaque saepe voluptatem, vel dignissimos quaerat.', 2000),
(26, 'Сat26', 'images/2.jpeg', 'images/big/2.jpeg', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, dolorem, consequatur. Laboriosam quidem beatae incidunt cumque magni recusandae neque obcaecati quasi maxime numquam. Magni eaque saepe voluptatem, vel dignissimos quaerat.', 1800),
(27, 'Сat27', 'images/3.jpeg', 'images/big/3.jpeg', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, dolorem, consequatur. Laboriosam quidem beatae incidunt cumque magni recusandae neque obcaecati quasi maxime numquam. Magni eaque saepe voluptatem, vel dignissimos quaerat.', 1900),
(28, 'Сat28', 'images/4.jpeg', 'images/big/4.jpeg', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, dolorem, consequatur. Laboriosam quidem beatae incidunt cumque magni recusandae neque obcaecati quasi maxime numquam. Magni eaque saepe voluptatem, vel dignissimos quaerat.', 1850),
(29, 'Сat29', 'images/5.jpeg', 'images/big/5.jpeg', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, dolorem, consequatur. Laboriosam quidem beatae incidunt cumque magni recusandae neque obcaecati quasi maxime numquam. Magni eaque saepe voluptatem, vel dignissimos quaerat.', 2000),
(30, 'Сat30', 'images/6.jpeg', 'images/big/6.jpeg', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, dolorem, consequatur. Laboriosam quidem beatae incidunt cumque magni recusandae neque obcaecati quasi maxime numquam. Magni eaque saepe voluptatem, vel dignissimos quaerat.', 1800),
(31, 'Сat31', 'images/7.jpeg', 'images/big/7.jpeg', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, dolorem, consequatur. Laboriosam quidem beatae incidunt cumque magni recusandae neque obcaecati quasi maxime numquam. Magni eaque saepe voluptatem, vel dignissimos quaerat.', 1900),
(32, 'Сat32', 'images/8.jpeg', 'images/big/8.jpeg', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, dolorem, consequatur. Laboriosam quidem beatae incidunt cumque magni recusandae neque obcaecati quasi maxime numquam. Magni eaque saepe voluptatem, vel dignissimos quaerat.', 1850);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
