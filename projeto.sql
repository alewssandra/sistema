CREATE DATABASE IF NOT EXISTS `sistema` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sistema`;

CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `cadastro` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'teste', 'ale@gmail.com', '123456');

ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;
