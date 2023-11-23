-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/11/2023 às 17:10
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_sistema_blog`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `comentaries`
--

CREATE TABLE `comentaries` (
  `id` int(11) NOT NULL,
  `comentario` text NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `comentaries`
--

INSERT INTO `comentaries` (`id`, `comentario`, `post_id`, `user_id`) VALUES
(9, 'qweqwe', 16, 11),
(10, 'QWEQWE', 16, 11),
(11, 'QWEQWEqweqw', 16, 11),
(12, 'qweqeqeqweqwe', 21, 11),
(13, 'qweqwe', 16, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `maintext` text NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `posts`
--

INSERT INTO `posts` (`id`, `title`, `photo`, `maintext`, `user_id`) VALUES
(15, 'Lorem Ipsun', './assets/imgs/posts/1700745810.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pulvinar orci nec purus tristique feugiat. Quisque eget dui vel turpis iaculis ornare ac at odio. Praesent aliquet massa in dapibus mattis. Aliquam tincidunt dolor velit, ac vestibulum ipsum aliquam id. Pellentesque quam ex, semper at mollis non, tempus nec metus. Praesent ornare interdum ullamcorper. Phasellus ullamcorper aliquet varius. Praesent aliquet justo vitae risus condimentum accumsan. Proin ut odio vitae ante eleifend eleifend sit amet at quam. Vestibulum et tincidunt leo. Proin eget euismod justo. Nunc dapibus eros id ante posuere, quis laoreet dui pharetra. Nullam iaculis purus nulla, ut tempor lectus viverra ut. Fusce ac risus efficitur, mattis lectus ac, mattis erat. Curabitur faucibus ante sed nisi feugiat volutpat. Curabitur sollicitudin mauris ac mauris fringilla, a ultrices sapien suscipit.\r\n\r\nDonec auctor eros id urna commodo, quis efficitur augue semper. Curabitur vestibulum sem dui, quis accumsan sapien placerat tristique. Sed sit amet ante justo. Nam velit augue, eleifend placerat porttitor non, feugiat sit amet lectus. Nullam congue massa a mi aliquet ullamcorper. Nullam volutpat feugiat purus. Sed laoreet velit ut ornare suscipit. Suspendisse porta erat tortor, sit amet suscipit nisl facilisis nec.\r\n\r\nUt dictum tellus sed nulla efficitur, id eleifend felis hendrerit. Integer vel porta nulla. Morbi vel dolor quis eros vestibulum iaculis non eu lacus. Pellentesque consequat vehicula ex at eleifend. Pellentesque nec lectus eu elit ullamcorper ornare quis eu dui. Duis pulvinar leo dolor, in lacinia metus fermentum ut. Mauris sed sodales neque, in maximus lacus.\r\n\r\nFusce suscipit eget turpis at vulputate. Suspendisse malesuada, ipsum eget egestas dapibus, tellus urna placerat purus, et mollis eros neque non turpis. Proin fermentum accumsan mauris ut cursus. Nullam vitae sapien rutrum, fermentum urna sed, tempor lectus. Sed fermentum dui nec sapien blandit scelerisque. Suspendisse vitae tortor ipsum. Ut dapibus porttitor condimentum.\r\n\r\nFusce id aliquam elit, at sagittis magna. Etiam fringilla libero quis felis maximus, ultricies blandit sem bibendum. Cras tempus pulvinar diam non mollis. Ut vehicula risus nunc, eget condimentum purus facilisis non. Vestibulum id molestie enim. Quisque blandit vel elit eget cursus. Donec ultricies metus non fermentum efficitur.', 11),
(16, 'Lorem ipsom', './assets/imgs/posts/1700746034.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pulvinar orci nec purus tristique feugiat. Quisque eget dui vel turpis iaculis ornare ac at odio. Praesent aliquet massa in dapibus mattis. Aliquam tincidunt dolor velit, ac vestibulum ipsum aliquam id. Pellentesque quam ex, semper at mollis non, tempus nec metus. Praesent ornare interdum ullamcorper. Phasellus ullamcorper aliquet varius. Praesent aliquet justo vitae risus condimentum accumsan. Proin ut odio vitae ante eleifend eleifend sit amet at quam. Vestibulum et tincidunt leo. Proin eget euismod justo. Nunc dapibus eros id ante posuere, quis laoreet dui pharetra. Nullam iaculis purus nulla, ut tempor lectus viverra ut. Fusce ac risus efficitur, mattis lectus ac, mattis erat. Curabitur faucibus ante sed nisi feugiat volutpat. Curabitur sollicitudin mauris ac mauris fringilla, a ultrices sapien suscipit.\r\n\r\nDonec auctor eros id urna commodo, quis efficitur augue semper. Curabitur vestibulum sem dui, quis accumsan sapien placerat tristique. Sed sit amet ante justo. Nam velit augue, eleifend placerat porttitor non, feugiat sit amet lectus. Nullam congue massa a mi aliquet ullamcorper. Nullam volutpat feugiat purus. Sed laoreet velit ut ornare suscipit. Suspendisse porta erat tortor, sit amet suscipit nisl facilisis nec.\r\n\r\nUt dictum tellus sed nulla efficitur, id eleifend felis hendrerit. Integer vel porta nulla. Morbi vel dolor quis eros vestibulum iaculis non eu lacus. Pellentesque consequat vehicula ex at eleifend. Pellentesque nec lectus eu elit ullamcorper ornare quis eu dui. Duis pulvinar leo dolor, in lacinia metus fermentum ut. Mauris sed sodales neque, in maximus lacus.\r\n\r\nFusce suscipit eget turpis at vulputate. Suspendisse malesuada, ipsum eget egestas dapibus, tellus urna placerat purus, et mollis eros neque non turpis. Proin fermentum accumsan mauris ut cursus. Nullam vitae sapien rutrum, fermentum urna sed, tempor lectus. Sed fermentum dui nec sapien blandit scelerisque. Suspendisse vitae tortor ipsum. Ut dapibus porttitor condimentum.\r\n\r\nFusce id aliquam elit, at sagittis magna. Etiam fringilla libero quis felis maximus, ultricies blandit sem bibendum. Cras tempus pulvinar diam non mollis. Ut vehicula risus nunc, eget condimentum purus facilisis non. Vestibulum id molestie enim. Quisque blandit vel elit eget cursus. Donec ultricies metus non fermentum efficitur.', 11),
(17, 'teste', './assets/imgs/posts/1700746063.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pulvinar orci nec purus tristique feugiat. Quisque eget dui vel turpis iaculis ornare ac at odio. Praesent aliquet massa in dapibus mattis. Aliquam tincidunt dolor velit, ac vestibulum ipsum aliquam id. Pellentesque quam ex, semper at mollis non, tempus nec metus. Praesent ornare interdum ullamcorper. Phasellus ullamcorper aliquet varius. Praesent aliquet justo vitae risus condimentum accumsan. Proin ut odio vitae ante eleifend eleifend sit amet at quam. Vestibulum et tincidunt leo. Proin eget euismod justo. Nunc dapibus eros id ante posuere, quis laoreet dui pharetra. Nullam iaculis purus nulla, ut tempor lectus viverra ut. Fusce ac risus efficitur, mattis lectus ac, mattis erat. Curabitur faucibus ante sed nisi feugiat volutpat. Curabitur sollicitudin mauris ac mauris fringilla, a ultrices sapien suscipit.\r\n\r\nDonec auctor eros id urna commodo, quis efficitur augue semper. Curabitur vestibulum sem dui, quis accumsan sapien placerat tristique. Sed sit amet ante justo. Nam velit augue, eleifend placerat porttitor non, feugiat sit amet lectus. Nullam congue massa a mi aliquet ullamcorper. Nullam volutpat feugiat purus. Sed laoreet velit ut ornare suscipit. Suspendisse porta erat tortor, sit amet suscipit nisl facilisis nec.\r\n\r\nUt dictum tellus sed nulla efficitur, id eleifend felis hendrerit. Integer vel porta nulla. Morbi vel dolor quis eros vestibulum iaculis non eu lacus. Pellentesque consequat vehicula ex at eleifend. Pellentesque nec lectus eu elit ullamcorper ornare quis eu dui. Duis pulvinar leo dolor, in lacinia metus fermentum ut. Mauris sed sodales neque, in maximus lacus.\r\n\r\nFusce suscipit eget turpis at vulputate. Suspendisse malesuada, ipsum eget egestas dapibus, tellus urna placerat purus, et mollis eros neque non turpis. Proin fermentum accumsan mauris ut cursus. Nullam vitae sapien rutrum, fermentum urna sed, tempor lectus. Sed fermentum dui nec sapien blandit scelerisque. Suspendisse vitae tortor ipsum. Ut dapibus porttitor condimentum.\r\n\r\nFusce id aliquam elit, at sagittis magna. Etiam fringilla libero quis felis maximus, ultricies blandit sem bibendum. Cras tempus pulvinar diam non mollis. Ut vehicula risus nunc, eget condimentum purus facilisis non. Vestibulum id molestie enim. Quisque blandit vel elit eget cursus. Donec ultricies metus non fermentum efficitur.', 11),
(18, 'teste', './assets/imgs/posts/1700746094.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pulvinar orci nec purus tristique feugiat. Quisque eget dui vel turpis iaculis ornare ac at odio. Praesent aliquet massa in dapibus mattis. Aliquam tincidunt dolor velit, ac vestibulum ipsum aliquam id. Pellentesque quam ex, semper at mollis non, tempus nec metus. Praesent ornare interdum ullamcorper. Phasellus ullamcorper aliquet varius. Praesent aliquet justo vitae risus condimentum accumsan. Proin ut odio vitae ante eleifend eleifend sit amet at quam. Vestibulum et tincidunt leo. Proin eget euismod justo. Nunc dapibus eros id ante posuere, quis laoreet dui pharetra. Nullam iaculis purus nulla, ut tempor lectus viverra ut. Fusce ac risus efficitur, mattis lectus ac, mattis erat. Curabitur faucibus ante sed nisi feugiat volutpat. Curabitur sollicitudin mauris ac mauris fringilla, a ultrices sapien suscipit.\r\n\r\nDonec auctor eros id urna commodo, quis efficitur augue semper. Curabitur vestibulum sem dui, quis accumsan sapien placerat tristique. Sed sit amet ante justo. Nam velit augue, eleifend placerat porttitor non, feugiat sit amet lectus. Nullam congue massa a mi aliquet ullamcorper. Nullam volutpat feugiat purus. Sed laoreet velit ut ornare suscipit. Suspendisse porta erat tortor, sit amet suscipit nisl facilisis nec.\r\n\r\nUt dictum tellus sed nulla efficitur, id eleifend felis hendrerit. Integer vel porta nulla. Morbi vel dolor quis eros vestibulum iaculis non eu lacus. Pellentesque consequat vehicula ex at eleifend. Pellentesque nec lectus eu elit ullamcorper ornare quis eu dui. Duis pulvinar leo dolor, in lacinia metus fermentum ut. Mauris sed sodales neque, in maximus lacus.\r\n\r\nFusce suscipit eget turpis at vulputate. Suspendisse malesuada, ipsum eget egestas dapibus, tellus urna placerat purus, et mollis eros neque non turpis. Proin fermentum accumsan mauris ut cursus. Nullam vitae sapien rutrum, fermentum urna sed, tempor lectus. Sed fermentum dui nec sapien blandit scelerisque. Suspendisse vitae tortor ipsum. Ut dapibus porttitor condimentum.\r\n\r\nFusce id aliquam elit, at sagittis magna. Etiam fringilla libero quis felis maximus, ultricies blandit sem bibendum. Cras tempus pulvinar diam non mollis. Ut vehicula risus nunc, eget condimentum purus facilisis non. Vestibulum id molestie enim. Quisque blandit vel elit eget cursus. Donec ultricies metus non fermentum efficitur.', 12),
(19, 'teste', './assets/imgs/posts/1700746105.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pulvinar orci nec purus tristique feugiat. Quisque eget dui vel turpis iaculis ornare ac at odio. Praesent aliquet massa in dapibus mattis. Aliquam tincidunt dolor velit, ac vestibulum ipsum aliquam id. Pellentesque quam ex, semper at mollis non, tempus nec metus. Praesent ornare interdum ullamcorper. Phasellus ullamcorper aliquet varius. Praesent aliquet justo vitae risus condimentum accumsan. Proin ut odio vitae ante eleifend eleifend sit amet at quam. Vestibulum et tincidunt leo. Proin eget euismod justo. Nunc dapibus eros id ante posuere, quis laoreet dui pharetra. Nullam iaculis purus nulla, ut tempor lectus viverra ut. Fusce ac risus efficitur, mattis lectus ac, mattis erat. Curabitur faucibus ante sed nisi feugiat volutpat. Curabitur sollicitudin mauris ac mauris fringilla, a ultrices sapien suscipit.\r\n\r\nDonec auctor eros id urna commodo, quis efficitur augue semper. Curabitur vestibulum sem dui, quis accumsan sapien placerat tristique. Sed sit amet ante justo. Nam velit augue, eleifend placerat porttitor non, feugiat sit amet lectus. Nullam congue massa a mi aliquet ullamcorper. Nullam volutpat feugiat purus. Sed laoreet velit ut ornare suscipit. Suspendisse porta erat tortor, sit amet suscipit nisl facilisis nec.\r\n\r\nUt dictum tellus sed nulla efficitur, id eleifend felis hendrerit. Integer vel porta nulla. Morbi vel dolor quis eros vestibulum iaculis non eu lacus. Pellentesque consequat vehicula ex at eleifend. Pellentesque nec lectus eu elit ullamcorper ornare quis eu dui. Duis pulvinar leo dolor, in lacinia metus fermentum ut. Mauris sed sodales neque, in maximus lacus.\r\n\r\nFusce suscipit eget turpis at vulputate. Suspendisse malesuada, ipsum eget egestas dapibus, tellus urna placerat purus, et mollis eros neque non turpis. Proin fermentum accumsan mauris ut cursus. Nullam vitae sapien rutrum, fermentum urna sed, tempor lectus. Sed fermentum dui nec sapien blandit scelerisque. Suspendisse vitae tortor ipsum. Ut dapibus porttitor condimentum.\r\n\r\nFusce id aliquam elit, at sagittis magna. Etiam fringilla libero quis felis maximus, ultricies blandit sem bibendum. Cras tempus pulvinar diam non mollis. Ut vehicula risus nunc, eget condimentum purus facilisis non. Vestibulum id molestie enim. Quisque blandit vel elit eget cursus. Donec ultricies metus non fermentum efficitur.', 12),
(20, 'teste', './assets/imgs/posts/1700746121.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pulvinar orci nec purus tristique feugiat. Quisque eget dui vel turpis iaculis ornare ac at odio. Praesent aliquet massa in dapibus mattis. Aliquam tincidunt dolor velit, ac vestibulum ipsum aliquam id. Pellentesque quam ex, semper at mollis non, tempus nec metus. Praesent ornare interdum ullamcorper. Phasellus ullamcorper aliquet varius. Praesent aliquet justo vitae risus condimentum accumsan. Proin ut odio vitae ante eleifend eleifend sit amet at quam. Vestibulum et tincidunt leo. Proin eget euismod justo. Nunc dapibus eros id ante posuere, quis laoreet dui pharetra. Nullam iaculis purus nulla, ut tempor lectus viverra ut. Fusce ac risus efficitur, mattis lectus ac, mattis erat. Curabitur faucibus ante sed nisi feugiat volutpat. Curabitur sollicitudin mauris ac mauris fringilla, a ultrices sapien suscipit.\r\n\r\nDonec auctor eros id urna commodo, quis efficitur augue semper. Curabitur vestibulum sem dui, quis accumsan sapien placerat tristique. Sed sit amet ante justo. Nam velit augue, eleifend placerat porttitor non, feugiat sit amet lectus. Nullam congue massa a mi aliquet ullamcorper. Nullam volutpat feugiat purus. Sed laoreet velit ut ornare suscipit. Suspendisse porta erat tortor, sit amet suscipit nisl facilisis nec.\r\n\r\nUt dictum tellus sed nulla efficitur, id eleifend felis hendrerit. Integer vel porta nulla. Morbi vel dolor quis eros vestibulum iaculis non eu lacus. Pellentesque consequat vehicula ex at eleifend. Pellentesque nec lectus eu elit ullamcorper ornare quis eu dui. Duis pulvinar leo dolor, in lacinia metus fermentum ut. Mauris sed sodales neque, in maximus lacus.\r\n\r\nFusce suscipit eget turpis at vulputate. Suspendisse malesuada, ipsum eget egestas dapibus, tellus urna placerat purus, et mollis eros neque non turpis. Proin fermentum accumsan mauris ut cursus. Nullam vitae sapien rutrum, fermentum urna sed, tempor lectus. Sed fermentum dui nec sapien blandit scelerisque. Suspendisse vitae tortor ipsum. Ut dapibus porttitor condimentum.\r\n\r\nFusce id aliquam elit, at sagittis magna. Etiam fringilla libero quis felis maximus, ultricies blandit sem bibendum. Cras tempus pulvinar diam non mollis. Ut vehicula risus nunc, eget condimentum purus facilisis non. Vestibulum id molestie enim. Quisque blandit vel elit eget cursus. Donec ultricies metus non fermentum efficitur.', 12),
(21, 'teste', './assets/imgs/posts/1700746149.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pulvinar orci nec purus tristique feugiat. Quisque eget dui vel turpis iaculis ornare ac at odio. Praesent aliquet massa in dapibus mattis. Aliquam tincidunt dolor velit, ac vestibulum ipsum aliquam id. Pellentesque quam ex, semper at mollis non, tempus nec metus. Praesent ornare interdum ullamcorper. Phasellus ullamcorper aliquet varius. Praesent aliquet justo vitae risus condimentum accumsan. Proin ut odio vitae ante eleifend eleifend sit amet at quam. Vestibulum et tincidunt leo. Proin eget euismod justo. Nunc dapibus eros id ante posuere, quis laoreet dui pharetra. Nullam iaculis purus nulla, ut tempor lectus viverra ut. Fusce ac risus efficitur, mattis lectus ac, mattis erat. Curabitur faucibus ante sed nisi feugiat volutpat. Curabitur sollicitudin mauris ac mauris fringilla, a ultrices sapien suscipit.\r\n\r\nDonec auctor eros id urna commodo, quis efficitur augue semper. Curabitur vestibulum sem dui, quis accumsan sapien placerat tristique. Sed sit amet ante justo. Nam velit augue, eleifend placerat porttitor non, feugiat sit amet lectus. Nullam congue massa a mi aliquet ullamcorper. Nullam volutpat feugiat purus. Sed laoreet velit ut ornare suscipit. Suspendisse porta erat tortor, sit amet suscipit nisl facilisis nec.\r\n\r\nUt dictum tellus sed nulla efficitur, id eleifend felis hendrerit. Integer vel porta nulla. Morbi vel dolor quis eros vestibulum iaculis non eu lacus. Pellentesque consequat vehicula ex at eleifend. Pellentesque nec lectus eu elit ullamcorper ornare quis eu dui. Duis pulvinar leo dolor, in lacinia metus fermentum ut. Mauris sed sodales neque, in maximus lacus.\r\n\r\nFusce suscipit eget turpis at vulputate. Suspendisse malesuada, ipsum eget egestas dapibus, tellus urna placerat purus, et mollis eros neque non turpis. Proin fermentum accumsan mauris ut cursus. Nullam vitae sapien rutrum, fermentum urna sed, tempor lectus. Sed fermentum dui nec sapien blandit scelerisque. Suspendisse vitae tortor ipsum. Ut dapibus porttitor condimentum.\r\n\r\nFusce id aliquam elit, at sagittis magna. Etiam fringilla libero quis felis maximus, ultricies blandit sem bibendum. Cras tempus pulvinar diam non mollis. Ut vehicula risus nunc, eget condimentum purus facilisis non. Vestibulum id molestie enim. Quisque blandit vel elit eget cursus. Donec ultricies metus non fermentum efficitur.', 12),
(22, 'teste', './assets/imgs/posts/1700746167.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pulvinar orci nec purus tristique feugiat. Quisque eget dui vel turpis iaculis ornare ac at odio. Praesent aliquet massa in dapibus mattis. Aliquam tincidunt dolor velit, ac vestibulum ipsum aliquam id. Pellentesque quam ex, semper at mollis non, tempus nec metus. Praesent ornare interdum ullamcorper. Phasellus ullamcorper aliquet varius. Praesent aliquet justo vitae risus condimentum accumsan. Proin ut odio vitae ante eleifend eleifend sit amet at quam. Vestibulum et tincidunt leo. Proin eget euismod justo. Nunc dapibus eros id ante posuere, quis laoreet dui pharetra. Nullam iaculis purus nulla, ut tempor lectus viverra ut. Fusce ac risus efficitur, mattis lectus ac, mattis erat. Curabitur faucibus ante sed nisi feugiat volutpat. Curabitur sollicitudin mauris ac mauris fringilla, a ultrices sapien suscipit.\r\n\r\nDonec auctor eros id urna commodo, quis efficitur augue semper. Curabitur vestibulum sem dui, quis accumsan sapien placerat tristique. Sed sit amet ante justo. Nam velit augue, eleifend placerat porttitor non, feugiat sit amet lectus. Nullam congue massa a mi aliquet ullamcorper. Nullam volutpat feugiat purus. Sed laoreet velit ut ornare suscipit. Suspendisse porta erat tortor, sit amet suscipit nisl facilisis nec.\r\n\r\nUt dictum tellus sed nulla efficitur, id eleifend felis hendrerit. Integer vel porta nulla. Morbi vel dolor quis eros vestibulum iaculis non eu lacus. Pellentesque consequat vehicula ex at eleifend. Pellentesque nec lectus eu elit ullamcorper ornare quis eu dui. Duis pulvinar leo dolor, in lacinia metus fermentum ut. Mauris sed sodales neque, in maximus lacus.\r\n\r\nFusce suscipit eget turpis at vulputate. Suspendisse malesuada, ipsum eget egestas dapibus, tellus urna placerat purus, et mollis eros neque non turpis. Proin fermentum accumsan mauris ut cursus. Nullam vitae sapien rutrum, fermentum urna sed, tempor lectus. Sed fermentum dui nec sapien blandit scelerisque. Suspendisse vitae tortor ipsum. Ut dapibus porttitor condimentum.\r\n\r\nFusce id aliquam elit, at sagittis magna. Etiam fringilla libero quis felis maximus, ultricies blandit sem bibendum. Cras tempus pulvinar diam non mollis. Ut vehicula risus nunc, eget condimentum purus facilisis non. Vestibulum id molestie enim. Quisque blandit vel elit eget cursus. Donec ultricies metus non fermentum efficitur.', 12),
(23, 'teste', './assets/imgs/posts/1700746179.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pulvinar orci nec purus tristique feugiat. Quisque eget dui vel turpis iaculis ornare ac at odio. Praesent aliquet massa in dapibus mattis. Aliquam tincidunt dolor velit, ac vestibulum ipsum aliquam id. Pellentesque quam ex, semper at mollis non, tempus nec metus. Praesent ornare interdum ullamcorper. Phasellus ullamcorper aliquet varius. Praesent aliquet justo vitae risus condimentum accumsan. Proin ut odio vitae ante eleifend eleifend sit amet at quam. Vestibulum et tincidunt leo. Proin eget euismod justo. Nunc dapibus eros id ante posuere, quis laoreet dui pharetra. Nullam iaculis purus nulla, ut tempor lectus viverra ut. Fusce ac risus efficitur, mattis lectus ac, mattis erat. Curabitur faucibus ante sed nisi feugiat volutpat. Curabitur sollicitudin mauris ac mauris fringilla, a ultrices sapien suscipit.\r\n\r\nDonec auctor eros id urna commodo, quis efficitur augue semper. Curabitur vestibulum sem dui, quis accumsan sapien placerat tristique. Sed sit amet ante justo. Nam velit augue, eleifend placerat porttitor non, feugiat sit amet lectus. Nullam congue massa a mi aliquet ullamcorper. Nullam volutpat feugiat purus. Sed laoreet velit ut ornare suscipit. Suspendisse porta erat tortor, sit amet suscipit nisl facilisis nec.\r\n\r\nUt dictum tellus sed nulla efficitur, id eleifend felis hendrerit. Integer vel porta nulla. Morbi vel dolor quis eros vestibulum iaculis non eu lacus. Pellentesque consequat vehicula ex at eleifend. Pellentesque nec lectus eu elit ullamcorper ornare quis eu dui. Duis pulvinar leo dolor, in lacinia metus fermentum ut. Mauris sed sodales neque, in maximus lacus.\r\n\r\nFusce suscipit eget turpis at vulputate. Suspendisse malesuada, ipsum eget egestas dapibus, tellus urna placerat purus, et mollis eros neque non turpis. Proin fermentum accumsan mauris ut cursus. Nullam vitae sapien rutrum, fermentum urna sed, tempor lectus. Sed fermentum dui nec sapien blandit scelerisque. Suspendisse vitae tortor ipsum. Ut dapibus porttitor condimentum.\r\n\r\nFusce id aliquam elit, at sagittis magna. Etiam fringilla libero quis felis maximus, ultricies blandit sem bibendum. Cras tempus pulvinar diam non mollis. Ut vehicula risus nunc, eget condimentum purus facilisis non. Vestibulum id molestie enim. Quisque blandit vel elit eget cursus. Donec ultricies metus non fermentum efficitur.', 12),
(24, 'teste', './assets/imgs/posts/1700746661.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pulvinar orci nec purus tristique feugiat. Quisque eget dui vel turpis iaculis ornare ac at odio. Praesent aliquet massa in dapibus mattis. Aliquam tincidunt dolor velit, ac vestibulum ipsum aliquam id. Pellentesque quam ex, semper at mollis non, tempus nec metus. Praesent ornare interdum ullamcorper. Phasellus ullamcorper aliquet varius. Praesent aliquet justo vitae risus condimentum accumsan. Proin ut odio vitae ante eleifend eleifend sit amet at quam. Vestibulum et tincidunt leo. Proin eget euismod justo. Nunc dapibus eros id ante posuere, quis laoreet dui pharetra. Nullam iaculis purus nulla, ut tempor lectus viverra ut. Fusce ac risus efficitur, mattis lectus ac, mattis erat. Curabitur faucibus ante sed nisi feugiat volutpat. Curabitur sollicitudin mauris ac mauris fringilla, a ultrices sapien suscipit.\r\n\r\nDonec auctor eros id urna commodo, quis efficitur augue semper. Curabitur vestibulum sem dui, quis accumsan sapien placerat tristique. Sed sit amet ante justo. Nam velit augue, eleifend placerat porttitor non, feugiat sit amet lectus. Nullam congue massa a mi aliquet ullamcorper. Nullam volutpat feugiat purus. Sed laoreet velit ut ornare suscipit. Suspendisse porta erat tortor, sit amet suscipit nisl facilisis nec.\r\n\r\nUt dictum tellus sed nulla efficitur, id eleifend felis hendrerit. Integer vel porta nulla. Morbi vel dolor quis eros vestibulum iaculis non eu lacus. Pellentesque consequat vehicula ex at eleifend. Pellentesque nec lectus eu elit ullamcorper ornare quis eu dui. Duis pulvinar leo dolor, in lacinia metus fermentum ut. Mauris sed sodales neque, in maximus lacus.\r\n\r\nFusce suscipit eget turpis at vulputate. Suspendisse malesuada, ipsum eget egestas dapibus, tellus urna placerat purus, et mollis eros neque non turpis. Proin fermentum accumsan mauris ut cursus. Nullam vitae sapien rutrum, fermentum urna sed, tempor lectus. Sed fermentum dui nec sapien blandit scelerisque. Suspendisse vitae tortor ipsum. Ut dapibus porttitor condimentum.\r\n\r\nFusce id aliquam elit, at sagittis magna. Etiam fringilla libero quis felis maximus, ultricies blandit sem bibendum. Cras tempus pulvinar diam non mollis. Ut vehicula risus nunc, eget condimentum purus facilisis non. Vestibulum id molestie enim. Quisque blandit vel elit eget cursus. Donec ultricies metus non fermentum efficitur.', 12);

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` enum('admin','editor') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `user_type`) VALUES
(11, 'admin', 'admin@email.com', '$2y$10$XbG8NES8FQh2hIRkoj7MPO5/B83k7XuJr4ImzeCpU6zlCu7vecBP2', 'admin'),
(12, 'editor', 'editor@email.com', '$2y$10$7H/P3V6B7U1eCoUYs2sLP.Nsv08a9n/jpEoAr9EyO.xnAN0gJ/lnC', 'editor');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `comentaries`
--
ALTER TABLE `comentaries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Índices de tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `comentaries`
--
ALTER TABLE `comentaries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `comentaries`
--
ALTER TABLE `comentaries`
  ADD CONSTRAINT `comentaries_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `comentaries_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Restrições para tabelas `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
