-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Янв 21 2014 г., 20:24
-- Версия сервера: 5.1.40
-- Версия PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `fw`
--

-- --------------------------------------------------------

--
-- Структура таблицы `gimages`
--

CREATE TABLE IF NOT EXISTS `gimages` (
  `giid` int(11) NOT NULL AUTO_INCREMENT,
  `glid` int(11) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `giname` varchar(255) DEFAULT NULL,
  `gidescription` text,
  PRIMARY KEY (`giid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=65 ;

--
-- Дамп данных таблицы `gimages`
--

INSERT INTO `gimages` (`giid`, `glid`, `pic`, `thumb`, `giname`, `gidescription`) VALUES
(21, 3, 'uploads/images/galery/3/pic/12211df585a73c18437e3cf78acd433d8fe92c3b.JPG', 'uploads/images/galery/3/thumb/12211df585a73c18437e3cf78acd433d8fe92c3b.JPG', ' ', ' '),
(22, 3, 'uploads/images/galery/3/pic/0aaf13e1c51ce9e627b47894ee14681037445e14.JPG', 'uploads/images/galery/3/thumb/0aaf13e1c51ce9e627b47894ee14681037445e14.JPG', ' ', ' '),
(23, 3, 'uploads/images/galery/3/pic/f5ecc5c8ada6741d6c62b29bc2369a83102cf21e.JPG', 'uploads/images/galery/3/thumb/f5ecc5c8ada6741d6c62b29bc2369a83102cf21e.JPG', ' ', ' '),
(24, 3, 'uploads/images/galery/3/pic/7319fa4d3d68fad4f790a43eacd50bc5dbe5c13c.JPG', 'uploads/images/galery/3/thumb/7319fa4d3d68fad4f790a43eacd50bc5dbe5c13c.JPG', ' ', ' '),
(25, 3, 'uploads/images/galery/3/pic/aa93e1b030036abde8b16c3751b7d7f93c98ea8e.JPG', 'uploads/images/galery/3/thumb/aa93e1b030036abde8b16c3751b7d7f93c98ea8e.JPG', ' ', ' '),
(26, 3, 'uploads/images/galery/3/pic/b458b12e8057321f5314e59a1faaec47206b70b3.JPG', 'uploads/images/galery/3/thumb/b458b12e8057321f5314e59a1faaec47206b70b3.JPG', ' ', ' '),
(27, 3, 'uploads/images/galery/3/pic/11642db9755074d154f9c1f553c36f9129ae2c9f.JPG', 'uploads/images/galery/3/thumb/11642db9755074d154f9c1f553c36f9129ae2c9f.JPG', ' ', ' '),
(28, 3, 'uploads/images/galery/3/pic/ce6deed0eda17ff725055e421a2623555efa08cb.JPG', 'uploads/images/galery/3/thumb/ce6deed0eda17ff725055e421a2623555efa08cb.JPG', ' ', ' '),
(29, 3, 'uploads/images/galery/3/pic/e2e953f59874709503488ace7fa8b407f9cb0393.JPG', 'uploads/images/galery/3/thumb/e2e953f59874709503488ace7fa8b407f9cb0393.JPG', ' ', ' '),
(30, 3, 'uploads/images/galery/3/pic/3530e3eb3d6f95f22199b3230d0342481abea506.JPG', 'uploads/images/galery/3/thumb/3530e3eb3d6f95f22199b3230d0342481abea506.JPG', ' ', ' '),
(31, 3, 'uploads/images/galery/3/pic/8ee9a06906fca57d3c933da89f3730938e43198d.JPG', 'uploads/images/galery/3/thumb/8ee9a06906fca57d3c933da89f3730938e43198d.JPG', ' ', ' '),
(32, 3, 'uploads/images/galery/3/pic/07de184cd886ccbb26a96d52e6011a74c0f9aa42.JPG', 'uploads/images/galery/3/thumb/07de184cd886ccbb26a96d52e6011a74c0f9aa42.JPG', ' ', ' '),
(33, 3, 'uploads/images/galery/3/pic/b0bb653eeb7fd3f0f8c4622082a1fa03f9594565.JPG', 'uploads/images/galery/3/thumb/b0bb653eeb7fd3f0f8c4622082a1fa03f9594565.JPG', ' ', ' '),
(34, 3, 'uploads/images/galery/3/pic/45202528375d78946c2df8957253903846113f5a.JPG', 'uploads/images/galery/3/thumb/45202528375d78946c2df8957253903846113f5a.JPG', ' ', ' '),
(35, 3, 'uploads/images/galery/3/pic/d278dbd66556517b8cfcb563e15527cee87f223c.JPG', 'uploads/images/galery/3/thumb/d278dbd66556517b8cfcb563e15527cee87f223c.JPG', ' ', ' '),
(36, 3, 'uploads/images/galery/3/pic/99c85d8ac807bc99c3cf67c8ff871517aa32ae6a.JPG', 'uploads/images/galery/3/thumb/99c85d8ac807bc99c3cf67c8ff871517aa32ae6a.JPG', ' ', ' '),
(37, 3, 'uploads/images/galery/3/pic/c4a7a1284ccfba956bfe01b0a3ab0dca8fc1de0e.JPG', 'uploads/images/galery/3/thumb/c4a7a1284ccfba956bfe01b0a3ab0dca8fc1de0e.JPG', ' ', ' '),
(38, 3, 'uploads/images/galery/3/pic/43fe4d48d4b5ddec0976e84fa2b2cf067fcd707d.JPG', 'uploads/images/galery/3/thumb/43fe4d48d4b5ddec0976e84fa2b2cf067fcd707d.JPG', ' ', ' '),
(39, 3, 'uploads/images/galery/3/pic/69a548e7aec3554e83a841ea8c3054d09fc983c0.JPG', 'uploads/images/galery/3/thumb/69a548e7aec3554e83a841ea8c3054d09fc983c0.JPG', ' ', ' '),
(40, 3, 'uploads/images/galery/3/pic/642f2f9ef0ab03a6a16de7f781333bee7aa571b8.JPG', 'uploads/images/galery/3/thumb/642f2f9ef0ab03a6a16de7f781333bee7aa571b8.JPG', ' ', ' '),
(55, 8, 'uploads/images/galery/8/pic/fbbbb1a515ea8cf89034200afcaf3f3b8ec27638.JPG', 'uploads/images/galery/8/thumb/fbbbb1a515ea8cf89034200afcaf3f3b8ec27638.JPG', ' ', ' '),
(56, 8, 'uploads/images/galery/8/pic/80c1b4809cd9fd2dd4a3559f65dab066e655a062.JPG', 'uploads/images/galery/8/thumb/80c1b4809cd9fd2dd4a3559f65dab066e655a062.JPG', ' ', ' '),
(57, 8, 'uploads/images/galery/8/pic/24710f19e1030d4cff7b07235ac5e57089f18df4.JPG', 'uploads/images/galery/8/thumb/24710f19e1030d4cff7b07235ac5e57089f18df4.JPG', ' ', ' '),
(58, 8, 'uploads/images/galery/8/pic/342ced506034eeb8eb7b2443a7ac39d07c5e8da4.JPG', 'uploads/images/galery/8/thumb/342ced506034eeb8eb7b2443a7ac39d07c5e8da4.JPG', ' ', ' '),
(60, 8, 'uploads/images/galery/8/pic/019d4f495ef6e12529e27e7945ae23ebfd04e586.JPG', 'uploads/images/galery/8/thumb/019d4f495ef6e12529e27e7945ae23ebfd04e586.JPG', ' ', ' '),
(61, 8, 'uploads/images/galery/8/pic/736c6ba9c6bb2620a6b592c7658723ebc3b99c7c.JPG', 'uploads/images/galery/8/thumb/736c6ba9c6bb2620a6b592c7658723ebc3b99c7c.JPG', ' ', ' '),
(62, 8, 'uploads/images/galery/8/pic/faae8f05485e255a57d23c84f52307f5b364d5e0.JPG', 'uploads/images/galery/8/thumb/faae8f05485e255a57d23c84f52307f5b364d5e0.JPG', ' ', ' '),
(63, 8, 'uploads/images/galery/8/pic/6d8f45b80060e895094e936908dad974692471b3.JPG', 'uploads/images/galery/8/thumb/6d8f45b80060e895094e936908dad974692471b3.JPG', ' ', ' ');
